<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use App\Models\Order;
class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $order1 = new Order();
        $order1->customer_name = 'Diego Zeballos';
        $order1->customer_email = 'diego@gmail.com';
        $order1->customer_phone = '54488448';
        $order1->order_date = Carbon::now();
        $order1->total_amount = 4;
        $order1->status = 'Completed';
        $order1->product_id = '1';
        $order1->quantity = '3';
        $order1->price = '3.00';
        $order1->save();
    }
}
