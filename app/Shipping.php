<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    protected $fillable = ['cart_id','order_id','fname','lname','company','address','zip','city','state','country','phone'];

    public function order() {
        return $this->belongsTo('App\Order');
    }
}
