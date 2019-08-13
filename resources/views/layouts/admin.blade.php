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
        <ul>
          <li><a href="/administration/products">Productos</a></li>
          <li><a href="/administration/products/new">Crear producto</a></li>
          <li><a href="#">SubCategorias</a></li>
        </ul>
      </div>
      <div class="admin-content">
        @yield('content')
      </div>
  </div>
</body>
</html>
