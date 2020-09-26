<!doctype html>

<!-- Mechanics pages layout -->

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{'Unda | Vehicle repair services on-demand' }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="">
                    {{ 'Unda' }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->

                    @auth
                    <ul style="font-size: 18px; margin-left: 131px" class="navbar-nav mr-auto">
                        <li style="margin-right: 5px;"> <a href="{{route('mechDashboard')}}">Dashboard</a> </li>
                        <li style="margin-right: 5px;">|</li>
                        <li style="margin-right: 5px;"> <a href="{{url('/')}}">Home</a> </li>
                        <li style="margin-right: 5px;">|</li>
                        <li style="margin-right: 5px;"> <a href="#">Contact us</a> </li>
                        <li style="margin-right: 5px;">|</li>
                        <li> <a style="margin-right: 5px;" href="#">Repairs</a> </li>
                        <li style="margin-right: 5px;">|</li>
                        <li> <a href="#"style="margin-right: 5px;">Earnings</a> </li>
                        <li style="margin-right: 5px;">|</li>
                        <li> <a href="#" style="margin-right: 5px;">Support</a> </li>




                    </ul>

                    <ul style="margin-left: 15px" class="navbar-nav mr-auto">
                      <li  style="margin-right: 30px"> <a  style="font-size: 16px" href="#"><i class="fa fa-envelope"></i> <span style="color: orange; position: absolute; margin-left: 2px; margin-top: -6px;">5</span> </a></li>
                      <li> <a style="font-size: 16px" href="#"> <i class="fa fa-bell"></i> <span style="color: orange; position: absolute; margin-left: 2px; margin-top: -6px;">3</span> </a> </li>
                    </ul>
                    @endauth


                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                          <button style="margin-top: -9px; margin-right: -90px;" type="button" onclick="window.location='{{ route('login') }}'"class="btn btn-primary" name="button">Login/ Register</button>
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
                                    <a class="dropdown-item" href="#">My Account</a>

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
<footer class="all-footer">
<p class="footer-text">Copyright © 2020. All Rights Reserved.</p>
</footer>
</html>
