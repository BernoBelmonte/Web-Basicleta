<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\hasMany;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';
    protected $guarded = ['id'];
    protected $fillable = [
        'customer_name',
        'customer_phone',
        'order_date',
        'status',
        'quantity',
        'price',
        'total_amount',
        'product_id',
    ];

    public function products(): HasMany
    {
        return $this->hasMany(Inventory::class);
    }
}

