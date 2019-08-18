{{-- Para usar la plantilla template.blade.php --}}
@extends('template')

{{-- Llenando de información los @yield() --}}
{{-- @section('bodyClass', 'class=bg-olive') --}}

@section('pageTitle', 'Perfil')
{{-- Como solo nos interesa mandar un string al yield, podemos pasar dicho string como 2do parámetro de la función @section() --}}

@section('mainContent')

<div class="profileBox">

  <div class="dataImage">
    <img src="{{ Auth::user()->avatar }}" alt="Avatar Seleccionado">
  </div>
  <div class="dataTitle">
    <h2>Hola, {{ Auth::user()->full_name }}.</h2>
  </div>
</div>
<ul class="listMenuProfile">
  <li>Informacion Personal <br> <i class="fas fa-user-check"></i></li>
  <li>Direcciones de envio <br> <i class="fas fa-map-marker-alt"></i></li>
  <li>Favoritos <br> <i class="fas fa-star"></i></li>
  <li>Alertas <br> <i class="fas fa-exclamation"></i></li>
</ul>

<div class="showUserInformationBox">
  <div class="personalInformation">
    <h2>Informacion Personal</h2>
    <hr>
    <p>Nombre : {{ Auth::user()->full_name }}</p>
    <p>Usuario : {{ Auth::user()->userName }}</p>
    <p>Pais : {{ Auth::user()->country }}</p>
    <p>Provincia : {{ Auth::user()->state }}</p>
    <p>Email : {{ Auth::user()->email }}</p>
  </div>
</div>
@endsection
