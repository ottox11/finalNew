<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class politicas extends Model
{
  public $table = "politicas";
  public $primaryKey = "id";
  public $timestamps = false;
  public $guarded = [];
}
