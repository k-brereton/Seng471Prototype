@extends('layouts.app')

@section('content')
<a href='/cars/{{$car->id}}'>back to car</a>
<img src="{{$inside_color->image_url}}">
<img src="{{$outside_color->image_url}}">


<h1>final decision?</h1>
<form action="/cars/{{$car->id}}/decision" method="post">
    {{csrf_field()}}
<input type="hidden" value="{{$inside_color->id}}" name="inside_color_id">
<input type="hidden" value="{{$outside_color->id}}" name="outside_color_id">

<input type="submit">
    
</form>

@endsection