<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="keywords" content="{{ config('app.name', 'HeibertWebDev') }}, desarrollo web, soporte tecnico, redes y telecomunicaciones">
  <meta name="title" content='Aprende trucos y técnicas sobre las tecnologias del momento'>
  <meta name="description" content='En {{ config('app.name', 'HeibertWebDev') }} encontraras guias, articulos sobre temas de Redes, Desarrollo web, Soporte técnico, etc. Que te seran de gran ayuda para poner en practica.'>
  <meta name="author" content="Heibert Ocaña">
  <meta name="owner" content="Heibert Ocaña">
  <meta name="designer" content="Heibert Ocaña">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'HeibertWebDev') }}</title>
  @yield('css')
</head>
<body>
  @yield('section')
  @yield('js')
</body>
</html>