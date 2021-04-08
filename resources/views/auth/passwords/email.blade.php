@extends('layouts.app', ["title" => "Recuperación de contraseña"])

@section('css')
<link rel="stylesheet" href="{{asset('src/css/page/login.css')}}">
@endsection

@section('section')
<section class="box-login d-flex justify-content-around flex-wrap align-items-center scroll-default">
  <picture class="box-cover mt-4 mb-4">
    <img src="{{asset("src/img/add_email.svg")}}" alt="{{config('app.name','')}}" title="{{config('app.name','')}}">
  </picture>
  <div class="box-form-login bg-white mt-4 mb-4 pt-4 pb-2">
    <div class="box-logo d-flex justify-content-center">
      <img src="{{asset("src/img/logo.png")}}" alt="{{asset('app.name','')}}" title="{{asset('app.name','')}}" class="card-shadow">
    </div>
    <h1 class="text-center mt-4">Recuperación de contraseña</h1>
    <form action="{{ route('password.email') }}" method="post" class="container-xl" id="fr-resetpass">
      <div class="form-group mt-4 mb-4">
        <label for="email"><i class="fas fa-envelope"></i> Correo electronico</label>
        <input type="email" class="form-control" id="email" name="email" autocomplete="off" placeholder="username@server.domain">
        @error('email')
          <small class="text-danger">{{$message}}</small>
        @enderror
      </div>
      <div class="d-flex justify-content-center mt-4">
        <button class="text-center text-white btn-form-login">ENVIAR ENLACE</button>
      </div>
      <div class="d-flex justify-content-center mt-4">
        <a href="{{ route('login') }}" class="route-link">Volver a Iniciar sesion</a>
      </div>
      <div class="box-autor mt-4">
        <small class="text-center text-secondary d-block"><a href="{{route('inicio')}}" class="text-dark">{{config("app.name","")}}</a> © 2021 - Desarrollador por: <a href="https://ec.linkedin.com/in/heibert-joseph-oca%C3%B1a-rodr%C3%ADguez-1a29871b7" target="_blank" class="text-dark">Heibert Ocaña</a></small>
      </div>
    </form>
  </div>
</section>
@endsection
@section('js')
<script>
  document.querySelector("#fr-resetpass").addEventListener("submit",  e => {
    e.preventDefault();
    e.target.reset();
    alert("Aun esta en desarrollo");
  });
</script>
@endsection