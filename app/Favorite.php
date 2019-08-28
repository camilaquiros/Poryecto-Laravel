<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Favorite extends Model
{
  use SoftDeletes;
  protected $table = "favorites";
  protected $dates = ['deleted_at'];

    public function user(){
       return $this->belongsTo(User::class);
    }

    public function product(){
       return $this->belongsTo(Product::class);
    }
    //
}
