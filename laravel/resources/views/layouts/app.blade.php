<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Boolean</title>
    <link rel="stylesheet" href={{ asset('css/app.css') }}>
    <script src="https://kit.fontawesome.com/3e39139afa.js" crossorigin="anonymous"></script>
  </head>
  <body>
    @include('partials.menu')
    @yield('content')
    @include('partials.footer')
    <script src="{{ asset('js/app.js')}}" charset="utf-8"></script>
  </body>
</html>
