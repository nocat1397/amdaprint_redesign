<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    protected $fillable = ['cart_id','user_id','order_id','file'];

    public function order() {
        return $this->belongsTo('App\Order');
    }
    public function cart() {
        return $this->belongsTo('App\Cart');
    }
}
