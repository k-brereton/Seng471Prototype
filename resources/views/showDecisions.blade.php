@extends('layouts.app')

@section('title')
Show Decisions
@endsection

@section('content')

<button type="button" class="btn btn-primary" onclick="window.location= '{{ url("home") }}'">
    Back to Main Menu
</button>

  @foreach($decisions as $decision)
    <a href="/decisions/{{$decision->id}}"><h1>{{$decision->id}} - {{$decision->car->name}}</h1></a>
  @endforeach

@endsection
