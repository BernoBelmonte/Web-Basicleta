<x-layout>
    <h2>Nuevo Producto</h2>
    <form action="{{ route('products.store') }}" method ="POST">
    @csrf
    <label>Nombres:</label>
    <input type="text" name="product_name">
    <label>Marca:</label>
    <input type="text" name="brand">
    <label>Descripcion:</label>
    <input type="text" name="description">
    <label>Precio:</label>
    <input type="text" name="price">
    <label>Cantidad:</label>
    <input type="text" name="stock_quantity">
    <input type="submit" value="Guardar">
</form>
</x-layout>
