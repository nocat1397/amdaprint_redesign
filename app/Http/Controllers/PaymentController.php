<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Order;
use App\Upload;
use App\Designer;
use App\Shipping;
use Stripe\Stripe;
use Omnipay\Omnipay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class PaymentController extends Controller
{
    private $gateway;
   
    // public function __construct()
    // {
    //     $this->gateway = Omnipay::create('PayPal_Rest');
    //     $this->gateway->setClientId(env('PAYPAL_CLIENT_ID'));
    //     $this->gateway->setSecret(env('PAYPAL_CLIENT_SECRET'));
    //     $this->gateway->setTestMode(true); //set it to 'false' when go live
    // }
   
    /**
     * Initiate a payment on PayPal.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function charge(Request $request)
    {
        $cart = Cart::find($request->cart_id);
        $join = strtok(request()->url(), 'amda');
        $image = $join.env('DOMAIN').$cart->data[5];
        // return $image;
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET_KEY'));
        // Create a PaymentIntent with amount and currency
        $checkout_session = \Stripe\Checkout\Session::create([
            'line_items' => [[
                'price_data' => [
                  'currency' => 'usd',
                  'product_data' => [
                    'name' => $cart->product,
                    'images' => [$image],
                  ],
                  'unit_amount' => $request->amount*100,
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => route('checkout.success', [], true) . "?session_id={CHECKOUT_SESSION_ID}",
            'cancel_url' => route('checkout.error', [], true),
          ]);

            $ship = new Shipping;
            $ship->cart_id = $request->cart_id;
            $ship->fname = $request->fname;
            $ship->lname = $request->lname;
            $ship->company = $request->company;
            $ship->address = $request->address;
            $ship->zip = $request->zip;
            $ship->city = $request->city;
            $ship->state = $request->state;
            $ship->country = $request->country;
            $ship->phone = $request->phone;
            $ship->save();

            $order = new Order;
            $order->amount = $request->amount;
            $order->session_id = $checkout_session->id;
            $order->save();
        
        session()->put('cart_id',$request->cart_id);
        session()->put('discount',$request->couponUsed);
            
        return redirect($checkout_session->url);
    }
   
    /**
     * Charge a payment and store the transaction.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function success(Request $request)
    {
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET_KEY'));
        $sessionId = $request->get('session_id');
        try {
            $session = \Stripe\Checkout\Session::retrieve($sessionId);
            // return $session;
            // exit;
            if (!$session) {
                throw new NotFoundHttpException();
            }
            $order = Order::where('session_id', $session->id)->first();
            if (!$order) {
                throw new NotFoundHttpException();
            }
            $cart = Cart::find(session('cart_id'));
            if ($cart !== null)
            {
                // The customer has successfully paid.
                // Insert transaction data into the database
                $order->user_id = Auth::user()->id;
                $order->product = $cart->product;
                $order->name = $cart->name;
                $order->data = $cart->data;
                $order->quantity = $cart->quantity;
                $order->payment_intent = $session->payment_intent;
                $order->payer_email = $session->customer_details['email'];
                $order->payment_status = $session->payment_status;
                $order->currency = $session->currency;
                $order->discount = session('discount');
                $order->orderstatus_id = 1;
                $order->save();
            }
            $upload = Upload::where('cart_id',$cart->id)->first();
                if($upload !== null)
                {
                    $upload->update(['cart_id'=>null,'order_id'=>$order->id]);
                    $upload->save();
                }

                $designer = Designer::where('cart_id',$cart->id)->first();
                if($designer !== null)
                {
                    $designer->update(['cart_id'=>null,'order_id'=>$order->id]);
                    $designer->save();
                }

                $shipping = Shipping::where('cart_id',$cart->id)->first();
                if($shipping !== null)
                {
                    $shipping->update(['cart_id'=>null,'order_id'=>$order->id]);
                    $shipping->save();
                }
                $cart->delete();
                return redirect('/')->with('message','Payment is successful. Your Payment id is: '. $session->payment_intent);
        } catch (\Exception $e) {
            throw new NotFoundHttpException();
        }
        
    }
   
    /**
     * Error Handling.
     */
    public function error()
    {
        return 'User cancelled the payment.';
    }
}
