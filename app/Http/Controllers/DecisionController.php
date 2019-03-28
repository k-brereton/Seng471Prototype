<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\Decision;

class DecisionController extends Controller
{
    public function addDecision(Car $car){
        $decision=Decision::createDecision(auth()->id(),$car->id,request('inside_color_id'),
                                           request('outside_color_id'));
        $decision->save();
        
        return view('showDecisionSuccess',['car'=>$car,'decision'=>$decision]);
    }
}
