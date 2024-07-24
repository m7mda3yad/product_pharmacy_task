<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model implements Transformable
{
    use TransformableTrait , HasFactory ;

    protected $fillable = ['title','photo','description','price','quantity'];

    public function pharmacies()
    {
        return $this->belongsToMany(Pharmacy::class)->withPivot('price')->withTimestamps();
    }
    public function getPhotoAttribute($photo){
      return  $photo ? asset('images/products/'.$photo):'';
  }


}
