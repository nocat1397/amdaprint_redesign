<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->role->name == "Admin"){
            $total = Order::where('payment_status', '=', 'paid')->get()->count();
            $new = Order::where('orderstatus_id', 1)->where('payment_status', '=', 'paid')->get()->count();
            $accept = Order::where('orderstatus_id', 2)->where('payment_status', '=', 'paid')->get()->count();
            $dispatch = Order::where('orderstatus_id', 3)->where('payment_status', '=', 'paid')->get()->count();
            $deliver = Order::where('orderstatus_id', 4)->where('payment_status', '=', 'paid')->get()->count();
            $decline = Order::where('orderstatus_id', 9)->where('payment_status', '=', 'paid')->get()->count();
            return view('home',compact('total','new','accept','dispatch','deliver','decline'));
        } else {
            return redirect('/home');
        }
    }  
}
