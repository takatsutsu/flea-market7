<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExhibitedProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'product_condition_id',
        'product_picture',
        'product_explanation',
        'brand_name',
        'product_price',
        'user_id',
        'sold_out',


    ];

    public function user()
    {
        return $this->belongsTo("App\Models\User");
    }

    public function productComments()
    {
        return $this->hasMany("App\Models\ProductComment");
    }

    public function mylistProducts()
    {
        return $this->hasMany("App\Models\MylistProduct");
    }

    public function productCategories()
    {
        return $this->hasMany("App\Models\ProductCategory");
    }

    public function purchasedProduct()
    {
        return $this->hasOne("App\Models\PurchasedProduct");
    }

    public function Condition()
    {
        return $this->belongsTo("App\Models\Condition");
    }
}
