<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ProductCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();
        //腕時計
        $param = [
            'exhibition_product_id' => 1,
            'category_id'=>1,
            'created_at' => $now,
            'updated_at' => $now,
        ];
        DB::table('product_categories')->insert($param);

        $param = [
            'exhibition_product_id' => 1,
            'category_id' => 5,
            'created_at' => $now,
            'updated_at' => $now,
        ];
        DB::table('product_categories')->insert($param);

        //HDD
        $param = [
            'exhibition_product_id' => 2,
            'category_id' => 2,
            'created_at' => $now,
            'updated_at' => $now,
        ];
        DB::table('product_categories')->insert($param);
        //玉ねぎ
        $param = [
            'exhibition_product_id' => 3,
            'category_id' => 10,
            'created_at' => $now,
            'updated_at' => $now,
        ];
        DB::table('product_categories')->insert($param);

        //革靴
        $param = [
            'exhibition_product_id' => 4,
            'category_id' => 1,
            'created_at' => $now,
            'updated_at' => $now,
        ];
        DB::table('product_categories')->insert($param);

        $param = [
            'exhibition_product_id' => 4,
            'category_id' => 5,
            'created_at' => $now,
            'updated_at' => $now,
        ];
        DB::table('product_categories')->insert($param);

        //ノートpc
        $param = [
            'exhibition_product_id' =>5,
            'category_id' => 2,
            'created_at' => $now,
            'updated_at' => $now,
        ];
        DB::table('product_categories')->insert($param);

        //マイク
        $param = [
            'exhibition_product_id' => 6,
            'category_id' => 2,
            'created_at' => $now,
            'updated_at' => $now,
        ];
        DB::table('product_categories')->insert($param);

        //ショルダーバック
        $param = [
            'exhibition_product_id' => 7,
            'category_id' => 2,
            'created_at' => $now,
            'updated_at' => $now,
        ];
        DB::table('product_categories')->insert($param);

        $param = [
            'exhibition_product_id' => 7,
            'category_id' => 4,
            'created_at' => $now,
            'updated_at' => $now,
        ];
        DB::table('product_categories')->insert($param);

        //タンブラー
        $param = [
            'exhibition_product_id' => 8,
            'category_id' => 10,
            'created_at' => $now,
            'updated_at' => $now,
        ];
        DB::table('product_categories')->insert($param);

        //コーヒーミル
        $param = [
            'exhibition_product_id' => 9,
            'category_id' => 10,
            'created_at' => $now,
            'updated_at' => $now,
        ];
        DB::table('product_categories')->insert($param);

        //メイクセット
        $param = [
            'exhibition_product_id' => 10,
            'category_id' => 4,
            'created_at' => $now,
            'updated_at' => $now,
        ];
        DB::table('product_categories')->insert($param);

        $param = [
            'exhibition_product_id' => 10,
            'category_id' => 6,
            'created_at' => $now,
            'updated_at' => $now,
        ];
        DB::table('product_categories')->insert($param);

    }
}
