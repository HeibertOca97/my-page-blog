@extends('layouts.pages', ["title" => "Blog"])

@section('css')
<link rel="stylesheet" href="{{asset('src/css/components/partials.css')}}">
<link rel="stylesheet" href="{{asset('src/css/page/blog.css')}}">
@endsection

@section('section')
@include('components.covers')

<div class="container-xl">
  <div class="d-flex justify-content-between flex-wrap align-items-start">
    <aside class="aside-x2 card-shadow pt-4 pb-4 mt-4 mb-4">
      <div class="container-xl mb-4">
        <h5 class="p-2">Suscripción</h5>
        <input type="email" class="form-control" id="txt-subscription" aria-describedby="subHelp" placeholder="username@server.domain">
        <small id="subHelp" class="form-text text-muted pt-1 pb-1">Esta suscripcion te permitira estar informado de toda las publicaciones que se realicen en este blog.</small>
        <div class="form-group form-check mt-2">
          <input type="checkbox" class="form-check-input" id="terminos" name="terminos">
          <label class="form-check-label label-term" for="terminos">Confirmo que he leido y estoy de acuerdo con los <a href="{{route('privacy')}}" target="_blank">Terminos y condiciones</a></label>
        </div>
        <button class="btn btn-dark w-100 mt-2 mb-2">Suscribirme</button>
      </div>
      
      <div class="box-tools container-xl">
        <div>
          <h5 class="p-2">Publicaciones Recientes</h5>
          <div class="mb-4"><small class="text-secondary">Por el momento no hay ninguna publicacion</small></div>
        </div>
        <div>
          <h5 class="p-2">Categorias</h5>
          <div class="mb-4"><small class="text-secondary">Por el momento no hay ninguna publicacion</small></div>
        </div>
      </div>

      <div class="box-advertisements container-xl">
      </div>
    </aside>

    <article class="article-x1 card-shadow mt-4 mb-4">
      @include('components.message_dev')
    </article>
  </div>
</div>

@include('components.boxFooterInfo')
@endsection

@section('js')

@endsection