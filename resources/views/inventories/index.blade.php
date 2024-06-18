<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Web Basicleta</title>
    </head>
    <body>
        <x-layout>
            <h2>Listado de Inventarios</h2>
            <a class="new-button" href="{{ route('inventories.create') }}">Nuevo Inventario</a>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Ultima Actualizacion</th>
                    <th>Categoria</th>
                    <th>Cantidad en stock</th>
                </tr>
                @foreach ($inventories as $inventory)
                <tr>    
                    <td>{{ $inventory->product_id }}</td>
                    <td>{{ $inventory->last_updated }}</td>
                    <td>{{ $inventory->category }}</td>
                    <td>{{ $invetory->stock_quantity }}</td>
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