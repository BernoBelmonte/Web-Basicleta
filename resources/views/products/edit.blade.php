<x-layout>
    <h2>Editar producto</h2>
    <form action="{{ route('products.update', $product->id) }}" method ="POST">
        @csrf
        {{ method_field('PUT') }}
        <label>Nombre:</label>
        <input type="text" name="nombre" value="{{ $product->product_name }}">
        <label>Marca:</label>
        <input type="text" name="marca" value="{{ $product->brand }}">
        <label>Descripcion:</label>
        <input type="text" name="descripcion" value="{{ $product->description }}">
        <label>Precio</label>
        <input type="text" name="precio" value="{{ $product->price }}">
        <label>Cantidad</label>
        <input type="text" name="cantidad" value="{{ $product->stock_quantity }}">
        <input type="submit" value="Guardar">
    </form>
</x-layout>