@extends('layouts.admin')
@section('pageTitle', 'Admin - Listado de categorias')
@section('content')
<h1>Categorias de Patitas</h1>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Nombre de categoria</th>
            <th scope="col">Productos asociados</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
        <tr>
            <td>{{$category->name}}</td>
            @if($category->products())
            <td><a href="/administration/products/category/{{$category->id}}">Listado de productos</a></td>
            @else
            <td>No tiene productos relacionados</td>
            @endif
            <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="/administration/categories/{{$category->id}}" class="btn btn-info">Editar</a>
                    <a href="/administration/categories/delete/{{$category->id}}" class="btn btn-dark">Eliminar</a>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
