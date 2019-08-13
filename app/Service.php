<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
  public $table = "services";
  public $primaryKey = "id";
  public $timestamps = false;
  public $guarded = [];


    public function scopeService_name($query,$service_name) {
      if($service_name) {
        return $query->orWhere ('service_name','LIKE',"%$service_name%");
      }
    }



}
