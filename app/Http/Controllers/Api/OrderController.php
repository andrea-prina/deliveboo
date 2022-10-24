<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();
        $order = new Order();
        
        foreach ($data['order_foodItems'] as $foodItem) {
            $order->foodItems()->attach($foodItem->id, ['food_quantity' => $foodItem->quantity]);
        }

        $order->order_totalPrice = $data['order_totalPrice'];
        dd();

        $order->fill($data);

        $order->save();
    }
}
