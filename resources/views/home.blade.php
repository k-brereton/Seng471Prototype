@extends('layouts.app')

<?php // TODO: Get rid of Laravel in the corner ?>

@section('title')
Home
@endsection

@section('content')

<div class="homeTitles">
    <a href="{{ url('/cars') }}" style="color:#636b6f;">
        Cars
    </a>
</div>

<div class="homeTitles">
    <a href="{{ url('/decisions') }}" style="color:#636b6f;">
         Decision history
    </a>
</div>

@endsection
