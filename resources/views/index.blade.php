{{-- Para usar la plantilla template.blade.php --}}
@extends('template')

{{-- Llenando de información los @yield() --}}
{{-- @section('bodyClass', 'class=bg-olive') --}}

@section('pageTitle', 'Inicio')
{{-- Como solo nos interesa mandar un string al yield, podemos pasar dicho string como 2do parámetro de la función @section() --}}

@section('mainContent')

  <div class="containerIndex">
    <div class="notusing">

      <!-- SLIDER -->
      <section class="slider">
        <div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/banner4.jpg" class="d-block w-100" alt="slider">
        <div class="carousel-caption d-none d-md-block">
          <!-- <h5>First slide label</h5> -->
          <p>¡BRINDAMOS EL CUIDADO Y LOS MEJORES PRODUCTOS QUE TU MASCOTA MERECE!</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/banner3.jpg" class="d-block w-100" alt="slider">
        <div class="carousel-caption d-none d-md-block">
          <p>¡OFRECEMOS EL MEJOR SERVICIO PARA TUS MASCOTAS!"</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/banner1.jpg" class="d-block w-100" alt="peluqueria">
        <div class="carousel-caption d-none d-md-block">
        <p>¡LOS CUIDAMOS COMO SI ESTUVIERAN EN SU CASA!</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
      </section>

      <!-- CARTAS PRESENTACION -->
      <section class="cartas-presentacion">
        <div class="contenedor-productosgato">
          <img src="img/gatitoo.jpeg" alt="imagen de gato">
          <span class="descripcion-carta">Hacé feliz a tu gato</span>
          <span class="mas-Productos"><a href="#">Ver productos</a></span>
        </div>
        <div class="contenedor-productosgato">
          <img src="img/pañueloyellow.jpeg" alt="imagen de gato">
          <span class="descripcion-carta centrado">¡Recién llegados!</span>
          <span class="mas-Productos"><a href="#">Ver productos</a></span>
        </div>
        <div class="contenedor-productosgato">
          <img src="img/perrito.jpeg" alt="imagen de gato">
          <span class="descripcion-carta">Productos para tu perro</span>
          <span class="mas-Productos"><a href="#">Ver productos</a></span>
        </div>
      </section>

      <!-- HEADER PRODUCTOS NOVEDADES -->
      <section class="seccion-novedades">
        <div class="head-novedades">
          <h4>Productos Destacados</h4>
          <ul class="option-list">
            <li>PERROS</li>
            <li>GATOS</li>
          </ul>
        </div>

        <!-- PRODUCTOS NOVEDADES -->
        <div class="cardsProduct">
          <div class="nextPrevFlechas"><i class="fas fa-arrow-circle-left flechas"></i></div>
          <article class="oneproduct-card">
            <img src="img/Productos/colchon.jpg" alt="Card image cap">
            <div class="oneproduct-card-body">
              <p class="card-title">Colchon</p>
              <p class="card-text">$800</p>
              <a href="_producto_detalle.php?id=1" class="mas-productosNovedades">Ver Ahora <i class="fas fa-angle-double-right"></i></a>
            </div>
          </article>
          <!-- PRODUCTOS DESTACADOS -->
          <article class="oneproduct-card">
            <img src="img/Productos/collar_bandana.jpg" alt="Card image cap">
            <div class="oneproduct-card-body">
              <p class="card-title">Collar con pañuelo</p>
              <p class="card-text">$350</p>
              <a href="_producto_detalle.php?id=2" class="mas-productosNovedades">Ver Ahora <i class="fas fa-angle-double-right"></i></a>
            </div>
          </article>

          <article class="oneproduct-card" id="producto3">
            <img src="img/Productos/correa.jpg" alt="Card image cap">
            <div class="oneproduct-card-body">
              <p class="card-title">Correa</p>
              <p class="card-text">$950</p>
              <a href="_producto_detalle.php?id=3" class="mas-productosNovedades">Ver Ahora <i class="fas fa-angle-double-right"></i></a>
            </div>
          </article>

          <article class="oneproduct-card" id="producto4">
            <img src="img/Productos/cucha.jpg" alt="Card image cap">
            <div class="oneproduct-card-body">
              <p class="card-title">Cucha</p>
              <p class="card-text">$1750</p>
              <a href="_producto_detalle.php?id=4" class="mas-productosNovedades">Ver Ahora <i class="fas fa-angle-double-right"></i></a>
            </div>
          </article>
          <div class="nextPrevFlechas"><i class="fas fa-arrow-circle-right flechas"></i></div>
        </div>
        <!-- SERVICIOS -->
        <section class="nuestrosServicios">
          <div class="tituloServicios">
            <h3>Nuestros Servicios</h3>
            <a href="#" class="verTodosServicios">Ver todos</a>
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
