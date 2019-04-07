@extends('layouts.app')

@section('title')
Vehicle Selection
@endsection

@section('content')

<button type="button" class="btn btn-primary" onclick="window.location= '{{ url("home") }}'">
    Back to Main Menu
</button>

<?php // TODO: Disable all links but the Range Rover?>

<div>
  @foreach($cars as $car)
  <div class="carChoice">
    <a href='/cars/{{$car->id}}'>
    <img src={{$car->outside_colors->first()->image_url}} alt={{$car->name}}/>
    <p class="carInfo"> {{$car->name}} </p>
    </a>
  </div>
  @endforeach
</div>
@endsection
