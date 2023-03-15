<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Banner;
use App\Category;
use App\Coupon;
use App\Designer;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LinkController extends Controller
{
    public function home() {
        $banners = Banner::first();
        $coupons = Coupon::all();
        $categories = Category::with('product')->has('product')->get();
        // return $categories;
        return view('front-end.home', compact('banners','coupons','categories'));
    }
    public function about() {
        return view('front-end.about');
    }
    public function contact() {
        return view('front-end.contact');
    }
    public function terms() {
        return view('front-end.terms');
    }
    public function privacy() {
        return view('front-end.privacy');
    }
    public function faq() {
        return view('front-end.faq');
    }
    public function mycart() {
        $user = Auth::user();
        $carts = Cart::where('user_id',$user->id)->get();
        $amount = Cart::where('user_id',$user->id)->pluck('amount')->toArray();
        $total = array_sum($amount);
        // return array_sum($amount);
        return view('front-end.purchaser.cart', compact('user','carts','total'));
    }
    
    public function fileUpload($id) {
        $cart = Cart::find($id);
        return view('front-end.purchaser.upload', compact('cart'));
    }
    public function designer($id) {
        $cart = Cart::find($id);
        $desc = Designer::where('cart_id',$id)->first();
        return view('front-end.purchaser.hireDesigner', compact('cart','desc'));
    }
    public function banners()
    {
        $banners = Banner::first();
        return view('admin.banner.addBanner', compact('banners'));
    }
    public function bannerStore(Request $request)
    {
        // return $request;
        $banner = new Banner;
        if ($files = $request->file('header')) 
        {
            foreach ($files as $file) 
            {
                $name=$file->getClientOriginalName();
                $file->move('img/banners/header/', $name);
                $names[] = $name;
            }
            $banner->header = $names;
        }
        if ($file = $request->file('footer')) 
        {
            $footer=$file->getClientOriginalName();
            $file->move('img/banners/footer/', $footer);
            $banner->footer = $footer;
        }
        $banner->save();
        return redirect()->back();
    }
    public function header(Request $request)
    {
        // return $request;
        $file = $request->file('header');
        $name=$file->getClientOriginalName();
        $file->move('img/banners/header/', $name);

        $banner = Banner::find($request->id);
        $images=$banner->header;
        $replaceImage = array($request->key => $name);
        $image = array_replace($images, $replaceImage);
        $banner->header = $image;
        $banner->save();
        return redirect()->back();
    }
    public function footer(Request $request)
    {
        // return $request;
        $file = $request->file('footer');
        $name=$file->getClientOriginalName();
        $file->move('img/banners/footer/', $name);

        $banner = Banner::find($request->id);
        $banner->update(['footer'=>$name]);
        $banner->save();
        return redirect()->back();
    }
    public function coupon()
    {
        return view('admin.coupon.addCoupon');
    }
    public function couponStore(Request $request)
    {
        $coupon = new Coupon;
        $coupon->category = $request->category;
        $coupon->code = $request->code;
        $coupon->discount = $request->discount;
        $coupon->expiry = $request->expiry;
        $coupon->save();

        return redirect()->back()->with('message','Coupon Added Successfully.');
    }
    public function couponUpdate(Request $request)
    {
        $coupon = Coupon::find($request->id);
        $coupon->update(['code'=>$request->code,'category'=>$request->category,'discount'=>$request->discount,'expiry'=>$request->expiry]);
        $coupon->save();

        return redirect()->back()->with('message','Coupon Updated Successfully.');
    }
    public function couponDelete($id)
    {
        $coupon = Coupon::find($id);
        $coupon->delete();

        return redirect()->back()->with('message','Coupon Deleted Successfully.');
    }
    public function showCoupon()
    {
        $coupons = Coupon::all();
        return view('admin.coupon.showCoupon', compact('coupons'));
    }
    public function couponCheck(Request $request)
    {
        $coupon = Coupon::where('code',$request->code)->first();
        // return $request;
        $date = Carbon::now()->format("Y-m-d");
        if($coupon !== null && $coupon->expiry >= $date && $coupon->category == $request->category)
        {
            return $coupon;
        } else {
            return "0";
        }
    }
    public function autocomplete(Request $request)
    {
        // return $request->q;
        $input = $request->q;
        $data = array(
            'Custom Business Card',
            'Slim Business Card',
            'Square Business Card',
            'Raised UV Business Card',
            'Raised Foils Business Card',
            'Linen Business Card',
            'Cotton Business Card',
            'Rendezvous Business Card',
            'Custom Shape Business Card',
            'Custom Vinly Banner',
            'Vinly Eco Frindly Banner',
            'Backlit Banner',
            'Vinly Mesh Banner',
            'Vinly Billboard Banner',
            'Premium Quality Banner',
            '10 Envelops',
            'A6 Envelopsr',
            '9 x 12 Envelops',
            '9 Envelops',
            'A2 Envelops',
            'A7 Envelops',
            '6 x 9 Envelops',
            'Letterhead',
            'Large Folders',
            'Mini Folders',
            'Key Card Holder',
            'Rollup Banner Stand',
            'Deluxe Wide Base Single Sided Banner Stand',
            'Deluxe Wide Base Double Sided Banner Stand',
            'Static X Banner Stand',
            'Multifunctional X Banner Adjustable Stand',
            'Adjustable X Banner Stand',
            'SEG Fabric Frames',
            'Clip Frame',
            'Poster Frame',
            'Aluminum A Frame',
        );
        $links = array(
            '/business-cards/standard-business-cards/custom-business-card',
            '/business-cards/standard-business-cards/slim-business-card',
            '/business-cards/standard-business-cards/square-business-card',
            '/business-cards/standard-business-cards/raised-uv-business-card',
            '/business-cards/standard-business-cards/raised-foils-business-card',
            '/business-cards/standard-business-cards/linen-business-card',
            '/business-cards/standard-business-cards/cotton-business-card',
            '/business-cards/standard-business-cards/rendezvous-business-card',
            '/business-cards/standard-business-cards/custom-shape-business-card',
            '/banners/custom-vinyl-banner',
			'/banners/vinyl-eco-friendly-banner',
			'/banners/backlit-banner',
			'/banners/vinyl-mesh-banner',
			'/banners/vinyl-billboard-banner',
			'/banners/premium-quality-banner',
            '/office-stationary/envelopes/10-envelope',
			'/office-stationary/envelopes/a6-envelope',
			'/office-stationary/envelopes/9x12-envelope',
			'/office-stationary/envelopes/9-envelope',
			'/office-stationary/envelopes/a2-envelope',
			'/office-stationary/envelopes/a7-envelope',
			'/office-stationary/envelopes/6x9-envelope',
            '/office-stationary/letterhead',
            '/office-stationary/folders/large-folders',
            '/office-stationary/folders/mini-folders',
            '/office-stationary/folders/key-card-holder',
            '/stand-display/rollup-banner-stand',
            '/stand-display/deluxe-wide-base-single-sided-banner-stand',
            '/stand-display/deluxe-wide-base-double-sided-banner-stand',
            '/stand-display/static-x-banner-stand',
            '/stand-display/multifunctional-x-banner-adjustable-stand',
            '/stand-display/adjustable-x-banner-stand',
            '/stand-display/seg-fabric-frame',
            '/stand-display/clip-frame',
            '/stand-display/poster-frame',
            '/stand-display/aluminum-a-frame',
        );
        $result = array_filter($data, function ($item) use ($input) {
            if (stripos($item, $input) !== false) {
                return true;
            }
            return false;
        });
        $resultLink = array_filter($links, function ($item2) use ($input) {
            if (stripos($item2, $input) !== false) {
                return true;
            }
            return false;
        });
        
        // return $result;
        $output = '<ul class="dropdown-menu productDropdown" style="display:block; position:relative; padding:10px; height: 500px; overflow-y: auto;">';
      foreach($result as $key=>$row)
      {
       $output .= '<li><a href="'.$resultLink[$key].'">'.$row.'</a></li>
       ';
      }
      $output .= '</ul>';
      echo $output;
        // return response()->json($data);
    }
}
