@extends('layouts.app')

@section('content')
<a href="/home" ><h1> back to main menu</h1></a>

show decisions
@foreach($decisions as $decision)
<a href="/decisions/{{$decision->id}}"><h1>{{$decision->car->name}}</h1></a>



@endforeach
<a href="/">main menu</a>

@endsection