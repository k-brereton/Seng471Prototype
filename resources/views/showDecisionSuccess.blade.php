@extends('layouts.app')

<?php // TODO: Get rid of Laravel in the corner ?>

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
