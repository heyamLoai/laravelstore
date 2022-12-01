<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;


class FrontendController extends Controller{

    public function index(){
        $category = Category::where('status', '0')->get();
        return view('frontend.category', compact('category'));
    }


    public function category(){
        $featured_products = Product::where('trending', '1')->take(5)->get();
        $trending_category = Category::where('popular', '1')->take(5)->get();

        return view('frontend.index', compact('featured_products', 'trending_category'));
    }

   
    public function viewcategory($slug){


        if(Category::where('slug', $slug)->exists()){
            $category= Category::where('slug', $slug)->first();
            $products = Product::where('cate-id', $category->id)->where('status', '0')->get();
            return view('frontend.products.index',compact('category','products'));
        }else{
            
            return redirect('/')->with('status' , "slug doest exists");
        }
      
    }
    
}

    
