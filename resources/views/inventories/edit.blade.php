<x-layout>
    <h2>Editar inventario</h2>
    <form action="{{ route('inventories.update', $inventory->id) }}" method ="POST">
        @csrf
        {{ method_field('PUT') }}
        
        <label>ID Producto</label>
        <input type="text" name="idProducto" value="{{ $inventory->product_id }}">
        <select id="profesor_id" name="profesor_id">
            @foreach($products as $product)
                @if($product->id == $order->product_id)
                    <option value="{{$product->id}}" selected> {{ $product->product_id }}</option>
                @else
                    <option value="{{$product->id}}"> {{ $product->product_id }}</option>
                @endif
            @endforeach
        </select>
        <label>Fecha de actualizacion:</label>
        <input type="date" name="marca" value="{{ $inventory->last_updated }}">
        <label>Cantidad en stock:</label>
        <input type="text" name="cantidadStock" value="{{ $inventory->stock_quantity }}">
        <label>Categoria</label>
        <input type="text" name="estado" value="{{ $inventory->category }}">
        <input type="submit" value="Guardar">
    </form>
</x-layout>