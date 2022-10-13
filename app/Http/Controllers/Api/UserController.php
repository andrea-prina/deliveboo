<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    
    
    public function index(Request $request){

        $restaurantName = $request->query('name');
        $restaurantType = $request->query('type');

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



    public function show($id)
    {
        $user = User::find($id);
        
        if($user){
            return response()->json([
                'response' => true,
                'results' => [
                    'data' => $user
                ]]);
        }
        else return response('', 404);
    }

}
