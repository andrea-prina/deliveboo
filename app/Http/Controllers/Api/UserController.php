<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::All();
        if($users){
            return response()->json([
                'response' => true,
                'results' => [
                    'data' => $users
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
