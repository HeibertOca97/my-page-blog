@extends('layouts.pages', ["title" => "Acerca de"])

@section('css')
<link rel="stylesheet" href="{{asset('src/css/components/partials.css')}}">
<link rel="stylesheet" href="{{asset('src/css/page/about.css')}}">
@endsection

@section('section')
<div class="mt-4 mb-4 container-xl d-flex justify-content-around flex-wrap align-items-start">
  <aside class="aside-x1 card-shadow pt-4 pb-4 mb-4">
    <div class="container-xl mb-4">
      <h5 class="p-2">Suscripción</h5>
      <input type="email" class="form-control ignore" id="txt-subscription" aria-describedby="subHelp" placeholder="username@server.domain">
      <small id="subHelp" class="form-text text-muted pt-1 pb-1">Esta suscripcion te permitira estar informado de toda las publicaciones que se realicen en este blog.</small>
      <div class="form-group form-check mt-2">
        <input type="checkbox" class="form-check-input" id="terminos" name="terminos">
        <label class="form-check-label label-term" for="terminos">Confirmo que he leido y estoy de acuerdo con los <a href="{{route('privacy')}}" target="_blank">Terminos y condiciones</a></label>
      </div>
      <button class="btn btn-dark w-100 mt-2 mb-2">Suscribirme</button>
    </div>
    <h5 class="p-2">Publicaciones Recientes</h5>
    <div class="container-xl mb-4"><small class="text-secondary">Por el momento no hay ninguna publicacion</small></div>
    <h5 class="p-2">Categorias</h5>
    <div class="container-xl mb-4"><small class="text-secondary">Por el momento no hay ninguna publicacion</small></div>
  </aside>
  
  <div class="container-xl acerca-de card-shadow">
    <div id="autor" class="mt-4 mb-3 card-author">
      <h3 class="m-4"><i class="fas fa-user-graduate"></i> SOBRE MI</h3>
      <div class="d-flex justify-content-around flex-wrap align-items-center">
        <picture class="d-block m-4">
          <img src="{{asset('src/img/development.jpg')}}" alt="{{config('app.name', '')}}">
        </picture>
        <p>Hola, soy <strong>Heibert Ocaña</strong> estudiante egresado de la Carrera Ingenieria en Computacion y Redes de la <a href="https://unesum.edu.ec/" target="_blank">Universidad Estatal del Sur de Manabi</a>, y este es mi blog.</p>
      </div>
    </div>
    
    <div id="el-sitio" class="mt-4 mb-3 card-sitie">
      <h3 class="m-4"><i class="fas fa-globe"></i> EL SITIO</h3>
      <div class="d-flex justify-content-between flex-wrap align-items-center flex-row-reverse">
        <picture>
          <img src="{{asset('src/img/logo-header.png')}}" alt="{{config('app.name', '')}}" width="250px">
        </picture>
        <div class="sitie-description">
          <p><strong>heibertwebdev</strong> es un proyecto que empece a desarrollar a inicios de febrero de este año 2021 con el unico proposito de darme a conocer y de aportar a la comunidad con los muchos conocimientos que tengo de ciertas areas de la informatica, como en desarrollo web, administracion de redes informaticas y tecnico en sistemas.</p>
          <p>En mi blog encontraras articulos, guias, tutoriales y solucion de problemas que suelen presentarse en las actividades que realizas en tu dia a dia.</p>
          <p>Pero aun asi no todo en la vida es de color de rosas, no existe un manual o guia con instrucciones que te permitiran solucionar todos los problemas que se te presenten. Ya que haz elegido este camino profesional (autodidacta) como muchos, es posible que no encuentres una solucion definitiva  a la primera, asi que no te rindas y nunca pares de aprender.</p>
        </div>
      </div>
    </div>
    <div id="contacto" class="mt-4 mb-4">
      <h3 class="m-4"><i class="far fa-address-card"></i> FORMULARIO DE CONTACTO</h3>
      <div class="d-flex justify-content-between flex-wrap align-items-start">
        <div class="box-condition">
          <div class="container-xl mt-4 mb-4">
            <h5 class="m-2">Tu puedes</h5>
            <ul class="text-secondary">
              <li class="mb-2"><small>Si quieres ponerte en contacto con el autor del sitio, puedes enviarle un mensaje por medio de este formulario.</small></li>
              <li class="mb-2"><small>Sugerir alguna idea para la creacion de un nuevo articulo referente a su problema.</small></li>
              <li class="mb-2"><small>Solicitar la cancelacion de tu suscripcion.</small></li>
              <li><small>Saludar o agradecer de algo.</small></li>
            </ul>
          </div>
          <div class="container-xl mt-4 mb-4">
            <h5 class="m-2">Tu no debes</h5>
            <ul class="text-secondary">
              <li><small>Enviar alguna groseria al autor o algun colaborador del sitio por este medio, se respetuoso, puesto que podemos bloquearte el uso de este formulario.</small></li>
            </ul>
          </div>
        </div>
        <div class="box-form-contact">
          <form action="{{route('contactar')}}" method="post" id="fr-contact">
            @csrf
            <div class="form-group">
              <label for="name" class="@error('name') text-danger @enderror">Tus nombres: *</label>
              <input type="text" name="name" class="form-control text required @error('name') border-danger @enderror" id="name" aria-describedby="nameHelp" autocomplete="off" value="{{old('name')}}">
              @error('name')
              <small id="nameHelp" class="form-text text-danger">{{$message}}</small>
              @enderror
            </div>
            <div class="form-group">
              <label for="email" class="@error('email') text-danger @enderror">Correo: *</label>
              <input type="email" name="email" class="form-control @error('email') border-danger @enderror" id="email" aria-describedby="emailHelp" autocomplete="off" value="{{old('email')}}">
              @error('email')
              <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
              @enderror
            </div>
            <div class="form-group">
              <label for="business" class="@error('business') text-danger @enderror">Asunto: *</label>
              <input type="text" name="business" class="form-control text required @error('business') border-danger @enderror" id="business" aria-describedby="businessHelp" autocomplete="off" value="{{old('business')}}">
              @error('business')
              <small id="businessHelp" class="form-text text-danger">{{$message}}</small>
              @enderror
            </div>
            <div class="form-group">
              <label for="message" class="@error('message') text-danger @enderror">Mensaje: *</label>
              <textarea class="form-control required @error('message') border-danger @enderror" name="message" id="message" autocomplete="off" style="max-height: 150px;min-height:80px;">{{old("message")}}</textarea>
              @error('message')
              <small id="messageHelp" class="form-text text-danger">{{$message}}</small>
              @enderror
            </div>
            <div>
              <button class="btn btn-dark w-100">Enviar mensaje</button>
            </div>
          </form>
        </div>

      </div>

    </div>
  </div>
</div>

@include('components.boxFooterInfo')
@endsection

@section('js')
<script>
removeStyleErrorFormatOne("input");
removeStyleErrorFormatOne("textarea");
</script>
@endsection