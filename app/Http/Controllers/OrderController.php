<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Order;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::all();
        return view('orders.index',['orders'=>$orders]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = Product::all();
        return view('orders.create',['products'=>$products]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $order = new Order($request->all());
        $order->save();
        foreach ($request->product_ids as $product_id){
            $order->products()->attach($product_id);
        }
        return redirect()->action([OrderController::class,'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $order = Order::findOrFail($id);
        return view('orders.view', ['order' => $order]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $products = Product::all();
        $order = Order::findOrFail($id);
        return view('orders.edit',['order'=>$order,'products'=>$products]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $order = Order::findOrFail($id);
        $order->customer_name = $request->customer_name;
        $order->customer_email = $request->customer_email;
        $order->customer_phone = $request->customer_phone;
        $order->order_date = $request->order_date;
        $order->total_amount = $request->total_amount;
        $order->status = $request->status;
        $order->product_id = $request->product_id;
        $order->products()->detach();
        foreach ($request->product_ids as $product_id){
            $order->products()->attach($product_id);
        }
        $order->quantity = $request->quantity;
        $order->price = $request->price;
        return redirect()->action([OrderController::class,'index']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if(DB::table('orders')->where('order_id', '=', $id)->first() != null){
            return redirect()->back()->withErrors(['mensaje' => 'El pedido no puede ser eliminado.']);
        }
        else{
                $order = Order::findOrFail($id);
                $order->delete();
                return redirect()->action([OrderController::class, 'index']);
        }
    }
}
