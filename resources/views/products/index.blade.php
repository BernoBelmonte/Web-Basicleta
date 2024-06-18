<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Web Basicleta</title>
    </head>
    <body>
        <x-layout>
            <h2>Listado de Productos</h2>
            <a class="new-button" href="{{ route('products.create') }}">Nuevo Producto</a>
            <table>
                <tr>
                    <th>Nombre</th>
                    <th>Marca</th>  
                    <th>Descripcion</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                </tr>
                @foreach ($products as $product)
                <tr>
                    <td>{{ $product->product_name }}</td>
                    <td>{{ $product->brand }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->stock_quantity}}</td>
                </tr>
                @endforeach
            </table>
        </x-layout>
    </body>
</html>

<style>
    body {
        margin: auto;
        padding: 50px;
    }
    table {
        border-collapse:collapse;
        width: 100%;
    }
    table, td, th {
        border: 1px solid black;
    }
</style>