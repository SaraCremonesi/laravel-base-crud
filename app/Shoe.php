<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shoe extends Model
{
  protected $fillable = [
    'size',
    'color',
    'model',
    'brand',
    'price',
    'description'
  ];
}
