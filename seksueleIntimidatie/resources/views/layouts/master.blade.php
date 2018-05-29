<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
  <link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css" >
  <link href="{{ asset('css/homenav.css') }}" rel="stylesheet" type="text/css" >
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg"
      crossorigin="anonymous">
        <title>@yield('title')</title>
</head>
@php
  if(!isset($color)){
    $colors = ['red', 'yellow', 'blue', 'green'];
    $color = $colors[array_rand($colors)];
  }
  $bg = 'background-' . $color;
@endphp
<body class='{{ $bg }}'>
  @include('components.header')
  <main>
    @yield('content')
  </main>
  @if (!isset($no_footer))
    @include('components.footer')
  @endif
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js" charset="utf-8"></script>

  @stack('scripts')
</body>
</html>
