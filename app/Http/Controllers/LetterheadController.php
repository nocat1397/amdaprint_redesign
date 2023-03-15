<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LetterheadController extends Controller
{
    public function letterheadSize(Request $request)
    {
        $size = $request->size;
        switch ($size) {
            case '46.75':
                $rate = 48.5;
                $finalTotal = ($rate*100)/50;
                return response()->json(['total'=>$finalTotal,'final'=>$rate]);
            break;
            case '93.5':
                $rate = 96.5;
                $finalTotal = ($rate*100)/50;
                return response()->json(['total'=>$finalTotal,'final'=>$rate]);
            break;
            case '96.68':
                $rate = 99.5;
                $finalTotal = ($rate*100)/50;
                return response()->json(['total'=>$finalTotal,'final'=>$rate]);
            break;
            
        }
        
    }
    public function mainQty(Request $request)
    {
        $size = $request->size;
        $qty = $request->qty;

        switch ($size) {
            case '46.75':
            switch ($qty) {
                case '250':
                    $rate = 48.5;
                    $finalTotal = ($rate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                break;
                case '500':
                    $rate = 52.5;
                    $finalTotal = ($rate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                break;
                case '1000':
                    $rate = 59.5;
                    $finalTotal = ($rate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                break;
                case '2000':
                    $rate = 79.5;
                    $finalTotal = ($rate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                break;
                case '5000':
                    $rate = 125.5;
                    $finalTotal = ($rate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                break;
                case '10000':
                    $rate = 230.8;
                    $finalTotal = ($rate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                break;
                case '20000':
                    $rate = 433.5;
                    $finalTotal = ($rate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                break;
                case '30000':
                    $rate = 625.5;
                    $finalTotal = ($rate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                break;
                case '40000':
                    $rate = 795.6;
                    $finalTotal = ($rate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                break;
                case '50000':
                    $rate = 992.6;
                    $finalTotal = ($rate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                break;
            }
            break;
            case '93.5':
                switch ($qty) {
                    case '250':
                        $rate = 96.5;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                    break;
                    case '500':
                        $rate = 102.5;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                    break;
                    case '1000':
                        $rate = 105.6;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                    break;
                    case '2000':
                        $rate = 152.5;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                    break;
                    case '5000':
                        $rate = 240.3;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                    break;
                    case '10000':
                        $rate = 430.5;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                    break;
                    case '20000':
                        $rate = 830.5;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                    break;
                    case '30000':
                        $rate = 1120.5;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                    break;
                    case '40000':
                        $rate = 1390.5;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                    break;
                    case '50000':
                        $rate = 1850.2;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                    break;
                }
            break;
            case '96.68':
                switch ($qty) {
                    case '250':
                        $rate = 99.5;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                    break;
                    case '500':
                        $rate = 109.8;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                    break;
                    case '1000':
                        $rate = 111.1;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                    break;
                    case '2000':
                        $rate = 158.2;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                    break;
                    case '5000':
                        $rate = 249.5;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                    break;
                    case '10000':
                        $rate = 438.5;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                    break;
                    case '20000':
                        $rate = 838.2;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                    break;
                    case '30000':
                        $rate = 1130.2;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                    break;
                    case '40000':
                        $rate = 1399.2;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                    break;
                    case '50000':
                        $rate = 1859.2;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate]);
                    break;
                }
            break;
            
        }
        
    }
    public function printSide(Request $request)
    {
        $size = $request->size;
        $qty = $request->qty;
        $printside = $request->printside;
        $total = $request->total;

        switch ($size) {
            case '46.75':
            switch ($qty) {
                case '250':
                    if($printside > 0)
                    {
                        $printRate = (48.5*20)/100;
                        $rate = $total+$printRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'printsideRate'=>$printRate]);
                    } else {
                        $printRate = (48.5*20)/100;
                        $rate = $total-$printRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'printsideRate'=>$printRate]);
                    }
                break;
                case '500':
                    if($printside > 0)
                    {
                        $printRate = (52.5*20)/100;
                        $rate = $total+$printRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'printsideRate'=>$printRate]);
                    } else {
                        $printRate = (52.5*20)/100;
                        $rate = $total-$printRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'printsideRate'=>$printRate]);
                    }
                break;
                case '1000':
                    if($printside > 0)
                    {
                        $printRate = (59.5*20)/100;
                        $rate = $total+$printRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'printsideRate'=>$printRate]);
                    } else {
                        $printRate = (59.5*20)/100;
                        $rate = $total-$printRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'printsideRate'=>$printRate]);
                    }
                break;
                case '2000':
                    if($printside > 0)
                    {
                        $printRate = (79.5*20)/100;
                        $rate = $total+$printRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'printsideRate'=>$printRate]);
                    } else {
                        $printRate = (79.5*20)/100;
                        $rate = $total-$printRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'printsideRate'=>$printRate]);
                    }
                break;
                case '5000':
                    if($printside > 0)
                    {
                        $printRate = (125.5*20)/100;
                        $rate = $total+$printRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'printsideRate'=>$printRate]);
                    } else {
                        $printRate = (125.5*20)/100;
                        $rate = $total-$printRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'printsideRate'=>$printRate]);
                    }
                break;
                case '10000':
                    if($printside > 0)
                    {
                        $printRate = (230.8*20)/100;
                        $rate = $total+$printRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'printsideRate'=>$printRate]);
                    } else {
                        $printRate = (230.8*20)/100;
                        $rate = $total-$printRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'printsideRate'=>$printRate]);
                    }
                break;
                case '20000':
                    if($printside > 0)
                    {
                        $printRate = (433.5*20)/100;
                        $rate = $total+$printRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'printsideRate'=>$printRate]);
                    } else {
                        $printRate = (433.5*20)/100;
                        $rate = $total-$printRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'printsideRate'=>$printRate]);
                    }
                break;
                case '30000':
                    if($printside > 0)
                    {
                        $printRate = (625.5*20)/100;
                        $rate = $total+$printRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'printsideRate'=>$printRate]);
                    } else {
                        $printRate = (625.5*20)/100;
                        $rate = $total-$printRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'printsideRate'=>$printRate]);
                    }
                break;
                case '40000':
                    if($printside > 0)
                    {
                        $printRate = (795.6*20)/100;
                        $rate = $total+$printRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'printsideRate'=>$printRate]);
                    } else {
                        $printRate = (795.6*20)/100;
                        $rate = $total-$printRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'printsideRate'=>$printRate]);
                    }
                break;
                case '50000':
                    if($printside > 0)
                    {
                        $printRate = (992.6*20)/100;
                        $rate = $total+$printRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'printsideRate'=>$printRate]);
                    } else {
                        $printRate = (992.6*20)/100;
                        $rate = $total-$printRate;
                        $finalTotal = ($rate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$rate,'printsideRate'=>$printRate]);
                    }
                break;
            }
            break;
            case '93.5':
                switch ($qty) {
                    case '250':
                        if($printside > 0)
                        {
                            $printRate = (96.5*20)/100;
                            $rate = $total+$printRate;
                            $finalTotal = ($rate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$rate,'printsideRate'=>$printRate]);
                        } else {
                            $printRate = (96.5*20)/100;
                            $rate = $total-$printRate;
                            $finalTotal = ($rate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$rate,'printsideRate'=>$printRate]);
                        }
                    break;
                    case '500':
                        if($printside > 0)
                        {
                            $printRate = (102.5*20)/100;
                            $rate = $total+$printRate;
                            $finalTotal = ($rate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$rate,'printsideRate'=>$printRate]);
                        } else {
                            $printRate = (102.5*20)/100;
                            $rate = $total-$printRate;
                            $finalTotal = ($rate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$rate,'printsideRate'=>$printRate]);
                        }
                    break;
                    case '1000':
                        if($printside > 0)
                        {
                            $printRate = (105.6*20)/100;
                            $rate = $total+$printRate;
                            $finalTotal = ($rate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$rate,'printsideRate'=>$printRate]);
                        } else {
                            $printRate = (105.6*20)/100;
                            $rate = $total-$printRate;
                            $finalTotal = ($rate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$rate,'printsideRate'=>$printRate]);
                        }
                    break;
                    case '2000':
                        if($printside > 0)
                        {
                            $printRate = (152.5*20)/100;
                            $rate = $total+$printRate;
                            $finalTotal = ($rate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$rate,'printsideRate'=>$printRate]);
                        } else {
                            $printRate = (152.5*20)/100;
                            $rate = $total-$printRate;
                            $finalTotal = ($rate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$rate,'printsideRate'=>$printRate]);
                        }
                    break;
                    case '5000':
                        if($printside > 0)
                        {
                            $printRate = (240.3*20)/100;
                            $rate = $total+$printRate;
                            $finalTotal = ($rate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$rate,'printsideRate'=>$printRate]);
                        } else {
                            $printRate = (240.3*20)/100;
                            $rate = $total-$printRate;
                            $finalTotal = ($rate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$rate,'printsideRate'=>$printRate]);
                        }
                    break;
                    case '10000':
                        if($printside > 0)
                        {
                            $printRate = (430.5*20)/100;
                            $rate = $total+$printRate;
                            $finalTotal = ($rate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$rate,'printsideRate'=>$printRate]);
                        } else {
                            $printRate = (430.5*20)/100;
                            $rate = $total-$printRate;
                            $finalTotal = ($rate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$rate,'printsideRate'=>$printRate]);
                        }
                    break;
                    case '20000':
                        if($printside > 0)
                        {
                            $printRate = (830.5*20)/100;
                            $rate = $total+$printRate;
                            $finalTotal = ($rate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$rate,'printsideRate'=>$printRate]);
                        } else {
                            $printRate = (830.5*20)/100;
                            $rate = $total-$printRate;
                            $finalTotal = ($rate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$rate,'printsideRate'=>$printRate]);
                        }
                    break;
                    case '30000':
                        if($printside > 0)
                        {
                            $printRate = (1120.5*20)/100;
                            $rate = $total+$printRate;
                            $finalTotal = ($rate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$rate,'printsideRate'=>$printRate]);
                        } else {
                            $printRate = (1120.5*20)/100;
                            $rate = $total-$printRate;
                            $finalTotal = ($rate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$rate,'printsideRate'=>$printRate]);
                        }
                    break;
                    case '40000':
                        if($printside > 0)
                        {
                            $printRate = (1390.5*20)/100;
                            $rate = $total+$printRate;
                            $finalTotal = ($rate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$rate,'printsideRate'=>$printRate]);
                        } else {
                            $printRate = (1390.5*20)/100;
                            $rate = $total-$printRate;
                            $finalTotal = ($rate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$rate,'printsideRate'=>$printRate]);
                        }
                    break;
                    case '50000':
                        if($printside > 0)
                        {
                            $printRate = (1850.2*20)/100;
                            $rate = $total+$printRate;
                            $finalTotal = ($rate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$rate,'printsideRate'=>$printRate]);
                        } else {
                            $printRate = (1850.2*20)/100;
                            $rate = $total-$printRate;
                            $finalTotal = ($rate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$rate,'printsideRate'=>$printRate]);
                        }
                    break;
                }
            break;
            case '96.68':
                switch ($qty) {
                    case '250':
                        if($printside > 0)
                        {
                            $printRate = (99.5*20)/100;
                            $rate = $total+$printRate;
                            $finalTotal = ($rate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$rate,'printsideRate'=>$printRate]);
                        } else {
                            $printRate = (99.5*20)/100;
                            $rate = $total-$printRate;
                            $finalTotal = ($rate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$rate,'printsideRate'=>$printRate]);
                        }
                    break;
                    case '500':
                        if($printside > 0)
                        {
                            $printRate = (109.8*20)/100;
                            $rate = $total+$printRate;
                            $finalTotal = ($rate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$rate,'printsideRate'=>$printRate]);
                        } else {
                            $printRate = (109.8*20)/100;
                            $rate = $total-$printRate;
                            $finalTotal = ($rate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$rate,'printsideRate'=>$printRate]);
                        }
                    break;
                    case '1000':
                        if($printside > 0)
                        {
                            $printRate = (111.1*20)/100;
                            $rate = $total+$printRate;
                            $finalTotal = ($rate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$rate,'printsideRate'=>$printRate]);
                        } else {
                            $printRate = (111.1*20)/100;
                            $rate = $total-$printRate;
                            $finalTotal = ($rate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$rate,'printsideRate'=>$printRate]);
                        }
                    break;
                    case '2000':
                        if($printside > 0)
                        {
                            $printRate = (158.2*20)/100;
                            $rate = $total+$printRate;
                            $finalTotal = ($rate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$rate,'printsideRate'=>$printRate]);
                        } else {
                            $printRate = (158.2*20)/100;
                            $rate = $total-$printRate;
                            $finalTotal = ($rate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$rate,'printsideRate'=>$printRate]);
                        }
                    break;
                    case '5000':
                        if($printside > 0)
                        {
                            $printRate = (249.5*20)/100;
                            $rate = $total+$printRate;
                            $finalTotal = ($rate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$rate,'printsideRate'=>$printRate]);
                        } else {
                            $printRate = (249.5*20)/100;
                            $rate = $total-$printRate;
                            $finalTotal = ($rate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$rate,'printsideRate'=>$printRate]);
                        }
                    break;
                    case '10000':
                        if($printside > 0)
                        {
                            $printRate = (438.5*20)/100;
                            $rate = $total+$printRate;
                            $finalTotal = ($rate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$rate,'printsideRate'=>$printRate]);
                        } else {
                            $printRate = (438.5*20)/100;
                            $rate = $total-$printRate;
                            $finalTotal = ($rate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$rate,'printsideRate'=>$printRate]);
                        }
                    break;
                    case '20000':
                        if($printside > 0)
                        {
                            $printRate = (838.2*20)/100;
                            $rate = $total+$printRate;
                            $finalTotal = ($rate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$rate,'printsideRate'=>$printRate]);
                        } else {
                            $printRate = (838.2*20)/100;
                            $rate = $total-$printRate;
                            $finalTotal = ($rate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$rate,'printsideRate'=>$printRate]);
                        }
                    break;
                    case '30000':
                        if($printside > 0)
                        {
                            $printRate = (1130.2*20)/100;
                            $rate = $total+$printRate;
                            $finalTotal = ($rate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$rate,'printsideRate'=>$printRate]);
                        } else {
                            $printRate = (1130.2*20)/100;
                            $rate = $total-$printRate;
                            $finalTotal = ($rate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$rate,'printsideRate'=>$printRate]);
                        }
                    break;
                    case '40000':
                        if($printside > 0)
                        {
                            $printRate = (1399.2*20)/100;
                            $rate = $total+$printRate;
                            $finalTotal = ($rate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$rate,'printsideRate'=>$printRate]);
                        } else {
                            $printRate = (1399.2*20)/100;
                            $rate = $total-$printRate;
                            $finalTotal = ($rate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$rate,'printsideRate'=>$printRate]);
                        }
                    break;
                    case '50000':
                        if($printside > 0)
                        {
                            $printRate = (1859.2*20)/100;
                            $rate = $total+$printRate;
                            $finalTotal = ($rate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$rate,'printsideRate'=>$printRate]);
                        } else {
                            $printRate = (1859.2*20)/100;
                            $rate = $total-$printRate;
                            $finalTotal = ($rate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$rate,'printsideRate'=>$printRate]);
                        }
                    break;
                }
            break;
            
        }
        
    }
    
}
