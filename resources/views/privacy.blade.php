@extends('layouts.pages', ["title" => "Politicas de privacidad"])

@section('css')
<link rel="stylesheet" href="{{asset('src/css/components/partials.css')}}">
@endsection

@section('section')
<div class="container-xl">
  <div class="mt-4 mb-4 pb-4 card-shadow">
    <h2 class="p-4">Politicas de privacidad</h2>
    <p class="pl-2 pr-2">Nosotros nos comprometemos a proteger su privacidad. Esta Política de privacidad explica cómo <strong>{{config("app.name","")}}</strong> recopila, usa y divulga su información personal.</p>
    <p class="pl-2 pr-2">Esta Política de privacidad se aplica a nuestro sitio web, <a href="{{config("app.url","")}}">{{config("app.url","")}}</a> y sus subdominios asociados junto con nuestra aplicación, {{config("app.name","")}}. Al acceder o utilizar nuestro Servicio, usted indica que ha leído, comprendido y aceptado nuestra recopilación, almacenamiento, uso y divulgación de su información personal como se describe en esta Política de privacidad y en nuestros Términos de servicio.</p>
    
    <h2 class="m-4">Definiciones y Términos clave</h2>
    <p class="pl-2 pr-2">Para ayudar a explicar las cosas de la manera más clara posible en esta Política de privacidad, cada vez que se hace referencia a cualquiera de estos términos, se definen estrictamente como:</p>
    <div class="container-xl">
      <ul class="pl-4 pr-4">
        <li><strong>Cookie:</strong>&nbsp;pequeña cantidad de datos generados por un sitio web y guardados por su navegador web. Se utiliza para identificar su navegador, proporcionar análisis, recordar información sobre usted, como su preferencia de idioma o información de inicio de sesión.</li>
        <li><strong>Compañía:</strong> cuando esta política menciona "Compañía", "nosotros", "nos" o "nuestro", se refiere a {{config("app.name","")}}, que es responsable de su información en virtud de esta Política de privacidad.</li>
        <li><strong>Plataforma:</strong> sitio web de Internet, aplicación web o aplicación digital de cara al público de {{config("app.name","")}}.</li>
        <li><strong>País:</strong> donde se encuentran {{config("app.name","")}} o los propietarios / fundadores de {{config("app.name","")}}, en este caso es Ecuador</li>
        <li><strong>Cliente:</strong> se refiere a la empresa, organización o persona que se registra para utilizar algun servicio de {{config("app.name","")}} para gestionar las relaciones con sus consumidores o usuarios del servicio.</li>
        <li><strong>Dispositivo:</strong> cualquier dispositivo conectado a Internet, como un teléfono, tablet, computadora o cualquier otro dispositivo que se pueda usar para visitar {{config("app.name","")}} y usar los servicios.</li>
        <li><strong>Dirección IP:</strong> a cada dispositivo conectado a Internet se le asigna un número conocido como dirección de protocolo de Internet (IP). Estos números generalmente se asignan en bloques geográficos. A menudo, se puede utilizar una dirección IP para identificar la ubicación desde la que un dispositivo se conecta a Internet.</li>
        <li><strong>Personal:</strong> se refiere a aquellas personas que son empleadas por {{config("app.name","")}} o están bajo contrato para realizar un servicio en nombre de una de las partes.</li>
        <li><strong>Datos personales:</strong> cualquier información que directa, indirectamente o en conexión con otra información, incluido un número de identificación personal, permita la identificación de una persona física.</li>
        <li><strong>Servicio:</strong> se refiere al servicio brindado por {{config("app.name","")}} como se describe en los términos relativos (si están disponibles) y en esta plataforma.</li>
        <li><strong>Terceros:</strong> se refiere a anunciantes, patrocinadores de concursos, socios promocionales y de marketing, y otros que brindan nuestro contenido o cuyos productos o servicios que creemos que pueden interesarle.</li>
        <li><strong>Sitio web:</strong> el sitio de {{config("app.name","")}}, al que se puede acceder a través de esta URL: <a href="{{config("app.url","")}}">{{config("app.url","")}}</a></li>
        <li><strong>Usted:</strong> una persona o entidad que está registrada con {{config("app.name","")}} para utilizar los Servicios.</li>
      </ul>
    </div>

    <h2 class="m-4">¿Qué información recopilamos?</h2>
    <p class="pl-2 pr-2">Recopilamos información suya cuando visita nuestra plataforma, se registra en nuestro sitio, realiza un pedido, se suscribe a nuestro boletín o completa un formulario.</p>
    
    <h2 class="m-4">¿Cómo usamos la información que recopilamos?</h2>
    <p class="pl-2 pr-2">Cualquiera de la información que recopilamos de usted puede usarse de una de las siguientes maneras:</p>
    <div class="container-xl">
      <ul class="pl-4 pr-4">
        <li>Para personalizar su experiencia (su información nos ayuda a responder mejor a sus necesidades individuales)</li>
        <li>Para mejorar nuestra plataforma (nos esforzamos continuamente por mejorar lo que ofrece nuestra plataforma en función de la información y los comentarios que recibimos de usted)</li>
        <li>Para mejorar el servicio al cliente (su información nos ayuda a responder de manera más efectiva a sus solicitudes de servicio al cliente y necesidades de soporte)</li>
        <li>Para enviar correos electrónicos periódicos</li>
      </ul>
    </div>
    
    <h2 class="m-4">¿Cómo utilizamos su dirección de correo electrónico?</h2>
    <p class="pl-2 pr-2">Al enviar su dirección de correo electrónico en esta plataforma, acepta recibir nuestros correos electrónicos. Puede cancelar su participación en cualquiera de estas listas de correo electrónico en cualquier momento haciendo clic en el enlace de exclusión voluntaria u otra opción para cancelar la suscripción que se incluye en el correo electrónico respectivo. Solo enviamos correos electrónicos a personas que nos han autorizado a contactarlos, ya sea directamente o a través de un tercero. No enviamos correos electrónicos comerciales no solicitados, porque odiamos el spam tanto como usted. Al enviar su dirección de correo electrónico, también acepta permitirnos usar su dirección de correo electrónico para la orientación de la audiencia del cliente en sitios como Facebook, donde mostramos publicidad personalizada a personas específicas que han optado por recibir nuestras comunicaciones. Las direcciones de correo electrónico enviadas solo a través de la página de procesamiento de pedidos se utilizarán con el único propósito de enviarle información y actualizaciones relacionadas con su pedido. Sin embargo, si nos ha proporcionado el mismo correo electrónico a través de otro método, podemos usarlo para cualquiera de los fines establecidos en esta Política. Nota: Si en algún momento desea cancelar la suscripción para no recibir correos electrónicos futuros, incluimos instrucciones detalladas para cancelar la suscripción en la parte inferior de cada correo electrónico.</p>

    <h2 class="m-4">¿Cuánto tiempo conservamos su información?</h2>
    <p class="pl-2 pr-2">Conservamos su información solo mientras la necesitemos para proporcionarle <strong>{{config("app.name","")}}</strong> y cumplir con los propósitos descritos en esta política. Este también es el caso de cualquier persona con la que compartamos su información y que lleve a cabo servicios en nuestro nombre. Cuando ya no necesitemos usar su información y no sea necesario que la conservemos para cumplir con nuestras obligaciones legales o reglamentarias, la eliminaremos de nuestros sistemas o la despersonalizaremos para que no podamos identificarlo.</p>

    <h2 class="m-4">¿Cómo protegemos su información?</h2>
    <p class="pl-2 pr-2">Implementamos una variedad de medidas de seguridad para mantener la seguridad de su información personal cuando realiza un pedido, ingresa, envía o accede a su información personal. Ofrecemos el uso de un servidor seguro. Toda la información confidencial / crediticia suministrada se transmite a través de la tecnología Secure Socket Layer (SSL) y luego se encripta en nuestra base de datos de proveedores de pasarela de pago solo para que sea accesible por aquellos autorizados con derechos especiales de acceso a dichos sistemas, y deben mantener la información confidencial. Después de una transacción, su información privada (tarjetas de crédito, números de seguro social, finanzas, etc.) nunca se archiva. Sin embargo, no podemos garantizar la seguridad absoluta de la información que transmita a <strong>{{config("app.name","")}}</strong> ni garantizar que su información en el servicio no sea accedida, divulgada, alterada o destruida por una infracción de cualquiera de nuestras condiciones físicas, salvaguardias técnicas o de gestión.</p>

    <h2 class="m-4">Ley que Rige</h2>
    <p class="pl-2 pr-2">Esta Política de privacidad se rige por las leyes de Ecuador sin tener en cuenta su disposición sobre conflicto de leyes. Usted acepta la jurisdicción exclusiva de los tribunales en relación con cualquier acción o disputa que surja entre las partes en virtud de esta Política de privacidad o en relación con ella, excepto aquellas personas que puedan tener derecho a presentar reclamaciones en virtud del Escudo de privacidad o el marco suizo-estadounidense.</p>
    <p class="pl-2 pr-2">Las leyes de Ecuador, excluyendo sus conflictos de leyes, regirán este Acuerdo y su uso de la plataforma. Su uso de la plataforma también puede estar sujeto a otras leyes locales, estatales, nacionales o internacionales.</p>
    <p class="pl-2 pr-2">Al usar <strong>{{config("app.name","")}}</strong> o comunicarse con nosotros directamente, significa que acepta esta Política de privacidad. Si no está de acuerdo con esta Política de privacidad, no debe interactuar con nuestro sitio web ni utilizar nuestros servicios. El uso continuo del sitio web, la interacción directa con nosotros o después de la publicación de cambios en esta Política de privacidad que no afecten significativamente el uso o divulgación de su información personal significará que acepta esos cambios.</p>

    <h2 class="m-4">Tu consentimiento</h2>
    <p class="pl-2 pr-2">Hemos actualizado nuestra Política de privacidad para brindarle total transparencia sobre lo que se establece cuando visita nuestro sitio y cómo se utiliza. Al utilizar nuestra plataforma, registrar una cuenta o realizar una compra, por la presente acepta nuestra Política de privacidad y acepta sus términos.</p>
    
    <h2 class="m-4">Enlaces a otros Sitios Web</h2>
    <p class="pl-2 pr-2">Esta Política de privacidad se aplica solo a los Servicios. Los Servicios pueden contener enlaces a otros sitios web que <strong>{{config("app.name","")}}</strong> no opera ni controla. No somos responsables por el contenido, la precisión o las opiniones expresadas en dichos sitios web, y dichos sitios web no son investigados, monitoreados o verificados por nuestra precisión o integridad. Recuerde que cuando utiliza un enlace para ir desde los Servicios a otro sitio web, nuestra Política de privacidad deja de estar en vigor. Su navegación e interacción en cualquier otro sitio web, incluidos aquellos que tienen un enlace en nuestra plataforma, están sujetos a las propias reglas y políticas de ese sitio web. Dichos terceros pueden utilizar sus propias cookies u otros métodos para recopilar información sobre usted.</p>

    <h2 class="m-4">Publicidad</h2>
    <p class="pl-2 pr-2">Esta plataforma puede contener anuncios de terceros y enlaces a sitios de terceros. <strong>{{config("app.name","")}}</strong> no hace ninguna representación en cuanto a la exactitud o idoneidad de la información contenida en esos anuncios o sitios y no acepta ninguna responsabilidad u obligación por la conducta o el contenido de esos anuncios y sitios y las ofertas realizadas por los terceros.</p>
    <p class="pl-2 pr-2">La publicidad mantiene a <strong>{{config("app.name","")}}</strong> y muchos de los sitios web y servicios que usted utiliza de forma gratuita. Trabajamos arduamente para asegurarnos de que los anuncios sean seguros, discretos y lo más relevantes posible.</p>
    <p class="pl-2 pr-2">Los anuncios de terceros y los enlaces a otros sitios donde se anuncian bienes o servicios no son respaldos ni recomendaciones de <strong>{{config("app.name","")}}</strong> de los sitios, bienes o servicios de terceros. <strong>{{config("app.name","")}}</strong> no asume ninguna responsabilidad por el contenido de los anuncios, las promesas hechas o la calidad / confiabilidad de los productos o servicios ofrecidos en todos los anuncios.</p>

    <h2 class="m-4">Cookies para Publicidad</h2>
    <p class="pl-2 pr-2">Estas cookies recopilan información a lo largo del tiempo sobre su actividad en línea en la plataforma y otros servicios en línea para hacer que los anuncios en línea sean más relevantes y efectivos para usted. Esto se conoce como publicidad basada en intereses. También realizan funciones como evitar que el mismo anuncio vuelva a aparecer continuamente y garantizar que los anuncios se muestren correctamente a los anunciantes. Sin cookies, es muy difícil para un anunciante llegar a su audiencia o saber cuántos anuncios se mostraron y cuántos clics recibieron.</p>

    <h2 class="m-4">Cookies</h2>
    <p class="pl-2 pr-2"><strong>{{config("app.name","")}}</strong> utiliza "cookies" para identificar las áreas de nuestro sitio web que ha visitado. Una cookie es una pequeña porción de datos que su navegador web almacena en su computadora o dispositivo móvil. Usamos cookies para mejorar el rendimiento y la funcionalidad de nuestra plataforma, pero no son esenciales para su uso. Sin embargo, sin estas cookies, es posible que ciertas funciones, como los videos, no estén disponibles o se le solicitará que ingrese sus datos de inicio de sesión cada vez que visite la plataforma, ya que no podríamos recordar que había iniciado sesión anteriormente. La mayoría de los navegadores web se pueden configurar para desactivar el uso de cookies. Sin embargo, si desactiva las cookies, es posible que no pueda acceder a la funcionalidad de nuestro sitio web correctamente o en absoluto. Nunca colocamos información de identificación personal en cookies.</p>

    <h2 class="m-4">Bloquear y deshabilitar Cookies y tecnologías similares</h2>
    <p class="pl-2 pr-2">Donde sea que se encuentre, también puede configurar su navegador para bloquear cookies y tecnologías similares, pero esta acción puede bloquear nuestras cookies esenciales e impedir que nuestro sitio web funcione correctamente, y es posible que no pueda utilizar todas sus funciones y servicios por completo. También debe tener en cuenta que también puede perder información guardada (por ejemplo, detalles de inicio de sesión guardados, preferencias del sitio) si bloquea las cookies en su navegador. Los distintos navegadores ponen a su disposición distintos controles. Deshabilitar una cookie o una categoría de cookie no elimina la cookie de su navegador, deberá hacerlo usted mismo desde su navegador, debe visitar el menú de ayuda de su navegador para obtener más información.</p>

    <h2 class="m-4">Cambios en nuestra Política de Privacidad</h2>
    <p class="pl-2 pr-2">Podemos cambiar nuestro Servicio y nuestras políticas, y es posible que debamos realizar cambios en esta Política de privacidad para que reflejen con precisión nuestro Servicio y nuestras políticas. A menos que la ley exija lo contrario, le notificaremos (por ejemplo, a través de nuestro Servicio) antes de realizar cambios en esta Política de privacidad y le daremos la oportunidad de revisarlos antes de que entren en vigencia. Luego, si continúa utilizando el Servicio, estará sujeto a la Política de privacidad actualizada. Si no desea aceptar esta o cualquier Política de privacidad actualizada, puede eliminar su cuenta.</p>

    <h2 class="m-4">Servicios de terceros</h2>
    <p class="pl-2 pr-2">Podemos mostrar, incluir o poner a disposición contenido de terceros (incluidos datos, información, aplicaciones y otros servicios de productos) o proporcionar enlaces a sitios web o servicios de terceros ("Servicios de terceros").</p>
    <p class="pl-2 pr-2">Usted reconoce y acepta que <strong>{{config("app.name","")}}</strong> no será responsable de ningún Servicio de terceros, incluida su precisión, integridad, puntualidad, validez, cumplimiento de los derechos de autor, legalidad, decencia, calidad o cualquier otro aspecto de los mismos. <strong>{{config("app.name","")}}</strong> no asume ni tendrá ninguna obligación o responsabilidad ante usted o cualquier otra persona o entidad por los Servicios de terceros.</p>
    <p class="pl-2 pr-2">Los Servicios de terceros y los enlaces a los mismos se brindan únicamente para su conveniencia y usted accede a ellos y los usa completamente bajo su propio riesgo y sujeto a los términos y condiciones de dichos terceros.</p>
    
    <h2 class="m-4">Tecnologías de Seguimiento</h2>
    <div class="container-xl">
      <ul class="pl-4 pr-4">
        <li><strong>Cookies:</strong> Usamos Cookies para mejorar el rendimiento y la funcionalidad de nuestra plataforma, pero no son esenciales para su uso. Sin embargo, sin estas cookies, es posible que ciertas funciones, como los videos, no estén disponibles o se le solicitará que ingrese sus datos de inicio de sesión cada vez que visite la plataforma, ya que no podríamos recordar que había iniciado sesión anteriormente.</li>
        <li><strong>Almacenamiento Local:</strong> El almacenamiento local, a veces conocido como almacenamiento DOM, proporciona a las aplicaciones web métodos y protocolos para almacenar datos del lado del cliente. El almacenamiento web admite el almacenamiento de datos persistente, similar a las cookies, pero con una capacidad muy mejorada y sin información almacenada en el encabezado de solicitud HTTP.</li>
        <li><strong>Sesiones:</strong> utiliza "Sesiones" para identificar las áreas de nuestro sitio web que ha visitado. Una sesión es un pequeño fragmento de datos que su navegador web almacena en su computadora o dispositivo móvil.</li> 
      </ul>
    </div>
    <p class="pl-2 pr-2">No vendemos la información personal de nuestros usuarios. Para obtener más información sobre estos derechos, comuníquese con nosotros.</p>
    
    <h2 class="m-4">Contáctenos</h2>
    <p class="pl-2 pr-2">No dude en contactarnos si tiene alguna pregunta.</p>
    <div class="container-xl">
      <ul class="pl-4 pr-4">
        <li>A través de correo electrónico: {{config("mail.from.address","")}}</li>
        <li>A través de este enlace: <a href="{{config("app.url","")}}">{{config("app.url","")}}</a></li> 
      </ul>
    </div>

  </div>
</div>

@include('components.boxFooterInfo')
@endsection