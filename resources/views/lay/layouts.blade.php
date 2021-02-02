<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<style>
    .footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        background-color: rgb(35, 38, 46);
        color: white;
        text-align: center;
    }
</style>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-sm  shadow-sm " style="background-color:rgb(35, 38, 46); color:white;">
            <div class="container py-2">
                <a class="navbar-brand d-flex" href="{{ url('/') }}">
                     <div > <span class="pl-2"><strong>Blood Bank Management System</strong></span></div>
                </a>

                <div>
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item mr-1 mb-1">
                                <a class="nav-link btn btn-sm btn-success " href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                   <li class="nav-item">
                                    <a class="nav-link btn btn-sm btn-danger" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->username }} <span class="caret"></span>
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
        <nav class="navbar navbar-expand-md navbar-dark shadow-sm" style="background-color:rgb(15, 129, 236);">
            <div class="container  py-2" >
                <button class="navbar-toggler"  type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon" ></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                         <li class="nav-item">
                             <a class="nav-link" href="/home">Home</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="/events">Events List</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="/donor/create">Donate</a>
                         </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/events/create">Add Event</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
        <footer class="p-5 justify-content-center">
            	<div class="row clearfix p-5">
                    <div class="col-md-4 col-sm-12">
                        <div class="pl-5 pb-3">
                            <a href="#"><img class="pl-4" src="/svg/Blood.png" style="height:60px"></a>
                        </div>
                        <div style="font-size:20px">
                            <strong>Donate blood Save life</strong>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-12">
                    	<div class="row clearfix">
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <h2 class="mb-4">About Us</h2>
                                <div style="display:center">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">About us</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">How it Works</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Team</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <h2 class="mb-4">Press</h2>
                                <div style="display:center">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Latest New</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/events">Event</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Award</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <h2 class="mb-4">Get in Tuch</h2>
                                <div style="display:center">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Blogs</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Causes</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Blood Doner</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <hr>
        <div class="pt-3" style="text-align:center">
        	<div class="auto-container">
            	<div class="justify-content-center">
                    <div class="bottom-title pb-4" style="font-size:40px"><strong>Made with  Love</strong></div>
                    <div class="mb-1">Copyright © 2019. All Rights Reserved By <a href="#">Blood Bank </a></div>
                    <div class="mb-1">Design &amp; Develop by  <a target="_blank" href="#">Lemon.A</a></div>
                </div>
            </div>
        </div>
    </footer>
    
    
    </div>
</body>
<style>
    a {
        color:rgb(167, 172, 187);
    }
</style>
</html>

