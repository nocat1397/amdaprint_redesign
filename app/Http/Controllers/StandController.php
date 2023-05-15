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
        // return $priceFind;
        $price = array_values(array_filter(array_map('floatval',$priceFind)));
        $standRate = $price[0]*$qty;
        $standVal = (float)$price[0];
        $finalTotal = ($standRate*100)/50;
        return response()->json(['total'=>$standRate,'final'=>$finalTotal,'baseRate'=>$price[0], 'standVal'=>$standVal]);
        
    }
    public function bstandPrice(Request $request)
    {
        $size = $request->size;
        $paper = $request->paper;
        $qty = $request->qty;
        $priceArray = array($size,'1');
        $product = Product::find($request->id);
        $priceCheck = $product->pricing[$request->key];
        foreach ($priceCheck as $key => $check) {
            $priceFind[] = $this->compareBstandPriceArrays($check,$priceArray);
        }
        // return $priceFind;
        $price = array_values(array_filter(array_map('floatval',$priceFind)));
        $standRate = $price[0]*$qty;
        $bannerVal = (float)$price[0];
        $finalTotal = ($standRate*100)/50;
        return response()->json(['total'=>$standRate,'final'=>$finalTotal,'baseRate'=>$price[0], 'bannerVal'=>$bannerVal]);
        
    }
    public function bannerStandPrice(Request $request)
    {
        $size = $request->size;
        $paper = $request->paper;
        $qty = $request->qty;
        $priceArray = array($size,'1');
        $product = Product::find($request->id);
        $priceCheck = $product->pricing[$request->key];
        foreach ($priceCheck as $key => $check) {
            $priceFind[] = $this->compareBannerStandPriceArrays($check,$priceArray);
        }
        $price = array_values(array_filter($priceFind));
        $standVal = (float)$price[0][0];
        $bannerVal = (float)$price[0][1];
        $totalVal = array_sum($price[0]);
        // return array_sum($price[0]);
        $standRate = $totalVal*$qty;
        $finalTotal = ($standRate*100)/50;
        return response()->json(['total'=>$standRate,'final'=>$finalTotal,'standVal'=>$standVal,'bannerVal'=>$bannerVal,'baseRate'=>$totalVal]);
        
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
    public function compareBstandPriceArrays($array1, $array2) {
        $uniqueValues = array_unique(array_slice($array1, 0, 2));
        // return $uniqueValues;
        if ($uniqueValues === $array2) {
          return $array1[3];
        }
    }
    public function compareBannerStandPriceArrays($array1, $array2) {
        $uniqueValues = array_unique(array_slice($array1, 0, 2));
        // return $uniqueValues;
        if ($uniqueValues === $array2) {
          return array_slice($array1,2);
        }
    }
    
}
