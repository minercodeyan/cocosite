<?php

namespace App\Http\Controllers;

use App\Models\Goods;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function makeOrder(Request $request){

        $products = json_decode($request->post('order'));

        if($products && count($products)){
            $order = new Order();

            $order->user_id = auth()->user()->id;

            $order->number = rand(10000,99999);

            $order->save();

            foreach ($products as $goods){
                $goods = new Goods();
                $goods->product_id = $goods->id;
                $goods->order_id = $order->id;
                $goods->count = 1;
                $goods->save();

            }
        }



        return redirect()->back()->with('order',true) ;
    }
}
