<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    protected $fillable = ['photo'];
  	protected $guarded = ['id'];

    public function user()
  {
  return $this->belongsTo(User::class);
  }
}
