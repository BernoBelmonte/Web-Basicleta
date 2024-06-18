<x-layout>
    <h2>Nuevo Pedido</h2>
    <form action="{{ route('orders.store') }}" method ="POST">
        @csrf
        <label>Nombre del cliente:</label>
        <input type="text" name="customer_name">
        <label>Correodel cliente:</label>
        <input type="text" name="customer_email">
        <label>Telefono del cliente:</label>
        <input type="text" name="customer_phone">
        <label>Fecha:</label>
        <input type="date" name="order_date">
        <label>Estado:</label>
        <input type="text" name="status">
        <label>ID Producto:</label>
        <select id="product_id" name="product_id">
            @foreach($products as $product)
                <option value="{{$product->id}}"> {{ $product->product_id }}</option>
            @endforeach
        </select>
        <label>Cantidad:</label>
        <input type="text" name="stock_quantity">
        <label>Precio:</label>
        <input type="text" name="price">
        <input type="submit" value="Guardar">
    </form>
</x-layout>