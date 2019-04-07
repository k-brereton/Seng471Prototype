@extends('layouts.app')

<?php // TODO: Get rid of Laravel in the corner ?>

@section('title')
Decision
@endsection

@section('content')

<button type="button" class="btn btn-primary" onclick="window.location= '{{ url("/decisions") }}'">
    Back to Decisions
</button>

<div>
  <div class="carView">
    <img src="{{$outside_color->image_url}}">
  </div>

  <div class="carView">
    <img src="{{$inside_color->image_url}}">
  </div>
</div>

<h1> car name: {{$car->name}}</h1>

<h1> decision id {{$decision->id}}</h1>
@endsection
