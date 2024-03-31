<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        
        $news_products = Product::orderBy('id', 'DESC')->limit(4)->get();
        $sale_products = Product::orderBy('created_at', 'DESC')->where('sale_price','>', 0)->limit(3)->get();
        $feature_products = Product::inRandomOrder()->limit(4)->get();
        $carts = Cart::where('customer_id', auth('cus')->id())->get();

        $cartTotalItems = Cart::where('customer_id', auth('cus')->id())->count();
        //total price
        $totalPrice = 0; // Khởi tạo biến tổng giá
        foreach ($carts as $item) {
        $totalPrice += $item->price * $item->quantity;
        }
       
        return view('home.index',compact('news_products','sale_products','feature_products','carts','cartTotalItems','totalPrice'));
       
    }

    public function product (Product $product)  {
        $products = Product::where('category_id', $product->category_id)->limit(12)->get();
        return view('home.product', compact('product','products'));
    }

    public function contact(){
        return view('home.contact');
    }

    public function blog(){
        return view('home.blog');
    }
    
    

}
