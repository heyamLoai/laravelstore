<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;
use App\Models\User;
use App\Models\OrderItem;
use App\Models\Product;


class CheckoutController extends Controller
{
    public function index(){

        $old_cartitems = Cart::where('user_id' , Auth::id())->get();
        foreach($old_cartitems as $item) 
        {
            if(!Product::where('id', $item->prod_id)->where('quantity', '>=' , $item->prod_qty)->exists())
            {
                $removeItem = Cart::where('user_id', Auth::id())->where('prod_id', $item->prod_id)->first();
                $removeItem->delete();
            }
        }
        $cartitems = Cart::where('user_id' , Auth::id())->get();

        return view('frontend.checkout' , compact('cartitems'));
    }

    public  function placeoreder(Request $request)
    {
        $order = new Order();
        $order->fname = $request->input('fname');
        $order->lname = $request->input('lname');
        $order->email = $request->input('email');
        $order->phone = $request->input('phone');
        $order->address = $request->input('address');
        $order->city = $request->input('city');
        $order->state = $request->input('state');
        $order->country = $request->input('country');
        $order->pincode = $request->input('pincode');
        $order->tracking_no = 'Heyam '.rand(1000,9999);
        $order->save();

        $order->id;

        $cartitems = Cart::where('user_id' , Auth::id())->get();
        foreach($cartitems as $item )
        {
            OrderItem::create([
                'order_id' => $order->id,
                'prod_id' => $item->prod_id,
                'quantity' => $item->prod_qty,
                'price' => $item->products->selling_price,
            ]);
        }

        if(Auth::user()->address == Null)
        {
            $user = User::where('id' , Auth::id())->first();
            $user->name = $request->input('fname');
            $user->lname = $request->input('lname');
            $user->email = $request->input('email');
            $user->phone = $request->input('phone');
            $user->address = $request->input('address');
            $user->city = $request->input('city');
            $user->state = $request->input('state');
            $user->country = $request->input('country');
            $user->pincode = $request->input('pincode'); 
            $user->update();
        }
    }
}


