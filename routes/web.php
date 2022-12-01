<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Frontend\FrontendController;





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/





// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'App\Http\Controllers\Frontend\FrontendController@index');
Route::get('category','App\Http\Controllers\Frontend\FrontendController@category');


Route::get('view-category/{slug}','App\Http\Controllers\Frontend\FrontendController@viewcategory');




Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::get('dashboard', function () {
//     return view('admin.index');
// });

Route::middleware(['auth','isAdmin'])->group(function(){
    Route::get('dashboard', 'App\Http\Controllers\Admin\FrontecndController@index');
    
    Route::get('categories', 'App\Http\Controllers\Admin\CategoryController@index');
    Route::get('add-category', 'App\Http\Controllers\Admin\CategoryController@add');
    Route::post('inset-category', 'App\Http\Controllers\Admin\CategoryController@insert');
    Route::get('edit-category/{id}', 'App\Http\Controllers\Admin\CategoryController@edit');
    Route::put('update-category/{id}', 'App\Http\Controllers\Admin\CategoryController@update');
    Route::get('delete-category/{id}','App\Http\Controllers\Admin\CategoryController@destroy');

    
    Route::get('products', 'App\Http\Controllers\Admin\ProductController@index');
    Route::get('add-products', 'App\Http\Controllers\Admin\ProductController@add');
    Route::post('insert-product','App\Http\Controllers\Admin\ProductController@insert');

    Route::get('edit-product/{id}','App\Http\Controllers\Admin\ProductController@edit');
    Route::Put('update-product/{id}','App\Http\Controllers\Admin\ProductController@update');
    Route::get('delete-product/{id}','App\Http\Controllers\Admin\ProductController@ ');



    




}); 
