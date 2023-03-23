<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    protected $guarded=['id'];
    public function cat(){
        return $this->belongsTo('App\Models\cat');

    }

    public function trainer(){
        return $this->belongsTo('App\Models\Trainer');
    }
    public function student(){
        return $this->belongsTo('App\Models\Student');

    }
}
