<?php

namespace App\Http\Controllers;

use App\Dealer;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DealerController extends Controller
{
    public function index()
    {
        $dealers = Dealer::all();
        return view('admin.dealers.dealers', compact('dealers'));
    }
    public function front()
    {
        $categories = Category::with('product')->has('product')->orderBy('sequence','ASC')->get();
        return view('front-end.dealer.index', compact('categories'));
    }
    public function register()
    {
        $categories = Category::with('product')->has('product')->orderBy('sequence','ASC')->get();
        return view('front-end.dealer.registration', compact('categories'));
    }
    public function store(Request $request)
    {
        // return $request;
        $dealer = new Dealer;
        $dealer->email = $request->email;
        $dealer->passsword = Hash::make($request->password);
        $dealer->company_name = $request->company_name;
        $dealer->company_phone = $request->company_phone;
        $dealer->position = $request->position;
        $dealer->website = $request->website;
        $dealer->mobile = $request->mobile;
        $dealer->fname = $request->fname;
        $dealer->lname = $request->lname;
        $dealer->address = $request->address;
        $dealer->zip = $request->zip;
        $dealer->city = $request->city;
        $dealer->state = $request->state;
        $dealer->country = $request->country;
        $dealer->reseller = $request->reseller;
        $dealer->industry_type = $request->industry_type;
        $dealer->find_us = $request->find_us;
        $dealer->tax_id = $request->tax_id;
        $dealer->save();

        if($cert = $request->file('certificate'))
        {
            $name1=$cert->getClientOriginalName();
            $cert->move('img/dealers/'.$dealer->id.'/', $name1);
            $dealer->update(['certificate'=>$name1]);
            $dealer->save();
        }
        if($lice = $request->file('license'))
        {
            $name2=$lice->getClientOriginalName();
            $lice->move('img/dealers/'.$dealer->id.'/', $name2);
            $dealer->update(['license'=>$name2]);
            $dealer->save();
        }
        return redirect()->back();
    }
}
