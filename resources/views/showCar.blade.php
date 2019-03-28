@extends('layouts.app')

@section('content')
<a href='/cars'>go back</a>
<h1> select the colors </h1>
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
<input type="submit">
</form>
@endsection