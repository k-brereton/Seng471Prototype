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
}
