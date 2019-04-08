@extends('layouts.app')

<?php // TODO: Get rid of Laravel in the corner ?>

@section('title')
Choose Colors
@endsection

@push('head')

<script type="text/javascript">
function toggleInteriorColor(x)
{
  x.style.border = "4px solid black";

  <?php // TODO: Why doesn't this work plz kill me ?>
  document.getElementByName(document.getElementByName('inside_color_id').innerHTML).border = "2px solid black";
  document.getElementByName('inside_color_id').innerHTML = x.id;
  document.getElementById('info').innerHTML = "Text changed";
}
</script>

@endpush

@section('content')

<button type="button" class="btn btn-primary" onclick="window.location= '{{ url("cars") }}'">
    Go Back
</button>

<div class="palette">
  <h1>Interior Color</h1>
  @foreach($inside_colors as $color)
      <button id="{{$color->id}}" class="colorButton" style="background:{{$color->color}};" onclick="toggleInteriorColor(this)">
      </button>
  @endforeach
</div>

<div class="palette">
  <h1>Exterior Color</h1>
  @foreach($outside_colors as $color)
      <button id="{{$color->id}}" class="colorButton" style="background:{{$color->color}};" onclick="toggleInteriorColor(this)">
      </button>
  @endforeach
</div>

<?php // DEBUG: using this to see if it changes anything ?>
<div id="info"> here is some text </div>

<form method="get" action="/cars/{{$car->id}}/colors">
    {{csrf_field()}}

    <input type="hidden" value="{{$inside_colors->first()->id}}" name="inside_color_id">
    <input type="hidden" value="{{$outside_colors->first()->id}}" name="outside_color_id">

    <!-- Functional Code -->
    <!-- <select name='inside_color_id'>
        @foreach($inside_colors as $color)
            <option value="{{$color->id}}">{{$color->color}}</option>
        @endforeach
    </select>-->

    <!-- Functional Code -->
    <!-- <select name='outside_color_id'>
        @foreach($outside_colors as $color)
            <option value="{{$color->id}}">{{$color->color}}</option>
        @endforeach
    </select> -->

    <button type="submit" class="btn btn-primary">
        View the Car
    </button>

</form>
@endsection
