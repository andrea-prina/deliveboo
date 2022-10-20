<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Psy\Command\WhereamiCommand;

class UserController extends Controller
{
    /**
     * Display the list of all restaurants. If no params are passed, it is a index of all restaurants.
     * The possible query strings parameters for apply a filter search are:
     * type[] : one or more restaurant type
     * name : name (or portion of) of the restaurant
     * 
     * @param  Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $restaurantName = $request->query('name'); // String parameter
        $restaurantTypes = $request->query('type'); // String parameter

        $query = DB::table('users')
                    ->select(['id', 'restaurant_name', 'delivery_fee', 'free_delivery', 'image_path']);
        
        if($restaurantTypes){
            
            $restaurantIds = []; //array to contain all arrays of id for each specific restaurant type

            foreach ($restaurantTypes as $type)
            {
                $ids = DB::table('users')
                ->join('type_user', 'users.id', '=', 'type_user.user_id')
                ->join('types', 'type_user.type_id', '=', 'types.id')
                ->where('type_name', $type)
                ->pluck('users.id')->toArray();
                array_push($restaurantIds, $ids);
            }
            
            if (count($restaurantIds) === 1){
                $query = $query->whereIn('users.id', $restaurantIds[0]);
            }
            
            else if (count($restaurantIds) >= 2){
                // intersect the id arrays to keep only those ids appearing in each type (INTERSECTION)
                $restaurantIds = array_intersect(...$restaurantIds);
                $query = $query->whereIn('users.id', $restaurantIds);
            }

            if($restaurantName) {
                // add a filter for the name (if passed)
                $query->where('restaurant_name', 'LIKE', '%' . $restaurantName . '%');
            }
        
        } else if ($restaurantName) {
            // filter for name if there is no filter for type
            $query->where('restaurant_name', 'LIKE', '%' . $restaurantName . '%');
        }

        // complete the query by returning 6 elements per page
        $result = $query->paginate(6);

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
        
        $user = DB::table('users')
        ->select(['restaurant_name', 'delivery_fee', 'free_delivery', 'image_path', 'address'])
        ->where('id', $id)
        ->get();

        if($user){
            return response()->json([
                'response' => true,
                'results' => [
                    'data' => $user
                ]]);
        } else return response('', 404);
    }

}
