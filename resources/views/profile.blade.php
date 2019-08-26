{{-- Para usar la plantilla template.blade.php --}}
@extends('profileLayout')

{{-- Llenando de información los @yield() --}}
{{-- @section('bodyClass', 'class=bg-olive') --}}

@section('pageTitle', 'Perfil')
{{-- Como solo nos interesa mandar un string al yield, podemos pasar dicho string como 2do parámetro de la función @section() --}}

@section('mainContent')
<div class="containerPerfil">


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
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#persInfo" role="tab" aria-controls="persInfo" aria-selected="true">Informacion Personal <i class="fas fa-user-check"></i></a>
  </li>
  <li class="nav-item barra">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#address" role="tab" aria-controls="address" aria-selected="false">Direcciones  <i class="fas fa-map-marker-alt"></i></a>
  </li>
  <li class="nav-item barra">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#favorites" role="tab" aria-controls="favorites" aria-selected="false">Favoritos <i class="fas fa-star"></i></a>
  </li>
</ul>


<div class="tab-content contenido" id="myTabContent">
  <div class="tab-pane fade show active showUserInformationBox" id="persInfo" role="tabpanel" aria-labelledby="home-tab">
    <h2>Informacion Personal</h2>
    <hr>
    <div class="personalInformation">
      <div class="">
        <label> Tu nombre</label>
        <input type="text" name="" value="{{ Auth::user()->full_name }}">
      </div>
      <div class="">
        <label> Nombre de usuario </label>
        <input type="text" name="" value="{{ Auth::user()->username }}">
      </div>
      <div class="">
        <label> Pais de nacimiento</label>
        <input type="text" name="" value="{{ Auth::user()->country}}">
      </div>
      <div class="">
        <label> Provincia </label>
        <input type="text" name="" value="{{ Auth::user()->state }}">
      </div>
      <div class="">
        <label> E-mail </label>
        <input type="text" name="" value="{{ Auth::user()->email }}">
      </div>
      <div class="">
        <label> Dirección de envio </label>
        <input type="text" name="" value="{{ Auth::user()->shipping_address }}">
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


  <div class="tab-pane fade showUserInformationBox" id="address" role="tabpanel" aria-labelledby="profile-tab">
  <div class="personalInformation">
    <div class="">
      <label> E-mail </label>
      <input type="text" name="" value="{{ Auth::user()->email }}">
    </div>
    <div class="">
      <label> Dirección de envio </label>
      <input type="text" name="" value="{{ Auth::user()->shipping_address }}">
    </div>
    <div class="">
      <label> Telefono personal </label>
      <input type="text" name="" value=2345678>
    </div>
  </div>
    </div>



  <div class="tab-pane fade" id="favorites" role="tabpanel" aria-labelledby="contact-tab">...</div>
</div>

</div>

@endsection
