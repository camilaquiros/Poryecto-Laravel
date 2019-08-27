<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
  protected $table = 'subcategories';
  protected $fillable = ['name'];

  public function products()
  {
    return $this->hasMany(Product::class);
  }
}
