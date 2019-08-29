@extends('template')

@section('pageTitle', 'Inicio')

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
                            <img src="img/Slider-2.png" class="d-block w-100" alt="slider">
                            <div class="carousel-caption d-none d-md-block">
                                <p>¡OFRECEMOS EL MEJOR SERVICIO PARA TUS MASCOTAS!</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/Slider-1.png" class="d-block w-100" alt="peluqueria">
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
            <div class="contenedor-productosgato" id="catProducts">
                <span class="descripcion-carta centrado">Hacé feliz a tu gato</span>
                <span class="mas-Productos"><a href="/products/category/2">Ver productos</a></span>
            </div>
            <div class="contenedor-productosgato" id="newsProducts">
                <span class="descripcion-carta centrado">¡Recién llegados!</span>
                <span class="mas-Productos"><a href="/newArrivals">Ver productos</a></span>
            </div>
            <div class="contenedor-productosgato" id="dogProducts">
                <span class="descripcion-carta centrado">Productos para tu perro</span>
                <span class="mas-Productos"><a href="/products/category/1">Ver productos</a></span>
            </div>
        </section>

        <!-- HEADER PRODUCTOS NOVEDADES -->
        <section class="seccion-novedades">
            <h4>Productos Destacados</h4>

            <!-- PRODUCTOS NOVEDADES -->


            {{-- <div class="cardsProduct">
          <div class="nextPrevFlechas"><i class="fas fa-arrow-circle-left flechas"></i></div>
          @foreach ($productsIndex as $product)
          <article class="oneproduct-card">
            <img src="/storage/productos/{{$product->image}}" alt="Card image cap">
            <div class="oneproduct-card-body">
                <p class="card-title">{{$product->title}}</p>
                <p class="card-text">{{$product->price}}</p>
                <a href="/products/{{$product->id)}}" class="mas-productosNovedades">Ver Ahora <i class="fas fa-angle-double-right"></i></a>
            </div>
            </article>
            @endforeach
    </div>
    </section> --}}


    <!-- carrousel celular-->

    <div class="containerCarouselCelular cardsProduct">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @foreach ($productsIndexCelu as $key=>$product)
                <div class="carousel-item {{$key == 0 ? 'active' : '' }} carruselProductos">
                    <img class="d-block w-100" src="/storage/productos/{{$product->image}}" alt="{{$product->title}}">
                    <p class="card-title">{{$product->title}}</p>
                    <p class="card-text">${{$product->price}}</p>
                    <a href="/products/{{$product->id}}" class="mas-productosNovedades">Ver Ahora <i class="fas fa-angle-double-right"></i></a>
                </div>
                @endforeach
            </div>
            <a class="carousel-control-prev flecha" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next flecha" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- carrousel tablet y desktop-->

    <div class="containerCarouselDesktop">

        <div class="carousel slide" data-ride="carousel" id="multi_item">

            <div class="carousel-inner">

                <div class="carousel-item active">
                    <div class="row">
                        @foreach ($productsIndex as $product)
                        <div class="col-sm oneproduct-card-body"><img class="d-block w-100" src="/storage/productos/{{$product->image}}" alt="{{$product->title}}">
                            <p class="card-title">{{$product->title}}</p>
                            <p class="card-text">${{$product->price}}</p>
                            <a href="/products/{{$product->id}}" class="mas-productosNovedades">Ver Ahora <i class="fas fa-angle-double-right"></i></a>
                        </div>
                        @endforeach


                    </div>

                </div>
                <div class="carousel-item">
                    <div class="row">
                        @foreach ($productsIndex2 as $product)
                        <div class="col-sm oneproduct-card-body"><img class="d-block w-100" src="/storage/productos/{{$product->image}}" alt="{{$product->title}}">
                            <p class="card-title">{{$product->title}}</p>
                            <p class="card-text">{{$product->price}}</p>
                            <a href="/products/{{$product->id}}" class="mas-productosNovedades">Ver Ahora <i class="fas fa-angle-double-right"></i></a>
                        </div>
                        @endforeach
                    </div>

                </div>

            </div>

            <a class="carousel-control-prev" href="#multi_item" role="button" data-slide="prev">
                <div class="flecha" aria-hidden="true"><i class="fas fa-arrow-circle-left"></i></div>
                <div class="sr-only">Previous</div>
            </a>
            <a class="carousel-control-next" href="#multi_item" role="button" data-slide="next">
                <div class="flecha" aria-hidden="true"><i class="fas fa-arrow-circle-right"></i></div>
                <div class="sr-only">Next</div>
            </a>
        </div>

    </div>



    <!-- SERVICIOS -->
    <section class="nuestrosServicios">
        <div class="tituloServicios">
            <h3>Nuestros Servicios</h3>
            <a href="/services" class="verTodosServicios">Ver todos</a>
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
</div>
</div>
@endsection
