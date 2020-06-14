<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- scss -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <!-- js -->
        <script src="js/app.js" charset="utf-8"></script>

    </head>
    <body>
      @yield('header')
      <main>
        <div>
          @include('nav')
        </div>
        @yield('pory')
      </main>
      @include('footer')
    </body>
</html>
