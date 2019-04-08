@extends('layouts.app')

@section('title')
Choose Colors
@endsection

@push('head')

<script type="text/javascript">
function toggleInteriorColor(x)
{
  x.style.border = "4px solid black";
  document.getElementById("I"+document.getElementById('inside_color_id').value).style.border = "2px solid black";
  document.getElementById('inside_color_id').value = x.id.slice(1);
}

function toggleExteriorColor(x)
{
  x.style.border = "4px solid black";
  document.getElementById("O"+document.getElementById('outside_color_id').value).style.border = "2px solid black";
  document.getElementById('outside_color_id').value = x.id.slice(1);
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
      <button id="I{{$color->id}}" class="colorButton" style="background:{{$color->color}};" onclick="toggleInteriorColor(this)">
      </button>
  @endforeach
</div>

<div class="palette">
  <h1>Exterior Color</h1>
  @foreach($outside_colors as $color)
      <button id="O{{$color->id}}" class="colorButton" style="background:{{$color->color}};" onclick="toggleExteriorColor(this)">
      </button>
  @endforeach
</div>

<form method="get" action="/cars/{{$car->id}}/colors">
    {{csrf_field()}}

    <input type="hidden" name='inside_color_id' value="{{$inside_colors->first()->id}}" id="inside_color_id">
    <input type="hidden" name='outside_color_id' value="{{$outside_colors->first()->id}}" id="outside_color_id">

    <button type="submit" class="btn btn-primary">
        View the Car
    </button>
</form>

@endsection
