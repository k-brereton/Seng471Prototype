<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="functionality.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>

    button{
      margin-left: 25px;
    }

    /*----------- Used on allCars view -----------*/

    .carChoice{
      margin: 15px;
      padding: 10px;
      height: 30%;
      padding: 10px;
      float: left;
      width: auto;
      overflow: hidden;
      position: relative;
    }

    .carChoice img
    {
      width: 500px;
      height: 300px;
      border: 3px solid white;
    }

    .carInfo
    {
      position: absolute;
      top: 3;
      bottom: 0;
      left: 0;
      right: 0;
      background: rgba(29, 106, 154, 0.72);
      color: white;
      visibility: hidden;
      opacity: 0;
      font-size: 50px;
      font-weight: 600;
      transition: opacity .2s, visibility .2s;
      letter-spacing: .1rem;
      font-family: 'Nunito', sans-serif;
      height: 25%;
    }

    .carChoice:hover .carInfo
    {
      visibility: visible;
      opacity: 1;
    }

    /*----------- Used on showColors view -----------*/

    .carView{
      margin: 15px;
      padding: 10px;
      height: 30%;
      padding: 10px;
      float: left;
      width: auto;
      overflow: hidden;
      position: relative;
    }

    .carView img
    {
      width: 500px;
      height: 300px;
      border: 3px solid white;
    }

    /*----------- Used on showCar view -----------*/

    .colorButton
    {
      border:2px solid black;
      color: white;
      padding: 32px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 20px;
      border-radius: 50%;
    }

    .palette
    {
      float: left;
    }

    .m-b-md {
        margin-bottom: 30px;
    }
    </style>
    @stack('head')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
