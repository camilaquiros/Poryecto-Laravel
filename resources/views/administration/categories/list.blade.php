@extends('layouts.admin')
@section('pageTitle', 'Admin - Listado de categorias')
@section('content')
<h1>Categorias de Patitas</h1>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Nombre de categoria</th>
      <th scope="col">Productos asociados</th>
      <th scope="col">Servicios asociados</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($categories as $categorie)
    <tr>
      <td>{{$categorie->name}}</td>
      <td>Listado productos</td>
      <td>Listado servicios</td>
      <td><a href="/administration/categories/{{$categorie->id}}">Editar</a> <a href="/administration/categories/delete/{{$categorie->id}}">Eliminar</a> </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
