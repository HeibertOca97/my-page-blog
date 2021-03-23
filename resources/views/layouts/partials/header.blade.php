<header class="header">
  <div class="box-nav-superior">
    <div class="container-xl flex-wrap d-flex justify-content-between align-items-center">
      <a href="{{route('inicio')}}" title="{{ config('app.name', 'StartWebDev') }}"><img src="{{asset("src/img/logo-t1-x2.png")}}" alt="Logotipo - {{ config('app.name', 'StartWebDev') }}"></a>
      <div class="flex-wrap d-flex justify-content-between align-items-center" id="box-tools-menu">
        <a href="{{route("login")}}" class="{{request()->routeIs("login") ? "route-active-login" : "btn-login"}} d-block"><i class="far fa-user" title="Iniciar sesion"></i> <span>Iniciar sesi&oacute;n</span></a>
        <i class="fas fa-bars ml-4 mr-2" id="ico-bar" role="button" title="menu"></i>
      </div>
    </div>
    <nav id="nav">
      <div class="header-box scroll-default">
        <div class="box-nav-header flex-wrap d-flex justify-content-around align-items-center">
          <a href="{{route('inicio')}}" title="{{ config('app.name', 'StartWebDev') }}"><img src="{{asset("src/img/logo-t1-x2.png")}}" alt="Logotipo - {{ config('app.name', 'StartWebDev') }}"></a>
          <i class="fas fa-times m-2 text-dark" id="ico-cancel" role="button" title="menu"></i>
        </div>

        <div class="nav-box-link">
          <a href="{{route('inicio')}}" class="{{request()->routeIs('inicio') ? 'link-active-route':'link-default'}}"><i class="fas fa-home"></i> Inicio</a>
          <a href="{{route("blog")}}" class="{{request()->routeIs('blog') ? 'link-active-route':'link-default'}}"><i class="fas fa-cubes"></i> Blog</a>
          <a href="{{route("about")}}" class="{{request()->routeIs('about') ? 'link-active-route':'link-default'}}"><i class="far fa-address-card"></i> Acerca de</a>
          <a href="{{route("portafolio")}}" class="{{request()->routeIs('portafolio') ? 'link-active-route':'link-default'}}"><i class="fas fa-project-diagram"></i> Portafolio</a>
        </div>
        
        <hr color="white">
        <div class="nav-box-social">
          <h6 class="text-center text-white">Redes sociales</h6>
          <div class="flex-wrap d-flex justify-content-center">
            <a href="https://www.facebook.com/people/H-Joseph-Oca%C3%B1a-Rodriguez/100008371148428" target="_blanck" class="fab fa-facebook" title="Facebook" role="button"></a>
            <a href="https://www.instagram.com/heibertoca97/" target="_blanck" class="fab fa-instagram" title="Instagram" role="button"></a>
            <a href="https://ec.linkedin.com/in/heibert-joseph-oca%C3%B1a-rodr%C3%ADguez-1a29871b7" target="_blanck" class="fab fa-linkedin" title="Linkedin" role="button"></a>
          </div>
        </div>
      </div>
    </nav>
  </div>

  <div class="box-nav-inferior" id="nav-bar-inferior">
    <div class="container-xl flex-wrap d-flex justify-content-around align-items-center">
      @if (!request()->routeIs("blog"))
      <div class="box-find-posts">
        <input type="text" name="post" autocomplete="off" placeholder="¿Que post deseas encontrar?">
        <button>Buscar</button>
      </div>
      @endif
      <nav id="box-bar-link-inf" class="box-bar-inferior flex-wrap d-flex justify-content-center align-items-center">
        <!--Links agregados con js-->
      </nav>
    </div>
  </div>
  <div id="box-doc" role="button"></div>
</header>
<!--
  CONTENEDORES
-->
<div id="box-vacio" class="d-block"></div>
<div id="box-warning-connection">
  <div class="container-xl text-white">
    <p>Hubo un error de red. Por favor revise su conexion a internet.</p>
    <i class="fas fa-window-close" role="button" id="btn-warning-network"></i>
  </div>
  </div>