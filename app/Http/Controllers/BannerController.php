<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function bannerPrice(Request $request)
    {
        $size = $request->size;
        // $cal1 = strtok($size,' x ');

        // $cal2 = substr($size, strrpos($size, " x ") + 1);
        $replacedSize = str_replace(' x ',' ',$size);
        // return $replacedSize;
        $cal1 = strtok($replacedSize,' ');

        $cal2 = substr($replacedSize, strrpos($replacedSize, " ") + 1);
        $totalSize = $cal1*$cal2;
        $qty = $request->qty;
        if ($totalSize < 100) {
            $priceArray = ['0-99'];
        } 
        if ($totalSize > 99 && $size < 150) {
            $priceArray = ['100-149'];
        } 
        if ($totalSize > 149 && $size < 200) {
            $priceArray = ['150-199'];
        }
        if ($totalSize > 199) {
            $priceArray = ['200'];
        }
        $product = Product::find($request->id);
        $priceCheck = $product->pricing[$request->key];
        foreach ($priceCheck as $key => $check) {
            $priceFind[] = $this->comparePriceArrays($check,$priceArray);
        }
        $price = array_values(array_filter(array_map('floatval',$priceFind)));
        // return $price;
        $bannerRate = ($totalSize*$price[0])*$qty;
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
    public function bannerProperty(Request $request)
    {
        // return $request;
        $product = Product::find($request->id);

        $propertyKeys = $request->property_key;
        $percentageKeys = $request->percentageKey;
        $baseRate = $request->basePrice;
        $total = $request->total;

        $size = $request->size;
        // $cal1 = strtok($size,' x ');
        // $cal2 = substr($size, strpos($size, " x ") + 1);
        $replacedSize = str_replace(' x ',' ',$size);
        $cal1 = strtok($replacedSize,' ');
        $cal2 = substr($replacedSize, strrpos($replacedSize, " ") + 1);
        $totalSize = $cal1*$cal2;

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
                $percentageRate = (($totalSize*$baseRate)*$percentageCount)/100;
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
        $bannerRate = $percentageTotal+(($totalSize*$baseRate)*$qty);
        $finalTotal = ($bannerRate*100)/50;
        return response()->json(['baseRate'=>$baseRate,'percentageRates'=>$array1, 'total'=>$bannerRate,'final'=>$finalTotal]);
        
    }
    
}
