<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('pageTitle') - Patitas de Ciudad</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="/css/app.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <link rel="stylesheet" href="/css/magnify.css">
    
</head>

<body @yield('bodyClass')>

    {{-- La función @include() ya sabe que está buscando un archivo dentro de resources/views --}}
    @include('partials.navbar')
    {{-- @include('partials/navbar.blade.php') --}}

    {{-- Dejamos un espacio vacío para insertar el contenido de cada una de las views --}}
    @yield('mainContent')

    @include('partials.footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
