<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Unda | Vehicle repair services on-demand</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>

      <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">

        <a class="navbar-brand" href="{{ url('/') }}">
            {{ 'Unda' }}
        </a>
        <div class="top-right links">
            @auth
                <a href="{{ route('userDashboard') }}">Manage Profile</a>
                <a href="{{ url('/home') }}">Get Expert Help</a>
            @else
                <div class="">
                  <button style="margin-top: -9px" type="button" onclick="window.location='{{ route('login') }}'"class="btn btn-primary" name="button">Login/ Register</button>
                </div>

            @endauth
        </div>
      </nav>
      <div class="header-image">

        <img style="overflow: hidden; width:100%" src="/imgs/header.jpg" alt="">
        <hr style="border: solid 20px; color: #57B8FF;
margin-top: -10px;">

      </div>
      <main class="">
        @yield('content')
      </main>




    </body>

    <footer class="home-footer">
    <p class="footer-text">Copyright © 2020, Unda. All Rights Reserved.</p>
    </footer>
</html>
