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
<ul class="listMenuProfile">
  <li href=#persInfo >Informacion Personal <br> <i class="fas fa-user-check"></i></li>
  <li href=#address>Direcciones <br> <i class="fas fa-map-marker-alt"></i></li>
  <li >Favoritos <br> <i class="fas fa-star"></i></li>
</ul>

{{--<div class="showUserInformationBox">
  <h2 id ='persInfo'>Informacion Personal</h2>
  <hr>
  <div class="personalInformation">
    <div class="">
      <label> Tu nombre</label>
      <input type="text" name="" value={{ Auth::user()->full_name }}>
    </div>
    <div class="">
      <label> Nombre de usuario </label>
      <input type="text" name="" value={{ Auth::user()->username }}>
    </div>
    <div class="">
      <label> Telefono personal </label>
      <input type="text" name="" value={{ Auth::user()->shippingAdress }}>
    </div>
    <div class="editProfile">
      <span><a class="" href="#">EDITAR</a></span>
    </div>
  </div>
</div>

<div class="showUserInformationBox">
  <div class="personalInformation">
  <h2 id ='address'>Direcciones</h2>
<div class="">
  <label> E-mail </label>
  <input type="text" name="" value={{ Auth::user()->email }}>
</div>
<div class="">
  <label> Dirección de envio </label>
  <input type="text" name="" value={{ Auth::user()->shippingAdress }}>
</div>
<div class="editProfile">
  <span><a class="" href="#">EDITAR</a></span>
</div>
</div>
</div>

<div class="showUserInformationBox">
  <div class="personalInformation">
  <h2 id ='favourites'>Favoritos</h2>
<div class="">
</div>
<div class="editProfile">
  <span><a class="" href="#">EDITAR</a></span>
</div>
</div>
</div>--}}
<div class="showUserInformationBox">
  <h2>Informacion Personal</h2>
  <hr>
  <div class="personalInformation">
    <div class="">
      <label> Tu nombre</label>
      <input type="text" name="" value={{ Auth::user()->full_name }}>
    </div>
    <div class="">
      <label> Nombre de usuario </label>
      <input type="text" name="" value={{ Auth::user()->username }}>
    </div>
    <div class="">
      <label> Pais de nacimiento</label>
      <input type="text" name="" value={{ Auth::user()->country}}>
    </div>
    <div class="">
      <label> Provincia </label>
      <input type="text" name="" value={{ Auth::user()->state }}>
    </div>
    <div class="">
      <label> E-mail </label>
      <input type="text" name="" value={{ Auth::user()->email }}>
    </div>
    <div class="">
      <label> Dirección de envio </label>
      <input type="text" name="" value={{ Auth::user()->shipping_address }}>
    </div>
    <div class="">
      <label> Telefono personal </label>
      <input type="text" name="" value=2345678>
    </div>
    <div class="editProfile">
      <span><a class="" href="{{ route("editUserProfile", Auth::user()->id) }}">EDITAR</a></span>
    </div>
  </div>
</div>

@endsection
