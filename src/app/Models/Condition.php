<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Condition extends Model
{
    use HasFactory;

    protected $fillable = [
        'condition',
    ];

    public function exhibitedProducts()
    {
        return $this->hasMany("App\Models\Exhibited_product");
    }
}
