<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchasedProduct extends Model
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
        return $this->belongsto("User");
    }

    public function paymentMethod()
    {
        return $this->belongsTo("PaymentMethod");
    }



    public function purchasedProduct()
    {
        return $this->belongsTo("PurchasedProduct");
    }
}
