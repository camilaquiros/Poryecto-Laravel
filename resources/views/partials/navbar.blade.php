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
      @endguest
    </ul>
    <ul class="menu-header">
      <li><a href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mascotas</a>
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
      </li>
      <li><a href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Servicios</a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" href="/services">Clinica veterinaria</a>
          <a class="dropdown-item" href="/services">Peluqueria canina</a>
          <a class="dropdown-item" href="/services">Estudios clínicos</a>
          <a class="dropdown-item" href="/services">Paseador personal</a>
          <a class="dropdown-item" href="/services">Ver todos</a>
        </div>
      </li>
      <li><a href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Productos</a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" href="/food">Alimentos</a>
          <a class="dropdown-item" href="/accesories">Accesorios</a>
          <a class="dropdown-item" href="/hygiene">Estetica e higiene</a>
          <a class="dropdown-item" href="/health">Salud</a>
          <a class="dropdown-item" href="/snacks">Snacks</a>
          <a class="dropdown-item" href="/products">Ver todos los productos</a>
        </div>
      </li>
      <li><a href="#">Ofertas</a></li>
      <li><a href="/nosotros">Nosotros</a></li>
      <li><a href="/faqs">FAQ</a></li>
    </ul>
  </nav>
</header>
