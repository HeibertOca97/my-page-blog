<picture class="box-cover flex-wrap d-flex justify-content-center align-items-center">
  @if (request()->routeIs("inicio"))
  <img src="{{asset('src/img/covers/dev.jpg')}}" alt="{{ config('app.name', 'StartWebDev') }}">
  <div class="container-xl">
    <div class="box-objective">
        <h1 class="mb-4">Aprende trucos y t&eacute;cnicas sobre las tecnologias del momento</h1>
        <p>En <strong>StartWebDev</strong> encontraras guias, articulos sobre temas de Redes, Desarrollo web, Soporte t&eacute;cnico, etc. Que te seran de gran ayuda para poner en practica o como tema de consulta.</p>
    </div>
    <div class="box-network">
      <h6 class="text-center text-white">Redes sociales</h6>
      <div class="flex-wrap d-flex justify-content-center">
        <a href="https://www.facebook.com/people/H-Joseph-Oca%C3%B1a-Rodriguez/100008371148428" target="_blanck" class="fab fa-facebook text-white" title="Facebook" role="button"></a>
        <a href="https://www.instagram.com/heibertoca97/" target="_blanck" class="fab fa-instagram text-white" title="Instagram" role="button"></a>
        <a href="https://ec.linkedin.com/in/heibert-joseph-oca%C3%B1a-rodr%C3%ADguez-1a29871b7" target="_blanck" class="fab fa-linkedin text-white" title="Linkedin" role="button"></a>
      </div>
    </div>
  </div>
  @elseif(request()->routeIs("blog"))
  <img src="{{asset('src/img/covers/blog.jpg')}}" alt="{{ config('app.name', 'StartWebDev') }}">
  <div class="container-xl">
    <div class="box-objective">
        <h1 class="mb-4">Art&iacute;culos, Tutoriales y Noticias sobre tecnologia</h1>
        <p>Aqui encontraras lo que necesites, Redes, Desarrollo web, Soporte t&eacute;cnico, etc. Asi que quedate y consulta lo que necesites. ¿Que desea saber?</p>
        <div class="box-find-posts" style="margin-top: 40px;">
        <input type="text" name="post" autocomplete="off" placeholder="¿Que post deseas encontrar?">
        <button>Buscar</button>
      </div>
    </div>
  </div>
  @endif
</picture>