<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\Decision;
use App\User;
use App\InsideColor;
use App\OutsideColor;

class CarController extends Controller
{
    public function index(){
        return view('allCars',['cars'=>Car::all()]);
    }
    public function showCar(Car $car){ 
        return view('showCar',['car' => $car,'inside_colors' => $car->inside_colors, 
                               'outside_colors' =>$car->outside_colors,]);
    }
    public function showCarColors(Car $car){
        $insideColor=InsideColor::where('id',request('inside_color_id'))->first();
        $outsideColor=OutsideColor::where('id',request('outside_color_id'))->first();
        
        return view('showColors',['car'=>$car,'inside_color'=>$insideColor,'outside_color' =>$outsideColor]);
    }
}
