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
      @foreach ($products as $product)
      <div class="lista">
        <a class="imagenLista" href="{{route('show', $product->id)}}"><img src="/img/Productos/{{ $product->image }}"></a>
        <div class="ratingTotal">
          <!-- RATING -->
            @for($i = 1; $i<=$product["rating"]; $i++)
            <i class="fas fa-paw"></i>
            @endfor
        </div>
        <!-- REDIRECCION A DETALLES DE PRODUCTO -->
        <a class="titulo" href="{{route('show', $product->id)}}"> {{ $product->title }} </a>
        <p>${{$product->price}}</p>
      </div>
      @endforeach
    </section>
  </div>
@endsection
