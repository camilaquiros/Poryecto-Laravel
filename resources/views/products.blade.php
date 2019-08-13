<!DOCTYPE html>
<?php
require_once "_productos_datos.php";
$pageTitle = "Productos";
?>
<html lang="en" dir="ltr">

<head>
  <?php require_once "partials/header.php"; ?>
</head>

<body class="bodyProductos">
  <!-- HEADER -->
  <header>
    <?php require_once "partials/navbar.php"; ?>
  </header>
  <div class="containerProductos">
    <!-- PRODUCTOS -->
    <section class="productosLista">
      <?php foreach ($productos as $unProducto): ?>
      <div class="lista">
        <a class="imagenLista" href="_producto_detalle.php?id=<?= $unProducto["id"] ?>"><img src="<?=$unProducto["imagen"]?>" alt="<?= $unProducto["nombre"] ?>"></a>
        <div class="ratingTotal">
          <!-- RATING -->
          <div class="rating">
            <?php for ($i = 1; $i <= $unProducto["rating"]; $i++): ?>
            <i class="fas fa-paw"></i>
            <?php endfor; ?>
          </div>
          <div class="noRating">
            <?php for ($i = 1; $i <= $unProducto["noRating"]; $i++): ?>
            <i class="fas fa-paw"></i>
            <?php endfor; ?>
          </div>
        </div>
        <!-- REDIRECCION A DETALLES DE PRODUCTO -->
        <a class="titulo" href="_producto_detalle.php?id=<?= $unProducto["id"] ?>"> <?= $unProducto["nombre"] ?> </a>
        <p>$<?php echo $unProducto["precio"]; ?></p>
      </div>
      <?php endforeach; ?>
    </section>
  </div>
  <!-- FOOTER -->
  <footer>
    <?php require_once "partials/footer.php"; ?>
  </footer>
</body>

</html>
