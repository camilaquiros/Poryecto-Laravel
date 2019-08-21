{{-- Para usar la plantilla template.blade.php --}}
@extends('template')

{{-- Llenando de información los @yield() --}}
{{-- @section('bodyClass', 'class=bg-olive') --}}

@section('pageTitle', 'Productos')
{{-- Como solo nos interesa mandar un string al yield, podemos pasar dicho string como 2do parámetro de la función @section() --}}

@section('mainContent')


<div class="containerProductos">
    <div class="leftNav nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <div class="">
        <a href="/dogs" class="d-flex justify-content-between align-items-center">Perros <i class="fas fa-chevron-right"></i></a>
          <ul class="list-group list-group-flush">
              <li class="list-group-item d-flex justify-content-between align-items-center">
              <a class="dropdown-item" href="/dogs/accesories">Accesorios</a></li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
              <a class="dropdown-item" href="/dogs/food">Alimentos</a></li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
              <a class="dropdown-item" href="/dogs/hygiene">Estetica e higiene</a></li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
              <a class="dropdown-item" href="/dogs/health">Salud</a></li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
              <a class="dropdown-item" href="/dogs/snacks">Snacks</a></li>

              <li class="list-group-item d-flex justify-content-between align-items-center">
                <select class="custom-select" id="selectOrder">
                  <option>Ordenar</option>
                  <option value="PRICE_DESC">Precio menor a mayor</option>
                  <option value="PRICE_ASC">Precio mayor a menor</option>
                  <option value="RATING_ASC">Rating menor a mayor</option>
                  <option value="RATING_DESC">Rating mayor a menor</option>
                </select>
              </li>
          </ul>
      </div>

          <div class="">
            <a href="/cats" class="d-flex justify-content-between align-items-center">Gatos <i class="fas fa-chevron-right"></i></a>
              <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                <a class="dropdown-item" href="/cats/accesories">Accesorios</a></li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                <a class="dropdown-item" href="/cats/food">Alimentos</a></li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                <a class="dropdown-item" href="/cats/hygiene">Estetica e higiene</a></li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                <a class="dropdown-item" href="/cats/health">Salud</a></li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                <a class="dropdown-item" href="/cats/snacks">Snacks</a></li>
              </ul>
          </div>
    </div>
    <!-- PRODUCTOS -->
    <section class="productosLista">
            @foreach ($products as $product)
            <div class="productCard card-deck lista">
                <a class="imagenLista mt-1" href="{{route('show', $product->id)}}"><img class="card-img-top" src="/storage/Productos/{{ $product->image }}"></a>
                <div class="productosListaInfo">
                  <div class="ratingTotal">
                      @for($i = 1; $i<=$product->rating; $i++) <i class="fas fa-paw"></i> @endfor
                  </div>
                  <div class="card-body text-center">
                      <h5 class="card-title"><a class="titulo" href="/{{route('show', $product->id)}}"> {{ $product->title }} </a></h5>
                      <p class="card-text priceCard">$ {{$product->price}}</p>
                  </div>
                  <div class="card-footer text-center">
                      <button type="submit" class="btn btn-patitas" value="{{$product->id}}">Añadir al carrito <i class="fas fa-shopping-basket"></i></button>
                  </div>
                </div>
            </div>
            @endforeach
    </section>
</div>
@endsection

<script type="text/javascript" src="/js/jquery.min.js"></script>
<script type="text/javascript" src=/js/products.js></script>
