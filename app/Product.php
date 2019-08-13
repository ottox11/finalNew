<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $table = "products";
    public $primaryKey = "id";
    //public $timestamps = false;
    public $guarded = [];

    public function users() {

       return $this->belongsToMany('App\User')->withPivot('quantity');
    }

    public function scopeProduct_name($query,$product_name) {
      if($product_name) {
        return $query->orWhere ('product_name','LIKE',"%$product_name%");
      }
    }

}
