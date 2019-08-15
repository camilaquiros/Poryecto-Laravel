<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('pageTitle')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
</head>
<body>
  <div class="admin-view">
      <div class="admin-sidebar">
        <img src="/img/Logo-Patitas.png" alt="">
        <ul>
          <li><a href="/administration/products">Productos</a> - <a href="/administration/products/new">Crear producto</a></li>

          <li><a href="/administration/services">Servicios</a> -  <a href="/administration/services/new">Crear servicio</a></li>
          <li><a href="/administration/categories">Categorias</a> - <a href="/administration/category/new">Crear categoria</a></li>
          <li><a href="/administration/subcategories">Subcategorias</a> - <a href="/administration/subcategory/new">Crear subcategoria</a></li>
        </ul>
      </div>
      <div class="admin-content">
        @yield('content')
      </div>
  </div>
</body>
</html>
