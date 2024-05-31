<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ProductRepository;

class ProductController extends Controller
{
    protected $products;
    public function __construct(ProductRepository $products)
    {
        $this->products = $products;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = $this->products->getProducts();
        return view('products.list', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->products->InsertProducts($request);
        return redirect()->action([ProductController::class, 'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = $this->products->getProductById($id);
        return view('products.show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product = $this->products->getProductById($id);
        return view('products.edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->products->updateProduct($id, $request);
        return redirect()->action([ProductController::class,'index']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $this->products->deleteProduct($id);
        return redirect()->action([ProductController::class,'index']);
    }
}
