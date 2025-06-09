<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ExhibitionProduct;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_name',
    ];

    public function Categories()
    {
        return $this->hasMany("App\Models\Category");
    }

    protected $table = 'categories';

    // カテゴリは複数の商品を持つ
    public function products() // こちらも複数形を推奨
    {
        // belongsToMany(関連モデル, 中間テーブル名, 自身の外部キー名, 関連モデルの外部キー名)
        return $this->belongsToMany(ExhibitionProduct::class, 'product_categories', 'category_id', 'exhibition_product_id');
    }
}
