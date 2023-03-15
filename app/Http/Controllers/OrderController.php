<?php

namespace App\Http\Controllers;

use App\Order;
use App\Orderstatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function pending() {
        $orders = Order::where('orderstatus_id', 1)->where('payment_status', '=', 'approved')->get()->reverse();
        return view('admin.order.pendingOrders', compact('orders'));
        
    }
    public function accepted() {
        $orders = Order::where('orderstatus_id', 2)->where('payment_status', '=', 'approved')->get()->reverse();
        return view('admin.order.completedOrders', compact('orders'));
    }
    public function dispatched() {
        $orders = Order::where('orderstatus_id', 3)->where('payment_status', '=', 'approved')->get()->reverse();        
        return view('admin.order.dispatchOrders', compact('orders'));
    }
    public function delivered() {
        $orders = Order::where('orderstatus_id', 4)->where('payment_status', '=', 'approved')->get()->reverse();
        return view('admin.order.deliveredOrders', compact('orders'));
    }
    public function cancelled() {
        $orders = Order::where('orderstatus_id', 5)->orWhere('orderstatus_id', 6)->orWhere('orderstatus_id', 7)->orWhere('orderstatus_id', 8)->where('payment_status', '=', 'approved')->get()->reverse();
        return view('admin.order.customerCancelled', compact('orders'));
    }
    public function declined() {
        $orders = Order::where('orderstatus_id', 9)->where('payment_status', '=', 'approved')->get()->reverse();
        return view('admin.order.declinedOrders', compact('orders'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function userOrders()
    {
        $orders = Order::where('user_id', Auth::user()->id)->get();
        return view('front-end.purchaser.orders', compact('orders'));
    }
    public function orderDetails($id) 
    {    
        $order = Order::find($id);
        $statuses = Orderstatus::all();

        return view('admin.order.orderDetails',compact('order','statuses'));
    }
    public function acceptOrder($id) 
    {
        $order = Order::find($id);
        $order->update(['orderstatus_id'=>2]);
        $order->save();
        $details = [
            'title' => 'Order Confirmation',
            'body' => $order->user->name.' Your order is confirmed.'
        ];
       
        // $mail = Mail::to($order->user->email)->send(new \App\Mail\Mailer($details));
        return redirect()->back();
    }
    public function declineOrder($id) 
    {
        $order = Order::find($id);
        $order->update(['orderstatus_id'=>9]);
        $order->save();
        $details = [
            'title' => 'Order Cancelled',
            'body' => $order->user->name.' Your order has been cancelled.'
        ];
       
        // $mail = Mail::to($order->user->email)->send(new \App\Mail\Mailer($details));
        return redirect()->back();
    }
    public function updateStatus($o_id,$s_id) 
    {
        // return $o_id;
        // exit;
        $status = Orderstatus::find($s_id);
        $order = Order::find($o_id);
        $order->update(['orderstatus_id'=>$s_id]);
        $order->save();
        $details = [
            'title' => 'Order '.$status->name,
            'body' => $order->user->name.' Your order has been '.$status->name.'.'
        ];
       
        // $mail = Mail::to($order->user->email)->send(new \App\Mail\Mailer($details));
        return redirect()->back();
    }
}
