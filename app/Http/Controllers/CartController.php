<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
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
        $except = $request->except(['propertyNames','propertyValues']);
        $inputs = $except;
        foreach ($inputs as $key => $value) {
            $names[] = $key; 
        }
        foreach ($request->propertyNames as $value) 
        {
            $property = array_push($names,$value);
        }
        foreach ($inputs as $key => $value) {
            $data[] = $value; 
        }
        foreach ($request->propertyValues as $pValue) 
        {
            $propertyValues = array_push($data,$pValue);
        }

        $cart = new Cart;
        $cart->user_id = Auth::user()->id;
        $cart->product = $request->name;
        $cart->quantity = $request->qty;
        if($request->route >  0)
        {
            $cart->amount = $request->amount+9.99;
        } else {
            $cart->amount = $request->amount;
        }
        $cart->name = $names;
        $cart->data = $data;
        $cart->save();

        return $cart;
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
        $cart = Cart::find($id);
        $cart->delete();
        
        return redirect()->back();
    }
    public function cartCount()
    {
        $cart = Cart::where('user_id',Auth::user()->id)->count();
        return $cart;
    }
}
