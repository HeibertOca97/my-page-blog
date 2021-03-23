<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{$title}} | {{ config('app.name', 'StartWebDev') }}</title>
  <link rel="shortcut icon" href="{{asset("src/img/icon-x1.png")}}" type="image/x-icon">
  <link rel="stylesheet" href="{{asset("src/lib/bootstrap.min.css")}}">
  <link rel="stylesheet" href="{{asset("src/fonts/icons/css/all.css")}}">
  <link rel="stylesheet" href="{{asset("src/fonts/fonts.css")}}">
  <link rel="stylesheet" href="{{asset('src/css/config/app.structure.css')}}">
  @yield('css')
</head>
<body class="scroll-default">
  @include('layouts.partials.header')
  <section class="section">
    @yield('section')
  </section>
  @include('layouts.partials.footer')
  <script src="{{asset("src/js/config/app.structure.js")}}"></script>
  @yield('js')
</body>
</html>