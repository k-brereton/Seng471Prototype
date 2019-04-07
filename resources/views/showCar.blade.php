@extends('layouts.app')

<?php // TODO: Get rid of Laravel in the corner ?>

@section('title')
Choose Colors
@endsection

@push('head')

<?php // TODO: THIS FUCKIGN FUNCTIONALITY ?>
<script>
function toggleInteriorColor(x)
{
  x.style.border = 4px solid black;
  document.getElementById(document.getElementById("inside_color_id").innerHTML).border = 2px solid black;
  document.getElementById("inside_color_id").innerHTML = x.id;
  document.getElementById("info").innerHTML = x.id;
}
</script>

<!-- Scripts -->
<!-- <script src="{{ asset('js/functionality.js')}}"></script> -->
@endpush

@section('content')

<button type="button" class="btn btn-primary" onclick="window.location= '{{ url("cars") }}'">
    Go Back
</button>

<div class="palette">
  <h1>Interior Color</h1>

  <button id="redI" class="colorButton" style="background:red;" onclick="toggleInteriorColor(this)">
  </button>

  <button id="blueI" class="colorButton" style="background:blue;" onclick="toggleInteriorColor(this)">
  </button>

  <button id="brownI" class="colorButton" style="background:brown;" onclick="toggleInteriorColor(this)">
  </button>

  <button id="tanI" class="colorButton" style="background:tan;" onclick="toggleInteriorColor(this)">
  </button>

  <button id="whiteI" class="colorButton" style="background:white; color:black;" onclick="toggleInteriorColor(this)">
  </button>
</div>

<div class="palette">
  <h1>Exterior Color</h1>

  <button id="redO" class="colorButton" style="background:red;" onclick="toggleInteriorColor(this)">
  </button>

  <button id="blueO" class="colorButton" style="background:blue;" onclick="toggleInteriorColor(this)">
  </button>

  <button id="yellowO" class="colorButton" style="background:yellow; color:black;" onclick="toggleInteriorColor(this)">
  </button>

  <button id="blackO" class="colorButton" style="background:black;" onclick="toggleInteriorColor(this)">
  </button>

  <button id="whiteO" class="colorButton" style="background:white; color:black;" onclick="toggleInteriorColor(this)">
  </button>
</div>

<?php // DEBUG: using this to see if it changes anything ?>
<div id="info"></div>

<form method="get" action="/cars/{{$car->id}}/colors">
    {{csrf_field()}}

    <!-- <input type="hidden" id='inside_color_id'>
    <input type="hidden" id='outside_color_id'> -->

    <!-- Functional Code -->
    <select name='inside_color_id'>
        @foreach($inside_colors as $color)
            <option value="{{$color->id}}">{{$color->color}}</option>
        @endforeach
    </select>

    <!-- Functional Code -->
    <select name='outside_color_id'>
        @foreach($outside_colors as $color)
            <option value="{{$color->id}}">{{$color->color}}</option>
        @endforeach
    </select>

    <button type="submit" class="btn btn-primary">
        View the Car
    </button>

</form>
@endsection
