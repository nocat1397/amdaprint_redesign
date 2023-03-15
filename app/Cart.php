<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'user_id', 'product', 'quantity', 'amount', 'name', 'data'
    ];

    protected $casts = [
         'name' => 'array', 
         'data' => 'array'
    ];

    public function designer()
    {
        return $this->hasOne('App\Designer');
    }
    public function upload()
    {
        return $this->hasOne('App\Upload');
    }
}
