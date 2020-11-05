<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sellers extends Model
{
  protected $table = 'owners';
  
    protected $fillable = ['name','email','image','phone','descri'];
}
