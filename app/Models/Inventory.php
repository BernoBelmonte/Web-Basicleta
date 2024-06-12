<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Inventory extends Model
{
    use HasFactory;
    protected $table = 'inventories';
    protected $primaryKey = "id";
    protected $fillable = [
        'product_id',
        'last_updated',
        'category',
        'stock_quantity'
    ];
    protected $guarded = ['id'];

    public function products(): HasMany 
    {
        return $this->hasMany(Product::class);
    }
}
