<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnvelopeController extends Controller
{
    public function mainQty(Request $request)
    {
        $qty = $request->qty;
            switch ($qty) {
                case '250':
                    $rate = 114.5;
                    $finalTotal = ($rate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                break;
                case '500':
                    $rate = 123.5;
                    $finalTotal = ($rate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                break;
                case '1000':
                    $rate = 138.6;
                    $finalTotal = ($rate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                break;
                case '2000':
                    $rate = 195.5;
                    $finalTotal = ($rate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                break;
                case '5000':
                    $rate = 335.5;
                    $finalTotal = ($rate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                break;
                case '10000':
                    $rate = 549.5;
                    $finalTotal = ($rate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                break;
                case '15000':
                    $rate = 725.3;
                    $finalTotal = ($rate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                break;
                case '20000':
                    $rate = 919.99;
                    $finalTotal = ($rate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                break;
            }
    }
    public function window(Request $request)
    {
        $window = $request->window;
        $qty = $request->qty;
        $total = $request->total;
            switch ($qty) {
                case '250':
                    if ($window > 0) {
                        $windowRate = (114.5*5)/100;
                        $rate = $total+$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    } else {
                        $windowRate = (114.5*5)/100;
                        $rate = $total-$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    }
                break;
                case '500':
                    if ($window > 0) {
                        $windowRate = (123.5*5)/100;
                        $rate = $total+$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    } else {
                        $windowRate = (123.5*5)/100;
                        $rate = $total-$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    }
                break;
                case '1000':
                    if ($window > 0) {
                        $windowRate = (138.6*5)/100;
                        $rate = $total+$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    } else {
                        $windowRate = (138.6*5)/100;
                        $rate = $total-$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    }
                break;
                case '2000':
                    if ($window > 0) {
                        $windowRate = (195.5*5)/100;
                        $rate = $total+$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    } else {
                        $windowRate = (195.5*5)/100;
                        $rate = $total-$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    }
                break;
                case '5000':
                    if ($window > 0) {
                        $windowRate = (335.5*5)/100;
                        $rate = $total+$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    } else {
                        $windowRate = (335.5*5)/100;
                        $rate = $total-$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    }
                break;
                case '10000':
                    if ($window > 0) {
                        $windowRate = (549.5*5)/100;
                        $rate = $total+$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    } else {
                        $windowRate = (549.5*5)/100;
                        $rate = $total-$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    }
                break;
                case '15000':
                    if ($window > 0) {
                        $windowRate = (725.3*5)/100;
                        $rate = $total+$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    } else {
                        $windowRate = (725.3*5)/100;
                        $rate = $total-$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    }
                break;
                case '20000':
                    if ($window > 0) {
                        $windowRate = (919.99*5)/100;
                        $rate = $total+$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    } else {
                        $windowRate = (919.99*5)/100;
                        $rate = $total-$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    }
                break;
            }
    }
    public function a6mainQty(Request $request)
    {
        $qty = $request->qty;
            switch ($qty) {
                case '250':
                    $rate = 105.5;
                    $finalTotal = ($rate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                break;
                case '500':
                    $rate = 109.5;
                    $finalTotal = ($rate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                break;
                case '1000':
                    $rate = 125.5;
                    $finalTotal = ($rate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                break;
                case '2000':
                    $rate = 178.6;
                    $finalTotal = ($rate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                break;
                case '5000':
                    $rate = 310.6;
                    $finalTotal = ($rate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                break;
                case '10000':
                    $rate = 480.6;
                    $finalTotal = ($rate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                break;
                case '15000':
                    $rate = 658.5;
                    $finalTotal = ($rate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                break;
                case '20000':
                    $rate = 825.9;
                    $finalTotal = ($rate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                break;
            }
    }
    public function a6window(Request $request)
    {
        $window = $request->window;
        $qty = $request->qty;
        $total = $request->total;
            switch ($qty) {
                case '250':
                    if ($window > 0) {
                        $windowRate = (105.5*5)/100;
                        $rate = $total+$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    } else {
                        $windowRate = (105.5*5)/100;
                        $rate = $total-$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    }
                break;
                case '500':
                    if ($window > 0) {
                        $windowRate = (109.5*5)/100;
                        $rate = $total+$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    } else {
                        $windowRate = (109.5*5)/100;
                        $rate = $total-$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    }
                break;
                case '1000':
                    if ($window > 0) {
                        $windowRate = (125.5*5)/100;
                        $rate = $total+$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    } else {
                        $windowRate = (125.5*5)/100;
                        $rate = $total-$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    }
                break;
                case '2000':
                    if ($window > 0) {
                        $windowRate = (178.6*5)/100;
                        $rate = $total+$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    } else {
                        $windowRate = (178.6*5)/100;
                        $rate = $total-$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    }
                break;
                case '5000':
                    if ($window > 0) {
                        $windowRate = (310.6*5)/100;
                        $rate = $total+$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    } else {
                        $windowRate = (310.6*5)/100;
                        $rate = $total-$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    }
                break;
                case '10000':
                    if ($window > 0) {
                        $windowRate = (480.6*5)/100;
                        $rate = $total+$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    } else {
                        $windowRate = (480.6*5)/100;
                        $rate = $total-$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    }
                break;
                case '15000':
                    if ($window > 0) {
                        $windowRate = (658.5*5)/100;
                        $rate = $total+$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    } else {
                        $windowRate = (658.5*5)/100;
                        $rate = $total-$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    }
                break;
                case '20000':
                    if ($window > 0) {
                        $windowRate = (825.9*5)/100;
                        $rate = $total+$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    } else {
                        $windowRate = (825.9*5)/100;
                        $rate = $total-$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    }
                break;
            }
    }
    public function a2mainQty(Request $request)
    {
        $qty = $request->qty;
            switch ($qty) {
                case '250':
                    $rate = 106.7;
                    $finalTotal = ($rate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                break;
                case '500':
                    $rate = 109.58;
                    $finalTotal = ($rate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                break;
                case '1000':
                    $rate = 122.68;
                    $finalTotal = ($rate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                break;
                case '2000':
                    $rate = 175.6;
                    $finalTotal = ($rate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                break;
                case '5000':
                    $rate = 305.1;
                    $finalTotal = ($rate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                break;
                case '10000':
                    $rate = 495.6;
                    $finalTotal = ($rate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                break;
                case '15000':
                    $rate = 665.8;
                    $finalTotal = ($rate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                break;
                case '20000':
                    $rate = 829.5;
                    $finalTotal = ($rate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                break;
            }
    }
    public function a2window(Request $request)
    {
        $window = $request->window;
        $qty = $request->qty;
        $total = $request->total;
            switch ($qty) {
                case '250':
                    if ($window > 0) {
                        $windowRate = (106.7*5)/100;
                        $rate = $total+$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    } else {
                        $windowRate = (106.7*5)/100;
                        $rate = $total-$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    }
                break;
                case '500':
                    if ($window > 0) {
                        $windowRate = (109.58*5)/100;
                        $rate = $total+$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    } else {
                        $windowRate = (109.58*5)/100;
                        $rate = $total-$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    }
                break;
                case '1000':
                    if ($window > 0) {
                        $windowRate = (122.68*5)/100;
                        $rate = $total+$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    } else {
                        $windowRate = (122.68*5)/100;
                        $rate = $total-$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    }
                break;
                case '2000':
                    if ($window > 0) {
                        $windowRate = (175.6*5)/100;
                        $rate = $total+$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    } else {
                        $windowRate = (175.6*5)/100;
                        $rate = $total-$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    }
                break;
                case '5000':
                    if ($window > 0) {
                        $windowRate = (305.1*5)/100;
                        $rate = $total+$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    } else {
                        $windowRate = (305.1*5)/100;
                        $rate = $total-$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    }
                break;
                case '10000':
                    if ($window > 0) {
                        $windowRate = (495.6*5)/100;
                        $rate = $total+$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    } else {
                        $windowRate = (495.6*5)/100;
                        $rate = $total-$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    }
                break;
                case '15000':
                    if ($window > 0) {
                        $windowRate = (665.8*5)/100;
                        $rate = $total+$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    } else {
                        $windowRate = (665.8*5)/100;
                        $rate = $total-$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    }
                break;
                case '20000':
                    if ($window > 0) {
                        $windowRate = (829.5*5)/100;
                        $rate = $total+$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    } else {
                        $windowRate = (829.5*5)/100;
                        $rate = $total-$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    }
                break;
            }
    }
    public function a7mainQty(Request $request)
    {
        $qty = $request->qty;
            switch ($qty) {
                case '250':
                    $rate = 117.6;
                    $finalTotal = ($rate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                break;
                case '500':
                    $rate = 122.6;
                    $finalTotal = ($rate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                break;
                case '1000':
                    $rate = 138.5;
                    $finalTotal = ($rate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                break;
                case '2000':
                    $rate = 198.5;
                    $finalTotal = ($rate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                break;
                case '5000':
                    $rate = 341;
                    $finalTotal = ($rate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                break;
                case '10000':
                    $rate = 549.3;
                    $finalTotal = ($rate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                break;
                case '15000':
                    $rate = 735.8;
                    $finalTotal = ($rate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                break;
                case '20000':
                    $rate = 918.5;
                    $finalTotal = ($rate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                break;
            }
    }
    public function a7window(Request $request)
    {
        $window = $request->window;
        $qty = $request->qty;
        $total = $request->total;
            switch ($qty) {
                case '250':
                    if ($window > 0) {
                        $windowRate = (117.6*5)/100;
                        $rate = $total+$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    } else {
                        $windowRate = (117.6*5)/100;
                        $rate = $total-$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    }
                break;
                case '500':
                    if ($window > 0) {
                        $windowRate = (122.6*5)/100;
                        $rate = $total+$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    } else {
                        $windowRate = (122.6*5)/100;
                        $rate = $total-$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    }
                break;
                case '1000':
                    if ($window > 0) {
                        $windowRate = (138.5*5)/100;
                        $rate = $total+$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    } else {
                        $windowRate = (138.5*5)/100;
                        $rate = $total-$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    }
                break;
                case '2000':
                    if ($window > 0) {
                        $windowRate = (198.5*5)/100;
                        $rate = $total+$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    } else {
                        $windowRate = (198.5*5)/100;
                        $rate = $total-$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    }
                break;
                case '5000':
                    if ($window > 0) {
                        $windowRate = (341*5)/100;
                        $rate = $total+$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    } else {
                        $windowRate = (341*5)/100;
                        $rate = $total-$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    }
                break;
                case '10000':
                    if ($window > 0) {
                        $windowRate = (549.3*5)/100;
                        $rate = $total+$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    } else {
                        $windowRate = (549.3*5)/100;
                        $rate = $total-$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    }
                break;
                case '15000':
                    if ($window > 0) {
                        $windowRate = (735.8*5)/100;
                        $rate = $total+$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    } else {
                        $windowRate = (735.8*5)/100;
                        $rate = $total-$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    }
                break;
                case '20000':
                    if ($window > 0) {
                        $windowRate = (918.5*5)/100;
                        $rate = $total+$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    } else {
                        $windowRate = (918.5*5)/100;
                        $rate = $total-$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    }
                break;
            }
    }
    public function mainQty9x12(Request $request)
    {
        $qty = $request->qty;
            switch ($qty) {
                case '250':
                    $rate = 379.5;
                    $finalTotal = ($rate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                break;
                case '500':
                    $rate = 399.99;
                    $finalTotal = ($rate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                break;
                case '1000':
                    $rate = 459.5;
                    $finalTotal = ($rate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                break;
                case '2000':
                    $rate = 645.5;
                    $finalTotal = ($rate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                break;
                case '5000':
                    $rate = 1165.5;
                    $finalTotal = ($rate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                break;
                case '10000':
                    $rate = 1949.5;
                    $finalTotal = ($rate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                break;
                case '15000':
                    $rate = 2650.6;
                    $finalTotal = ($rate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                break;
                case '20000':
                    $rate = 3349.6;
                    $finalTotal = ($rate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                break;
            }
    }
    public function window9x12(Request $request)
    {
        $window = $request->window;
        $qty = $request->qty;
        $total = $request->total;
            switch ($qty) {
                case '250':
                    if ($window > 0) {
                        $windowRate = (379.5*5)/100;
                        $rate = $total+$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    } else {
                        $windowRate = (379.5*5)/100;
                        $rate = $total-$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    }
                break;
                case '500':
                    if ($window > 0) {
                        $windowRate = (399.99*5)/100;
                        $rate = $total+$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    } else {
                        $windowRate = (399.99*5)/100;
                        $rate = $total-$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    }
                break;
                case '1000':
                    if ($window > 0) {
                        $windowRate = (459.5*5)/100;
                        $rate = $total+$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    } else {
                        $windowRate = (459.5*5)/100;
                        $rate = $total-$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    }
                break;
                case '2000':
                    if ($window > 0) {
                        $windowRate = (645.5*5)/100;
                        $rate = $total+$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    } else {
                        $windowRate = (645.5*5)/100;
                        $rate = $total-$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    }
                break;
                case '5000':
                    if ($window > 0) {
                        $windowRate = (1165.5*5)/100;
                        $rate = $total+$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    } else {
                        $windowRate = (1165.5*5)/100;
                        $rate = $total-$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    }
                break;
                case '10000':
                    if ($window > 0) {
                        $windowRate = (1949.5*5)/100;
                        $rate = $total+$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    } else {
                        $windowRate = (1949.5*5)/100;
                        $rate = $total-$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    }
                break;
                case '15000':
                    if ($window > 0) {
                        $windowRate = (2650.6*5)/100;
                        $rate = $total+$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    } else {
                        $windowRate = (2650.6*5)/100;
                        $rate = $total-$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    }
                break;
                case '20000':
                    if ($window > 0) {
                        $windowRate = (3349.6*5)/100;
                        $rate = $total+$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    } else {
                        $windowRate = (3349.6*5)/100;
                        $rate = $total-$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    }
                break;
            }
    }
    public function mainQty6x9(Request $request)
    {
        $qty = $request->qty;
            switch ($qty) {
                case '250':
                    $rate = 145.38;
                    $finalTotal = ($rate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                break;
                case '500':
                    $rate = 152.3;
                    $finalTotal = ($rate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                break;
                case '1000':
                    $rate = 171.5;
                    $finalTotal = ($rate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                break;
                case '2000':
                    $rate = 248.6;
                    $finalTotal = ($rate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                break;
                case '5000':
                    $rate = 425.6;
                    $finalTotal = ($rate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                break;
                case '10000':
                    $rate = 719.5;
                    $finalTotal = ($rate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                break;
                case '15000':
                    $rate = 955.4;
                    $finalTotal = ($rate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                break;
                case '20000':
                    $rate = 1190.5;
                    $finalTotal = ($rate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                break;
            }
    }
    public function window6x9(Request $request)
    {
        $window = $request->window;
        $qty = $request->qty;
        $total = $request->total;
            switch ($qty) {
                case '250':
                    if ($window > 0) {
                        $windowRate = (145.38*5)/100;
                        $rate = $total+$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    } else {
                        $windowRate = (145.38*5)/100;
                        $rate = $total-$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    }
                break;
                case '500':
                    if ($window > 0) {
                        $windowRate = (152.3*5)/100;
                        $rate = $total+$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    } else {
                        $windowRate = (152.3*5)/100;
                        $rate = $total-$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    }
                break;
                case '1000':
                    if ($window > 0) {
                        $windowRate = (171.5*5)/100;
                        $rate = $total+$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    } else {
                        $windowRate = (171.5*5)/100;
                        $rate = $total-$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    }
                break;
                case '2000':
                    if ($window > 0) {
                        $windowRate = (248.6*5)/100;
                        $rate = $total+$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    } else {
                        $windowRate = (248.6*5)/100;
                        $rate = $total-$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    }
                break;
                case '5000':
                    if ($window > 0) {
                        $windowRate = (425.6*5)/100;
                        $rate = $total+$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    } else {
                        $windowRate = (425.6*5)/100;
                        $rate = $total-$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    }
                break;
                case '10000':
                    if ($window > 0) {
                        $windowRate = (719.5*5)/100;
                        $rate = $total+$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    } else {
                        $windowRate = (719.5*5)/100;
                        $rate = $total-$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    }
                break;
                case '15000':
                    if ($window > 0) {
                        $windowRate = (955.4*5)/100;
                        $rate = $total+$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    } else {
                        $windowRate = (955.4*5)/100;
                        $rate = $total-$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    }
                break;
                case '20000':
                    if ($window > 0) {
                        $windowRate = (1190.5*5)/100;
                        $rate = $total+$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    } else {
                        $windowRate = (1190.5*5)/100;
                        $rate = $total-$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    }
                break;
            }
    }
    public function mainQty9(Request $request)
    {
        $qty = $request->qty;
            switch ($qty) {
                case '250':
                    $rate = 98.5;
                    $finalTotal = ($rate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                break;
                case '500':
                    $rate = 105.5;
                    $finalTotal = ($rate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                break;
                case '1000':
                    $rate = 115.6;
                    $finalTotal = ($rate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                break;
                case '2000':
                    $rate = 169.5;
                    $finalTotal = ($rate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                break;
                case '5000':
                    $rate = 299.5;
                    $finalTotal = ($rate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                break;
                case '10000':
                    $rate = 475.5;
                    $finalTotal = ($rate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                break;
                case '15000':
                    $rate = 650.6;
                    $finalTotal = ($rate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                break;
                case '20000':
                    $rate = 822.6;
                    $finalTotal = ($rate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                break;
            }
    }
    public function window9(Request $request)
    {
        $window = $request->window;
        $qty = $request->qty;
        $total = $request->total;
            switch ($qty) {
                case '250':
                    if ($window > 0) {
                        $windowRate = (98.5*5)/100;
                        $rate = $total+$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    } else {
                        $windowRate = (98.5*5)/100;
                        $rate = $total-$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    }
                break;
                case '500':
                    if ($window > 0) {
                        $windowRate = (105.5*5)/100;
                        $rate = $total+$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    } else {
                        $windowRate = (105.5*5)/100;
                        $rate = $total-$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    }
                break;
                case '1000':
                    if ($window > 0) {
                        $windowRate = (115.6*5)/100;
                        $rate = $total+$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    } else {
                        $windowRate = (115.6*5)/100;
                        $rate = $total-$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    }
                break;
                case '2000':
                    if ($window > 0) {
                        $windowRate = (169.5*5)/100;
                        $rate = $total+$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    } else {
                        $windowRate = (169.5*5)/100;
                        $rate = $total-$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    }
                break;
                case '5000':
                    if ($window > 0) {
                        $windowRate = (299.5*5)/100;
                        $rate = $total+$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    } else {
                        $windowRate = (299.5*5)/100;
                        $rate = $total-$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    }
                break;
                case '10000':
                    if ($window > 0) {
                        $windowRate = (475.5*5)/100;
                        $rate = $total+$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    } else {
                        $windowRate = (475.5*5)/100;
                        $rate = $total-$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    }
                break;
                case '15000':
                    if ($window > 0) {
                        $windowRate = (650.6*5)/100;
                        $rate = $total+$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    } else {
                        $windowRate = (650.6*5)/100;
                        $rate = $total-$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    }
                break;
                case '20000':
                    if ($window > 0) {
                        $windowRate = (822.6*5)/100;
                        $rate = $total+$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    } else {
                        $windowRate = (822.6*5)/100;
                        $rate = $total-$windowRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'windowRate'=>$windowRate]);
                    }
                break;
            }
    }
}
