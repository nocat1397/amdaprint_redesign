<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrochureController extends Controller
{
    public function brochureSize(Request $request)
    {
        $size = $request->size;
        $paper = $request->paper;
        switch ($size) {
            case '23.38':
                switch ($paper) {
                    case '1':
                        $brochureRate = 41.5;
                        $finalTotal = ($brochureRate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                    break;
                    case '2':
                        $brochureRate = 42.12;
                        $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                    break;
                    case '3':
                        $brochureRate = 64.33;
                        $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                    break;
                    case '4':
                        $brochureRate = 66.19;
                        $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                    break;
                    default:
                        $brochureRate = 41.5;
                        $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                    break;
                }
            break;
            case '46.75':
                switch ($paper) {
                    case '1':
                        $brochureRate = 75;
                        $finalTotal = ($brochureRate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                    break;
                    case '2':
                        $brochureRate = 76.13;
                        $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                    break;
                    case '3':
                        $brochureRate = 116.25;
                        $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                    break;
                    case '4':
                        $brochureRate = 119.63;
                        $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                    break;
                    default:
                        $brochureRate = 75;
                        $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                    break;
                }
            break;
            case '46.75(2)':
                switch ($paper) {
                    case '1':
                        $brochureRate = 68;
                        $finalTotal = ($brochureRate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                    break;
                    case '2':
                        $brochureRate = 69.02;
                        $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                    break;
                    case '3':
                        $brochureRate = 105.40;
                        $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                    break;
                    case '4':
                        $brochureRate = 108.46;
                        $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                    break;
                    default:
                        $brochureRate = 68;
                        $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                    break;
                }
            break;
            case '93.5':
                switch ($paper) {
                    case '1':
                        $brochureRate = 86.5;
                        $finalTotal = ($brochureRate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                    break;
                    case '2':
                        $brochureRate = 87.80;
                        $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                    break;
                    case '3':
                        $brochureRate = 134.08;
                        $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                    break;
                    case '4':
                        $brochureRate = 137.97;
                        $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                    break;
                    default:
                        $brochureRate = 86.5;
                        $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                    break;
                }
            break;
            case '119':
                switch ($paper) {
                    case '1':
                        $brochureRate = 119.5;
                        $finalTotal = ($brochureRate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                    break;
                    case '2':
                        $brochureRate = 121.29;
                        $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                    break;
                    case '3':
                        $brochureRate = 185.23;
                        $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                    break;
                    case '4':
                        $brochureRate = 190.60;
                        $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                    break;
                    default:
                        $brochureRate = 119.5;
                        $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                    break;
                }
            break;
            case '108':
                switch ($paper) {
                    case '1':
                        $brochureRate = 118.5;
                        $finalTotal = ($brochureRate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                    break;
                    case '2':
                        $brochureRate = 120.28;
                        $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                    break;
                    case '3':
                        $brochureRate = 183.68;
                        $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                    break;
                    case '4':
                        $brochureRate = 189.01;
                        $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                    break;
                    default:
                        $brochureRate = 118.5;
                        $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                    break;
                }
            break;
            case '187':
                switch ($paper) {
                    case '1':
                        $brochureRate = 178.5;
                        $finalTotal = ($brochureRate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                    break;
                    case '2':
                        $brochureRate = 181.18;
                        $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                    break;
                    case '3':
                        $brochureRate = 276.68;
                        $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                    break;
                    case '4':
                        $brochureRate = 284.71;
                        $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                    break;
                    default:
                        $brochureRate = 178.5;
                        $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                    break;
                }
            break;
        }
        
    }
    public function mainQty(Request $request)
    {
        $size = $request->size;
        $paper = $request->paper;
        $qty = $request->qty;
        switch ($size) {
            case '23.38':
                switch ($paper) {
                    case '1':
                    switch ($qty) {
                        case '250':
                            $brochureRate = 41.5;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '500':
                            $brochureRate = 42.33;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '1000':
                            $brochureRate = 44.45;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '2000':
                            $brochureRate = 64.45;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '4000':
                            $brochureRate = 80.56;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '5000':
                            $brochureRate = 100.70;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '7000':
                            $brochureRate = 130.91;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '10000':
                            $brochureRate = 170.18;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '15000':
                            $brochureRate = 238.25;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '20000':
                            $brochureRate = 309.73;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '25000':
                            $brochureRate = 371.68;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '30000':
                            $brochureRate = 427.43;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '50000':
                            $brochureRate = 683.88;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                    }
                    break;
                    case '2':
                    switch ($qty) {
                        case '250':
                            $brochureRate = 42.12;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '500':
                            $brochureRate = 42.96;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '1000':
                            $brochureRate = 45.11;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '2000':
                            $brochureRate = 65.41;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '4000':
                            $brochureRate = 81.77;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '5000':
                            $brochureRate = 102.21;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '7000':
                            $brochureRate = 132.87;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '10000':
                            $brochureRate = 172.73;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '15000':
                            $brochureRate = 241.83;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '20000':
                            $brochureRate = 314.38;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '25000':
                            $brochureRate = 377.25;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '30000':
                            $brochureRate = 433.84;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '50000':
                            $brochureRate = 694.14;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                    }
                    break;
                    case '3':
                    switch ($qty) {
                        case '250':
                            $brochureRate = 64.33;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '500':
                            $brochureRate = 65.61;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '1000':
                            $brochureRate = 68.89;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '2000':
                            $brochureRate = 99.89;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '4000':
                            $brochureRate = 124.87;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '5000':
                            $brochureRate = 156.08;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '7000':
                            $brochureRate = 202.91;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '10000':
                            $brochureRate = 263.78;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '15000':
                            $brochureRate = 369.29;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '20000':
                            $brochureRate = 480.08;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '25000':
                            $brochureRate = 576.10;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '30000':
                            $brochureRate = 662.51;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '50000':
                            $brochureRate = 1060.02;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                    }
                    break;
                    case '4':
                    switch ($qty) {
                        case '250':
                            $brochureRate = 66.19;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '500':
                            $brochureRate = 67.52;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '1000':
                            $brochureRate = 70.89;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '2000':
                            $brochureRate = 102.79;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '4000':
                            $brochureRate = 128.49;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '5000':
                            $brochureRate = 160.62;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '7000':
                            $brochureRate = 208.80;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '10000':
                            $brochureRate = 271.44;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '15000':
                            $brochureRate = 380.02;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '20000':
                            $brochureRate = 494.02;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '25000':
                            $brochureRate = 592.82;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '30000':
                            $brochureRate = 681.75;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '50000':
                            $brochureRate = 1090.80;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                    }
                    break;
                }
            break;
            case '46.75':
                switch ($paper) {
                    case '1':
                    switch ($qty) {
                        case '250':
                            $brochureRate = 75.00;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '500':
                            $brochureRate = 76.50;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '1000':
                            $brochureRate = 80.33;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '2000':
                            $brochureRate = 116.47;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '4000':
                            $brochureRate = 145.59;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '5000':
                            $brochureRate = 181.99;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '7000':
                            $brochureRate = 236.58;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '10000':
                            $brochureRate = 307.56;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '15000':
                            $brochureRate = 430.58;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '20000':
                            $brochureRate = 559.75;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '25000':
                            $brochureRate = 671.70;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '30000':
                            $brochureRate = 772.46;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '50000':
                            $brochureRate = 1235.94;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                    }
                    break;
                    case '2':
                    switch ($qty) {
                        case '250':
                            $brochureRate = 76.13;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '500':
                            $brochureRate = 77.65;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '1000':
                            $brochureRate = 81.53;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '2000':
                            $brochureRate = 118.22;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '4000':
                            $brochureRate = 147.77;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '5000':
                            $brochureRate = 184.72;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '7000':
                            $brochureRate = 240.13;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '10000':
                            $brochureRate = 312.17;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '15000':
                            $brochureRate = 437.04;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '20000':
                            $brochureRate = 568.15;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '25000':
                            $brochureRate = 681.78;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '30000':
                            $brochureRate = 784.05;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '50000':
                            $brochureRate = 1254.47;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                    }
                    break;
                    case '3':
                    switch ($qty) {
                        case '250':
                            $brochureRate = 116.25;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '500':
                            $brochureRate = 118.58;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '1000':
                            $brochureRate = 124.50;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '2000':
                            $brochureRate = 180.53;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '4000':
                            $brochureRate = 225.66;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '5000':
                            $brochureRate = 282.08;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '7000':
                            $brochureRate = 366.70;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '10000':
                            $brochureRate = 476.71;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '15000':
                            $brochureRate = 667.40;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '20000':
                            $brochureRate = 867.62;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '25000':
                            $brochureRate = 1041.14;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '30000':
                            $brochureRate = 1197.31;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '50000':
                            $brochureRate = 1915.70;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                    }
                    break;
                    case '4':
                    switch ($qty) {
                        case '250':
                            $brochureRate = 119.63;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '500':
                            $brochureRate = 122.02;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '1000':
                            $brochureRate = 128.12;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '2000':
                            $brochureRate = 185.77;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '4000':
                            $brochureRate = 232.21;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '5000':
                            $brochureRate = 290.27;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '7000':
                            $brochureRate = 377.35;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '10000':
                            $brochureRate = 490.55;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '15000':
                            $brochureRate = 686.77;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '20000':
                            $brochureRate = 892.81;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '25000':
                            $brochureRate = 1071.37;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '30000':
                            $brochureRate = 1232.07;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '50000':
                            $brochureRate = 1971.32;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                    }
                    break;
                }
            break;
            case '46.75(2)':
                switch ($paper) {
                    case '1':
                    switch ($qty) {
                        case '250':
                            $brochureRate = 68.00;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '500':
                            $brochureRate = 69.36;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '1000':
                            $brochureRate = 72.83;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '2000':
                            $brochureRate = 105.60;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '4000':
                            $brochureRate = 132.00;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '5000':
                            $brochureRate = 165.00;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '7000':
                            $brochureRate = 214.50;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '10000':
                            $brochureRate = 278.85;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '15000':
                            $brochureRate = 390.39;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '20000':
                            $brochureRate = 507.51;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '25000':
                            $brochureRate = 609.01;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '30000':
                            $brochureRate = 700.36;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '50000':
                            $brochureRate = 1120.58;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                    }
                    break;
                    case '2':
                    switch ($qty) {
                        case '250':
                            $brochureRate = 69.02;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '500':
                            $brochureRate = 70.40;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '1000':
                            $brochureRate = 73.92;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '2000':
                            $brochureRate = 107.18;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '4000':
                            $brochureRate = 133.98;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '5000':
                            $brochureRate = 167.48;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '7000':
                            $brochureRate = 217.72;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '10000':
                            $brochureRate = 283.03;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '15000':
                            $brochureRate = 396.25;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '20000':
                            $brochureRate = 515.12;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '25000':
                            $brochureRate = 618.15;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '30000':
                            $brochureRate = 710.87;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '50000':
                            $brochureRate = 1137.39;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                    }
                    break;
                    case '3':
                    switch ($qty) {
                        case '250':
                            $brochureRate = 105.40;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '500':
                            $brochureRate = 107.51;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '1000':
                            $brochureRate = 112.88;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '2000':
                            $brochureRate = 163.68;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '4000':
                            $brochureRate = 204.60;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '5000':
                            $brochureRate = 255.75;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '7000':
                            $brochureRate = 332.48;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '10000':
                            $brochureRate = 432.22;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '15000':
                            $brochureRate = 605.11;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '20000':
                            $brochureRate = 786.64;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '25000':
                            $brochureRate = 943.97;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '30000':
                            $brochureRate = 1085.56;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '50000':
                            $brochureRate = 1736.90;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                    }
                    break;
                    case '4':
                    switch ($qty) {
                        case '250':
                            $brochureRate = 108.46;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '500':
                            $brochureRate = 110.63;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '1000':
                            $brochureRate = 116.16;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '2000':
                            $brochureRate = 168.43;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '4000':
                            $brochureRate = 210.54;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '5000':
                            $brochureRate = 263.18;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '7000':
                            $brochureRate = 342.13;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '10000':
                            $brochureRate = 444.77;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '15000':
                            $brochureRate = 622.68;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '20000':
                            $brochureRate = 809.48;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '25000':
                            $brochureRate = 971.37;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '30000':
                            $brochureRate = 1117.08;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '50000':
                            $brochureRate = 1787.33;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                    }
                    break;
                }
            break;
            case '93.5':
                switch ($paper) {
                    case '1':
                    switch ($qty) {
                        case '250':
                            $brochureRate = 86.5;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '500':
                            $brochureRate = 108.13;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '1000':
                            $brochureRate = 135.16;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '2000':
                            $brochureRate = 195.98;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '4000':
                            $brochureRate = 254.77;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '5000':
                            $brochureRate = 356.68;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '7000':
                            $brochureRate = 463.68;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '10000':
                            $brochureRate = 602.78;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '15000':
                            $brochureRate = 783.62;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '20000':
                            $brochureRate = 979.53;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '25000':
                            $brochureRate = 1175.43;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '30000':
                            $brochureRate = 1528.06;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '50000':
                            $brochureRate = 2062.88;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                    }
                    break;
                    case '2':
                    switch ($qty) {
                        case '250':
                            $brochureRate = 87.80;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '500':
                            $brochureRate = 109.75;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '1000':
                            $brochureRate = 137.18;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '2000':
                            $brochureRate = 198.92;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '4000':
                            $brochureRate = 258.59;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '5000':
                            $brochureRate = 362.03;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '7000':
                            $brochureRate = 470.64;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '10000':
                            $brochureRate = 611.83;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '15000':
                            $brochureRate = 795.37;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '20000':
                            $brochureRate = 994.22;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '25000':
                            $brochureRate = 1193.06;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '30000':
                            $brochureRate = 1550.98;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '50000':
                            $brochureRate = 2093.82;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                    }
                    break;
                    case '3':
                    switch ($qty) {
                        case '250':
                            $brochureRate = 134.08;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '500':
                            $brochureRate = 167.59;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '1000':
                            $brochureRate = 209.49;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '2000':
                            $brochureRate = 303.76;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '4000':
                            $brochureRate = 394.89;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '5000':
                            $brochureRate = 552.85;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '7000':
                            $brochureRate = 718.70;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '10000':
                            $brochureRate = 934.32;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '15000':
                            $brochureRate = 1214.61;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '20000':
                            $brochureRate = 1518.26;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '25000':
                            $brochureRate = 1821.92;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '30000':
                            $brochureRate = 2368.49;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '50000':
                            $brochureRate = 3197.46;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                    }
                    break;
                    case '4':
                    switch ($qty) {
                        case '250':
                            $brochureRate = 137.97;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '500':
                            $brochureRate = 172.46;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '1000':
                            $brochureRate = 215.57;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '2000':
                            $brochureRate = 312.58;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '4000':
                            $brochureRate = 406.36;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '5000':
                            $brochureRate = 568.90;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '7000':
                            $brochureRate = 739.57;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '10000':
                            $brochureRate = 961.44;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '15000':
                            $brochureRate = 1249.87;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '20000':
                            $brochureRate = 1562.34;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '25000':
                            $brochureRate = 1874.81;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '30000':
                            $brochureRate = 2437.25;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '50000':
                            $brochureRate = 3290.29;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                    }
                    break;
                }
            break;
            case '119':
                switch ($paper) {
                    case '1':
                    switch ($qty) {
                        case '250':
                            $brochureRate = 119.5;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '500':
                            $brochureRate = 149.38;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '1000':
                            $brochureRate = 186.72;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '2000':
                            $brochureRate = 270.74;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '4000':
                            $brochureRate = 351.96;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '5000':
                            $brochureRate = 492.75;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '7000':
                            $brochureRate = 640.58;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '10000':
                            $brochureRate = 832.75;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '15000':
                            $brochureRate = 1082.57;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '20000':
                            $brochureRate = 1353.22;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '25000':
                            $brochureRate = 1623.86;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '30000':
                            $brochureRate = 2111.02;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '50000':
                            $brochureRate = 2849.87;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                    }
                    break;
                    case '2':
                    switch ($qty) {
                        case '250':
                            $brochureRate = 121.29;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '500':
                            $brochureRate = 151.62;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '1000':
                            $brochureRate = 189.52;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '2000':
                            $brochureRate = 274.80;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '4000':
                            $brochureRate = 357.24;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '5000':
                            $brochureRate = 500.14;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '7000':
                            $brochureRate = 650.18;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '10000':
                            $brochureRate = 845.24;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '15000':
                            $brochureRate = 1098.81;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '20000':
                            $brochureRate = 1373.52;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '25000':
                            $brochureRate = 1648.22;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '30000':
                            $brochureRate = 2142.68;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '50000':
                            $brochureRate = 2892.62;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                    }
                    break;
                    case '3':
                    switch ($qty) {
                        case '250':
                            $brochureRate = 185.23;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '500':
                            $brochureRate = 231.53;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '1000':
                            $brochureRate = 289.41;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '2000':
                            $brochureRate = 419.65;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '4000':
                            $brochureRate = 545.55;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '5000':
                            $brochureRate = 763.76;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '7000':
                            $brochureRate = 992.89;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '10000':
                            $brochureRate = 1290.76;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '15000':
                            $brochureRate = 1677.99;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '20000':
                            $brochureRate = 2097.49;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '25000':
                            $brochureRate = 2516.98;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '30000':
                            $brochureRate = 3272.08;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '50000':
                            $brochureRate = 4417.31;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                    }
                    break;
                    case '4':
                    switch ($qty) {
                        case '250':
                            $brochureRate = 190.60;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '500':
                            $brochureRate = 238.25;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '1000':
                            $brochureRate = 297.82;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '2000':
                            $brochureRate = 431.83;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '4000':
                            $brochureRate = 561.38;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '5000':
                            $brochureRate = 785.94;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '7000':
                            $brochureRate = 1021.72;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '10000':
                            $brochureRate = 1328.23;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '15000':
                            $brochureRate = 1726.70;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '20000':
                            $brochureRate = 2158.38;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '25000':
                            $brochureRate = 2590.06;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '30000':
                            $brochureRate = 3367.07;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '50000':
                            $brochureRate = 4545.55;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                    }
                    break;
                }
            break;
            case '108':
                switch ($paper) {
                    case '1':
                    switch ($qty) {
                        case '250':
                            $brochureRate = 118.5;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '500':
                            $brochureRate = 124.43;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '1000':
                            $brochureRate = 136.87;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '2000':
                            $brochureRate = 198.46;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '4000':
                            $brochureRate = 248.07;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '5000':
                            $brochureRate = 347.30;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '7000':
                            $brochureRate = 451.49;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '10000':
                            $brochureRate = 586.94;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '15000':
                            $brochureRate = 763.02;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '20000':
                            $brochureRate = 991.93;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '25000':
                            $brochureRate = 1190.31;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '30000':
                            $brochureRate = 1547.41;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '50000':
                            $brochureRate = 2011.63;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                    }
                    break;
                    case '2':
                    switch ($qty) {
                        case '250':
                            $brochureRate = 120.28;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '500':
                            $brochureRate = 126.29;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '1000':
                            $brochureRate = 138.92;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '2000':
                            $brochureRate = 201.43;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '4000':
                            $brochureRate = 251.79;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '5000':
                            $brochureRate = 352.51;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '7000':
                            $brochureRate = 458.26;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '10000':
                            $brochureRate = 595.74;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '15000':
                            $brochureRate = 774.47;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '20000':
                            $brochureRate = 1006.81;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '25000':
                            $brochureRate = 1208.17;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '30000':
                            $brochureRate = 1570.62;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '50000':
                            $brochureRate = 2041.80;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                    }
                    break;
                    case '3':
                    switch ($qty) {
                        case '250':
                            $brochureRate = 183.68;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '500':
                            $brochureRate = 192.86;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '1000':
                            $brochureRate = 212.14;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '2000':
                            $brochureRate = 307.61;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '4000':
                            $brochureRate = 384.51;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '5000':
                            $brochureRate = 538.32;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '7000':
                            $brochureRate = 699.81;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '10000':
                            $brochureRate = 909.76;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '15000':
                            $brochureRate = 1182.68;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '20000':
                            $brochureRate = 1537.49;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '25000':
                            $brochureRate = 1844.98;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '30000':
                            $brochureRate = 2398.48;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '50000':
                            $brochureRate = 3118.02;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                    }
                    break;
                    case '4':
                    switch ($qty) {
                        case '250':
                            $brochureRate = 189.01;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '500':
                            $brochureRate = 198.46;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '1000':
                            $brochureRate = 218.30;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '2000':
                            $brochureRate = 316.54;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '4000':
                            $brochureRate = 395.68;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '5000':
                            $brochureRate = 553.95;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '7000':
                            $brochureRate = 720.13;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '10000':
                            $brochureRate = 936.17;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '15000':
                            $brochureRate = 1217.02;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '20000':
                            $brochureRate = 1582.12;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '25000':
                            $brochureRate = 1898.55;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '30000':
                            $brochureRate = 2468.11;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '50000':
                            $brochureRate = 3208.55;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                    }
                    break;
                }
            break;
            case '187':
                switch ($paper) {
                    case '1':
                    switch ($qty) {
                        case '250':
                            $brochureRate = 178.5;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '500':
                            $brochureRate = 214.20;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '1000':
                            $brochureRate = 267.75;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '2000':
                            $brochureRate = 388.24;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '4000':
                            $brochureRate = 524.12;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '5000':
                            $brochureRate = 733.77;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '7000':
                            $brochureRate = 917.21;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '10000':
                            $brochureRate = 1192.37;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '15000':
                            $brochureRate = 1669.32;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '20000':
                            $brochureRate = 2086.66;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '25000':
                            $brochureRate = 2503.99;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '30000':
                            $brochureRate = 3255.18;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '50000':
                            $brochureRate = 4394.50;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                    }
                    break;
                    case '2':
                    switch ($qty) {
                        case '250':
                            $brochureRate = 181.18;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '500':
                            $brochureRate = 217.41;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '1000':
                            $brochureRate = 271.77;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '2000':
                            $brochureRate = 394.06;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '4000':
                            $brochureRate = 531.98;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '5000':
                            $brochureRate = 744.78;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '7000':
                            $brochureRate = 930.97;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '10000':
                            $brochureRate = 1210.26;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '15000':
                            $brochureRate = 1694.36;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '20000':
                            $brochureRate = 2117.96;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '25000':
                            $brochureRate = 2541.55;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '30000':
                            $brochureRate = 3304.01;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '50000':
                            $brochureRate = 4460.41;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                    }
                    break;
                    case '3':
                    switch ($qty) {
                        case '250':
                            $brochureRate = 276.68;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '500':
                            $brochureRate = 332.01;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '1000':
                            $brochureRate = 415.01;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '2000':
                            $brochureRate = 601.77;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '4000':
                            $brochureRate = 812.39;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '5000':
                            $brochureRate = 1137.34;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '7000':
                            $brochureRate = 1421.68;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '10000':
                            $brochureRate = 1848.18;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '15000':
                            $brochureRate = 2587.45;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '20000':
                            $brochureRate = 3234.32;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '25000':
                            $brochureRate = 3881.18;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '30000':
                            $brochureRate = 5045.53;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '50000':
                            $brochureRate = 6811.47;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                    }
                    break;
                    case '4':
                    switch ($qty) {
                        case '250':
                            $brochureRate = 284.71;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '500':
                            $brochureRate = 341.65;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '1000':
                            $brochureRate = 427.06;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '2000':
                            $brochureRate = 619.24;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '4000':
                            $brochureRate = 835.97;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '5000':
                            $brochureRate = 1170.36;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '7000':
                            $brochureRate = 1462.95;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '10000':
                            $brochureRate = 1901.84;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '15000':
                            $brochureRate = 2662.57;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '20000':
                            $brochureRate = 3328.22;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '25000':
                            $brochureRate = 3993.86;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '30000':
                            $brochureRate = 5192.02;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '50000':
                            $brochureRate = 7009.22;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                    }
                    break;
                }
            break;
        }
    }
    public function paperType(Request $request)
    {
        $size = $request->size;
        $paper = $request->paper;
        $qty = $request->qty;
        switch ($size) {
            case '23.38':
                switch ($paper) {
                    case '1':
                    switch ($qty) {
                        case '250':
                            $brochureRate = 41.5;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '500':
                            $brochureRate = 42.33;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '1000':
                            $brochureRate = 44.45;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '2000':
                            $brochureRate = 64.45;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '4000':
                            $brochureRate = 80.56;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '5000':
                            $brochureRate = 100.70;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '7000':
                            $brochureRate = 130.91;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '10000':
                            $brochureRate = 170.18;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '15000':
                            $brochureRate = 238.25;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '20000':
                            $brochureRate = 309.73;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '25000':
                            $brochureRate = 371.68;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '30000':
                            $brochureRate = 427.43;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '50000':
                            $brochureRate = 683.88;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                    }
                    break;
                    case '2':
                    switch ($qty) {
                        case '250':
                            $brochureRate = 42.12;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '500':
                            $brochureRate = 42.96;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '1000':
                            $brochureRate = 45.11;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '2000':
                            $brochureRate = 65.41;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '4000':
                            $brochureRate = 81.77;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '5000':
                            $brochureRate = 102.21;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '7000':
                            $brochureRate = 132.87;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '10000':
                            $brochureRate = 172.73;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '15000':
                            $brochureRate = 241.83;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '20000':
                            $brochureRate = 314.38;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '25000':
                            $brochureRate = 377.25;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '30000':
                            $brochureRate = 433.84;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '50000':
                            $brochureRate = 694.14;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                    }
                    break;
                    case '3':
                    switch ($qty) {
                        case '250':
                            $brochureRate = 64.33;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '500':
                            $brochureRate = 65.61;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '1000':
                            $brochureRate = 68.89;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '2000':
                            $brochureRate = 99.89;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '4000':
                            $brochureRate = 124.87;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '5000':
                            $brochureRate = 156.08;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '7000':
                            $brochureRate = 202.91;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '10000':
                            $brochureRate = 263.78;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '15000':
                            $brochureRate = 369.29;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '20000':
                            $brochureRate = 480.08;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '25000':
                            $brochureRate = 576.10;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '30000':
                            $brochureRate = 662.51;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '50000':
                            $brochureRate = 1060.02;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                    }
                    break;
                    case '4':
                    switch ($qty) {
                        case '250':
                            $brochureRate = 66.19;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '500':
                            $brochureRate = 67.52;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '1000':
                            $brochureRate = 70.89;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '2000':
                            $brochureRate = 102.79;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '4000':
                            $brochureRate = 128.49;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '5000':
                            $brochureRate = 160.62;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '7000':
                            $brochureRate = 208.80;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '10000':
                            $brochureRate = 271.44;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '15000':
                            $brochureRate = 380.02;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '20000':
                            $brochureRate = 494.02;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '25000':
                            $brochureRate = 592.82;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '30000':
                            $brochureRate = 681.75;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '50000':
                            $brochureRate = 1090.80;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                    }
                    break;
                }
            break;
            case '46.75':
                switch ($paper) {
                    case '1':
                    switch ($qty) {
                        case '250':
                            $brochureRate = 75.00;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '500':
                            $brochureRate = 76.50;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '1000':
                            $brochureRate = 80.33;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '2000':
                            $brochureRate = 116.47;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '4000':
                            $brochureRate = 145.59;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '5000':
                            $brochureRate = 181.99;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '7000':
                            $brochureRate = 236.58;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '10000':
                            $brochureRate = 307.56;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '15000':
                            $brochureRate = 430.58;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '20000':
                            $brochureRate = 559.75;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '25000':
                            $brochureRate = 671.70;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '30000':
                            $brochureRate = 772.46;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '50000':
                            $brochureRate = 1235.94;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                    }
                    break;
                    case '2':
                    switch ($qty) {
                        case '250':
                            $brochureRate = 76.13;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '500':
                            $brochureRate = 77.65;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '1000':
                            $brochureRate = 81.53;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '2000':
                            $brochureRate = 118.22;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '4000':
                            $brochureRate = 147.77;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '5000':
                            $brochureRate = 184.72;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '7000':
                            $brochureRate = 240.13;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '10000':
                            $brochureRate = 312.17;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '15000':
                            $brochureRate = 437.04;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '20000':
                            $brochureRate = 568.15;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '25000':
                            $brochureRate = 681.78;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '30000':
                            $brochureRate = 784.05;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '50000':
                            $brochureRate = 1254.47;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                    }
                    break;
                    case '3':
                    switch ($qty) {
                        case '250':
                            $brochureRate = 116.25;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '500':
                            $brochureRate = 118.58;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '1000':
                            $brochureRate = 124.50;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '2000':
                            $brochureRate = 180.53;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '4000':
                            $brochureRate = 225.66;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '5000':
                            $brochureRate = 282.08;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '7000':
                            $brochureRate = 366.70;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '10000':
                            $brochureRate = 476.71;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '15000':
                            $brochureRate = 667.40;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '20000':
                            $brochureRate = 867.62;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '25000':
                            $brochureRate = 1041.14;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '30000':
                            $brochureRate = 1197.31;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '50000':
                            $brochureRate = 1915.70;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                    }
                    break;
                    case '4':
                    switch ($qty) {
                        case '250':
                            $brochureRate = 119.63;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '500':
                            $brochureRate = 122.02;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '1000':
                            $brochureRate = 128.12;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '2000':
                            $brochureRate = 185.77;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '4000':
                            $brochureRate = 232.21;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '5000':
                            $brochureRate = 290.27;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '7000':
                            $brochureRate = 377.35;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '10000':
                            $brochureRate = 490.55;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '15000':
                            $brochureRate = 686.77;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '20000':
                            $brochureRate = 892.81;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '25000':
                            $brochureRate = 1071.37;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '30000':
                            $brochureRate = 1232.07;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '50000':
                            $brochureRate = 1971.32;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                    }
                    break;
                }
            break;
            case '46.75(2)':
                switch ($paper) {
                    case '1':
                    switch ($qty) {
                        case '250':
                            $brochureRate = 68.00;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '500':
                            $brochureRate = 69.36;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '1000':
                            $brochureRate = 72.83;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '2000':
                            $brochureRate = 105.60;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '4000':
                            $brochureRate = 132.00;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '5000':
                            $brochureRate = 165.00;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '7000':
                            $brochureRate = 214.50;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '10000':
                            $brochureRate = 278.85;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '15000':
                            $brochureRate = 390.39;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '20000':
                            $brochureRate = 507.51;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '25000':
                            $brochureRate = 609.01;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '30000':
                            $brochureRate = 700.36;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '50000':
                            $brochureRate = 1120.58;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                    }
                    break;
                    case '2':
                    switch ($qty) {
                        case '250':
                            $brochureRate = 69.02;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '500':
                            $brochureRate = 70.40;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '1000':
                            $brochureRate = 73.92;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '2000':
                            $brochureRate = 107.18;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '4000':
                            $brochureRate = 133.98;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '5000':
                            $brochureRate = 167.48;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '7000':
                            $brochureRate = 217.72;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '10000':
                            $brochureRate = 283.03;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '15000':
                            $brochureRate = 396.25;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '20000':
                            $brochureRate = 515.12;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '25000':
                            $brochureRate = 618.15;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '30000':
                            $brochureRate = 710.87;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '50000':
                            $brochureRate = 1137.39;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                    }
                    break;
                    case '3':
                    switch ($qty) {
                        case '250':
                            $brochureRate = 105.40;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '500':
                            $brochureRate = 107.51;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '1000':
                            $brochureRate = 112.88;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '2000':
                            $brochureRate = 163.68;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '4000':
                            $brochureRate = 204.60;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '5000':
                            $brochureRate = 255.75;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '7000':
                            $brochureRate = 332.48;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '10000':
                            $brochureRate = 432.22;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '15000':
                            $brochureRate = 605.11;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '20000':
                            $brochureRate = 786.64;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '25000':
                            $brochureRate = 943.97;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '30000':
                            $brochureRate = 1085.56;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '50000':
                            $brochureRate = 1736.90;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                    }
                    break;
                    case '4':
                    switch ($qty) {
                        case '250':
                            $brochureRate = 108.46;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '500':
                            $brochureRate = 110.63;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '1000':
                            $brochureRate = 116.16;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '2000':
                            $brochureRate = 168.43;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '4000':
                            $brochureRate = 210.54;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '5000':
                            $brochureRate = 263.18;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '7000':
                            $brochureRate = 342.13;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '10000':
                            $brochureRate = 444.77;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '15000':
                            $brochureRate = 622.68;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '20000':
                            $brochureRate = 809.48;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '25000':
                            $brochureRate = 971.37;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '30000':
                            $brochureRate = 1117.08;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '50000':
                            $brochureRate = 1787.33;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                    }
                    break;
                }
            break;
            case '93.5':
                switch ($paper) {
                    case '1':
                    switch ($qty) {
                        case '250':
                            $brochureRate = 86.5;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '500':
                            $brochureRate = 108.13;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '1000':
                            $brochureRate = 135.16;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '2000':
                            $brochureRate = 195.98;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '4000':
                            $brochureRate = 254.77;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '5000':
                            $brochureRate = 356.68;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '7000':
                            $brochureRate = 463.68;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '10000':
                            $brochureRate = 602.78;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '15000':
                            $brochureRate = 783.62;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '20000':
                            $brochureRate = 979.53;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '25000':
                            $brochureRate = 1175.43;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '30000':
                            $brochureRate = 1528.06;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '50000':
                            $brochureRate = 2062.88;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                    }
                    break;
                    case '2':
                    switch ($qty) {
                        case '250':
                            $brochureRate = 87.80;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '500':
                            $brochureRate = 109.75;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '1000':
                            $brochureRate = 137.18;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '2000':
                            $brochureRate = 198.92;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '4000':
                            $brochureRate = 258.59;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '5000':
                            $brochureRate = 362.03;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '7000':
                            $brochureRate = 470.64;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '10000':
                            $brochureRate = 611.83;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '15000':
                            $brochureRate = 795.37;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '20000':
                            $brochureRate = 994.22;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '25000':
                            $brochureRate = 1193.06;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '30000':
                            $brochureRate = 1550.98;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '50000':
                            $brochureRate = 2093.82;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                    }
                    break;
                    case '3':
                    switch ($qty) {
                        case '250':
                            $brochureRate = 134.08;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '500':
                            $brochureRate = 167.59;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '1000':
                            $brochureRate = 209.49;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '2000':
                            $brochureRate = 303.76;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '4000':
                            $brochureRate = 394.89;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '5000':
                            $brochureRate = 552.85;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '7000':
                            $brochureRate = 718.70;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '10000':
                            $brochureRate = 934.32;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '15000':
                            $brochureRate = 1214.61;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '20000':
                            $brochureRate = 1518.26;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '25000':
                            $brochureRate = 1821.92;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '30000':
                            $brochureRate = 2368.49;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '50000':
                            $brochureRate = 3197.46;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                    }
                    break;
                    case '4':
                    switch ($qty) {
                        case '250':
                            $brochureRate = 137.97;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '500':
                            $brochureRate = 172.46;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '1000':
                            $brochureRate = 215.57;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '2000':
                            $brochureRate = 312.58;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '4000':
                            $brochureRate = 406.36;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '5000':
                            $brochureRate = 568.90;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '7000':
                            $brochureRate = 739.57;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '10000':
                            $brochureRate = 961.44;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '15000':
                            $brochureRate = 1249.87;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '20000':
                            $brochureRate = 1562.34;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '25000':
                            $brochureRate = 1874.81;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '30000':
                            $brochureRate = 2437.25;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '50000':
                            $brochureRate = 3290.29;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                    }
                    break;
                }
            break;
            case '119':
                switch ($paper) {
                    case '1':
                    switch ($qty) {
                        case '250':
                            $brochureRate = 119.5;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '500':
                            $brochureRate = 149.38;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '1000':
                            $brochureRate = 186.72;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '2000':
                            $brochureRate = 270.74;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '4000':
                            $brochureRate = 351.96;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '5000':
                            $brochureRate = 492.75;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '7000':
                            $brochureRate = 640.58;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '10000':
                            $brochureRate = 832.75;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '15000':
                            $brochureRate = 1082.57;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '20000':
                            $brochureRate = 1353.22;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '25000':
                            $brochureRate = 1623.86;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '30000':
                            $brochureRate = 2111.02;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '50000':
                            $brochureRate = 2849.87;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                    }
                    break;
                    case '2':
                    switch ($qty) {
                        case '250':
                            $brochureRate = 121.29;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '500':
                            $brochureRate = 151.62;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '1000':
                            $brochureRate = 189.52;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '2000':
                            $brochureRate = 274.80;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '4000':
                            $brochureRate = 357.24;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '5000':
                            $brochureRate = 500.14;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '7000':
                            $brochureRate = 650.18;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '10000':
                            $brochureRate = 845.24;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '15000':
                            $brochureRate = 1098.81;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '20000':
                            $brochureRate = 1373.52;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '25000':
                            $brochureRate = 1648.22;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '30000':
                            $brochureRate = 2142.68;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '50000':
                            $brochureRate = 2892.62;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                    }
                    break;
                    case '3':
                    switch ($qty) {
                        case '250':
                            $brochureRate = 185.23;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '500':
                            $brochureRate = 231.53;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '1000':
                            $brochureRate = 289.41;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '2000':
                            $brochureRate = 419.65;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '4000':
                            $brochureRate = 545.55;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '5000':
                            $brochureRate = 763.76;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '7000':
                            $brochureRate = 992.89;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '10000':
                            $brochureRate = 1290.76;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '15000':
                            $brochureRate = 1677.99;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '20000':
                            $brochureRate = 2097.49;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '25000':
                            $brochureRate = 2516.98;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '30000':
                            $brochureRate = 3272.08;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '50000':
                            $brochureRate = 4417.31;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                    }
                    break;
                    case '4':
                    switch ($qty) {
                        case '250':
                            $brochureRate = 190.60;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '500':
                            $brochureRate = 238.25;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '1000':
                            $brochureRate = 297.82;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '2000':
                            $brochureRate = 431.83;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '4000':
                            $brochureRate = 561.38;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '5000':
                            $brochureRate = 785.94;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '7000':
                            $brochureRate = 1021.72;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '10000':
                            $brochureRate = 1328.23;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '15000':
                            $brochureRate = 1726.70;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '20000':
                            $brochureRate = 2158.38;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '25000':
                            $brochureRate = 2590.06;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '30000':
                            $brochureRate = 3367.07;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '50000':
                            $brochureRate = 4545.55;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                    }
                    break;
                }
            break;
            case '108':
                switch ($paper) {
                    case '1':
                    switch ($qty) {
                        case '250':
                            $brochureRate = 118.5;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '500':
                            $brochureRate = 124.43;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '1000':
                            $brochureRate = 136.87;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '2000':
                            $brochureRate = 198.46;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '4000':
                            $brochureRate = 248.07;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '5000':
                            $brochureRate = 347.30;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '7000':
                            $brochureRate = 451.49;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '10000':
                            $brochureRate = 586.94;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '15000':
                            $brochureRate = 763.02;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '20000':
                            $brochureRate = 991.93;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '25000':
                            $brochureRate = 1190.31;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '30000':
                            $brochureRate = 1547.41;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '50000':
                            $brochureRate = 2011.63;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                    }
                    break;
                    case '2':
                    switch ($qty) {
                        case '250':
                            $brochureRate = 120.28;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '500':
                            $brochureRate = 126.29;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '1000':
                            $brochureRate = 138.92;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '2000':
                            $brochureRate = 201.43;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '4000':
                            $brochureRate = 251.79;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '5000':
                            $brochureRate = 352.51;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '7000':
                            $brochureRate = 458.26;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '10000':
                            $brochureRate = 595.74;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '15000':
                            $brochureRate = 774.47;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '20000':
                            $brochureRate = 1006.81;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '25000':
                            $brochureRate = 1208.17;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '30000':
                            $brochureRate = 1570.62;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '50000':
                            $brochureRate = 2041.80;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                    }
                    break;
                    case '3':
                    switch ($qty) {
                        case '250':
                            $brochureRate = 183.68;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '500':
                            $brochureRate = 192.86;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '1000':
                            $brochureRate = 212.14;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '2000':
                            $brochureRate = 307.61;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '4000':
                            $brochureRate = 384.51;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '5000':
                            $brochureRate = 538.32;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '7000':
                            $brochureRate = 699.81;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '10000':
                            $brochureRate = 909.76;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '15000':
                            $brochureRate = 1182.68;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '20000':
                            $brochureRate = 1537.49;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '25000':
                            $brochureRate = 1844.98;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '30000':
                            $brochureRate = 2398.48;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '50000':
                            $brochureRate = 3118.02;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                    }
                    break;
                    case '4':
                    switch ($qty) {
                        case '250':
                            $brochureRate = 189.01;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '500':
                            $brochureRate = 198.46;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '1000':
                            $brochureRate = 218.30;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '2000':
                            $brochureRate = 316.54;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '4000':
                            $brochureRate = 395.68;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '5000':
                            $brochureRate = 553.95;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '7000':
                            $brochureRate = 720.13;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '10000':
                            $brochureRate = 936.17;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '15000':
                            $brochureRate = 1217.02;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '20000':
                            $brochureRate = 1582.12;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '25000':
                            $brochureRate = 1898.55;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '30000':
                            $brochureRate = 2468.11;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '50000':
                            $brochureRate = 3208.55;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                    }
                    break;
                }
            break;
            case '187':
                switch ($paper) {
                    case '1':
                    switch ($qty) {
                        case '250':
                            $brochureRate = 178.5;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '500':
                            $brochureRate = 214.20;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '1000':
                            $brochureRate = 267.75;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '2000':
                            $brochureRate = 388.24;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '4000':
                            $brochureRate = 524.12;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '5000':
                            $brochureRate = 733.77;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '7000':
                            $brochureRate = 917.21;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '10000':
                            $brochureRate = 1192.37;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '15000':
                            $brochureRate = 1669.32;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '20000':
                            $brochureRate = 2086.66;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '25000':
                            $brochureRate = 2503.99;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '30000':
                            $brochureRate = 3255.18;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '50000':
                            $brochureRate = 4394.50;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                    }
                    break;
                    case '2':
                    switch ($qty) {
                        case '250':
                            $brochureRate = 181.18;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '500':
                            $brochureRate = 217.41;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '1000':
                            $brochureRate = 271.77;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '2000':
                            $brochureRate = 394.06;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '4000':
                            $brochureRate = 531.98;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '5000':
                            $brochureRate = 744.78;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '7000':
                            $brochureRate = 930.97;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '10000':
                            $brochureRate = 1210.26;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '15000':
                            $brochureRate = 1694.36;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '20000':
                            $brochureRate = 2117.96;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '25000':
                            $brochureRate = 2541.55;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '30000':
                            $brochureRate = 3304.01;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '50000':
                            $brochureRate = 4460.41;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                    }
                    break;
                    case '3':
                    switch ($qty) {
                        case '250':
                            $brochureRate = 276.68;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '500':
                            $brochureRate = 332.01;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '1000':
                            $brochureRate = 415.01;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '2000':
                            $brochureRate = 601.77;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '4000':
                            $brochureRate = 812.39;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '5000':
                            $brochureRate = 1137.34;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '7000':
                            $brochureRate = 1421.68;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '10000':
                            $brochureRate = 1848.18;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '15000':
                            $brochureRate = 2587.45;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '20000':
                            $brochureRate = 3234.32;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '25000':
                            $brochureRate = 3881.18;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '30000':
                            $brochureRate = 5045.53;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '50000':
                            $brochureRate = 6811.47;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                    }
                    break;
                    case '4':
                    switch ($qty) {
                        case '250':
                            $brochureRate = 284.71;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '500':
                            $brochureRate = 341.65;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '1000':
                            $brochureRate = 427.06;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '2000':
                            $brochureRate = 619.24;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '4000':
                            $brochureRate = 835.97;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '5000':
                            $brochureRate = 1170.36;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '7000':
                            $brochureRate = 1462.95;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '10000':
                            $brochureRate = 1901.84;
		                    $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '15000':
                            $brochureRate = 2662.57;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '20000':
                            $brochureRate = 3328.22;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '25000':
                            $brochureRate = 3993.86;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '30000':
                            $brochureRate = 5192.02;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                        case '50000':
                            $brochureRate = 7009.22;
		                    $finalTotal = ($brochureRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$brochureRate]);
                        break;
                    }
                    break;
                }
            break;
        }
    }
    public function printSide(Request $request)
    {
        $size = $request->size;
        $paper = $request->paper;
        $qty = $request->qty;
        $printSide = $request->printside;
        $total = $request->total;

        switch ($size) {
            case '23.38':
                switch ($paper) {
                    case '1':
                    switch ($qty) {
                        case '250':
                        if($printSide > 0){
                            $printRate = (41.5*55)/100;
                            $brochureRate = $total+$printRate;
                            $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                        } else {
                            $printRate = (41.5*55)/100;
                            $brochureRate = $total-$printRate;
                            $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                        }
                        break;
                        case '500':
                        if($printSide > 0){
                            $printRate = (42.33*55)/100;
                            $brochureRate = $total+$printRate;
                            $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                        } else {
                            $printRate = (42.33*55)/100;
                            $brochureRate = $total-$printRate;
                            $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                        }
                        break;
                        case '1000':
                            if($printSide > 0){
                                $printRate = (44.45*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (44.45*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '2000':
                            if($printSide > 0){
                                $printRate = (64.45*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (64.45*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '4000':
                            if($printSide > 0){
                                $printRate = (80.56*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (80.56*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '5000':
                            if($printSide > 0){
                                $printRate = (100.70*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (100.70*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '7000':
                            if($printSide > 0){
                                $printRate = (130.91*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (130.91*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '10000':
                            if($printSide > 0){
                                $printRate = (170.18*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (170.18*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '15000':
                            if($printSide > 0){
                                $printRate = (238.25*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (238.25*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '20000':
                            if($printSide > 0){
                                $printRate = (309.73*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (309.73*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '25000':
                            if($printSide > 0){
                                $printRate = (371.68*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (371.68*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '30000':
                            if($printSide > 0){
                                $printRate = (427.43*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (427.43*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '50000':
                            if($printSide > 0){
                                $printRate = (683.88*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (683.88*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                    }
                    break;
                    case '2':
                    switch ($qty) {
                        case '250':
                            if($printSide > 0){
                                $printRate = (42.12*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (42.12*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '500':
                            if($printSide > 0){
                                $printRate = (42.96*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (42.96*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '1000':
                            if($printSide > 0){
                                $printRate = (45.11*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (45.11*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '2000':
                            if($printSide > 0){
                                $printRate = (65.41*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (65.41*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '4000':
                            if($printSide > 0){
                                $printRate = (81.77*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (81.77*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '5000':
                            if($printSide > 0){
                                $printRate = (102.21*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (102.21*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '7000':
                            if($printSide > 0){
                                $printRate = (132.87*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (132.87*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '10000':
                            if($printSide > 0){
                                $printRate = (172.73*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (172.73*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '15000':
                            if($printSide > 0){
                                $printRate = (241.83*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (241.83*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '20000':
                        if($printSide > 0){
                            $printRate = (314.38*55)/100;
                            $brochureRate = $total+$printRate;
                            $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                        } else {
                            $printRate = (314.38*55)/100;
                            $brochureRate = $total-$printRate;
                            $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                        }
                        break;
                        case '25000':
                            if($printSide > 0){
                                $printRate = (377.25*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (377.25*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '30000':
                            if($printSide > 0){
                                $printRate = (433.84*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (433.84*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '50000':
                            if($printSide > 0){
                                $printRate = (694.14*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (694.14*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                    }
                    break;
                    case '3':
                    switch ($qty) {
                        case '250':
                            if($printSide > 0){
                                $printRate = (64.33*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (64.33*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '500':
                            if($printSide > 0){
                                $printRate = (65.61*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (65.61*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '1000':
                            if($printSide > 0){
                                $printRate = (68.89*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (68.89*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '2000':
                        if($printSide > 0){
                                $printRate = (99.89*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (99.89*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '4000':
                        if($printSide > 0){
                                $printRate = (124.87*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (124.87*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '5000':
                        if($printSide > 0){
                                $printRate = (156.08*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (156.08*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '7000':
                        if($printSide > 0){
                                $printRate = (202.91*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (202.91*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '10000':

                        if($printSide > 0){
                                $printRate = (263.78*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (263.78*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '15000':

                        if($printSide > 0){
                                $printRate = (369.29*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (369.29*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '20000':
                          
                        if($printSide > 0){
                                $printRate = (480.08*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (480.08*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '25000':
           
                        if($printSide > 0){
                                $printRate = (576.10*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (576.10*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '30000':
                          
                        if($printSide > 0){
                                $printRate = (662.51*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (662.51*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '50000':
                      
                        if($printSide > 0){
                                $printRate = (1060.02*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1060.02*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                    }
                    break;
                    case '4':
                    switch ($qty) {
                        case '250':
                       
                        if($printSide > 0){
                                $printRate = (66.19*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (66.19*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '500':
                   
                        if($printSide > 0){
                                $printRate = (67.52*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (67.52*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '1000':
                            
                        if($printSide > 0){
                                $printRate = (70.89*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (70.89*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '2000':
                           
                        if($printSide > 0){
                                $printRate = (102.79*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (102.79*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '4000':
                            
                        if($printSide > 0){
                                $printRate = (128.49*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (128.49*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '5000':
                            
                        if($printSide > 0){
                                $printRate = (160.62*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (160.62*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '7000':
                           
                        if($printSide > 0){
                                $printRate = (208.80*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (208.80*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '10000':

                        if($printSide > 0){
                                $printRate = (271.44*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (271.44*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '15000':
               
                        if($printSide > 0){
                                $printRate = (380.02*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (380.02*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '20000':
                         
                        if($printSide > 0){
                                $printRate = (494.02*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (494.02*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '25000':
                            
                        if($printSide > 0){
                                $printRate = (592.82*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (592.82*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '30000':
                            
                        if($printSide > 0){
                                $printRate = (681.75*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (681.75*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '50000':
                            
                        if($printSide > 0){
                                $printRate = (1090.80*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1090.80*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                    }
                    break;
                }
            break;
            case '46.75':
                switch ($paper) {
                    case '1':
                    switch ($qty) {
                        case '250':
      
                            if($printSide > 0){
                                $printRate = (75.00*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (75.00*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '500':
                         
                            if($printSide > 0){
                                $printRate = (76.50*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (76.50*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '1000':
              
                            if($printSide > 0){
                                $printRate = (80.33*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (80.33*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '2000':
              
                            if($printSide > 0){
                                $printRate = (116.47*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (116.47*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '4000':

                            if($printSide > 0){
                                $printRate = (145.59*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (145.59*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '5000':
        
                            if($printSide > 0){
                                $printRate = (181.99*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (181.99*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '7000':
                       
                            if($printSide > 0){
                                $printRate = (236.58*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (236.58*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '10000':
               
                            if($printSide > 0){
                                $printRate = (307.56*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (307.56*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '15000':

                        if($printSide > 0){
                                $printRate = (430.58*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (430.58*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '20000':
    
                        if($printSide > 0){
                                $printRate = (559.75*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (559.75*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '25000':
     
                        if($printSide > 0){
                                $printRate = (671.70*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (671.70*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '30000':
       
                        if($printSide > 0){
                                $printRate = (772.46*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (772.46*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '50000':

                        if($printSide > 0){
                                $printRate = (1235.94*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1235.94*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                    }
                    break;
                    case '2':
                    switch ($qty) {
                        case '250':
                            
                            if($printSide > 0){
                                $printRate = (76.13*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (76.13*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '500':
                            
                            if($printSide > 0){
                                $printRate = (77.65*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (77.65*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '1000':
                            
                            if($printSide > 0){
                                $printRate = (81.53*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (81.53*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '2000':
                            
                            if($printSide > 0){
                                $printRate = (118.22*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (118.22*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '4000':
                            
                            if($printSide > 0){
                                $printRate = (147.77*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (147.77*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '5000':
                            
                            if($printSide > 0){
                                $printRate = (184.72*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (184.72*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '7000':
                            
                            if($printSide > 0){
                                $printRate = (240.13*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (240.13*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '10000':
                            
                            if($printSide > 0){
                                $printRate = (312.17*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (312.17*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '15000':
                           
                        if($printSide > 0){
                                $printRate = (437.04*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (437.04*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '20000':
                            
                        if($printSide > 0){
                                $printRate = (568.15*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (568.15*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '25000':
                            
                        if($printSide > 0){
                                $printRate = (681.78*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (681.78*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '30000':
                            
                        if($printSide > 0){
                                $printRate = (784.05*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (784.05*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '50000':
                            
                        if($printSide > 0){
                                $printRate = (1254.47*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1254.47*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                    }
                    break;
                    case '3':
                    switch ($qty) {
                        case '250':
                           
                            if($printSide > 0){
                                $printRate = (116.25*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (116.25*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '500':
                            
                            if($printSide > 0){
                                $printRate = (118.58*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (118.58*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '1000':
                            
                            if($printSide > 0){
                                $printRate = (124.50*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (124.50*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '2000':
                            
                            if($printSide > 0){
                                $printRate = (180.53*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (180.53*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '4000':
                            
                            if($printSide > 0){
                                $printRate = (225.66*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (225.66*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '5000':
                          
                            if($printSide > 0){
                                $printRate = (282.08*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (282.08*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '7000':
                            
                            if($printSide > 0){
                                $printRate = (366.70*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (366.70*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '10000':
                           
                            if($printSide > 0){
                                $printRate = (476.71*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (476.71*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '15000':
                           
                        if($printSide > 0){
                                $printRate = (667.40*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (667.40*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '20000':
                            
                        if($printSide > 0){
                                $printRate = (867.62*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (867.62*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '25000':
                            
                        if($printSide > 0){
                                $printRate = (1041.14*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1041.14*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '30000':
                            
                        if($printSide > 0){
                                $printRate = (1197.31*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1197.31*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '50000':
                           
                        if($printSide > 0){
                                $printRate = (1915.70*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1915.70*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                    }
                    break;
                    case '4':
                    switch ($qty) {
                        case '250':
                           
                            if($printSide > 0){
                                $printRate = (119.63*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (119.63*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '500':
                           
                            if($printSide > 0){
                                $printRate = (122.02*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (122.02*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '1000':
                            
                            if($printSide > 0){
                                $printRate = (128.12*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (128.12*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '2000':
                            
                            if($printSide > 0){
                                $printRate = (185.77*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (185.77*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '4000':
                            
                            if($printSide > 0){
                                $printRate = (232.21*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (232.21*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '5000':
                            
                            if($printSide > 0){
                                $printRate = (290.27*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (290.27*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '7000':
                            
                            if($printSide > 0){
                                $printRate = (377.35*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (377.35*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '10000':
                            
                            if($printSide > 0){
                                $printRate = (490.55*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (490.55*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '15000':
                            
                        if($printSide > 0){
                                $printRate = (686.77*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (686.77*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '20000':
                            
                        if($printSide > 0){
                                $printRate = (892.81*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (892.81*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '25000':
                           
                        if($printSide > 0){
                                $printRate = (1071.37*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1071.37*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '30000':
                            
                        if($printSide > 0){
                                $printRate = (1232.07*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1232.07*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '50000':
                            
                        if($printSide > 0){
                                $printRate = (1971.32*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1971.32*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                    }
                    break;
                }
            break;
            case '46.75(2)':
                switch ($paper) {
                    case '1':
                    switch ($qty) {
                        case '250':
                           
                            if($printSide > 0){
                                $printRate = (68.00*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (68.00*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '500':
                            
                            if($printSide > 0){
                                $printRate = (69.36*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (69.36*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '1000':
                            
                            if($printSide > 0){
                                $printRate = (72.83*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (72.83*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '2000':
                           
                            if($printSide > 0){
                                $printRate = (105.60*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (105.60*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '4000':
                            
                            if($printSide > 0){
                                $printRate = (132.00*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (132.00*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '5000':
                           
                            if($printSide > 0){
                                $printRate = (165.00*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (165.00*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '7000':
                           
                            if($printSide > 0){
                                $printRate = (214.50*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (214.50*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '10000':
                           
                            if($printSide > 0){
                                $printRate = (278.85*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (278.85*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '15000':
                            
                        if($printSide > 0){
                                $printRate = (390.39*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (390.39*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '20000':
                           
                        if($printSide > 0){
                                $printRate = (507.51*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (507.51*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '25000':
                           
                        if($printSide > 0){
                                $printRate = (609.01*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (609.01*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '30000':
                           
                        if($printSide > 0){
                                $printRate = (700.36*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (700.36*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '50000':
                            
                        if($printSide > 0){
                                $printRate = (1120.58*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1120.58*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                    }
                    break;
                    case '2':
                    switch ($qty) {
                        case '250':
                            
                            if($printSide > 0){
                                $printRate = (69.02*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (69.02*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '500':
                           
                            if($printSide > 0){
                                $printRate = (70.40*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (70.40*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '1000':
                            
                            if($printSide > 0){
                                $printRate = (73.92*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (73.92*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '2000':
                            
                            if($printSide > 0){
                                $printRate = (107.18*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (107.18*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '4000':
                            
                            if($printSide > 0){
                                $printRate = (133.98*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (133.98*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '5000':
                            
                            if($printSide > 0){
                                $printRate = (167.48*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (167.48*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '7000':
                            
                            if($printSide > 0){
                                $printRate = (217.72*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (217.72*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '10000':
                            
                            if($printSide > 0){
                                $printRate = (283.03*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (283.03*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '15000':
                            
                        if($printSide > 0){
                                $printRate = (396.25*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (396.25*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '20000':
                            
                        if($printSide > 0){
                                $printRate = (515.12*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (515.12*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '25000':
                           
                        if($printSide > 0){
                                $printRate = (618.15*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (618.15*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '30000':
                            
                        if($printSide > 0){
                                $printRate = (710.87*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (710.87*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '50000':
                            
                        if($printSide > 0){
                                $printRate = (1137.39*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1137.39*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                    }
                    break;
                    case '3':
                    switch ($qty) {
                        case '250':
                           
                            if($printSide > 0){
                                $printRate = (105.40*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (105.40*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '500':
                           
                            if($printSide > 0){
                                $printRate = (107.51*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (107.51*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '1000':
                           
                            if($printSide > 0){
                                $printRate = (112.88*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (112.88*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '2000':
                            
                            if($printSide > 0){
                                $printRate = (163.68*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (163.68*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '4000':
                            
                            if($printSide > 0){
                                $printRate = (204.60*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (204.60*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '5000':
                           
                            if($printSide > 0){
                                $printRate = (255.75*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (255.75*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '7000':
                            
                            if($printSide > 0){
                                $printRate = (332.48*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (332.48*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '10000':
                            
                            if($printSide > 0){
                                $printRate = (432.22*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (432.22*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '15000':
                            
                        if($printSide > 0){
                                $printRate = (605.11*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (605.11*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '20000':
                            
                        if($printSide > 0){
                                $printRate = (786.64*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (786.64*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '25000':
                            
                        if($printSide > 0){
                                $printRate = (943.97*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (943.97*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '30000':
                           
                        if($printSide > 0){
                                $printRate = (1085.56*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1085.56*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '50000':
                            
                        if($printSide > 0){
                                $printRate = (1736.90*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1736.90*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                    }
                    break;
                    case '4':
                    switch ($qty) {
                        case '250':
                            
                            if($printSide > 0){
                                $printRate = (108.46*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (108.46*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '500':
                            
                            if($printSide > 0){
                                $printRate = (110.63*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (110.63*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '1000':
                           
                            if($printSide > 0){
                                $printRate = (116.16*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (116.16*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '2000':
                            
                            if($printSide > 0){
                                $printRate = (168.43*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (168.43*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '4000':
                            
                            if($printSide > 0){
                                $printRate = (210.54*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (210.54*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '5000':
                            
                            if($printSide > 0){
                                $printRate = (263.18*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (263.18*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '7000':
                            
                            if($printSide > 0){
                                $printRate = (342.13*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (342.13*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '10000':
                            
                            if($printSide > 0){
                                $printRate = (444.77*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (444.77*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '15000':
                            
                        if($printSide > 0){
                                $printRate = (622.68*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (622.68*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '20000':
                           
                        if($printSide > 0){
                                $printRate = (809.48*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (809.48*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '25000':
                           
                        if($printSide > 0){
                                $printRate = (971.37*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (971.37*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '30000':
                           
                        if($printSide > 0){
                                $printRate = (1117.08*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1117.08*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '50000':
                            
                        if($printSide > 0){
                                $printRate = (1787.33*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1787.33*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                    }
                    break;
                }
            break;
            case '93.5':
                switch ($paper) {
                    case '1':
                    switch ($qty) {
                        case '250':
                           
                            if($printSide > 0){
                                $printRate = (86.5*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (86.5*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '500':
                           
                            if($printSide > 0){
                                $printRate = (108.13*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (108.13*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '1000':
                            
                            if($printSide > 0){
                                $printRate = (135.16*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (135.16*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '2000':
                           
                            if($printSide > 0){
                                $printRate = (195.98*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (195.98*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '4000':
                            
                            if($printSide > 0){
                                $printRate = (254.77*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (254.77*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '5000':
                            
                            if($printSide > 0){
                                $printRate = (356.68*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (356.68*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '7000':
                            
                            if($printSide > 0){
                                $printRate = (463.68*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (463.68*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '10000':
                            
                            if($printSide > 0){
                                $printRate = (602.78*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (602.78*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '15000':
                            
                        if($printSide > 0){
                                $printRate = (783.62*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (783.62*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '20000':
                           
                        if($printSide > 0){
                                $printRate = (979.53*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (979.53*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '25000':
                           
                        if($printSide > 0){
                                $printRate = (1175.43*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1175.43*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '30000':
                           
                        if($printSide > 0){
                                $printRate = (1528.06*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1528.06*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '50000':
                            
                        if($printSide > 0){
                                $printRate = (2062.88*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (2062.88*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                    }
                    break;
                    case '2':
                    switch ($qty) {
                        case '250':
                           
                            if($printSide > 0){
                                $printRate = (87.80*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (87.80*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '500':
                           
                            if($printSide > 0){
                                $printRate = (109.75*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (109.75*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '1000':
                           
                            if($printSide > 0){
                                $printRate = (137.18*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (137.18*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '2000':
                           
                            if($printSide > 0){
                                $printRate = (198.92*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (198.92*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '4000':
                            
                            if($printSide > 0){
                                $printRate = (258.59*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (258.59*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '5000':
                            
                            if($printSide > 0){
                                $printRate = (362.03*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (362.03*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '7000':
                            
                            if($printSide > 0){
                                $printRate = (470.64*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (470.64*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '10000':
                            
                            if($printSide > 0){
                                $printRate = (611.83*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (611.83*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '15000':
                            
                        if($printSide > 0){
                                $printRate = (795.37*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (795.37*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '20000':
                            
                        if($printSide > 0){
                                $printRate = (994.22*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (994.22*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '25000':
                            
                        if($printSide > 0){
                                $printRate = (1193.06*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1193.06*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '30000':
                           
                        if($printSide > 0){
                                $printRate = (1550.98*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1550.98*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '50000':
                            
                        if($printSide > 0){
                                $printRate = (2093.82*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (2093.82*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                    }
                    break;
                    case '3':
                    switch ($qty) {
                        case '250':
                            
                            if($printSide > 0){
                                $printRate = (134.08*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (134.08*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '500':
                            
                            if($printSide > 0){
                                $printRate = (167.59*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (167.59*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '1000':
                            
                            if($printSide > 0){
                                $printRate = (209.49*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (209.49*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '2000':
                            
                            if($printSide > 0){
                                $printRate = (303.76*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (303.76*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '4000':
                           
                            if($printSide > 0){
                                $printRate = (394.89*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (394.89*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '5000':
                            
                            if($printSide > 0){
                                $printRate = (552.85*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (552.85*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '7000':
                           
                            if($printSide > 0){
                                $printRate = (718.70*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (718.70*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '10000':
                            
                            if($printSide > 0){
                                $printRate = (934.32*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (934.32*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '15000':
                            
                        if($printSide > 0){
                                $printRate = (1214.61*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1214.61*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '20000':
                           
                        if($printSide > 0){
                                $printRate = (1518.26*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1518.26*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '25000':
                           
                        if($printSide > 0){
                                $printRate = (1821.92*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1821.92*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '30000':
                            
                        if($printSide > 0){
                                $printRate = (2368.49*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (2368.49*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '50000':
                            
                        if($printSide > 0){
                                $printRate = (3197.46*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (3197.46*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                    }
                    break;
                    case '4':
                    switch ($qty) {
                        case '250':
                            
                            if($printSide > 0){
                                $printRate = (137.97*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (137.97*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '500':
                            
                            if($printSide > 0){
                                $printRate = (172.46*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (172.46*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '1000':
                           
                            if($printSide > 0){
                                $printRate = (215.57*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (215.57*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '2000':
                           
                            if($printSide > 0){
                                $printRate = (312.58*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (312.58*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '4000':
                           
                            if($printSide > 0){
                                $printRate = (406.36*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (406.36*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '5000':
                            
                            if($printSide > 0){
                                $printRate = (568.90*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (568.90*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '7000':
                            
                            if($printSide > 0){
                                $printRate = (739.57*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (739.57*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '10000':
                            
                            if($printSide > 0){
                                $printRate = (961.44*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (961.44*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '15000':
                            
                        if($printSide > 0){
                                $printRate = (1249.87*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1249.87*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '20000':
                           
                        if($printSide > 0){
                                $printRate = (1562.34*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1562.34*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '25000':
                           
                        if($printSide > 0){
                                $printRate = (1874.81*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1874.81*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '30000':
                            
                        if($printSide > 0){
                                $printRate = (2437.25*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (2437.25*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '50000':
                           
                        if($printSide > 0){
                                $printRate = (3290.29*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (3290.29*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                    }
                    break;
                }
            break;
            case '119':
                switch ($paper) {
                    case '1':
                    switch ($qty) {
                        case '250':
                            
                            if($printSide > 0){
                                $printRate = (119.5*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (119.5*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '500':
                           
                            if($printSide > 0){
                                $printRate = (149.38*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (149.38*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '1000':
                           
                            if($printSide > 0){
                                $printRate = (186.72*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (186.72*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '2000':
                            
                            if($printSide > 0){
                                $printRate = (270.74*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (270.74*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '4000':
                            
                            if($printSide > 0){
                                $printRate = (351.96*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (351.96*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '5000':
                           
                            if($printSide > 0){
                                $printRate = (492.75*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (492.75*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '7000':
                           
                            if($printSide > 0){
                                $printRate = (640.58*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (640.58*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '10000':
                            
                            if($printSide > 0){
                                $printRate = (832.75*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (832.75*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '15000':
                            
                        if($printSide > 0){
                                $printRate = (1082.57*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1082.57*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '20000':
                            
                        if($printSide > 0){
                                $printRate = (1353.22*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1353.22*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '25000':
                           
                        if($printSide > 0){
                                $printRate = (1623.86*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1623.86*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '30000':
                           
                        if($printSide > 0){
                                $printRate = (2111.02*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (2111.02*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '50000':
                           
                        if($printSide > 0){
                                $printRate = (2849.87*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (2849.87*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                    }
                    break;
                    case '2':
                    switch ($qty) {
                        case '250':
                            
                            if($printSide > 0){
                                $printRate = (121.29*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (121.29*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '500':
                           
                            if($printSide > 0){
                                $printRate = (151.62*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (151.62*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '1000':
                            
                            if($printSide > 0){
                                $printRate = (189.52*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (189.52*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '2000':
                           
                            if($printSide > 0){
                                $printRate = (274.80*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (274.80*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '4000':
                          
                            if($printSide > 0){
                                $printRate = (357.24*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (357.24*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '5000':
                           
                            if($printSide > 0){
                                $printRate = (500.14*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (500.14*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '7000':
                           
                            if($printSide > 0){
                                $printRate = (650.18*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (650.18*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '10000':
                            
                            if($printSide > 0){
                                $printRate = (845.24*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (845.24*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '15000':
                            
                        if($printSide > 0){
                                $printRate = (1098.81*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1098.81*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '20000':
                           
                        if($printSide > 0){
                                $printRate = (1373.52*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1373.52*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '25000':
                            
                        if($printSide > 0){
                                $printRate = (1648.22*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1648.22*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '30000':
                            
                        if($printSide > 0){
                                $printRate = (2142.68*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (2142.68*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '50000':
                            
                        if($printSide > 0){
                                $printRate = (2892.62*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (2892.62*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                    }
                    break;
                    case '3':
                    switch ($qty) {
                        case '250':
                            
                            if($printSide > 0){
                                $printRate = (185.23*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (185.23*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '500':
                            
                            if($printSide > 0){
                                $printRate = (231.53*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (231.53*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '1000':
                            
                            if($printSide > 0){
                                $printRate = (289.41*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (289.41*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '2000':
                            
                            if($printSide > 0){
                                $printRate = (419.65*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (419.65*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '4000':
                            
                            if($printSide > 0){
                                $printRate = (545.55*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (545.55*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '5000':
                           
                            if($printSide > 0){
                                $printRate = (763.76*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (763.76*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '7000':
                            
                            if($printSide > 0){
                                $printRate = (992.89*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (992.89*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '10000':
                            
                            if($printSide > 0){
                                $printRate = (1290.76*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1290.76*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '15000':
                           
                        if($printSide > 0){
                                $printRate = (1677.99*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1677.99*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '20000':
                    
                        if($printSide > 0){
                                $printRate = (2097.49*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (2097.49*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '25000':
                            
                        if($printSide > 0){
                                $printRate = (2516.98*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (2516.98*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '30000':
                           
                        if($printSide > 0){
                                $printRate = (3272.08*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (3272.08*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '50000':
                            
                        if($printSide > 0){
                                $printRate = (4417.31*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (4417.31*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                    }
                    break;
                    case '4':
                    switch ($qty) {
                        case '250':
                           
                            if($printSide > 0){
                                $printRate = (190.60*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (190.60*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '500':
                            
                            if($printSide > 0){
                                $printRate = (238.25*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (238.25*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '1000':
                            
                            if($printSide > 0){
                                $printRate = (297.82*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (297.82*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '2000':
                            
                            if($printSide > 0){
                                $printRate = (431.83*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (431.83*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '4000':
                           
                            if($printSide > 0){
                                $printRate = (561.38*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (561.38*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '5000':
                           
                            if($printSide > 0){
                                $printRate = (785.94*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (785.94*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '7000':
                            
                            if($printSide > 0){
                                $printRate = (1021.72*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1021.72*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '10000':
                           
                            if($printSide > 0){
                                $printRate = (1328.23*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1328.23*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '15000':
                            
                        if($printSide > 0){
                                $printRate = (1726.70*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1726.70*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '20000':
                            
                        if($printSide > 0){
                                $printRate = (2158.38*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (2158.38*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '25000':
                           
                        if($printSide > 0){
                                $printRate = (2590.06*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (2590.06*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '30000':
                            
                        if($printSide > 0){
                                $printRate = (3367.07*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (3367.07*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '50000':
                           
                        if($printSide > 0){
                                $printRate = (4545.55*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (4545.55*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                    }
                    break;
                }
            break;
            case '108':
                switch ($paper) {
                    case '1':
                    switch ($qty) {
                        case '250':
                            
                            if($printSide > 0){
                                $printRate = (118.5*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (118.5*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '500':
                           
                            if($printSide > 0){
                                $printRate = (124.43*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (124.43*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '1000':
                            
                            if($printSide > 0){
                                $printRate = (136.87*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (136.87*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '2000':
                            
                            if($printSide > 0){
                                $printRate = (198.46*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (198.46*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '4000':
                            
                            if($printSide > 0){
                                $printRate = (248.07*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (248.07*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '5000':
                            
                            if($printSide > 0){
                                $printRate = (347.30*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (347.30*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '7000':
                            
                            if($printSide > 0){
                                $printRate = (451.49*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (451.49*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '10000':
                            
                            if($printSide > 0){
                                $printRate = (586.94*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (586.94*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '15000':
                            
                        if($printSide > 0){
                                $printRate = (763.02*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (763.02*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '20000':
                            
                        if($printSide > 0){
                                $printRate = (991.93*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (991.93*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '25000':
                           
                        if($printSide > 0){
                                $printRate = (1190.31*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1190.31*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '30000':
                            
                        if($printSide > 0){
                                $printRate = (1547.41*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1547.41*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '50000':
                            
                        if($printSide > 0){
                                $printRate = (2011.63*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (2011.63*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                    }
                    break;
                    case '2':
                    switch ($qty) {
                        case '250':
                            
                            if($printSide > 0){
                                $printRate = (120.28*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (120.28*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '500':
                            
                            if($printSide > 0){
                                $printRate = (126.29*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (126.29*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '1000':
                            
                            if($printSide > 0){
                                $printRate = (138.92*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (138.92*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '2000':
                            
                            if($printSide > 0){
                                $printRate = (201.43*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (201.43*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '4000':
                            
                            if($printSide > 0){
                                $printRate = (251.79*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (251.79*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '5000':
                            
                            if($printSide > 0){
                                $printRate = (352.51*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (352.51*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '7000':
                           
                            if($printSide > 0){
                                $printRate = (458.26*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (458.26*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '10000':
                           
                            if($printSide > 0){
                                $printRate = (595.74*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (595.74*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '15000':
                            
                        if($printSide > 0){
                                $printRate = (774.47*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (774.47*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '20000':
                            
                        if($printSide > 0){
                                $printRate = (1006.81*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1006.81*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '25000':
                            
                        if($printSide > 0){
                                $printRate = (1208.17*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1208.17*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '30000':
                            
                        if($printSide > 0){
                                $printRate = (1570.62*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1570.62*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '50000':
                            
                        if($printSide > 0){
                                $printRate = (2041.80*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (2041.80*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                    }
                    break;
                    case '3':
                    switch ($qty) {
                        case '250':
                            
                            if($printSide > 0){
                                $printRate = (183.68*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (183.68*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '500':
                            
                            if($printSide > 0){
                                $printRate = (192.86*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (192.86*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '1000':
                           
                            if($printSide > 0){
                                $printRate = (212.14*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (212.14*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '2000':
                            
                            if($printSide > 0){
                                $printRate = (307.61*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (307.61*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '4000':
                            
                            if($printSide > 0){
                                $printRate = (384.51*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (384.51*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '5000':
                            
                            if($printSide > 0){
                                $printRate = (538.32*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (538.32*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '7000':
                            
                            if($printSide > 0){
                                $printRate = (699.81*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (699.81*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '10000':
                            
                            if($printSide > 0){
                                $printRate = (909.76*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (909.76*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '15000':
                            
                        if($printSide > 0){
                                $printRate = (1182.68*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1182.68*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '20000':
                           
                        if($printSide > 0){
                                $printRate = (1537.49*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1537.49*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '25000':
                            
                        if($printSide > 0){
                                $printRate = (1844.98*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1844.98*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '30000':
                           
                        if($printSide > 0){
                                $printRate = (2398.48*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (2398.48*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '50000':
                           
                        if($printSide > 0){
                                $printRate = (3118.02*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (3118.02*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                    }
                    break;
                    case '4':
                    switch ($qty) {
                        case '250':
                           
                            if($printSide > 0){
                                $printRate = (189.01*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (189.01*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '500':
                            
                            if($printSide > 0){
                                $printRate = (198.46*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (198.46*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '1000':
                            
                            if($printSide > 0){
                                $printRate = (218.30*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (218.30*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '2000':
                            
                            if($printSide > 0){
                                $printRate = (316.54*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (316.54*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '4000':
                            
                            if($printSide > 0){
                                $printRate = (395.68*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (395.68*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '5000':
                            
                            if($printSide > 0){
                                $printRate = (553.95*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (553.95*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '7000':
                            
                            if($printSide > 0){
                                $printRate = (720.13*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (720.13*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '10000':
                            
                            if($printSide > 0){
                                $printRate = (936.17*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (936.17*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '15000':
                            
                        if($printSide > 0){
                                $printRate = (1217.02*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1217.02*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '20000':
                           
                        if($printSide > 0){
                                $printRate = (1582.12*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1582.12*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '25000':
                           
                        if($printSide > 0){
                                $printRate = (1898.55*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1898.55*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '30000':
                           
                        if($printSide > 0){
                                $printRate = (2468.11*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (2468.11*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '50000':
                            
                        if($printSide > 0){
                                $printRate = (3208.55*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (3208.55*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                    }
                    break;
                }
            break;
            case '187':
                switch ($paper) {
                    case '1':
                    switch ($qty) {
                        case '250':
                            
                            if($printSide > 0){
                                $printRate = (178.5*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (178.5*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '500':
                            
                            if($printSide > 0){
                                $printRate = (214.20*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (214.20*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '1000':
                            
                            if($printSide > 0){
                                $printRate = (267.75*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (267.75*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '2000':
                           
                            if($printSide > 0){
                                $printRate = (388.24*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (388.24*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '4000':
                            
                            if($printSide > 0){
                                $printRate = (524.12*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (524.12*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '5000':
                            
                            if($printSide > 0){
                                $printRate = (733.77*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (733.77*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '7000':
                            
                            if($printSide > 0){
                                $printRate = (917.21*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (917.21*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '10000':
                            
                            if($printSide > 0){
                                $printRate = (1192.37*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1192.37*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '15000':
                            
                        if($printSide > 0){
                                $printRate = (1669.32*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1669.32*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '20000':
                            
                        if($printSide > 0){
                                $printRate = (2086.66*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (2086.66*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '25000':
                           
                        if($printSide > 0){
                                $printRate = (2503.99*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (2503.99*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '30000':
                            
                        if($printSide > 0){
                                $printRate = (3255.18*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (3255.18*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '50000':
                            
                        if($printSide > 0){
                                $printRate = (4394.50*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (4394.50*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                    }
                    break;
                    case '2':
                    switch ($qty) {
                        case '250':
                            
                            if($printSide > 0){
                                $printRate = (181.18*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (181.18*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '500':
                           
                            if($printSide > 0){
                                $printRate = (217.41*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (217.41*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '1000':
                            
                            if($printSide > 0){
                                $printRate = (271.77*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (271.77*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '2000':
                           
                            if($printSide > 0){
                                $printRate = (394.06*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (394.06*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '4000':
                            
                            if($printSide > 0){
                                $printRate = (531.98*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (531.98*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '5000':
                           
                            if($printSide > 0){
                                $printRate = (744.78*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (744.78*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '7000':
                            
                            if($printSide > 0){
                                $printRate = (930.97*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (930.97*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '10000':
                           
                            if($printSide > 0){
                                $printRate = (1210.26*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1210.26*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '15000':
                            
                        if($printSide > 0){
                                $printRate = (1694.36*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1694.36*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '20000':
                            
                        if($printSide > 0){
                                $printRate = (2117.96*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (2117.96*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '25000':
                            
                        if($printSide > 0){
                                $printRate = (2541.55*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (2541.55*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '30000':
                            
                        if($printSide > 0){
                                $printRate = (3304.01*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (3304.01*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '50000':
                            
                        if($printSide > 0){
                                $printRate = (4460.41*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (4460.41*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                    }
                    break;
                    case '3':
                    switch ($qty) {
                        case '250':
                            
                            if($printSide > 0){
                                $printRate = (276.68*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (276.68*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '500':
                            
                            if($printSide > 0){
                                $printRate = (332.01*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (332.01*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '1000':
                            
                            if($printSide > 0){
                                $printRate = (415.01*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (415.01*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '2000':
                            
                            if($printSide > 0){
                                $printRate = (601.77*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (601.77*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '4000':
                            
                            if($printSide > 0){
                                $printRate = (812.39*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (812.39*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '5000':
                            
                            if($printSide > 0){
                                $printRate = (1137.34*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1137.34*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '7000':
                            
                            if($printSide > 0){
                                $printRate = (1421.68*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1421.68*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '10000':
                            
                            if($printSide > 0){
                                $printRate = (1848.18*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1848.18*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '15000':
                            
                        if($printSide > 0){
                                $printRate = (2587.45*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (2587.45*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '20000':
                            
                        if($printSide > 0){
                                $printRate = (3234.32*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (3234.32*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '25000':
                           
                        if($printSide > 0){
                                $printRate = (3881.18*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (3881.18*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '30000':
        
                        if($printSide > 0){
                                $printRate = (5045.53*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (5045.53*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '50000':
                           
                        if($printSide > 0){
                                $printRate = (6811.47*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (6811.47*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                    }
                    break;
                    case '4':
                    switch ($qty) {
                        case '250':
                            
                            if($printSide > 0){
                                $printRate = (284.71*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (284.71*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '500':
                            
                            if($printSide > 0){
                                $printRate = (341.65*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (341.65*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '1000':
                            
                            if($printSide > 0){
                                $printRate = (427.06*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (427.06*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '2000':
                            
                            if($printSide > 0){
                                $printRate = (619.24*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (619.24*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '4000':
                            
                            if($printSide > 0){
                                $printRate = (835.97*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (835.97*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '5000':
                            
                            if($printSide > 0){
                                $printRate = (1170.36*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1170.36*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '7000':
                            
                            if($printSide > 0){
                                $printRate = (1462.95*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1462.95*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '10000':
                            
                            if($printSide > 0){
                                $printRate = (1901.84*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1901.84*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '15000':
                            
                        if($printSide > 0){
                                $printRate = (2662.57*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (2662.57*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '20000':
                            
                        if($printSide > 0){
                                $printRate = (3328.22*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (3328.22*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '25000':
                            
                        if($printSide > 0){
                                $printRate = (3993.86*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (3993.86*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '30000':
                            
                        if($printSide > 0){
                                $printRate = (5192.02*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (5192.02*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '50000':
                            
                        if($printSide > 0){
                                $printRate = (7009.22*55)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (7009.22*55)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                    }
                    break;
                }
            break;
        }
    }
    public function folding(Request $request)
    {
        $size = $request->size;
        $paper = $request->paper;
        $qty = $request->qty;
        $folding = $request->folding;
        $total = $request->total;

        switch ($size) {
            case '23.38':
                switch ($paper) {
                    case '1':
                    switch ($qty) {
                        case '250':
                        if($folding > 0){
                            $printRate = (41.5*30)/100;
                            $brochureRate = $total+$printRate;
                            $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                        } else {
                            $printRate = (41.5*30)/100;
                            $brochureRate = $total-$printRate;
                            $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                        }
                        break;
                        case '500':
                        if($folding > 0){
                            $printRate = (42.33*30)/100;
                            $brochureRate = $total+$printRate;
                            $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                        } else {
                            $printRate = (42.33*30)/100;
                            $brochureRate = $total-$printRate;
                            $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                        }
                        break;
                        case '1000':
                            if($folding > 0){
                                $printRate = (44.45*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (44.45*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '2000':
                            if($folding > 0){
                                $printRate = (64.45*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (64.45*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '4000':
                            if($folding > 0){
                                $printRate = (80.56*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (80.56*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '5000':
                            if($folding > 0){
                                $printRate = (100.70*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (100.70*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '7000':
                            if($folding > 0){
                                $printRate = (130.91*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (130.91*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '10000':
                            if($folding > 0){
                                $printRate = (170.18*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (170.18*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '15000':
                            if($folding > 0){
                                $printRate = (238.25*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (238.25*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '20000':
                            if($folding > 0){
                                $printRate = (309.73*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (309.73*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '25000':
                            if($folding > 0){
                                $printRate = (371.68*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (371.68*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '30000':
                            if($folding > 0){
                                $printRate = (427.43*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (427.43*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '50000':
                            if($folding > 0){
                                $printRate = (683.88*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (683.88*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                    }
                    break;
                    case '2':
                    switch ($qty) {
                        case '250':
                            if($folding > 0){
                                $printRate = (42.12*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (42.12*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '500':
                            if($folding > 0){
                                $printRate = (42.96*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (42.96*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '1000':
                            if($folding > 0){
                                $printRate = (45.11*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (45.11*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '2000':
                            if($folding > 0){
                                $printRate = (65.41*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (65.41*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '4000':
                            if($folding > 0){
                                $printRate = (81.77*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (81.77*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '5000':
                            if($folding > 0){
                                $printRate = (102.21*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (102.21*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '7000':
                            if($folding > 0){
                                $printRate = (132.87*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (132.87*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '10000':
                            if($folding > 0){
                                $printRate = (172.73*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (172.73*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '15000':
                            if($folding > 0){
                                $printRate = (241.83*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (241.83*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '20000':
                        if($folding > 0){
                            $printRate = (314.38*30)/100;
                            $brochureRate = $total+$printRate;
                            $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                        } else {
                            $printRate = (314.38*30)/100;
                            $brochureRate = $total-$printRate;
                            $finalTotal = ($brochureRate*100)/50;
                            return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                        }
                        break;
                        case '25000':
                            if($folding > 0){
                                $printRate = (377.25*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (377.25*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '30000':
                            if($folding > 0){
                                $printRate = (433.84*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (433.84*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '50000':
                            if($folding > 0){
                                $printRate = (694.14*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (694.14*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                    }
                    break;
                    case '3':
                    switch ($qty) {
                        case '250':
                            if($folding > 0){
                                $printRate = (64.33*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (64.33*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '500':
                            if($folding > 0){
                                $printRate = (65.61*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (65.61*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '1000':
                            if($folding > 0){
                                $printRate = (68.89*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (68.89*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '2000':
                        if($folding > 0){
                                $printRate = (99.89*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (99.89*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '4000':
                        if($folding > 0){
                                $printRate = (124.87*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (124.87*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '5000':
                        if($folding > 0){
                                $printRate = (156.08*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (156.08*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '7000':
                        if($folding > 0){
                                $printRate = (202.91*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (202.91*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '10000':

                        if($folding > 0){
                                $printRate = (263.78*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (263.78*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '15000':

                        if($folding > 0){
                                $printRate = (369.29*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (369.29*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '20000':
                          
                        if($folding > 0){
                                $printRate = (480.08*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (480.08*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '25000':
           
                        if($folding > 0){
                                $printRate = (576.10*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (576.10*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '30000':
                          
                        if($folding > 0){
                                $printRate = (662.51*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (662.51*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '50000':
                      
                        if($folding > 0){
                                $printRate = (1060.02*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1060.02*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                    }
                    break;
                    case '4':
                    switch ($qty) {
                        case '250':
                       
                        if($folding > 0){
                                $printRate = (66.19*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (66.19*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '500':
                   
                        if($folding > 0){
                                $printRate = (67.52*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (67.52*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '1000':
                            
                        if($folding > 0){
                                $printRate = (70.89*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (70.89*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '2000':
                           
                        if($folding > 0){
                                $printRate = (102.79*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (102.79*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '4000':
                            
                        if($folding > 0){
                                $printRate = (128.49*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (128.49*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '5000':
                            
                        if($folding > 0){
                                $printRate = (160.62*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (160.62*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '7000':
                           
                        if($folding > 0){
                                $printRate = (208.80*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (208.80*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '10000':

                        if($folding > 0){
                                $printRate = (271.44*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (271.44*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '15000':
               
                        if($folding > 0){
                                $printRate = (380.02*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (380.02*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '20000':
                         
                        if($folding > 0){
                                $printRate = (494.02*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (494.02*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '25000':
                            
                        if($folding > 0){
                                $printRate = (592.82*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (592.82*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '30000':
                            
                        if($folding > 0){
                                $printRate = (681.75*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (681.75*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '50000':
                            
                        if($folding > 0){
                                $printRate = (1090.80*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1090.80*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                    }
                    break;
                }
            break;
            case '46.75':
                switch ($paper) {
                    case '1':
                    switch ($qty) {
                        case '250':
      
                            if($folding > 0){
                                $printRate = (75.00*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (75.00*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '500':
                         
                            if($folding > 0){
                                $printRate = (76.50*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (76.50*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '1000':
              
                            if($folding > 0){
                                $printRate = (80.33*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (80.33*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '2000':
              
                            if($folding > 0){
                                $printRate = (116.47*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (116.47*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '4000':

                            if($folding > 0){
                                $printRate = (145.59*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (145.59*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '5000':
        
                            if($folding > 0){
                                $printRate = (181.99*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (181.99*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '7000':
                       
                            if($folding > 0){
                                $printRate = (236.58*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (236.58*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '10000':
               
                            if($folding > 0){
                                $printRate = (307.56*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (307.56*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '15000':

                        if($folding > 0){
                                $printRate = (430.58*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (430.58*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '20000':
    
                        if($folding > 0){
                                $printRate = (309.75*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (309.75*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '25000':
     
                        if($folding > 0){
                                $printRate = (671.70*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (671.70*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '30000':
       
                        if($folding > 0){
                                $printRate = (772.46*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (772.46*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '50000':

                        if($folding > 0){
                                $printRate = (1235.94*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1235.94*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                    }
                    break;
                    case '2':
                    switch ($qty) {
                        case '250':
                            
                            if($folding > 0){
                                $printRate = (76.13*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (76.13*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '500':
                            
                            if($folding > 0){
                                $printRate = (77.65*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (77.65*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '1000':
                            
                            if($folding > 0){
                                $printRate = (81.53*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (81.53*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '2000':
                            
                            if($folding > 0){
                                $printRate = (118.22*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (118.22*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '4000':
                            
                            if($folding > 0){
                                $printRate = (147.77*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (147.77*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '5000':
                            
                            if($folding > 0){
                                $printRate = (184.72*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (184.72*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '7000':
                            
                            if($folding > 0){
                                $printRate = (240.13*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (240.13*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '10000':
                            
                            if($folding > 0){
                                $printRate = (312.17*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (312.17*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '15000':
                           
                        if($folding > 0){
                                $printRate = (437.04*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (437.04*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '20000':
                            
                        if($folding > 0){
                                $printRate = (568.15*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (568.15*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '25000':
                            
                        if($folding > 0){
                                $printRate = (681.78*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (681.78*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '30000':
                            
                        if($folding > 0){
                                $printRate = (784.05*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (784.05*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '50000':
                            
                        if($folding > 0){
                                $printRate = (1254.47*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1254.47*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                    }
                    break;
                    case '3':
                    switch ($qty) {
                        case '250':
                           
                            if($folding > 0){
                                $printRate = (116.25*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (116.25*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '500':
                            
                            if($folding > 0){
                                $printRate = (118.58*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (118.58*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '1000':
                            
                            if($folding > 0){
                                $printRate = (124.50*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (124.50*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '2000':
                            
                            if($folding > 0){
                                $printRate = (180.53*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (180.53*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '4000':
                            
                            if($folding > 0){
                                $printRate = (225.66*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (225.66*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '5000':
                          
                            if($folding > 0){
                                $printRate = (282.08*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (282.08*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '7000':
                            
                            if($folding > 0){
                                $printRate = (366.70*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (366.70*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '10000':
                           
                            if($folding > 0){
                                $printRate = (476.71*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (476.71*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '15000':
                           
                        if($folding > 0){
                                $printRate = (667.40*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (667.40*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '20000':
                            
                        if($folding > 0){
                                $printRate = (867.62*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (867.62*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '25000':
                            
                        if($folding > 0){
                                $printRate = (1041.14*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1041.14*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '30000':
                            
                        if($folding > 0){
                                $printRate = (1197.31*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1197.31*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '50000':
                           
                        if($folding > 0){
                                $printRate = (1915.70*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1915.70*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                    }
                    break;
                    case '4':
                    switch ($qty) {
                        case '250':
                           
                            if($folding > 0){
                                $printRate = (119.63*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (119.63*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '500':
                           
                            if($folding > 0){
                                $printRate = (122.02*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (122.02*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '1000':
                            
                            if($folding > 0){
                                $printRate = (128.12*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (128.12*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '2000':
                            
                            if($folding > 0){
                                $printRate = (185.77*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (185.77*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '4000':
                            
                            if($folding > 0){
                                $printRate = (232.21*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (232.21*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '5000':
                            
                            if($folding > 0){
                                $printRate = (290.27*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (290.27*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '7000':
                            
                            if($folding > 0){
                                $printRate = (377.35*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (377.35*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '10000':
                            
                            if($folding > 0){
                                $printRate = (490.30*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (490.30*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '15000':
                            
                        if($folding > 0){
                                $printRate = (686.77*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (686.77*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '20000':
                            
                        if($folding > 0){
                                $printRate = (892.81*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (892.81*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '25000':
                           
                        if($folding > 0){
                                $printRate = (1071.37*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1071.37*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '30000':
                            
                        if($folding > 0){
                                $printRate = (1232.07*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1232.07*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '50000':
                            
                        if($folding > 0){
                                $printRate = (1971.32*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1971.32*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                    }
                    break;
                }
            break;
            case '46.75(2)':
                switch ($paper) {
                    case '1':
                    switch ($qty) {
                        case '250':
                           
                            if($folding > 0){
                                $printRate = (68.00*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (68.00*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '500':
                            
                            if($folding > 0){
                                $printRate = (69.36*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (69.36*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '1000':
                            
                            if($folding > 0){
                                $printRate = (72.83*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (72.83*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '2000':
                           
                            if($folding > 0){
                                $printRate = (105.60*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (105.60*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '4000':
                            
                            if($folding > 0){
                                $printRate = (132.00*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (132.00*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '5000':
                           
                            if($folding > 0){
                                $printRate = (165.00*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (165.00*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '7000':
                           
                            if($folding > 0){
                                $printRate = (214.50*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (214.50*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '10000':
                           
                            if($folding > 0){
                                $printRate = (278.85*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (278.85*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '15000':
                            
                        if($folding > 0){
                                $printRate = (390.39*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (390.39*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '20000':
                           
                        if($folding > 0){
                                $printRate = (507.51*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (507.51*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '25000':
                           
                        if($folding > 0){
                                $printRate = (609.01*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (609.01*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '30000':
                           
                        if($folding > 0){
                                $printRate = (700.36*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (700.36*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '50000':
                            
                        if($folding > 0){
                                $printRate = (1120.58*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1120.58*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                    }
                    break;
                    case '2':
                    switch ($qty) {
                        case '250':
                            
                            if($folding > 0){
                                $printRate = (69.02*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (69.02*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '500':
                           
                            if($folding > 0){
                                $printRate = (70.40*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (70.40*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '1000':
                            
                            if($folding > 0){
                                $printRate = (73.92*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (73.92*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '2000':
                            
                            if($folding > 0){
                                $printRate = (107.18*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (107.18*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '4000':
                            
                            if($folding > 0){
                                $printRate = (133.98*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (133.98*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '5000':
                            
                            if($folding > 0){
                                $printRate = (167.48*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (167.48*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '7000':
                            
                            if($folding > 0){
                                $printRate = (217.72*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (217.72*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '10000':
                            
                            if($folding > 0){
                                $printRate = (283.03*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (283.03*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '15000':
                            
                        if($folding > 0){
                                $printRate = (396.25*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (396.25*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '20000':
                            
                        if($folding > 0){
                                $printRate = (515.12*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (515.12*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '25000':
                           
                        if($folding > 0){
                                $printRate = (618.15*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (618.15*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '30000':
                            
                        if($folding > 0){
                                $printRate = (710.87*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (710.87*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '50000':
                            
                        if($folding > 0){
                                $printRate = (1137.39*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1137.39*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                    }
                    break;
                    case '3':
                    switch ($qty) {
                        case '250':
                           
                            if($folding > 0){
                                $printRate = (105.40*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (105.40*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '500':
                           
                            if($folding > 0){
                                $printRate = (107.51*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (107.51*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '1000':
                           
                            if($folding > 0){
                                $printRate = (112.88*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (112.88*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '2000':
                            
                            if($folding > 0){
                                $printRate = (163.68*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (163.68*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '4000':
                            
                            if($folding > 0){
                                $printRate = (204.60*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (204.60*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '5000':
                           
                            if($folding > 0){
                                $printRate = (230.75*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (230.75*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '7000':
                            
                            if($folding > 0){
                                $printRate = (332.48*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (332.48*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '10000':
                            
                            if($folding > 0){
                                $printRate = (432.22*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (432.22*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '15000':
                            
                        if($folding > 0){
                                $printRate = (605.11*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (605.11*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '20000':
                            
                        if($folding > 0){
                                $printRate = (786.64*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (786.64*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '25000':
                            
                        if($folding > 0){
                                $printRate = (943.97*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (943.97*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '30000':
                           
                        if($folding > 0){
                                $printRate = (1085.56*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1085.56*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '50000':
                            
                        if($folding > 0){
                                $printRate = (1736.90*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1736.90*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                    }
                    break;
                    case '4':
                    switch ($qty) {
                        case '250':
                            
                            if($folding > 0){
                                $printRate = (108.46*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (108.46*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '500':
                            
                            if($folding > 0){
                                $printRate = (110.63*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (110.63*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '1000':
                           
                            if($folding > 0){
                                $printRate = (116.16*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (116.16*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '2000':
                            
                            if($folding > 0){
                                $printRate = (168.43*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (168.43*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '4000':
                            
                            if($folding > 0){
                                $printRate = (210.54*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (210.54*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '5000':
                            
                            if($folding > 0){
                                $printRate = (263.18*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (263.18*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '7000':
                            
                            if($folding > 0){
                                $printRate = (342.13*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (342.13*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '10000':
                            
                            if($folding > 0){
                                $printRate = (444.77*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (444.77*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '15000':
                            
                        if($folding > 0){
                                $printRate = (622.68*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (622.68*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '20000':
                           
                        if($folding > 0){
                                $printRate = (809.48*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (809.48*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '25000':
                           
                        if($folding > 0){
                                $printRate = (971.37*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (971.37*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '30000':
                           
                        if($folding > 0){
                                $printRate = (1117.08*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1117.08*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '50000':
                            
                        if($folding > 0){
                                $printRate = (1787.33*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1787.33*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                    }
                    break;
                }
            break;
            case '93.5':
                switch ($paper) {
                    case '1':
                    switch ($qty) {
                        case '250':
                           
                            if($folding > 0){
                                $printRate = (86.5*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (86.5*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '500':
                           
                            if($folding > 0){
                                $printRate = (108.13*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (108.13*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '1000':
                            
                            if($folding > 0){
                                $printRate = (135.16*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (135.16*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '2000':
                           
                            if($folding > 0){
                                $printRate = (195.98*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (195.98*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '4000':
                            
                            if($folding > 0){
                                $printRate = (254.77*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (254.77*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '5000':
                            
                            if($folding > 0){
                                $printRate = (356.68*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (356.68*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '7000':
                            
                            if($folding > 0){
                                $printRate = (463.68*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (463.68*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '10000':
                            
                            if($folding > 0){
                                $printRate = (602.78*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (602.78*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '15000':
                            
                        if($folding > 0){
                                $printRate = (783.62*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (783.62*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '20000':
                           
                        if($folding > 0){
                                $printRate = (979.53*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (979.53*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '25000':
                           
                        if($folding > 0){
                                $printRate = (1175.43*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1175.43*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '30000':
                           
                        if($folding > 0){
                                $printRate = (1528.06*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1528.06*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '50000':
                            
                        if($folding > 0){
                                $printRate = (2062.88*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (2062.88*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                    }
                    break;
                    case '2':
                    switch ($qty) {
                        case '250':
                           
                            if($folding > 0){
                                $printRate = (87.80*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (87.80*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '500':
                           
                            if($folding > 0){
                                $printRate = (109.75*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (109.75*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '1000':
                           
                            if($folding > 0){
                                $printRate = (137.18*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (137.18*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '2000':
                           
                            if($folding > 0){
                                $printRate = (198.92*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (198.92*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '4000':
                            
                            if($folding > 0){
                                $printRate = (258.59*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (258.59*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '5000':
                            
                            if($folding > 0){
                                $printRate = (362.03*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (362.03*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '7000':
                            
                            if($folding > 0){
                                $printRate = (470.64*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (470.64*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '10000':
                            
                            if($folding > 0){
                                $printRate = (611.83*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (611.83*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '15000':
                            
                        if($folding > 0){
                                $printRate = (795.37*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (795.37*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '20000':
                            
                        if($folding > 0){
                                $printRate = (994.22*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (994.22*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '25000':
                            
                        if($folding > 0){
                                $printRate = (1193.06*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1193.06*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '30000':
                           
                        if($folding > 0){
                                $printRate = (1300.98*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1300.98*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '50000':
                            
                        if($folding > 0){
                                $printRate = (2093.82*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (2093.82*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                    }
                    break;
                    case '3':
                    switch ($qty) {
                        case '250':
                            
                            if($folding > 0){
                                $printRate = (134.08*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (134.08*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '500':
                            
                            if($folding > 0){
                                $printRate = (167.59*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (167.59*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '1000':
                            
                            if($folding > 0){
                                $printRate = (209.49*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (209.49*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '2000':
                            
                            if($folding > 0){
                                $printRate = (303.76*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (303.76*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '4000':
                           
                            if($folding > 0){
                                $printRate = (394.89*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (394.89*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '5000':
                            
                            if($folding > 0){
                                $printRate = (302.85*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (302.85*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '7000':
                           
                            if($folding > 0){
                                $printRate = (718.70*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (718.70*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '10000':
                            
                            if($folding > 0){
                                $printRate = (934.32*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (934.32*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '15000':
                            
                        if($folding > 0){
                                $printRate = (1214.61*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1214.61*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '20000':
                           
                        if($folding > 0){
                                $printRate = (1518.26*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1518.26*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '25000':
                           
                        if($folding > 0){
                                $printRate = (1821.92*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1821.92*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '30000':
                            
                        if($folding > 0){
                                $printRate = (2368.49*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (2368.49*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '50000':
                            
                        if($folding > 0){
                                $printRate = (3197.46*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (3197.46*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                    }
                    break;
                    case '4':
                    switch ($qty) {
                        case '250':
                            
                            if($folding > 0){
                                $printRate = (137.97*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (137.97*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '500':
                            
                            if($folding > 0){
                                $printRate = (172.46*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (172.46*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '1000':
                           
                            if($folding > 0){
                                $printRate = (215.57*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (215.57*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '2000':
                           
                            if($folding > 0){
                                $printRate = (312.58*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (312.58*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '4000':
                           
                            if($folding > 0){
                                $printRate = (406.36*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (406.36*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '5000':
                            
                            if($folding > 0){
                                $printRate = (568.90*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (568.90*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '7000':
                            
                            if($folding > 0){
                                $printRate = (739.57*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (739.57*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '10000':
                            
                            if($folding > 0){
                                $printRate = (961.44*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (961.44*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '15000':
                            
                        if($folding > 0){
                                $printRate = (1249.87*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1249.87*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '20000':
                           
                        if($folding > 0){
                                $printRate = (1562.34*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1562.34*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '25000':
                           
                        if($folding > 0){
                                $printRate = (1874.81*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1874.81*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '30000':
                            
                        if($folding > 0){
                                $printRate = (2437.25*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (2437.25*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '50000':
                           
                        if($folding > 0){
                                $printRate = (3290.29*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (3290.29*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                    }
                    break;
                }
            break;
            case '119':
                switch ($paper) {
                    case '1':
                    switch ($qty) {
                        case '250':
                            
                            if($folding > 0){
                                $printRate = (119.5*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (119.5*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '500':
                           
                            if($folding > 0){
                                $printRate = (149.38*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (149.38*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '1000':
                           
                            if($folding > 0){
                                $printRate = (186.72*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (186.72*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '2000':
                            
                            if($folding > 0){
                                $printRate = (270.74*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (270.74*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '4000':
                            
                            if($folding > 0){
                                $printRate = (351.96*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (351.96*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '5000':
                           
                            if($folding > 0){
                                $printRate = (492.75*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (492.75*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '7000':
                           
                            if($folding > 0){
                                $printRate = (640.58*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (640.58*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '10000':
                            
                            if($folding > 0){
                                $printRate = (832.75*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (832.75*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '15000':
                            
                        if($folding > 0){
                                $printRate = (1082.57*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1082.57*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '20000':
                            
                        if($folding > 0){
                                $printRate = (1353.22*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1353.22*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '25000':
                           
                        if($folding > 0){
                                $printRate = (1623.86*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1623.86*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '30000':
                           
                        if($folding > 0){
                                $printRate = (2111.02*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (2111.02*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '50000':
                           
                        if($folding > 0){
                                $printRate = (2849.87*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (2849.87*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                    }
                    break;
                    case '2':
                    switch ($qty) {
                        case '250':
                            
                            if($folding > 0){
                                $printRate = (121.29*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (121.29*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '500':
                           
                            if($folding > 0){
                                $printRate = (151.62*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (151.62*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '1000':
                            
                            if($folding > 0){
                                $printRate = (189.52*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (189.52*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '2000':
                           
                            if($folding > 0){
                                $printRate = (274.80*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (274.80*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '4000':
                          
                            if($folding > 0){
                                $printRate = (357.24*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (357.24*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '5000':
                           
                            if($folding > 0){
                                $printRate = (500.14*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (500.14*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '7000':
                           
                            if($folding > 0){
                                $printRate = (650.18*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (650.18*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '10000':
                            
                            if($folding > 0){
                                $printRate = (845.24*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (845.24*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '15000':
                            
                        if($folding > 0){
                                $printRate = (1098.81*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1098.81*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '20000':
                           
                        if($folding > 0){
                                $printRate = (1373.52*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1373.52*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '25000':
                            
                        if($folding > 0){
                                $printRate = (1648.22*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1648.22*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '30000':
                            
                        if($folding > 0){
                                $printRate = (2142.68*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (2142.68*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '50000':
                            
                        if($folding > 0){
                                $printRate = (2892.62*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (2892.62*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                    }
                    break;
                    case '3':
                    switch ($qty) {
                        case '250':
                            
                            if($folding > 0){
                                $printRate = (185.23*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (185.23*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '500':
                            
                            if($folding > 0){
                                $printRate = (231.53*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (231.53*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '1000':
                            
                            if($folding > 0){
                                $printRate = (289.41*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (289.41*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '2000':
                            
                            if($folding > 0){
                                $printRate = (419.65*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (419.65*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '4000':
                            
                            if($folding > 0){
                                $printRate = (545.30*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (545.30*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '5000':
                           
                            if($folding > 0){
                                $printRate = (763.76*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (763.76*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '7000':
                            
                            if($folding > 0){
                                $printRate = (992.89*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (992.89*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '10000':
                            
                            if($folding > 0){
                                $printRate = (1290.76*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1290.76*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '15000':
                           
                        if($folding > 0){
                                $printRate = (1677.99*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1677.99*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '20000':
                    
                        if($folding > 0){
                                $printRate = (2097.49*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (2097.49*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '25000':
                            
                        if($folding > 0){
                                $printRate = (2516.98*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (2516.98*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '30000':
                           
                        if($folding > 0){
                                $printRate = (3272.08*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (3272.08*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '50000':
                            
                        if($folding > 0){
                                $printRate = (4417.31*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (4417.31*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                    }
                    break;
                    case '4':
                    switch ($qty) {
                        case '250':
                           
                            if($folding > 0){
                                $printRate = (190.60*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (190.60*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '500':
                            
                            if($folding > 0){
                                $printRate = (238.25*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (238.25*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '1000':
                            
                            if($folding > 0){
                                $printRate = (297.82*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (297.82*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '2000':
                            
                            if($folding > 0){
                                $printRate = (431.83*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (431.83*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '4000':
                           
                            if($folding > 0){
                                $printRate = (561.38*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (561.38*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '5000':
                           
                            if($folding > 0){
                                $printRate = (785.94*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (785.94*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '7000':
                            
                            if($folding > 0){
                                $printRate = (1021.72*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1021.72*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '10000':
                           
                            if($folding > 0){
                                $printRate = (1328.23*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1328.23*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '15000':
                            
                        if($folding > 0){
                                $printRate = (1726.70*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1726.70*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '20000':
                            
                        if($folding > 0){
                                $printRate = (2158.38*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (2158.38*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '25000':
                           
                        if($folding > 0){
                                $printRate = (2590.06*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (2590.06*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '30000':
                            
                        if($folding > 0){
                                $printRate = (3367.07*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (3367.07*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '50000':
                           
                        if($folding > 0){
                                $printRate = (4545.30*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (4545.30*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                    }
                    break;
                }
            break;
            case '108':
                switch ($paper) {
                    case '1':
                    switch ($qty) {
                        case '250':
                            
                            if($folding > 0){
                                $printRate = (118.5*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (118.5*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '500':
                           
                            if($folding > 0){
                                $printRate = (124.43*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (124.43*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '1000':
                            
                            if($folding > 0){
                                $printRate = (136.87*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (136.87*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '2000':
                            
                            if($folding > 0){
                                $printRate = (198.46*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (198.46*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '4000':
                            
                            if($folding > 0){
                                $printRate = (248.07*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (248.07*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '5000':
                            
                            if($folding > 0){
                                $printRate = (347.30*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (347.30*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '7000':
                            
                            if($folding > 0){
                                $printRate = (451.49*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (451.49*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '10000':
                            
                            if($folding > 0){
                                $printRate = (586.94*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (586.94*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '15000':
                            
                        if($folding > 0){
                                $printRate = (763.02*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (763.02*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '20000':
                            
                        if($folding > 0){
                                $printRate = (991.93*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (991.93*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '25000':
                           
                        if($folding > 0){
                                $printRate = (1190.31*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1190.31*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '30000':
                            
                        if($folding > 0){
                                $printRate = (1547.41*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1547.41*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '50000':
                            
                        if($folding > 0){
                                $printRate = (2011.63*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (2011.63*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                    }
                    break;
                    case '2':
                    switch ($qty) {
                        case '250':
                            
                            if($folding > 0){
                                $printRate = (120.28*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (120.28*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '500':
                            
                            if($folding > 0){
                                $printRate = (126.29*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (126.29*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '1000':
                            
                            if($folding > 0){
                                $printRate = (138.92*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (138.92*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '2000':
                            
                            if($folding > 0){
                                $printRate = (201.43*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (201.43*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '4000':
                            
                            if($folding > 0){
                                $printRate = (251.79*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (251.79*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '5000':
                            
                            if($folding > 0){
                                $printRate = (352.51*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (352.51*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '7000':
                           
                            if($folding > 0){
                                $printRate = (458.26*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (458.26*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '10000':
                           
                            if($folding > 0){
                                $printRate = (595.74*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (595.74*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '15000':
                            
                        if($folding > 0){
                                $printRate = (774.47*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (774.47*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '20000':
                            
                        if($folding > 0){
                                $printRate = (1006.81*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1006.81*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '25000':
                            
                        if($folding > 0){
                                $printRate = (1208.17*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1208.17*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '30000':
                            
                        if($folding > 0){
                                $printRate = (1570.62*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1570.62*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '50000':
                            
                        if($folding > 0){
                                $printRate = (2041.80*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (2041.80*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                    }
                    break;
                    case '3':
                    switch ($qty) {
                        case '250':
                            
                            if($folding > 0){
                                $printRate = (183.68*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (183.68*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '500':
                            
                            if($folding > 0){
                                $printRate = (192.86*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (192.86*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '1000':
                           
                            if($folding > 0){
                                $printRate = (212.14*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (212.14*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '2000':
                            
                            if($folding > 0){
                                $printRate = (307.61*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (307.61*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '4000':
                            
                            if($folding > 0){
                                $printRate = (384.51*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (384.51*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '5000':
                            
                            if($folding > 0){
                                $printRate = (538.32*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (538.32*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '7000':
                            
                            if($folding > 0){
                                $printRate = (699.81*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (699.81*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '10000':
                            
                            if($folding > 0){
                                $printRate = (909.76*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (909.76*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '15000':
                            
                        if($folding > 0){
                                $printRate = (1182.68*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1182.68*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '20000':
                           
                        if($folding > 0){
                                $printRate = (1537.49*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1537.49*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '25000':
                            
                        if($folding > 0){
                                $printRate = (1844.98*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1844.98*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '30000':
                           
                        if($folding > 0){
                                $printRate = (2398.48*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (2398.48*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '50000':
                           
                        if($folding > 0){
                                $printRate = (3118.02*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (3118.02*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                    }
                    break;
                    case '4':
                    switch ($qty) {
                        case '250':
                           
                            if($folding > 0){
                                $printRate = (189.01*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (189.01*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '500':
                            
                            if($folding > 0){
                                $printRate = (198.46*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (198.46*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '1000':
                            
                            if($folding > 0){
                                $printRate = (218.30*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (218.30*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '2000':
                            
                            if($folding > 0){
                                $printRate = (316.54*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (316.54*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '4000':
                            
                            if($folding > 0){
                                $printRate = (395.68*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (395.68*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '5000':
                            
                            if($folding > 0){
                                $printRate = (303.95*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (303.95*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '7000':
                            
                            if($folding > 0){
                                $printRate = (720.13*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (720.13*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '10000':
                            
                            if($folding > 0){
                                $printRate = (936.17*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (936.17*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '15000':
                            
                        if($folding > 0){
                                $printRate = (1217.02*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1217.02*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '20000':
                           
                        if($folding > 0){
                                $printRate = (1582.12*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1582.12*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '25000':
                           
                        if($folding > 0){
                                $printRate = (1898.30*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1898.30*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '30000':
                           
                        if($folding > 0){
                                $printRate = (2468.11*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (2468.11*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '50000':
                            
                        if($folding > 0){
                                $printRate = (3208.30*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (3208.30*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                    }
                    break;
                }
            break;
            case '187':
                switch ($paper) {
                    case '1':
                    switch ($qty) {
                        case '250':
                            
                            if($folding > 0){
                                $printRate = (178.5*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (178.5*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '500':
                            
                            if($folding > 0){
                                $printRate = (214.20*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (214.20*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '1000':
                            
                            if($folding > 0){
                                $printRate = (267.75*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (267.75*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '2000':
                           
                            if($folding > 0){
                                $printRate = (388.24*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (388.24*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '4000':
                            
                            if($folding > 0){
                                $printRate = (524.12*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (524.12*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '5000':
                            
                            if($folding > 0){
                                $printRate = (733.77*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (733.77*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '7000':
                            
                            if($folding > 0){
                                $printRate = (917.21*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (917.21*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '10000':
                            
                            if($folding > 0){
                                $printRate = (1192.37*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1192.37*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '15000':
                            
                        if($folding > 0){
                                $printRate = (1669.32*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1669.32*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '20000':
                            
                        if($folding > 0){
                                $printRate = (2086.66*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (2086.66*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '25000':
                           
                        if($folding > 0){
                                $printRate = (2503.99*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (2503.99*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '30000':
                            
                        if($folding > 0){
                                $printRate = (3230.18*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (3230.18*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '50000':
                            
                        if($folding > 0){
                                $printRate = (4394.50*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (4394.50*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                    }
                    break;
                    case '2':
                    switch ($qty) {
                        case '250':
                            
                            if($folding > 0){
                                $printRate = (181.18*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (181.18*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '500':
                           
                            if($folding > 0){
                                $printRate = (217.41*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (217.41*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '1000':
                            
                            if($folding > 0){
                                $printRate = (271.77*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (271.77*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '2000':
                           
                            if($folding > 0){
                                $printRate = (394.06*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (394.06*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '4000':
                            
                            if($folding > 0){
                                $printRate = (531.98*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (531.98*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '5000':
                           
                            if($folding > 0){
                                $printRate = (744.78*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (744.78*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '7000':
                            
                            if($folding > 0){
                                $printRate = (930.97*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (930.97*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '10000':
                           
                            if($folding > 0){
                                $printRate = (1210.26*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1210.26*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '15000':
                            
                        if($folding > 0){
                                $printRate = (1694.36*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1694.36*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '20000':
                            
                        if($folding > 0){
                                $printRate = (2117.96*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (2117.96*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '25000':
                            
                        if($folding > 0){
                                $printRate = (2541.30*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (2541.30*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '30000':
                            
                        if($folding > 0){
                                $printRate = (3304.01*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (3304.01*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '50000':
                            
                        if($folding > 0){
                                $printRate = (4460.41*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (4460.41*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                    }
                    break;
                    case '3':
                    switch ($qty) {
                        case '250':
                            
                            if($folding > 0){
                                $printRate = (276.68*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (276.68*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '500':
                            
                            if($folding > 0){
                                $printRate = (332.01*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (332.01*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '1000':
                            
                            if($folding > 0){
                                $printRate = (415.01*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (415.01*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '2000':
                            
                            if($folding > 0){
                                $printRate = (601.77*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (601.77*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '4000':
                            
                            if($folding > 0){
                                $printRate = (812.39*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (812.39*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '5000':
                            
                            if($folding > 0){
                                $printRate = (1137.34*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1137.34*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '7000':
                            
                            if($folding > 0){
                                $printRate = (1421.68*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1421.68*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '10000':
                            
                            if($folding > 0){
                                $printRate = (1848.18*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1848.18*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '15000':
                            
                        if($folding > 0){
                                $printRate = (2587.45*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (2587.45*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '20000':
                            
                        if($folding > 0){
                                $printRate = (3234.32*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (3234.32*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '25000':
                           
                        if($folding > 0){
                                $printRate = (3881.18*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (3881.18*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '30000':
        
                        if($folding > 0){
                                $printRate = (5045.53*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (5045.53*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '50000':
                           
                        if($folding > 0){
                                $printRate = (6811.47*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (6811.47*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                    }
                    break;
                    case '4':
                    switch ($qty) {
                        case '250':
                            
                            if($folding > 0){
                                $printRate = (284.71*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (284.71*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '500':
                            
                            if($folding > 0){
                                $printRate = (341.65*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (341.65*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '1000':
                            
                            if($folding > 0){
                                $printRate = (427.06*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (427.06*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '2000':
                            
                            if($folding > 0){
                                $printRate = (619.24*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (619.24*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '4000':
                            
                            if($folding > 0){
                                $printRate = (835.97*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (835.97*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '5000':
                            
                            if($folding > 0){
                                $printRate = (1170.36*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1170.36*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '7000':
                            
                            if($folding > 0){
                                $printRate = (1462.95*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1462.95*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '10000':
                            
                            if($folding > 0){
                                $printRate = (1901.84*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (1901.84*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '15000':
                            
                        if($folding > 0){
                                $printRate = (2662.57*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (2662.57*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '20000':
                            
                        if($folding > 0){
                                $printRate = (3328.22*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (3328.22*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '25000':
                            
                        if($folding > 0){
                                $printRate = (3993.86*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (3993.86*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '30000':
                            
                        if($folding > 0){
                                $printRate = (5192.02*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (5192.02*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                        case '50000':
                            
                        if($folding > 0){
                                $printRate = (7009.22*30)/100;
                                $brochureRate = $total+$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            } else {
                                $printRate = (7009.22*30)/100;
                                $brochureRate = $total-$printRate;
                                $finalTotal = ($brochureRate*100)/50;
                                return response()->json(['foldingRate'=>$printRate, 'total'=>$finalTotal,'final'=>$brochureRate]);
                            }
                        break;
                    }
                    break;
                }
            break;
        }
    }
}
