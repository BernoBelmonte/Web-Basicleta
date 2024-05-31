<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\InventoryRepository;

class InventoryController extends Controller
{
    protected $inventories;
    public function __construct(InventoryRepository $inventories)
    {
        $this->inventories = $inventories;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inventories = $this->inventories->getInventories();
        return view('inventories.list', ['inventories' => $inventories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('inventories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->inventories->InsertInventories($request);
        return redirect()->action([InventoryController::class, 'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $inventory = $this->inventories->getInventoryById($id);
        return view('inventories.show', ['inventory' => $inventory]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $inventory = $this->inventories->getInventoryById($id);
        return view('inventories.edit', ['inventory' => $inventory]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->inventories->updateInventory($id, $request);
        return redirect()->action(InventoryController::class, 'index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->inventories->deleteInventory($id);
        return redirect()->action(InventoryController::class, 'index');
    }
}
