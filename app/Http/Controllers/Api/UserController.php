<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display the list of all restaurants. If no params are passed, it is a index of all restaurants.
     * It is possible to pass as one, both or none of the parameters in the request 
     * @param  Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $restaurantName = $request->query('name'); // String parameter
        $restaurantType = $request->query('type'); // String parameter

        $query = DB::table('users')
                    ->join('type_user', 'users.id', '=', 'type_user.user_id')
                    ->join('types', 'type_user.type_id', '=', 'types.id');
        
        if($restaurantName) {
            $query->where('restaurant_name', 'LIKE', '%' . $restaurantName . '%');

            if($restaurantType) {
                $query->where('type_name', '=', $restaurantType);
            }
        
        } else if ($restaurantType) {
            $query->where('type_name', '=', $restaurantType);
        }

        $result= $query->select('users.restaurant_name', 'users.delivery_fee', 'users.free_delivery', 'users.image_path', 'types.type_name')->get();
        
        if($result){
            return response()->json([
                'response' => true,
                'results' => [
                    'data' => $result
                ]]);
        } else return response('', 404);
    }



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
