<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductSubCategory extends Model
{
    protected $fillable = ['product_id','product_index','category_id','subcategory_id'];

    public function category() {
        return $this->belongsTo('App\Category');    
    }
    public function subcategory() {
        return $this->belongsTo('App\SubCategory');    
    }
    public function product() {
        return $this->belongsTo('App\Product');    
    }
}
