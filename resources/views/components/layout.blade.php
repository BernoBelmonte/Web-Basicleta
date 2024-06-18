<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Web Basicleta</title>
    </head>
    <body>
        <ul>
            <li><a href="{{ route('products.index') }}">Productos</a></li>
            <li><a href="{{ route('inventories.index') }}">Inventarios</a></li>
            <li><a href="{{ route('orders.index') }}">Pedidos</a></li>
        </ul>
        {{ $slot}}
    </body>
</html>

<style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f8f9fa;
        color: #333;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }
    ul {
        list-style: none;
        padding: 0;
        display: flex;
        gap: 15px;
    }
    li {
        margin: 0;
    }
    a {
        text-decoration: none;
        color: #007BFF;
        font-weight: bold;
        padding: 8px 16px;
        border: 1px solid #007BFF;
        border-radius: 4px;
        transition: background-color 0.3s, color 0.3s;
    }
    a:hover {
        background-color: #007BFF;
        color: #fff;
    }
    .content {
        width: 90%;
        max-width: 600px;
        margin-top: 20px;
        padding: 15px;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    input[type=text], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        padding:20px;
    }
    input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    input[type=submit]:hover {
        background-color: #45a049;
    }
    .new-button {
        display: inline-block;
        padding: 10px 10px 10px 10px;
        margin-bottom: 10px;
        text-decoration: none;
        background-color: #3498db;
        color: #ffffff;
        border-radius: 5px;
        transition: background-color 0.3s;

    }
    .new-button:hover {
        background-color: #2980b9;
    }
</style>