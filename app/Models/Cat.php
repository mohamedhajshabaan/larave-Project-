<?php

namespace App\Models;

use http\Exception\RuntimeException;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cat extends Model
{
protected $guarded=['id'];
public  function course(){
    return  $this->hasMany('App\Models\course');

}
}
