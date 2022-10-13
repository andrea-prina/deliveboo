<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;


class UserController extends Controller
{
    /**
     * Display the information of the logged user
     */
    public function show()
    {
        $user = User::where('id', Auth::id())->first();
        return view('admin.users.dashboard', compact('user'));
    }

    /**
     * Allow the logged user to modify its information (except for log in credentials)
     */

    //TODO edit only on the free delivery
    public function edit()
    {
        $user = User::where('id', Auth::id())->first();
        return view('admin.users.edit', compact('user'));
    }

    public function changeFreeDeliveryStatus(Request $request)
    {
        $user = User::find($request->id);
        $user->free_delivery = $request->status;
        $user->save();
        return response()->json(['success'=>'Status change successfully.']);
    }
}
