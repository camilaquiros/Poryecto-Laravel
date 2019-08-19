{{-- Para usar la plantilla template.blade.php --}}
@extends('template')

{{-- Llenando de información los @yield() --}}
{{-- @section('bodyClass', 'class=bg-olive') --}}

@section('pageTitle', 'Productos')
{{-- Como solo nos interesa mandar un string al yield, podemos pasar dicho string como 2do parámetro de la función @section() --}}

@section('mainContent')


<div class="containerProductos">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Perro</a>
        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Gato</a>
        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Relleno</a>
        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
    </div>
    <!-- PRODUCTOS -->
    <section class="productosLista">
            @foreach ($products as $product)
            <div class="productCard card-deck">
                <a class="imagenLista mt-1" href="{{route('show', $product->id)}}"><img class="card-img-top" src="/img/Productos/{{ $product->image }}"></a>
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
