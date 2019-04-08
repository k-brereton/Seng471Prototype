<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Decision extends Model
{
    public static function createDecision($userId, $carId,$insideId,$outsideId){
        $decision=new Decision;
        $decision->user_id=$userId;
        $decision->car_id=$carId;
        $decision->inside_color_id=$insideId;
        $decision->outside_color_id=$outsideId;
        return $decision;
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function car(){
        return $this->belongsTo('App\Car');
    }
    public function inside_color(){
        return $this->belongsTo('App\InsideColor');
    }
    public function outside_color(){
         return $this->belongsTo('App\OutsideColor');
     }
}
