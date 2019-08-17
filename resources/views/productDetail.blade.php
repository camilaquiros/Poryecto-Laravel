{{-- Para usar la plantilla template.blade.php --}}
@extends('template')

{{-- Llenando de información los @yield() --}}
{{-- @section('bodyClass', 'class=bg-olive') --}}

@section('pageTitle', '$productToFind->title')
{{-- Como solo nos interesa mandar un string al yield, podemos pasar dicho string como 2do parámetro de la función @section() --}}

@section('mainContent')

    <!-- TRAIGO INFORMACION DE PRODUCTOS -->
    <section class="productosDetalle">
      <div class="imagen">
        <!-- TRAIGO IMAGEN -->
        <img src="{{ $productToFind->image }}" alt="dasdad">
      </div>
      <!-- TRAIGO DATOS -->
      <div class="detalles">
        <h2 class="tituloProducto">{{ $productToFind->title }}</h2>
        <!-- TRAIGO RATING -->
        <div class="ratingTotalDetalle">
          <div class="rating">
            @for ($i = 1; $i <= $productToFind->rating; $i++)
            <i class="fas fa-paw"></i>
            @endfor
          </div>
        </div>
        <p>{{ $productToFind->description }}</p>
        <h4>$ {{ $productToFind->price }}</h4>
      </div>
    </section>

@endsection
