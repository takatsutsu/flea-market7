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

    public function purchasedProducts()
    {
        return $this->belongstoMany("PurchasedProduct");
    }

    public function category()
    {
        return $this->belongsto("Category");
    }
}
