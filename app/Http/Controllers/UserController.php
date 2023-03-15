<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function user(Request $request) {
        // return $request;
        
        $purchaser = new User;
        $purchaser->name = $request->name;
        $purchaser->mobile = $request->mobile;
        $purchaser->email = $request->email;
        $purchaser->password = Hash::make($request->password);
        $purchaser->address = $request->address;
        $purchaser->city = $request->city;
        $purchaser->pincode = $request->pincode;
        $purchaser->role_id = 2;
        $purchaser->save();
        Auth::login($purchaser);
        return redirect('/');
    }

    public function details() {
        $user = Auth::user();
        return response($user);
    }
    public function login(Request $request)
    {
        if (Auth::attempt(array('email' => $request->email, 'password' => $request->password)))
        {
            return response(1);
        } else {        
            return response(0);
        }
        $user = User::Where('email','=',$request->email)->first();
        if($user !== null)
        {
            Auth::login($user);
            return response(1);
        } else {
            return response(0);
        }
    }
}
