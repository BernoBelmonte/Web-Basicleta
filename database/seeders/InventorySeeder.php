<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use App\Models\Inventory;

class InventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $inventory1 = new Inventory();
        $inventory1->product_id = '1'; 
        $inventory1->last_updated = Carbon::now();
        $inventory1->category = 'Bikes';
        $inventory1->stock_quantity = 100;
        $inventory1->save();

        $inventory2 = new Inventory();
        $inventory2->product_id = '2'; 
        $inventory2->last_updated = Carbon::now();
        $inventory2->category = 'Bikes';
        $inventory2->stock_quantity = 10;
        $inventory2->save();
    }
}
