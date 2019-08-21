<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avatar extends Model
{
  protected $fillable = ['url'];

  protected $guarded = ['id'];

  public function user()
	{
		return $this->hasMany(User::class, 'avatar_id');
	}
}
