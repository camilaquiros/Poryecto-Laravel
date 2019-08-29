
@extends('template')

@section('pageTitle', 'Productos')

@section('mainContent')

<div class="containerProductos">
    <div class="leftNav nav flex-row nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <ul>
        <li class="list-group-item d-flex justify-content-between align-items-center">
          <select class="custom-select" id="selectOrder">
            <option>Ordenar</option>
            <option value="TITLE_ASC">A-Z</option>
            <option value="TITLE_DESC">Z-A</option>
            <option value="PRICE_DESC">Precio menor a mayor</option>
            <option value="PRICE_ASC">Precio mayor a menor</option>
            <option value="RATING_ASC">Rating menor a mayor</option>
            <option value="RATING_DESC">Rating mayor a menor</option>
            <option value="CREATED_AT_ASC">Lo más viejo</option>
            <option value="CREATED_AT_DESC">Lo más reciente</option>
          </select>
        </li>
      </ul>
        @if(isset($currentCategory))
            <div>
              <a href="/products/category/{{$currentCategory->id}}" class="d-flex justify-content-between align-items-center">{{$currentCategory->name}} <i class="fas fa-chevron-right"></i></a>
                <ul class="list-group list-group-flush">
                  @foreach ($subcategories as $subcategory)
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                  <a class="dropdown-item" href="/products/category/{{$currentCategory->id}}/{{$subcategory->id}}">{{$subcategory->name}}</a></li>
                  @endforeach
                </ul>
            </div>
        @else
          @foreach ($categories as $category)
            <div>
              <a href="/products/category/{{$category->id}}" class="d-flex justify-content-between align-items-center">{{$category->name}} <i class="fas fa-chevron-right"></i></a>
                <ul class="list-group list-group-flush">
                  @foreach ($subcategories as $subcategory)
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                  <a class="dropdown-item" href="/products/category/{{$category->id}}/{{$subcategory->id}}">{{$subcategory->name}}</a></li>
                  @endforeach
                </ul>
            </div>
          @endforeach
        @endif
      </div>
    <!-- PRODUCTOS -->
    <section class="productosLista">
            @foreach ($products as $product)
            <div class="productCard card-deck lista">
              <div class="imagenLista">
                <a class="mt-1" href="/products/{{$product->id}}"><img class="card-img-top" src="/storage/productos/{{ $product->image }}"></a>
              </div>
              @if($product->offer == 1)
                <p class="oferta">-30%</p>
              @endif

              <div class="favoritos">
              @auth
                <form action="{{route('products.store')}}" id="contact_form" method="post">
              {{csrf_field()}}
              <input name="user_id" type="hidden" value="{{Auth::user()->id}}">
              <input name="product_id" type="hidden" value="{{$product->id}}">
              <button type="submit" name="favorito" class="favorito">
                <i class="fas fa-heart"></i>
              </button>
              </form>
                <form action="{{action('FavoriteController@destroy', ['id' => Auth::user()->id])}}" id="contact_form" method="post">
              {{csrf_field()}}
              <input name="user_id" type="hidden" value="{{Auth::user()->id}}">
              <input name="product_id" type="hidden" value="{{$product->id}}">
              <button type="submit" name="favorito" class="favorito">
                <i class="far fa-heart"></i>
              </button>
              </form>
              @endauth
              </div>

                <div class="productosListaInfo">
                  <div class="ratingTotal">
                      @for($i = 1; $i<=$product->rating; $i++) <i class="fas fa-paw"></i> @endfor
                  </div>
                  <div class="card-body text-center">
                      <h5 class="card-title titleCard"><a class="titulo" href="/products/{{$product->id}}"> {{ $product->title }} </a></h5>
                      <p class="card-text priceCard">$ {{$product->price}}</p>
                  </div>


                  <div class="card-footer text-center cardFooter">
                    <p class="btn-holder"><a href="/addToCart/{{$product->id}}" class="btn btn-warning btn-block text-center" role="button">Añadir al carrito <i class="fas fa-shopping-basket"></i></a></p>
                    {{--<button type="submit" class="btn btn-patitas" value="{{$product->id}}">Añadir al carrito <i class="fas fa-shopping-basket"></i></button>--}}
                  </div>
                  </div>
            </div>
            @endforeach
    </section>
  </div>
@endsection

<script type="text/javascript" src="/js/jquery.min.js"></script>
<script type="text/javascript" src=/js/products.js></script>
