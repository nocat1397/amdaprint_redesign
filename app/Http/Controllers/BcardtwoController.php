<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BcardtwoController extends Controller
{
    // Foils business card
    public function foilscardSize(Request $request)
    {
        $size = $request->size;
        $paper = $request->paper;
        switch ($size) {
            case '7':
                switch ($paper) {
                    case '1':
                        $cardRate = 48.5;
                        $finalTotal = ($cardRate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                    break;
                    
                    default:
                        $cardRate = 48.5;
                        $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                    break;
                }
            break;
            case '7.17':
                switch ($paper) {
                    case '1':
                        $cardRate = 48.5;
                        $finalTotal = ($cardRate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                    break;
                    
                    default:
                        $cardRate = 48.5;
                        $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                    break;
                }
            break;
            case '6.13':
                switch ($paper) {
                    case '1':
                        $cardRate = 48.5;
                        $finalTotal = ($cardRate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                    break;
                    
                    default:
                        $cardRate = 48.5;
                        $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                    break;
                }
            break;
            case '4':
                switch ($paper) {
                    case '1':
                        $cardRate = 48.5;
                        $finalTotal = ($cardRate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                    break;
                    
                    default:
                        $cardRate = 48.5;
                        $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                    break;
                }
            break;
            case '5':
                switch ($paper) {
                    case '1':
                        $cardRate = 48.5;
                        $finalTotal = ($cardRate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                    break;
                    
                    default:
                        $cardRate = 48.5;
                        $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                    break;
                }
            break;
            case '6':
                switch ($paper) {
                    case '1':
                        $cardRate = 48.5;
                        $finalTotal = ($cardRate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                    break;
                    
                    default:
                        $cardRate = 48.5;
                        $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                    break;
                }
            break;
        }
        
    }
    public function foilsmainQty(Request $request)
    {
        $size = $request->size;
        $paper = $request->paper;
        $qty = $request->qty;
        switch ($size) {
            case '7':
                switch ($paper) {
                    case '1':
                    switch ($qty) {
                        case '100':
                            $cardRate = 48.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '250':
                            $cardRate = 62.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '500':
                            $cardRate = 89.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '1000':
                            $cardRate = 110.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                    }
                    break;
                }
            break;
            case '7.17':
                switch ($paper) {
                    case '1':
                    switch ($qty) {
                        case '100':
                            $cardRate = 48.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '250':
                            $cardRate = 62.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '500':
                            $cardRate = 89.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '1000':
                            $cardRate = 110.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                    }
                    break;
                }
            break;
            case '6.13':
                switch ($paper) {
                    case '1':
                    switch ($qty) {
                        case '100':
                            $cardRate = 48.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '250':
                            $cardRate = 62.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '500':
                            $cardRate = 89.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '1000':
                            $cardRate = 110.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                    }
                    break;
                }
            break;
            case '4':
                switch ($paper) {
                    case '1':
                    switch ($qty) {
                        case '100':
                            $cardRate = 48.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '250':
                            $cardRate = 62.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '500':
                            $cardRate = 89.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '1000':
                            $cardRate = 110.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                    }
                    break;
                }
            break;
            case '5':
                switch ($paper) {
                    case '1':
                    switch ($qty) {
                        case '100':
                            $cardRate = 48.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '250':
                            $cardRate = 62.5;
                            $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '500':
                            $cardRate = 89.5;
                            $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '1000':
                            $cardRate = 110.5;
                            $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                    }
                    break;
                }
            break;
            case '6':
                switch ($paper) {
                    case '1':
                    switch ($qty) {
                        case '100':
                            $cardRate = 48.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '250':
                            $cardRate = 62.5;
                            $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '500':
                            $cardRate = 89.5;
                            $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '1000':
                            $cardRate = 110.5;
                            $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                    }
                    break;
                }
            break;
        }
    }
    public function foilspaperType(Request $request)
    {
        $size = $request->size;
        $paper = $request->paper;
        $qty = $request->qty;
        switch ($size) {
            case '7':
                switch ($paper) {
                    case '1':
                    switch ($qty) {
                        case '100':
                            $cardRate = 48.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '250':
                            $cardRate = 62.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '500':
                            $cardRate = 89.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '1000':
                            $cardRate = 110.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                    }
                    break;
                }
            break;
            case '7.17':
                switch ($paper) {
                    case '1':
                    switch ($qty) {
                        case '100':
                            $cardRate = 48.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '250':
                            $cardRate = 62.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '500':
                            $cardRate = 89.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '1000':
                            $cardRate = 110.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                    }
                    break;
                }
            break;
            case '6.13':
                switch ($paper) {
                    case '1':
                    switch ($qty) {
                        case '100':
                            $cardRate = 48.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '250':
                            $cardRate = 62.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '500':
                            $cardRate = 89.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '1000':
                            $cardRate = 110.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                    }
                    break;
                }
            break;
            case '4':
                switch ($paper) {
                    case '1':
                    switch ($qty) {
                        case '100':
                            $cardRate = 48.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '250':
                            $cardRate = 62.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '500':
                            $cardRate = 89.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '1000':
                            $cardRate = 110.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                    }
                    break;
                }
            break;
            case '5':
                switch ($paper) {
                    case '1':
                    switch ($qty) {
                        case '100':
                            $cardRate = 48.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '250':
                            $cardRate = 62.5;
                            $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '500':
                            $cardRate = 89.5;
                            $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '1000':
                            $cardRate = 110.5;
                            $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                    }
                    break;
                }
            break;
            case '6':
                switch ($paper) {
                    case '1':
                    switch ($qty) {
                        case '100':
                            $cardRate = 48.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '250':
                            $cardRate = 62.5;
                            $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '500':
                            $cardRate = 89.5;
                            $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '1000':
                            $cardRate = 110.5;
                            $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                    }
                    break;
                }
            break;
        }
    }
    public function foilsprintSide(Request $request)
    {
        $size = $request->size;
        $paper = $request->paper;
        $qty = $request->qty;
        $printSide = $request->printside;
        $total = $request->total;
        // return $total;
        // exit;
        switch ($size) {
            case '7':
                switch ($paper) {
                    case '1':
                    switch ($qty) {
                        case '100':
                            if($printSide > 0){
                                $printRate = (48.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (48.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '250':
                            if($printSide > 0){
                                $printRate = (62.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (62.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '500':
                            if($printSide > 0){
                                $printRate = (89.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (89.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '1000':
                            if($printSide > 0){
                                $printRate = (110.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (110.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                    }
                    break;
                }
            break;
            case '7.17':
                switch ($paper) {
                    case '1':
                    switch ($qty) {
                        case '100':
                            if($printSide > 0){
                                $printRate = (48.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (48.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '250':
                            if($printSide > 0){
                                $printRate = (62.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (62.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '500':
                            if($printSide > 0){
                                $printRate = (89.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (89.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '1000':
                            if($printSide > 0){
                                $printRate = (110.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (110.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                    }
                    break;
                }
            break;
            case '6.13':
                switch ($paper) {
                    case '1':
                    switch ($qty) {
                        case '100':
                            if($printSide > 0){
                                $printRate = (48.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (48.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '250':
                            if($printSide > 0){
                                $printRate = (62.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (62.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '500':
                            if($printSide > 0){
                                $printRate = (89.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (89.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '1000':
                            if($printSide > 0){
                                $printRate = (110.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (110.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                    }
                    break;
                }
            break;
            case '5':
                switch ($paper) {
                    case '1':
                    switch ($qty) {
                        case '100':
                            if($printSide > 0){
                                $printRate = (48.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (48.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '250':
                            if($printSide > 0){
                                $printRate = (62.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (62.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '500':
                            if($printSide > 0){
                                $printRate = (89.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (89.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '1000':
                            if($printSide > 0){
                                $printRate = (110.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (110.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                    }
                    break;
                }
            break;
            case '6':
                switch ($paper) {
                    case '1':
                    switch ($qty) {
                        case '100':
                            if($printSide > 0){
                                $printRate = (48.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (48.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '250':
                            if($printSide > 0){
                                $printRate = (62.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (62.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '500':
                            if($printSide > 0){
                                $printRate = (89.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (89.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '1000':
                            if($printSide > 0){
                                $printRate = (110.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (110.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                    }
                    break;
                }
            break;
        }
    }
    public function foilsrounded(Request $request)
    {
        $size = $request->size;
        $paper = $request->paper;
        $qty = $request->qty;
        $rounded = $request->rounded;
        $total = $request->total;
        // return $total;
        // exit;
        switch ($size) {
            case '7':
                switch ($paper) {
                    case '1':
                    switch ($qty) {
                        case '100':
                            if($rounded > 0){
                                $roundedRate = (48.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (48.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '250':
                            if($rounded > 0){
                                $roundedRate = (62.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (62.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '500':
                            if($rounded > 0){
                                $roundedRate = (89.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (89.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '1000':
                            if($rounded > 0){
                                $roundedRate = (110.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (110.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                    }
                    break;
                }
            break;
            case '7.17':
                switch ($paper) {
                    case '1':
                    switch ($qty) {
                        case '100':
                            if($rounded > 0){
                                $roundedRate = (48.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (48.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '250':
                            if($rounded > 0){
                                $roundedRate = (62.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (62.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '500':
                            if($rounded > 0){
                                $roundedRate = (89.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (89.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '1000':
                            if($rounded > 0){
                                $roundedRate = (110.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (110.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                    }
                    break;
                }
            break;
            case '6.13':
                switch ($paper) {
                    case '1':
                    switch ($qty) {
                        case '100':
                            if($rounded > 0){
                                $roundedRate = (48.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (48.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '250':
                            if($rounded > 0){
                                $roundedRate = (62.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (62.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '500':
                            if($rounded > 0){
                                $roundedRate = (89.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (89.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '1000':
                            if($rounded > 0){
                                $roundedRate = (110.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (110.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                    }
                    break;
                }
            break;
            case '4':
                switch ($paper) {
                    case '1':
                    switch ($qty) {
                        case '100':
                            if($rounded > 0){
                                $roundedRate = (48.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (48.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '250':
                            if($rounded > 0){
                                $roundedRate = (62.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (62.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '500':
                            if($rounded > 0){
                                $roundedRate = (89.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (89.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '1000':
                            if($rounded > 0){
                                $roundedRate = (110.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (110.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                    }
                    break;
                }
            break;
            case '5':
                switch ($paper) {
                    case '1':
                    switch ($qty) {
                        case '100':
                            if($rounded > 0){
                                $roundedRate = (48.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (48.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '250':
                            if($rounded > 0){
                                $roundedRate = (62.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (62.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '500':
                            if($rounded > 0){
                                $roundedRate = (89.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (89.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '1000':
                            if($rounded > 0){
                                $roundedRate = (110.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (110.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                    }
                    break;
                }
            break;
            case '6':
                switch ($paper) {
                    case '1':
                    switch ($qty) {
                        case '100':
                            if($rounded > 0){
                                $roundedRate = (48.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (48.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '250':
                            if($rounded > 0){
                                $roundedRate = (62.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (62.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '500':
                            if($rounded > 0){
                                $roundedRate = (89.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (89.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '1000':
                            if($rounded > 0){
                                $roundedRate = (110.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (110.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                    }
                    break;
                }
            break;
        }
    }
    public function foilsSide(Request $request)
    {
        $size = $request->size;
        $paper = $request->paper;
        $qty = $request->qty;
        $foils = $request->foils;
        $total = $request->total;
        // return $total;
        // exit;
        switch ($size) {
            case '7':
                switch ($paper) {
                    case '1':
                    switch ($qty) {
                        case '100':
                            if($foils > 0){
                                $foilsRate = (48.5*30)/100;
                                $cardRate = $total+$foilsRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['foilsRate'=>$foilsRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $foilsRate = (48.5*30)/100;
                                $cardRate = $total-$foilsRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['foilsRate'=>$foilsRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '250':
                            if($foils > 0){
                                $foilsRate = (62.5*30)/100;
                                $cardRate = $total+$foilsRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['foilsRate'=>$foilsRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $foilsRate = (62.5*30)/100;
                                $cardRate = $total-$foilsRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['foilsRate'=>$foilsRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '500':
                            if($foils > 0){
                                $foilsRate = (89.5*30)/100;
                                $cardRate = $total+$foilsRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['foilsRate'=>$foilsRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $foilsRate = (89.5*30)/100;
                                $cardRate = $total-$foilsRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['foilsRate'=>$foilsRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '1000':
                            if($foils > 0){
                                $foilsRate = (110.5*30)/100;
                                $cardRate = $total+$foilsRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['foilsRate'=>$foilsRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $foilsRate = (110.5*30)/100;
                                $cardRate = $total-$foilsRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['foilsRate'=>$foilsRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                    }
                    break;
                }
            break;
            case '7.17':
                switch ($paper) {
                    case '1':
                    switch ($qty) {
                        case '100':
                            if($foils > 0){
                                $foilsRate = (48.5*30)/100;
                                $cardRate = $total+$foilsRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['foilsRate'=>$foilsRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $foilsRate = (48.5*30)/100;
                                $cardRate = $total-$foilsRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['foilsRate'=>$foilsRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '250':
                            if($foils > 0){
                                $foilsRate = (62.5*30)/100;
                                $cardRate = $total+$foilsRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['foilsRate'=>$foilsRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $foilsRate = (62.5*30)/100;
                                $cardRate = $total-$foilsRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['foilsRate'=>$foilsRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '500':
                            if($foils > 0){
                                $foilsRate = (89.5*30)/100;
                                $cardRate = $total+$foilsRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['foilsRate'=>$foilsRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $foilsRate = (89.5*30)/100;
                                $cardRate = $total-$foilsRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['foilsRate'=>$foilsRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '1000':
                            if($foils > 0){
                                $foilsRate = (110.5*30)/100;
                                $cardRate = $total+$foilsRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['foilsRate'=>$foilsRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $foilsRate = (110.5*30)/100;
                                $cardRate = $total-$foilsRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['foilsRate'=>$foilsRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                    }
                    break;
                }
            break;
            case '6.13':
                switch ($paper) {
                    case '1':
                    switch ($qty) {
                        case '100':
                            if($foils > 0){
                                $foilsRate = (48.5*30)/100;
                                $cardRate = $total+$foilsRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['foilsRate'=>$foilsRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $foilsRate = (48.5*30)/100;
                                $cardRate = $total-$foilsRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['foilsRate'=>$foilsRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '250':
                            if($foils > 0){
                                $foilsRate = (62.5*30)/100;
                                $cardRate = $total+$foilsRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['foilsRate'=>$foilsRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $foilsRate = (62.5*30)/100;
                                $cardRate = $total-$foilsRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['foilsRate'=>$foilsRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '500':
                            if($foils > 0){
                                $foilsRate = (89.5*30)/100;
                                $cardRate = $total+$foilsRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['foilsRate'=>$foilsRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $foilsRate = (89.5*30)/100;
                                $cardRate = $total-$foilsRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['foilsRate'=>$foilsRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '1000':
                            if($foils > 0){
                                $foilsRate = (110.5*30)/100;
                                $cardRate = $total+$foilsRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['foilsRate'=>$foilsRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $foilsRate = (110.5*30)/100;
                                $cardRate = $total-$foilsRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['foilsRate'=>$foilsRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                    }
                    break;
                }
            break;
            case '4':
                switch ($paper) {
                    case '1':
                    switch ($qty) {
                        case '100':
                            if($foils > 0){
                                $foilsRate = (48.5*30)/100;
                                $cardRate = $total+$foilsRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['foilsRate'=>$foilsRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $foilsRate = (48.5*30)/100;
                                $cardRate = $total-$foilsRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['foilsRate'=>$foilsRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '250':
                            if($foils > 0){
                                $foilsRate = (62.5*30)/100;
                                $cardRate = $total+$foilsRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['foilsRate'=>$foilsRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $foilsRate = (62.5*30)/100;
                                $cardRate = $total-$foilsRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['foilsRate'=>$foilsRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '500':
                            if($foils > 0){
                                $foilsRate = (89.5*30)/100;
                                $cardRate = $total+$foilsRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['foilsRate'=>$foilsRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $foilsRate = (89.5*30)/100;
                                $cardRate = $total-$foilsRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['foilsRate'=>$foilsRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '1000':
                            if($foils > 0){
                                $foilsRate = (110.5*30)/100;
                                $cardRate = $total+$foilsRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['foilsRate'=>$foilsRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $foilsRate = (110.5*30)/100;
                                $cardRate = $total-$foilsRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['foilsRate'=>$foilsRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                    }
                    break;
                }
            break;
            case '5':
                switch ($paper) {
                    case '1':
                    switch ($qty) {
                        case '100':
                            if($foils > 0){
                                $foilsRate = (48.5*30)/100;
                                $cardRate = $total+$foilsRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['foilsRate'=>$foilsRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $foilsRate = (48.5*30)/100;
                                $cardRate = $total-$foilsRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['foilsRate'=>$foilsRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '250':
                            if($foils > 0){
                                $foilsRate = (62.5*30)/100;
                                $cardRate = $total+$foilsRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['foilsRate'=>$foilsRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $foilsRate = (62.5*30)/100;
                                $cardRate = $total-$foilsRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['foilsRate'=>$foilsRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '500':
                            if($foils > 0){
                                $foilsRate = (89.5*30)/100;
                                $cardRate = $total+$foilsRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['foilsRate'=>$foilsRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $foilsRate = (89.5*30)/100;
                                $cardRate = $total-$foilsRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['foilsRate'=>$foilsRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '1000':
                            if($foils > 0){
                                $foilsRate = (110.5*30)/100;
                                $cardRate = $total+$foilsRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['foilsRate'=>$foilsRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $foilsRate = (110.5*30)/100;
                                $cardRate = $total-$foilsRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['foilsRate'=>$foilsRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                    }
                    break;
                }
            break;
            case '6':
                switch ($paper) {
                    case '1':
                    switch ($qty) {
                        case '100':
                            if($foils > 0){
                                $foilsRate = (48.5*30)/100;
                                $cardRate = $total+$foilsRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['foilsRate'=>$foilsRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $foilsRate = (48.5*30)/100;
                                $cardRate = $total-$foilsRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['foilsRate'=>$foilsRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '250':
                            if($foils > 0){
                                $foilsRate = (62.5*30)/100;
                                $cardRate = $total+$foilsRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['foilsRate'=>$foilsRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $foilsRate = (62.5*30)/100;
                                $cardRate = $total-$foilsRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['foilsRate'=>$foilsRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '500':
                            if($foils > 0){
                                $foilsRate = (89.5*30)/100;
                                $cardRate = $total+$foilsRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['foilsRate'=>$foilsRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $foilsRate = (89.5*30)/100;
                                $cardRate = $total-$foilsRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['foilsRate'=>$foilsRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '1000':
                            if($foils > 0){
                                $foilsRate = (110.5*30)/100;
                                $cardRate = $total+$foilsRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['foilsRate'=>$foilsRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $foilsRate = (110.5*30)/100;
                                $cardRate = $total-$foilsRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['foilsRate'=>$foilsRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                    }
                    break;
                }
            break;
        }
    }
}
