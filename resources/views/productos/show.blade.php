<a href="/">volver al menu principal</a>
<h1>Descripcion del Producto</h1>


<form method="POST" action="{{ route('update', $producto->id) }}">
    @csrf
    @method('PUT')
    Nombre: <input type="text" name="nombre" value="{{ $producto->nombre }}"><br>
    Descripción: <input type="text" name="descripcion" value="{{ $producto->descripcion }}"><br>
    Precio: <input type="number" name="precio" step="0.01" value="{{ $producto->precio }}"><br>
    <button type="submit">Actualizar</button>
</form>
<form action="{{ route('delete', $producto->id) }}" method="POST">
    @csrf
    @method('DELETE')
<button type="submit">
    Eliminar
</button>
</form>