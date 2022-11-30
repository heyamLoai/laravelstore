<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class CategoryController extends Controller
{
    public  function index()
    {
      $category = Category::all();
       return view('admin.category.index' ,compact('category'));
    }
    public  function add()
    { 
      $product=Product::all();
       return view('admin.category.add'); 
    }
    
    public  function insert(Request $request)
    {
       $category = new Category();
       if($request->hasFile('image'))
       {
         $file = $request->file('image');
         $extention = $file->getClientOriginalExtension();  // $ext
         $filename= time().'.'.$extention;
         $file->move('assets/uploads/category',$filename);
         $category->image = $filename; // to store in DB
       }

        $category->name = $request->input('name');
        $category->slug = $request->input('slug');
        $category->description = $request->input('description');
        $category->status = $request->input('status') == TRUE ? '1':'0';
        $category->popular = $request->input('popular') == TRUE ? '1':'0';
        $category->meta_tittle = $request->input('meta_tittle');
        $category->meta_keywords = $request->input('meta_keywords');
        $category->meta_descrip = $request->input('meta_description');
        $category->save();
        return redirect('/dashboard')->with('status',"Category Added Successfully");

    }

    public function edit($id){

      $category = Category::find($id);
      return view('admin.category.edit', compact('category'));
    }

    public function update(Request $request, $id){

      $category = Category::find($id);
      if($request->hasFile('image'))
      {
        $path = 'assets/uploads/category/' .$category->image;
        if(File::exists($path))
        {
            File::delete($path);
        }
         $file = $request->file('image');
         $extention = $file->getClientOriginalExtension();  // $ext
         $filename= time().'.'.$extention;
         $file->move('assets/uploads/category',$filename);
         $category->image = $filename; // to store in DB
      }
      $category->name = $request->input('name');
      $category->slug = $request->input('slug');
      $category->description = $request->input('description');
      $category->status = $request->input('status') == TRUE ? '1':'0';
      $category->popular = $request->input('popular') == TRUE ? '1':'0';
      $category->meta_tittle = $request->input('meta_tittle');
      $category->meta_keywords = $request->input('meta_keywords');
      $category->meta_descrip = $request->input('meta_description');
      $category->update();
      return redirect('dashboard')->with('status',"Category Updated Successfully");
    }



    public function destroy($id){
        $category = Category::find($id);
        if($category->image){ 
          $path = 'assets/uploads/category'.$category->image;
          if(File::exists($path))
          {
            File::delete($path);
          }
        }
        $category->delete();
        return redirect('categories')->with('status',"Category Deleted Successfully");

    }

}
