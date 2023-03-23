<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Size;
use App\Image;
use App\Rating;
use App\Product;
use App\Category;
use App\Manufacture;
use App\SubCategory;
use App\SubSubCategory;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\UploadImageRequest;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\Rating as RatingResource;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        // return $products->subSubCategory;
        // exit;
        
        return view('admin.product.showProducts',compact('products'));
    }
    public function addProduct()
    {
        // return session()->get('productData');
        \Session::forget('showProductData');
        $categories = Category::all();
        $productSession = session()->get('productData');
        $productData = Product::where('category_id',$productSession['catId'] ?? '')->first();
        // return $productData;
        if($productData != null)
        {
            $productArrayKey = array_search(str_replace(' ','-',$productSession['name']),$productData->name);
        } else {
            $productArrayKey = null;
        }
        // return \Session::all();
        return view('admin.product.addProduct', compact('categories','productData','productArrayKey','productSession'));
    }
    public function showProduct()
    {
        $categories = Category::with('product')->has('product')->get();
        // return $categories;
        return view('admin.product.showProducts', compact('categories'));
    }
    public function showCatProduct($id,$name)
    {
        // return session()->get('productDataLabels');
        \Session::forget(['showProductData','productData','productDataLabels']);
        // return \Session::all();
        $category = Category::find($id);
        $productData = Product::where('category_id',$id)->first();
        $productArrayKey = array_search(str_replace(' ','-',$name),$productData->name);
        // return $productData->category;;
        // return $productData['pricing'][$productArrayKey];
        session()->put('showProductData',$productData['name'][$productArrayKey]);
        return view('admin.product.addProduct', compact('category','productData','productArrayKey'));
    }
    public function infoSession(Request $request)
    {
        \Session::forget('productData');
        $productData = session('productData');
        session()->put('productData',$request->all());
        $product = Product::where('category_id',$request->catId)->first();
        $productName = Str::title($request->name);
        // return $product;
        if($product !== null)
        {
            // $keyFind = array_search(str_replace(' ','-',session('productData')['name'] ?? session('showProductData')),$product->name);
            $keyFind = array_search(str_replace(' ','-',$productName ?? session('showProductData')),$product->name);
            if($keyFind !== false)
            {
                // return $keyFind;
                $names = $product->name;
                $replaceName = Arr::set($names,$keyFind,str_replace(' ','-',$productName));
                $name = $replaceName;
                // return $keyFind;
                
                $specs = $product->specification;
                $replaceSpec = Arr::set($specs,$keyFind,str_replace(' ','-',$request->specs));
                $spec = $replaceSpec;

                $descs = $product->desc;
                $replaceDesc = Arr::set($descs,$keyFind,$request->desc);
                $desc = $replaceDesc;
                
                $sizes = $product->size;
                $replaceSize = Arr::set($sizes,$keyFind,$request->size);
                $size = $replaceSize;
                
                $paperTypes = $product->paper_type;
                $replacePaperType = Arr::set($paperTypes,$keyFind,$request->paperType);
                $paperType = $replacePaperType;
                
                $qtys = $product->qty;
                $replaceQty = Arr::set($qtys,$keyFind,$request->qty);
                $qty = $replaceQty;
                // return response()->json([$name,$desc,$spec,$size,$paperType,$qty]);
                $product->update(['name'=>$name,'desc'=>$desc,'specification'=>$spec,
                                'size'=>$size,'paper_type'=>$paperType,'qty'=>$qty]);
                $product->save();
            } else {
                // return $keyFind;
                $names = $product->name;
                $replaceName = array_push($names,str_replace(' ','-',$productName));
                $name = $replaceName;
                // return $names;
                
                $specs = $product->specification;
                $replaceSpec = array_push($specs,str_replace(' ','-',$request->specs));
                $spec = $replaceSpec;
            
                $descs = $product->desc;
                $replaceDesc = array_push($descs,$request->desc);
                $desc = $replaceDesc;
                
                $sizes = $product->size;
                $replaceSize = array_push($sizes,$request->size);
                $size = $replaceSize;
                
                $paperTypes = $product->paper_type;
                $replacePaperType = array_push($paperTypes,$request->paperType);
                $paperType = $replacePaperType;
                
                $qtys = $product->qty;
                $replaceQty = array_push($qtys,$request->qty);
                $qty = $replaceQty;
                // return response()->json([$names,$descs,$specs,$sizes,$paperTypes,$qtys]);
                $product->update(['name'=>$names,'desc'=>$descs,'specification'=>$specs,
                                'size'=>$sizes,'paper_type'=>$paperTypes,'qty'=>$qtys]);
                $product->save();
            }   
            
            
            return response(session()->get('productData'));
            
        } else {
            $name[] = str_replace(' ','-',$productName);
            // return $name;
            $specs[] = $request->specs;
            $desc[] = $request->desc;
            $size[] = $request->size;
            $paperType[] = $request->paperType;
            $qty[] = $request->qty;

            $product = new Product;
            $product->category_id = $request->catId;
            $product->name = $name;
            $product->desc = $desc;
            $product->specification = $specs;
            $product->size = $size;
            $product->paper_type = $paperType;
            $product->qty = $qty;
            $product->save();

            session()->put('productData',$request->all());

            return response(session()->get('productData'));
        }
    }
    public function propertySession(Request $request)
    {
        $productData = session('productData');
        $inputs = $request->except('category_id','labels');
        $product = Product::where('category_id',(int)$request->category_id)->first();
        // return $request->category_id;
        if($product !== null)
        {
            $names = $product->name;
            $keyFind = array_search(str_replace(' ','-',session('productData')['name'] ?? session('showProductData')),$product->name);
            
            $properties = $product->property;
            $propertyData = $product->property_data;
            $propertyAction = $product->property_action;
            $propertyPercentage = $product->property_percentage;
            $labels = array_filter($request->labels);
            // return $keyFind;
            if($properties != null)
            {
                $keyCheck = array_key_exists($keyFind,$properties);
                // $propertiesArray = Arr::set($properties,$keyFind,$labels);
                // return \Session::all();
                if($keyCheck != false)
                {
                    $keySet = array($keyFind => str_replace(' ','-',$labels));
                    $property = array_replace($properties, $keySet);
                    // return $property;
                    $product->update(['property'=>$property]);
                } else {
                    $property = array_push($properties, str_replace(' ','-',$labels));
                        // return $properties;
                    $product->update(['property'=>$properties]);
                }
            } else {
                $property[] = $labels;
                $product->update(['property'=>$property]);
            }
            //////////////////////////////////////////////////////////////////
            foreach ($inputs as $key => $value) {
                if(Str::contains($key, 'data')){
                    $datas[] = $value;
                }
                if(Str::contains($key, 'percentage')){
                    $percentages[] = $value;
                }
                if(Str::contains($key, 'action')){
                    $actions[] = $value;
                }
            }
            // return $datas;
            if(isset($datas) && isset($percentages) && isset($actions))
            {

            $datasfiltered = array_map(function ($subarray) {
                return array_filter($subarray, function ($value) {
                    return $value !== null;
                });
            }, $datas);
            $percentagesfiltered = array_map(function ($subarray) {
                return array_filter($subarray, function ($value) {
                    return $value !== null;
                });
            }, $percentages);
            $datasfiltered = array_filter($datasfiltered, function ($subarray) {
                return !empty($subarray);
            });
            $percentagesfiltered = array_filter($percentagesfiltered, function ($subarray) {
                return !empty($subarray);
            });
            // return $request;
            // return response()->json([$keys,$values,$datas,$percentages,$actions,$datasfiltered,$percentagesfiltered]);
            if(sizeof($datasfiltered) > 0 && sizeof($percentagesfiltered) > 0 && sizeof($actions) > 0)
            {
                // return $datas;
                if($propertyData != null)
                {
                $keyCheck2 = array_key_exists($keyFind,$propertyData);
                if($keyCheck2 != false)
                {
                    $data = Arr::set($propertyData, $keyFind, $datasfiltered);
                    $product->update(['property_data'=>$data]);
                } else {
                    foreach ($request->labels as $key=>$label) {    
                        $propertiesData[] = $datasfiltered[$key];
                    }
                    $dataPush = array_push($propertyData, $propertiesData);
                    $product->update(['property_data'=>$propertyData]);
                }
                } else {
                    $data[] = $datasfiltered;
                    $product->update(['property_data'=>$data]);
                }
            }
            // return $request;
            //////////////////////////////////////////////////////////////////
           
            // return $percentages;
            if(sizeof($datasfiltered) > 0 && sizeof($percentagesfiltered) > 0 && sizeof($actions) > 0)
            {
                if($propertyPercentage != null)
                {
                $keyCheck3 = array_key_exists($keyFind,$propertyPercentage);
                if($keyCheck3 != false)
                {
                    $percentage =  Arr::set($propertyPercentage, $keyFind, $percentagesfiltered);
                    $product->update(['property_percentage'=>$percentage]);
                } else {
                    foreach ($request->labels as $key=>$label) {    
                        $propertiesPercentage[] = $percentagesfiltered[$key];
                    }
                    $percentagePush = array_push($propertyPercentage, $propertiesPercentage);
                    $product->update(['property_percentage'=>$propertyPercentage]);
                }
            } else {
                $percentage[] = $percentagesfiltered;
                $product->update(['property_percentage'=>$percentage]);
            }
            }
            //////////////////////////////////////////////////////////////////
            
                
            if(sizeof($datasfiltered) > 0 && sizeof($percentagesfiltered) > 0 && sizeof($actions) > 0 && count($datasfiltered) == count($actions) && count($percentagesfiltered) == count($actions))
            {
            if($propertyAction != null)
            {
                $keyCheck4 = array_key_exists($keyFind,$propertyAction);
                if($keyCheck4 != false)
                {
                    $action =  Arr::set($propertyAction, $keyFind, $actions);
                    $product->update(['property_action'=>$action]);
                } else {
                    foreach ($request->labels as $key=>$label) {    
                        $propertiesAction[] = $actions[$key];
                    }
                    $actionPush = array_push($propertyAction, $propertiesAction);
                    $product->update(['property_action'=>$propertyAction]);
                }
            } else {
                $action[] = $actions;
                $product->update(['property_action'=>$action]);
            }
        }
        $product->save();
        
        session()->put('productDataLabels',$request->all());
        if(count($request->labels) !== count($datasfiltered))
        {
            return response(0);
        } elseif(count($datasfiltered) >! count($actions) || count($percentagesfiltered) >! count($actions))
            {
                return response(1);
            } else {
                return response(0);
            }
    } else {
        $product->save();
        
        session()->put('productDataLabels',$request->all());
        return response(0);

    }
            
        }
    }
    public function pricingSession(Request $request)
    {
        // return $request;
        if(isset($request->pricingQty) && count($request->pricing) == count($request->pricingQty))
        {
            $product = Product::where('category_id',$request->category_id)->first();
            $keyFind = array_search(str_replace(' ','-',session('productData')['name'] ?? session('showProductData')),$product->name);
            $priceFilter = array_filter($request->pricing);
            foreach ($priceFilter as $key => $pricing) {
                $pricingArray[] = isset($request->pricingPaperType) ? array($request->pricingSize[$key],$request->pricingPaperType[$key],$request->pricingQty[$key],$pricing) : array($request->pricingSize[$key],$request->pricingQty[$key],$pricing);
            }
            $pricings = $product->pricing;
            
            $pricingArrSet = Arr::set($pricings,$keyFind,$pricingArray);
            $product->update(['pricing'=>$pricingArrSet]);
            $product->save();
        } else {
            $product = Product::where('category_id',$request->category_id)->first();
            $keyFind = array_search(str_replace(' ','-',session('productData')['name'] ?? session('showProductData')),$product->name);
            $priceFilter = array_filter($request->pricing);
            foreach ($priceFilter as $key => $pricing) {
                $pricingArray[] = array($request->pricingSize[$key],$pricing);
            }
            $pricings = $product->pricing;
            
            $pricingArrSet = Arr::set($pricings,$keyFind,$pricingArray);
            $product->update(['pricing'=>$pricingArrSet]);
            $product->save();
        }
            \Session::forget(['productData', 'productDataLabels','showProductData']);
        return response(1);

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dynaRoute($category,$productName)
    {
        $categories = Category::with('product')->has('product')->get();
        $cat = Category::where('name',$category)->with('product')->first();
        $products = $cat->product;
        $productKey = array_search($productName,$products['name']);
        // return $products['paper_type'];
        $product = str_replace('-',' ',$productName);
        switch ($category) {
            case 'business-cards':
                return view('front-end.products.bCard.custom',compact('product','category','categories','productKey','products'));
                break;
            
            default:

                break;
        }
    } 
    public function front()
    {
        $products = Product::with('images')->get();
        return response($products);
    }
    public function products() 
    {
        return view('front-end.products.products');
    }
    public function fetchProducts() 
    {
        return view('front-end.products.product');
    }
    public function customVinyl() 
    {
        $product = str_replace('-',' ','custom-vinyl-banner');
        return view('front-end.products.banners.customVinyl',compact('product'));
    }
    public function ecoVinyl() 
    {
        $product = str_replace('-',' ','vinyl-eco-friendly-banner');
        return view('front-end.products.banners.ecoVinyl',compact('product'));
    }
    public function backlitVinyl() 
    {
        $product = str_replace('-',' ','backlit-banner');
        return view('front-end.products.banners.backlit',compact('product'));
    }
    public function meshVinyl() 
    {
        $product = str_replace('-',' ','vinyl-mesh-banner');
        return view('front-end.products.banners.meshVinyl',compact('product'));
    }
    public function billboardVinyl() 
    {
        $product = str_replace('-',' ','vinyl-billboard-banner');
        return view('front-end.products.banners.billboardVinyl',compact('product'));
    }
    public function premiumVinyl() 
    {
        $product = str_replace('-',' ','premium-quality-banner');
        return view('front-end.products.banners.premium',compact('product'));
    }
    public function rollupStand() 
    {
        $product = str_replace('-',' ','rollup-banner-stand');
        return view('front-end.products.stand-display.retractableStand.rollup',compact('product'));
    }
    public function deluxeSingle() 
    {
        $product = str_replace('-',' ','deluxe-wide-base-single-sided-banner-stand');
        return view('front-end.products.stand-display.retractableStand.deluxeSingle',compact('product'));
    }
    public function deluxeDouble() 
    {
        $product = str_replace('-',' ','deluxe-wide-base-double-sided-banner-stand');
        return view('front-end.products.stand-display.retractableStand.deluxeDouble',compact('product'));
    }
    public function staticX() 
    {
        $product = str_replace('-',' ','static-x-banner-stand');
        return view('front-end.products.stand-display.retractableStand.staticX',compact('product'));
    }
    public function multiX() 
    {
        $product = str_replace('-',' ','multifunctional-x-banner-adjustable-stand');
        return view('front-end.products.stand-display.retractableStand.multifunctionalX',compact('product'));
    }
    public function adjustX() 
    {
        $product = str_replace('-',' ','adjustable-x-banner-stand');
        return view('front-end.products.stand-display.retractableStand.adjustableX',compact('product'));
    }
    public function segFrame() 
    {
        $product = str_replace('-',' ','SEG-fabric-frame');
        return view('front-end.products.stand-display.frames.SEGfabric',compact('product'));
    }
    public function clipFrame() 
    {
        $product = str_replace('-',' ','clip-frame');
        return view('front-end.products.stand-display.frames.clip',compact('product'));
    }
    public function posterFrame() 
    {
        $product = str_replace('-',' ','poster-frame');
        return view('front-end.products.stand-display.frames.poster',compact('product'));
    }
    public function aluminumFrame() 
    {
        $product = str_replace('-',' ','aluminum-a-frame');
        return view('front-end.products.stand-display.frames.aluminum',compact('product'));
    }
    public function bStandard() 
    {
        $product = str_replace('-',' ','standard-business-cards');
        return view('front-end.products.bCard.standard.standards',compact('product'));
    }
    public function bdiecut() 
    {
        $product = str_replace('-',' ','die-cut-business-cards');
        return view('front-end.products.bCard.diecut.diecuts',compact('product'));
    }
    public function envelopes() 
    {
        $product = str_replace('-',' ','envelopes');
        return view('front-end.products.stationary.envelope.envelopes',compact('product'));
    }
    public function tenenvelope() 
    {
        $product = str_replace('-',' ','10-envelope');
        return view('front-end.products.stationary.envelope.10envelope',compact('product'));
    }
    public function a6envelope() 
    {
        $product = str_replace('-',' ','a6-envelope');
        return view('front-end.products.stationary.envelope.a6envelope',compact('product'));
    }
    public function ninetwelveenvelope() 
    {
        $product = str_replace('-',' ','9x12-envelope');
        return view('front-end.products.stationary.envelope.9x12envelope',compact('product'));
    }
    public function nineenvelope() 
    {
        $product = str_replace('-',' ','9-envelope');
        return view('front-end.products.stationary.envelope.9envelope',compact('product'));
    }
    public function a2envelope() 
    {
        $product = str_replace('-',' ','a2-envelope');
        return view('front-end.products.stationary.envelope.a2envelope',compact('product'));
    }
    public function a7envelope() 
    {
        $product = str_replace('-',' ','a7-envelope');
        return view('front-end.products.stationary.envelope.a7envelope',compact('product'));
    }
    public function sixenvelope() 
    {
        $product = str_replace('-',' ','6x9-envelope');
        return view('front-end.products.stationary.envelope.6x9envelope',compact('product'));
    }
    public function bcustomShape() 
    {
        $product = str_replace('-',' ','custom-shape-business-card');
        return view('front-end.products.bCard.diecut.customShape',compact('product'));
    }
    public function btextured() 
    {
        $product = str_replace('-',' ','textured-business-cards');
        return view('front-end.products.bCard.textured.textures',compact('product'));
    }
    public function blinen() 
    {
        $product = str_replace('-',' ','linen-business-cards');
        return view('front-end.products.bCard.textured.linen',compact('product'));
    }
    public function bcotton() 
    {
        $product = str_replace('-',' ','cotton-business-cards');
        return view('front-end.products.bCard.textured.cotton',compact('product'));
    }
    public function brendezvous() 
    {
        $product = str_replace('-',' ','rendezvous-business-cards');
        return view('front-end.products.bCard.textured.rendezvous',compact('product'));
    }
    public function bcustom() 
    {
        $product = str_replace('-',' ','custom-business-card');
        return view('front-end.products.bCard.standard.custom',compact('product'));
    }
    public function bslim() 
    {
        $product = str_replace('-',' ','slim-business-card');
        return view('front-end.products.bCard.standard.slim',compact('product'));
    }
    public function bsquare() 
    {
        $product = str_replace('-',' ','square-business-card');
        return view('front-end.products.bCard.standard.square',compact('product'));
    }
    public function bpremium() 
    {
        $product = str_replace('-',' ','premium-business-cards');
        return view('front-end.products.bCard.premium.premiums',compact('product'));
    }
    public function braiseduv() 
    {
        $product = str_replace('-',' ','raised-uv-business-card');
        return view('front-end.products.bCard.premium.raiseduv',compact('product'));
    }
    public function braisedfoils() 
    {
        $product = str_replace('-',' ','raised-foils-business-card');
        return view('front-end.products.bCard.premium.raisedfoils',compact('product'));
    }
    // public function bTextured() 
    // {
    //     $product = str_replace('-',' ','textured-business-card');
    //     return view('front-end.products.bCard.textured',compact('product'));
    // }
    public function bFoils() 
    {
        $product = str_replace('-',' ','raised-foils-business-card');
        return view('front-end.products.bCard.raisedFoils',compact('product'));
    }
    // public function bDiecut() 
    // {
    //     $product = str_replace('-',' ','die-cut-business-card');
    //     return view('front-end.products.bCard.dieCut',compact('product'));
    // }
    // public function envelope() 
    // {
    //     $product = str_replace('-',' ','envelopes');
    //     return view('front-end.products.stationary.envelope',compact('product'));
    // }
    public function letterhead() 
    {
        $product = str_replace('-',' ','letterhead');
        return view('front-end.products.stationary.letterhead',compact('product'));
    }
    public function folders() 
    {
        $product = str_replace('-',' ','folders');
        return view('front-end.products.stationary.folders.folders',compact('product'));
    }
    public function large() 
    {
        $product = str_replace('-',' ','large-folders');
        return view('front-end.products.stationary.folders.large',compact('product'));
    }
    public function mini() 
    {
        $product = str_replace('-',' ','mini-folders');
        return view('front-end.products.stationary.folders.mini',compact('product'));
    }
    public function keyCard() 
    {
        $product = str_replace('-',' ','key-card-holder');
        return view('front-end.products.stationary.folders.keyCard',compact('product'));
    }
    public function silk() 
    {
        $product = str_replace('-',' ','silk-presentation-folders');
        return view('front-end.products.stationary.folders.silk',compact('product'));
    }
    public function notebooks() 
    {
        $product = str_replace('-',' ','notebooks');
        return view('front-end.products.stationary.notebooks',compact('product'));
    }
    public function notepads() 
    {
        $product = str_replace('-',' ','notepads');
        return view('front-end.products.stationary.notepads',compact('product'));
    }
    public function brochure() 
    {
        $product = str_replace('-',' ','brochure');
        return view('front-end.products.marketing.brochure',compact('product'));
    }
    public function flyers() 
    {
        $product = str_replace('-',' ','flyers');
        return view('front-end.products.marketing.flyers.flyers',compact('product'));
    }
    public function club() 
    {
        $product = str_replace('-',' ','club-flyers');
        return view('front-end.products.marketing.flyers.club',compact('product'));
    }
    public function business() 
    {
        $product = str_replace('-',' ','business-flyers');
        return view('front-end.products.marketing.flyers.business',compact('product'));
    }
    public function die() 
    {
        $product = str_replace('-',' ','die-cut-flyers');
        return view('front-end.products.marketing.flyers.die',compact('product'));
    }
    public function invitation() 
    {
        $product = str_replace('-',' ','invitation-cards');
        return view('front-end.products.invitationCards.invitations',compact('product'));
    }
    public function invitationFlat() 
    {
        $product = str_replace('-',' ','flat-invitation-cards');
        return view('front-end.products.invitationCards.invitationFlat',compact('product'));
    }
    public function invitationFolded() 
    {
        $product = str_replace('-',' ','folded-invitation-cards');
        return view('front-end.products.invitationCards.invitationFolded',compact('product'));
    }
    public function greetings() 
    {
        $product = str_replace('-',' ','greetings-cards');
        return view('front-end.products.invitationCards.greetings',compact('product'));
    }
    public function greetingsFlat() 
    {
        $product = str_replace('-',' ','flat-greeting-cards');
        return view('front-end.products.invitationCards.greetingFlat',compact('product'));
    }
    public function greetingsFolded() 
    {
        $product = str_replace('-',' ','folded-greeting-cards');
        return view('front-end.products.invitationCards.greetingFolded',compact('product'));
    }
    public function samplekit() 
    {
        $product = str_replace('-',' ','FREE-sample-kit');
        return view('front-end.samplekit',compact('product'));
    }
}