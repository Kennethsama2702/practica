<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5 text-center">
        <h1 class="display-4">¡Bienvenido a la Gestión de Productos!</h1>
        <p class="lead mt-3">Esta es una aplicación de ejemplo construida con Laravel 12.</p>

        @auth
            <a href="{{ route('productos.index') }}" class="btn btn-primary mt-4">Ir a Productos</a>
            <form method="POST" action="{{ route('logout') }}" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-danger mt-4">Cerrar sesión</button>
            </form>
        @else
            <a href="{{ route('login') }}" class="btn btn-success mt-4">Iniciar Sesión</a>
            <a href="{{ route('register') }}" class="btn btn-outline-success mt-4">Registrarse</a>
        @endauth
    </div>

</body>
</html>
