@extends('layouts.app')

@section('title')
Success
@endsection

@section('content')
<div class="homeTitles">
  Decision Successfully Saved!
</div>

<button type="button" class="btn btn-primary" onclick="window.location= '{{ url("home") }}'">
    Main Menu
</button>

@endsection
