<div id="box-message">
  <div class="container-xl text-center">
    <h3 class="mb-4">¿Oups? <i class="far fa-sad-cry"></i> El sitio se encuentra en desarrollo</h3>
    <p class="mb-4">Por el momento no hay nada, aun se esta trabajando <i class="far fa-smile-wink"></i>...</p>
    @if (request()->routeIs("blog"))
    <img src="{{asset("src/img/add_blogging.svg")}}" alt="{{config('app.name','')}}" title="{{config('app.name','')}}">
    @else
    <img src="{{asset("src/img/add_project.svg")}}" alt="{{config('app.name','')}}" title="{{config('app.name','')}}">
    @endif
  </div>
</div>