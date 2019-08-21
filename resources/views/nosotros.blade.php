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
          <img src="img/medic-vet4.jpg" alt="imagen veterinario">
          <img src="img/medic-vet7.jpg" alt="imagen veterinaria">
          <img src="img/medic-vet8.jpg" alt="imagen clinica">
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
            <div class="servicioCard">
              <div class="content">
                <h3>Clinica Veterinaria</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
              </div>
            </div>
            <div class="servicioCard" id="servicio2">
              <div class="content">
                <h3>Peluqueria Canina</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
              </div>
            </div>
            <div class="servicioCard" id="servicio3">
              <div class="content">
                <h3>Estudios</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
              </div>
            </div>
          </div>
        </section>

        
    </div>
  </div>
  @endsection
{{-- Cuando sabemos que lo que vamos a mandar al yield() es contenido real html, estamos obligados a pasarlo de esta manera --}}
</body>

</html>
