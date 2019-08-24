{{-- Para usar la plantilla template.blade.php --}}
@extends('template')

{{-- Llenando de información los @yield() --}}
{{-- @section('bodyClass', 'class=bg-olive') --}}

@section('pageTitle', $productToFind->title)
{{-- Como solo nos interesa mandar un string al yield, podemos pasar dicho string como 2do parámetro de la función @section() --}}

@section('mainContent')

    <!-- TRAIGO INFORMACION DE PRODUCTOS -->
    <section class="productosDetalle">
      <div class= "img-magnifier-container">
        <!-- TRAIGO IMAGEN -->
        <img src="/storage/productos/{{ $productToFind->image }}" alt="dasdad" class = "imagen-producto" class = "zoom" data-magnify-src="/storage/productos/{{ $productToFind->image }}">
      </div>
      <!-- TRAIGO DATOS -->
      <div class="detalles">
        <h2 class="tituloProducto">{{ $productToFind->title }}</h2>
        <!-- TRAIGO RATING -->
        <div class="ratingTotalDetalle">
            @for ($i = 1; $i <= $productToFind->rating; $i++)
            <i class="fas fa-paw"></i>
            @endfor
        </div>
        <p>{{ $productToFind->description }}</p>
        <h4>$ {{ $productToFind->price }}</h4>
      </div>
    </section>

@endsection

<script src="/js/detailproducts.js"></script>
