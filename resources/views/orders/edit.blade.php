<x-layout>
    <h2>Editar pedido</h2>
    <form action="{{ route('orders.update', $order->id) }}" method ="POST">
        @csrf
        {{ method_field('PUT') }}
        <label>Nombre del cliente:</label>
        <input type="text" name="nombre" value="{{ $order->customer_name }}">
        <label>Correo del cliente:</label>
        <input type="text" name="correo" value="{{ $order->customer_email }}">
        <label>Numero del cliente:</label>
        <input type="text" name="numero" value="{{ $order->customer_phone }}">
        <label>Fecha:</label>
        <input type="date" name="marca" value="{{ $order->order_date }}">
        <label>Cantidad total:</label>
        <input type="text" name="total" value="{{ $order->total_amount }}">
        <label>Estado</label>
        <input type="text" name="estado" value="{{ $order->status }}">
        <label>ID Producto</label>
        <input type="text" name="idProducto" value="{{ $order->product_id }}">
        <select id="profesor_id" name="profesor_id">
            @foreach($products as $product)
                @if($product->id == $order->product_id)
                    <option value="{{$product->id}}" selected> {{ $product->product_id }}</option>
                @else
                    <option value="{{$product->id}}"> {{ $product->product_id }}</option>
                @endif
            @endforeach
        </select>
        <label>Cantidad:</label>
        <input type="text" name="cantidad" value="{{ $order->quantity }}">
        <label>Precio:</label>
        <input type="text" name="precio" value="{{ $order->price }}">
        <input type="submit" value="Guardar">
    </form>
</x-layout>