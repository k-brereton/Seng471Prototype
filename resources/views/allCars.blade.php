@extends('layouts.app')

@section('content')
    @foreach($cars as $car)
<a href='/cars/{{$car->id}}'>{{$car->name}}</a>
    <img src={{$car->outside_colors->first()->image_url}}/>
    @endforeach
@endsection