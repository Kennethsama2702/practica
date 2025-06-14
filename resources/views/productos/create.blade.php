<a href="/">volver al menu principal</a>

<h1>Crear Producto</h1>

<form method="POST" action="{{ route('store') }}">
    @csrf
    Nombre: <input type="text" name="nombre"><br>
    Descripción: <input type="text" name="descripcion"><br>
    Precio: <input type="number" name="precio" step="0.01"><br>
    <button type="submit">Guardar</button>
</form>
