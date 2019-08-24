@extends('template')
@section('pageTitle', 'Productos')
@section('mainContent')


<div class="containerProductos">
  <div class="">
    <img src="/img/bannerAlimentoPerro.jpg" alt="">
  </div>
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
    </div>
    <!-- PRODUCTOS -->
    <section class="productosLista">
            @foreach ($products as $product)
            <div class="productCard card-deck lista">
                <a class="imagenLista mt-1" href="{{route('show', $product->id)}}"><img class="card-img-top" src="/storage/productos/{{ $product->image }}"></a>
                <div class="productosListaInfo">
                  <div class="ratingTotal">
                      @for($i = 1; $i<=$product->rating; $i++) <i class="fas fa-paw"></i> @endfor
                  </div>
                  <div class="card-body text-center">
                      <h5 class="card-title titleCard"><a class="titulo" href="/{{route('show', $product->id)}}"> {{ $product->title }} </a></h5>
                      <p class="card-text priceCard">$ {{$product->price}}</p>
                  </div>

                  <div class="card-footer text-center">
                      <input type="hidden" id="product_id" value="" class="btn btn-patitas" value="{{$product->id}}"><a href="#" id="agregar-favoritos">Agregar a favoritos</a>
                    </div>
                  <div class="card-footer text-center cardFooter">
                      <button type="submit" class="btn btn-patitas" value="{{$product->id}}">Añadir al carrito <i class="fas fa-shopping-basket"></i></button>
                    </div>
                  </div>
                </div>
            @endforeach
            </div>
    </section>
@endsection

<script type="text/javascript" src="/js/jquery.min.js"></script>
<script type="text/javascript" src=/js/products.js></script>