@extends('layouts.admin')
@section('pageTitle', 'Listado de mis productos')
@section('content')
<h1>Productos</h1>
@foreach ($products as $product)
  <p>{{$product->title}}</p>
  <p>{{$product->price}}</p>
  <img src="{{$product->image}}" alt="">
@endforeach
@endsection
