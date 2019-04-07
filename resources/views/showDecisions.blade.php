@extends('layouts.app')

<?php // TODO: Get rid of Laravel in the corner ?>

@section('title')
Show Decisions
@endsection

@section('content')

<button type="button" class="btn btn-primary" onclick="window.location= '{{ url("home") }}'">
    Back to Main Menu
</button>

  @foreach($decisions as $decision)
    <a href="/decisions/{{$decision->id}}"><h1>{{$decision->car->name}}</h1></a>
  @endforeach
@endsection
