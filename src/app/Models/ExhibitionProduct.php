<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExhibitionProduct extends Model
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

    public function myListProducts()
    {
        return $this->hasMany("App\Models\MyListProduct");
    }

    public function productCategories()
    {
        return $this->hasMany("App\Models\ProductCategory");
    }

    public function purchaseProduct()
    {
        return $this->hasOne("App\Models\PurchaseProduct");
    }

    public function Condition()
    {
        return $this->belongsTo("App\Models\Condition");
    }
}
