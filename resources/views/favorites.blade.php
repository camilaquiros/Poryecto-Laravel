{{-- Para usar la plantilla template.blade.php --}}
@extends('profileLayout')

{{-- Llenando de información los @yield() --}}
{{-- @section('bodyClass', 'class=bg-olive') --}}

@section('pageTitle', 'Perfil')
{{-- Como solo nos interesa mandar un string al yield, podemos pasar dicho string como 2do parámetro de la función @section() --}}

@section('profileContent')

<div class="favorites-profile">
  @if (Auth::user()->favorite->count() <= 0)
  <br>
  <br>

  <img src="img/error-favoritos.png" alt="no hay favoritos">
     @else (Auth::user()->favorite->count() > 0)
  <section class="productosLista">
          @foreach ($favorites as $favorite)
          <div class="productCard card-deck lista">
            <div class="imagenLista">
              <a class="mt-1" href="/products/{{$favorite->product->id}}"><img class="card-img-top" src="/storage/productos/{{ $favorite->product->image }}"></a>
            </div>
            @if($favorite->product->offer == 1)
              <p class="oferta">-30%</p>
            @endif

            <div class="favoritos">
            @auth
              <form action="{{action('FavoriteController@store')}}" id="contact_form" method="post">
            {{csrf_field()}}
            <input name="user_id" type="hidden" value="{{Auth::user()->id}}">
            <input name="product_id" type="hidden" value="{{$favorite->product->id}}">
            <button type="submit" name="favorito" class="favorito">
              <i class="fas fa-heart"></i>
            </button>
            </form>
            @endauth
            @auth
              <form action="{{action('FavoriteController@destroy', ['id' => $user->id])}}" id="contact_form" method="post">
            {{csrf_field()}}
            <input name="user_id" type="hidden" value="{{Auth::user()->id}}">
            <input name="product_id" type="hidden" value="{{$favorite->product->id}}">
            <button type="submit" name="favorito" class="favorito">
              <i class="far fa-heart"></i>
            </button>
            </form>
            @endauth
            </div>

              <div class="productosListaInfo">
                <div class="ratingTotal">
                    @for($i = 1; $i<=$favorite->product->rating; $i++) <i class="fas fa-paw"></i> @endfor
                </div>
                <div class="card-body text-center">
                    <h5 class="card-title titleCard"><a class="titulo" href="/products/{{$favorite->product->id}}"> {{ $favorite->product->title }} </a></h5>
                    <p class="card-text priceCard">$ {{$favorite->product->price}}</p>
                </div>


                <div class="card-footer text-center cardFooter">
                    <button type="submit" class="btn btn-patitas" value="{{$favorite->product->id}}">Añadir al carrito <i class="fas fa-shopping-basket"></i></button>
                </div>
                </div>
          </div>

          @endforeach
  </section>

  @endif
</div>
@endsection
