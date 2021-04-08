<div class="box-footer-info bg-dark">
  <div class="container-xl d-flex justify-content-around flex-wrap align-items-start">
    <div class="mt-4 mb-4 pt-3 pb-3 pl-2 pr-2 card-info-x1">
      <h5 class="text-white">HEIBERTWEBDEV</h5>
      <p class="mt-4">heibertwebdev es un sitio web gratuito sobre las tecnologias del momento, en mi blog encontraras soluciones de todo un poco, tanto simple como complejas que te seran de gran ayuda en tu dia a dia como estudiante o profesional.</p>
    </div>
    <div class="mt-4 mb-4 pt-3 pb-3 pl-2 pr-2 card-info-x1">
      <h5 class="text-white">INFORMACI&Oacute;N DE CONTACTO</h5>
      <p class="mt-4"><i class="fas fa-map-marker-alt"></i> Noboa, 24 de Mayo, Manabi - Ecuador</p>
      <p class="mt-2"><i class="far fa-envelope"></i> {{config("mail.from.address","")}}</p>
    </div>
    <div class="mt-4 mb-4 pt-3 pb-3 pl-2 pr-2 card-info-x1">
      <h5 class="text-white">ACERCA DE</h5>
      <a href="{{route('about')}}#autor" class="mt-4">Autor</a>
      <a href="{{route('about')}}#el-sitio" class="mt-2">El sitio</a>
      <a href="{{route('about')}}#contacto" class="mt-2">Contacto</a>
    </div>
    <div class="mt-4 mb-4 pt-3 pb-3 pl-2 pr-2 card-info-x1">
      <h5 class="text-white">LEGAL</h5>
      <a href="{{route('privacy')}}" class="mt-4">Politicas de privacidad</a>
    </div>
  </div>
</div>