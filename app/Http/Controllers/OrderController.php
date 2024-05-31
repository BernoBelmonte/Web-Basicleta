<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\OrderRepository;

class OrderController extends Controller
{
    protected $orders;
    public function __construct(OrderRepository $orders)
    {
        $this->orders = $orders;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = $this->orders->getOrders();
        return view('orders.list', ['orders' => $orders]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('orders.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->orders->InsertOrders($request);
        return redirect()->action([OrderController::class, 'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $order = $this->orders->getOrderById($id);
        return view('orders.show', ['order' => $order]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $order = $this->orders->getOrderById($id);
        return view('orders.edit', ['order' => $order]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->orders->updateOrder($id, $request);
        return redirect()->action(OrderController::class, 'index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->orders->deleteOrder($id);
        return redirect()->action(OrderController::class, 'index');
    }
}
