{{-- Para usar la plantilla template.blade.php --}}
@extends('profileLayout')

{{-- Llenando de información los @yield() --}}
{{-- @section('bodyClass', 'class=bg-olive') --}}

@section('pageTitle', 'Perfil')
{{-- Como solo nos interesa mandar un string al yield, podemos pasar dicho string como 2do parámetro de la función @section() --}}

@section('profileContent')
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
@endsection
