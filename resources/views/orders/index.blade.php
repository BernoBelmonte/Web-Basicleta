<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Web Basicleta</title>
    </head>
    <body>
        <h2>Listado de Pedidos</h2>
        <table>
            <tr>
                <th>Nombre del cliente</th>
                <th>Correo del cliente</th>
                <th>Numero del cliente</th>
                <th>Fecha del pedido</th>
                <th>Cantidad total</th>
                <th>Estado</th>
                <th>ID del producto</th>
                <th>Cantidad</th>
                <th>Precio</th>
            </tr>
            @foreach ($orders as $order)
            <tr>    
                <td>{{ $order->customer_name }}</td>
                <td>{{ $order->customer_email }}</td>
                <td>{{ $order->customer_phone }}</td>
                <td>{{ $order->order_date }}</td>
                <td>{{ $order->total_amount }}</td>
                <td>{{ $order->status }}</td>
                <td>{{ $order->product_id }}</td>
                <td>{{ $order->quantity }}</td>
                <td>{{ $order->price }}</td>
            </tr>
            @endforeach
        </table>
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