<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StandframeController extends Controller
{
    //SEG fabric frame start

    public function bannerSizeSEG(Request $request)
    {
        $size = $request->size;
        switch ($size) {
            case '6':
                $bannerRate = 103.5;
                $colorRate = '0.00';
                $finalTotal = ($bannerRate*100)/50;
                return response()->json(['color'=>$colorRate,'total'=>$bannerRate,'final'=>$finalTotal]);
            break;
            case '8':
                $bannerRate = 118.5;
                $colorRate = '0.00';
                $finalTotal = ($bannerRate*100)/50;
                return response()->json(['color'=>$colorRate,'total'=>$bannerRate,'final'=>$finalTotal]);
            break;
            case '12':
                $bannerRate = 133.5;
                $colorRate = '0.00';
                $finalTotal = ($bannerRate*100)/50;
                return response()->json(['color'=>$colorRate,'total'=>$bannerRate,'final'=>$finalTotal]);
            break;
            case '16':
                $bannerRate = 148.5;
                $colorRate = '0.00';
                $finalTotal = ($bannerRate*100)/50;
                return response()->json(['color'=>$colorRate,'total'=>$bannerRate,'final'=>$finalTotal]);
            break;
            
            default:

            break;
        }
        
    }
    public function mainQtySEG(Request $request)
    {
        $size = $request->size;
        switch ($size) {

            case '6':
                $bannerRate = 103.5;
                $colorRate = '0.00';
                $qtyRate = $bannerRate*$request->qty;
		        $finalTotal = ($qtyRate*100)/50;
                return response()->json(['color'=>$colorRate,'total'=>$qtyRate,'final'=>$finalTotal]);
            break;
            case '8':
                $bannerRate = 118.5;
                $colorRate = '0.00';
                $qtyRate = $bannerRate*$request->qty;
		        $finalTotal = ($qtyRate*100)/50;
                return response()->json(['color'=>$colorRate,'total'=>$qtyRate,'final'=>$finalTotal]);
            break;
            case '12':
                $bannerRate = 133.5;
                $colorRate = '0.00';
                $qtyRate = $bannerRate*$request->qty;
		        $finalTotal = ($qtyRate*100)/50;
                return response()->json(['color'=>$colorRate,'total'=>$qtyRate,'final'=>$finalTotal]);
            break;
            case '16':
                $bannerRate = 148.5;
                $colorRate = '0.00';
                $qtyRate = $bannerRate*$request->qty;
		        $finalTotal = ($qtyRate*100)/50;
                return response()->json(['color'=>$colorRate,'total'=>$qtyRate,'final'=>$finalTotal]);
            break;
            default:

            break;
        }
    }
    public function frameSEG(Request $request)
    {
        $size = $request->size;
        switch ($size) {

            case '6':
                if($request->frame > 0)
                {
                    $bannerRate = (103.5)*$request->qty;
                    $frameRate = 69;
                    $totalRate = $frameRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['frame'=>$frameRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (103.5)*$request->qty;
                    $frameRate = '';
                    $totalRate = $request->total-69;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['frame'=>$frameRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            case '8':
                if($request->frame > 0)
                {
                    $bannerRate = (118.5)*$request->qty;
                    $frameRate = 79;
                    $totalRate = $frameRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['frame'=>$frameRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (118.5)*$request->qty;
                    $frameRate = '';
                    $totalRate = $request->total-79;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['frame'=>$frameRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            case '12':
                if($request->frame > 0)
                {
                    $bannerRate = (133.5)*$request->qty;
                    $frameRate = 89;
                    $totalRate = $frameRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['frame'=>$frameRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (133.5)*$request->qty;
                    $frameRate = '';
                    $totalRate = $request->total-89;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['frame'=>$frameRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            case '16':
                if($request->frame > 0)
                {
                    $bannerRate = (148.5)*$request->qty;
                    $frameRate = 99;
                    $totalRate = $frameRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['frame'=>$frameRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (148.5)*$request->qty;
                    $frameRate = '';
                    $totalRate = $request->total-99;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['frame'=>$frameRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            
            default:
               
            break;
        }
        
    }
    public function bannerAddSEG(Request $request)
    {
        $size = $request->size;
        switch ($size) {
           
            case '6':
                if($request->banner > 0)
                {
                    $bannerRate = (103.5)*$request->qty;
                    $bannerAddRate = 45;
                    $totalRate = $bannerAddRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['banner'=>$bannerAddRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (103.5)*$request->qty;
                    $bannerAddRate = '';
                    $totalRate = $request->total-45;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['banner'=>$bannerAddRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            case '8':
                if($request->banner > 0)
                {
                    $bannerRate = (118.5)*$request->qty;
                    $bannerAddRate = 58;
                    $totalRate = $bannerAddRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['banner'=>$bannerAddRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (118.5)*$request->qty;
                    $bannerAddRate = '';
                    $totalRate = $request->total-58;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['banner'=>$bannerAddRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            case '12':
                if($request->banner > 0)
                {
                    $bannerRate = (133.5)*$request->qty;
                    $bannerAddRate = 75;
                    $totalRate = $bannerAddRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['banner'=>$bannerAddRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (133.5)*$request->qty;
                    $bannerAddRate = '';
                    $totalRate = $request->total-75;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['banner'=>$bannerAddRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            case '16':
                if($request->banner > 0)
                {
                    $bannerRate = (148.5)*$request->qty;
                    $bannerAddRate = 85;
                    $totalRate = $bannerAddRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['banner'=>$bannerAddRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (148.5)*$request->qty;
                    $bannerAddRate = '';
                    $totalRate = $request->total-85;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['banner'=>$bannerAddRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            
            default:
                
            break;
        }
        
    }
    public function colorSEG(Request $request)
    {
        $size = $request->size;
        switch ($size) {
            
            case '6':
                if($request->color > 0)
                {
                    $bannerRate = (103.5)*$request->qty;
                    $colorRate = 28;
                    $totalRate = $colorRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['color'=>$colorRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (103.5)*$request->qty;
                    $colorRate = '0.00';
                    $totalRate = $request->total-28;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['color'=>$colorRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            case '8':
                if($request->color > 0)
                {
                    $bannerRate = (118.5)*$request->qty;
                    $colorRate = 28;
                    $totalRate = $colorRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['color'=>$colorRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (118.5)*$request->qty;
                    $colorRate = '0.00';
                    $totalRate = $request->total-28;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['color'=>$colorRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            case '12':
                if($request->color > 0)
                {
                    $bannerRate = (133.5)*$request->qty;
                    $colorRate = 28;
                    $totalRate = $colorRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['color'=>$colorRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (133.5)*$request->qty;
                    $colorRate = '0.00';
                    $totalRate = $request->total-28;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['color'=>$colorRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            case '16':
                if($request->color > 0)
                {
                    $bannerRate = (148.5)*$request->qty;
                    $colorRate = 28;
                    $totalRate = $colorRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['color'=>$colorRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (148.5)*$request->qty;
                    $colorRate = '0.00';
                    $totalRate = $request->total-28;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['color'=>$colorRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            default:
                
            break;
        }
    }

    //SEG fabric frame end

    //Clip frame start

    public function bannerSizeClip(Request $request)
    {
        $size = $request->size;
        switch ($size) {
            case '1':
                $bannerRate = 88.5;
                $colorRate = '0.00';
                $finalTotal = ($bannerRate*100)/50;
                return response()->json(['color'=>$colorRate,'total'=>$bannerRate,'final'=>$finalTotal]);
            break;
            case '3':
                $bannerRate = 126;
                $colorRate = '0.00';
                $finalTotal = ($bannerRate*100)/50;
                return response()->json(['color'=>$colorRate,'total'=>$bannerRate,'final'=>$finalTotal]);
            break;
            
            default:

            break;
        }
        
    }
    public function mainQtyClip(Request $request)
    {
        $size = $request->size;
        switch ($size) {

            case '1':
                $bannerRate = 88.5;
                $colorRate = '0.00';
                $qtyRate = $bannerRate*$request->qty;
		        $finalTotal = ($qtyRate*100)/50;
                return response()->json(['color'=>$colorRate,'total'=>$qtyRate,'final'=>$finalTotal]);
            break;
            case '3':
                $bannerRate = 126;
                $colorRate = '0.00';
                $qtyRate = $bannerRate*$request->qty;
		        $finalTotal = ($qtyRate*100)/50;
                return response()->json(['color'=>$colorRate,'total'=>$qtyRate,'final'=>$finalTotal]);
            break;
            default:

            break;
        }
    }
    public function frameClip(Request $request)
    {
        $size = $request->size;
        switch ($size) {

            case '1':
                if($request->frame > 0)
                {
                    $bannerRate = (88.5)*$request->qty;
                    $frameRate = 59;
                    $totalRate = $frameRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['frame'=>$frameRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (88.5)*$request->qty;
                    $frameRate = '';
                    $totalRate = $request->total-59;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['frame'=>$frameRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            case '3':
                if($request->frame > 0)
                {
                    $bannerRate = (126)*$request->qty;
                    $frameRate = 84;
                    $totalRate = $frameRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['frame'=>$frameRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (126)*$request->qty;
                    $frameRate = '';
                    $totalRate = $request->total-84;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['frame'=>$frameRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            
            default:
               
            break;
        }
        
    }
    public function bannerAddClip(Request $request)
    {
        $size = $request->size;
        switch ($size) {
           
            case '1':
                if($request->banner > 0)
                {
                    $bannerRate = (88.5)*$request->qty;
                    $bannerAddRate = 21;
                    $totalRate = $bannerAddRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['banner'=>$bannerAddRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (88.5)*$request->qty;
                    $bannerAddRate = '';
                    $totalRate = $request->total-21;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['banner'=>$bannerAddRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            case '3':
                if($request->banner > 0)
                {
                    $bannerRate = (126)*$request->qty;
                    $bannerAddRate = 29;
                    $totalRate = $bannerAddRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['banner'=>$bannerAddRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (126)*$request->qty;
                    $bannerAddRate = '';
                    $totalRate = $request->total-29;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['banner'=>$bannerAddRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            default:
                
            break;
        }
        
    }
    public function colorClip(Request $request)
    {
        $size = $request->size;
        switch ($size) {
            
            case '1':
                if($request->color > 0)
                {
                    $bannerRate = (88.5)*$request->qty;
                    $colorRate = 25;
                    $totalRate = $colorRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['color'=>$colorRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (88.5)*$request->qty;
                    $colorRate = '0.00';
                    $totalRate = $request->total-25;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['color'=>$colorRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            case '3':
                if($request->color > 0)
                {
                    $bannerRate = (126)*$request->qty;
                    $colorRate = 25;
                    $totalRate = $colorRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['color'=>$colorRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (126)*$request->qty;
                    $colorRate = '0.00';
                    $totalRate = $request->total-25;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['color'=>$colorRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            default:
                
            break;
        }
    }

    //Clip frame end

    //Poster frame start

    public function bannerSizePoster(Request $request)
    {
        $size = $request->size;
        switch ($size) {
            case '1':
                $bannerRate = 73.5;
                $colorRate = '0.00';
                $finalTotal = ($bannerRate*100)/50;
                return response()->json(['color'=>$colorRate,'total'=>$bannerRate,'final'=>$finalTotal]);
            break;
            case '3':
                $bannerRate = 109.5;
                $colorRate = '0.00';
                $finalTotal = ($bannerRate*100)/50;
                return response()->json(['color'=>$colorRate,'total'=>$bannerRate,'final'=>$finalTotal]);
            break;
            
            default:

            break;
        }
        
    }
    public function mainQtyPoster(Request $request)
    {
        $size = $request->size;
        switch ($size) {

            case '1':
                $bannerRate = 73.5;
                $colorRate = '0.00';
                $qtyRate = $bannerRate*$request->qty;
		        $finalTotal = ($qtyRate*100)/50;
                return response()->json(['color'=>$colorRate,'total'=>$qtyRate,'final'=>$finalTotal]);
            break;
            case '3':
                $bannerRate = 109.5;
                $colorRate = '0.00';
                $qtyRate = $bannerRate*$request->qty;
		        $finalTotal = ($qtyRate*100)/50;
                return response()->json(['color'=>$colorRate,'total'=>$qtyRate,'final'=>$finalTotal]);
            break;
            default:

            break;
        }
    }
    public function framePoster(Request $request)
    {
        $size = $request->size;
        switch ($size) {

            case '1':
                if($request->frame > 0)
                {
                    $bannerRate = (73.5)*$request->qty;
                    $frameRate = 49;
                    $totalRate = $frameRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['frame'=>$frameRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (73.5)*$request->qty;
                    $frameRate = '';
                    $totalRate = $request->total-49;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['frame'=>$frameRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            case '3':
                if($request->frame > 0)
                {
                    $bannerRate = (109.5)*$request->qty;
                    $frameRate = 73;
                    $totalRate = $frameRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['frame'=>$frameRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (109.5)*$request->qty;
                    $frameRate = '';
                    $totalRate = $request->total-73;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['frame'=>$frameRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            
            default:
               
            break;
        }
        
    }
    public function bannerAddPoster(Request $request)
    {
        $size = $request->size;
        switch ($size) {
           
            case '1':
                if($request->banner > 0)
                {
                    $bannerRate = (73.5)*$request->qty;
                    $bannerAddRate = 21;
                    $totalRate = $bannerAddRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['banner'=>$bannerAddRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (73.5)*$request->qty;
                    $bannerAddRate = '';
                    $totalRate = $request->total-21;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['banner'=>$bannerAddRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            case '3':
                if($request->banner > 0)
                {
                    $bannerRate = (109.5)*$request->qty;
                    $bannerAddRate = 29;
                    $totalRate = $bannerAddRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['banner'=>$bannerAddRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (109.5)*$request->qty;
                    $bannerAddRate = '';
                    $totalRate = $request->total-29;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['banner'=>$bannerAddRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            default:
                
            break;
        }
        
    }
    public function colorPoster(Request $request)
    {
        $size = $request->size;
        switch ($size) {
            
            case '1':
                if($request->color > 0)
                {
                    $bannerRate = (73.5)*$request->qty;
                    $colorRate = 25;
                    $totalRate = $colorRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['color'=>$colorRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (73.5)*$request->qty;
                    $colorRate = '0.00';
                    $totalRate = $request->total-25;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['color'=>$colorRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            case '3':
                if($request->color > 0)
                {
                    $bannerRate = (109.5)*$request->qty;
                    $colorRate = 25;
                    $totalRate = $colorRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['color'=>$colorRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (109.5)*$request->qty;
                    $colorRate = '0.00';
                    $totalRate = $request->total-25;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['color'=>$colorRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            default:
                
            break;
        }
    }

    //Poster frame end

    //Aluminum frame start

    public function bannerSizeAluminum(Request $request)
    {
        $size = $request->size;
        switch ($size) {
            case '792':
                $bannerRate = 177.75;
                $colorRate = '0.00';
                $finalTotal = ($bannerRate*100)/50;
                return response()->json(['color'=>$colorRate,'total'=>$bannerRate,'final'=>$finalTotal]);
            break;
            
            default:

            break;
        }
        
    }
    public function mainQtyAluminum(Request $request)
    {
        $size = $request->size;
        switch ($size) {

            case '792':
                $bannerRate = 177.75;
                $colorRate = '0.00';
                $qtyRate = $bannerRate*$request->qty;
		        $finalTotal = ($qtyRate*100)/50;
                return response()->json(['color'=>$colorRate,'total'=>$qtyRate,'final'=>$finalTotal]);
            break;
        
            default:

            break;
        }
    }
    public function frameAluminum(Request $request)
    {
        $size = $request->size;
        switch ($size) {

            case '792':
                if($request->frame > 0)
                {
                    $bannerRate = (177.75)*$request->qty;
                    $frameRate = 118.5;
                    $totalRate = $frameRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['frame'=>$frameRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (177.75)*$request->qty;
                    $frameRate = '';
                    $totalRate = $request->total-118.5;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['frame'=>$frameRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            
            default:
               
            break;
        }
        
    }
    public function bannerAddAluminum(Request $request)
    {
        $size = $request->size;
        switch ($size) {
           
            case '792':
                if($request->banner > 0)
                {
                    $bannerRate = (177.75)*$request->qty;
                    $bannerAddRate = 59;
                    $totalRate = $bannerAddRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['banner'=>$bannerAddRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (177.75)*$request->qty;
                    $bannerAddRate = '';
                    $totalRate = $request->total-59;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['banner'=>$bannerAddRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            
            default:
                
            break;
        }
        
    }
    public function colorAluminum(Request $request)
    {
        $size = $request->size;
        switch ($size) {
            
            case '792':
                if($request->color > 0)
                {
                    $bannerRate = (177.75)*$request->qty;
                    $colorRate = 68;
                    $totalRate = $colorRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['color'=>$colorRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (177.75)*$request->qty;
                    $colorRate = '0.00';
                    $totalRate = $request->total-68;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['color'=>$colorRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            
            default:
                
            break;
        }
    }

    //Aluminum frame end
}
