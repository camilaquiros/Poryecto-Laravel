@extends('layouts.admin')
@section('content')
<h1>Productos</h1>
@foreach ($products as $product)
  <p>{{$product->title}}</p>
  <p>{{$product->price}}</p>
@endforeach
@endsection
