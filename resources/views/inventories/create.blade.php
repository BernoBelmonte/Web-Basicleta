<x-layout>
    <h2>Nuevo Inventario</h2>
    <form action="{{ route('inventories.store') }}" method ="POST">
    @csrf
    <label>ID Producto:</label>
    <select id="product_id" name="product_id">
        @foreach($products as $product)
            <option value="{{$product->id}}"> {{ $product->product_id }}</option>
        @endforeach
    </select>
    <label>Ultima Actualizacion:</label>
    <input type="date" name="last_updated">
    <label>Categoria:</label>
    <input type="text" name="category">
    <label>Cantidad:</label>
    <input type="text" name="stock_quantity">
    <input type="submit" value="Guardar">
</form>
</x-layout>