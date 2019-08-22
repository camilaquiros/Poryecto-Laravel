{{-- Para usar la plantilla template.blade.php --}}
@extends('template')

{{-- Llenando de información los @yield() --}}
{{-- @section('bodyClass', 'class=bg-olive') --}}

@section('pageTitle', 'Nosotros')
{{-- Como solo nos interesa mandar un string al yield, podemos pasar dicho string como 2do parámetro de la función @section() --}}

@section('mainContent')

  <div class="containerIndex">
      <!-- CARTA PRESENTACION DE MARCA-->
      <section class="nosotros-presentacion">
        <div class="contenedor-nosotros">
          <br>
          <br>
          <p><strong>Patitas de Ciudad </strong> dedica todo su esfuerzo en la salud de nuestros pacientes en el orden médico y humano.
             Contando con el apoyo de la última tecnología del medio veterinario. No solo encontrán una clínica para su integrante de la familia,
             sino profesionales especialistas en dermatología, radiología,
             oftalmología, neurología, odontología, traumatología y cardiología.</p>
          </div>
        <div class="contenedor-img">
          <br>
          <img src="/storage/Servicios/medic-vet4.jpg" alt="imagen veterinario">
          <img src="/storage/Servicios/medic-vet7.jpg" alt="imagen veterinaria">
          <img src="/storage/Servicios/medic-vet8.jpg" alt="imagen clinica">
          <br>
        </div>

        <div class="contenedor-nosotrosExtra">
          <br>
          Puede consultar por el accesoramiento personalizado en caso de viaje o traslado,
          cuidado y trato del animal durante el mismo.
          Evitando así cualquier inconveniente inoportuno cuando se encuentra por embarcar.
        </div>

      </section>

        <!-- SERVICIOS -->
        <section class="nuestrosServicios">
          <div class="tituloServicios">
            <h3>Nuestros Servicios</h3>
          </div>

            <div class="seccionServiciosImagenes">
              @foreach ($services as $service)
              <div class="serviciocard" id="servicio{{$service->id}}">
                  <h3>{{$service->name}}</h3>
                  <p>{{$service->description}}</p>
              </div>
              @endforeach
            </div>
          </section>
      </div>

        <section class= "ubicacion">
          <br>
          <br>
          <h3>¡Vení a visitarnos! </h3>
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13136.139598054828!2d-58.4922454!3d-34.603279!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x12bc7b7917141a3f!2s%22Patitas%22+Pet+Shop!5e0!3m2!1ses-419!2sar!4v1566414196584!5m2!1ses-419!2sar" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
<br>
<br>
        </section>

  </div>
  @endsection
{{-- Cuando sabemos que lo que vamos a mandar al yield() es contenido real html, estamos obligados a pasarlo de esta manera --}}
</body>

</html>
