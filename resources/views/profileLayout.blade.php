{{-- Para usar la plantilla template.blade.php --}}
@extends('template')

{{-- Llenando de información los @yield() --}}
{{-- @section('bodyClass', 'class=bg-olive') --}}

@section('pageTitle', 'Perfil')
{{-- Como solo nos interesa mandar un string al yield, podemos pasar dicho string como 2do parámetro de la función @section() --}}

@section('mainContent')

<div class="profileBox">

  <div class="dataImage">
    <img src="/storage/Avatars/{{ Auth::user()->avatar }}" alt="Avatar Seleccionado">
  </div>
  <div class="dataTitle">
    <h2>Hola, {{ Auth::user()->full_name }}.</h2>
  </div>
</div>
<ul class="nav nav-tabs listMenuProfile" id="myTab" role="tablist">
  <li class="nav-item barra">
    <a href="/profile/{{Auth::user()->id}}">Informacion Personal <br> <i class="fas fa-user-check"></i></a>
  </li>
  <li>
    <a href="/profile/edit">
      Editar Perfil <br> <i class="fas fa-edit"></i></a>
    </a>
  </li>
  <li>
    <a href="/profile/favorites">Favoritos <br> <i class="fas fa-star"></i></a>
  </li>
  <li>
    <a href="/profile/pets"><i class="fas fa-cat"></i> Tus mascotas <i class="fas fa-dog fa-flip-horizontal"></i></a>
  </li>
</ul>

<div class="showUserInformationBox">
  <div class="content-profile">
    @yield('profileContent')
  </div>

</div>

<script src="js/jquery.min.js"></script>
<script src="js/register.js" ></script>

@endsection
