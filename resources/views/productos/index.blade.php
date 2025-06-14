<!DOCTYPE html>
<html>
    <head>
<title>mi index</title>
    </head>
<body>
    
<h1>Lista de Productos</h1>


<a href="{{route('create')}}">Crear Producto</a>

<table border="3">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Descripción</th>
        <th>Precio</th>
        <th>Acciones</th>
    </tr>
    @foreach($productos as $producto)
    <tr>
        <td>{{ $producto->id }}</td>
        <td>{{ $producto->nombre }}</td>
        <td>{{ $producto->descripcion }}</td>
        <td>{{ $producto->precio }}</td>
        <td>
            <a href="{{route('show', $producto->id)}}">ver</a>
            
        </td>
    </tr>
    @endforeach
</table>

</body>
</html>