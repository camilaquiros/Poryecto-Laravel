@extends('layouts.admin')
@section('pageTitle', 'Admin - Listado de servicios')
@section('content')
<h1>Servicios de Patitas</h1>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Nombre del servicio</th>
            <th scope="col">Descripcion</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($services as $service)
        <tr>
            <td>{{$service->name}}</td>
            <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="/administration/services/{{$service->id}}" class="btn btn-info">Editar</a>
                    <a href="/administration/services/delete/{{$service->id}}" class="btn btn-dark">Eliminar</a>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
