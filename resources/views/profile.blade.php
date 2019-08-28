{{-- Para usar la plantilla template.blade.php --}}
@extends('template')

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
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#persInfo" role="tab" aria-controls="persInfo" aria-selected="false">Informacion Personal <i class="fas fa-user-check"></i></a>
  </li>
  <li class="nav-item barra">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#edit" role="tab" aria-controls="edit" aria-selected="true">Editar Perfil <i class="fas fa-edit"></i></a>
  </li>
  <li class="nav-item barra">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#favorites" role="tab" aria-controls="favorites" aria-selected="false">Favoritos <i class="fas fa-heart"></i></a>
  </li>
</ul>


<div class="tab-content contenido" id="myTabContent">
  <div class="tab-pane fade show active showUserInformationBox infopersonal" id="persInfo" role="tabpanel" aria-labelledby="home-tab">
    <h2>Informacion Personal</h2>
    <hr>
    <div class="personalInformation">
      <div class="">
        <label> Tu nombre</label>
        <p>{{ Auth::user()->full_name }}</p>
      </div>
      <div class="">
        <label> Nombre de usuario </label>
        <p>{{ Auth::user()->username }}</p>
      </div>
      <div class="">
        <label> Pais de nacimiento</label>
        <p>{{ Auth::user()->country }}</p>
      </div>
      <div class="">
        <label> Provincia </label>
        <p>{{ Auth::user()->state }}</p>
      </div>
      <div class="">
        <label> E-mail </label>
        <p>{{ Auth::user()->email }}</p>
      </div>
      <div class="">
        <label> Dirección de envio </label>
        <p>{{ Auth::user()->shipping_address }}</p>
      </div>
    </div>
  </div>


  <div class="tab-pane fade showUserInformationBox infopersonal" id="edit" role="tabpanel" aria-labelledby="profile-tab">
      <h2>Editar Perfil</h2>
      <hr>
      @if ($errors)
        @foreach ($errors->all() as $error)
         {{ $error }} <br>
        @endforeach
      @endif
      <div class="personalInformationEdit">
        <form method="POST" action="/profile/edit">
          @csrf

          {{ method_field('put') }}

          <div class="form-group">
            <label for="full_name">Nombre</label>
            <input type="text" name="full_name" class="form-control" id="full_name" value="{{ old('full_name', Auth::user()->full_name) }}">
          </div>
          <div class="form-group">
            <label for="username">Nombre de Usuario</label>
            <input type="text" disabled name="username" class="form-control" id="username" value="{{ Auth::user()->username }}">
          </div>
          <div class="form-group">
            <label> Pais de nacimiento</label>
            <select id="country-list" name="country" value="{{ Auth::user()->country}}" class="form-control  @error('country') is-invalid @enderror">
              <option value="">Seleccione un país</option>
              </select>
              @error('country')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
          </div>
          <div class="form-group">
            <label for="state"> Provincia </label>
            <select id="state-list" name="state" value= "{{ Auth::user()->state}}" class="form-control  @error('state') is-invalid @enderror" >
              <option value="">Seleccione una provincia</option>
              </select>
              @error('state')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
          </div>
          <div class="form-group">
            <label for="email"> E-mail </label>
            <input type="text" disabled name="email" class="form-control" id="email" value="{{ Auth::user()->email }}">
          </div>
          <div class="form-group">
            <label for="shipping_address"> Dirección de envio </label>
            <input type="text" name="shipping_address" class="form-control" id="shipping_address" value="{{ Auth::user()->shipping_address }}">
          </div>

          <button type="submit" class="btn btn-success" class="updateProfile">GUARDAR CAMBIOS</button>
        </form>

      </div>
    </div>



  <div class="tab-pane fade showUserInformationBox favorites" id="favorites" role="tabpanel" aria-labelledby="contact-tab">
    <div class="favorites-profile">
      @if (Auth::user()->favorite->count() <= 0)
      <br>
      <br>

      <img src="img/error-favoritos.png" alt="no hay favoritos">
         @else (Auth::user()->favorite->count() > 0)
      <section class="productosLista">
              @foreach ($favorites as $favorite)
              <div class="productCard card-deck lista">
                <div class="imagenLista">
                  <a class="mt-1" href="{{route('show', $favorite->product->id)}}"><img class="card-img-top" src="/storage/productos/{{ $favorite->product->image }}"></a>
                  </div>
                  <div class="productosListaInfo">
                    <div class="ratingTotal">
                        @for($i = 1; $i<=$favorite->product->rating; $i++) <i class="fas fa-paw"></i> @endfor
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title titleCard"><a class="titulo" href="/{{route('show', $favorite->product->id)}}"> {{ $favorite->product->title }} </a></h5>
                        <p class="card-text priceCard">$ {{$favorite->product->price}}</p>
                    </div>

                    <div class="card-footer text-center cardFooter">
                        <button type="submit" class="btn btn-patitas" value="{{$favorite->product->id}}">Añadir al carrito <i class="fas fa-shopping-basket"></i></button>
                    </div>
                    </div>
              </div>

              @endforeach
      </section>

      @endif
    </div>
  </div>
</div>

</div>

<script src="js/jquery.min.js"></script>
<script src="js/register.js" ></script>

@endsection
