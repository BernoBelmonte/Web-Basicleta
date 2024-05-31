<?php
namespace App\Repositories;

use App\Models\Order;

class OrderRepository 
{
    protected $order;
    public function __construct(Order $order)
    {
        $this->order = $order;
    } 

    public function getOrders() 
    {
        return $this->order->all();
    }

    public function getOrderById($id)
    {
        return $this->order->find($id);
    }

    public function createOrder($order)
    {
        Order::create([
            'customer_name'=>$order->customer_name,
            'customer_phone'=>$order->customer_phone,
            'order_date'=>$order->order_date,
            'status'=>$order->status,
            'quantity'=>$order->quantity,
            'price'=>$order->price,
            'total_amount'=>$order->total_amount,
            'product_id'=>$order->product_id
        ]);
    }

    public function updateOrder($id,$updateOrder)
    {
        $order = Order::find($id);
        $order->customer_name = $updateOrder->customer_name;
        $order->customer_pphone = $updateOrder->customer_phone;
        $order->order_date = $updateOrder->order_date;
        $order->status = $updateOrder->status;
        $order->quantity = $updateOrder->quantity;
        $order->price = $updateOrder->price;
        $order->total_amount = $updateOrder->total_amount;
        $order->product_id = $updateOrder->product_id;
        $order->save();
    }

    public function deleteOrder($id)
    {
        $order = Order::find($id);
        $order->delete();
    }
}