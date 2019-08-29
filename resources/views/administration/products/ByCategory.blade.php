@extends('layouts.admin')
@section('pageTitle', 'Admin - Listado de productos')
@section('content')
<table class="table table-striped">
    <thead>
        <h1>Productos de {{$category->name}}</h1>
        <tr>
            <th scope="col">Producto</th>
            <th scope="col">Precio</th>
            <th scope="col">Subcategoria</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody class="text-center">
        @foreach ($products as $product)
        <tr>
            <td>{{$product->title}}</td>
            <td>$ {{$product->price}}</td>

            @if ($product->subcategory)
            <td>{{ $product->subcategory->name }} </td>
            @else
            <td>sin subcategoria</td>
            @endif
            <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="{{ route("editProduct", $product->id) }}" class="btn btn-info">Editar</a>
                    <a href="{{ route("deleteProduct", $product->id) }}" class="btn btn-dark">Eliminar</a>
            </td>
            </div>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
