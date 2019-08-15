@extends('template')

@section('mainContent')
<div class="container" >
  <br>
<h1>Registro </h1>
  <h5>¡Si todavía no sos parte, sumate a nuestra comunidad!</h5>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!-- <div class="card-header"> </div> -->

                <div class="card-body registro">


                    <!-- <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form> -->
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                    <div class="row">
                      <!-- ESPACIO PARA NOMBRE COMPLETO -->
                      <div class="col-md-6">
                        <div class="form-group">
                          <label><b>Nombre completo:</b></label>
                          <input type="text" name="fullName" class="form-control  @error('fullName') is-invalid @enderror">
                          @error('fullName')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                        </div>
                      </div>
                      <!-- ESPACIO PARA USUARIO -->
                      <div class="col-md-6">
                        <div class="form-group">
                          <label><b>Usuario:</b></label>
                          <input type="text" name="userName" class="form-control  @error('userName') is-invalid @enderror">
                               @error('userName')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                      </div>
                      <!-- ESPACIO PARA PAIS -->
                      <div class="col-md-6">
                        <div class="form-group">
                          <label><b>País de origen:</b></label>
                          <select name="country" class="form-control  @error('country') is-invalid @enderror">
                            <option value="">Seleccione un país</option>

                          </select>
                          @error('country')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                        </div>
                      </div>
                      <!-- ESPACIO PARA CORREO ELECTRONICO -->
                      <div class="col-md-6">
                        <div class="form-group">
                          <label><b>Correo electrónico:</b></label>
                          <input type="email" name="email" class="form-control  @error('email') is-invalid @enderror">
                          @error('email')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                        </div>
                      </div>
                      <!-- ESPACIO PARA CONTRASEÑA -->
                      <div class="col-md-6">
                        <div class="form-group">
                          <label><b>Password:</b></label>
                          <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror ">

                          @error('password')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                        </div>
                      </div>
                      <!-- ESPACIO PARA REPETIR CONTRASEÑA -->
                      <div class="col-md-6">
                        <div class="form-group">
                          <label><b>Repetir contraseña:</b></label>
                          <input type="password" name="password_confirmation" class="form-control  @error('rePassword') is-invalid @enderror">
                          @error('rePassword')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                        </div>
                      </div>
                      <!-- ESPACIO PARA AVATAR -->
                      <div class="col-md-6">
                        <label><b>Imagen de perfil:</b></label>
                        <!-- Button trigger modal -->
                        <div class="avatarbutton">
                          <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModalCenter">
                          Seleccioná tu avatar!
                          </button>
                        </div>

                      </div>
                        <!-- Modal -->


                      <div class="col-12">
                        <button type="submit" class="btn btn-success">Registrarse</button>
                      </div>
                      </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
