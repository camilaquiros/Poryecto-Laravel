@extends('layouts.admin')
@section('pageTitle', 'Listado de mis servicios')
@section('content')
<h1>Servicios de Patitas</h1>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Nombre del servicio</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($services as $service)
    <tr>
      <td>{{$service->name}}</td>
      <td>{{$service->description}}</td>
      <td><a href="/administration/services/{{$service->id}}">Editar</a> <a href="/administration/services/delete/{{$service->id}}">Eliminar</a> </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
