<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StandtwoController extends Controller
{
        //static x banner start

        public function bannerSizeStatic(Request $request)
        {
            $size = $request->size;
            switch ($size) {
                case '10':
                    $bannerRate = 59.99;
                    $finalTotal = ($bannerRate*100)/50;
                    return response()->json(['total'=>$bannerRate,'final'=>$finalTotal]);
                break;
                case '15':
                    $bannerRate = 69.82;
                    $finalTotal = ($bannerRate*100)/50;
                    return response()->json(['total'=>$bannerRate,'final'=>$finalTotal]);
                break;
                
                default:
                    $bannerRate = 59.99;
                    $finalTotal = ($bannerRate*100)/50;
                    return response()->json(['total'=>$bannerRate,'final'=>$finalTotal]);
                break;
            }
            
        }
        public function mainQtyStatic(Request $request)
        {
            $size = $request->size;
            switch ($size) {
                case '10':
                    $bannerRate = 59.99;
                    $qtyRate = $bannerRate*$request->qty;
                    $finalTotal = ($qtyRate*100)/50;
                    return response()->json(['total'=>$qtyRate,'final'=>$finalTotal]);
                break;
                case '15':
                    $bannerRate = 69.82;
                    $qtyRate = $bannerRate*$request->qty;
                    $finalTotal = ($qtyRate*100)/50;
                    return response()->json(['total'=>$qtyRate,'final'=>$finalTotal]);
                break;
                default:
                    $bannerRate = 59.99;
                    $qtyRate = $bannerRate*$request->qty;
                    $finalTotal = ($qtyRate*100)/50;
                    return response()->json(['total'=>$qtyRate,'final'=>$finalTotal]);
                break;
            }
        }
        public function standStatic(Request $request)
        {
            $size = $request->size;
            switch ($size) {
                case '10':
                    if($request->stand > 0)
                    {
                        $bannerRate = (59.99)*$request->qty;
                        $standRate = 39.99;
                        $totalRate = $standRate+$request->total;
                        $finalTotal = (($totalRate*100)/50);
                        return response()->json(['stand'=>$standRate,'total'=>$totalRate,'final'=>$finalTotal]);
                    } else {
                        $bannerRate = (59.99)*$request->qty;
                        $standRate = '';
                        $totalRate = $request->total-39.99;
                        $finalTotal = (($totalRate*100)/50);
                        return response()->json(['stand'=>$standRate,'total'=>$totalRate,'final'=>$finalTotal]);
                    }
                break;
                case '15':
                    if($request->stand > 0)
                    {
                        $bannerRate = (69.82)*$request->qty;
                        $standRate = (($bannerRate*20)/100);
                        $totalRate = $standRate+$request->total;
                        $finalTotal = (($totalRate*100)/50);
                        return response()->json(['stand'=>$standRate,'total'=>$totalRate,'final'=>$finalTotal]);
                    } else {
                        $bannerRate = (69.82)*$request->qty;
                        $standRate = (($bannerRate*20)/100);
                        $totalRate = $request->total-$standRate;
                        $finalTotal = (($totalRate*100)/50);
                        return response()->json(['stand'=>$standRate,'total'=>$totalRate,'final'=>$finalTotal]);
                    }
                break;
                
                default:
                    if($request->stand > 0)
                    {
                        $bannerRate = (59.99)*$request->qty;
                        $standRate = 39.99;
                        $totalRate = $standRate+$request->total;
                        $finalTotal = (($totalRate*100)/50);
                        return response()->json(['stand'=>$standRate,'total'=>$totalRate,'final'=>$finalTotal]);
                    } else {
                        $bannerRate = (59.99)*$request->qty;
                        $standRate = '';
                        $totalRate = $request->total-39.99;
                        $finalTotal = (($totalRate*100)/50);
                        return response()->json(['stand'=>$standRate,'total'=>$totalRate,'final'=>$finalTotal]);
                    }
                break;
            }
            
        }
        public function bannerAddStatic(Request $request)
        {
            $size = $request->size;
            switch ($size) {
                case '10':
                    if($request->banner > 0)
                    {
                        $bannerRate = (59.99)*$request->qty;
                        $bannerAddRate = 27.5;
                        $totalRate = $bannerAddRate+$request->total;
                        $finalTotal = (($totalRate*100)/50);
                        return response()->json(['banner'=>$bannerAddRate,'total'=>$totalRate,'final'=>$finalTotal]);
                    } else {
                        $bannerRate = (59.99)*$request->qty;
                        $bannerAddRate = '';
                        $totalRate = $request->total-27.5;
                        $finalTotal = (($totalRate*100)/50);
                        return response()->json(['banner'=>$bannerAddRate,'total'=>$totalRate,'final'=>$finalTotal]);
                    }
                break;
                case '15':
                    if($request->banner > 0)
                    {
                        $bannerRate = (69.82)*$request->qty;
                        $bannerAddRate = (($bannerRate*40)/100);
                        $totalRate = $bannerAddRate+$request->total;
                        $finalTotal = (($totalRate*100)/50);
                        return response()->json(['banner'=>$bannerAddRate,'total'=>$totalRate,'final'=>$finalTotal]);
                    } else {
                        $bannerRate = (69.82)*$request->qty;
                        $bannerAddRate = (($bannerRate*40)/100);
                        $totalRate = $request->total-$bannerAddRate;
                        $finalTotal = (($totalRate*100)/50);
                        return response()->json(['banner'=>$bannerAddRate,'total'=>$totalRate,'final'=>$finalTotal]);
                    }
                break;
                
                default:
                    if($request->banner > 0)
                    {
                        $bannerRate = (59.99)*$request->qty;
                        $bannerAddRate = 27.5;
                        $totalRate = $bannerAddRate+$request->total;
                        $finalTotal = (($totalRate*100)/50);
                        return response()->json(['banner'=>$bannerAddRate,'total'=>$totalRate,'final'=>$finalTotal]);
                    } else {
                        $bannerRate = (59.99)*$request->qty;
                        $bannerAddRate = '';
                        $totalRate = $request->total-27.5;
                        $finalTotal = (($totalRate*100)/50);
                        return response()->json(['banner'=>$bannerAddRate,'total'=>$totalRate,'final'=>$finalTotal]);
                    }
                break;
            }
            
        }
        public function laminationStatic(Request $request)
        {
            $size = $request->size;
            switch ($size) {
                case '10':
                    if($request->lamination > 0)
                    {
                        $bannerRate = (59.99)*$request->qty;
                        $laminationRate = 6.99;
                        $totalRate = $laminationRate+$request->total;
                        $finalTotal = (($totalRate*100)/50);
                        return response()->json(['lamination'=>$laminationRate,'total'=>$totalRate,'final'=>$finalTotal]);
                    } else {
                        $bannerRate = (59.99)*$request->qty;
                        $laminationRate = '';
                        $totalRate = $request->total-6.99;
                        $finalTotal = (($totalRate*100)/50);
                        return response()->json(['lamination'=>$laminationRate,'total'=>$totalRate,'final'=>$finalTotal]);
                    }
                break;
                case '15':
                    if($request->lamination > 0)
                    {
                        $bannerRate = (69.82)*$request->qty;
                        $laminationRate = 6.99;
                        $totalRate = $laminationRate+$request->total;
                        $finalTotal = (($totalRate*100)/50);
                        return response()->json(['lamination'=>$laminationRate,'total'=>$totalRate,'final'=>$finalTotal]);
                    } else {
                        $bannerRate = (69.82)*$request->qty;
                        $laminationRate = '';
                        $totalRate = $request->total-6.99;
                        $finalTotal = (($totalRate*100)/50);
                        return response()->json(['lamination'=>$laminationRate,'total'=>$totalRate,'final'=>$finalTotal]);
                    }
                break;
                default:
                    if($request->lamination > 0)
                    {
                        $bannerRate = (59.99)*$request->qty;
                        $laminationRate = 6.99;
                        $totalRate = $laminationRate+$request->total;
                        $finalTotal = (($totalRate*100)/50);
                        return response()->json(['lamination'=>$laminationRate,'total'=>$totalRate,'final'=>$finalTotal]);
                    } else {
                        $bannerRate = (59.99)*$request->qty;
                        $laminationRate = '';
                        $totalRate = $request->total-6.99;
                        $finalTotal = (($totalRate*100)/50);
                        return response()->json(['lamination'=>$laminationRate,'total'=>$totalRate,'final'=>$finalTotal]);
                    }
                break;
            }
        }
    
        //static x banner end

        //multifunctional x banner start

    public function bannerSizeMulti(Request $request)
    {
        $size = $request->size;
        switch ($size) {
            case '12':
                $bannerRate = 72.74;
                $finalTotal = ($bannerRate*100)/50;
                return response()->json(['total'=>$bannerRate,'final'=>$finalTotal]);
            break;
            case '16':
                $bannerRate = 72.74;
                $finalTotal = ($bannerRate*100)/50;
                return response()->json(['total'=>$bannerRate,'final'=>$finalTotal]);
            break;
            case '15':
                $bannerRate = 72.74;
                $finalTotal = ($bannerRate*100)/50;
                return response()->json(['total'=>$bannerRate,'final'=>$finalTotal]);
            break;
            case '22':
                $bannerRate = 72.74;
                $finalTotal = ($bannerRate*100)/50;
                return response()->json(['total'=>$bannerRate,'final'=>$finalTotal]);
            break;
            case '26':
                $bannerRate = 72.74;
                $finalTotal = ($bannerRate*100)/50;
                return response()->json(['total'=>$bannerRate,'final'=>$finalTotal]);
            break;
            
            default:

            break;
        }
        
    }
    public function mainQtyMulti(Request $request)
    {
        $size = $request->size;
        switch ($size) {

            case '12':
                $bannerRate = 72.74;
                $qtyRate = $bannerRate*$request->qty;
		        $finalTotal = ($qtyRate*100)/50;
                return response()->json(['total'=>$qtyRate,'final'=>$finalTotal]);
            break;
            case '16':
                $bannerRate = 72.74;
                $qtyRate = $bannerRate*$request->qty;
		        $finalTotal = ($qtyRate*100)/50;
                return response()->json(['total'=>$qtyRate,'final'=>$finalTotal]);
            break;
            case '15':
                $bannerRate = 72.74;
                $qtyRate = $bannerRate*$request->qty;
		        $finalTotal = ($qtyRate*100)/50;
                return response()->json(['total'=>$qtyRate,'final'=>$finalTotal]);
            break;
            case '22':
                $bannerRate = 72.74;
                $qtyRate = $bannerRate*$request->qty;
		        $finalTotal = ($qtyRate*100)/50;
                return response()->json(['total'=>$qtyRate,'final'=>$finalTotal]);
            break;
            case '26':
                $bannerRate = 72.74;
                $qtyRate = $bannerRate*$request->qty;
		        $finalTotal = ($qtyRate*100)/50;
                return response()->json(['total'=>$qtyRate,'final'=>$finalTotal]);
            break;
            default:

            break;
        }
    }
    public function standMulti(Request $request)
    {
        $size = $request->size;
        switch ($size) {

            case '12':
                if($request->stand > 0)
                {
                    $bannerRate = (72.74)*$request->qty;
                    $standRate = 48.49;
                    $totalRate = $standRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['stand'=>$standRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (72.74)*$request->qty;
                    $standRate = '';
                    $totalRate = $request->total-48.49;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['stand'=>$standRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            case '16':
                if($request->stand > 0)
                {
                    $bannerRate = (72.74)*$request->qty;
                    $standRate = 48.49;
                    $totalRate = $standRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['stand'=>$standRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (72.74)*$request->qty;
                    $standRate = '';
                    $totalRate = $request->total-48.49;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['stand'=>$standRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            case '15':
                if($request->stand > 0)
                {
                    $bannerRate = (72.74)*$request->qty;
                    $standRate = 48.49;
                    $totalRate = $standRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['stand'=>$standRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (72.74)*$request->qty;
                    $standRate = '';
                    $totalRate = $request->total-48.49;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['stand'=>$standRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            case '22':
                if($request->stand > 0)
                {
                    $bannerRate = (72.74)*$request->qty;
                    $standRate = 48.49;
                    $totalRate = $standRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['stand'=>$standRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (72.74)*$request->qty;
                    $standRate = '';
                    $totalRate = $request->total-48.49;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['stand'=>$standRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            case '26':
                if($request->stand > 0)
                {
                    $bannerRate = (72.74)*$request->qty;
                    $standRate = 48.49;
                    $totalRate = $standRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['stand'=>$standRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (72.74)*$request->qty;
                    $standRate = '';
                    $totalRate = $request->total-48.49;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['stand'=>$standRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            
            default:
               
            break;
        }
        
    }
    public function bannerAddMulti(Request $request)
    {
        $size = $request->size;
        switch ($size) {
           
            case '12':
                if($request->banner > 0)
                {
                    $bannerRate = (72.74)*$request->qty;
                    $bannerAddRate = 29.55;
                    $totalRate = $bannerAddRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['banner'=>$bannerAddRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (72.74)*$request->qty;
                    $bannerAddRate = '';
                    $totalRate = $request->total-29.55;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['banner'=>$bannerAddRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            case '16':
                if($request->banner > 0)
                {
                    $bannerRate = (72.74)*$request->qty;
                    $bannerAddRate = 39.85;
                    $totalRate = $bannerAddRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['banner'=>$bannerAddRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (72.74)*$request->qty;
                    $bannerAddRate = '';
                    $totalRate = $request->total-39.85;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['banner'=>$bannerAddRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            case '15':
                if($request->banner > 0)
                {
                    $bannerRate = (72.74)*$request->qty;
                    $bannerAddRate = 35.99;
                    $totalRate = $bannerAddRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['banner'=>$bannerAddRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (72.74)*$request->qty;
                    $bannerAddRate = '';
                    $totalRate = $request->total-35.99;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['banner'=>$bannerAddRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            case '22':
                if($request->banner > 0)
                {
                    $bannerRate = (72.74)*$request->qty;
                    $bannerAddRate = 47.89;
                    $totalRate = $bannerAddRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['banner'=>$bannerAddRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (72.74)*$request->qty;
                    $bannerAddRate = '';
                    $totalRate = $request->total-47.89;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['banner'=>$bannerAddRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            case '26':
                if($request->banner > 0)
                {
                    $bannerRate = (72.74)*$request->qty;
                    $bannerAddRate = 55.9;
                    $totalRate = $bannerAddRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['banner'=>$bannerAddRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (72.74)*$request->qty;
                    $bannerAddRate = '';
                    $totalRate = $request->total-55.9;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['banner'=>$bannerAddRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            
            default:
                
            break;
        }
        
    }
    public function laminationMulti(Request $request)
    {
        $size = $request->size;
        switch ($size) {
            
            case '12':
                if($request->lamination > 0)
                {
                    $bannerRate = (72.74)*$request->qty;
                    $laminationRate = 6.99;
                    $totalRate = $laminationRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['lamination'=>$laminationRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (72.74)*$request->qty;
                    $laminationRate = '';
                    $totalRate = $request->total-6.99;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['lamination'=>$laminationRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            case '16':
                if($request->lamination > 0)
                {
                    $bannerRate = (72.74)*$request->qty;
                    $laminationRate = 6.99;
                    $totalRate = $laminationRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['lamination'=>$laminationRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (72.74)*$request->qty;
                    $laminationRate = '';
                    $totalRate = $request->total-6.99;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['lamination'=>$laminationRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            case '15':
                if($request->lamination > 0)
                {
                    $bannerRate = (72.74)*$request->qty;
                    $laminationRate = 6.99;
                    $totalRate = $laminationRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['lamination'=>$laminationRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (72.74)*$request->qty;
                    $laminationRate = '';
                    $totalRate = $request->total-6.99;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['lamination'=>$laminationRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            case '22':
                if($request->lamination > 0)
                {
                    $bannerRate = (72.74)*$request->qty;
                    $laminationRate = 6.99;
                    $totalRate = $laminationRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['lamination'=>$laminationRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (72.74)*$request->qty;
                    $laminationRate = '';
                    $totalRate = $request->total-6.99;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['lamination'=>$laminationRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            case '26':
                if($request->lamination > 0)
                {
                    $bannerRate = (72.74)*$request->qty;
                    $laminationRate = 6.99;
                    $totalRate = $laminationRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['lamination'=>$laminationRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (72.74)*$request->qty;
                    $laminationRate = '';
                    $totalRate = $request->total-6.99;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['lamination'=>$laminationRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            default:
                
            break;
        }
    }
    //multifunctional x banner start

    //adjustable x banner start

    public function bannerSizeAdjust(Request $request)
    {
        $size = $request->size;
        switch ($size) {
            case '12.5':
                $bannerRate = 72.74;
                $finalTotal = ($bannerRate*100)/50;
                return response()->json(['total'=>$bannerRate,'final'=>$finalTotal]);
            break;
            case '15':
                $bannerRate = 72.74;
                $finalTotal = ($bannerRate*100)/50;
                return response()->json(['total'=>$bannerRate,'final'=>$finalTotal]);
            break;
            case '16.25':
                $bannerRate = 72.74;
                $finalTotal = ($bannerRate*100)/50;
                return response()->json(['total'=>$bannerRate,'final'=>$finalTotal]);
            break;
            case '13.5':
                $bannerRate = 72.74;
                $finalTotal = ($bannerRate*100)/50;
                return response()->json(['total'=>$bannerRate,'final'=>$finalTotal]);
            break;
            case '18':
                $bannerRate = 72.74;
                $finalTotal = ($bannerRate*100)/50;
                return response()->json(['total'=>$bannerRate,'final'=>$finalTotal]);
            break;
            case '19.25':
                $bannerRate = 72.74;
                $finalTotal = ($bannerRate*100)/50;
                return response()->json(['total'=>$bannerRate,'final'=>$finalTotal]);
            break;
            
            default:

            break;
        }
        
    }
    public function mainQtyAdjust(Request $request)
    {
        $size = $request->size;
        switch ($size) {

            case '12.5':
                $bannerRate = 72.74;
                $qtyRate = $bannerRate*$request->qty;
		        $finalTotal = ($qtyRate*100)/50;
                return response()->json(['total'=>$qtyRate,'final'=>$finalTotal]);
            break;
            case '15':
                $bannerRate = 72.74;
                $qtyRate = $bannerRate*$request->qty;
		        $finalTotal = ($qtyRate*100)/50;
                return response()->json(['total'=>$qtyRate,'final'=>$finalTotal]);
            break;
            case '16.25':
                $bannerRate = 72.74;
                $qtyRate = $bannerRate*$request->qty;
		        $finalTotal = ($qtyRate*100)/50;
                return response()->json(['total'=>$qtyRate,'final'=>$finalTotal]);
            break;
            case '13.5':
                $bannerRate = 72.74;
                $qtyRate = $bannerRate*$request->qty;
		        $finalTotal = ($qtyRate*100)/50;
                return response()->json(['total'=>$qtyRate,'final'=>$finalTotal]);
            break;
            case '18':
                $bannerRate = 72.74;
                $qtyRate = $bannerRate*$request->qty;
		        $finalTotal = ($qtyRate*100)/50;
                return response()->json(['total'=>$qtyRate,'final'=>$finalTotal]);
            break;
            case '19.25':
                $bannerRate = 72.74;
                $qtyRate = $bannerRate*$request->qty;
		        $finalTotal = ($qtyRate*100)/50;
                return response()->json(['total'=>$qtyRate,'final'=>$finalTotal]);
            break;
            default:

            break;
        }
    }
    public function standAdjust(Request $request)
    {
        $size = $request->size;
        switch ($size) {

            case '12.5':
                if($request->stand > 0)
                {
                    $bannerRate = (72.74)*$request->qty;
                    $standRate = 48.49;
                    $totalRate = $standRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['stand'=>$standRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (72.74)*$request->qty;
                    $standRate = '';
                    $totalRate = $request->total-48.49;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['stand'=>$standRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            case '15':
                if($request->stand > 0)
                {
                    $bannerRate = (72.74)*$request->qty;
                    $standRate = 48.49;
                    $totalRate = $standRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['stand'=>$standRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (72.74)*$request->qty;
                    $standRate = '';
                    $totalRate = $request->total-48.49;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['stand'=>$standRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            case '16.25':
                if($request->stand > 0)
                {
                    $bannerRate = (72.74)*$request->qty;
                    $standRate = 48.49;
                    $totalRate = $standRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['stand'=>$standRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (72.74)*$request->qty;
                    $standRate = '';
                    $totalRate = $request->total-48.49;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['stand'=>$standRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            case '13.5':
                if($request->stand > 0)
                {
                    $bannerRate = (72.74)*$request->qty;
                    $standRate = 48.49;
                    $totalRate = $standRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['stand'=>$standRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (72.74)*$request->qty;
                    $standRate = '';
                    $totalRate = $request->total-48.49;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['stand'=>$standRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            case '18':
                if($request->stand > 0)
                {
                    $bannerRate = (72.74)*$request->qty;
                    $standRate = 48.49;
                    $totalRate = $standRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['stand'=>$standRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (72.74)*$request->qty;
                    $standRate = '';
                    $totalRate = $request->total-48.49;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['stand'=>$standRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            case '19.25':
                if($request->stand > 0)
                {
                    $bannerRate = (72.74)*$request->qty;
                    $standRate = 48.49;
                    $totalRate = $standRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['stand'=>$standRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (72.74)*$request->qty;
                    $standRate = '';
                    $totalRate = $request->total-48.49;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['stand'=>$standRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            
            default:
               
            break;
        }
        
    }
    public function bannerAddAdjust(Request $request)
    {
        $size = $request->size;
        switch ($size) {
           
            case '12.5':
                if($request->banner > 0)
                {
                    $bannerRate = (72.74)*$request->qty;
                    $bannerAddRate = 29.55;
                    $totalRate = $bannerAddRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['banner'=>$bannerAddRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (72.74)*$request->qty;
                    $bannerAddRate = '';
                    $totalRate = $request->total-29.55;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['banner'=>$bannerAddRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            case '15':
                if($request->banner > 0)
                {
                    $bannerRate = (72.74)*$request->qty;
                    $bannerAddRate = 35.69;
                    $totalRate = $bannerAddRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['banner'=>$bannerAddRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (72.74)*$request->qty;
                    $bannerAddRate = '';
                    $totalRate = $request->total-35.69;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['banner'=>$bannerAddRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            case '16.25':
                if($request->banner > 0)
                {
                    $bannerRate = (72.74)*$request->qty;
                    $bannerAddRate = 39.99;
                    $totalRate = $bannerAddRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['banner'=>$bannerAddRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (72.74)*$request->qty;
                    $bannerAddRate = '';
                    $totalRate = $request->total-39.99;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['banner'=>$bannerAddRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            case '13.5':
                if($request->banner > 0)
                {
                    $bannerRate = (72.74)*$request->qty;
                    $bannerAddRate = 33.85;
                    $totalRate = $bannerAddRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['banner'=>$bannerAddRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (72.74)*$request->qty;
                    $bannerAddRate = '';
                    $totalRate = $request->total-33.85;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['banner'=>$bannerAddRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            case '18':
                if($request->banner > 0)
                {
                    $bannerRate = (72.74)*$request->qty;
                    $bannerAddRate = 45.89;
                    $totalRate = $bannerAddRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['banner'=>$bannerAddRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (72.74)*$request->qty;
                    $bannerAddRate = '';
                    $totalRate = $request->total-45.89;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['banner'=>$bannerAddRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            case '19.25':
                if($request->banner > 0)
                {
                    $bannerRate = (72.74)*$request->qty;
                    $bannerAddRate = 49.85;
                    $totalRate = $bannerAddRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['banner'=>$bannerAddRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (72.74)*$request->qty;
                    $bannerAddRate = '';
                    $totalRate = $request->total-49.85;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['banner'=>$bannerAddRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            
            default:
                
            break;
        }
        
    }
    public function laminationAdjust(Request $request)
    {
        $size = $request->size;
        switch ($size) {
            
            case '12.5':
                if($request->lamination > 0)
                {
                    $bannerRate = (72.74)*$request->qty;
                    $laminationRate = 6.99;
                    $totalRate = $laminationRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['lamination'=>$laminationRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (72.74)*$request->qty;
                    $laminationRate = '';
                    $totalRate = $request->total-6.99;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['lamination'=>$laminationRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            case '15':
                if($request->lamination > 0)
                {
                    $bannerRate = (72.74)*$request->qty;
                    $laminationRate = 6.99;
                    $totalRate = $laminationRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['lamination'=>$laminationRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (72.74)*$request->qty;
                    $laminationRate = '';
                    $totalRate = $request->total-6.99;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['lamination'=>$laminationRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            case '16.25':
                if($request->lamination > 0)
                {
                    $bannerRate = (72.74)*$request->qty;
                    $laminationRate = 6.99;
                    $totalRate = $laminationRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['lamination'=>$laminationRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (72.74)*$request->qty;
                    $laminationRate = '';
                    $totalRate = $request->total-6.99;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['lamination'=>$laminationRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            case '13.5':
                if($request->lamination > 0)
                {
                    $bannerRate = (72.74)*$request->qty;
                    $laminationRate = 6.99;
                    $totalRate = $laminationRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['lamination'=>$laminationRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (72.74)*$request->qty;
                    $laminationRate = '';
                    $totalRate = $request->total-6.99;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['lamination'=>$laminationRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            case '18':
                if($request->lamination > 0)
                {
                    $bannerRate = (72.74)*$request->qty;
                    $laminationRate = 6.99;
                    $totalRate = $laminationRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['lamination'=>$laminationRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (72.74)*$request->qty;
                    $laminationRate = '';
                    $totalRate = $request->total-6.99;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['lamination'=>$laminationRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            case '19.25':
                if($request->lamination > 0)
                {
                    $bannerRate = (72.74)*$request->qty;
                    $laminationRate = 6.99;
                    $totalRate = $laminationRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['lamination'=>$laminationRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (72.74)*$request->qty;
                    $laminationRate = '';
                    $totalRate = $request->total-6.99;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['lamination'=>$laminationRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            default:
                
            break;
        }
    }

    //adjustable x banner end
}
