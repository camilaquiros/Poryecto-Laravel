{{-- Para usar la plantilla template.blade.php --}}
@extends('template')

{{-- Llenando de información los @yield() --}}
{{-- @section('bodyClass', 'class=bg-olive') --}}

@section('pageTitle', '$productToFind->title')
{{-- Como solo nos interesa mandar un string al yield, podemos pasar dicho string como 2do parámetro de la función @section() --}}

@section('mainContent')

    <!-- TRAIGO INFORMACION DE PRODUCTOS -->
    @if($_GET["id"] <= count($productos) )
    <section class="productosDetalle">
      <div class="imagen">
        <!-- TRAIGO IMAGEN -->
        <img src="/storage/images/{{ $productToFind->image }}" alt="dasdad">
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
          <div class="noRating">
            @for ($i = 1; $i <= $productToFind->nonrating; $i++)
            <i class="fas fa-paw"></i>
            @endfor
          </div>
        </div>
        <p><?= $productos[$id]["detalle"] ?></p>
        <h4>$ <?php echo $productos[$id]["precio"]; ?></h4>
      </div>
    </section>
    <!-- SI NO EXISTE PRODUCTO -->
    @else
    <div class="error">
      <img src="img/404.png" alt="">
      <h1>OH NO!</h1>
      <h2>No encontramos tu producto<i class="fas fa-heart-broken"></i></h2>
      <a href="_index.html">VOLVER AL HOME</a>
    </div>
    @endif
  </div>
@endsection
