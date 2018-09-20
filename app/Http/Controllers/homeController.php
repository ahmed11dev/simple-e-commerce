<?php

namespace App\Http\Controllers;

use App\order;
use App\product;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){

        $orders = order::where('user_id',5)->get();
        $orders->transform(function ($item,$key){
            $item->cart = unserialize($item->cart);
            return $item;
        });
        return view('welcome',compact('orders'));
    }
}
