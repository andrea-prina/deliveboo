<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\orderAcceptedMail;
use App\Mail\orderMail;
use App\Models\Order;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

        $restaurant = User::find($foodItems[0]->restaurantId);
        
       
         Mail::to($restaurant->email)->send(new orderAcceptedMail($order, $foodItems));
         // Send email to user
         Mail::to($request->customer_email)->send(new orderMail($order, $restaurant, $foodItems));

    }

    
}
