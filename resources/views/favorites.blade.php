{{-- Para usar la plantilla template.blade.php --}}
@extends('profileLayout')

{{-- Llenando de información los @yield() --}}
{{-- @section('bodyClass', 'class=bg-olive') --}}

@section('pageTitle', 'Perfil')
{{-- Como solo nos interesa mandar un string al yield, podemos pasar dicho string como 2do parámetro de la función @section() --}}

@section('profileContent')

  <div class="favorites-profile">
    @if (Auth::user()->favorite->count() > 0)
    <section class="productosLista">
            @foreach ($favorites as $favorite)
            <div class="productCard card-deck lista">
                <a class="imagenLista mt-1" href="{{route('show', $favorite->product->id)}}"><img class="card-img-top" src="/storage/productos/{{ $favorite->product->image }}"></a>
                <div class="productosListaInfo">
                  <div class="ratingTotal">
                      @for($i = 1; $i<=$favorite->product->rating; $i++) <i class="fas fa-paw"></i> @endfor
                  </div>
                  <div class="card-body text-center">
                      <h5 class="card-title titleCard"><a class="titulo" href="/{{route('show', $favorite->product->id)}}"> {{ $favorite->product->title }} </a></h5>
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
