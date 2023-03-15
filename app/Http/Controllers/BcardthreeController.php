<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BcardthreeController extends Controller
{
        // linen business card
        public function linencardSize(Request $request)
        {
            $size = $request->size;
            $paper = $request->paper;
            switch ($size) {
                case '7':
                    switch ($paper) {
                        case '1':
                            $cardRate = 25.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        
                        default:
                            $cardRate = 25.5;
                            $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                    }
                break;
                case '7.17':
                    switch ($paper) {
                        case '1':
                            $cardRate = 25.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        
                        default:
                            $cardRate = 25.5;
                            $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                    }
                break;
                case '6.13':
                    switch ($paper) {
                        case '1':
                            $cardRate = 25.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        
                        default:
                            $cardRate = 25.5;
                            $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                    }
                break;
                case '4':
                    switch ($paper) {
                        case '1':
                            $cardRate = 25.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        
                        default:
                            $cardRate = 25.5;
                            $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                    }
                break;
                case '5':
                    switch ($paper) {
                        case '1':
                            $cardRate = 16.2;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        
                        default:
                            $cardRate = 16.2;
                            $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                    }
                break;
                case '6':
                    switch ($paper) {
                        case '1':
                            $cardRate = 16.9;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        
                        default:
                            $cardRate = 16.9;
                            $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                    }
                break;
            }
            
        }
        public function linenmainQty(Request $request)
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
                                $cardRate = 25.5;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '250':
                                $cardRate = 32.4;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '500':
                                $cardRate = 48.2;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '1000':
                                $cardRate = 58.5;
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
                                $cardRate = 25.5;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '250':
                                $cardRate = 32.4;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '500':
                                $cardRate = 48.2;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '1000':
                                $cardRate = 58.5;
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
                                $cardRate = 25.5;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '250':
                                $cardRate = 32.4;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '500':
                                $cardRate = 48.2;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '1000':
                                $cardRate = 58.5;
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
                                $cardRate = 25.5;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '250':
                                $cardRate = 32.4;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '500':
                                $cardRate = 48.2;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '1000':
                                $cardRate = 58.5;
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
                                $cardRate = 16.2;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '250':
                                $cardRate = 18.5;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '500':
                                $cardRate = 26.5;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '1000':
                                $cardRate = 28.9;
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
                                $cardRate = 16.9;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '250':
                                $cardRate = 18.9;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '500':
                                $cardRate = 28.9;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '1000':
                                $cardRate = 32.5;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                        }
                        break;
                    }
                break;
            }
        }
        public function linenpaperType(Request $request)
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
                                $cardRate = 25.5;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '250':
                                $cardRate = 32.4;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '500':
                                $cardRate = 48.2;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '1000':
                                $cardRate = 58.5;
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
                                $cardRate = 25.5;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '250':
                                $cardRate = 32.4;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '500':
                                $cardRate = 48.2;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '1000':
                                $cardRate = 58.5;
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
                                $cardRate = 25.5;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '250':
                                $cardRate = 32.4;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '500':
                                $cardRate = 48.2;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '1000':
                                $cardRate = 58.5;
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
                                $cardRate = 25.5;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '250':
                                $cardRate = 32.4;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '500':
                                $cardRate = 48.2;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '1000':
                                $cardRate = 58.5;
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
                                $cardRate = 16.2;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '250':
                                $cardRate = 18.5;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '500':
                                $cardRate = 26.5;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '1000':
                                $cardRate = 28.9;
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
                                $cardRate = 16.9;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '250':
                                $cardRate = 18.9;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '500':
                                $cardRate = 28.9;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '1000':
                                $cardRate = 32.5;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                        }
                        break;
                    }
                break;
            }
        }
        public function linenprintSide(Request $request)
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
                                    $printRate = (25.5*40)/100;
                                    $cardRate = $total+$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $printRate = (25.5*40)/100;
                                    $cardRate = $total-$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '250':
                                if($printSide > 0){
                                    $printRate = (32.4*40)/100;
                                    $cardRate = $total+$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $printRate = (32.4*40)/100;
                                    $cardRate = $total-$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '500':
                                if($printSide > 0){
                                    $printRate = (48.2*40)/100;
                                    $cardRate = $total+$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $printRate = (48.2*40)/100;
                                    $cardRate = $total-$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '1000':
                                if($printSide > 0){
                                    $printRate = (58.5*40)/100;
                                    $cardRate = $total+$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $printRate = (58.5*40)/100;
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
                                    $printRate = (25.5*40)/100;
                                    $cardRate = $total+$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $printRate = (25.5*40)/100;
                                    $cardRate = $total-$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '250':
                                if($printSide > 0){
                                    $printRate = (32.4*40)/100;
                                    $cardRate = $total+$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $printRate = (32.4*40)/100;
                                    $cardRate = $total-$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '500':
                                if($printSide > 0){
                                    $printRate = (48.2*40)/100;
                                    $cardRate = $total+$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $printRate = (48.2*40)/100;
                                    $cardRate = $total-$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '1000':
                                if($printSide > 0){
                                    $printRate = (58.5*40)/100;
                                    $cardRate = $total+$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $printRate = (58.5*40)/100;
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
                                    $printRate = (25.5*40)/100;
                                    $cardRate = $total+$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $printRate = (25.5*40)/100;
                                    $cardRate = $total-$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '250':
                                if($printSide > 0){
                                    $printRate = (32.4*40)/100;
                                    $cardRate = $total+$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $printRate = (32.4*40)/100;
                                    $cardRate = $total-$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '500':
                                if($printSide > 0){
                                    $printRate = (48.2*40)/100;
                                    $cardRate = $total+$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $printRate = (48.2*40)/100;
                                    $cardRate = $total-$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '1000':
                                if($printSide > 0){
                                    $printRate = (58.5*40)/100;
                                    $cardRate = $total+$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $printRate = (58.5*40)/100;
                                    $cardRate = $total-$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
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
                                if($printSide > 0){
                                    $printRate = (25.5*40)/100;
                                    $cardRate = $total+$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $printRate = (25.5*40)/100;
                                    $cardRate = $total-$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '250':
                                if($printSide > 0){
                                    $printRate = (32.4*40)/100;
                                    $cardRate = $total+$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $printRate = (32.4*40)/100;
                                    $cardRate = $total-$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '500':
                                if($printSide > 0){
                                    $printRate = (48.2*40)/100;
                                    $cardRate = $total+$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $printRate = (48.2*40)/100;
                                    $cardRate = $total-$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '1000':
                                if($printSide > 0){
                                    $printRate = (58.5*40)/100;
                                    $cardRate = $total+$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $printRate = (58.5*40)/100;
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
                                    $printRate = (16.2*40)/100;
                                    $cardRate = $total+$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $printRate = (16.2*40)/100;
                                    $cardRate = $total-$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '250':
                                if($printSide > 0){
                                    $printRate = (18.5*40)/100;
                                    $cardRate = $total+$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $printRate = (18.5*40)/100;
                                    $cardRate = $total-$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '500':
                                if($printSide > 0){
                                    $printRate = (26.5*40)/100;
                                    $cardRate = $total+$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $printRate = (26.5*40)/100;
                                    $cardRate = $total-$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '1000':
                                if($printSide > 0){
                                    $printRate = (28.9*40)/100;
                                    $cardRate = $total+$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $printRate = (28.9*40)/100;
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
                                    $printRate = (16.9*40)/100;
                                    $cardRate = $total+$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $printRate = (16.9*40)/100;
                                    $cardRate = $total-$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '250':
                                if($printSide > 0){
                                    $printRate = (18.9*40)/100;
                                    $cardRate = $total+$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $printRate = (18.9*40)/100;
                                    $cardRate = $total-$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '500':
                                if($printSide > 0){
                                    $printRate = (28.9*40)/100;
                                    $cardRate = $total+$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $printRate = (28.9*40)/100;
                                    $cardRate = $total-$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '1000':
                                if($printSide > 0){
                                    $printRate = (32.5*40)/100;
                                    $cardRate = $total+$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $printRate = (32.5*40)/100;
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
        public function linenrounded(Request $request)
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
                                    $roundedRate = (25.5*20)/100;
                                    $cardRate = $total+$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $roundedRate = (25.5*20)/100;
                                    $cardRate = $total-$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '250':
                                if($rounded > 0){
                                    $roundedRate = (32.4*20)/100;
                                    $cardRate = $total+$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $roundedRate = (32.4*20)/100;
                                    $cardRate = $total-$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '500':
                                if($rounded > 0){
                                    $roundedRate = (48.2*20)/100;
                                    $cardRate = $total+$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $roundedRate = (48.2*20)/100;
                                    $cardRate = $total-$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '1000':
                                if($rounded > 0){
                                    $roundedRate = (58.5*20)/100;
                                    $cardRate = $total+$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $roundedRate = (58.5*20)/100;
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
                                    $roundedRate = (25.5*20)/100;
                                    $cardRate = $total+$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $roundedRate = (25.5*20)/100;
                                    $cardRate = $total-$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '250':
                                if($rounded > 0){
                                    $roundedRate = (32.4*20)/100;
                                    $cardRate = $total+$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $roundedRate = (32.4*20)/100;
                                    $cardRate = $total-$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '500':
                                if($rounded > 0){
                                    $roundedRate = (48.2*20)/100;
                                    $cardRate = $total+$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $roundedRate = (48.2*20)/100;
                                    $cardRate = $total-$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '1000':
                                if($rounded > 0){
                                    $roundedRate = (58.5*20)/100;
                                    $cardRate = $total+$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $roundedRate = (58.5*20)/100;
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
                                    $roundedRate = (25.5*20)/100;
                                    $cardRate = $total+$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $roundedRate = (25.5*20)/100;
                                    $cardRate = $total-$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '250':
                                if($rounded > 0){
                                    $roundedRate = (32.4*20)/100;
                                    $cardRate = $total+$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $roundedRate = (32.4*20)/100;
                                    $cardRate = $total-$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '500':
                                if($rounded > 0){
                                    $roundedRate = (48.2*20)/100;
                                    $cardRate = $total+$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $roundedRate = (48.2*20)/100;
                                    $cardRate = $total-$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '1000':
                                if($rounded > 0){
                                    $roundedRate = (58.5*20)/100;
                                    $cardRate = $total+$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $roundedRate = (58.5*20)/100;
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
                                    $roundedRate = (25.5*20)/100;
                                    $cardRate = $total+$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $roundedRate = (25.5*20)/100;
                                    $cardRate = $total-$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '250':
                                if($rounded > 0){
                                    $roundedRate = (32.4*20)/100;
                                    $cardRate = $total+$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $roundedRate = (32.4*20)/100;
                                    $cardRate = $total-$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '500':
                                if($rounded > 0){
                                    $roundedRate = (48.2*20)/100;
                                    $cardRate = $total+$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $roundedRate = (48.2*20)/100;
                                    $cardRate = $total-$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '1000':
                                if($rounded > 0){
                                    $roundedRate = (58.5*20)/100;
                                    $cardRate = $total+$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $roundedRate = (58.5*20)/100;
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
                                    $roundedRate = (16.2*20)/100;
                                    $cardRate = $total+$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $roundedRate = (16.2*20)/100;
                                    $cardRate = $total-$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '250':
                                if($rounded > 0){
                                    $roundedRate = (18.5*20)/100;
                                    $cardRate = $total+$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $roundedRate = (18.5*20)/100;
                                    $cardRate = $total-$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '500':
                                if($rounded > 0){
                                    $roundedRate = (26.5*20)/100;
                                    $cardRate = $total+$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $roundedRate = (26.5*20)/100;
                                    $cardRate = $total-$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '1000':
                                if($rounded > 0){
                                    $roundedRate = (28.9*20)/100;
                                    $cardRate = $total+$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $roundedRate = (28.9*20)/100;
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
                                    $roundedRate = (16.9*20)/100;
                                    $cardRate = $total+$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $roundedRate = (16.9*20)/100;
                                    $cardRate = $total-$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '250':
                                if($rounded > 0){
                                    $roundedRate = (18.9*20)/100;
                                    $cardRate = $total+$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $roundedRate = (18.9*20)/100;
                                    $cardRate = $total-$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '500':
                                if($rounded > 0){
                                    $roundedRate = (28.9*20)/100;
                                    $cardRate = $total+$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $roundedRate = (28.9*20)/100;
                                    $cardRate = $total-$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '1000':
                                if($rounded > 0){
                                    $roundedRate = (32.5*20)/100;
                                    $cardRate = $total+$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $roundedRate = (32.5*20)/100;
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

        // cotton business card
        public function cottoncardSize(Request $request)
        {
            $size = $request->size;
            $paper = $request->paper;
            switch ($size) {
                case '7':
                    switch ($paper) {
                        case '1':
                            $cardRate = 25.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        
                        default:
                            $cardRate = 25.5;
                            $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                    }
                break;
                case '7.17':
                    switch ($paper) {
                        case '1':
                            $cardRate = 25.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        
                        default:
                            $cardRate = 25.5;
                            $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                    }
                break;
                case '6.13':
                    switch ($paper) {
                        case '1':
                            $cardRate = 25.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        
                        default:
                            $cardRate = 25.5;
                            $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                    }
                break;
                case '4':
                    switch ($paper) {
                        case '1':
                            $cardRate = 25.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        
                        default:
                            $cardRate = 25.5;
                            $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                    }
                break;
                case '5':
                    switch ($paper) {
                        case '1':
                            $cardRate = 16.2;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        
                        default:
                            $cardRate = 16.2;
                            $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                    }
                break;
                case '6':
                    switch ($paper) {
                        case '1':
                            $cardRate = 16.9;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        
                        default:
                            $cardRate = 16.9;
                            $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                    }
                break;
            }
            
        }
        public function cottonmainQty(Request $request)
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
                                $cardRate = 25.5;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '250':
                                $cardRate = 32.4;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '500':
                                $cardRate = 48.2;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '1000':
                                $cardRate = 58.5;
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
                                $cardRate = 25.5;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '250':
                                $cardRate = 32.4;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '500':
                                $cardRate = 48.2;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '1000':
                                $cardRate = 58.5;
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
                                $cardRate = 25.5;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '250':
                                $cardRate = 32.4;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '500':
                                $cardRate = 48.2;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '1000':
                                $cardRate = 58.5;
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
                                $cardRate = 25.5;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '250':
                                $cardRate = 32.4;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '500':
                                $cardRate = 48.2;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '1000':
                                $cardRate = 58.5;
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
                                $cardRate = 16.2;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '250':
                                $cardRate = 18.5;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '500':
                                $cardRate = 26.5;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '1000':
                                $cardRate = 28.9;
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
                                $cardRate = 16.9;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '250':
                                $cardRate = 18.9;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '500':
                                $cardRate = 28.9;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '1000':
                                $cardRate = 32.5;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                        }
                        break;
                    }
                break;
            }
        }
        public function cottonpaperType(Request $request)
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
                                $cardRate = 25.5;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '250':
                                $cardRate = 32.4;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '500':
                                $cardRate = 48.2;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '1000':
                                $cardRate = 58.5;
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
                                $cardRate = 25.5;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '250':
                                $cardRate = 32.4;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '500':
                                $cardRate = 48.2;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '1000':
                                $cardRate = 58.5;
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
                                $cardRate = 25.5;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '250':
                                $cardRate = 32.4;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '500':
                                $cardRate = 48.2;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '1000':
                                $cardRate = 58.5;
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
                                $cardRate = 25.5;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '250':
                                $cardRate = 32.4;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '500':
                                $cardRate = 48.2;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '1000':
                                $cardRate = 58.5;
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
                                $cardRate = 16.2;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '250':
                                $cardRate = 18.5;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '500':
                                $cardRate = 26.5;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '1000':
                                $cardRate = 28.9;
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
                                $cardRate = 16.9;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '250':
                                $cardRate = 18.9;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '500':
                                $cardRate = 28.9;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '1000':
                                $cardRate = 32.5;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                        }
                        break;
                    }
                break;
            }
        }
        public function cottonprintSide(Request $request)
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
                                    $printRate = (25.5*40)/100;
                                    $cardRate = $total+$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $printRate = (25.5*40)/100;
                                    $cardRate = $total-$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '250':
                                if($printSide > 0){
                                    $printRate = (32.4*40)/100;
                                    $cardRate = $total+$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $printRate = (32.4*40)/100;
                                    $cardRate = $total-$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '500':
                                if($printSide > 0){
                                    $printRate = (48.2*40)/100;
                                    $cardRate = $total+$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $printRate = (48.2*40)/100;
                                    $cardRate = $total-$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '1000':
                                if($printSide > 0){
                                    $printRate = (58.5*40)/100;
                                    $cardRate = $total+$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $printRate = (58.5*40)/100;
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
                                    $printRate = (25.5*40)/100;
                                    $cardRate = $total+$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $printRate = (25.5*40)/100;
                                    $cardRate = $total-$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '250':
                                if($printSide > 0){
                                    $printRate = (32.4*40)/100;
                                    $cardRate = $total+$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $printRate = (32.4*40)/100;
                                    $cardRate = $total-$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '500':
                                if($printSide > 0){
                                    $printRate = (48.2*40)/100;
                                    $cardRate = $total+$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $printRate = (48.2*40)/100;
                                    $cardRate = $total-$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '1000':
                                if($printSide > 0){
                                    $printRate = (58.5*40)/100;
                                    $cardRate = $total+$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $printRate = (58.5*40)/100;
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
                                    $printRate = (25.5*40)/100;
                                    $cardRate = $total+$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $printRate = (25.5*40)/100;
                                    $cardRate = $total-$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '250':
                                if($printSide > 0){
                                    $printRate = (32.4*40)/100;
                                    $cardRate = $total+$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $printRate = (32.4*40)/100;
                                    $cardRate = $total-$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '500':
                                if($printSide > 0){
                                    $printRate = (48.2*40)/100;
                                    $cardRate = $total+$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $printRate = (48.2*40)/100;
                                    $cardRate = $total-$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '1000':
                                if($printSide > 0){
                                    $printRate = (58.5*40)/100;
                                    $cardRate = $total+$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $printRate = (58.5*40)/100;
                                    $cardRate = $total-$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
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
                                if($printSide > 0){
                                    $printRate = (25.5*40)/100;
                                    $cardRate = $total+$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $printRate = (25.5*40)/100;
                                    $cardRate = $total-$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '250':
                                if($printSide > 0){
                                    $printRate = (32.4*40)/100;
                                    $cardRate = $total+$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $printRate = (32.4*40)/100;
                                    $cardRate = $total-$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '500':
                                if($printSide > 0){
                                    $printRate = (48.2*40)/100;
                                    $cardRate = $total+$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $printRate = (48.2*40)/100;
                                    $cardRate = $total-$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '1000':
                                if($printSide > 0){
                                    $printRate = (58.5*40)/100;
                                    $cardRate = $total+$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $printRate = (58.5*40)/100;
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
                                    $printRate = (16.2*40)/100;
                                    $cardRate = $total+$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $printRate = (16.2*40)/100;
                                    $cardRate = $total-$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '250':
                                if($printSide > 0){
                                    $printRate = (18.5*40)/100;
                                    $cardRate = $total+$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $printRate = (18.5*40)/100;
                                    $cardRate = $total-$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '500':
                                if($printSide > 0){
                                    $printRate = (26.5*40)/100;
                                    $cardRate = $total+$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $printRate = (26.5*40)/100;
                                    $cardRate = $total-$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '1000':
                                if($printSide > 0){
                                    $printRate = (28.9*40)/100;
                                    $cardRate = $total+$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $printRate = (28.9*40)/100;
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
                                    $printRate = (16.9*40)/100;
                                    $cardRate = $total+$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $printRate = (16.9*40)/100;
                                    $cardRate = $total-$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '250':
                                if($printSide > 0){
                                    $printRate = (18.9*40)/100;
                                    $cardRate = $total+$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $printRate = (18.9*40)/100;
                                    $cardRate = $total-$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '500':
                                if($printSide > 0){
                                    $printRate = (28.9*40)/100;
                                    $cardRate = $total+$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $printRate = (28.9*40)/100;
                                    $cardRate = $total-$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '1000':
                                if($printSide > 0){
                                    $printRate = (32.5*40)/100;
                                    $cardRate = $total+$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $printRate = (32.5*40)/100;
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
        public function cottonrounded(Request $request)
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
                                    $roundedRate = (25.5*20)/100;
                                    $cardRate = $total+$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $roundedRate = (25.5*20)/100;
                                    $cardRate = $total-$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '250':
                                if($rounded > 0){
                                    $roundedRate = (32.4*20)/100;
                                    $cardRate = $total+$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $roundedRate = (32.4*20)/100;
                                    $cardRate = $total-$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '500':
                                if($rounded > 0){
                                    $roundedRate = (48.2*20)/100;
                                    $cardRate = $total+$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $roundedRate = (48.2*20)/100;
                                    $cardRate = $total-$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '1000':
                                if($rounded > 0){
                                    $roundedRate = (58.5*20)/100;
                                    $cardRate = $total+$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $roundedRate = (58.5*20)/100;
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
                                    $roundedRate = (25.5*20)/100;
                                    $cardRate = $total+$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $roundedRate = (25.5*20)/100;
                                    $cardRate = $total-$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '250':
                                if($rounded > 0){
                                    $roundedRate = (32.4*20)/100;
                                    $cardRate = $total+$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $roundedRate = (32.4*20)/100;
                                    $cardRate = $total-$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '500':
                                if($rounded > 0){
                                    $roundedRate = (48.2*20)/100;
                                    $cardRate = $total+$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $roundedRate = (48.2*20)/100;
                                    $cardRate = $total-$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '1000':
                                if($rounded > 0){
                                    $roundedRate = (58.5*20)/100;
                                    $cardRate = $total+$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $roundedRate = (58.5*20)/100;
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
                                    $roundedRate = (25.5*20)/100;
                                    $cardRate = $total+$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $roundedRate = (25.5*20)/100;
                                    $cardRate = $total-$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '250':
                                if($rounded > 0){
                                    $roundedRate = (32.4*20)/100;
                                    $cardRate = $total+$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $roundedRate = (32.4*20)/100;
                                    $cardRate = $total-$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '500':
                                if($rounded > 0){
                                    $roundedRate = (48.2*20)/100;
                                    $cardRate = $total+$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $roundedRate = (48.2*20)/100;
                                    $cardRate = $total-$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '1000':
                                if($rounded > 0){
                                    $roundedRate = (58.5*20)/100;
                                    $cardRate = $total+$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $roundedRate = (58.5*20)/100;
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
                                    $roundedRate = (25.5*20)/100;
                                    $cardRate = $total+$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $roundedRate = (25.5*20)/100;
                                    $cardRate = $total-$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '250':
                                if($rounded > 0){
                                    $roundedRate = (32.4*20)/100;
                                    $cardRate = $total+$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $roundedRate = (32.4*20)/100;
                                    $cardRate = $total-$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '500':
                                if($rounded > 0){
                                    $roundedRate = (48.2*20)/100;
                                    $cardRate = $total+$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $roundedRate = (48.2*20)/100;
                                    $cardRate = $total-$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '1000':
                                if($rounded > 0){
                                    $roundedRate = (58.5*20)/100;
                                    $cardRate = $total+$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $roundedRate = (58.5*20)/100;
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
                                    $roundedRate = (16.2*20)/100;
                                    $cardRate = $total+$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $roundedRate = (16.2*20)/100;
                                    $cardRate = $total-$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '250':
                                if($rounded > 0){
                                    $roundedRate = (18.5*20)/100;
                                    $cardRate = $total+$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $roundedRate = (18.5*20)/100;
                                    $cardRate = $total-$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '500':
                                if($rounded > 0){
                                    $roundedRate = (26.5*20)/100;
                                    $cardRate = $total+$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $roundedRate = (26.5*20)/100;
                                    $cardRate = $total-$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '1000':
                                if($rounded > 0){
                                    $roundedRate = (28.9*20)/100;
                                    $cardRate = $total+$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $roundedRate = (28.9*20)/100;
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
                                    $roundedRate = (16.9*20)/100;
                                    $cardRate = $total+$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $roundedRate = (16.9*20)/100;
                                    $cardRate = $total-$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '250':
                                if($rounded > 0){
                                    $roundedRate = (18.9*20)/100;
                                    $cardRate = $total+$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $roundedRate = (18.9*20)/100;
                                    $cardRate = $total-$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '500':
                                if($rounded > 0){
                                    $roundedRate = (28.9*20)/100;
                                    $cardRate = $total+$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $roundedRate = (28.9*20)/100;
                                    $cardRate = $total-$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '1000':
                                if($rounded > 0){
                                    $roundedRate = (32.5*20)/100;
                                    $cardRate = $total+$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $roundedRate = (32.5*20)/100;
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

        // rendezvous business card
        public function rendezvouscardSize(Request $request)
        {
            $size = $request->size;
            $paper = $request->paper;
            switch ($size) {
                case '7':
                    switch ($paper) {
                        case '1':
                            $cardRate = 25.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        
                        default:
                            $cardRate = 25.5;
                            $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                    }
                break;
                case '7.17':
                    switch ($paper) {
                        case '1':
                            $cardRate = 25.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        
                        default:
                            $cardRate = 25.5;
                            $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                    }
                break;
                case '6.13':
                    switch ($paper) {
                        case '1':
                            $cardRate = 25.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        
                        default:
                            $cardRate = 25.5;
                            $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                    }
                break;
                case '4':
                    switch ($paper) {
                        case '1':
                            $cardRate = 25.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        
                        default:
                            $cardRate = 25.5;
                            $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                    }
                break;
                case '5':
                    switch ($paper) {
                        case '1':
                            $cardRate = 16.2;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        
                        default:
                            $cardRate = 16.2;
                            $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                    }
                break;
                case '6':
                    switch ($paper) {
                        case '1':
                            $cardRate = 16.9;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        
                        default:
                            $cardRate = 16.9;
                            $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                    }
                break;
            }
            
        }
        public function rendezvousmainQty(Request $request)
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
                                $cardRate = 25.5;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '250':
                                $cardRate = 32.4;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '500':
                                $cardRate = 48.2;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '1000':
                                $cardRate = 58.5;
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
                                $cardRate = 25.5;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '250':
                                $cardRate = 32.4;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '500':
                                $cardRate = 48.2;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '1000':
                                $cardRate = 58.5;
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
                                $cardRate = 25.5;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '250':
                                $cardRate = 32.4;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '500':
                                $cardRate = 48.2;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '1000':
                                $cardRate = 58.5;
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
                                $cardRate = 25.5;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '250':
                                $cardRate = 32.4;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '500':
                                $cardRate = 48.2;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '1000':
                                $cardRate = 58.5;
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
                                $cardRate = 16.2;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '250':
                                $cardRate = 18.5;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '500':
                                $cardRate = 26.5;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '1000':
                                $cardRate = 28.9;
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
                                $cardRate = 16.9;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '250':
                                $cardRate = 18.9;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '500':
                                $cardRate = 28.9;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '1000':
                                $cardRate = 32.5;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                        }
                        break;
                    }
                break;
            }
        }
        public function rendezvouspaperType(Request $request)
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
                                $cardRate = 25.5;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '250':
                                $cardRate = 32.4;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '500':
                                $cardRate = 48.2;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '1000':
                                $cardRate = 58.5;
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
                                $cardRate = 25.5;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '250':
                                $cardRate = 32.4;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '500':
                                $cardRate = 48.2;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '1000':
                                $cardRate = 58.5;
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
                                $cardRate = 25.5;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '250':
                                $cardRate = 32.4;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '500':
                                $cardRate = 48.2;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '1000':
                                $cardRate = 58.5;
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
                                $cardRate = 25.5;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '250':
                                $cardRate = 32.4;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '500':
                                $cardRate = 48.2;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '1000':
                                $cardRate = 58.5;
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
                                $cardRate = 16.2;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '250':
                                $cardRate = 18.5;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '500':
                                $cardRate = 26.5;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '1000':
                                $cardRate = 28.9;
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
                                $cardRate = 16.9;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '250':
                                $cardRate = 18.9;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '500':
                                $cardRate = 28.9;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '1000':
                                $cardRate = 32.5;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                        }
                        break;
                    }
                break;
            }
        }
        public function rendezvousprintSide(Request $request)
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
                                    $printRate = (25.5*40)/100;
                                    $cardRate = $total+$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $printRate = (25.5*40)/100;
                                    $cardRate = $total-$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '250':
                                if($printSide > 0){
                                    $printRate = (32.4*40)/100;
                                    $cardRate = $total+$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $printRate = (32.4*40)/100;
                                    $cardRate = $total-$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '500':
                                if($printSide > 0){
                                    $printRate = (48.2*40)/100;
                                    $cardRate = $total+$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $printRate = (48.2*40)/100;
                                    $cardRate = $total-$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '1000':
                                if($printSide > 0){
                                    $printRate = (58.5*40)/100;
                                    $cardRate = $total+$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $printRate = (58.5*40)/100;
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
                                    $printRate = (25.5*40)/100;
                                    $cardRate = $total+$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $printRate = (25.5*40)/100;
                                    $cardRate = $total-$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '250':
                                if($printSide > 0){
                                    $printRate = (32.4*40)/100;
                                    $cardRate = $total+$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $printRate = (32.4*40)/100;
                                    $cardRate = $total-$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '500':
                                if($printSide > 0){
                                    $printRate = (48.2*40)/100;
                                    $cardRate = $total+$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $printRate = (48.2*40)/100;
                                    $cardRate = $total-$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '1000':
                                if($printSide > 0){
                                    $printRate = (58.5*40)/100;
                                    $cardRate = $total+$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $printRate = (58.5*40)/100;
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
                                    $printRate = (25.5*40)/100;
                                    $cardRate = $total+$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $printRate = (25.5*40)/100;
                                    $cardRate = $total-$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '250':
                                if($printSide > 0){
                                    $printRate = (32.4*40)/100;
                                    $cardRate = $total+$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $printRate = (32.4*40)/100;
                                    $cardRate = $total-$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '500':
                                if($printSide > 0){
                                    $printRate = (48.2*40)/100;
                                    $cardRate = $total+$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $printRate = (48.2*40)/100;
                                    $cardRate = $total-$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '1000':
                                if($printSide > 0){
                                    $printRate = (58.5*40)/100;
                                    $cardRate = $total+$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $printRate = (58.5*40)/100;
                                    $cardRate = $total-$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
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
                                if($printSide > 0){
                                    $printRate = (25.5*40)/100;
                                    $cardRate = $total+$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $printRate = (25.5*40)/100;
                                    $cardRate = $total-$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '250':
                                if($printSide > 0){
                                    $printRate = (32.4*40)/100;
                                    $cardRate = $total+$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $printRate = (32.4*40)/100;
                                    $cardRate = $total-$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '500':
                                if($printSide > 0){
                                    $printRate = (48.2*40)/100;
                                    $cardRate = $total+$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $printRate = (48.2*40)/100;
                                    $cardRate = $total-$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '1000':
                                if($printSide > 0){
                                    $printRate = (58.5*40)/100;
                                    $cardRate = $total+$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $printRate = (58.5*40)/100;
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
                                    $printRate = (16.2*40)/100;
                                    $cardRate = $total+$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $printRate = (16.2*40)/100;
                                    $cardRate = $total-$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '250':
                                if($printSide > 0){
                                    $printRate = (18.5*40)/100;
                                    $cardRate = $total+$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $printRate = (18.5*40)/100;
                                    $cardRate = $total-$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '500':
                                if($printSide > 0){
                                    $printRate = (26.5*40)/100;
                                    $cardRate = $total+$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $printRate = (26.5*40)/100;
                                    $cardRate = $total-$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '1000':
                                if($printSide > 0){
                                    $printRate = (28.9*40)/100;
                                    $cardRate = $total+$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $printRate = (28.9*40)/100;
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
                                    $printRate = (16.9*40)/100;
                                    $cardRate = $total+$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $printRate = (16.9*40)/100;
                                    $cardRate = $total-$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '250':
                                if($printSide > 0){
                                    $printRate = (18.9*40)/100;
                                    $cardRate = $total+$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $printRate = (18.9*40)/100;
                                    $cardRate = $total-$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '500':
                                if($printSide > 0){
                                    $printRate = (28.9*40)/100;
                                    $cardRate = $total+$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $printRate = (28.9*40)/100;
                                    $cardRate = $total-$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '1000':
                                if($printSide > 0){
                                    $printRate = (32.5*40)/100;
                                    $cardRate = $total+$printRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $printRate = (32.5*40)/100;
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
        public function rendezvousrounded(Request $request)
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
                                    $roundedRate = (25.5*20)/100;
                                    $cardRate = $total+$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $roundedRate = (25.5*20)/100;
                                    $cardRate = $total-$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '250':
                                if($rounded > 0){
                                    $roundedRate = (32.4*20)/100;
                                    $cardRate = $total+$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $roundedRate = (32.4*20)/100;
                                    $cardRate = $total-$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '500':
                                if($rounded > 0){
                                    $roundedRate = (48.2*20)/100;
                                    $cardRate = $total+$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $roundedRate = (48.2*20)/100;
                                    $cardRate = $total-$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '1000':
                                if($rounded > 0){
                                    $roundedRate = (58.5*20)/100;
                                    $cardRate = $total+$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $roundedRate = (58.5*20)/100;
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
                                    $roundedRate = (25.5*20)/100;
                                    $cardRate = $total+$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $roundedRate = (25.5*20)/100;
                                    $cardRate = $total-$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '250':
                                if($rounded > 0){
                                    $roundedRate = (32.4*20)/100;
                                    $cardRate = $total+$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $roundedRate = (32.4*20)/100;
                                    $cardRate = $total-$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '500':
                                if($rounded > 0){
                                    $roundedRate = (48.2*20)/100;
                                    $cardRate = $total+$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $roundedRate = (48.2*20)/100;
                                    $cardRate = $total-$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '1000':
                                if($rounded > 0){
                                    $roundedRate = (58.5*20)/100;
                                    $cardRate = $total+$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $roundedRate = (58.5*20)/100;
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
                                    $roundedRate = (25.5*20)/100;
                                    $cardRate = $total+$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $roundedRate = (25.5*20)/100;
                                    $cardRate = $total-$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '250':
                                if($rounded > 0){
                                    $roundedRate = (32.4*20)/100;
                                    $cardRate = $total+$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $roundedRate = (32.4*20)/100;
                                    $cardRate = $total-$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '500':
                                if($rounded > 0){
                                    $roundedRate = (48.2*20)/100;
                                    $cardRate = $total+$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $roundedRate = (48.2*20)/100;
                                    $cardRate = $total-$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '1000':
                                if($rounded > 0){
                                    $roundedRate = (58.5*20)/100;
                                    $cardRate = $total+$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $roundedRate = (58.5*20)/100;
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
                                    $roundedRate = (25.5*20)/100;
                                    $cardRate = $total+$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $roundedRate = (25.5*20)/100;
                                    $cardRate = $total-$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '250':
                                if($rounded > 0){
                                    $roundedRate = (32.4*20)/100;
                                    $cardRate = $total+$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $roundedRate = (32.4*20)/100;
                                    $cardRate = $total-$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '500':
                                if($rounded > 0){
                                    $roundedRate = (48.2*20)/100;
                                    $cardRate = $total+$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $roundedRate = (48.2*20)/100;
                                    $cardRate = $total-$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '1000':
                                if($rounded > 0){
                                    $roundedRate = (58.5*20)/100;
                                    $cardRate = $total+$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $roundedRate = (58.5*20)/100;
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
                                    $roundedRate = (16.2*20)/100;
                                    $cardRate = $total+$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $roundedRate = (16.2*20)/100;
                                    $cardRate = $total-$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '250':
                                if($rounded > 0){
                                    $roundedRate = (18.5*20)/100;
                                    $cardRate = $total+$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $roundedRate = (18.5*20)/100;
                                    $cardRate = $total-$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '500':
                                if($rounded > 0){
                                    $roundedRate = (26.5*20)/100;
                                    $cardRate = $total+$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $roundedRate = (26.5*20)/100;
                                    $cardRate = $total-$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '1000':
                                if($rounded > 0){
                                    $roundedRate = (28.9*20)/100;
                                    $cardRate = $total+$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $roundedRate = (28.9*20)/100;
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
                                    $roundedRate = (16.9*20)/100;
                                    $cardRate = $total+$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $roundedRate = (16.9*20)/100;
                                    $cardRate = $total-$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '250':
                                if($rounded > 0){
                                    $roundedRate = (18.9*20)/100;
                                    $cardRate = $total+$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $roundedRate = (18.9*20)/100;
                                    $cardRate = $total-$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '500':
                                if($rounded > 0){
                                    $roundedRate = (28.9*20)/100;
                                    $cardRate = $total+$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $roundedRate = (28.9*20)/100;
                                    $cardRate = $total-$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                }
                            break;
                            case '1000':
                                if($rounded > 0){
                                    $roundedRate = (32.5*20)/100;
                                    $cardRate = $total+$roundedRate;
                                    $finalTotal = ($cardRate*100)/50;
                                    return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                                } else {
                                    $roundedRate = (32.5*20)/100;
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
}
