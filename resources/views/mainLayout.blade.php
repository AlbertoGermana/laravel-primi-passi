<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel-Primi-Passi</title>
        <link rel="stylesheet" href="/css/app.css">
        <script src="/js/app.js" type="text/javascript">

        </script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


    </head>
    <body>
      <div class="home">
      <div class="container">
        <div class="row">
        @include('header')
        </div>
        <div class="">
        @include('navbar')
        </div>
        <div class="row">
        @yield('content')
        </div>
        <div class="row">
        @include('footer')
        </div>
      </div>
    </div>
    </body>
</html>
