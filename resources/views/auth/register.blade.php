{{-- Para usar la plantilla template.blade.php --}}
@extends('template')

{{-- Llenando de información los @yield() --}}
{{-- @section('bodyClass', 'class=bg-olive') --}}

@section('pageTitle', 'Registro')
{{-- Como solo nos interesa mandar un string al yield, podemos pasar dicho string como 2do parámetro de la función @section() --}}

@section('mainContent')
<div class="containerRegistro" >
<h1>Registro </h1>
  <h5>¡Si todavía no sos parte, sumate a nuestra comunidad!</h5>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!-- <div class="card-header"> </div> -->

                <div class="card-body registro">

                    <form method="POST" action="{{ route('register') }}" class="formulario">
                        @csrf
                    <div class="row">
                      <!-- ESPACIO PARA NOMBRE COMPLETO -->
                      <div class="col-md-6">
                        <div class="form-group">
                          <label><b>Nombre completo:</b></label>
                          <input type="text" name="fullName" value= "{{old("fullName")}}" class="form-control  @error('fullName') is-invalid @enderror">
                          <div class="invalid-feedback">
                           <!-- Mensaje de error -->
                         </div>
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
                          <input type="text" name="username" value= "{{old("username")}}"class="form-control  @error('userName') is-invalid @enderror">
                          <div class="invalid-feedback">
                           <!-- Mensaje de error -->
                         </div>
                               @error('username')
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
                          <select id="country-list" name="country" class="form-control  @error('country') is-invalid @enderror">
                            <div class="invalid-feedback">
                             <!-- Mensaje de error -->
                            </div>
                            @error('country')
                             <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                             </span>
                         @enderror
                       </div>
                     </div>

                            <option value="">Seleccione un país</option>
                            </select>
                            @error('country')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                        </div>
                      </div>


                      <!--PROVINCIAS -->
                      <div class="col-md-6">
                        <div class="form-group">
                          <label><b>Provincia:</b></label>
                          <select id="state-list" name="state" class="form-control  @error('state') is-invalid @enderror" >
                            <div class="invalid-feedback">
                             <!-- Mensaje de error -->
                            </div>

                            <option value="">Seleccione una provincia</option>

                          </select>
                          @error('state')
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
                          <input type="text" name="email" class="form-control  @error('email') is-invalid @enderror" value="{{ old('email') }}">
                          <div class="invalid-feedback">
                           <!-- Mensaje de error -->
                          </div>

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
                          <label><b>Contraseña:</b></label>
                          <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror ">
                          <div class="invalid-feedback">
                           <!-- Mensaje de error -->
                          </div>

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
                          <input type="password" name="password_confirmation" class="form-control  @error('password_confirmation') is-invalid @enderror">
                          <div class="invalid-feedback">
                           <!-- Mensaje de error -->
                          </div>

                          @error('password_confirmation')
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
                          <button name ="boton-avatar" type="button" id="boton-avatar"class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModalCenter">
                          Seleccioná tu avatar!
                          </button>
                          <div class="invalid-feedback">
                           <!-- Mensaje de error -->
                          </div>

                          @error('avatar')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                        </div>

                      </div>
                        <!-- Modal -->
                        <div class="avatarRegistro">
                          <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalCenterTitle">Opciones</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                @foreach(DB::table('avatars')->get() as $avatar)
                                <label>
                                  <input type="radio" name="avatar" value="{{ $avatar->url }}">
                                  <img src="/storage/Avatars/{{ $avatar->url}}" alt="">
                                </label>
                                @endforeach
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-outline-success" data-dismiss="modal">Guardar</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                      <div class="col-12">
                        <button type="submit" class="btn btn-success">Registrarse</button>
                      </div>

                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/register.js" ></script>
<script src="/js/validacionRegister.js"></script>
