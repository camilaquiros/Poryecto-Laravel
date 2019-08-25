<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favoritos extends Model
{
 protected $table = "products_users";
  public function user (){
    return $this->belongsTo(User::class);
  }
  public function product(){
    return $this->belongsTo(Product::class);
  }
    //
}
