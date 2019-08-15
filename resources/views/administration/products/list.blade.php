@extends('layouts.admin')
@section('pageTitle', 'Admin - Listado de productos')
@section('content')
<h1>Productos</h1>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Producto</th>
      <th scope="col">Precio</th>
      <th scope="col">Categoria</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($products as $product)
    <tr>
      <td>{{$product->title}}</td>
      <td>{{$product->price}}</td>
      <td>{{$product->category_id}}</td>
      <td><a href="/administration/products/{{$product->id}}">Editar</a> <a href="/administration/products/delete/{{$product->id}}">Eliminar</a> </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
