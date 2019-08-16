<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $fillable = ['title', 'description', 'price', 'image', 'offer', 'category_id', 'subcategory_id'];

  protected $guarded = ['id'];

  public function category()
	{
		return $this->belongsTo(Category::class);
	}

  public function subcategory()
	{
		return $this->belongsTo(SubCategory::class);
	}
}
