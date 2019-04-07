@extends('layouts.app')

@section('title')
Choose Colors
@endsection

@section('content')

<script>
function toggleInteriorColor(x)
{
  // x.style.color = black;
  // x.style.border = 4px solid black;
  // document.getElementById(document.getElementById("inside_color_id").innerHTML).border = 2px solid black;
  document.getElementById("red").innerHTML = clicked;
}
</script>

<button type="button" class="btn btn-primary" onclick="window.location= '{{ url("cars") }}'">
    Go Back
</button>

<h1> Select the colors </h1>

<div class="palette">
  <h1>Interior Color</h1>

  <button id="red" class="colorButton" style="background:red;" onclick="toggleInteriorColor(this)">
  </button>

  <button id="blue" class="colorButton" style="background:blue;" onclick="toggleInteriorColor(this)">
  </button>

  <button id="brown" class="colorButton" style="background:brown;" onclick="toggleInteriorColor(this)">
  </button>

  <button id="tan" class="colorButton" style="background:tan;" onclick="toggleInteriorColor(this)">
  </button>

  <button id="white" class="colorButton" style="background:white; color:black;" onclick="toggleInteriorColor(this)">
  </button>
</div>

<form method="get" action="/cars/{{$car->id}}/colors">
    {{csrf_field()}}

    <input type="hidden" name='inside_color_id'>

    <!-- Functional Code
    <select name='inside_color_id'>
        @foreach($inside_colors as $color)
            <option value="{{$color->id}}">{{$color->color}}</option>
        @endforeach
    </select> -->

    <h1>Exterior Color</h1>

    <!-- Functional Code
    <select name='outside_color_id'>
        @foreach($outside_colors as $color)
            <option value="{{$color->id}}">{{$color->color}}</option>
        @endforeach
    </select> -->

<button type="submit" class="btn btn-primary">
    View the Car
</button>

</form>
@endsection
