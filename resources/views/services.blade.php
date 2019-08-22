{{-- Para usar la plantilla template.blade.php --}}
@extends('template')

{{-- Llenando de información los @yield() --}}
{{-- @section('bodyClass', 'class=bg-olive') --}}

@section('pageTitle', 'Servicios')
{{-- Como solo nos interesa mandar un string al yield, podemos pasar dicho string como 2do parámetro de la función @section() --}}

@section('mainContent')

  <div class="containerServicios">

        <!-- SERVICIOS -->
          <div class="tituloServicios">
            <h3>Todos Nuestros Servicios</h3>
          </div>
            <div class="servicios">
              @foreach ($services as $service)
              <div class="servicio" id='{{$service->name}}'>
              <div class="servicioImagen">
                <!-- TRAIGO IMAGEN -->
                <img src="/storage/Servicios/{{ $service->image }}" alt="imagenServicios">
              </div>
              <div class="servicioTexto">
                  <h3>{{$service->name}}</h3>
                  <p>{{$service->longDescription}}</p>
              </div>
              </div>
              @endforeach
            </div>
      </div>

  @endsection
{{-- Cuando sabemos que lo que vamos a mandar al yield() es contenido real html, estamos obligados a pasarlo de esta manera --}}
</body>

</html>
