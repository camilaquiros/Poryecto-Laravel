{{-- Para usar la plantilla template.blade.php --}}
@extends('template')

{{-- Llenando de información los @yield() --}}
{{-- @section('bodyClass', 'class=bg-olive') --}}

@section('pageTitle', 'Login')
{{-- Como solo nos interesa mandar un string al yield, podemos pasar dicho string como 2do parámetro de la función @section() --}}

@section('mainContent')


<!-- Login-Form -->
<div class="containerLogin">
  <section class="loginSection">
    <h2 class="text-center">Iniciar sesión</h2>
      <form action="/login" method="post">
                {{csrf_field()}}
            <!-- ESPACIO PARA MAIL -->
            <div class="form-group">
              <label for="email">Email o Usuario</label>
                <div class="input-group">
                  <input id="login" type="text"
       class="form-control{{ $errors->has('username') || $errors->has('email') ? ' is-invalid' : '' }}"
       name="login" value="{{ old('username') ?: old('email') }}" autofocus>

@if ($errors->has('username') || $errors->has('email'))
    <span class="invalid-feedback">
        <strong>{{ $errors->first('username') ?: $errors->first('email') }}</strong>
    </span>
@endif
                  </div>
                </div>
                <!-- ESPACIO PARA CONTRASEÑA -->
                <div class="form-group">
                  <label for="">Contraseña</label>
                    <div class="input-group">
                      <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" >

                      @if ($errors->has('password'))
                          <span class="invalid-feedback">
                              <strong>{{ $errors->first('password') }}</strong>
                          </span>
                      @endif
                      </div>
                    </div>

                    <!-- ESPACIO PARA RECORDARME -->
                    <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                              {{ 'Recordarme' }}
                            </label>
                          </div>

                      <!-- ESPACIO PARA ¿SIN CUENTA? -->
                      <div class="ingreso">
                        <div class="registroLogin">
                          <p>¿Aún no tenés cuenta?</p>
                            <a href="/register">Registrate</a>
                          </div>
                          <button type="submit" class="btn btn-green float-right">Ingresar <i class="fas fa-sign-in-alt"></i></button>
                        </div>
                      </form>
                    </section>
                  </div>
@endsection
