<?php

namespace App\Http\Controllers;

use App\Designer;
use App\Upload;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function store(Request $request)
    {
        // return $request;
        if ($file = $request->file('file')) {
                $name=$file->getClientOriginalName();
                $file->move('uploads/'.$request->user_id.'/', $name);
                $upload = new Upload;
                $upload->file = $name;
                $upload->user_id = $request->user_id;
                $upload->cart_id = $request->cart_id;
                $upload->save();
                return response(1);
        }
        return response(0);
    }
    public function descStore(Request $request)
    {
        if($request->id !== null)
        {
            $desc = Designer::find($request->id);
            $desc->update(['description'=>$request->desc]);
            $desc->save();
        } else {
            $desc = new Designer;
            $desc->user_id = $request->user_id;
            $desc->cart_id = $request->cart_id;
            $desc->description = $request->desc;
            $desc->save();
        }
        return redirect()->back();
    }
}
