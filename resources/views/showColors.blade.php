@extends('layouts.app')

<?php // TODO: Get rid of Laravel in the corner ?>

@section('title')
View Vehicle
@endsection

@section('content')

<button type="button" class="btn btn-primary" onclick="window.location= '{{ url("/cars/$car->id") }}'">
    Back to Car
</button>

<div>
  <div class="carView">
    <img src="{{$outside_color->image_url}}">
  </div>

  <div class="carView">
    <img src="{{$inside_color->image_url}}">
  </div>
</div>

<?php // TODO: Put buttons side by side?>
<?php // TODO: Hover over outside image and see inside image?>

<form action="/cars/{{$car->id}}/decision" method="post">
    {{csrf_field()}}
    <input type="hidden" value="{{$inside_color->id}}" name="inside_color_id">
    <input type="hidden" value="{{$outside_color->id}}" name="outside_color_id">
    <button type="submit" class="btn btn-primary">
        I Want This Combination!
    </button>
</form>

@endsection
