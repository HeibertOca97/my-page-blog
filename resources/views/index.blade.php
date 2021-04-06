@extends('layouts.pages', ["title" => "Inicio"])

@section('css')
<link rel="stylesheet" href="{{asset('src/css/components/partials.css')}}">
<link rel="stylesheet" href="{{asset("src/css/page/inicio.css")}}">
@endsection

@section('section')
@include('components.covers')
@include('components.boxTemary')
@include('components.boxTecnology')
@include('components.boxFooterInfo')
@endsection

@section('js')
  <script src="{{asset("src/js/inicio.js")}}"></script>
@endsection