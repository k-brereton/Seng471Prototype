@extends('layouts.app')

@section('title')
Choose Colors
@endsection

@section('content')

<button type="button" class="btn btn-primary" onclick="window.location= '{{ url("cars") }}'">
    Go Back
</button>

<h1> Select the colors </h1>

<form method="get" action="/cars/{{$car->id}}/colors">
    {{csrf_field()}}
    <h1>inside id</h1>
    <select name='inside_color_id'>
        @foreach($inside_colors as $color)
            <option value="{{$color->id}}">{{$color->color}}</option>
        @endforeach
    </select>

    <h1>outside id</h1>
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
