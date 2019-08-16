{{-- Para usar la plantilla template.blade.php --}}
@extends('template')

{{-- Llenando de información los @yield() --}}
{{-- @section('bodyClass', 'class=bg-olive') --}}

@section('pageTitle', 'Productos')
{{-- Como solo nos interesa mandar un string al yield, podemos pasar dicho string como 2do parámetro de la función @section() --}}

@section('mainContent')

  <div class="containerProductos">
    <!-- PRODUCTOS -->
    <section class="productosLista">
      @foreach($products as $product)
      <div class="lista">
        <a class="imagenLista" href="/products/{{ $product['id'] }}"><img src="{{ $product['imagen'] }}"></a>
        <div class="ratingTotal">
          <!-- RATING -->
          <div class="rating">
            @for ($i = 1; $i <= $product["rating"]; $i++)
            <i class="fas fa-paw"></i>
            @endfor
          </div>
          <div class="noRating">
            @for ($i = 1; $i <= $product["noRating"]; $i++)
            <i class="fas fa-paw"></i>
            @endfor
          </div>
        </div>
        <!-- REDIRECCION A DETALLES DE PRODUCTO -->
        <a class="titulo" href="/products/{{ $product['id'] }}"> {{ $product['nombre'] }} </a>
        <p>${{$product["precio"]}}</p>
      </div>
      @endforeach
    </section>
  </div>
@endsection
