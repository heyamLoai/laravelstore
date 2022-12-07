<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Admin\OrderController;








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






Route::get('/', 'App\Http\Controllers\Frontend\FrontendController@index');
// Route::get('category',[FrontendController::class], 'category');
Route::get('category','App\Http\Controllers\Frontend\FrontendController@category');
Route::get('view-category/{slug}','App\Http\Controllers\Frontend\FrontendController@viewcategory');
Route::get('category/{cate_slug}/{prod_slug}','App\Http\Controllers\Frontend\FrontendController@productview');


Route::post('add-to-cart', [CartController::class ,'addProduct']);
Route::post('delete-cart-item',[CartController::class ,'deleteproduct']);
Route::post('update-cart',[CartController::class ,'updatecart']);


Route::middleware(['auth'])->group( function(){
    Route::get ('cart', 'App\Http\Controllers\Frontend\CartController@viewcart');
    Route::get ('checkout', 'App\Http\Controllers\Frontend\CheckoutController@index');
    Route::post ('place-oreder', 'App\Http\Controllers\Frontend\CheckoutController@placeoreder');
    Route::get('my-orders',[UserController::class ,'index']);
    Route::get('view-order/{id}',[UserController::class ,'view']);



});

Route::get('product-list',[FrontendController::class, 'productlistAjax']);
Route::post('searchproduct',[FrontendController::class, 'searchproduct']);

Auth::routes();

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
    Route::get('delete-product/{id}','App\Http\Controllers\Admin\ProductController@destroy');

    Route::get('users',[FrontendController::class, 'users']);
    Route::get('orders',[OrderController::class, 'index']);
    Route::get('admin/view-order/{id}',[OrderController::class, 'view']);
    Route::put('update-order/{id}',[OrderController::class, 'updateorder']);
    Route::get('order-history',[OrderController::class, 'orderhistory']);





}); 
