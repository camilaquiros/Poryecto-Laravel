{{-- Para usar la plantilla template.blade.php --}}
@extends('template')

{{-- Llenando de información los @yield() --}}
{{-- @section('bodyClass', 'class=bg-olive') --}}

@section('pageTitle', 'Servicios')
{{-- Como solo nos interesa mandar un string al yield, podemos pasar dicho string como 2do parámetro de la función @section() --}}

@section('mainContent')

  <div class="containerIndex">

        <!-- SERVICIOS -->
        <section class="nuestrosServicios">
          <div class="tituloServicios">
            <h3>Todos Nuestros Servicios</h3>
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

  @endsection
{{-- Cuando sabemos que lo que vamos a mandar al yield() es contenido real html, estamos obligados a pasarlo de esta manera --}}
</body>

</html>
