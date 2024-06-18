<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Inventory;
class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inventories = Inventory::all();
        return view('inventories.index',['inventories'=>$inventories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = Product::all();
        return view('inventories.create',['products'=>$products]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $inventory = new Inventory($request->all());
        $inventory->save();
        foreach ($request->product_ids as $product_id){
            $inventory->products()->attach($product_id);
        }
        return redirect()->action([InventroryController::class,'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $inventory = Inventory::findOrFail($id);
        return view('inventories.view', ['inventory' => $inventory]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $inventory = Inventory::findOrFail($id);
        return view('inventories.edit',['inventory' => $inventory]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $inventory = Inventory::findOrFail($id);
        $inventory->product_id = $request->product_id;
        $inventory->products()->detach();
        foreach ($request->product_ids as $product_id){
            $inventory->products()->attach($product_id);
        }
        $inventory->last_updated = $request->last_updated;
        $inventory->category = $request->category;
        $inventory->stock_quantity = $request->stock_quantity;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if(DB::table('inventories')->where('inventory_id', '=', $id)->first() != null){
            return redirect()->back()->withErrors(['mensaje' => 'El inventario no puede ser eliminado.']);
        }
        else{
                $inventory = Inventory::findOrFail($id);
                $inventory->delete();
                return redirect()->action([InventoryController::class, 'index']);
        }
    }
}
