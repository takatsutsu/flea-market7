<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'exhibited_product_id',
        'category_id',
    ];

    public function purchaseProducts()
    {
        return $this->belongstoMany("PurchaseProduct");
    }

    public function category()
    {
        return $this->belongsto("Category");
    }
}
