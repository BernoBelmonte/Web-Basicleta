<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;
use App\Models\Inventory;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primaryKey = "id";
    protected $fillable = [
        'product_name',
        'brand',
        'description',
        'price',
        'stock_quantity'
    ];
    protected $guarded = ['id'];

    public function inventories(): BelongsTo 
    {
        return $this->belongsTo(Inventory::class);
    }
    public function orders(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }
}
