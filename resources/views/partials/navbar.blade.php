<?php
    if(!isset($_SESSION))
    {
        session_start();
    }

    $avatars = [
        "cc" => "img/Avatars/chicaCorto.jpg",
        "cl" => "img/Avatars/chicaLargo.jpg",
        "cb" => "img/Avatars/conBarba.jpg",
        "sr" => "img/Avatars/señor.jpg",
        "sra" => "img/Avatars/señora.jpg",
        "sb" => "img/Avatars/sinBarba.jpg",
        "ccm" => "img/Avatars/chicaCortoM.jpg",
        "sbm" => "img/Avatars/sinBarbaM.jpg",
        "pm" => "img/Avatars/pelaM.jpg",
        "gn" => "img/Avatars/gatoNaranja.jpg",
        "p1" => "img/Avatars/perro1.jpg",
    ];
?>
<header class="indexhead">
  <nav class="navprincipal">
    <ul class="menutop-header">
      <div class="logoNv">
        <li class="homeLogo"><a href="/"><img src="/img/Logo-Patitas.png"></a></li>
      </div>
      <form class="searchBar" action="/" method="post">
        <div class="input-group">
          <input type="text" name="" value="" class="form-control">
          <button type="button" name="button" class="btn"><i class="fas fa-search"></i></button>
        </div>
      </form>
      <?php if(isset($_SESSION['userLogged'])): ?>
      <div class="listaContinuacion">
        <li><a href="/faqs">Ayuda</a>
        </li>
        <li>
          <div class="dropdown downProfile">
            <a class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="<?= $avatars[$_SESSION['userLogged']['avatar']]; ?>" alt="Avatar Seleccionado">
                Hola, <?= ucfirst($_SESSION['userLogged']['userName']); ?>!
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="_perfil.php">Perfil</a>
              <a class="dropdown-item" href="logout.php">Cerrar sesion</a>
            </div>
          </div>
        </li>
      </div>
      <?php else: ?>
      <div class="listaContinuacion">
        <li><a href="/faqs">Ayuda</a></li>
        <li><a href="/register">Registrarse</a></li>
        <li><a class="login" href="/login">Iniciar Sesión <i class="fas fa-user"></i></a></li>
      </div>
      <?php endif; ?>
    </ul>
    <ul class="menu-header">
      <li><a href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mascotas</a>
        <div class="dropdown-menu dropright" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item " href="/dogs">Perros</a>
              <!-- <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="#">Alimentos</a>
              <a class="dropdown-item" href="#">Accesorios</a>
              <a class="dropdown-item" href="#">Estetica e higiene</a>
              <a class="dropdown-item" href="#">Salud</a>
              <a class="dropdown-item" href="#">Snacks</a>
              </div> -->
          <a class="dropdown-item" href="/cats">Gatos</a>
              <!-- <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="#">Alimentos</a>
              <a class="dropdown-item" href="#">Accesorios</a>
              <a class="dropdown-item" href="#">Estetica e higiene</a>
              <a class="dropdown-item" href="#">Salud</a>
              <a class="dropdown-item" href="#">Snacks</a>
              </div> -->
        </div>
      </li>
      <li><a href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Servicios</a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" href="clinica">Clinica Veterinaria</a>
          <a class="dropdown-item" href="peluqueria">Peluqueria canina</a>
          <a class="dropdown-item" href="estudios">Estudios</a>
          <a class="dropdown-item" href="/servicios">Ver todos</a>
        </div>
      </li>
      <li><a href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Productos</a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" href="food">Alimentos</a>
          <a class="dropdown-item" href="accesories">Accesorios</a>
          <a class="dropdown-item" href="hygiene">Estetica e higiene</a>
          <a class="dropdown-item" href="health">Salud</a>
          <a class="dropdown-item" href="snacks">Snacks</a>
          <a class="dropdown-item" href="/products">Ver todos los productos</a>
        </div>
      </li>
      <li><a href="#">Ofertas</a></li>
      <li><a href="#">Nosotros</a></li>
      <li><a href="/faqs">FAQ</a></li>
    </ul>
  </nav>
</header>
