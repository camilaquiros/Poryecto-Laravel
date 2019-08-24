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
  <h2>Editar Perfil</h2>
  <hr>
  <div class="personalInformationEdit">
    <form method="post" action="/profile/edit">
      @csrf
			{{ method_field('put') }}

      <div class="form-group">
        <label for="full_name">Nombre</label>
        <input type="text" name="full_name" class="form-control" id="full_name" value={{ old('full_name', Auth::user()->full_name) }}>
      </div>
      <div class="form-group">
        <label for="username">Nombre de Usuario</label>
        <input type="text" name="username" class="form-control" id="username" value={{ Auth::user()->username }}>
      </div>
      <div class="form-group">
        <label > Pais de nacimiento</label>
        <select id="country-list" name="country" value= "{{old("country")}}" class="form-control  @error('country') is-invalid @enderror">
          <div class="invalid-feedback">
           <!-- Mensaje de error -->
          </div>

          <option value="">{{ Auth::user()->country }}</option>
          </select>
          @error('country')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
      </div>
      <div class="form-group">
        <label for="state"> Provincia </label>
        <input type="text" name="state" class="form-control" id="state" value={{ Auth::user()->state }}>
      </div>
      <div class="form-group">
        <label for="email"> E-mail </label>
        <input type="text" name="email" class="form-control" id="email" value={{ Auth::user()->email }}>
      </div>
      <div class="form-group">
        <label for="shipping_address"> Dirección de envio </label>
        <input type="text" name="shipping_address" class="form-control" id="shipping_address" value={{ Auth::user()->shipping_address }}>
      </div>
      <div class="form-group">
        <label for="phoneNumber"> Telefono personal </label>
        <input type="text" name="phoneNumber" class="form-control" id="phoneNumber" value=2345678>
      </div>

      <button type="submit" class="btn btn-success" class="updateProfile">GUARDAR CAMBIOS</button>
    </form>

  </div>
</div>
<script src="/js/register.js" ></script>
@endsection
