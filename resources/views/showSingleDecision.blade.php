@extends('layouts.app')

@section('title')
Decision
@endsection

@section('content')

<button type="button" class="btn btn-primary" onclick="window.location= '{{ url("/decisions") }}'">
    Back to Decisions
</button>

<div>
  <div class="carView">
    <img src="{{$decision->outside_color->image_url}}">
  </div>

  <div class="carView">
    <img src="{{$decision->inside_color->image_url}}">
  </div>
</div>

@endsection
