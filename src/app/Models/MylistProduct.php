<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyListProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'exhibited_product_id',
    ];

    public function Products()
    {
        return $this->hasMany("App\Models\Exhibited_product");
    }

    public function user()
    {
        return $this->belongsto("App\Models\User");
    }
}
