<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function bannerSize(Request $request)
    {
        $size = $request->size;
        if ($size < 100) {
            $bannerRate = $size*1.99;
        } 
        if ($size > 99 && $size < 150) {
            $bannerRate = $size*1.81;
        } 
        if ($size > 149 && $size < 200) {
            $bannerRate = $size*1.66;
        }
        if ($size > 199) {
            $bannerRate = $size*1.53;
        }
        $finalTotal = ($bannerRate*100)/50;
        return response()->json(['total'=>$bannerRate,'final'=>$finalTotal]);
    }
    public function mainQty(Request $request)
    {
        $size = $request->size;
        if ($size < 100) {
            $bannerRate = $size*1.99;
        } 
        if ($size > 99 && $size < 150) {
            $bannerRate = $size*1.81;
        } 
        if ($size > 149 && $size < 200) {
            $bannerRate = $size*1.66;
        }
        if ($size > 199) {
            $bannerRate = $size*1.53;
        }
        $qtyRate = $bannerRate*$request->qty;
		$finalTotal = ($qtyRate*100)/50;
        return response()->json(['total'=>$qtyRate,'final'=>$finalTotal]);
    }
    public function hanging(Request $request)
    {
        if($request->hanging > 0)
        {
            $size = $request->size;
            if ($size < 100) {
                $bannerRate = ($request->size*1.99)*$request->qty;
            } 
            if ($size > 99 && $size < 150) {
                $bannerRate = ($request->size*1.81)*$request->qty;
            } 
            if ($size > 149 && $size < 200) {
                $bannerRate = ($request->size*1.66)*$request->qty;
            }
            if ($size > 199) {
                $bannerRate = ($request->size*1.53)*$request->qty;
            }
            $hangingRate = (($bannerRate*30)/100);
            $totalRate = $hangingRate+$request->total;
            $finalTotal = (($totalRate*100)/50);
            return response()->json(['hanging'=>$hangingRate,'total'=>$totalRate,'final'=>$finalTotal]);
        } else {
            $size = $request->size;
            if ($size < 100) {
                $bannerRate = ($request->size*1.99)*$request->qty;
            } 
            if ($size > 99 && $size < 150) {
                $bannerRate = ($request->size*1.81)*$request->qty;
            } 
            if ($size > 149 && $size < 200) {
                $bannerRate = ($request->size*1.66)*$request->qty;
            }
            if ($size > 199) {
                $bannerRate = ($request->size*1.53)*$request->qty;
            }
            $hangingRate = (($bannerRate*30)/100);
            $totalRate = $request->total-$hangingRate;
            $finalTotal = (($totalRate*100)/50);
            return response()->json(['hanging'=>$hangingRate,'total'=>$totalRate,'final'=>$finalTotal]);
        }
    }
    public function wind(Request $request)
    {
        if($request->wind > 0)
        {
            $bannerRate = ($request->size*2.99)*$request->qty;
            $windRate = 8.99;
            $totalRate = $windRate+$request->total;
            $finalTotal = (($totalRate*100)/50);
            return response()->json(['wind'=>$windRate,'total'=>$totalRate,'final'=>$finalTotal]);
        } else {
            $bannerRate = ($request->size*2.99)*$request->qty;
            $windRate = '';
            $totalRate = $request->total-8.99;
            $finalTotal = (($totalRate*100)/50);
            return response()->json(['wind'=>$windRate,'total'=>$totalRate,'final'=>$finalTotal]);
        }
    }
}
