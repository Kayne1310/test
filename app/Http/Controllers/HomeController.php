<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        
        $news_products = Product::orderBy('id', 'DESC')->limit(4)->get();
        $sale_products = Product::orderBy('created_at', 'DESC')->where('sale_price','>', 0)->limit(3)->get();
        $feature_products = Product::inRandomOrder()->limit(4)->get();
       
       
        return view('home.index',compact('news_products','sale_products','feature_products'));
       
    }

    public function product (Product $product)  {
        $products = Product::where('category_id', $product->category_id)->limit(12)->get();
        return view('home.product', compact('product','products'));
    }

    public function contact(){
        return view('home.contact');
    }
    
    

}
