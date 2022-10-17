<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Type;
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


    public function toggleFree(Request $request)
    {
        $data = $request->all();
        $user = User::where('id', Auth::id())->first();
        $user->free_delivery = $data['free_delivery'];
        $user->save();
        return redirect()->route('admin.show');

    }
}
