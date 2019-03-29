@extends('layouts.app')

@section('content')
<a href="/home" > <h1> back to main menu</h1></a>
    @foreach($cars as $car)
<a href='/cars/{{$car->id}}'>{{$car->name}}</a>
    <img src={{$car->outside_colors->first()->image_url}}/>
    @endforeach
@endsection