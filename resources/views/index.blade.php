@extends('layouts.pages', ["title" => "Inicio"])

@section('css')
<link rel="stylesheet" href="{{asset("src/css/page/inicio.css")}}">
@endsection

@section('section')
@include('components.covers')
@include('components.message_dev')
<div class="box-tecnology">
  <div class="container-xl">
    <h5>Tecnolog&iacute;as utilizadas en el desarrollo del sitio</h5>
    <div class="flex-wrap d-flex justify-content-around align-items-center">
      <i class="fab fa-html5" title="HTML 5"></i>
      <i class="fab fa-css3-alt" title="CSS 3"></i>
      <i class="fab fa-js-square" title="Javascript"></i>
      <i class="fab fa-laravel" title="Laravel"></i>
      <i class="fab fa-bootstrap" title="Bootstrap"></i>
    </div>
  </div>
</div>
@endsection

@section('js')
  
@endsection