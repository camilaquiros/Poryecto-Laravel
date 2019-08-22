<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
  protected $fillable = ['name', 'description', "longDescription", 'category_id', 'image'];

  protected $guarded = ['id'];
}
