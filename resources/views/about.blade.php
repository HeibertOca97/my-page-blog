@extends('layouts.pages', ["title" => "Acerca de"])

@section('css')
<link rel="stylesheet" href="{{asset('src/css/config/general.css')}}">
<link rel="stylesheet" href="{{asset('src/css/components/partials.css')}}">
<link rel="stylesheet" href="{{asset('src/css/page/about.css')}}">
@endsection

@section('section')
<div class="mt-4 mb-4 container-xl d-flex justify-content-around flex-wrap align-items-start">
  <aside class="aside-x1 card-shadow pt-4 pb-4">
    <h5 class="p-2">Suscripcion</h5>
    <h5 class="p-2">Publicaciones Recientes</h5>
    <div class="container-xl text-secondary"><small>Por el momento no hay ninguna publicacion</small></div>
  </aside>
  
  <div class="container-xl acerca-de card-shadow">
    <div id="autor" class="mt-4 mb-3 card-author">
      <h3 class="m-4"><i class="fas fa-user-graduate"></i> Sobre mi</h3>
      <div class="d-flex justify-content-around flex-wrap align-items-center">
        <picture class="d-block m-4">
          <img src="{{asset('src/img/development.jpg')}}" alt="{{config('app.name', '')}}">
        </picture>
        <p>Hola, soy <strong>Heibert Ocaña</strong> estudiante egresado de la Carrera Ingenieria en Computacion y Redes de la Universidad Estatal del Sur de Manabi, y este es mi blog.</p>
      </div>
    </div>
    
    <div id="el-sitio" class="mt-4 mb-3 card-sitie">
      <h3 class="m-4"><i class="fas fa-globe"></i> El sitio</h3>
      <div>
        <picture>
          <img src="{{asset('src/img/logo-header.png')}}" alt="{{config('app.name', '')}}" width="250px">
        </picture>
        <div class="sitie-description">
          <p><strong>heibertwebdev</strong> es un proyecto que empece a desarrollar a inicios de marzo de este año 2021 con el unico proposito de darme a conocer y de aportar a la comunidad con los muchos conocimientos que tengo de ciertas areas de la informatica, como en desarrollo web, administracion de redes informaticas y tecnico en sistemas.</p>
          <p>En mi blog encontraras articulos, guias, tutoriales y solucion de problemas que suelen aparecer al trabajar en ciertas areas de la informatica.</p>
          <p>Pero aun asi no todo en la vida es de color de rosas, no existe un manual o guia con instrucciones que te permitiran soluciones todos los problemas que se te presenten. Ya que haz elegido este camino profesional (autodidacta) como muchos, es posible que no encuentres una solucion definitiva  a la primera, asi que no te rindas y nunca pares de aprender.</p>
        </div>
      </div>
    </div>
    {{-- <div id="contacto" class="mt-4 mb-4">
      <h3 class="m-4"><i class="far fa-address-card"></i> Formulario de contacto</h3>
    </div> --}}
  </div>
</div>


@include('components.boxFooterInfo')
@endsection

@section('js')

@endsection