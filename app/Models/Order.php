<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $primaryKey = "id";
    protected $fillable = [
        'customer_name',
        'customer_email',
        'customer_phone',
        'order_date',
        'total_amount',
        'status',
        'product_id',
        'quantity',
        'price'
    ];
    protected $guarded = ['id'];

    public function products(): HasMany 
    {
        return $this->hasMany(Product::class);
    }
}
