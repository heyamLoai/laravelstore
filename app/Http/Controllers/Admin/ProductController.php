<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\File;


class ProductController extends Controller
{
    //
    public function index(){
        $products = Product::all();

        return view('admin.product.index' ,compact('products'));
    }

    public  function add()
    { 
        $category= Category::all();
       return view('admin.product.add',compact('category'));
    }

    public  function insert(Request $request)
    {
       $products = new Product();
        if($request->hasFile('image'))
       {
         $file = $request->file('image');
         $extention = $file->getClientOriginalExtension();  // $ext
         $filename= time().'.'.$extention;
         $file->move('assets/uploads/products/',$filename);
         $products->image = $filename; // to store in DB
       }

        $products->cate_id = $request->input('cate_id');
        $products->name = $request->input('name');
        $products->slug = $request->input('slug');
        $products->small_descriptuin = $request->input('small_descriptuin');
        $products->descriptuin = $request->input('descriptuin');
        $products->original_price = $request->input('original_price');
        $products->selling_price = $request->input('selling_price');
        $products->tax = $request->input('tax');
        $products->quantity = $request->input('quantity');
        $products->status = $request->input('status') == TRUE ? '1':'0';
        $products->trending = $request->input('trending') == TRUE ? '1':'0';
        $products->meta_tittle = $request->input('meta_tittle');
        $products->meta_keywords = $request->input('meta_keywords');
        $products->meta_description = $request->input('meta_description');
        $products->save();
        return redirect('products')->with('status',"Product Added Successfully");


    }

    public function edit($id){
        $products = Product::find($id);
        return view('admin.product.edit', compact('products'));

    }
    public function update(Request $request, $id){
        $products = Product::find($id);
        if($request->hasFile('image'))
        {
          $path = 'assets/uploads/category/' .$products->image;
          if(File::exists($path))
          {
              File::delete($path);
          }
           $file = $request->file('image');
           $extention = $file->getClientOriginalExtension();  // $ext
           $filename= time().'.'.$extention;
           $file->move('assets/uploads/products',$filename);
           $products->image = $filename; // to store in DB
        }
       
        $products->name = $request->input('name');
        $products->slug = $request->input('slug');
        $products->small_descriptuin = $request->input('small_descriptuin');
        $products->descriptuin = $request->input('descriptuin');
        $products->original_price = $request->input('original_price');
        $products->selling_price = $request->input('selling_price');
        $products->tax = $request->input('tax');
        $products->quantity = $request->input('quantity');
        $products->status = $request->input('status') == TRUE ? '1':'0';
        $products->trending = $request->input('trending') == TRUE ? '1':'0';
        $products->meta_tittle = $request->input('meta_tittle');
        $products->meta_keywords = $request->input('meta_keywords');
        $products->meta_description = $request->input('meta_description'); 
        $products->update();
        return redirect('products')->with('status',"Product Updated Successfully");
    }
   
    public function destroy($id){
        $products = Product::find($id);
        $path = 'assets/uploads/products'.$products->image;
          if(File::exists($path))
          {
            File::delete($path);
          }
        $products->delete();
        return redirect('products')->with('status',"Product Deleted Successfully");

    }


}
