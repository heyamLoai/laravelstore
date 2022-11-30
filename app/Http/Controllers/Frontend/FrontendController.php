<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;


class FrontendController extends Controller
{
    public function index(){
        $productdetails = Product::where('trending','1')->take(5)->get();
        return view('frontend.index',compact('productdetails'));
    }

    public function category(){
        $category= Category::where('ststuse','0')->get ();
        return view('frontend.category', compact('category'));
    }




}

    
