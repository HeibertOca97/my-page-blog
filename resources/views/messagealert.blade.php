@extends('layouts.app', ["title" => $title])

@section('section')
<div class="container-xl mt-5">
  <h1 class="text-center @if ($status) text-success @else text-danger @endif">{{$title}}</h1>
  <div class="d-flex justify-content-center mt-5 mb-5">
    <a href="{{route("about")}}#contacto" class="btn btn-success">Volver al sitio</a>
  </div>
  @if ($status)
    <img src="{{asset("src/img/prueba/add_mailbox.svg")}}" alt="{{config('app.name','')}}" title="{{config('app.name','')}}" style="max-width: 350px; width:100%;" class="d-block mt-4 mb-4 m-auto">
    @else
    <img src="{{asset("src/img/prueba/add_warning.svg")}}" alt="{{config('app.name','')}}" title="{{config('app.name','')}}" style="max-width: 350px; width:100%;" class="d-block mt-4 mb-4 m-auto">
  @endif
</div>
    
@endsection