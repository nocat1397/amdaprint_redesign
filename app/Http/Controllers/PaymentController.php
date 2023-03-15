<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Designer;
use App\Order;
use App\Shipping;
use Omnipay\Omnipay;
use App\Upload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    private $gateway;
   
    public function __construct()
    {
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId(env('PAYPAL_CLIENT_ID'));
        $this->gateway->setSecret(env('PAYPAL_CLIENT_SECRET'));
        $this->gateway->setTestMode(true); //set it to 'false' when go live
    }
   
    /**
     * Initiate a payment on PayPal.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function charge(Request $request)
    {
        // return $request;
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
        
        session()->put('cart_id',$request->cart_id);
        session()->put('discount',$request->couponUsed);
            try {
                $response = $this->gateway->purchase(array(
                    'amount' => $request->input('amount'),
                    'currency' => env('PAYPAL_CURRENCY'),
                    'returnUrl' => url('success'),
                    'cancelUrl' => url('error'),
                ))->send();
                if ($response->isRedirect()) {
                    // return $response;
                    $response->redirect(); // this will automatically forward the customer
                } else {
                    // not successful
                    return $response->getMessage();
                }
            } catch(Exception $e) {
                return $e->getMessage();
            }
    }
   
    /**
     * Charge a payment and store the transaction.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function success(Request $request)
    {
        // Once the transaction has been approved, we need to complete it.
        if ($request->input('paymentId') && $request->input('PayerID'))
        {
            $transaction = $this->gateway->completePurchase(array(
                'payer_id'             => $request->input('PayerID'),
                'transactionReference' => $request->input('paymentId'),
            ));
            $response = $transaction->send();
           
            $cart = Cart::find(session('cart_id'));
            if ($response->isSuccessful() && $cart !== null)
            {
                // The customer has successfully paid.
                $arr_body = $response->getData();
                // Insert transaction data into the database
                $payment = new Order;
                $payment->user_id = Auth::user()->id;
                $payment->product = $cart->product;
                $payment->name = $cart->name;
                $payment->data = $cart->data;
                $payment->quantity = $cart->quantity;
                $payment->payment_id = $arr_body['id'];
                $payment->payer_id = $arr_body['payer']['payer_info']['payer_id'];
                $payment->payer_email = $arr_body['payer']['payer_info']['email'];
                $payment->amount = $arr_body['transactions'][0]['amount']['total'];
                $payment->currency = env('PAYPAL_CURRENCY');
                $payment->payment_status = $arr_body['state'];
                $payment->discount = session('discount');
                $payment->orderstatus_id = 1;
                $payment->save();
                
                $upload = Upload::where('cart_id',$cart->id)->first();
                if($upload !== null)
                {
                    $upload->update(['cart_id'=>null,'order_id'=>$payment->id]);
                    $upload->save();
                }

                $designer = Designer::where('cart_id',$cart->id)->first();
                if($designer !== null)
                {
                    $designer->update(['cart_id'=>null,'order_id'=>$payment->id]);
                    $designer->save();
                }

                $shipping = Shipping::where('cart_id',$cart->id)->first();
                if($shipping !== null)
                {
                    $shipping->update(['cart_id'=>null,'order_id'=>$payment->id]);
                    $shipping->save();
                }
                $cart->delete();
                return redirect('/')->with('message','Payment is successful. Your transaction id is: '. $arr_body['id']);
            } else {
                return $response->getMessage();
            }
        } else {
            return 'Transaction is declined';
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
