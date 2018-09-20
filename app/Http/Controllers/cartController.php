<?php

namespace App\Http\Controllers;

use App\cart;
use App\order;
use App\product;
use Illuminate\Http\Request;

class cartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!session()->has('cart')){
            return view('cart');
        }
        $oldCart = session()->get('cart');
        $cart = new cart($oldCart);
        return view('cart')->with(['products' => $cart->items,'totalPrice' =>$cart->totalPrice]);

    }


    public function getAddTo(Request $request,$id)
    {
        $product = product::find($id);
        $oldCart = session()->has('cart')? session()->get('cart') : null;
        $cart = new cart($oldCart);
        $cart->add($product,$product->id);

        $request->session()->put('cart',$cart);

        return redirect()->route('allproduct');
    }

    public function getReduceByOne($id){
        $oldCart = session()->has('cart')? session()->get('cart') : null;
        $cart = new cart($oldCart);
        $cart->reduceByOne($id);
        if (count($cart->items) > 0) {
            session()->put('cart', $cart);
        }else{
            session()->forget('cart');
        }
        return redirect()->route('cart');
    }

    public function removeItem($id){
        $oldCart = session()->has('cart')? session()->get('cart') : null;
        $cart = new cart($oldCart);
        $cart->removeItem($id);
        if (count($cart->items) > 0) {
            session()->put('cart', $cart);
        }else{
            session()->forget('cart');
        }
        return redirect()->route('cart');
    }


    public function checkout(){
        if (!session()->has('cart')){
            return view('cart');
        }
        $oldCart = session('cart');
        $cart = new cart($oldCart);
        $total = $cart->totalPrice;
        return view('checkout',compact('total'));
    }



    public function postorder(){
        $oldCart = session('cart');
        $cart = new cart($oldCart);
        $order = new order();
        $order->cart = serialize($cart);
        $order->name = \request('name');
        $order->address = \request('address');
        $order->phone = \request('phone');
        $order->user_id = 5;
        $order->save();
        session()->forget('cart');
       return redirect('/');
    }
}
