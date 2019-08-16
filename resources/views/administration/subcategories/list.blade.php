@extends('layouts.admin')
@section('pageTitle', 'Admin - Listado de subcategorias')
@section('content')
<h1>Subcategorias de Patitas</h1>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Nombre de subcategoria</th>
      <th scope="col">Productos asociados</th>
      <th scope="col">Servicios asociados</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($subcategories as $subcategory)
    <tr>
      <td>{{$subcategory->name}}</td>
      <td>Listado productos</td>
      <td>Listado servicios</td>
      <td><a href="/administration/subcategories/{{$subcategory->id}}">Editar</a> <a href="/administration/subcategories/delete/{{$subcategory->id}}">Eliminar</a> </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
