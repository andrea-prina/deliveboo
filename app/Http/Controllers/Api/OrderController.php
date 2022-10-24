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

        $order->fill($data);
        $order->order_price = $data['total'];
        $foodItems = json_decode($data['foodItems']);
        $order->user_id = $foodItems[0]->restaurantId;
        $order->save();
        
        foreach ($foodItems as $foodItem) {
            $order->food_items()->attach($foodItem->id, ['food_quantity' => $foodItem->quantity]);
        }

        $customerName = $order->customer_firstName;

        return view('guest.completedOrder', compact('customerName'));
    }
}
