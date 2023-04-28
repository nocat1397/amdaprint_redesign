<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class StandController extends Controller
{

    // Custom business card
    public function standPrice(Request $request)
    {
        $size = $request->size;
        $paper = $request->paper;
        $qty = $request->qty;
        $priceArray = array($size,'1');
        $product = Product::find($request->id);
        $priceCheck = $product->pricing[$request->key];
        foreach ($priceCheck as $key => $check) {
            $priceFind[] = $this->comparePriceArrays($check,$priceArray);
        }
        $price = array_values(array_filter(array_map('floatval',$priceFind)));
        $standRate = $price[0]*$qty;
        // return $standRate;
        $finalTotal = ($standRate*100)/50;
        return response()->json(['total'=>$standRate,'final'=>$finalTotal,'baseRate'=>$price[0]]);
        
    }
    public function standProperty(Request $request)
    {

        $product = Product::find($request->id);

        $propertyKeys = $request->property_key;
        $percentageKeys = $request->percentageKey;
        $baseRate = $request->basePrice;
        $total = $request->total;

        foreach ($propertyKeys as $key=>$property) {
            $actions[] = $product['property_action'][$request->product_key][$key];
            $percentages[] = $product['property_percentage'][$request->product_key][$key];
        }
        foreach ($percentageKeys as $perKey=>$percentage) {
            $actionFind[] = $actions[$perKey][$percentage];
            $percentageFind[] = $percentages[$perKey][$percentage];
        }
        
        foreach ($percentageFind as $actionKey => $percentageCount) {
            if($actionFind[$actionKey] > 0)
            {
                $percentageRate = ($baseRate*$percentageCount)/100;
                $array1[] = $percentageRate;
            } else {
                $percentageRate = $percentageCount;
                $array1[] = (float)$percentageRate;
            }
        }

        $percentageTotal = array_sum($array1);
        $qty = $request->qty;
        $standRate = $percentageTotal+($baseRate*$qty);
        $finalTotal = ($standRate*100)/50;
        return response()->json(['baseRate'=>$baseRate,'percentageRates'=>$array1, 'total'=>$standRate,'final'=>$finalTotal]);
        
    }
    public function comparePriceArrays($array1, $array2) {
        $uniqueValues = array_unique(array_slice($array1, 0, 2));
        // return $uniqueValues;
        if ($uniqueValues === $array2) {
          return $array1[2];
        }
    }
    //rollup banner stand start

    public function bannerSize(Request $request)
    {
        $size = $request->size;
        switch ($size) {
            case '10':
                $bannerRate = 74.18;
                $finalTotal = ($bannerRate*100)/50;
                return response()->json(['total'=>$bannerRate,'final'=>$finalTotal]);
            break;
            case '15':
                $bannerRate = 104.24;
                $finalTotal = ($bannerRate*100)/50;
                return response()->json(['total'=>$bannerRate,'final'=>$finalTotal]);
            break;
            case '18':
                $bannerRate = 119.09;
                $finalTotal = ($bannerRate*100)/50;
                return response()->json(['total'=>$bannerRate,'final'=>$finalTotal]);
            break;
            case '32':
                $bannerRate = 172.92;
                $finalTotal = ($bannerRate*100)/50;
                return response()->json(['total'=>$bannerRate,'final'=>$finalTotal]);
            break;
            
            default:
                $bannerRate = 74.18;
                $finalTotal = ($bannerRate*100)/50;
                return response()->json(['total'=>$bannerRate,'final'=>$finalTotal]);
            break;
        }
        
    }
    public function mainQty(Request $request)
    {
        $size = $request->size;
        switch ($size) {
            case '10':
                $bannerRate = 74.18;
                $qtyRate = $bannerRate*$request->qty;
		        $finalTotal = ($qtyRate*100)/50;
                return response()->json(['total'=>$qtyRate,'final'=>$finalTotal]);
            break;
            case '15':
                $bannerRate = 104.24;
                $qtyRate = $bannerRate*$request->qty;
		        $finalTotal = ($qtyRate*100)/50;
                return response()->json(['total'=>$qtyRate,'final'=>$finalTotal]);
            break;
            case '18':
                $bannerRate = 119.09;
                $qtyRate = $bannerRate*$request->qty;
		        $finalTotal = ($qtyRate*100)/50;
                return response()->json(['total'=>$qtyRate,'final'=>$finalTotal]);
            break;
            case '32':
                $bannerRate = 172.92;
                $qtyRate = $bannerRate*$request->qty;
		        $finalTotal = ($qtyRate*100)/50;
                return response()->json(['total'=>$qtyRate,'final'=>$finalTotal]);
            break;
            
            default:
                $bannerRate = 74.18;
                $qtyRate = $bannerRate*$request->qty;
		        $finalTotal = ($qtyRate*100)/50;
                return response()->json(['total'=>$qtyRate,'final'=>$finalTotal]);
            break;
        }
    }
    public function stand(Request $request)
    {
        $size = $request->size;
        switch ($size) {
            case '10':
                if($request->stand > 0)
                {
                    $bannerRate = (74.18)*$request->qty;
                    $standRate = 49.45;
                    $totalRate = $standRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['stand'=>$standRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (74.18)*$request->qty;
                    $standRate = '';
                    $totalRate = $request->total-49.45;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['stand'=>$standRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            case '15':
                if($request->stand > 0)
                {
                    $bannerRate = (104.24)*$request->qty;
                    $standRate = (($bannerRate*40)/100);
                    $totalRate = $standRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['stand'=>$standRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (104.24)*$request->qty;
                    $standRate = (($bannerRate*40)/100);
                    $totalRate = $request->total-$standRate;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['stand'=>$standRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            case '18':
                if($request->stand > 0)
                {
                    $bannerRate = (119.09)*$request->qty;
                    $standRate = (($bannerRate*60)/100);
                    $totalRate = $standRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['stand'=>$standRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (119.09)*$request->qty;
                    $standRate = (($bannerRate*60)/100);
                    $totalRate = $request->total-$standRate;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['stand'=>$standRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            case '32':
                if($request->stand > 0)
                {
                    $bannerRate = (172.92)*$request->qty;
                    $standRate = (($bannerRate*130)/100);
                    $totalRate = $standRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['stand'=>$standRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (172.92)*$request->qty;
                    $standRate = (($bannerRate*130)/100);
                    $totalRate = $request->total-$standRate;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['stand'=>$standRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            
            default:
                if($request->stand > 0)
                {
                    $bannerRate = (74.18)*$request->qty;
                    $standRate = 49.45;
                    $totalRate = $standRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['stand'=>$standRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (74.18)*$request->qty;
                    $standRate = '';
                    $totalRate = $request->total-49.45;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['stand'=>$standRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
        }
        
    }
    public function bannerAdd(Request $request)
    {
        $size = $request->size;
        switch ($size) {
            case '10':
                if($request->banner > 0)
                {
                    $bannerRate = (74.18)*$request->qty;
                    $bannerAddRate = 46.35;
                    $totalRate = $bannerAddRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['banner'=>$bannerAddRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (74.18)*$request->qty;
                    $bannerAddRate = '';
                    $totalRate = $request->total-46.35;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['banner'=>$bannerAddRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            case '15':
                if($request->banner > 0)
                {
                    $bannerRate = (104.24)*$request->qty;
                    $bannerAddRate = (($bannerRate*35)/100);
                    $totalRate = $bannerAddRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['banner'=>$bannerAddRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (104.24)*$request->qty;
                    $bannerAddRate = (($bannerRate*35)/100);
                    $totalRate = $request->total-$bannerAddRate;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['banner'=>$bannerAddRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            case '18':
                if($request->banner > 0)
                {
                    $bannerRate = (119.09)*$request->qty;
                    $bannerAddRate = (($bannerRate*45)/100);
                    $totalRate = $bannerAddRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['banner'=>$bannerAddRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (119.09)*$request->qty;
                    $bannerAddRate = (($bannerRate*45)/100);
                    $totalRate = $request->total-$bannerAddRate;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['banner'=>$bannerAddRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            case '32':
                if($request->banner > 0)
                {
                    $bannerRate = (172.92)*$request->qty;
                    $bannerAddRate = (($bannerRate*110)/100);
                    $totalRate = $bannerAddRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['banner'=>$bannerAddRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (172.92)*$request->qty;
                    $bannerAddRate = (($bannerRate*110)/100);
                    $totalRate = $request->total-$bannerAddRate;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['banner'=>$bannerAddRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            
            default:
                if($request->banner > 0)
                {
                    $bannerRate = (74.18)*$request->qty;
                    $bannerAddRate = 46.35;
                    $totalRate = $bannerAddRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['banner'=>$bannerAddRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (74.18)*$request->qty;
                    $bannerAddRate = '';
                    $totalRate = $request->total-46.35;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['banner'=>$bannerAddRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
        }
        
    }
    public function lamination(Request $request)
    {
        $size = $request->size;
        switch ($size) {
            case '10':
                if($request->lamination > 0)
                {
                    $bannerRate = (74.18)*$request->qty;
                    $laminationRate = 6.99;
                    $totalRate = $laminationRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['lamination'=>$laminationRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (74.18)*$request->qty;
                    $laminationRate = '';
                    $totalRate = $request->total-6.99;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['lamination'=>$laminationRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            case '15':
                if($request->lamination > 0)
                {
                    $bannerRate = (104.24)*$request->qty;
                    $laminationRate = 6.99;
                    $totalRate = $laminationRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['lamination'=>$laminationRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (104.24)*$request->qty;
                    $laminationRate = '';
                    $totalRate = $request->total-6.99;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['lamination'=>$laminationRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            case '18':
                if($request->lamination > 0)
                {
                    $bannerRate = (119.09)*$request->qty;
                    $laminationRate = 6.99;
                    $totalRate = $laminationRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['lamination'=>$laminationRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (119.09)*$request->qty;
                    $laminationRate = '';
                    $totalRate = $request->total-6.99;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['lamination'=>$laminationRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            case '32':
                if($request->lamination > 0)
                {
                    $bannerRate = (172.92)*$request->qty;
                    $laminationRate = 6.99;
                    $totalRate = $laminationRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['lamination'=>$laminationRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (172.92)*$request->qty;
                    $laminationRate = '';
                    $totalRate = $request->total-6.99;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['lamination'=>$laminationRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            
            default:
                if($request->lamination > 0)
                {
                    $bannerRate = (74.18)*$request->qty;
                    $laminationRate = 6.99;
                    $totalRate = $laminationRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['lamination'=>$laminationRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (74.18)*$request->qty;
                    $laminationRate = '';
                    $totalRate = $request->total-6.99;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['lamination'=>$laminationRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
        }
    }

    //rollup banner stand end

    //deluxe single banner start

    public function bannerSizeDeluxe(Request $request)
    {
        $size = $request->size;
        switch ($size) {
            case '13':
                $bannerRate = 134.82;
                $finalTotal = ($bannerRate*100)/50;
                return response()->json(['total'=>$bannerRate,'final'=>$finalTotal]);
            break;
            case '16.25':
                $bannerRate = 149.63;
                $finalTotal = ($bannerRate*100)/50;
                return response()->json(['total'=>$bannerRate,'final'=>$finalTotal]);
            break;
            
            default:
                $bannerRate = 134.82;
                $finalTotal = ($bannerRate*100)/50;
                return response()->json(['total'=>$bannerRate,'final'=>$finalTotal]);
            break;
        }
        
    }
    public function mainQtyDeluxe(Request $request)
    {
        $size = $request->size;
        switch ($size) {
            case '13':
                $bannerRate = 134.82;
                $qtyRate = $bannerRate*$request->qty;
		        $finalTotal = ($qtyRate*100)/50;
                return response()->json(['total'=>$qtyRate,'final'=>$finalTotal]);
            break;
            case '16.25':
                $bannerRate = 149.63;
                $qtyRate = $bannerRate*$request->qty;
		        $finalTotal = ($qtyRate*100)/50;
                return response()->json(['total'=>$qtyRate,'final'=>$finalTotal]);
            break;
            default:
                $bannerRate = 134.82;
                $qtyRate = $bannerRate*$request->qty;
		        $finalTotal = ($qtyRate*100)/50;
                return response()->json(['total'=>$qtyRate,'final'=>$finalTotal]);
            break;
        }
    }
    public function standDeluxe(Request $request)
    {
        $size = $request->size;
        switch ($size) {
            case '13':
                if($request->stand > 0)
                {
                    $bannerRate = (134.82)*$request->qty;
                    $standRate = 89.88;
                    $totalRate = $standRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['stand'=>$standRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (134.82)*$request->qty;
                    $standRate = '';
                    $totalRate = $request->total-89.88;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['stand'=>$standRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            case '16.25':
                if($request->stand > 0)
                {
                    $bannerRate = (149.63)*$request->qty;
                    $standRate = (($bannerRate*10)/100);
                    $totalRate = $standRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['stand'=>$standRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (149.63)*$request->qty;
                    $standRate = (($bannerRate*10)/100);
                    $totalRate = $request->total-$standRate;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['stand'=>$standRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            
            default:
                if($request->stand > 0)
                {
                    $bannerRate = (134.82)*$request->qty;
                    $standRate = 89.88;
                    $totalRate = $standRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['stand'=>$standRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (134.82)*$request->qty;
                    $standRate = '';
                    $totalRate = $request->total-89.88;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['stand'=>$standRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
        }
        
    }
    public function bannerAddDeluxe(Request $request)
    {
        $size = $request->size;
        switch ($size) {
            case '13':
                if($request->banner > 0)
                {
                    $bannerRate = (134.82)*$request->qty;
                    $bannerAddRate = 69.25;
                    $totalRate = $bannerAddRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['banner'=>$bannerAddRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (134.82)*$request->qty;
                    $bannerAddRate = '';
                    $totalRate = $request->total-69.25;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['banner'=>$bannerAddRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            case '16.25':
                if($request->banner > 0)
                {
                    $bannerRate = (149.63)*$request->qty;
                    $bannerAddRate = (($bannerRate*15)/100);
                    $totalRate = $bannerAddRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['banner'=>$bannerAddRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (149.63)*$request->qty;
                    $bannerAddRate = (($bannerRate*15)/100);
                    $totalRate = $request->total-$bannerAddRate;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['banner'=>$bannerAddRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            
            default:
                if($request->banner > 0)
                {
                    $bannerRate = (134.82)*$request->qty;
                    $bannerAddRate = 69.25;
                    $totalRate = $bannerAddRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['banner'=>$bannerAddRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (134.82)*$request->qty;
                    $bannerAddRate = '';
                    $totalRate = $request->total-69.25;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['banner'=>$bannerAddRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
        }
        
    }
    public function laminationDeluxe(Request $request)
    {
        $size = $request->size;
        switch ($size) {
            case '13':
                if($request->lamination > 0)
                {
                    $bannerRate = (134.82)*$request->qty;
                    $laminationRate = 6.99;
                    $totalRate = $laminationRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['lamination'=>$laminationRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (134.82)*$request->qty;
                    $laminationRate = '';
                    $totalRate = $request->total-6.99;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['lamination'=>$laminationRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            case '16.25':
                if($request->lamination > 0)
                {
                    $bannerRate = (149.63)*$request->qty;
                    $laminationRate = 6.99;
                    $totalRate = $laminationRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['lamination'=>$laminationRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (149.63)*$request->qty;
                    $laminationRate = '';
                    $totalRate = $request->total-6.99;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['lamination'=>$laminationRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            default:
                if($request->lamination > 0)
                {
                    $bannerRate = (134.82)*$request->qty;
                    $laminationRate = 6.99;
                    $totalRate = $laminationRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['lamination'=>$laminationRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (134.82)*$request->qty;
                    $laminationRate = '';
                    $totalRate = $request->total-6.99;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['lamination'=>$laminationRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
        }
    }

    //deluxe single banner end

    //deluxe double banner start

    public function bannerSizeDeluxeD(Request $request)
    {
        $size = $request->size;
        switch ($size) {
            case '16.25':
                $bannerRate = 206.78;
                $finalTotal = ($bannerRate*100)/50;
                return response()->json(['total'=>$bannerRate,'final'=>$finalTotal]);
            break;
            
            default:

            break;
        }
        
    }
    public function mainQtyDeluxeD(Request $request)
    {
        $size = $request->size;
        switch ($size) {

            case '16.25':
                $bannerRate = 206.78;
                $qtyRate = $bannerRate*$request->qty;
		        $finalTotal = ($qtyRate*100)/50;
                return response()->json(['total'=>$qtyRate,'final'=>$finalTotal]);
            break;
            default:

            break;
        }
    }
    public function standDeluxeD(Request $request)
    {
        $size = $request->size;
        switch ($size) {

            case '16.25':
                if($request->stand > 0)
                {
                    $bannerRate = (206.78)*$request->qty;
                    $standRate = 137.85;
                    $totalRate = $standRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['stand'=>$standRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (206.78)*$request->qty;
                    $standRate = '';
                    $totalRate = $request->total-137.85;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['stand'=>$standRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            
            default:
               
            break;
        }
        
    }
    public function bannerAddDeluxeD(Request $request)
    {
        $size = $request->size;
        switch ($size) {
           
            case '16.25':
                if($request->banner > 0)
                {
                    $bannerRate = (206.78)*$request->qty;
                    $bannerAddRate = 129.72;
                    $totalRate = $bannerAddRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['banner'=>$bannerAddRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (206.78)*$request->qty;
                    $bannerAddRate = '';
                    $totalRate = $request->total-129.72;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['banner'=>$bannerAddRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            
            default:
                
            break;
        }
        
    }
    public function laminationDeluxeD(Request $request)
    {
        $size = $request->size;
        switch ($size) {
            
            case '16.25':
                if($request->lamination > 0)
                {
                    $bannerRate = (206.78)*$request->qty;
                    $laminationRate = 14.99;
                    $totalRate = $laminationRate+$request->total;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['lamination'=>$laminationRate,'total'=>$totalRate,'final'=>$finalTotal]);
                } else {
                    $bannerRate = (206.78)*$request->qty;
                    $laminationRate = '';
                    $totalRate = $request->total-14.99;
                    $finalTotal = (($totalRate*100)/50);
                    return response()->json(['lamination'=>$laminationRate,'total'=>$totalRate,'final'=>$finalTotal]);
                }
            break;
            default:
                
            break;
        }
    }

    //deluxe double banner end
}
