<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;

class CheckoutController extends Controller
{
    public function index(){

        $cartitem = Cart::where('user_id' , Auth::id())->get();
        return view('frontend.checkout' , compact('cartitem'));
    }
}

