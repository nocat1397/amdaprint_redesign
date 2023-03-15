<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FolderController extends Controller
{
    // Large Folders
    public function largeSize(Request $request)
    {
        $size = $request->size;
        $paper = $request->paper;
        switch ($size) {
            case '108':
                switch ($paper) {
                    case '1':
                        $largeRate = 1490;
                        $finalTotal = ($largeRate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$largeRate]);
                    break;
                    
                    default:
                        $largeRate = 1150;
                        $finalTotal = ($largeRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$largeRate]);
                    break;
                }
            break;
            case '126':
                switch ($paper) {
                    case '1':
                        $largeRate = 1490;
                        $finalTotal = ($largeRate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$largeRate]);
                    break;
                    
                    default:
                        $largeRate = 1150;
                        $finalTotal = ($largeRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$largeRate]);
                    break;
                }
            break;
        }
        
    }
    public function largeQty(Request $request)
    {
        $size = $request->size;
        $paper = $request->paper;
        $qty = $request->qty;
        switch ($size) {
            case '108':
                switch ($paper) {
                    case '0':
                        switch ($qty) {
                            case '50':
                                $largeRate = 1150;
                                $finalTotal = ($largeRate*100)/50;
                                return response()->json(['total'=>$finalTotal,'final'=>$largeRate]);
                            break;
                            case '100':
                                $largeRate = 1170;
                                $finalTotal = ($largeRate*100)/50;
                                return response()->json(['total'=>$finalTotal,'final'=>$largeRate]);
                            break;
                            case '250':
                                $largeRate = 1290;
                                $finalTotal = ($largeRate*100)/50;
                                return response()->json(['total'=>$finalTotal,'final'=>$largeRate]);
                            break;
                            case '500':
                                $largeRate = 1350;
                                $finalTotal = ($largeRate*100)/50;
                                return response()->json(['total'=>$finalTotal,'final'=>$largeRate]);
                            break;
                            case '1000':
                                $largeRate = 1420;
                                $finalTotal = ($largeRate*100)/50;
                                return response()->json(['total'=>$finalTotal,'final'=>$largeRate]);
                            break;
                            case '2000':
                                $largeRate = 1890;
                                $finalTotal = ($largeRate*100)/50;
                                return response()->json(['total'=>$finalTotal,'final'=>$largeRate]);
                            break;
                            case '5000':
                                $largeRate = 3600;
                                $finalTotal = ($largeRate*100)/50;
                                return response()->json(['total'=>$finalTotal,'final'=>$largeRate]);
                            break;
                            case '7000':
                                $largeRate = 4750;
                                $finalTotal = ($largeRate*100)/50;
                                return response()->json(['total'=>$finalTotal,'final'=>$largeRate]);
                            break;
                            case '10000':
                                $largeRate = 6350;
                                $finalTotal = ($largeRate*100)/50;
                                return response()->json(['total'=>$finalTotal,'final'=>$largeRate]);
                            break;
                        }
                    break;
                    case '1':
                        switch ($qty) {
                            case '50':
                                $largeRate = 1490;
                                $finalTotal = ($largeRate*100)/50;
                                return response()->json(['total'=>$finalTotal,'final'=>$largeRate]);
                            break;
                            case '100':
                                $largeRate = 1510;
                                $finalTotal = ($largeRate*100)/50;
                                return response()->json(['total'=>$finalTotal,'final'=>$largeRate]);
                            break;
                            case '250':
                                $largeRate = 1550;
                                $finalTotal = ($largeRate*100)/50;
                                return response()->json(['total'=>$finalTotal,'final'=>$largeRate]);
                            break;
                            case '500':
                                $largeRate = 1590;
                                $finalTotal = ($largeRate*100)/50;
                                return response()->json(['total'=>$finalTotal,'final'=>$largeRate]);
                            break;
                            case '1000':
                                $largeRate = 1725;
                                $finalTotal = ($largeRate*100)/50;
                                return response()->json(['total'=>$finalTotal,'final'=>$largeRate]);
                            break;
                            case '2000':
                                $largeRate = 2295;
                                $finalTotal = ($largeRate*100)/50;
                                return response()->json(['total'=>$finalTotal,'final'=>$largeRate]);
                            break;
                            case '5000':
                                $largeRate = 4520;
                                $finalTotal = ($largeRate*100)/50;
                                return response()->json(['total'=>$finalTotal,'final'=>$largeRate]);
                            break;
                            case '7000':
                                $largeRate = 5750;
                                $finalTotal = ($largeRate*100)/50;
                                return response()->json(['total'=>$finalTotal,'final'=>$largeRate]);
                            break;
                            case '10000':
                                $largeRate = 7750;
                                $finalTotal = ($largeRate*100)/50;
                                return response()->json(['total'=>$finalTotal,'final'=>$largeRate]);
                            break;
                        }
                    break;
                    
                }
            break;
            case '126':
                switch ($paper) {
                    case '0':
                        switch ($qty) {
                            case '50':
                                $largeRate = 1150;
                                $finalTotal = ($largeRate*100)/50;
                                return response()->json(['total'=>$finalTotal,'final'=>$largeRate]);
                            break;
                            case '100':
                                $largeRate = 1170;
                                $finalTotal = ($largeRate*100)/50;
                                return response()->json(['total'=>$finalTotal,'final'=>$largeRate]);
                            break;
                            case '250':
                                $largeRate = 1290;
                                $finalTotal = ($largeRate*100)/50;
                                return response()->json(['total'=>$finalTotal,'final'=>$largeRate]);
                            break;
                            case '500':
                                $largeRate = 1350;
                                $finalTotal = ($largeRate*100)/50;
                                return response()->json(['total'=>$finalTotal,'final'=>$largeRate]);
                            break;
                            case '1000':
                                $largeRate = 1420;
                                $finalTotal = ($largeRate*100)/50;
                                return response()->json(['total'=>$finalTotal,'final'=>$largeRate]);
                            break;
                            case '2000':
                                $largeRate = 1890;
                                $finalTotal = ($largeRate*100)/50;
                                return response()->json(['total'=>$finalTotal,'final'=>$largeRate]);
                            break;
                            case '5000':
                                $largeRate = 3600;
                                $finalTotal = ($largeRate*100)/50;
                                return response()->json(['total'=>$finalTotal,'final'=>$largeRate]);
                            break;
                            case '7000':
                                $largeRate = 4750;
                                $finalTotal = ($largeRate*100)/50;
                                return response()->json(['total'=>$finalTotal,'final'=>$largeRate]);
                            break;
                            case '10000':
                                $largeRate = 6350;
                                $finalTotal = ($largeRate*100)/50;
                                return response()->json(['total'=>$finalTotal,'final'=>$largeRate]);
                            break;
                        }
                    break;
                    case '1':
                        switch ($qty) {
                            case '50':
                                $largeRate = 1490;
                                $finalTotal = ($largeRate*100)/50;
                                return response()->json(['total'=>$finalTotal,'final'=>$largeRate]);
                            break;
                            case '100':
                                $largeRate = 1510;
                                $finalTotal = ($largeRate*100)/50;
                                return response()->json(['total'=>$finalTotal,'final'=>$largeRate]);
                            break;
                            case '250':
                                $largeRate = 1550;
                                $finalTotal = ($largeRate*100)/50;
                                return response()->json(['total'=>$finalTotal,'final'=>$largeRate]);
                            break;
                            case '500':
                                $largeRate = 1590;
                                $finalTotal = ($largeRate*100)/50;
                                return response()->json(['total'=>$finalTotal,'final'=>$largeRate]);
                            break;
                            case '1000':
                                $largeRate = 1725;
                                $finalTotal = ($largeRate*100)/50;
                                return response()->json(['total'=>$finalTotal,'final'=>$largeRate]);
                            break;
                            case '2000':
                                $largeRate = 2295;
                                $finalTotal = ($largeRate*100)/50;
                                return response()->json(['total'=>$finalTotal,'final'=>$largeRate]);
                            break;
                            case '5000':
                                $largeRate = 4520;
                                $finalTotal = ($largeRate*100)/50;
                                return response()->json(['total'=>$finalTotal,'final'=>$largeRate]);
                            break;
                            case '7000':
                                $largeRate = 5750;
                                $finalTotal = ($largeRate*100)/50;
                                return response()->json(['total'=>$finalTotal,'final'=>$largeRate]);
                            break;
                            case '10000':
                                $largeRate = 7750;
                                $finalTotal = ($largeRate*100)/50;
                                return response()->json(['total'=>$finalTotal,'final'=>$largeRate]);
                            break;
                        }
                    break;
                    
                }
            break;
        }
        
    }
    // mini Folders
    public function miniSize(Request $request)
    {
        $size = $request->size;
        $paper = $request->paper;

        switch ($paper) {
            case '1':
                $miniRate = 210.5;
                $finalTotal = ($miniRate*100)/50;
            return response()->json(['total'=>$finalTotal,'final'=>$miniRate]);
            break;
            
            default:
                $miniRate = 175.5;
                $finalTotal = ($miniRate*100)/50;
                return response()->json(['total'=>$finalTotal,'final'=>$miniRate]);
            break;
        }
        
    }
    public function miniQty(Request $request)
    {
        $size = $request->size;
        $paper = $request->paper;
        $qty = $request->qty;
        switch ($paper) {
            case '0':
                switch ($qty) {
                    case '250':
                        $miniRate = 175.5;
                        $finalTotal = ($miniRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$miniRate]);
                    break;
                    case '500':
                        $miniRate = 189.5;
                        $finalTotal = ($miniRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$miniRate]);
                    break;
                    case '1000':
                        $miniRate = 199.5;
                        $finalTotal = ($miniRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$miniRate]);
                    break;
                    case '2000':
                        $miniRate = 290.5;
                        $finalTotal = ($miniRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$miniRate]);
                    break;
                    case '5000':
                        $miniRate = 549.5;
                        $finalTotal = ($miniRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$miniRate]);
                    break;
                    case '7000':
                        $miniRate = 699.5;
                        $finalTotal = ($miniRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$miniRate]);
                    break;
                    case '10000':
                        $miniRate = 890.5;
                        $finalTotal = ($miniRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$miniRate]);
                    break;
                   
                }
            break;
            case '1':
                switch ($qty) {
                    case '250':
                        $miniRate = 210.5;
                        $finalTotal = ($miniRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$miniRate]);
                    break;
                    case '500':
                        $miniRate = 220.5;
                        $finalTotal = ($miniRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$miniRate]);
                    break;
                    case '1000':
                        $miniRate = 240.5;
                        $finalTotal = ($miniRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$miniRate]);
                    break;
                    case '2000':
                        $miniRate = 349.5;
                        $finalTotal = ($miniRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$miniRate]);
                    break;
                    case '5000':
                        $miniRate = 610.5;
                        $finalTotal = ($miniRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$miniRate]);
                    break;
                    case '7000':
                        $miniRate = 830.5;
                        $finalTotal = ($miniRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$miniRate]);
                    break;
                    case '10000':
                        $miniRate = 1099.5;
                        $finalTotal = ($miniRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$miniRate]);
                    break;
                    
                }
            break;
            
        }
    }
    // key card Folders
    public function keySize(Request $request)
    {
        $size = $request->size;
        $paper = $request->paper;

        switch ($paper) {
            case '1':
                $keyRate = 215.5;
                $finalTotal = ($keyRate*100)/50;
            return response()->json(['total'=>$finalTotal,'final'=>$keyRate]);
            break;
            
            default:
                $keyRate = 170.5;
                $finalTotal = ($keyRate*100)/50;
                return response()->json(['total'=>$finalTotal,'final'=>$keyRate]);
            break;
        }
        
    }
    public function keyQty(Request $request)
    {
        $size = $request->size;
        $paper = $request->paper;
        $qty = $request->qty;
        switch ($paper) {
            case '0':
                switch ($qty) {
                    case '250':
                        $keyRate = 170.5;
                        $finalTotal = ($keyRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$keyRate]);
                    break;
                    case '500':
                        $keyRate = 180.5;
                        $finalTotal = ($keyRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$keyRate]);
                    break;
                    case '1000':
                        $keyRate = 199.5;
                        $finalTotal = ($keyRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$keyRate]);
                    break;
                    case '2000':
                        $keyRate = 290.5;
                        $finalTotal = ($keyRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$keyRate]);
                    break;
                    case '5000':
                        $keyRate = 540.5;
                        $finalTotal = ($keyRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$keyRate]);
                    break;
                    case '7000':
                        $keyRate = 699.5;
                        $finalTotal = ($keyRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$keyRate]);
                    break;
                    case '10000':
                        $keyRate = 899.5;
                        $finalTotal = ($keyRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$keyRate]);
                    break;
                   
                }
            break;
            case '1':
                switch ($qty) {
                    case '250':
                        $keyRate = 215.5;
                        $finalTotal = ($keyRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$keyRate]);
                    break;
                    case '500':
                        $keyRate = 229.5;
                        $finalTotal = ($keyRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$keyRate]);
                    break;
                    case '1000':
                        $keyRate = 239.5;
                        $finalTotal = ($keyRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$keyRate]);
                    break;
                    case '2000':
                        $keyRate = 350.5;
                        $finalTotal = ($keyRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$keyRate]);
                    break;
                    case '5000':
                        $keyRate = 650.5;
                        $finalTotal = ($keyRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$keyRate]);
                    break;
                    case '7000':
                        $keyRate = 830.5;
                        $finalTotal = ($keyRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$keyRate]);
                    break;
                    case '10000':
                        $keyRate = 1090.5;
                        $finalTotal = ($keyRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$keyRate]);
                    break;
                    
                }
            break;
            
        }
    }
}
