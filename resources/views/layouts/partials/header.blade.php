<header class="header">
  <div class="box-nav-superior">
    <div class="container-xl flex-wrap d-flex justify-content-between align-items-center">
      <a href="{{route('inicio')}}" title="{{ config('app.name', 'HeibertWebDev') }}"><img src="{{asset("src/img/logo-header.png")}}" alt="Logotipo - {{ config('app.name', 'HeibertWebDev') }}"></a>
      <div class="flex-wrap d-flex justify-content-between align-items-center" id="box-tools-menu">
        <a href="{{route("login")}}" class="{{request()->routeIs("login") ? "route-active-login" : "btn-login"}} d-block"><i class="far fa-user" title="Iniciar sesion"></i> <span>Iniciar sesi&oacute;n</span></a>
        <i class="fas fa-bars ml-4 mr-2" id="ico-bar" role="button" title="menu"></i>
      </div>
    </div>
    
    <nav id="nav" class="scroll-default">
      <div class="header-box">
        <div class="box-nav-header flex-wrap d-flex justify-content-around align-items-center">
          <a href="{{route('inicio')}}" title="{{ config('app.name', 'HeibertWebDev') }}"><img src="{{asset("src/img/logo-header.png")}}" alt="Logotipo - {{ config('app.name', 'HeibertWebDev') }}"></a>
          <i class="fas fa-times m-2 text-dark" id="ico-cancel" role="button" title="menu"></i>
        </div>

        <form action="#" method="post" class="box-find-nav" id="fr-find-navbar">
          <input type="text" name="post" autocomplete="off" placeholder="¿Buscar post?" id="txt-find-post">
          <button class="fas fa-search"></button>
        </form>
        
        <div class="nav-box-link">
          <a href="{{route('inicio')}}" class="{{request()->routeIs('inicio') ? 'link-active-route':'link-default'}}"><i class="fas fa-home"></i> Inicio</a>
          <a href="{{route("blog")}}" class="{{request()->routeIs('blog') ? 'link-active-route':'link-default'}}"><i class="fas fa-cubes"></i> Blog</a>
          <a href="{{route("about")}}" class="{{request()->routeIs('about') ? 'link-active-route':'link-default'}}"><i class="far fa-address-card"></i> Acerca de</a>
          <a href="{{route("portafolio")}}" class="{{request()->routeIs('portafolio') ? 'link-active-route':'link-default'}}"><i class="fas fa-briefcase"></i> Portafolio</a>
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
      <form action="#" method="POST" class="box-find-posts" id="fr-find-navbar-inf">
        <input type="text" name="post" autocomplete="off" placeholder="¿Que post deseas encontrar?">
        <button>Buscar</button>
      </form>
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