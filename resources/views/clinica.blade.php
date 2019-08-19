{{-- Para usar la plantilla template.blade.php --}}
@extends('template')

{{-- Llenando de información los @yield() --}}
{{-- @section('bodyClass', 'class=bg-olive') --}}

@section('pageTitle', 'Clinica')
{{-- Como solo nos interesa mandar un string al yield, podemos pasar dicho string como 2do parámetro de la función @section() --}}

@section('mainContent')

  <div class="containerIndex">

        <!-- SERVICIOS -->
        <section class="nuestrosServicios">
          <div class="tituloServicios">
            <h3>Nuestros Servicios</h3>
          </div>

          <div class="seccionClinica">
            <div class="servicioCard">
              <div class="content">
                <h3>Clinica Veterinaria</h3>
                <p>Muchos padres de mascotas creen que, si su perro o gato come bien y se ve saludable,
                  no hay necesidad de realizar análisis para verificar lo que sucede en su interior</p>
                <p>Al igual que los seres humanos, las mascotas deben tener por lo menos chequeos de bienestar anuales,
                  incluyendo pruebas de diagnóstico, para evaluar la función de los órganos y otros parámetros relacionados con la salud</p>
                <p>Los típicos exámenes de diagnóstico veterinario incluyen exámenes sanguíneos, análisis de orina y exámenes fecales,
                  además de pruebas adicionales, en función de dónde vive la mascota y su exposición a riesgos</p>
                  <p>Tener un enfoque proactivo en el cuidado de la salud de tu mascota podría ayudar a identificar y abordar posibles problemas de salud, antes de que evolucionen y se conviertan en enfermedades completamente desarrolladas</p>
              </div>
            </div>
            <div class="servicioCard" id="servicio2">
              <div class="content">
                <h3>Peluqueria Canina</h3>
                <p>Nuestra empresa se dedica a encabellecer su mascota y también a mantenerla higiénica.
                  Realizamos cortes con maquina o tijera, desenredado, baños antiparasitarios,
                  baños antisépticos, corte de uñas, limpieza de oídos limpieza de dientes.</p>
              </div>
            </div>
            <div class="servicioCard" id="servicio3">
              <div class="content">
                <h3>Estudios</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
            <div class="servicioCard" id="servicio4">
              <div class="content">
                <h3>Entrenamiento personal</h3>
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
