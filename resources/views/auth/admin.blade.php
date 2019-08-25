<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('pageTitle')</title>
    <link href="/css/admin.css" rel="stylesheet">
    <!-- Styles -->
</head>
<body>
  <div class="admin-view">
      <div class="admin-sidebar">
        <img src="/img/Logo-Patitas.png" alt="">
        <ul>
          
        </ul>
      </div>
      <div class="admin-content">
        @yield('content')
      </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
