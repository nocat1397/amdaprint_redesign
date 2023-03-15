<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class BcardController extends Controller
{
    // Custom business card
    public function cardPrice(Request $request)
    {
        $size = $request->size;
        $paper = $request->paper;
        $qty = $request->qty;
        $priceArray = array(str_replace('-',' ',$size),str_replace('-',' ',$paper),$qty);
        $product = Product::find($request->id);
        $priceCheck = $product->pricing[$request->key];
        foreach ($priceCheck as $key => $check) {
            $priceFind[] = $this->comparePriceArrays($check,$priceArray);
        }
        $price = array_values(array_filter(array_map('intval',$priceFind)));
        $cardRate = $price[0];
        $finalTotal = ($cardRate*100)/50;
        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
        
    }
    public function cardProperty(Request $request)
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
                $array1[] = (int)$percentageRate;
            }
        }
        // return response()->json([$actionFind,$percentageFind]);

        $percentageTotal = array_sum($array1);
        $cardRate = $percentageTotal+$baseRate;
        $finalTotal = ($cardRate*100)/50;
        return response()->json(['baseRate'=>$baseRate,'percentageRates'=>$array1, 'total'=>$finalTotal,'final'=>$cardRate]);
        
    }
    public function comparePriceArrays($array1, $array2) {
        $uniqueValues = array_unique(array_slice($array1, 0, 3));
        if ($uniqueValues === $array2) {
          return $array1[3];
        }
    }
    public function mainQty(Request $request)
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
                            $cardRate = 23.5;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '250':
                            $cardRate = 26.5;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '500':
                            $cardRate = 29.5;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '1000':
                            $cardRate = 33.5;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '2000':
                            $cardRate = 38.5;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '4000':
                            $cardRate = 59.5;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '5000':
                            $cardRate = 70.5;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '7000':
                            $cardRate = 92.5;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '10000':
                            $cardRate = 129.5;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                    }
                    break;
                    case '2':
                    switch ($qty) {
                        case '100':
                            $cardRate = 28.2;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '250':
                            $cardRate = 31.8;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '500':
                            $cardRate = 35.4;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '1000':
                            $cardRate = 40.2;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '2000':
                            $cardRate = 46.2;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '4000':
                            $cardRate = 71.4;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '5000':
                            $cardRate = 84.6;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '7000':
                            $cardRate = 111;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '10000':
                            $cardRate = 155.4;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                    }
                    break;
                    case '3':
                    switch ($qty) {
                        case '100':
                            $cardRate = 32.43;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '250':
                            $cardRate = 36.57;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '500':
                            $cardRate = 40.71;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '1000':
                            $cardRate = 46.23;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '2000':
                            $cardRate = 53.13;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '4000':
                            $cardRate = 82.11;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '5000':
                            $cardRate = 97.29;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '7000':
                            $cardRate = 127.65;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '10000':
                            $cardRate = 178.71;
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
                            $cardRate = 29.5;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '250':
                            $cardRate = 31.5;
		                    $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '500':
                            $cardRate = 33.5;
		                    $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '1000':
                            $cardRate = 38.5;
		                    $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '2000':
                            $cardRate = 49.5;
		                    $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '4000':
                            $cardRate = 68.5;
		                    $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '5000':
                            $cardRate = 87.5;
		                    $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '7000':
                            $cardRate = 113.5;
		                    $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '10000':
                            $cardRate = 149.5;
		                    $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                    }
                    break;
                    case '2':
                    switch ($qty) {
                        case '100':
                            $cardRate = 35.4;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '250':
                            $cardRate = 37.8;
		                    $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '500':
                            $cardRate = 40.2;
		                    $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '1000':
                            $cardRate = 46.2;
		                    $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '2000':
                            $cardRate = 59.4;
		                    $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '4000':
                            $cardRate = 82.2;
		                    $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '5000':
                            $cardRate = 105;
		                    $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '7000':
                            $cardRate = 136.2;
		                    $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '10000':
                            $cardRate = 179.4;
		                    $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                    }
                    break;
                    case '3':
                    switch ($qty) {
                        case '100':
                            $cardRate = 42.48;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '250':
                            $cardRate = 45.36;
		                    $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '500':
                            $cardRate = 48.24;
		                    $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '1000':
                            $cardRate = 55.44;
		                    $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '2000':
                            $cardRate = 71.28;
		                    $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '4000':
                            $cardRate = 98.64;
		                    $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '5000':
                            $cardRate = 126;
		                    $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '7000':
                            $cardRate = 163.44;
		                    $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '10000':
                            $cardRate = 215.28;
		                    $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                    }
                    break;
                }
            break;
        }
    }
    public function paperType(Request $request)
    {
        // $size = $request->size;
        // $paper = $request->paper;
        // $qty = $request->qty;
        // switch ($size) {
        //     case '7':
        //         switch ($paper) {
        //             case '1':
        //             switch ($qty) {
        //                 case '100':
        //                     $cardRate = 15.5;
		//                     $finalTotal = ($cardRate*100)/50;
        //                 return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
        //                 break;
        //                 case '250':
        //                     $cardRate = 19.5;
		//                     $finalTotal = ($cardRate*100)/50;
        //                 return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
        //                 break;
        //                 case '500':
        //                     $cardRate = 26.5;
		//                     $finalTotal = ($cardRate*100)/50;
        //                 return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
        //                 break;
        //                 case '1000':
        //                     $cardRate = 28.5;
		//                     $finalTotal = ($cardRate*100)/50;
        //                 return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
        //                 break;
        //             }
        //             break;
        //         }
        //     break;
        //     case '7.17':
        //         switch ($paper) {
        //             case '1':
        //             switch ($qty) {
        //                 case '100':
        //                     $cardRate = 16.3;
		//                     $finalTotal = ($cardRate*100)/50;
        //                 return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
        //                 break;
        //                 case '250':
        //                     $cardRate = 20.2;
		//                     $finalTotal = ($cardRate*100)/50;
        //                     return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
        //                 break;
        //                 case '500':
        //                     $cardRate = 28.3;
		//                     $finalTotal = ($cardRate*100)/50;
        //                     return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
        //                 break;
        //                 case '1000':
        //                     $cardRate = 29.5;
		//                     $finalTotal = ($cardRate*100)/50;
        //                     return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
        //                 break;
        //             }
        //             break;
        //         }
        //     break;
        // }
        $size = $request->size;
        $paper = $request->paper;
        $qty = $request->qty;
        switch ($size) {
            case '7':
                switch ($paper) {
                    case '1':
                    switch ($qty) {
                        case '100':
                            $cardRate = 23.5;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '250':
                            $cardRate = 26.5;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '500':
                            $cardRate = 29.5;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '1000':
                            $cardRate = 33.5;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '2000':
                            $cardRate = 38.5;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '4000':
                            $cardRate = 59.5;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '5000':
                            $cardRate = 70.5;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '7000':
                            $cardRate = 92.5;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '10000':
                            $cardRate = 129.5;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                    }
                    break;
                    case '2':
                    switch ($qty) {
                        case '100':
                            $cardRate = 28.2;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '250':
                            $cardRate = 31.8;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '500':
                            $cardRate = 35.4;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '1000':
                            $cardRate = 40.2;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '2000':
                            $cardRate = 46.2;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '4000':
                            $cardRate = 71.4;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '5000':
                            $cardRate = 84.6;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '7000':
                            $cardRate = 111;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '10000':
                            $cardRate = 155.4;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                    }
                    break;
                    case '3':
                    switch ($qty) {
                        case '100':
                            $cardRate = 32.43;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '250':
                            $cardRate = 36.57;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '500':
                            $cardRate = 40.71;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '1000':
                            $cardRate = 46.23;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '2000':
                            $cardRate = 53.13;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '4000':
                            $cardRate = 82.11;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '5000':
                            $cardRate = 97.29;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '7000':
                            $cardRate = 127.65;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '10000':
                            $cardRate = 178.71;
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
                            $cardRate = 29.5;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '250':
                            $cardRate = 31.5;
		                    $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '500':
                            $cardRate = 33.5;
		                    $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '1000':
                            $cardRate = 38.5;
		                    $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '2000':
                            $cardRate = 49.5;
		                    $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '4000':
                            $cardRate = 68.5;
		                    $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '5000':
                            $cardRate = 87.5;
		                    $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '7000':
                            $cardRate = 113.5;
		                    $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '10000':
                            $cardRate = 149.5;
		                    $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                    }
                    break;
                    case '2':
                    switch ($qty) {
                        case '100':
                            $cardRate = 35.4;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '250':
                            $cardRate = 37.8;
		                    $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '500':
                            $cardRate = 40.2;
		                    $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '1000':
                            $cardRate = 46.2;
		                    $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '2000':
                            $cardRate = 59.4;
		                    $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '4000':
                            $cardRate = 82.2;
		                    $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '5000':
                            $cardRate = 105;
		                    $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '7000':
                            $cardRate = 136.2;
		                    $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '10000':
                            $cardRate = 179.4;
		                    $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                    }
                    break;
                    case '3':
                    switch ($qty) {
                        case '100':
                            $cardRate = 42.48;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '250':
                            $cardRate = 45.36;
		                    $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '500':
                            $cardRate = 48.24;
		                    $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '1000':
                            $cardRate = 55.44;
		                    $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '2000':
                            $cardRate = 71.28;
		                    $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '4000':
                            $cardRate = 98.64;
		                    $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '5000':
                            $cardRate = 126;
		                    $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '7000':
                            $cardRate = 163.44;
		                    $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '10000':
                            $cardRate = 215.28;
		                    $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
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
            case '7':
                switch ($paper) {
                    case '1':
                    switch ($qty) {
                        case '100':
                            if($printSide > 0){
                                $printRate = (23.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (23.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '250':
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
                        case '500':
                            if($printSide > 0){
                                $printRate = (29.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (29.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '1000':
                            if($printSide > 0){
                                $printRate = (33.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (33.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '2000':
                            if($printSide > 0){
                                $printRate = (38.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (38.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '4000':
                            if($printSide > 0){
                                $printRate = (59.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (59.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '5000':
                            if($printSide > 0){
                                $printRate = (70.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (70.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '7000':
                            if($printSide > 0){
                                $printRate = (92.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (92.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '10000':
                            if($printSide > 0){
                                $printRate = (129.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (129.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                    }
                    break;
                    case '2':
                    switch ($qty) {
                        case '100':
                            if($printSide > 0){
                                $printRate = (28.2*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (28.2*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '250':
                            if($printSide > 0){
                                $printRate = (31.8*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (31.8*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '500':
                            if($printSide > 0){
                                $printRate = (35.4*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (35.4*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '1000':
                            if($printSide > 0){
                                $printRate = (40.2*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (40.2*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '2000':
                            if($printSide > 0){
                                $printRate = (46.2*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (46.2*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '4000':
                            if($printSide > 0){
                                $printRate = (71.4*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (71.4*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '5000':
                            if($printSide > 0){
                                $printRate = (84.6*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (84.6*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '7000':
                            if($printSide > 0){
                                $printRate = (111*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (111*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '10000':
                            if($printSide > 0){
                                $printRate = (155.4*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (155.4*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                    }
                    break;
                    case '3':
                    switch ($qty) {
                        case '100':
                            if($printSide > 0){
                                $printRate = (32.43*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (32.43*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '250':
                            if($printSide > 0){
                                $printRate = (36.57*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (36.57*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '500':
                            if($printSide > 0){
                                $printRate = (40.71*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (40.71*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '1000':
                            if($printSide > 0){
                                $printRate = (46.23*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (46.23*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '2000':
                            if($printSide > 0){
                                $printRate = (53.13*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (53.13*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '4000':
                            if($printSide > 0){
                                $printRate = (82.11*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (82.11*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '5000':
                            if($printSide > 0){
                                $printRate = (97.29*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (97.29*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '7000':
                            if($printSide > 0){
                                $printRate = (127.65*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (127.65*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '10000':
                            if($printSide > 0){
                                $printRate = (178.71*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (178.71*40)/100;
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
                                $printRate = (29.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (29.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '250':
                            if($printSide > 0){
                                $printRate = (31.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (31.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '500':
                            if($printSide > 0){
                                $printRate = (33.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (33.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '1000':
                            if($printSide > 0){
                                $printRate = (38.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (38.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '2000':
                            if($printSide > 0){
                                $printRate = (49.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (49.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '4000':
                            if($printSide > 0){
                                $printRate = (68.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (68.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '5000':
                            if($printSide > 0){
                                $printRate = (87.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (87.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '7000':
                            if($printSide > 0){
                                $printRate = (113.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (113.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '10000':
                            if($printSide > 0){
                                $printRate = (149.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (149.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                    }
                    break;
                    case '2':
                    switch ($qty) {
                        case '100':
                            if($printSide > 0){
                                $printRate = (35.4*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (35.4*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '250':
                            if($printSide > 0){
                                $printRate = (37.8*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (37.8*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '500':
                            if($printSide > 0){
                                $printRate = (40.2*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (40.2*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '1000':
                            if($printSide > 0){
                                $printRate = (46.2*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (46.2*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '2000':
                            if($printSide > 0){
                                $printRate = (59.4*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (59.4*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '4000':
                            if($printSide > 0){
                                $printRate = (82.2*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (82.2*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '5000':
                            if($printSide > 0){
                                $printRate = (105*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (105*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '7000':
                            if($printSide > 0){
                                $printRate = (136.2*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (136.2*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '10000':
                            if($printSide > 0){
                                $printRate = (179.4*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (179.4*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                    }
                    break;
                    case '3':
                    switch ($qty) {
                        case '100':
                            if($printSide > 0){
                                $printRate = (42.48*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (42.48*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '250':
                            if($printSide > 0){
                                $printRate = (45.36*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (45.36*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '500':
                            if($printSide > 0){
                                $printRate = (48.24*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (48.24*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '1000':
                            if($printSide > 0){
                                $printRate = (55.44*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (55.44*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '2000':
                            if($printSide > 0){
                                $printRate = (71.28*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (71.28*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '4000':
                            if($printSide > 0){
                                $printRate = (98.64*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (98.64*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '5000':
                            if($printSide > 0){
                                $printRate = (126*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (126*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '7000':
                            if($printSide > 0){
                                $printRate = (163.44*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (163.44*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '10000':
                            if($printSide > 0){
                                $printRate = (215.28*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (215.28*40)/100;
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
    public function finishType(Request $request)
    {
        $size = $request->size;
        $paper = $request->paper;
        $qty = $request->qty;
        $printSide = $request->printside;
        $finishType = $request->finishtype;
        $total = $request->total;

        switch ($size) {
            case '7':
                switch ($paper) {
                    case '1':
                    switch ($qty) {
                        case '100':
                            if($finishType > 0){
                                $finishRate = (23.5*15)/100;
                                $cardRate = $total+$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishRate = (23.5*15)/100;
                                $cardRate = $total-$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '250':
                            if($finishType > 0){
                                $finishRate = (26.5*15)/100;
                                $cardRate = $total+$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishRate = (26.5*15)/100;
                                $cardRate = $total-$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '500':
                            if($finishType > 0){
                                $finishRate = (29.5*15)/100;
                                $cardRate = $total+$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishRate = (29.5*15)/100;
                                $cardRate = $total-$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '1000':
                            if($finishType > 0){
                                $finishRate = (33.5*15)/100;
                                $cardRate = $total+$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishRate = (33.5*15)/100;
                                $cardRate = $total-$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '2000':
                            if($finishType > 0){
                                $finishRate = (38.5*15)/100;
                                $cardRate = $total+$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishRate = (38.5*15)/100;
                                $cardRate = $total-$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '4000':
                            if($finishType > 0){
                                $finishRate = (59.5*15)/100;
                                $cardRate = $total+$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishRate = (59.5*15)/100;
                                $cardRate = $total-$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '5000':
                            if($finishType > 0){
                                $finishRate = (70.5*15)/100;
                                $cardRate = $total+$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishRate = (70.5*15)/100;
                                $cardRate = $total-$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '7000':
                            if($finishType > 0){
                                $finishRate = (92.5*15)/100;
                                $cardRate = $total+$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishRate = (92.5*15)/100;
                                $cardRate = $total-$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '10000':
                            if($finishType > 0){
                                $finishRate = (129.5*15)/100;
                                $cardRate = $total+$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishRate = (129.5*15)/100;
                                $cardRate = $total-$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                    }
                    break;
                    case '2':
                    switch ($qty) {
                        case '100':
                            if($finishType > 0){
                                $finishRate = (28.2*15)/100;
                                $cardRate = $total+$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishRate = (28.2*15)/100;
                                $cardRate = $total-$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '250':
                            if($finishType > 0){
                                $finishRate = (31.8*15)/100;
                                $cardRate = $total+$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishRate = (31.8*15)/100;
                                $cardRate = $total-$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '500':
                            if($finishType > 0){
                                $finishRate = (35.4*15)/100;
                                $cardRate = $total+$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishRate = (35.4*15)/100;
                                $cardRate = $total-$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '1000':
                            if($finishType > 0){
                                $finishRate = (40.2*15)/100;
                                $cardRate = $total+$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishRate = (40.2*15)/100;
                                $cardRate = $total-$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '2000':
                            if($finishType > 0){
                                $finishRate = (46.2*15)/100;
                                $cardRate = $total+$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishRate = (46.2*15)/100;
                                $cardRate = $total-$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '4000':
                            if($finishType > 0){
                                $finishRate = (71.4*15)/100;
                                $cardRate = $total+$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishRate = (71.4*15)/100;
                                $cardRate = $total-$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '5000':
                            if($finishType > 0){
                                $finishRate = (84.6*15)/100;
                                $cardRate = $total+$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishRate = (84.6*15)/100;
                                $cardRate = $total-$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '7000':
                            if($finishType > 0){
                                $finishRate = (111*15)/100;
                                $cardRate = $total+$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishRate = (111*15)/100;
                                $cardRate = $total-$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '10000':
                            if($finishType > 0){
                                $finishRate = (155.4*15)/100;
                                $cardRate = $total+$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishRate = (155.4*15)/100;
                                $cardRate = $total-$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                    }
                    break;
                    case '3':
                    switch ($qty) {
                        case '100':
                            if($finishType > 0){
                                $finishRate = (32.43*15)/100;
                                $cardRate = $total+$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishRate = (32.43*15)/100;
                                $cardRate = $total-$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '250':
                            if($finishType > 0){
                                $finishRate = (36.57*15)/100;
                                $cardRate = $total+$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishRate = (36.57*15)/100;
                                $cardRate = $total-$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '500':
                            if($finishType > 0){
                                $finishRate = (40.71*15)/100;
                                $cardRate = $total+$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishRate = (40.71*15)/100;
                                $cardRate = $total-$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '1000':
                            if($finishType > 0){
                                $finishRate = (46.23*15)/100;
                                $cardRate = $total+$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishRate = (46.23*15)/100;
                                $cardRate = $total-$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '2000':
                            if($finishType > 0){
                                $finishRate = (53.13*15)/100;
                                $cardRate = $total+$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishRate = (53.13*15)/100;
                                $cardRate = $total-$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '4000':
                            if($finishType > 0){
                                $finishRate = (82.11*15)/100;
                                $cardRate = $total+$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishRate = (82.11*15)/100;
                                $cardRate = $total-$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '5000':
                            if($finishType > 0){
                                $finishRate = (97.29*15)/100;
                                $cardRate = $total+$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishRate = (97.29*15)/100;
                                $cardRate = $total-$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '7000':
                            if($finishType > 0){
                                $finishRate = (127.65*15)/100;
                                $cardRate = $total+$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishRate = (127.65*15)/100;
                                $cardRate = $total-$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '10000':
                            if($finishType > 0){
                                $finishRate = (178.71*15)/100;
                                $cardRate = $total+$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishRate = (178.71*15)/100;
                                $cardRate = $total-$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
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
                            if($finishType > 0){
                                $finishRate = (29.5*15)/100;
                                $cardRate = $total+$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishRate = (29.5*15)/100;
                                $cardRate = $total-$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '250':
                            if($finishType > 0){
                                $finishRate = (31.5*15)/100;
                                $cardRate = $total+$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishRate = (31.5*15)/100;
                                $cardRate = $total-$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '500':
                            if($finishType > 0){
                                $finishRate = (33.5*15)/100;
                                $cardRate = $total+$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishRate = (33.5*15)/100;
                                $cardRate = $total-$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '1000':
                            if($finishType > 0){
                                $finishRate = (38.5*15)/100;
                                $cardRate = $total+$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishRate = (38.5*15)/100;
                                $cardRate = $total-$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '2000':
                            if($finishType > 0){
                                $finishRate = (49.5*15)/100;
                                $cardRate = $total+$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishRate = (49.5*15)/100;
                                $cardRate = $total-$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '4000':
                            if($finishType > 0){
                                $finishRate = (68.5*15)/100;
                                $cardRate = $total+$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishRate = (68.5*15)/100;
                                $cardRate = $total-$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '5000':
                            if($finishType > 0){
                                $finishRate = (87.5*15)/100;
                                $cardRate = $total+$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishRate = (87.5*15)/100;
                                $cardRate = $total-$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '7000':
                            if($finishType > 0){
                                $finishRate = (113.5*15)/100;
                                $cardRate = $total+$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishRate = (113.5*15)/100;
                                $cardRate = $total-$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '10000':
                            if($finishType > 0){
                                $finishRate = (149.5*15)/100;
                                $cardRate = $total+$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishRate = (149.5*15)/100;
                                $cardRate = $total-$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                    }
                    break;
                    case '2':
                    switch ($qty) {
                        case '100':
                            if($finishType > 0){
                                $finishRate = (35.4*15)/100;
                                $cardRate = $total+$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishRate = (35.4*15)/100;
                                $cardRate = $total-$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '250':
                            if($finishType > 0){
                                $finishRate = (37.8*15)/100;
                                $cardRate = $total+$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishRate = (37.8*15)/100;
                                $cardRate = $total-$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '500':
                            if($finishType > 0){
                                $finishRate = (40.2*15)/100;
                                $cardRate = $total+$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishRate = (40.2*15)/100;
                                $cardRate = $total-$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '1000':
                            if($finishType > 0){
                                $finishRate = (46.2*15)/100;
                                $cardRate = $total+$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishRate = (46.2*15)/100;
                                $cardRate = $total-$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '2000':
                            if($finishType > 0){
                                $finishRate = (59.4*15)/100;
                                $cardRate = $total+$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishRate = (59.4*15)/100;
                                $cardRate = $total-$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '4000':
                            if($finishType > 0){
                                $finishRate = (82.2*15)/100;
                                $cardRate = $total+$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishRate = (82.2*15)/100;
                                $cardRate = $total-$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '5000':
                            if($finishType > 0){
                                $finishRate = (105*15)/100;
                                $cardRate = $total+$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishRate = (105*15)/100;
                                $cardRate = $total-$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '7000':
                            if($finishType > 0){
                                $finishRate = (136.2*15)/100;
                                $cardRate = $total+$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishRate = (136.2*15)/100;
                                $cardRate = $total-$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '10000':
                            if($finishType > 0){
                                $finishRate = (179.4*15)/100;
                                $cardRate = $total+$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishRate = (179.4*15)/100;
                                $cardRate = $total-$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                    }
                    break;
                    case '3':
                    switch ($qty) {
                        case '100':
                            if($finishType > 0){
                                $finishRate = (42.48*15)/100;
                                $cardRate = $total+$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishRate = (42.48*15)/100;
                                $cardRate = $total-$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '250':
                            if($finishType > 0){
                                $finishRate = (45.36*15)/100;
                                $cardRate = $total+$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishRate = (45.36*15)/100;
                                $cardRate = $total-$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '500':
                            if($finishType > 0){
                                $finishRate = (48.24*15)/100;
                                $cardRate = $total+$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishRate = (48.24*15)/100;
                                $cardRate = $total-$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '1000':
                            if($finishType > 0){
                                $finishRate = (55.44*15)/100;
                                $cardRate = $total+$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishRate = (55.44*15)/100;
                                $cardRate = $total-$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '2000':
                            if($finishType > 0){
                                $finishRate = (71.28*15)/100;
                                $cardRate = $total+$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishRate = (71.28*15)/100;
                                $cardRate = $total-$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '4000':
                            if($finishType > 0){
                                $finishRate = (98.64*15)/100;
                                $cardRate = $total+$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishRate = (98.64*15)/100;
                                $cardRate = $total-$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '5000':
                            if($finishType > 0){
                                $finishRate = (126*15)/100;
                                $cardRate = $total+$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishRate = (126*15)/100;
                                $cardRate = $total-$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '7000':
                            if($finishType > 0){
                                $finishRate = (163.44*15)/100;
                                $cardRate = $total+$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishRate = (163.44*15)/100;
                                $cardRate = $total-$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '10000':
                            if($finishType > 0){
                                $finishRate = (215.28*15)/100;
                                $cardRate = $total+$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishRate = (215.28*15)/100;
                                $cardRate = $total-$finishRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                    }
                    break;
                }
            break;
        }
    }
    public function rounded(Request $request)
    {
        $size = $request->size;
        $paper = $request->paper;
        $qty = $request->qty;
        $rounded = $request->rounded;
        $total = $request->total;
        // return $total;
        // exit;
        // switch ($size) {
        //     case '7':
        //         switch ($paper) {
        //             case '1':
        //             switch ($qty) {
        //                 case '100':
        //                     if($rounded > 0){
        //                         $roundedRate = (15.5*20)/100;
        //                         $cardRate = $total+$roundedRate;
        //                         $finalTotal = ($cardRate*100)/50;
        //                         return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
        //                     } else {
        //                         $roundedRate = (15.5*20)/100;
        //                         $cardRate = $total-$roundedRate;
        //                         $finalTotal = ($cardRate*100)/50;
        //                         return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
        //                     }
        //                 break;
        //                 case '250':
        //                     if($rounded > 0){
        //                         $roundedRate = (19.5*20)/100;
        //                         $cardRate = $total+$roundedRate;
        //                         $finalTotal = ($cardRate*100)/50;
        //                         return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
        //                     } else {
        //                         $roundedRate = (19.5*20)/100;
        //                         $cardRate = $total-$roundedRate;
        //                         $finalTotal = ($cardRate*100)/50;
        //                         return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
        //                     }
        //                 break;
        //                 case '500':
        //                     if($rounded > 0){
        //                         $roundedRate = (26.5*20)/100;
        //                         $cardRate = $total+$roundedRate;
        //                         $finalTotal = ($cardRate*100)/50;
        //                         return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
        //                     } else {
        //                         $roundedRate = (26.5*20)/100;
        //                         $cardRate = $total-$roundedRate;
        //                         $finalTotal = ($cardRate*100)/50;
        //                         return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
        //                     }
        //                 break;
        //                 case '1000':
        //                     if($rounded > 0){
        //                         $roundedRate = (28.5*20)/100;
        //                         $cardRate = $total+$roundedRate;
        //                         $finalTotal = ($cardRate*100)/50;
        //                         return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
        //                     } else {
        //                         $roundedRate = (28.5*20)/100;
        //                         $cardRate = $total-$roundedRate;
        //                         $finalTotal = ($cardRate*100)/50;
        //                         return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
        //                     }
        //                 break;
        //             }
        //             break;
        //         }
        //     break;
        //     case '7.17':
        //         switch ($paper) {
        //             case '1':
        //             switch ($qty) {
        //                 case '100':
        //                     if($rounded > 0){
        //                         $roundedRate = (16.3*20)/100;
        //                         $cardRate = $total+$roundedRate;
        //                         $finalTotal = ($cardRate*100)/50;
        //                         return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
        //                     } else {
        //                         $roundedRate = (16.3*20)/100;
        //                         $cardRate = $total-$roundedRate;
        //                         $finalTotal = ($cardRate*100)/50;
        //                         return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
        //                     }
        //                 break;
        //                 case '250':
        //                     if($rounded > 0){
        //                         $roundedRate = (20.2*20)/100;
        //                         $cardRate = $total+$roundedRate;
        //                         $finalTotal = ($cardRate*100)/50;
        //                         return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
        //                     } else {
        //                         $roundedRate = (20.2*20)/100;
        //                         $cardRate = $total-$roundedRate;
        //                         $finalTotal = ($cardRate*100)/50;
        //                         return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
        //                     }
        //                 break;
        //                 case '500':
        //                     if($rounded > 0){
        //                         $roundedRate = (28.3*20)/100;
        //                         $cardRate = $total+$roundedRate;
        //                         $finalTotal = ($cardRate*100)/50;
        //                         return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
        //                     } else {
        //                         $roundedRate = (28.3*20)/100;
        //                         $cardRate = $total-$roundedRate;
        //                         $finalTotal = ($cardRate*100)/50;
        //                         return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
        //                     }
        //                 break;
        //                 case '1000':
        //                     if($rounded > 0){
        //                         $roundedRate = (29.5*20)/100;
        //                         $cardRate = $total+$roundedRate;
        //                         $finalTotal = ($cardRate*100)/50;
        //                         return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
        //                     } else {
        //                         $roundedRate = (29.5*20)/100;
        //                         $cardRate = $total-$roundedRate;
        //                         $finalTotal = ($cardRate*100)/50;
        //                         return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
        //                     }
        //                 break;
        //             }
        //             break;
        //         }
        //     break;
        // }
        switch ($size) {
            case '7':
                switch ($paper) {
                    case '1':
                    switch ($qty) {
                        case '100':
                            if($rounded > 0){
                                $roundedRate = (23.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (23.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '250':
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
                        case '500':
                            if($rounded > 0){
                                $roundedRate = (29.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (29.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '1000':
                            if($rounded > 0){
                                $roundedRate = (33.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (33.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '2000':
                            if($rounded > 0){
                                $roundedRate = (38.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (38.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '4000':
                            if($rounded > 0){
                                $roundedRate = (59.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (59.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '5000':
                            if($rounded > 0){
                                $roundedRate = (70.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (70.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '7000':
                            if($rounded > 0){
                                $roundedRate = (92.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (92.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '10000':
                            if($rounded > 0){
                                $roundedRate = (129.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (129.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                    }
                    break;
                    case '2':
                    switch ($qty) {
                        case '100':
                            if($rounded > 0){
                                $roundedRate = (28.2*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (28.2*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '250':
                            if($rounded > 0){
                                $roundedRate = (31.8*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (31.8*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '500':
                            if($rounded > 0){
                                $roundedRate = (35.4*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (35.4*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '1000':
                            if($rounded > 0){
                                $roundedRate = (40.2*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (40.2*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '2000':
                            if($rounded > 0){
                                $roundedRate = (46.2*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (46.2*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '4000':
                            if($rounded > 0){
                                $roundedRate = (71.4*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (71.4*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '5000':
                            if($rounded > 0){
                                $roundedRate = (84.6*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (84.6*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '7000':
                            if($rounded > 0){
                                $roundedRate = (111*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (111*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '10000':
                            if($rounded > 0){
                                $roundedRate = (155.4*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (155.4*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                    }
                    break;
                    case '3':
                    switch ($qty) {
                        case '100':
                            if($rounded > 0){
                                $roundedRate = (32.43*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (32.43*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '250':
                            if($rounded > 0){
                                $roundedRate = (36.57*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (36.57*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '500':
                            if($rounded > 0){
                                $roundedRate = (40.71*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (40.71*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '1000':
                            if($rounded > 0){
                                $roundedRate = (46.23*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (46.23*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '2000':
                            if($rounded > 0){
                                $roundedRate = (53.13*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (53.13*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '4000':
                            if($rounded > 0){
                                $roundedRate = (82.11*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (82.11*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '5000':
                            if($rounded > 0){
                                $roundedRate = (97.29*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (97.29*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '7000':
                            if($rounded > 0){
                                $roundedRate = (127.65*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (127.65*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '10000':
                            if($rounded > 0){
                                $roundedRate = (178.71*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (178.71*20)/100;
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
                                $roundedRate = (29.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (29.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '250':
                            if($rounded > 0){
                                $roundedRate = (31.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (31.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '500':
                            if($rounded > 0){
                                $roundedRate = (33.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (33.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '1000':
                            if($rounded > 0){
                                $roundedRate = (38.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (38.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '2000':
                            if($rounded > 0){
                                $roundedRate = (49.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (49.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '4000':
                            if($rounded > 0){
                                $roundedRate = (68.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (68.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '5000':
                            if($rounded > 0){
                                $roundedRate = (87.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (87.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '7000':
                            if($rounded > 0){
                                $roundedRate = (113.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (113.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '10000':
                            if($rounded > 0){
                                $roundedRate = (149.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (149.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                    }
                    break;
                    case '2':
                    switch ($qty) {
                        case '100':
                            if($rounded > 0){
                                $roundedRate = (35.4*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (35.4*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '250':
                            if($rounded > 0){
                                $roundedRate = (37.8*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (37.8*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '500':
                            if($rounded > 0){
                                $roundedRate = (40.2*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (40.2*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '1000':
                            if($rounded > 0){
                                $roundedRate = (46.2*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (46.2*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '2000':
                            if($rounded > 0){
                                $roundedRate = (59.4*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (59.4*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '4000':
                            if($rounded > 0){
                                $roundedRate = (82.2*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (82.2*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '5000':
                            if($rounded > 0){
                                $roundedRate = (105*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (105*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '7000':
                            if($rounded > 0){
                                $roundedRate = (136.2*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (136.2*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '10000':
                            if($rounded > 0){
                                $roundedRate = (179.4*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (179.4*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                    }
                    break;
                    case '3':
                    switch ($qty) {
                        case '100':
                            if($rounded > 0){
                                $roundedRate = (42.48*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (42.48*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '250':
                            if($rounded > 0){
                                $roundedRate = (45.36*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (45.36*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '500':
                            if($rounded > 0){
                                $roundedRate = (48.24*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (48.24*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '1000':
                            if($rounded > 0){
                                $roundedRate = (55.44*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (55.44*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '2000':
                            if($rounded > 0){
                                $roundedRate = (71.28*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (71.28*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '4000':
                            if($rounded > 0){
                                $roundedRate = (98.64*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (98.64*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '5000':
                            if($rounded > 0){
                                $roundedRate = (126*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (126*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '7000':
                            if($rounded > 0){
                                $roundedRate = (163.44*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (163.44*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '10000':
                            if($rounded > 0){
                                $roundedRate = (215.28*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (215.28*20)/100;
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
    
    // Slim business card
    public function slimcardSize(Request $request)
    {
        $size = $request->size;
        $paper = $request->paper;
        switch ($size) {
            case '6.13':
                switch ($paper) {
                    case '1':
                        $cardRate = 20.9;
                        $finalTotal = ($cardRate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                    break;
                    case '2':
                        $cardRate = 25.08;
                        $finalTotal = ($cardRate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                    break;
                    case '3':
                        $cardRate = 28.85;
                        $finalTotal = ($cardRate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                    break;
                    default:
                        $cardRate = 20.9;
                        $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                    break;
                }
            break;
        }
        
    }
    public function slimmainQty(Request $request)
    {
        $size = $request->size;
        $paper = $request->paper;
        $qty = $request->qty;
        switch ($size) {
            case '6.13':
                switch ($paper) {
                    case '1':
                    switch ($qty) {
                        case '100':
                            $cardRate = 20.9;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '250':
                            $cardRate = 24.5;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '500':
                            $cardRate = 26.9;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '1000':
                            $cardRate = 28.5;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '2000':
                            $cardRate = 39.9;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '4000':
                            $cardRate = 59.9;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '5000':
                            $cardRate = 69.5;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '7000':
                            $cardRate = 91.5;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '10000':
                            $cardRate = 125.5;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                    }
                    break;
                    case '2':
                    switch ($qty) {
                        case '100':
                            $cardRate = 25.08;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '250':
                            $cardRate = 29.4;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '500':
                            $cardRate = 32.28;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '1000':
                            $cardRate = 34.2;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '2000':
                            $cardRate = 47.88;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '4000':
                            $cardRate = 71.88;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '5000':
                            $cardRate = 83.4;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '7000':
                            $cardRate = 109.8;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '10000':
                            $cardRate = 150.6;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                    }
                    break;
                    case '3':
                    switch ($qty) {
                        case '100':
                            $cardRate = 28.85;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '250':
                            $cardRate = 33.8;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '500':
                            $cardRate = 37.1;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '1000':
                            $cardRate = 39.5;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '2000':
                            $cardRate = 55.5;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '4000':
                            $cardRate = 82.5;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '5000':
                            $cardRate = 95.9;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '7000':
                            $cardRate = 125.9;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '10000':
                            $cardRate = 174.5;
		                    $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                    }
                    break;
                }
            break;
        }
    }
    public function slimpaperType(Request $request)
    {
        $size = $request->size;
        $paper = $request->paper;
        $qty = $request->qty;
        switch ($size) {
            case '6.13':
                switch ($paper) {
                    case '1':
                        switch ($qty) {
                            case '100':
                                $cardRate = 20.9;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '250':
                                $cardRate = 24.5;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '500':
                                $cardRate = 26.9;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '1000':
                                $cardRate = 28.5;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '2000':
                                $cardRate = 39.9;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '4000':
                                $cardRate = 59.9;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '5000':
                                $cardRate = 69.5;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '7000':
                                $cardRate = 91.5;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '10000':
                                $cardRate = 125.5;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                        }
                        break;
                        case '2':
                        switch ($qty) {
                            case '100':
                                $cardRate = 25.08;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '250':
                                $cardRate = 29.4;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '500':
                                $cardRate = 32.28;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '1000':
                                $cardRate = 34.2;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '2000':
                                $cardRate = 47.88;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '4000':
                                $cardRate = 71.88;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '5000':
                                $cardRate = 83.4;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '7000':
                                $cardRate = 109.8;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '10000':
                                $cardRate = 150.6;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                        }
                        break;
                        case '3':
                        switch ($qty) {
                            case '100':
                                $cardRate = 28.85;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '250':
                                $cardRate = 33.8;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '500':
                                $cardRate = 37.1;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '1000':
                                $cardRate = 39.5;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '2000':
                                $cardRate = 55.5;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '4000':
                                $cardRate = 82.5;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '5000':
                                $cardRate = 95.9;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '7000':
                                $cardRate = 125.9;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                            case '10000':
                                $cardRate = 174.5;
                                $finalTotal = ($cardRate*100)/50;
                            return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                            break;
                        }
                        break;
                }
            break;
        }
    }
    public function slimprintSide(Request $request)
    {
        $size = $request->size;
        $paper = $request->paper;
        $qty = $request->qty;
        $printSide = $request->printside;
        $total = $request->total;
        // return $total;
        // exit;
        switch ($size) {
            case '6.13':
                switch ($paper) {
                    case '1':
                    switch ($qty) {
                        case '100':
                            if($printSide > 0){
                                $printRate = (20.9*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (20.9*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '250':
                            if($printSide > 0){
                                $printRate = (24.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (24.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '500':
                            if($printSide > 0){
                                $printRate = (26.9*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (26.9*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '1000':
                            if($printSide > 0){
                                $printRate = (28.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (28.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '2000':
                            if($printSide > 0){
                                $printRate = (39.9*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (39.9*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '4000':
                            if($printSide > 0){
                                $printRate = (59.9*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (59.9*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '5000':
                            if($printSide > 0){
                                $printRate = (69.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (69.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '7000':
                            if($printSide > 0){
                                $printRate = (91.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (91.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '10000':
                            if($printSide > 0){
                                $printRate = (125.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (125.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                    }
                    break;
                    case '2':
                    switch ($qty) {
                        case '100':
                            if($printSide > 0){
                                $printRate = (25.08*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (25.08*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '250':
                            if($printSide > 0){
                                $printRate = (29.4*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (29.4*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '500':
                            if($printSide > 0){
                                $printRate = (32.28*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (32.28*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '1000':
                            if($printSide > 0){
                                $printRate = (34.2*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (34.2*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '2000':
                            if($printSide > 0){
                                $printRate = (47.88*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (47.88*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '4000':
                            if($printSide > 0){
                                $printRate = (71.88*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (71.88*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '5000':
                            if($printSide > 0){
                                $printRate = (83.4*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (83.4*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '7000':
                            if($printSide > 0){
                                $printRate = (109.8*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (109.8*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '10000':
                            if($printSide > 0){
                                $printRate = (150.6*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (150.6*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                    }
                    break;
                    case '3':
                    switch ($qty) {
                        case '100':
                            if($printSide > 0){
                                $printRate = (28.85*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (28.85*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '250':
                            if($printSide > 0){
                                $printRate = (33.8*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (33.8*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '500':
                            if($printSide > 0){
                                $printRate = (37.1*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (37.1*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '1000':
                            if($printSide > 0){
                                $printRate = (39.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (39.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '2000':
                            if($printSide > 0){
                                $printRate = (55.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (55.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '4000':
                            if($printSide > 0){
                                $printRate = (82.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (82.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '5000':
                            if($printSide > 0){
                                $printRate = (95.9*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (95.9*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '7000':
                            if($printSide > 0){
                                $printRate = (125.9*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (125.9*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '10000':
                            if($printSide > 0){
                                $printRate = (174.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (174.5*40)/100;
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
    public function slimrounded(Request $request)
    {
        $size = $request->size;
        $paper = $request->paper;
        $qty = $request->qty;
        $rounded = $request->rounded;
        $total = $request->total;
        switch ($size) {
            case '6.13':
                switch ($paper) {
                    case '1':
                    switch ($qty) {
                        case '100':
                            if($rounded > 0){
                                $roundedRate = (20.9*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (20.9*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '250':
                            if($rounded > 0){
                                $roundedRate = (24.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (24.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '500':
                            if($rounded > 0){
                                $roundedRate = (26.9*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (26.9*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '1000':
                            if($rounded > 0){
                                $roundedRate = (28.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (28.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '2000':
                            if($rounded > 0){
                                $roundedRate = (39.9*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (39.9*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '4000':
                            if($rounded > 0){
                                $roundedRate = (59.9*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (59.9*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '5000':
                            if($rounded > 0){
                                $roundedRate = (69.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (69.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '7000':
                            if($rounded > 0){
                                $roundedRate = (91.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (91.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '10000':
                            if($rounded > 0){
                                $roundedRate = (125.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (125.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                    }
                    break;
                    case '2':
                    switch ($qty) {
                        case '100':
                            if($rounded > 0){
                                $roundedRate = (25.08*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (25.08*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '250':
                            if($rounded > 0){
                                $roundedRate = (29.4*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (29.4*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '500':
                            if($rounded > 0){
                                $roundedRate = (32.28*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (32.28*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '1000':
                            if($rounded > 0){
                                $roundedRate = (34.2*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (34.2*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '2000':
                            if($rounded > 0){
                                $roundedRate = (47.88*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (47.88*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '4000':
                            if($rounded > 0){
                                $roundedRate = (71.88*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (71.88*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '5000':
                            if($rounded > 0){
                                $roundedRate = (83.4*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (83.4*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '7000':
                            if($rounded > 0){
                                $roundedRate = (109.8*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (109.8*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '10000':
                            if($rounded > 0){
                                $roundedRate = (150.6*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (150.6*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                    }
                    break;
                    case '3':
                    switch ($qty) {
                        case '100':
                            if($rounded > 0){
                                $roundedRate = (28.85*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (28.85*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '250':
                            if($rounded > 0){
                                $roundedRate = (33.8*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (33.8*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '500':
                            if($rounded > 0){
                                $roundedRate = (37.1*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (37.1*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '1000':
                            if($rounded > 0){
                                $roundedRate = (39.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (39.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '2000':
                            if($rounded > 0){
                                $roundedRate = (55.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (55.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '4000':
                            if($rounded > 0){
                                $roundedRate = (82.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (82.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '5000':
                            if($rounded > 0){
                                $roundedRate = (95.9*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (95.9*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '7000':
                            if($rounded > 0){
                                $roundedRate = (125.9*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (125.9*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '10000':
                            if($rounded > 0){
                                $roundedRate = (174.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (174.5*20)/100;
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
    public function slimfinishType(Request $request)
    {
        $size = $request->size;
        $paper = $request->paper;
        $qty = $request->qty;
        $rounded = $request->rounded;
        $finishtype = $request->finishtype;
        $total = $request->total;
        switch ($size) {
            case '6.13':
                switch ($paper) {
                    case '1':
                    switch ($qty) {
                        case '100':
                            if($finishtype > 0){
                                $finishtypeRate = (20.9*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (20.9*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '250':
                            if($finishtype > 0){
                                $finishtypeRate = (24.5*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (24.5*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '500':
                            if($finishtype > 0){
                                $finishtypeRate = (26.9*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (26.9*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '1000':
                            if($finishtype > 0){
                                $finishtypeRate = (28.5*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (28.5*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '2000':
                            if($finishtype > 0){
                                $finishtypeRate = (39.9*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (39.9*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '4000':
                            if($finishtype > 0){
                                $finishtypeRate = (59.9*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (59.9*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '5000':
                            if($finishtype > 0){
                                $finishtypeRate = (69.5*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (69.5*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '7000':
                            if($finishtype > 0){
                                $finishtypeRate = (91.5*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (91.5*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '10000':
                            if($finishtype > 0){
                                $finishtypeRate = (125.5*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (125.5*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                    }
                    break;
                    case '2':
                    switch ($qty) {
                        case '100':
                            if($finishtype > 0){
                                $finishtypeRate = (25.08*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (25.08*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '250':
                            if($finishtype > 0){
                                $finishtypeRate = (29.4*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (29.4*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '500':
                            if($finishtype > 0){
                                $finishtypeRate = (32.28*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (32.28*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '1000':
                            if($finishtype > 0){
                                $finishtypeRate = (34.2*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (34.2*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '2000':
                            if($finishtype > 0){
                                $finishtypeRate = (47.88*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (47.88*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '4000':
                            if($finishtype > 0){
                                $finishtypeRate = (71.88*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (71.88*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '5000':
                            if($finishtype > 0){
                                $finishtypeRate = (83.4*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (83.4*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '7000':
                            if($finishtype > 0){
                                $finishtypeRate = (109.8*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (109.8*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '10000':
                            if($finishtype > 0){
                                $finishtypeRate = (150.6*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (150.6*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                    }
                    break;
                    case '3':
                    switch ($qty) {
                        case '100':
                            if($finishtype > 0){
                                $finishtypeRate = (28.85*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (28.85*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '250':
                            if($finishtype > 0){
                                $finishtypeRate = (33.8*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (33.8*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '500':
                            if($finishtype > 0){
                                $finishtypeRate = (37.1*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (37.1*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '1000':
                            if($finishtype > 0){
                                $finishtypeRate = (39.5*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (39.5*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '2000':
                            if($finishtype > 0){
                                $finishtypeRate = (55.5*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (55.5*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '4000':
                            if($finishtype > 0){
                                $finishtypeRate = (82.5*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (82.5*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '5000':
                            if($finishtype > 0){
                                $finishtypeRate = (95.9*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (95.9*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '7000':
                            if($finishtype > 0){
                                $finishtypeRate = (125.9*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (125.9*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '10000':
                            if($finishtype > 0){
                                $finishtypeRate = (174.5*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (174.5*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                    }
                    break;
                }
            break;
        }
    }

    // Square business card
    public function squarecardSize(Request $request)
    {
        $size = $request->size;
        $paper = $request->paper;
        switch ($size) {
            case '4':
                switch ($paper) {
                    case '1':
                        $cardRate = 19.5;
                        $finalTotal = ($cardRate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                    break;
                    case '2':
                        $cardRate = 23.4;
                        $finalTotal = ($cardRate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                    break;
                    case '3':
                        $cardRate = 26.9;
                        $finalTotal = ($cardRate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                    break;
                    
                    default:
                        $cardRate = 19.5;
                        $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                    break;
                }
            break;
            case '5':
                switch ($paper) {
                    case '1':
                        $cardRate = 20.2;
                        $finalTotal = ($cardRate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                    break;
                    case '2':
                        $cardRate = 24.24;
                        $finalTotal = ($cardRate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                    break;
                    case '3':
                        $cardRate = 27.9;
                        $finalTotal = ($cardRate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                    break;
                    
                    default:
                        $cardRate = 20.2;
                        $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                    break;
                }
            break;
            case '6':
                switch ($paper) {
                    case '1':
                        $cardRate = 25.5;
                        $finalTotal = ($cardRate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                    break;
                    case '2':
                        $cardRate = 30.6;
                        $finalTotal = ($cardRate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                    break;
                    case '3':
                        $cardRate = 35.2;
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
        }
        
    }
    public function squaremainQty(Request $request)
    {
        $size = $request->size;
        $paper = $request->paper;
        $qty = $request->qty;
        switch ($size) {
            case '4':
                switch ($paper) {
                    case '1':
                    switch ($qty) {
                        case '100':
                            $cardRate = 19.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '250':
                            $cardRate = 25.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '500':
                            $cardRate = 27.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '1000':
                            $cardRate = 29.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '2000':
                            $cardRate = 29.9;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '4000':
                            $cardRate = 55.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '5000':
                            $cardRate = 68.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '7000':
                            $cardRate = 85.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '10000':
                            $cardRate = 115.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                    }
                    break;
                    case '2':
                    switch ($qty) {
                        case '100':
                            $cardRate = 23.4;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '250':
                            $cardRate = 30.6;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '500':
                            $cardRate = 33.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '1000':
                            $cardRate = 35.4;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '2000':
                            $cardRate = 35.88;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '4000':
                            $cardRate = 66.6;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '5000':
                            $cardRate = 82.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '7000':
                            $cardRate = 102.9;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '10000':
                            $cardRate = 138.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                    }
                    break;
                    case '3':
                    switch ($qty) {
                        case '100':
                            $cardRate = 26.9;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '250':
                            $cardRate = 35.2;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '500':
                            $cardRate = 38.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '1000':
                            $cardRate = 40.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '2000':
                            $cardRate = 41.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '4000':
                            $cardRate = 76.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '5000':
                            $cardRate = 94.9;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '7000':
                            $cardRate = 118.3;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '10000':
                            $cardRate = 159.5;
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
                            $cardRate = 20.2;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '250':
                            $cardRate = 39.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '500':
                            $cardRate = 43.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '1000':
                            $cardRate = 47.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '2000':
                            $cardRate = 56.9;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '4000':
                            $cardRate = 79.9;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '5000':
                            $cardRate = 89.9;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '7000':
                            $cardRate = 110.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '10000':
                            $cardRate = 145.9;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                    }
                    break;
                    case '2':
                    switch ($qty) {
                        case '100':
                            $cardRate = 24.24;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '250':
                            $cardRate = 47.4;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '500':
                            $cardRate = 52.2;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '1000':
                            $cardRate = 57;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '2000':
                            $cardRate = 68.28;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '4000':
                            $cardRate = 95.88;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '5000':
                            $cardRate = 107.88;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '7000':
                            $cardRate = 132.6;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '10000':
                            $cardRate = 175.1;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                    }
                    break;
                    case '3':
                    switch ($qty) {
                        case '100':
                            $cardRate = 27.9;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '250':
                            $cardRate = 54.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '500':
                            $cardRate = 60.1;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '1000':
                            $cardRate = 65.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '2000':
                            $cardRate = 78.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '4000':
                            $cardRate = 110.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '5000':
                            $cardRate = 124.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '7000':
                            $cardRate = 152.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '10000':
                            $cardRate = 199.9;
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
                            $cardRate = 25.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '250':
                            $cardRate = 55.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '500':
                            $cardRate = 57.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '1000':
                            $cardRate = 59.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '2000':
                            $cardRate = 72.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '4000':
                            $cardRate = 99.9;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '5000':
                            $cardRate = 115.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '7000':
                            $cardRate = 139.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '10000':
                            $cardRate = 179.9;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                    }
                    break;
                    case '2':
                    switch ($qty) {
                        case '100':
                            $cardRate = 30.6;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '250':
                            $cardRate = 66.6;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '500':
                            $cardRate = 69;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '1000':
                            $cardRate = 71.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '2000':
                            $cardRate = 87;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '4000':
                            $cardRate = 119.9;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '5000':
                            $cardRate = 138.6;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '7000':
                            $cardRate = 167.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '10000':
                            $cardRate = 215.9;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                    }
                    break;
                    case '3':
                    switch ($qty) {
                        case '100':
                            $cardRate = 35.2;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '250':
                            $cardRate = 76.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '500':
                            $cardRate = 79.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '1000':
                            $cardRate = 82.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '2000':
                            $cardRate = 100.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '4000':
                            $cardRate = 137.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '5000':
                            $cardRate = 159.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '7000':
                            $cardRate = 192.05;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '10000':
                            $cardRate = 248.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                    }
                    break;
                }
            break;
        }
    }
    public function squarepaperType(Request $request)
    {
        $size = $request->size;
        $paper = $request->paper;
        $qty = $request->qty;
        switch ($size) {
            case '4':
                switch ($paper) {
                    case '1':
                    switch ($qty) {
                        case '100':
                            $cardRate = 19.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '250':
                            $cardRate = 25.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '500':
                            $cardRate = 27.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '1000':
                            $cardRate = 29.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '2000':
                            $cardRate = 29.9;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '4000':
                            $cardRate = 55.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '5000':
                            $cardRate = 68.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '7000':
                            $cardRate = 85.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '10000':
                            $cardRate = 115.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                    }
                    break;
                    case '2':
                    switch ($qty) {
                        case '100':
                            $cardRate = 23.4;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '250':
                            $cardRate = 30.6;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '500':
                            $cardRate = 33.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '1000':
                            $cardRate = 35.4;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '2000':
                            $cardRate = 35.88;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '4000':
                            $cardRate = 66.6;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '5000':
                            $cardRate = 82.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '7000':
                            $cardRate = 102.9;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '10000':
                            $cardRate = 138.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                    }
                    break;
                    case '3':
                    switch ($qty) {
                        case '100':
                            $cardRate = 26.9;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '250':
                            $cardRate = 35.2;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '500':
                            $cardRate = 38.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '1000':
                            $cardRate = 40.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '2000':
                            $cardRate = 41.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '4000':
                            $cardRate = 76.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '5000':
                            $cardRate = 94.9;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '7000':
                            $cardRate = 118.3;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '10000':
                            $cardRate = 159.5;
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
                            $cardRate = 20.2;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '250':
                            $cardRate = 39.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '500':
                            $cardRate = 43.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '1000':
                            $cardRate = 47.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '2000':
                            $cardRate = 56.9;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '4000':
                            $cardRate = 79.9;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '5000':
                            $cardRate = 89.9;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '7000':
                            $cardRate = 110.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '10000':
                            $cardRate = 145.9;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                    }
                    break;
                    case '2':
                    switch ($qty) {
                        case '100':
                            $cardRate = 24.24;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '250':
                            $cardRate = 47.4;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '500':
                            $cardRate = 52.2;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '1000':
                            $cardRate = 57;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '2000':
                            $cardRate = 68.28;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '4000':
                            $cardRate = 95.88;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '5000':
                            $cardRate = 107.88;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '7000':
                            $cardRate = 132.6;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '10000':
                            $cardRate = 175.1;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                    }
                    break;
                    case '3':
                    switch ($qty) {
                        case '100':
                            $cardRate = 27.9;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '250':
                            $cardRate = 54.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '500':
                            $cardRate = 60.1;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '1000':
                            $cardRate = 65.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '2000':
                            $cardRate = 78.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '4000':
                            $cardRate = 110.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '5000':
                            $cardRate = 124.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '7000':
                            $cardRate = 152.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '10000':
                            $cardRate = 199.9;
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
                            $cardRate = 25.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '250':
                            $cardRate = 55.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '500':
                            $cardRate = 57.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '1000':
                            $cardRate = 59.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '2000':
                            $cardRate = 72.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '4000':
                            $cardRate = 99.9;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '5000':
                            $cardRate = 115.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '7000':
                            $cardRate = 139.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '10000':
                            $cardRate = 179.9;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                    }
                    break;
                    case '2':
                    switch ($qty) {
                        case '100':
                            $cardRate = 30.6;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '250':
                            $cardRate = 66.6;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '500':
                            $cardRate = 69;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '1000':
                            $cardRate = 71.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '2000':
                            $cardRate = 87;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '4000':
                            $cardRate = 119.9;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '5000':
                            $cardRate = 138.6;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '7000':
                            $cardRate = 167.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '10000':
                            $cardRate = 215.9;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                    }
                    break;
                    case '3':
                    switch ($qty) {
                        case '100':
                            $cardRate = 35.2;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '250':
                            $cardRate = 76.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '500':
                            $cardRate = 79.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '1000':
                            $cardRate = 82.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '2000':
                            $cardRate = 100.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '4000':
                            $cardRate = 137.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '5000':
                            $cardRate = 159.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '7000':
                            $cardRate = 192.05;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '10000':
                            $cardRate = 248.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                    }
                    break;
                }
            break;
        }
    }
    public function squareprintSide(Request $request)
    {
        $size = $request->size;
        $paper = $request->paper;
        $qty = $request->qty;
        $printSide = $request->printside;
        $total = $request->total;

        switch ($size) {
            case '4':
                switch ($paper) {
                    case '1':
                    switch ($qty) {
                        case '100':
                            if($printSide > 0){
                                $printRate = (19.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (19.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '250':
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
                        case '500':
                            if($printSide > 0){
                                $printRate = (27.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (27.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '1000':
                            if($printSide > 0){
                                $printRate = (29.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (29.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '2000':
                            if($printSide > 0){
                                $printRate = (29.9*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (29.9*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '4000':
                            if($printSide > 0){
                                $printRate = (55.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (55.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '5000':
                            if($printSide > 0){
                                $printRate = (68.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (68.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '7000':
                            if($printSide > 0){
                                $printRate = (85.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (85.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '10000':
                            if($printSide > 0){
                                $printRate = (115.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (115.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                    }
                    break;
                    case '2':
                    switch ($qty) {
                        case '100':
                            if($printSide > 0){
                                $printRate = (23.4*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (23.4*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '250':
                            if($printSide > 0){
                                $printRate = (30.6*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (30.6*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '500':
                            if($printSide > 0){
                                $printRate = (33.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (33.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '1000':
                            if($printSide > 0){
                                $printRate = (35.4*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (35.4*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '2000':
                            if($printSide > 0){
                                $printRate = (35.88*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (35.88*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '4000':
                            if($printSide > 0){
                                $printRate = (66.6*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (66.6*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '5000':
                            if($printSide > 0){
                                $printRate = (82.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (82.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '7000':
                            if($printSide > 0){
                                $printRate = (102.9*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (102.9*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '10000':
                            if($printSide > 0){
                                $printRate = (138.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (138.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                    }
                    break;
                    case '3':
                    switch ($qty) {
                        case '100':
                            if($printSide > 0){
                                $printRate = (26.9*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (26.9*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '250':
                            if($printSide > 0){
                                $printRate = (35.2*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (35.2*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '500':
                            if($printSide > 0){
                                $printRate = (38.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (38.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '1000':
                            if($printSide > 0){
                                $printRate = (40.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (40.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '2000':
                            if($printSide > 0){
                                $printRate = (41.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (41.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '4000':
                            if($printSide > 0){
                                $printRate = (76.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (76.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '5000':
                            if($printSide > 0){
                                $printRate = (94.9*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (94.9*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '7000':
                            if($printSide > 0){
                                $printRate = (118.3*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (118.3*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '10000':
                            if($printSide > 0){
                                $printRate = (159.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (159.5*40)/100;
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
                                $printRate = (20.2*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (20.2*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '250':
                            if($printSide > 0){
                                $printRate = (39.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (39.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '500':
                            if($printSide > 0){
                                $printRate = (43.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (43.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '1000':
                            if($printSide > 0){
                                $printRate = (47.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (47.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '2000':
                            if($printSide > 0){
                                $printRate = (56.9*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (56.9*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '4000':
                            if($printSide > 0){
                                $printRate = (79.9*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (79.9*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '5000':
                            if($printSide > 0){
                                $printRate = (89.9*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (89.9*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '7000':
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
                        case '10000':
                            if($printSide > 0){
                                $printRate = (145.9*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (145.9*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                    }
                    break;
                    case '2':
                    switch ($qty) {
                        case '100':
                            if($printSide > 0){
                                $printRate = (24.24*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (24.24*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '250':
                            if($printSide > 0){
                                $printRate = (47.4*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (47.4*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '500':
                            if($printSide > 0){
                                $printRate = (52.2*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (52.2*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '1000':
                            if($printSide > 0){
                                $printRate = (57*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (57*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '2000':
                            if($printSide > 0){
                                $printRate = (68.28*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (68.28*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '4000':
                            if($printSide > 0){
                                $printRate = (95.88*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (95.88*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '5000':
                            if($printSide > 0){
                                $printRate = (107.88*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (107.88*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '7000':
                            if($printSide > 0){
                                $printRate = (132.6*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (132.6*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '10000':
                            if($printSide > 0){
                                $printRate = (175.1*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (175.1*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                    }
                    break;
                    case '3':
                    switch ($qty) {
                        case '100':
                            if($printSide > 0){
                                $printRate = (27.9*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (27.9*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '250':
                            if($printSide > 0){
                                $printRate = (54.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (54.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '500':
                            if($printSide > 0){
                                $printRate = (60.1*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (60.1*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '1000':
                            if($printSide > 0){
                                $printRate = (65.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (65.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '2000':
                            if($printSide > 0){
                                $printRate = (78.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (78.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '4000':
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
                        case '5000':
                            if($printSide > 0){
                                $printRate = (124.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (124.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '7000':
                            if($printSide > 0){
                                $printRate = (152.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (152.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '10000':
                            if($printSide > 0){
                                $printRate = (199.9*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (199.9*40)/100;
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
                                $printRate = (55.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (55.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '500':
                            if($printSide > 0){
                                $printRate = (57.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (57.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '1000':
                            if($printSide > 0){
                                $printRate = (59.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (59.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '2000':
                            if($printSide > 0){
                                $printRate = (72.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (72.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '4000':
                            if($printSide > 0){
                                $printRate = (99.9*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (99.9*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '5000':
                            if($printSide > 0){
                                $printRate = (115.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (115.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '7000':
                            if($printSide > 0){
                                $printRate = (139.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (139.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '10000':
                            if($printSide > 0){
                                $printRate = (179.9*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (179.9*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                    }
                    break;
                    case '2':
                    switch ($qty) {
                        case '100':
                            if($printSide > 0){
                                $printRate = (30.6*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (30.6*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '250':
                            if($printSide > 0){
                                $printRate = (66.6*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (66.6*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '500':
                            if($printSide > 0){
                                $printRate = (69*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (69*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '1000':
                            if($printSide > 0){
                                $printRate = (71.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (71.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '2000':
                            if($printSide > 0){
                                $printRate = (87*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (87*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '4000':
                            if($printSide > 0){
                                $printRate = (119.9*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (119.9*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '5000':
                            if($printSide > 0){
                                $printRate = (138.6*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (138.6*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '7000':
                            if($printSide > 0){
                                $printRate = (167.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (167.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '10000':
                            if($printSide > 0){
                                $printRate = (215.9*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (215.9*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                    }
                    break;
                    case '3':
                    switch ($qty) {
                        case '100':
                            if($printSide > 0){
                                $printRate = (35.2*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (35.2*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '250':
                            if($printSide > 0){
                                $printRate = (76.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (76.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '500':
                            if($printSide > 0){
                                $printRate = (79.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (79.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '1000':
                            if($printSide > 0){
                                $printRate = (82.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (82.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '2000':
                            if($printSide > 0){
                                $printRate = (100.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (100.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '4000':
                            if($printSide > 0){
                                $printRate = (137.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (137.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '5000':
                            if($printSide > 0){
                                $printRate = (159.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (159.5*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '7000':
                            if($printSide > 0){
                                $printRate = (192.05*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (192.05*40)/100;
                                $cardRate = $total-$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '10000':
                            if($printSide > 0){
                                $printRate = (248.5*40)/100;
                                $cardRate = $total+$printRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $printRate = (248.5*40)/100;
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
    public function squarefinishType(Request $request)
    {
        $size = $request->size;
        $paper = $request->paper;
        $qty = $request->qty;
        $finishtype = $request->finishtype;
        $total = $request->total;
        
        switch ($size) {
            case '4':
                switch ($paper) {
                    case '1':
                    switch ($qty) {
                        case '100':
                            if($finishtype > 0){
                                $finishtypeRate = (19.5*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (19.5*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '250':
                            if($finishtype > 0){
                                $finishtypeRate = (25.5*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (25.5*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '500':
                            if($finishtype > 0){
                                $finishtypeRate = (27.5*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (27.5*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '1000':
                            if($finishtype > 0){
                                $finishtypeRate = (29.5*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (29.5*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '2000':
                            if($finishtype > 0){
                                $finishtypeRate = (29.9*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (29.9*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '4000':
                            if($finishtype > 0){
                                $finishtypeRate = (55.5*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (55.5*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '5000':
                            if($finishtype > 0){
                                $finishtypeRate = (68.5*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (68.5*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '7000':
                            if($finishtype > 0){
                                $finishtypeRate = (85.5*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (85.5*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '10000':
                            if($finishtype > 0){
                                $finishtypeRate = (115.5*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (115.5*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                    }
                    break;
                    case '2':
                    switch ($qty) {
                        case '100':
                            if($finishtype > 0){
                                $finishtypeRate = (23.4*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (23.4*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '250':
                            if($finishtype > 0){
                                $finishtypeRate = (30.6*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (30.6*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '500':
                            if($finishtype > 0){
                                $finishtypeRate = (33.5*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (33.5*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '1000':
                            if($finishtype > 0){
                                $finishtypeRate = (35.4*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (35.4*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '2000':
                            if($finishtype > 0){
                                $finishtypeRate = (35.88*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (35.88*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '4000':
                            if($finishtype > 0){
                                $finishtypeRate = (66.6*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (66.6*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '5000':
                            if($finishtype > 0){
                                $finishtypeRate = (82.5*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (82.5*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '7000':
                            if($finishtype > 0){
                                $finishtypeRate = (102.9*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (102.9*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '10000':
                            if($finishtype > 0){
                                $finishtypeRate = (138.5*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (138.5*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                    }
                    break;
                    case '3':
                    switch ($qty) {
                        case '100':
                            if($finishtype > 0){
                                $finishtypeRate = (26.9*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (26.9*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '250':
                            if($finishtype > 0){
                                $finishtypeRate = (35.2*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (35.2*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '500':
                            if($finishtype > 0){
                                $finishtypeRate = (38.5*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (38.5*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '1000':
                            if($finishtype > 0){
                                $finishtypeRate = (40.5*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (40.5*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '2000':
                            if($finishtype > 0){
                                $finishtypeRate = (41.5*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (41.5*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '4000':
                            if($finishtype > 0){
                                $finishtypeRate = (76.5*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (76.5*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '5000':
                            if($finishtype > 0){
                                $finishtypeRate = (94.9*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (94.9*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '7000':
                            if($finishtype > 0){
                                $finishtypeRate = (118.3*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (118.3*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '10000':
                            if($finishtype > 0){
                                $finishtypeRate = (159.5*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (159.5*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
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
                            if($finishtype > 0){
                                $finishtypeRate = (20.2*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (20.2*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '250':
                            if($finishtype > 0){
                                $finishtypeRate = (39.5*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (39.5*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '500':
                            if($finishtype > 0){
                                $finishtypeRate = (43.5*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (43.5*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '1000':
                            if($finishtype > 0){
                                $finishtypeRate = (47.5*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (47.5*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '2000':
                            if($finishtype > 0){
                                $finishtypeRate = (56.9*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (56.9*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '4000':
                            if($finishtype > 0){
                                $finishtypeRate = (79.9*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (79.9*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '5000':
                            if($finishtype > 0){
                                $finishtypeRate = (89.9*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (89.9*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '7000':
                            if($finishtype > 0){
                                $finishtypeRate = (110.5*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (110.5*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '10000':
                            if($finishtype > 0){
                                $finishtypeRate = (145.9*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (145.9*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                    }
                    break;
                    case '2':
                    switch ($qty) {
                        case '100':
                            if($finishtype > 0){
                                $finishtypeRate = (24.24*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (24.24*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '250':
                            if($finishtype > 0){
                                $finishtypeRate = (47.4*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (47.4*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '500':
                            if($finishtype > 0){
                                $finishtypeRate = (52.2*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (52.2*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '1000':
                            if($finishtype > 0){
                                $finishtypeRate = (57*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (57*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '2000':
                            if($finishtype > 0){
                                $finishtypeRate = (68.28*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (68.28*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '4000':
                            if($finishtype > 0){
                                $finishtypeRate = (95.88*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (95.88*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '5000':
                            if($finishtype > 0){
                                $finishtypeRate = (107.88*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (107.88*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '7000':
                            if($finishtype > 0){
                                $finishtypeRate = (132.6*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (132.6*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '10000':
                            if($finishtype > 0){
                                $finishtypeRate = (175.1*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (175.1*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                    }
                    break;
                    case '3':
                    switch ($qty) {
                        case '100':
                            if($finishtype > 0){
                                $finishtypeRate = (27.9*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (27.9*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '250':
                            if($finishtype > 0){
                                $finishtypeRate = (54.5*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (54.5*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '500':
                            if($finishtype > 0){
                                $finishtypeRate = (60.1*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (60.1*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '1000':
                            if($finishtype > 0){
                                $finishtypeRate = (65.5*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (65.5*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '2000':
                            if($finishtype > 0){
                                $finishtypeRate = (78.5*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (78.5*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '4000':
                            if($finishtype > 0){
                                $finishtypeRate = (110.5*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (110.5*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '5000':
                            if($finishtype > 0){
                                $finishtypeRate = (124.5*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (124.5*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '7000':
                            if($finishtype > 0){
                                $finishtypeRate = (152.5*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (152.5*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '10000':
                            if($finishtype > 0){
                                $finishtypeRate = (199.9*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (199.9*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
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
                            if($finishtype > 0){
                                $finishtypeRate = (25.5*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (25.5*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '250':
                            if($finishtype > 0){
                                $finishtypeRate = (55.5*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (55.5*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '500':
                            if($finishtype > 0){
                                $finishtypeRate = (57.5*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (57.5*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '1000':
                            if($finishtype > 0){
                                $finishtypeRate = (59.5*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (59.5*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '2000':
                            if($finishtype > 0){
                                $finishtypeRate = (72.5*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (72.5*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '4000':
                            if($finishtype > 0){
                                $finishtypeRate = (99.9*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (99.9*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '5000':
                            if($finishtype > 0){
                                $finishtypeRate = (115.5*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (115.5*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '7000':
                            if($finishtype > 0){
                                $finishtypeRate = (139.5*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (139.5*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '10000':
                            if($finishtype > 0){
                                $finishtypeRate = (179.9*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (179.9*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                    }
                    break;
                    case '2':
                    switch ($qty) {
                        case '100':
                            if($finishtype > 0){
                                $finishtypeRate = (30.6*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (30.6*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '250':
                            if($finishtype > 0){
                                $finishtypeRate = (66.6*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (66.6*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '500':
                            if($finishtype > 0){
                                $finishtypeRate = (69*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (69*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '1000':
                            if($finishtype > 0){
                                $finishtypeRate = (71.5*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (71.5*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '2000':
                            if($finishtype > 0){
                                $finishtypeRate = (87*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (87*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '4000':
                            if($finishtype > 0){
                                $finishtypeRate = (119.9*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (119.9*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '5000':
                            if($finishtype > 0){
                                $finishtypeRate = (138.6*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (138.6*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '7000':
                            if($finishtype > 0){
                                $finishtypeRate = (167.5*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (167.5*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '10000':
                            if($finishtype > 0){
                                $finishtypeRate = (215.9*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (215.9*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                    }
                    break;
                    case '3':
                    switch ($qty) {
                        case '100':
                            if($finishtype > 0){
                                $finishtypeRate = (35.2*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (35.2*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '250':
                            if($finishtype > 0){
                                $finishtypeRate = (76.5*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (76.5*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '500':
                            if($finishtype > 0){
                                $finishtypeRate = (79.5*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (79.5*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '1000':
                            if($finishtype > 0){
                                $finishtypeRate = (82.5*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (82.5*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '2000':
                            if($finishtype > 0){
                                $finishtypeRate = (100.5*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (100.5*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '4000':
                            if($finishtype > 0){
                                $finishtypeRate = (137.5*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (137.5*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '5000':
                            if($finishtype > 0){
                                $finishtypeRate = (159.5*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (159.5*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '7000':
                            if($finishtype > 0){
                                $finishtypeRate = (192.05*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (192.05*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '10000':
                            if($finishtype > 0){
                                $finishtypeRate = (248.5*15)/100;
                                $cardRate = $total+$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $finishtypeRate = (248.5*15)/100;
                                $cardRate = $total-$finishtypeRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['finishtypeRate'=>$finishtypeRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                    }
                    break;
                }
            break;
        }
    }
    public function squarerounded(Request $request)
    {
        $size = $request->size;
        $paper = $request->paper;
        $qty = $request->qty;
        $rounded = $request->rounded;
        $total = $request->total;

        switch ($size) {
            case '4':
                switch ($paper) {
                    case '1':
                    switch ($qty) {
                        case '100':
                            if($rounded > 0){
                                $roundedRate = (19.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (19.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '250':
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
                        case '500':
                            if($rounded > 0){
                                $roundedRate = (27.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (27.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '1000':
                            if($rounded > 0){
                                $roundedRate = (29.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (29.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '2000':
                            if($rounded > 0){
                                $roundedRate = (29.9*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (29.9*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '4000':
                            if($rounded > 0){
                                $roundedRate = (55.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (55.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '5000':
                            if($rounded > 0){
                                $roundedRate = (68.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (68.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '7000':
                            if($rounded > 0){
                                $roundedRate = (85.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (85.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '10000':
                            if($rounded > 0){
                                $roundedRate = (115.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (115.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                    }
                    break;
                    case '2':
                    switch ($qty) {
                        case '100':
                            if($rounded > 0){
                                $roundedRate = (23.4*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (23.4*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '250':
                            if($rounded > 0){
                                $roundedRate = (30.6*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (30.6*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '500':
                            if($rounded > 0){
                                $roundedRate = (33.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (33.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '1000':
                            if($rounded > 0){
                                $roundedRate = (35.4*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (35.4*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '2000':
                            if($rounded > 0){
                                $roundedRate = (35.88*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (35.88*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '4000':
                            if($rounded > 0){
                                $roundedRate = (66.6*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (66.6*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '5000':
                            if($rounded > 0){
                                $roundedRate = (82.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (82.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '7000':
                            if($rounded > 0){
                                $roundedRate = (102.9*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (102.9*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '10000':
                            if($rounded > 0){
                                $roundedRate = (138.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (138.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                    }
                    break;
                    case '3':
                    switch ($qty) {
                        case '100':
                            if($rounded > 0){
                                $roundedRate = (26.9*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (26.9*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '250':
                            if($rounded > 0){
                                $roundedRate = (35.2*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (35.2*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '500':
                            if($rounded > 0){
                                $roundedRate = (38.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (38.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '1000':
                            if($rounded > 0){
                                $roundedRate = (40.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (40.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '2000':
                            if($rounded > 0){
                                $roundedRate = (41.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (41.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '4000':
                            if($rounded > 0){
                                $roundedRate = (76.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (76.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '5000':
                            if($rounded > 0){
                                $roundedRate = (94.9*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (94.9*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '7000':
                            if($rounded > 0){
                                $roundedRate = (118.3*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (118.3*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '10000':
                            if($rounded > 0){
                                $roundedRate = (159.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (159.5*20)/100;
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
                                $roundedRate = (20.2*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (20.2*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '250':
                            if($rounded > 0){
                                $roundedRate = (39.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (39.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '500':
                            if($rounded > 0){
                                $roundedRate = (43.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (43.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '1000':
                            if($rounded > 0){
                                $roundedRate = (47.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (47.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '2000':
                            if($rounded > 0){
                                $roundedRate = (56.9*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (56.9*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '4000':
                            if($rounded > 0){
                                $roundedRate = (79.9*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (79.9*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '5000':
                            if($rounded > 0){
                                $roundedRate = (89.9*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (89.9*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '7000':
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
                        case '10000':
                            if($rounded > 0){
                                $roundedRate = (145.9*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (145.9*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                    }
                    break;
                    case '2':
                    switch ($qty) {
                        case '100':
                            if($rounded > 0){
                                $roundedRate = (24.24*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (24.24*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '250':
                            if($rounded > 0){
                                $roundedRate = (47.4*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (47.4*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '500':
                            if($rounded > 0){
                                $roundedRate = (52.2*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (52.2*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '1000':
                            if($rounded > 0){
                                $roundedRate = (57*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (57*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '2000':
                            if($rounded > 0){
                                $roundedRate = (68.28*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (68.28*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '4000':
                            if($rounded > 0){
                                $roundedRate = (95.88*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (95.88*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '5000':
                            if($rounded > 0){
                                $roundedRate = (107.88*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (107.88*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '7000':
                            if($rounded > 0){
                                $roundedRate = (132.6*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (132.6*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '10000':
                            if($rounded > 0){
                                $roundedRate = (175.1*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (175.1*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                    }
                    break;
                    case '3':
                    switch ($qty) {
                        case '100':
                            if($rounded > 0){
                                $roundedRate = (27.9*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (27.9*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '250':
                            if($rounded > 0){
                                $roundedRate = (54.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (54.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '500':
                            if($rounded > 0){
                                $roundedRate = (60.1*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (60.1*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '1000':
                            if($rounded > 0){
                                $roundedRate = (65.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (65.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '2000':
                            if($rounded > 0){
                                $roundedRate = (78.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (78.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '4000':
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
                        case '5000':
                            if($rounded > 0){
                                $roundedRate = (124.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (124.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '7000':
                            if($rounded > 0){
                                $roundedRate = (152.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (152.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '10000':
                            if($rounded > 0){
                                $roundedRate = (199.9*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (199.9*20)/100;
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
                                $roundedRate = (55.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (55.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '500':
                            if($rounded > 0){
                                $roundedRate = (57.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (57.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '1000':
                            if($rounded > 0){
                                $roundedRate = (59.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (59.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '2000':
                            if($rounded > 0){
                                $roundedRate = (72.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (72.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '4000':
                            if($rounded > 0){
                                $roundedRate = (99.9*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (99.9*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '5000':
                            if($rounded > 0){
                                $roundedRate = (115.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (115.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '7000':
                            if($rounded > 0){
                                $roundedRate = (139.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (139.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '10000':
                            if($rounded > 0){
                                $roundedRate = (179.9*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (179.9*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                    }
                    break;
                    case '2':
                    switch ($qty) {
                        case '100':
                            if($rounded > 0){
                                $roundedRate = (30.6*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (30.6*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '250':
                            if($rounded > 0){
                                $roundedRate = (66.6*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (66.6*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '500':
                            if($rounded > 0){
                                $roundedRate = (69*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (69*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '1000':
                            if($rounded > 0){
                                $roundedRate = (71.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (71.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '2000':
                            if($rounded > 0){
                                $roundedRate = (87*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (87*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '4000':
                            if($rounded > 0){
                                $roundedRate = (119.9*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (119.9*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '5000':
                            if($rounded > 0){
                                $roundedRate = (138.6*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (138.6*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '7000':
                            if($rounded > 0){
                                $roundedRate = (167.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (167.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '10000':
                            if($rounded > 0){
                                $roundedRate = (215.9*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (215.9*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                    }
                    break;
                    case '3':
                    switch ($qty) {
                        case '100':
                            if($rounded > 0){
                                $roundedRate = (35.2*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (35.2*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '250':
                            if($rounded > 0){
                                $roundedRate = (76.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (76.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '500':
                            if($rounded > 0){
                                $roundedRate = (79.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (79.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '1000':
                            if($rounded > 0){
                                $roundedRate = (82.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (82.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '2000':
                            if($rounded > 0){
                                $roundedRate = (100.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (100.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '4000':
                            if($rounded > 0){
                                $roundedRate = (137.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (137.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '5000':
                            if($rounded > 0){
                                $roundedRate = (159.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (159.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '7000':
                            if($rounded > 0){
                                $roundedRate = (192.05*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (192.05*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '10000':
                            if($rounded > 0){
                                $roundedRate = (248.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (248.5*20)/100;
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

    // UV Spot business card
    public function uvcardSize(Request $request)
    {
        $size = $request->size;
        $paper = $request->paper;
        switch ($size) {
            case '7':
                switch ($paper) {
                    case '1':
                        $cardRate = 69.99;
                        $finalTotal = ($cardRate*100)/50;
                    return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                    break;
                    
                    default:
                        $cardRate = 69.99;
                        $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                    break;
                }
            break;
            // case '7.17':
            //     switch ($paper) {
            //         case '1':
            //             $cardRate = 32.5;
            //             $finalTotal = ($cardRate*100)/50;
            //         return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
            //         break;
                    
            //         default:
            //             $cardRate = 32.5;
            //             $finalTotal = ($cardRate*100)/50;
            //             return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
            //         break;
            //     }
            // break;
            // case '6.13':
            //     switch ($paper) {
            //         case '1':
            //             $cardRate = 32.5;
            //             $finalTotal = ($cardRate*100)/50;
            //         return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
            //         break;
                    
            //         default:
            //             $cardRate = 32.5;
            //             $finalTotal = ($cardRate*100)/50;
            //             return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
            //         break;
            //     }
            // break;
            // case '4':
            //     switch ($paper) {
            //         case '1':
            //             $cardRate = 32.5;
            //             $finalTotal = ($cardRate*100)/50;
            //         return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
            //         break;
                    
            //         default:
            //             $cardRate = 32.5;
            //             $finalTotal = ($cardRate*100)/50;
            //             return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
            //         break;
            //     }
            // break;
            // case '5':
            //     switch ($paper) {
            //         case '1':
            //             $cardRate = 32.5;
            //             $finalTotal = ($cardRate*100)/50;
            //         return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
            //         break;
                    
            //         default:
            //             $cardRate = 32.5;
            //             $finalTotal = ($cardRate*100)/50;
            //             return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
            //         break;
            //     }
            // break;
            // case '6':
            //     switch ($paper) {
            //         case '1':
            //             $cardRate = 32.5;
            //             $finalTotal = ($cardRate*100)/50;
            //         return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
            //         break;
                    
            //         default:
            //             $cardRate = 32.5;
            //             $finalTotal = ($cardRate*100)/50;
            //             return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
            //         break;
            //     }
            // break;
        }
        
    }
    public function uvmainQty(Request $request)
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
                            $cardRate = 69.99;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '250':
                            $cardRate = 99.99;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '500':
                            $cardRate = 135.99;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '1000':
                            $cardRate = 170.55;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '2000':
                            $cardRate = 239.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                    }
                    break;
                }
            break;
            // case '7.17':
            //     switch ($paper) {
            //         case '1':
            //         switch ($qty) {
            //             case '100':
            //                 $cardRate = 32.5;
            //                 $finalTotal = ($cardRate*100)/50;
            //             return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
            //             break;
            //             case '250':
            //                 $cardRate = 48.9;
            //                 $finalTotal = ($cardRate*100)/50;
            //             return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
            //             break;
            //             case '500':
            //                 $cardRate = 68.5;
            //                 $finalTotal = ($cardRate*100)/50;
            //             return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
            //             break;
            //             case '1000':
            //                 $cardRate = 89.5;
            //                 $finalTotal = ($cardRate*100)/50;
            //             return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
            //             break;
            //         }
            //         break;
            //     }
            // break;
            // case '6.13':
            //     switch ($paper) {
            //         case '1':
            //         switch ($qty) {
            //             case '100':
            //                 $cardRate = 32.5;
            //                 $finalTotal = ($cardRate*100)/50;
            //             return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
            //             break;
            //             case '250':
            //                 $cardRate = 48.9;
            //                 $finalTotal = ($cardRate*100)/50;
            //             return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
            //             break;
            //             case '500':
            //                 $cardRate = 68.5;
            //                 $finalTotal = ($cardRate*100)/50;
            //             return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
            //             break;
            //             case '1000':
            //                 $cardRate = 89.5;
            //                 $finalTotal = ($cardRate*100)/50;
            //             return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
            //             break;
            //         }
            //         break;
            //     }
            // break;
            // case '4':
            //     switch ($paper) {
            //         case '1':
            //         switch ($qty) {
            //             case '100':
            //                 $cardRate = 32.5;
            //                 $finalTotal = ($cardRate*100)/50;
            //             return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
            //             break;
            //             case '250':
            //                 $cardRate = 48.9;
            //                 $finalTotal = ($cardRate*100)/50;
            //             return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
            //             break;
            //             case '500':
            //                 $cardRate = 68.5;
            //                 $finalTotal = ($cardRate*100)/50;
            //             return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
            //             break;
            //             case '1000':
            //                 $cardRate = 89.5;
            //                 $finalTotal = ($cardRate*100)/50;
            //             return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
            //             break;
            //         }
            //         break;
            //     }
            // break;
            // case '5':
            //     switch ($paper) {
            //         case '1':
            //         switch ($qty) {
            //             case '100':
            //                 $cardRate = 32.5;
            //                 $finalTotal = ($cardRate*100)/50;
            //             return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
            //             break;
            //             case '250':
            //                 $cardRate = 48.9;
            //                 $finalTotal = ($cardRate*100)/50;
            //                 return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
            //             break;
            //             case '500':
            //                 $cardRate = 68.5;
            //                 $finalTotal = ($cardRate*100)/50;
            //                 return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
            //             break;
            //             case '1000':
            //                 $cardRate = 89.5;
            //                 $finalTotal = ($cardRate*100)/50;
            //                 return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
            //             break;
            //         }
            //         break;
            //     }
            // break;
            // case '6':
            //     switch ($paper) {
            //         case '1':
            //         switch ($qty) {
            //             case '100':
            //                 $cardRate = 32.5;
            //                 $finalTotal = ($cardRate*100)/50;
            //             return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
            //             break;
            //             case '250':
            //                 $cardRate = 48.9;
            //                 $finalTotal = ($cardRate*100)/50;
            //                 return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
            //             break;
            //             case '500':
            //                 $cardRate = 68.5;
            //                 $finalTotal = ($cardRate*100)/50;
            //                 return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
            //             break;
            //             case '1000':
            //                 $cardRate = 89.5;
            //                 $finalTotal = ($cardRate*100)/50;
            //                 return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
            //             break;
            //         }
            //         break;
            //     }
            // break;
        }
    }
    public function uvpaperType(Request $request)
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
                            $cardRate = 69.99;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '250':
                            $cardRate = 99.99;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '500':
                            $cardRate = 135.99;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '1000':
                            $cardRate = 170.55;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '2000':
                            $cardRate = 239.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                    }
                    break;
                }
            break;
            // case '7.17':
            //     switch ($paper) {
            //         case '1':
            //         switch ($qty) {
            //             case '100':
            //                 $cardRate = 32.5;
            //                 $finalTotal = ($cardRate*100)/50;
            //             return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
            //             break;
            //             case '250':
            //                 $cardRate = 48.9;
            //                 $finalTotal = ($cardRate*100)/50;
            //             return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
            //             break;
            //             case '500':
            //                 $cardRate = 68.5;
            //                 $finalTotal = ($cardRate*100)/50;
            //             return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
            //             break;
            //             case '1000':
            //                 $cardRate = 89.5;
            //                 $finalTotal = ($cardRate*100)/50;
            //             return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
            //             break;
            //         }
            //         break;
            //     }
            // break;
            // case '6.13':
            //     switch ($paper) {
            //         case '1':
            //         switch ($qty) {
            //             case '100':
            //                 $cardRate = 32.5;
            //                 $finalTotal = ($cardRate*100)/50;
            //             return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
            //             break;
            //             case '250':
            //                 $cardRate = 48.9;
            //                 $finalTotal = ($cardRate*100)/50;
            //             return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
            //             break;
            //             case '500':
            //                 $cardRate = 68.5;
            //                 $finalTotal = ($cardRate*100)/50;
            //             return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
            //             break;
            //             case '1000':
            //                 $cardRate = 89.5;
            //                 $finalTotal = ($cardRate*100)/50;
            //             return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
            //             break;
            //         }
            //         break;
            //     }
            // break;
            // case '4':
            //     switch ($paper) {
            //         case '1':
            //         switch ($qty) {
            //             case '100':
            //                 $cardRate = 32.5;
            //                 $finalTotal = ($cardRate*100)/50;
            //             return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
            //             break;
            //             case '250':
            //                 $cardRate = 48.9;
            //                 $finalTotal = ($cardRate*100)/50;
            //             return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
            //             break;
            //             case '500':
            //                 $cardRate = 68.5;
            //                 $finalTotal = ($cardRate*100)/50;
            //             return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
            //             break;
            //             case '1000':
            //                 $cardRate = 89.5;
            //                 $finalTotal = ($cardRate*100)/50;
            //             return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
            //             break;
            //         }
            //         break;
            //     }
            // break;
            // case '5':
            //     switch ($paper) {
            //         case '1':
            //         switch ($qty) {
            //             case '100':
            //                 $cardRate = 32.5;
            //                 $finalTotal = ($cardRate*100)/50;
            //             return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
            //             break;
            //             case '250':
            //                 $cardRate = 48.9;
            //                 $finalTotal = ($cardRate*100)/50;
            //                 return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
            //             break;
            //             case '500':
            //                 $cardRate = 68.5;
            //                 $finalTotal = ($cardRate*100)/50;
            //                 return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
            //             break;
            //             case '1000':
            //                 $cardRate = 89.5;
            //                 $finalTotal = ($cardRate*100)/50;
            //                 return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
            //             break;
            //         }
            //         break;
            //     }
            // break;
            // case '6':
            //     switch ($paper) {
            //         case '1':
            //         switch ($qty) {
            //             case '100':
            //                 $cardRate = 32.5;
            //                 $finalTotal = ($cardRate*100)/50;
            //             return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
            //             break;
            //             case '250':
            //                 $cardRate = 48.9;
            //                 $finalTotal = ($cardRate*100)/50;
            //                 return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
            //             break;
            //             case '500':
            //                 $cardRate = 68.5;
            //                 $finalTotal = ($cardRate*100)/50;
            //                 return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
            //             break;
            //             case '1000':
            //                 $cardRate = 89.5;
            //                 $finalTotal = ($cardRate*100)/50;
            //                 return response()->json(['total'=>$finalTotal,'final'=>$cardRate]);
            //             break;
            //         }
            //         break;
            //     }
            // break;
        }
    }
    public function uvprintSide(Request $request)
    {
        $size = $request->size;
        $paper = $request->paper;
        $qty = $request->qty;
        $printSide = $request->printside;
        $total = $request->total;

        switch ($size) {
            case '7':
                switch ($paper) {
                    case '1':
                    switch ($qty) {
                        case '100':
                            $printRate = 69.99; 
                            $cardRate = 69.99;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['printsideRate'=>$printRate,'total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '250':
                            $printRate = 99.99; 
                            $cardRate = 99.99;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['printsideRate'=>$printRate,'total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '500':
                            $printRate = 135.99; 
                            $cardRate = 135.99;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['printsideRate'=>$printRate,'total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '1000':
                            $printRate = 170.55; 
                            $cardRate = 170.55;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['printsideRate'=>$printRate,'total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                        case '2000':
                            $printRate = 239.5; 
                            $cardRate = 239.5;
                            $finalTotal = ($cardRate*100)/50;
                        return response()->json(['printsideRate'=>$printRate,'total'=>$finalTotal,'final'=>$cardRate]);
                        break;
                    }
                    break;
                }
            break;
        }

        // switch ($size) {
        //     case '7':
        //         switch ($paper) {
        //             case '1':
        //             switch ($qty) {
        //                 case '100':
        //                     if($printSide > 0){
        //                         $printRate = (32.5*40)/100;
        //                         $cardRate = $total+$printRate;
        //                         $finalTotal = ($cardRate*100)/50;
        //                         return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
        //                     } else {
        //                         $printRate = (32.5*40)/100;
        //                         $cardRate = $total-$printRate;
        //                         $finalTotal = ($cardRate*100)/50;
        //                         return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
        //                     }
        //                 break;
        //                 case '250':
        //                     if($printSide > 0){
        //                         $printRate = (48.9*40)/100;
        //                         $cardRate = $total+$printRate;
        //                         $finalTotal = ($cardRate*100)/50;
        //                         return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
        //                     } else {
        //                         $printRate = (48.9*40)/100;
        //                         $cardRate = $total-$printRate;
        //                         $finalTotal = ($cardRate*100)/50;
        //                         return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
        //                     }
        //                 break;
        //                 case '500':
        //                     if($printSide > 0){
        //                         $printRate = (68.5*40)/100;
        //                         $cardRate = $total+$printRate;
        //                         $finalTotal = ($cardRate*100)/50;
        //                         return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
        //                     } else {
        //                         $printRate = (68.5*40)/100;
        //                         $cardRate = $total-$printRate;
        //                         $finalTotal = ($cardRate*100)/50;
        //                         return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
        //                     }
        //                 break;
        //                 case '1000':
        //                     if($printSide > 0){
        //                         $printRate = (89.5*40)/100;
        //                         $cardRate = $total+$printRate;
        //                         $finalTotal = ($cardRate*100)/50;
        //                         return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
        //                     } else {
        //                         $printRate = (89.5*40)/100;
        //                         $cardRate = $total-$printRate;
        //                         $finalTotal = ($cardRate*100)/50;
        //                         return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
        //                     }
        //                 break;
        //             }
        //             break;
        //         }
        //     break;
        //     case '7.17':
        //         switch ($paper) {
        //             case '1':
        //             switch ($qty) {
        //                 case '100':
        //                     if($printSide > 0){
        //                         $printRate = (32.5*40)/100;
        //                         $cardRate = $total+$printRate;
        //                         $finalTotal = ($cardRate*100)/50;
        //                         return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
        //                     } else {
        //                         $printRate = (32.5*40)/100;
        //                         $cardRate = $total-$printRate;
        //                         $finalTotal = ($cardRate*100)/50;
        //                         return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
        //                     }
        //                 break;
        //                 case '250':
        //                     if($printSide > 0){
        //                         $printRate = (48.9*40)/100;
        //                         $cardRate = $total+$printRate;
        //                         $finalTotal = ($cardRate*100)/50;
        //                         return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
        //                     } else {
        //                         $printRate = (48.9*40)/100;
        //                         $cardRate = $total-$printRate;
        //                         $finalTotal = ($cardRate*100)/50;
        //                         return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
        //                     }
        //                 break;
        //                 case '500':
        //                     if($printSide > 0){
        //                         $printRate = (68.5*40)/100;
        //                         $cardRate = $total+$printRate;
        //                         $finalTotal = ($cardRate*100)/50;
        //                         return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
        //                     } else {
        //                         $printRate = (68.5*40)/100;
        //                         $cardRate = $total-$printRate;
        //                         $finalTotal = ($cardRate*100)/50;
        //                         return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
        //                     }
        //                 break;
        //                 case '1000':
        //                     if($printSide > 0){
        //                         $printRate = (89.5*40)/100;
        //                         $cardRate = $total+$printRate;
        //                         $finalTotal = ($cardRate*100)/50;
        //                         return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
        //                     } else {
        //                         $printRate = (89.5*40)/100;
        //                         $cardRate = $total-$printRate;
        //                         $finalTotal = ($cardRate*100)/50;
        //                         return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
        //                     }
        //                 break;
        //             }
        //             break;
        //         }
        //     break;
        //     case '6.13':
        //         switch ($paper) {
        //             case '1':
        //             switch ($qty) {
        //                 case '100':
        //                     if($printSide > 0){
        //                         $printRate = (32.5*40)/100;
        //                         $cardRate = $total+$printRate;
        //                         $finalTotal = ($cardRate*100)/50;
        //                         return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
        //                     } else {
        //                         $printRate = (32.5*40)/100;
        //                         $cardRate = $total-$printRate;
        //                         $finalTotal = ($cardRate*100)/50;
        //                         return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
        //                     }
        //                 break;
        //                 case '250':
        //                     if($printSide > 0){
        //                         $printRate = (48.9*40)/100;
        //                         $cardRate = $total+$printRate;
        //                         $finalTotal = ($cardRate*100)/50;
        //                         return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
        //                     } else {
        //                         $printRate = (48.9*40)/100;
        //                         $cardRate = $total-$printRate;
        //                         $finalTotal = ($cardRate*100)/50;
        //                         return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
        //                     }
        //                 break;
        //                 case '500':
        //                     if($printSide > 0){
        //                         $printRate = (68.5*40)/100;
        //                         $cardRate = $total+$printRate;
        //                         $finalTotal = ($cardRate*100)/50;
        //                         return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
        //                     } else {
        //                         $printRate = (68.5*40)/100;
        //                         $cardRate = $total-$printRate;
        //                         $finalTotal = ($cardRate*100)/50;
        //                         return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
        //                     }
        //                 break;
        //                 case '1000':
        //                     if($printSide > 0){
        //                         $printRate = (89.5*40)/100;
        //                         $cardRate = $total+$printRate;
        //                         $finalTotal = ($cardRate*100)/50;
        //                         return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
        //                     } else {
        //                         $printRate = (89.5*40)/100;
        //                         $cardRate = $total-$printRate;
        //                         $finalTotal = ($cardRate*100)/50;
        //                         return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
        //                     }
        //                 break;
        //             }
        //             break;
        //         }
        //     break;
        //     case '5':
        //         switch ($paper) {
        //             case '1':
        //             switch ($qty) {
        //                 case '100':
        //                     if($printSide > 0){
        //                         $printRate = (32.5*40)/100;
        //                         $cardRate = $total+$printRate;
        //                         $finalTotal = ($cardRate*100)/50;
        //                         return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
        //                     } else {
        //                         $printRate = (32.5*40)/100;
        //                         $cardRate = $total-$printRate;
        //                         $finalTotal = ($cardRate*100)/50;
        //                         return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
        //                     }
        //                 break;
        //                 case '250':
        //                     if($printSide > 0){
        //                         $printRate = (48.9*40)/100;
        //                         $cardRate = $total+$printRate;
        //                         $finalTotal = ($cardRate*100)/50;
        //                         return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
        //                     } else {
        //                         $printRate = (48.9*40)/100;
        //                         $cardRate = $total-$printRate;
        //                         $finalTotal = ($cardRate*100)/50;
        //                         return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
        //                     }
        //                 break;
        //                 case '500':
        //                     if($printSide > 0){
        //                         $printRate = (68.5*40)/100;
        //                         $cardRate = $total+$printRate;
        //                         $finalTotal = ($cardRate*100)/50;
        //                         return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
        //                     } else {
        //                         $printRate = (68.5*40)/100;
        //                         $cardRate = $total-$printRate;
        //                         $finalTotal = ($cardRate*100)/50;
        //                         return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
        //                     }
        //                 break;
        //                 case '1000':
        //                     if($printSide > 0){
        //                         $printRate = (89.5*40)/100;
        //                         $cardRate = $total+$printRate;
        //                         $finalTotal = ($cardRate*100)/50;
        //                         return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
        //                     } else {
        //                         $printRate = (89.5*40)/100;
        //                         $cardRate = $total-$printRate;
        //                         $finalTotal = ($cardRate*100)/50;
        //                         return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
        //                     }
        //                 break;
        //             }
        //             break;
        //         }
        //     break;
        //     case '6':
        //         switch ($paper) {
        //             case '1':
        //             switch ($qty) {
        //                 case '100':
        //                     if($printSide > 0){
        //                         $printRate = (32.5*40)/100;
        //                         $cardRate = $total+$printRate;
        //                         $finalTotal = ($cardRate*100)/50;
        //                         return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
        //                     } else {
        //                         $printRate = (32.5*40)/100;
        //                         $cardRate = $total-$printRate;
        //                         $finalTotal = ($cardRate*100)/50;
        //                         return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
        //                     }
        //                 break;
        //                 case '250':
        //                     if($printSide > 0){
        //                         $printRate = (48.9*40)/100;
        //                         $cardRate = $total+$printRate;
        //                         $finalTotal = ($cardRate*100)/50;
        //                         return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
        //                     } else {
        //                         $printRate = (48.9*40)/100;
        //                         $cardRate = $total-$printRate;
        //                         $finalTotal = ($cardRate*100)/50;
        //                         return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
        //                     }
        //                 break;
        //                 case '500':
        //                     if($printSide > 0){
        //                         $printRate = (68.5*40)/100;
        //                         $cardRate = $total+$printRate;
        //                         $finalTotal = ($cardRate*100)/50;
        //                         return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
        //                     } else {
        //                         $printRate = (68.5*40)/100;
        //                         $cardRate = $total-$printRate;
        //                         $finalTotal = ($cardRate*100)/50;
        //                         return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
        //                     }
        //                 break;
        //                 case '1000':
        //                     if($printSide > 0){
        //                         $printRate = (89.5*40)/100;
        //                         $cardRate = $total+$printRate;
        //                         $finalTotal = ($cardRate*100)/50;
        //                         return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
        //                     } else {
        //                         $printRate = (89.5*40)/100;
        //                         $cardRate = $total-$printRate;
        //                         $finalTotal = ($cardRate*100)/50;
        //                         return response()->json(['printsideRate'=>$printRate, 'total'=>$finalTotal,'final'=>$cardRate]);
        //                     }
        //                 break;
        //             }
        //             break;
        //         }
        //     break;
        // }
    }
    public function uvrounded(Request $request)
    {
        $size = $request->size;
        $paper = $request->paper;
        $qty = $request->qty;
        $rounded = $request->rounded;
        $total = $request->total;

        switch ($size) {
            case '7':
                switch ($paper) {
                    case '1':
                    switch ($qty) {
                        case '100':
                            if($rounded > 0){
                                $roundedRate = (69.99*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (69.99*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '250':
                            if($rounded > 0){
                                $roundedRate = (99.99*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (99.99*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '500':
                            if($rounded > 0){
                                $roundedRate = (135.99*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (135.99*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '1000':
                            if($rounded > 0){
                                $roundedRate = (170.55*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (170.55*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '2000':
                            if($rounded > 0){
                                $roundedRate = (239.5*20)/100;
                                $cardRate = $total+$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $roundedRate = (239.5*20)/100;
                                $cardRate = $total-$roundedRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                    }
                    break;
                }
            break;
            // case '7.17':
            //     switch ($paper) {
            //         case '1':
            //         switch ($qty) {
            //             case '100':
            //                 if($rounded > 0){
            //                     $roundedRate = (32.5*20)/100;
            //                     $cardRate = $total+$roundedRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 } else {
            //                     $roundedRate = (32.5*20)/100;
            //                     $cardRate = $total-$roundedRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 }
            //             break;
            //             case '250':
            //                 if($rounded > 0){
            //                     $roundedRate = (48.9*20)/100;
            //                     $cardRate = $total+$roundedRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 } else {
            //                     $roundedRate = (48.9*20)/100;
            //                     $cardRate = $total-$roundedRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 }
            //             break;
            //             case '500':
            //                 if($rounded > 0){
            //                     $roundedRate = (68.5*20)/100;
            //                     $cardRate = $total+$roundedRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 } else {
            //                     $roundedRate = (68.5*20)/100;
            //                     $cardRate = $total-$roundedRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 }
            //             break;
            //             case '1000':
            //                 if($rounded > 0){
            //                     $roundedRate = (89.5*20)/100;
            //                     $cardRate = $total+$roundedRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 } else {
            //                     $roundedRate = (89.5*20)/100;
            //                     $cardRate = $total-$roundedRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 }
            //             break;
            //         }
            //         break;
            //     }
            // break;
            // case '6.13':
            //     switch ($paper) {
            //         case '1':
            //         switch ($qty) {
            //             case '100':
            //                 if($rounded > 0){
            //                     $roundedRate = (32.5*20)/100;
            //                     $cardRate = $total+$roundedRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 } else {
            //                     $roundedRate = (32.5*20)/100;
            //                     $cardRate = $total-$roundedRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 }
            //             break;
            //             case '250':
            //                 if($rounded > 0){
            //                     $roundedRate = (48.9*20)/100;
            //                     $cardRate = $total+$roundedRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 } else {
            //                     $roundedRate = (48.9*20)/100;
            //                     $cardRate = $total-$roundedRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 }
            //             break;
            //             case '500':
            //                 if($rounded > 0){
            //                     $roundedRate = (68.5*20)/100;
            //                     $cardRate = $total+$roundedRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 } else {
            //                     $roundedRate = (68.5*20)/100;
            //                     $cardRate = $total-$roundedRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 }
            //             break;
            //             case '1000':
            //                 if($rounded > 0){
            //                     $roundedRate = (89.5*20)/100;
            //                     $cardRate = $total+$roundedRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 } else {
            //                     $roundedRate = (89.5*20)/100;
            //                     $cardRate = $total-$roundedRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 }
            //             break;
            //         }
            //         break;
            //     }
            // break;
            // case '4':
            //     switch ($paper) {
            //         case '1':
            //         switch ($qty) {
            //             case '100':
            //                 if($rounded > 0){
            //                     $roundedRate = (32.5*20)/100;
            //                     $cardRate = $total+$roundedRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 } else {
            //                     $roundedRate = (32.5*20)/100;
            //                     $cardRate = $total-$roundedRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 }
            //             break;
            //             case '250':
            //                 if($rounded > 0){
            //                     $roundedRate = (48.9*20)/100;
            //                     $cardRate = $total+$roundedRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 } else {
            //                     $roundedRate = (48.9*20)/100;
            //                     $cardRate = $total-$roundedRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 }
            //             break;
            //             case '500':
            //                 if($rounded > 0){
            //                     $roundedRate = (68.5*20)/100;
            //                     $cardRate = $total+$roundedRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 } else {
            //                     $roundedRate = (68.5*20)/100;
            //                     $cardRate = $total-$roundedRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 }
            //             break;
            //             case '1000':
            //                 if($rounded > 0){
            //                     $roundedRate = (89.5*20)/100;
            //                     $cardRate = $total+$roundedRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 } else {
            //                     $roundedRate = (89.5*20)/100;
            //                     $cardRate = $total-$roundedRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 }
            //             break;
            //         }
            //         break;
            //     }
            // break;
            // case '5':
            //     switch ($paper) {
            //         case '1':
            //         switch ($qty) {
            //             case '100':
            //                 if($rounded > 0){
            //                     $roundedRate = (32.5*20)/100;
            //                     $cardRate = $total+$roundedRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 } else {
            //                     $roundedRate = (32.5*20)/100;
            //                     $cardRate = $total-$roundedRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 }
            //             break;
            //             case '250':
            //                 if($rounded > 0){
            //                     $roundedRate = (48.9*20)/100;
            //                     $cardRate = $total+$roundedRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 } else {
            //                     $roundedRate = (48.9*20)/100;
            //                     $cardRate = $total-$roundedRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 }
            //             break;
            //             case '500':
            //                 if($rounded > 0){
            //                     $roundedRate = (68.5*20)/100;
            //                     $cardRate = $total+$roundedRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 } else {
            //                     $roundedRate = (68.5*20)/100;
            //                     $cardRate = $total-$roundedRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 }
            //             break;
            //             case '1000':
            //                 if($rounded > 0){
            //                     $roundedRate = (89.5*20)/100;
            //                     $cardRate = $total+$roundedRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 } else {
            //                     $roundedRate = (89.5*20)/100;
            //                     $cardRate = $total-$roundedRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 }
            //             break;
            //         }
            //         break;
            //     }
            // break;
            // case '6':
            //     switch ($paper) {
            //         case '1':
            //         switch ($qty) {
            //             case '100':
            //                 if($rounded > 0){
            //                     $roundedRate = (32.5*20)/100;
            //                     $cardRate = $total+$roundedRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 } else {
            //                     $roundedRate = (32.5*20)/100;
            //                     $cardRate = $total-$roundedRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 }
            //             break;
            //             case '250':
            //                 if($rounded > 0){
            //                     $roundedRate = (48.9*20)/100;
            //                     $cardRate = $total+$roundedRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 } else {
            //                     $roundedRate = (48.9*20)/100;
            //                     $cardRate = $total-$roundedRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 }
            //             break;
            //             case '500':
            //                 if($rounded > 0){
            //                     $roundedRate = (68.5*20)/100;
            //                     $cardRate = $total+$roundedRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 } else {
            //                     $roundedRate = (68.5*20)/100;
            //                     $cardRate = $total-$roundedRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 }
            //             break;
            //             case '1000':
            //                 if($rounded > 0){
            //                     $roundedRate = (89.5*20)/100;
            //                     $cardRate = $total+$roundedRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 } else {
            //                     $roundedRate = (89.5*20)/100;
            //                     $cardRate = $total-$roundedRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['roundedRate'=>$roundedRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 }
            //             break;
            //         }
            //         break;
            //     }
            // break;
        }
    }
    public function uvSide(Request $request)
    {
        $size = $request->size;
        $paper = $request->paper;
        $qty = $request->qty;
        $uv = $request->uv;
        $total = $request->total;

        switch ($size) {
            case '7':
                switch ($paper) {
                    case '1':
                    switch ($qty) {
                        case '100':
                            if($uv > 0){
                                $uvRate = (69.99*30)/100;
                                $cardRate = $total+$uvRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['uvRate'=>$uvRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $uvRate = (69.99*30)/100;
                                $cardRate = $total-$uvRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['uvRate'=>$uvRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '250':
                            if($uv > 0){
                                $uvRate = (99.99*30)/100;
                                $cardRate = $total+$uvRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['uvRate'=>$uvRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $uvRate = (99.99*30)/100;
                                $cardRate = $total-$uvRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['uvRate'=>$uvRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '500':
                            if($uv > 0){
                                $uvRate = (135.99*30)/100;
                                $cardRate = $total+$uvRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['uvRate'=>$uvRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $uvRate = (135.99*30)/100;
                                $cardRate = $total-$uvRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['uvRate'=>$uvRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '1000':
                            if($uv > 0){
                                $uvRate = (170.55*30)/100;
                                $cardRate = $total+$uvRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['uvRate'=>$uvRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $uvRate = (170.55*30)/100;
                                $cardRate = $total-$uvRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['uvRate'=>$uvRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                        case '2000':
                            if($uv > 0){
                                $uvRate = (239.5*30)/100;
                                $cardRate = $total+$uvRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['uvRate'=>$uvRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            } else {
                                $uvRate = (239.5*30)/100;
                                $cardRate = $total-$uvRate;
                                $finalTotal = ($cardRate*100)/50;
                                return response()->json(['uvRate'=>$uvRate, 'total'=>$finalTotal,'final'=>$cardRate]);
                            }
                        break;
                    }
                    break;
                }
            break;
            // case '7.17':
            //     switch ($paper) {
            //         case '1':
            //         switch ($qty) {
            //             case '100':
            //                 if($uv > 0){
            //                     $uvRate = (32.5*30)/100;
            //                     $cardRate = $total+$uvRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['uvRate'=>$uvRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 } else {
            //                     $uvRate = (32.5*30)/100;
            //                     $cardRate = $total-$uvRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['uvRate'=>$uvRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 }
            //             break;
            //             case '250':
            //                 if($uv > 0){
            //                     $uvRate = (48.9*30)/100;
            //                     $cardRate = $total+$uvRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['uvRate'=>$uvRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 } else {
            //                     $uvRate = (48.9*30)/100;
            //                     $cardRate = $total-$uvRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['uvRate'=>$uvRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 }
            //             break;
            //             case '500':
            //                 if($uv > 0){
            //                     $uvRate = (68.5*30)/100;
            //                     $cardRate = $total+$uvRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['uvRate'=>$uvRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 } else {
            //                     $uvRate = (68.5*30)/100;
            //                     $cardRate = $total-$uvRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['uvRate'=>$uvRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 }
            //             break;
            //             case '1000':
            //                 if($uv > 0){
            //                     $uvRate = (89.5*30)/100;
            //                     $cardRate = $total+$uvRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['uvRate'=>$uvRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 } else {
            //                     $uvRate = (89.5*30)/100;
            //                     $cardRate = $total-$uvRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['uvRate'=>$uvRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 }
            //             break;
            //         }
            //         break;
            //     }
            // break;
            // case '6.13':
            //     switch ($paper) {
            //         case '1':
            //         switch ($qty) {
            //             case '100':
            //                 if($uv > 0){
            //                     $uvRate = (32.5*30)/100;
            //                     $cardRate = $total+$uvRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['uvRate'=>$uvRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 } else {
            //                     $uvRate = (32.5*30)/100;
            //                     $cardRate = $total-$uvRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['uvRate'=>$uvRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 }
            //             break;
            //             case '250':
            //                 if($uv > 0){
            //                     $uvRate = (48.9*30)/100;
            //                     $cardRate = $total+$uvRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['uvRate'=>$uvRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 } else {
            //                     $uvRate = (48.9*30)/100;
            //                     $cardRate = $total-$uvRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['uvRate'=>$uvRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 }
            //             break;
            //             case '500':
            //                 if($uv > 0){
            //                     $uvRate = (68.5*30)/100;
            //                     $cardRate = $total+$uvRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['uvRate'=>$uvRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 } else {
            //                     $uvRate = (68.5*30)/100;
            //                     $cardRate = $total-$uvRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['uvRate'=>$uvRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 }
            //             break;
            //             case '1000':
            //                 if($uv > 0){
            //                     $uvRate = (89.5*30)/100;
            //                     $cardRate = $total+$uvRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['uvRate'=>$uvRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 } else {
            //                     $uvRate = (89.5*30)/100;
            //                     $cardRate = $total-$uvRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['uvRate'=>$uvRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 }
            //             break;
            //         }
            //         break;
            //     }
            // break;
            // case '4':
            //     switch ($paper) {
            //         case '1':
            //         switch ($qty) {
            //             case '100':
            //                 if($uv > 0){
            //                     $uvRate = (32.5*30)/100;
            //                     $cardRate = $total+$uvRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['uvRate'=>$uvRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 } else {
            //                     $uvRate = (32.5*30)/100;
            //                     $cardRate = $total-$uvRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['uvRate'=>$uvRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 }
            //             break;
            //             case '250':
            //                 if($uv > 0){
            //                     $uvRate = (48.9*30)/100;
            //                     $cardRate = $total+$uvRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['uvRate'=>$uvRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 } else {
            //                     $uvRate = (48.9*30)/100;
            //                     $cardRate = $total-$uvRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['uvRate'=>$uvRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 }
            //             break;
            //             case '500':
            //                 if($uv > 0){
            //                     $uvRate = (68.5*30)/100;
            //                     $cardRate = $total+$uvRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['uvRate'=>$uvRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 } else {
            //                     $uvRate = (68.5*30)/100;
            //                     $cardRate = $total-$uvRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['uvRate'=>$uvRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 }
            //             break;
            //             case '1000':
            //                 if($uv > 0){
            //                     $uvRate = (89.5*30)/100;
            //                     $cardRate = $total+$uvRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['uvRate'=>$uvRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 } else {
            //                     $uvRate = (89.5*30)/100;
            //                     $cardRate = $total-$uvRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['uvRate'=>$uvRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 }
            //             break;
            //         }
            //         break;
            //     }
            // break;
            // case '5':
            //     switch ($paper) {
            //         case '1':
            //         switch ($qty) {
            //             case '100':
            //                 if($uv > 0){
            //                     $uvRate = (32.5*30)/100;
            //                     $cardRate = $total+$uvRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['uvRate'=>$uvRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 } else {
            //                     $uvRate = (32.5*30)/100;
            //                     $cardRate = $total-$uvRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['uvRate'=>$uvRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 }
            //             break;
            //             case '250':
            //                 if($uv > 0){
            //                     $uvRate = (48.9*30)/100;
            //                     $cardRate = $total+$uvRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['uvRate'=>$uvRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 } else {
            //                     $uvRate = (48.9*30)/100;
            //                     $cardRate = $total-$uvRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['uvRate'=>$uvRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 }
            //             break;
            //             case '500':
            //                 if($uv > 0){
            //                     $uvRate = (68.5*30)/100;
            //                     $cardRate = $total+$uvRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['uvRate'=>$uvRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 } else {
            //                     $uvRate = (68.5*30)/100;
            //                     $cardRate = $total-$uvRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['uvRate'=>$uvRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 }
            //             break;
            //             case '1000':
            //                 if($uv > 0){
            //                     $uvRate = (89.5*30)/100;
            //                     $cardRate = $total+$uvRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['uvRate'=>$uvRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 } else {
            //                     $uvRate = (89.5*30)/100;
            //                     $cardRate = $total-$uvRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['uvRate'=>$uvRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 }
            //             break;
            //         }
            //         break;
            //     }
            // break;
            // case '6':
            //     switch ($paper) {
            //         case '1':
            //         switch ($qty) {
            //             case '100':
            //                 if($uv > 0){
            //                     $uvRate = (32.5*30)/100;
            //                     $cardRate = $total+$uvRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['uvRate'=>$uvRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 } else {
            //                     $uvRate = (32.5*30)/100;
            //                     $cardRate = $total-$uvRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['uvRate'=>$uvRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 }
            //             break;
            //             case '250':
            //                 if($uv > 0){
            //                     $uvRate = (48.9*30)/100;
            //                     $cardRate = $total+$uvRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['uvRate'=>$uvRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 } else {
            //                     $uvRate = (48.9*30)/100;
            //                     $cardRate = $total-$uvRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['uvRate'=>$uvRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 }
            //             break;
            //             case '500':
            //                 if($uv > 0){
            //                     $uvRate = (68.5*30)/100;
            //                     $cardRate = $total+$uvRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['uvRate'=>$uvRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 } else {
            //                     $uvRate = (68.5*30)/100;
            //                     $cardRate = $total-$uvRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['uvRate'=>$uvRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 }
            //             break;
            //             case '1000':
            //                 if($uv > 0){
            //                     $uvRate = (89.5*30)/100;
            //                     $cardRate = $total+$uvRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['uvRate'=>$uvRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 } else {
            //                     $uvRate = (89.5*30)/100;
            //                     $cardRate = $total-$uvRate;
            //                     $finalTotal = ($cardRate*100)/50;
            //                     return response()->json(['uvRate'=>$uvRate, 'total'=>$finalTotal,'final'=>$cardRate]);
            //                 }
            //             break;
            //         }
            //         break;
            //     }
            // break;
        }
    }
}
