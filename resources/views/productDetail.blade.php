@extends('template')

@section('pageTitle', 'Inicio')

@section('mainContent')
<!-- TRAIGO INFORMACION DE PRODUCTOS -->
<section class="productosDetalle">
    <div class="img-magnifier-container">
        <!-- TRAIGO IMAGEN -->
        <img src="/storage/productos/{{ $productToFind->image }}" alt="dasdad" class="imagen-producto" class="zoom" data-magnify-src="/storage/productos/{{ $productToFind->image }}">
    </div>
    <!-- TRAIGO DATOS -->
    <div class="detalles">
        <h2 class="tituloProducto">{{ $productToFind->title }}</h2>
        <!-- TRAIGO RATING -->
        <div class="ratingTotalDetalle">
            @for ($i = 1; $i <= $productToFind->rating; $i++)
                <i class="fas fa-paw"></i>
                @endfor
        </div>
        <p>{{ $productToFind->description }}</p>
        <h4>$ {{ $productToFind->price }}</h4>
        <div class="carrito">
            <p class="btn-holder"><a href="/addToCart/{{$productToFind->id}}" class="btn btn-warning btn-block text-center" role="button">Añadir al carrito <i class="fas fa-shopping-basket"></i></a></p>
        </div>
    </div>
</section>

@endsection
