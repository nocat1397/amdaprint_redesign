<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['category_id','sub_category_id','name','desc','specification','size','paper_type','qty','pricing','property','property_data','property_action','property_percentage'];

    protected $casts = 
    [
        'sub_category_id'=>'array',
        'name'=>'array',
        'desc'=>'array',
        'specification'=>'array',
        'size'=>'array',
        'paper_type'=>'array',
        'qty'=>'array',
        'pricing'=>'array',
        'property'=>'array',
        'property_data'=>'array',
        'property_action'=>'array',
        'property_percentage'=>'array',
    ];

    public function images() {
        return $this->belongsToMany('App\Image');
    }
    public function carts() {
        return $this->hasMany('App\Cart');
    }
    public function tag() {
        return $this->belongsTo('App\Tag');
    }
    public function whishlists() {
        return $this->hasMany('App\Whishlist');
    }
    public function purchasers()
    {
        return $this->hasMany('App\Purchaser');
    }
    public function category() {
        return $this->belongsTo('App\Category');    
    }
}
