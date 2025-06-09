<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductComment;

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

    // public function Categoryy()
    // {
    //     return $this->hasMany("App\Models\Category");
    // }
    public function categories() // メソッド名を複数形 'categories' に変更することを推奨します
    {
        // belongsToMany(関連モデル, 中間テーブル名, 自身の外部キー名, 関連モデルの外部キー名)
        // ここでは中間テーブル名が 'product_categories' であることを前提とします。
        // また、自身の外部キーは 'exhibition_product_id'、関連モデルの外部キーは 'category_id' であることを前提とします。
        return $this->belongsToMany(Category::class, 'product_categories', 'exhibition_product_id', 'category_id');
    }

    public function purchaseProduct()
    {
        return $this->hasOne("App\Models\PurchaseProduct");
    }

    public function Condition()
    {
        return $this->belongsTo("App\Models\Condition");
    }
    public function comments()
    {
        // hasMany(関連モデルのクラス名, 関連モデルの外部キー名, 自身の主キー名)
        // ここでは、product_comments テーブルに exhibition_product_id カラムがあることを前提としています。
        return $this->hasMany(ProductComment::class, 'exhibition_product_id');
    }
}
