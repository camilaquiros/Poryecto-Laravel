@extends('layouts.admin')
@section('pageTitle', 'Admin - Listado de subcategorias')
@section('content')
<h1>Subcategorias de Patitas</h1>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Nombre de subcategoria</th>
            <th scope="col">Productos asociados</th>
            <th scope="col">Opciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($subcategories as $subcategory)
        <tr>
            <td>{{$subcategory->name}}</td>
            @if($subcategory->products())
            <td><a href="/administration/products/subcategory/{{$subcategory->id}}">Listado de productos</a></td>
            @else
            <td>No tiene productos relacionados</td>
            @endif
            <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="/administration/subcategories/{{$subcategory->id}}" class="btn btn-info">Editar</a>
                    <a href="/administration/subcategories/delete/{{$subcategory->id}}" class="btn btn-dark">Eliminar</a>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
