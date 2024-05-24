<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Inventory extends Model
{
    use HasFactory;
    
    protected $table = 'inventories';
    protected $guarded = ['id'];
    protected $fillable = [
        'product_id',
        'quantity',
        'last_update'
    ];

    public function products(): HasMany
    {
        return $this->hasMany(Inventory::class);
    }
}
