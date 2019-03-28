<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public function inside_colors(){
        return $this->hasMany('App\InsideColor');
    }
    public function outside_colors(){
        return $this->hasMany('App\OutsideColor');
    }
    public function decisions(){
        return $this->hasMany('App\Decision');
    }
}
