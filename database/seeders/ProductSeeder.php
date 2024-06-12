<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $product1 = new Product();
        $product1->product_name='Trek Trail';
        $product1->brand='Trek';
        $product1->description='fewugurwibvnuriewbvrueib';
        $product1->price='1.00';
        $product1->stock_quantity='3';
        $product1->save();

        $product2 = new Product();
        $product2->product_name='Trek Trail';
        $product2->brand='Trek';
        $product2->description='fewugurwibvnuriewbvrueib';
        $product2->price='1.00';
        $product2->stock_quantity='3';
        $product2->save();

        $product3 = new Product();
        $product3->product_name='Trek Trail';
        $product3->brand='Trek';
        $product3->description='fewugurwibvnuriewbvrueib';
        $product3->price='1.00';
        $product3->stock_quantity='3';
        $product3->save();
    }
}
