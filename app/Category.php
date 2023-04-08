<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['sequence','name'];

    public function product() {
        return $this->hasOne('App\Product');
    }
    public function subcategories() {
        return $this->hasMany('App\SubCategory');
    }
}
