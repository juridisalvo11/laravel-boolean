<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Boolean</title>
    <link rel="stylesheet" href={{ asset('css/app.css') }}>
  </head>
  <body>
    @include('partials.menu')
    @yield('content')
    @include('partials.footer')
    <script src="{{ asset('js/app.js')}}" charset="utf-8"></script>
  </body>
</html>
