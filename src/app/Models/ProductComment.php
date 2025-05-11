<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductComment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'exhibited_product_id',
        'comment',
    ];

    public function user()
    {
        return $this->belongsto("User");
    }

    public function exhibitedProduct()
    {
        return $this->belongsto("ExhibitedProduct");
    }
}
