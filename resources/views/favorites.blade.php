{{-- Para usar la plantilla template.blade.php --}}
@extends('template')

{{-- Llenando de información los @yield() --}}
{{-- @section('bodyClass', 'class=bg-olive') --}}

@section('pageTitle', 'Inicio')
{{-- Como solo nos interesa mandar un string al yield, podemos pasar dicho string como 2do parámetro de la función @section() --}}

@section('mainContent')


@if (Auth::user()->favorite->count() )
@foreach ($favorites as $favorite)
{{$favorite->product->title}}
@endforeach
@endif


@endsection
