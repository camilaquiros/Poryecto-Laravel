<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $fillable = ['title', 'description', 'price', 'image', 'offer', 'category_id', 'subcategory_id']; 
}
