<?php
namespace App\Repositories;

use App\Models\Inventory;

class InventoryRepository 
{
    protected $inventory;
    public function __construct(Inventory $inventory)
    {
        $this->inventory = $inventory;
    } 

    public function getInventories()
    {
        return $this->inventory->all();
    }

    public function getInventoryById($id)
    {
        return $this->inventory->find($id);
    }

    public function createInventory($inventory)
    {
        Inventory::create([
            'product_id' => $inventory->product,
            'quantity' => $inventory->quantity,
            'last_update' => $inventory->last_update
        ]);
    }

    public function updateInventory($id,$updateInventory)
    {
        $inventory->product_id = $updateInventory->product_id;
        $inventory->quantity = $updateInventory->quantity;
        $inventory->last_update = $updateInventory->last_update;
        $inventory->save();
    }

    public function deleteInventory($id)
    {
        $inventory = Inventory::find($id);
        $inventry->delete();
    }
}