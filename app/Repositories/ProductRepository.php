<?php
namespace App\Repositories;

use App\Models\Product;

class ProductRepository
{
    protected $product;
    public function __construct(Product $product)
    {
        $this->product = $product;
    } 

    public function getProducts() 
    {
        return $this->product->all();
    }

    public function getProductById($id)
    {
        return $this->product->find($id);
    }

    public function createProduct($product)
    {
        Product::create([
            'product_name'=>$product->product_name,
            'category'=>$product->category,
            'brand'=>$product->brand,
            'description'=>$product->description,
            'price'=>$product->price,
            'stock_quantity'=>$product->stock_quantity
        ]);
    }

    public function updateProduct($id, $updateProduct)
    {
        $product = Product::find($id);
        $product->description = $updateProduct->description;
        $product->price = $updateProduct->price;
        $product->stock_quantity = $updateProduct->stock_quantity;
        $product->save();
    }

    public function deleteProduct($id)
    {
        $product = Product::find($id);
        $product->delete();
    }
}
