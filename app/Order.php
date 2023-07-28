<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id',
        'product',
        'quantity',
        'invoice_link',
        'name',
        'data',
        'payment_id',
        'payer_id',
        'payer_email',
        'amount',
        'currency',
        'payment_status',
        'discount',
        'orderstatus_id',
        'charge_id',
        'refund_id',
        'refund_amount',
        'transaction_id',
        'refund_status'
    ];

    protected $casts = [
         'name' => 'array', 
         'data' => 'array'
    ];

    public function orderstatus() {
        return $this->belongsTo('App\Orderstatus');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function upload()
    {
        return $this->hasOne('App\Upload');
    }
    public function designer()
    {
        return $this->hasOne('App\Designer');
    }
    public function shipping()
    {
        return $this->hasOne('App\Shipping');
    }
}
