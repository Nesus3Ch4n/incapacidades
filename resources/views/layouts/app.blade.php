<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Concencionario 25')</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/icon.png') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/formulario.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>

    </style>
</head>
<body>
    <nav>
        <ul class="menu">
            <li><a href="{{ url('/index') }}">Home</a></li>
            <li><a href="{{ url('/automoviles') }}">Automoviles</a></li>
            <li><a href="{{ url('/clientes') }}">Clientes</a></li>
            <li><a href="{{ url('/') }}">Salir</a></li>
        </ul>
    </nav>

    <main>
        <div>
            @yield('content')
        </div>

    </main>
</body>
</html>
