<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class DesignController extends Controller
{
    public function designPrice(Request $request)
    {
        $qty = $request->qty;
        $product = Product::find($request->id);
        $priceCheck = $product->pricing[$request->key];
        foreach ($priceCheck as $key => $check) {
            $priceFind[] = $this->comparePriceArrays($check,array('1'));
        }
        $price = array_values(array_filter(array_map('floatval',$priceFind)));
        // return $price;
        $bannerRate = $price[0]*$qty;
        $finalTotal = ($bannerRate*100)/50;
        return response()->json(['total'=>$bannerRate,'final'=>$finalTotal,'baseRate'=>$price[0]]);
        
    }
    public function comparePriceArrays($array1,$array2) {
        $uniqueValues = array_unique(array_slice($array1, 0, 1));
        // return $uniqueValues;
        if ($uniqueValues === $array2) {
            return $array1[1];
        }
    }
    public function designProperty(Request $request)
    {
        // return $request;
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
                $percentageRate = ($percentageCount)/100;
                // return $percentageRate;
                $array1[] = $percentageRate;
            } else {
                $percentageRate = $percentageCount;
                $array1[] = (float)$percentageRate;
            }
        }
        // return response()->json([$actionFind,$percentageFind,$array1]);

        $percentageTotal = array_sum($array1);
        
        $qty = $request->qty;
        // return $percentageTotal;
        $bannerRate = $percentageTotal*$qty;
        $finalTotal = ($bannerRate*100)/50;
        return response()->json(['baseRate'=>$baseRate,'percentageRates'=>$array1, 'total'=>$bannerRate,'final'=>$finalTotal]);
        
    }
}
