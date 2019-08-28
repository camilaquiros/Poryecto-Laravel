
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
      <div class="hamburger dropdown">
        <a href="#" role="button" id="hamburger dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-bars"></i></a>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <a class="dropdown-item" href="#">Mascotas</a>
    <a class="dropdown-item" href="/services">Servicios</a>
    <a class="dropdown-item" href="/products">Productos</a>
    <a class="dropdown-item" href="/products/offer">Ofertas</a>
    <a class="dropdown-item" href="/nosotros">Nosotros</a>
        <a class="dropdown-item" href="/faqs">FAQ</a>
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
        <li class="registrado">
          <div class="dropdown downProfile">
            <a class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="/storage/Avatars/{{ Auth::user()->avatar }}" alt="Avatar Seleccionado">
                Hola, {{ Auth::user()->username }}!
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="/profile/{{Auth::user()->id}}">Perfil</a>
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
      <li class="dropdown mascotas"><a href="#" data-toggle="dropdown">Mascotas</a>
        <div class="dropdown-menu dropright category">
          @foreach ($categories as $category)
          <a class="dropdown-item" href="/products/category/{{$category->id}}">{{$category->name}}</a>
              <div class="dropdown-menu subcategory" aria-labelledby="dropdownMenuLink">
              @foreach ($subcategories as $subcategory)
              <a class="dropdown-item" href="/products/category/{{$category->id}}/{{$subcategory->id}}">{{$subcategory->name}}</a>
              @endforeach
              </div>
          @endforeach
        </div>
      </li>
      <li class="dropdown"><a href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Servicios</a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          @foreach ($services as $service)
          <a class="dropdown-item" href="/services/#{{$service->name}}">{{$service->name}}</a>
          @endforeach
          <a class="dropdown-item" href="/services">Ver todos</a>
        </div>
      </li>
      <li class="dropdown"><a href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Productos</a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          @foreach ($subcategories as $subcategory)
          <a class="dropdown-item" href="/products/subcategory/{{$subcategory->id}}">{{$subcategory->name}}</a>
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
