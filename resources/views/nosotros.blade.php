{{-- Para usar la plantilla template.blade.php --}}
@extends('template')

{{-- Llenando de información los @yield() --}}
{{-- @section('bodyClass', 'class=bg-olive') --}}

@section('pageTitle', 'Nosotros')
{{-- Como solo nos interesa mandar un string al yield, podemos pasar dicho string como 2do parámetro de la función @section() --}}

@section('mainContent')

  <div class="containerNosotros">
      <!-- CARTA PRESENTACION DE MARCA-->
      <section class="nosotros-presentacion">
        <div class="nosotros">
          <div class="tituloNosotros">
            <h1>Sobre Nosotros</h1>
          </div>
          <p><strong>Patitas de Ciudad </strong> dedica todo su esfuerzo en la salud de nuestros pacientes en el orden médico y humano.
             Contando con el apoyo de la última tecnología del medio veterinario. No solo encontrán una clínica para su integrante de la familia,
             sino profesionales especialistas en dermatología, radiología,
             oftalmología, neurología, odontología, traumatología y cardiología.</p>
          </div>
        <div class="nosotros-img">
          <br>
          <img id="imagen1" src="/storage/Servicios/medic-vet2.jpg" alt="imagen veterinario">
          <img id="imagen2" src="/storage/Servicios/medic-vet5.jpg" alt="imagen veterinaria">
          <img id="imagen3" src="/storage/Servicios/medic-vet3.jpg" alt="imagen clinica">
          <br>
        </div>

        <div class="nosotrosExtra">
          <br>
          Puede consultar por el accesoramiento personalizado en caso de viaje o traslado,
          cuidado y trato del animal durante el mismo.
          Evitando así cualquier inconveniente inoportuno cuando se encuentra por embarcar.
        </div>

      </section>

        <!-- SERVICIOS -->
        <section class="nuestrosServicios">
          <div class="serviciosNosotros">
            <h3>Nuestros Servicios</h3>
          </div>

            <div class="seccionServiciosImagenes">
              @foreach ($services as $service)
              <div class="serviciocard" id="servicio{{$service->id}}">
                <a href="/services/#{{$service->name}}">
                <h3>{{$service->name}}</h3>
                </a>
              </div>
              @endforeach
            </div>
          </section>


        <section class= "ubicacion">
          <br>
          <br>
          <h3>¡Vení a visitarnos! </h3>
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3284.0083463745127!2d-58.49264154564297!3d-34.60395045486275!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x12bc7b7917141a3f!2s%22Patitas%22+Pet+Shop!5e0!3m2!1ses-419!2sar!4v1566539914722!5m2!1ses-419!2sar" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
<br>
<br>
        </section>

  </div>
  @endsection
