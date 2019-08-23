
<header class="indexhead">
  <nav class="navprincipal">
    <ul class="menutop-header">
      <div class="logoNv">
        <li class="homeLogo"><a href="/"><img src="/img/Logo-Patitas.png"></a></li>
      </div>
      <form class="searchBar" action="/product/search" method="GET">
        <div class="input-group">
          <input type="text" name="query" value="" class="form-control">
          <button type="submit" class="btn"><i class="fas fa-search"></i></button>
        </div>
      </form>
<!-- BARRA DE NAVEGACION CELULAR -->

      <div class="celular">
      <div class="hamburger">
        <a id="hamburger" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-bars"></i></a>
        <div class="dropdown-menu dropright">
        <a href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mascotas</a>
            <div class="dropdown-menu dropright">
              <a id = "perros" class="dropdown-item" href="/dogs" data-toggle="dropdown">Perros</a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="/dogs/food">Alimentos</a>
                  <a class="dropdown-item" href="/dogs/accesories">Accesorios</a>
                  <a class="dropdown-item" href="/dogs/hygiene">Estetica e higiene</a>
                  <a class="dropdown-item" href="/dogs/health">Salud</a>
                  <a class="dropdown-item" href="/dogs/snack">Snacks</a>
                  </div>
              <a class="dropdown-item" href="/cats" data-toggle="dropdown">Gatos</a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="#">Alimentos</a>
                  <a class="dropdown-item" href="#">Accesorios</a>
                  <a class="dropdown-item" href="#">Estetica e higiene</a>
                  <a class="dropdown-item" href="#">Salud</a>
                  <a class="dropdown-item" href="#">Snacks</a>
                  </div>
            </div>
          <a href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Servicios</a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="/services/#Clinica veterinaria">Clinica veterinaria</a>
              <a class="dropdown-item" href="/services/#Estudios especiales">Estudios especiales</a>
              <a class="dropdown-item" href="/services/#Entrenador personal para tu mascota">Entrenador personal para tu mascota</a>
              <a class="dropdown-item" href="/services/#Peluqueria Canina">Peluqueria canina</a>
              <a class="dropdown-item" href="/services">Ver todos</a>
            </div>
          <a href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Productos</a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="/food">Alimentos</a>
              <a class="dropdown-item" href="/accesories">Accesorios</a>
              <a class="dropdown-item" href="/hygiene">Estetica e higiene</a>
              <a class="dropdown-item" href="/health">Salud</a>
              <a class="dropdown-item" href="/snacks">Snacks</a>
              <a class="dropdown-item" href="/products">Ver todos los productos</a>
            </div>
          <a href="/products/offer">Ofertas</a>
          <a href="/nosotros">Nosotros</a>
          <a href="/faqs">FAQ</a>
      </div>
    </div>
      @guest
      <div class="listaContinuacion">
        <li><a href="/faqs">Ayuda</a></li>
        <li><a href="/register">Registrarse</a></li>
        <li><a class="login" href="/login">Iniciar Sesión <br><i class="fas fa-user"></i></a></li>
      </div>
      @else
      <div class="listaContinuacion">
        @if (auth()->user()->is_admin)
          <li>
            <a href="/administration">Administracion</a>
          </li>
        @endif
        <li><a href="/faqs">Ayuda</a>
        </li>
        <li>
          <div class="dropdown downProfile">
            <a class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width:220px">
                <img src="/storage/Avatars/{{ Auth::user()->avatar }}" alt="Avatar Seleccionado">
                Hola, {{ Auth::user()->username }}!
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="/profile">Perfil</a>
              <form action="/logout" method="post">
								@csrf
								<button type="submit" class="dropdown-item">Cerrar sesion</button>
							</form>
            </div>
          </div>
        </li>
      </div>
      </div>
      @endguest
    </ul>

    <!-- BARRA DE NAVEGACION DESKTOP Y TABLET -->
    <ul class="menu-header">
      <li><a href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mascotas</a>
        <div class="dropdown-menu dropright">
          <a id = "perros" class="dropdown-item" href="/dogs" data-toggle="dropdown">Perros</a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              @foreach ($subcategories as $subcategory)
              <a class="dropdown-item" href="/dogs/{{$subcategory->name}}">{{$subcategory->name}}</a>
              @endforeach
              </div>
          <a class="dropdown-item" href="/cats" data-toggle="dropdown">Gatos</a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              @foreach ($subcategories as $subcategory)
              <a class="dropdown-item" href="#">{{$subcategory->name}}</a>
              @endforeach
              </div>
        </div>
      </li>
      <li><a href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Servicios</a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          @foreach ($services as $service)
          <a class="dropdown-item" href="/services/#{{$service->name}}">{{$service->name}}</a>
          @endforeach
          <a class="dropdown-item" href="/services">Ver todos</a>
        </div>
      </li>
      <li><a href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Productos</a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          @foreach ($subcategories as $subcategory)
          <a class="dropdown-item" href="/{{$subcategory->name}}">{{$subcategory->name}}</a>
          @endforeach
          <a class="dropdown-item" href="/products">Ver todos los productos</a>
        </div>
      </li>
      <li><a href="/products/offer">Ofertas</a></li>
      <li><a href="/nosotros">Nosotros</a></li>
      <li><a href="/faqs">FAQ</a></li>
    </ul>
  </nav>
</header>
