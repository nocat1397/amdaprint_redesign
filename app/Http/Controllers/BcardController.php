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
        $price = array_values(array_filter(array_map('floatval',$priceFind)));
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
                $array1[] = (float)$percentageRate;
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
    
}
