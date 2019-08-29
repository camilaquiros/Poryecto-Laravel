<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('pageTitle') - Patitas de Ciudad</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <link href="/css/app.css" rel="stylesheet">

</head>

<body @yield('bodyClass')>

    {{-- La función @include() ya sabe que está buscando un archivo dentro de resources/views --}}
    @include('partials.navbar')
    {{-- @include('partials/navbar.blade.php') --}}
    @if (session()->has('flash_message'))
        <div class="alert alert-info mb-2 mt-4">
            {{ session('flash_message') }}
        </div>
    @endif
    {{-- Dejamos un espacio vacío para insertar el contenido de cada una de las views --}}
    @yield('mainContent')

    @include('partials.footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="/js/navbar.js">

    </script>
</body>

</html>
