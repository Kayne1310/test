<?php

namespace App\Http\Controllers;
use App\Mail\ForgotPassword;
use App\Mail\VerifyAccount;
use App\Models\Customer;
use App\Models\CustomerResetToken;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;



class AccountController extends Controller
{
     public function login() {
        return view('account.login');
    }

    public function logout() {
        auth('cus')->logout();
        return redirect()->route('account.login')->with('ok','Your logouted');
    }


    public function check_login(Request $req) {
        
        // $req->validate([
        //     'email' => 'required|exists:customers',
        //     'password' => 'required'
        // ]);
           
       

        $data = $req->only('email','password');

        $check = auth('cus')->attempt($data);

       

        if ($check) {
            // if (auth('cus')->user()->email_verified_at == '') {
            //     auth('cus')->logout();
            //     return redirect()->back()->with('no','You account is not verify, please check email again');
            // }
            
            return redirect()->route('home.index')->with('ok','Welcome back');
        }

        return redirect()->back()->with('no','Your account or password invalid');

    }


    public function register() {
        return view('account.register');
    }


    public function check_register(Request $req) {
        $req->validate([
            'name' => 'required|min:6|max:100',
            'email' => 'required|email|min:6|max:100|unique:customers',
            'password' => 'required|min:4',
            'confirm_password' => 'required|same:password',
        ], [
            'name.required' => 'Họ tên không được để tróng',
            'name.min' => 'Họ ten tối thiểu là 6 ký tự'
        ]);

        $data = $req->only('name','email','phone','address','gender');

        $data['password'] = bcrypt($req->password);
       
        if ($acc = Customer::create($data) ) {
            Mail::to($acc->email)->send(new VerifyAccount($acc));
            return redirect()->route('account.login')->with('ok','Register successfully');
        }

        return redirect()->back()->with('no','Smething error, please try again');

    }

    public function veryfy($email) {
        $acc = Customer::where('email', $email)->whereNUll('email_verified_at')->firstOrFail();
        Customer::where('email', $email)->update(['email_verified_at' => date('Y-m-d')]);
        return redirect()->route('account.login')->with('ok','Verify account successfully, Now you can login');
    }


    public function change_password() {
        return view('account.change_password');
    }


    public function check_change_password(Request $req) {
        $auth = auth('cus')->user();
        $req->validate([
            'old_password' => [
                'required',
                function($attr, $value, $fail) use($auth)  {

                    if (!Hash::check($value, $auth->password) ) {
                        $fail('Your password is not match');
                    }
                }],
            'password' => 'required|min:4',
            'confirm_password' => 'required|same:password'
        ]);

        $data['password'] = bcrypt($req->password);
        $check = $auth->update($data);
        if ($check) {
            auth('cus')->logout();
            return redirect()->route('account.login')->with('ok','Update your password successfuly');
        }
        return redirect()->back()->with('no','Something error, please check agian');

    }


    public function forgot_password() {
        return view('account.forgot_password');
    }


}
