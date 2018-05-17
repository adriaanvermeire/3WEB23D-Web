<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
  <link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css" >
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg"
      crossorigin="anonymous">
  <title>@yield('title')</title>
</head>
<body>
  <main>
    @if (isset($color))
      @include('components.header', ['color' => $color])
    @else
      @include('components.home-header')
    @endif
    @yield('content')
  </main>
  @include('components.footer')
  @stack('scripts')
</body>
</html>
