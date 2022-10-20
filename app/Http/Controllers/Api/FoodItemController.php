<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FoodItemController extends Controller
{
    /**
     * Display the food items (menu) of a specific restaurant.
     *
     * @param  int  $id of the restaurant
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $foodItems = DB::table('food_items')
                        ->select('name', 'description', 'image_path','price', 'availability')
                        ->where('food_items.user_id', $id)
                        ->get();
        
        if($foodItems){
            return response()->json([
                'response' => true,
                'results' => [
                    'data' => $foodItems
                ]]);
        }
        else return response('', 404);
    }
}
