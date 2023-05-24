<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomeProduct extends Model
{
    protected $fillable = ['section','product_id'];

    public function product() {
        return $this->belongsTo('App\Product');    
    }
}
