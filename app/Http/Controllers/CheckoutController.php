<?php

namespace App\Http\Controllers;

use App\Mail\OrderMail;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class CheckoutController extends Controller
{
    public function checkout() {
        $carts = Cart::where('customer_id', auth('cus')->id())->get();
        $auth = auth('cus')->user();
        $totalPrice = 0; // Khởi tạo biến tổng giá
        foreach ($carts as $item) {
        $totalPrice += $item->price * $item->quantity;
        }
        return view('home.checkout', compact('auth','carts','totalPrice'));
    }
    public function history() {
        $auth = auth('cus')->user();
        $orders = Order::where('customer_id', auth('cus')->id())->get();
        $carts = Cart::where('customer_id', auth('cus')->id())->get();

        
        return view('home.history', compact('auth','orders','carts'));
    }
    public function detail(Order $order) {
        $auth = auth('cus')->user();
        return view('home.detail', compact('auth','order'));
    }

    public function post_checkout(Request $req) {
        $auth = auth('cus')->user();

        $req->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required'
        ]);


        $data = $req->only('name','email','phone','address');
        $data['customer_id'] = $auth->id;
        // Calculate total price
        $totalPrice = Cart::where('customer_id', $auth->id)->sum('price');

        // Prevent checkout if total price is zero
        if($totalPrice == 0) {
            return redirect()->back()->with('no', 'Total price is zero. Please add items to your cart.');
        }
      
        if($order = Order::create($data)) {
            $token = Str::random(40);

            $carts = Cart::where('customer_id', $auth->id)->get();
            foreach($carts as $cart) {
                $data1 = [
                    'order_id' => $order->id,
                    'product_id' => $cart->product_id,
                    'price' => $cart->price,
                    'quantity' => $cart->quantity
                ];

                OrderDetail::create($data1);
            }

            // $auth->carts()->delete();
            $order->token = $token;
            $order->save();
            Mail::to($auth->email)->send(new OrderMail($order, $token));
            // guwir email xac nhan

            return redirect()->route('home.index')->with('ok','Order checkout successfully');
        }

        return redirect()->route('home.index')->with('no','Something orror, please try again');

    }

    public function verify($token) {
        $order = Order::where('token', $token)->first();
        if ($order) {
            $order->token = null;
            $order->status = 1;
            $order->save();
            return redirect()->route('home.index')->with('ok','Order verify successfully');
        }

        return abort(404);

    }
}
