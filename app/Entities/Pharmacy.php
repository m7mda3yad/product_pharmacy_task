<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pharmacy extends Model implements Transformable
{
    use TransformableTrait , HasFactory;

    protected $fillable = [
		'name',
		'address',
	];

  public function products()
  {
      return $this->belongsToMany(Product::class)->withPivot('price')->withTimestamps();
  }

}
