<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ExhibitionProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();
        //出展商品１０
        $param = [
            'product_name' => '腕時計',
            'product_condition_id' => 1,
            'product_picture' => 'Armani+Mens+Clock.jpg',
            'product_explanation' => 'スタイリッシュなデザインのメンズ腕時計',
            'brand_name' => '',
            'product_price' => 15000,
            'user_id' => 1,
            'sold_out' => '',
            'created_at' => $now,
            'updated_at' => $now,
        ];
        DB::table('exhibition_products')->insert($param);

        $param = [
            'product_name' => 'HDD',
            'product_condition_id' => 2,
            'product_picture' => 'HDD+Hard+Disk.jpg',
            'product_explanation' => '高速で信頼性の高いハードディスク',
            'brand_name' => '',
            'product_price' => 5000,
            'user_id' => 2,
            'sold_out' => '',
            'created_at' => $now,
            'updated_at' => $now,
        ];
        DB::table('exhibition_products')->insert($param);

        $param = [
            'product_name' => '玉ねぎ3束',
            'product_condition_id' => 3,
            'product_picture' => 'iLoveIMG+d.jpg',
            'product_explanation' => '新鮮な玉ねぎ3束のセット',
            'brand_name' => '',
            'product_price' => 300,
            'user_id' => 3,
            'sold_out' => '',
            'created_at' => $now,
            'updated_at' => $now,
        ];
        DB::table('exhibition_products')->insert($param);

        $param = [
            'product_name' => '革靴',
            'product_condition_id' => 4,
            'product_picture' => 'Leather+Shoes+Product+Photo.jpg',
            'product_explanation' => '新鮮な玉ねぎ3束のセット',
            'brand_name' => '',
            'product_price' => 4000,
            'user_id' => 4,
            'sold_out' => '',
            'created_at' => $now,
            'updated_at' => $now,
        ];
        DB::table('exhibition_products')->insert($param);

        $param = [
            'product_name' => 'ノートPC',
            'product_condition_id' => 1,
            'product_picture' => 'Living+Room+Laptop.jpg',
            'product_explanation' => '高性能なノートパソコン',
            'brand_name' => '',
            'product_price' => 45000,
            'user_id' => 5,
            'sold_out' => '',
            'created_at' => $now,
            'updated_at' => $now,
        ];
        DB::table('exhibition_products')->insert($param);

        $param = [
            'product_name' => 'マイク',
            'product_condition_id' => 2,
            'product_picture' => 'Music+Mic+4632231.jpg',
            'product_explanation' => '高音質のレコーディング用マイク',
            'brand_name' => '',
            'product_price' => 8000,
            'user_id' => 6,
            'sold_out' => '',
            'created_at' => $now,
            'updated_at' => $now,
        ];
        DB::table('exhibition_products')->insert($param);

        $param = [
            'product_name' => 'ショルダーバッグ',
            'product_condition_id' => 3,
            'product_picture' => 'Purse+fashion+pocket.jpg',
            'product_explanation' => 'おしゃれなショルダーバッグ',
            'brand_name' => '',
            'product_price' => 3500,
            'user_id' => 7,
            'sold_out' => '',
            'created_at' => $now,
            'updated_at' => $now,
        ];
        DB::table('exhibition_products')->insert($param);

        $param = [
            'product_name' => 'タンブラー',
            'product_condition_id' => 4,
            'product_picture' => 'Tumbler+souvenir.jpg',
            'product_explanation' => '使いやすいタンブラー',
            'brand_name' => '',
            'product_price' => 500,
            'user_id' => 8,
            'sold_out' => '',
            'created_at' => $now,
            'updated_at' => $now,
        ];
        DB::table('exhibition_products')->insert($param);

        $param = [
            'product_name' => 'コーヒーミル',
            'product_condition_id' => 1,
            'product_picture' => 'Waitress+with+Coffee+Grinder.jpg',
            'product_explanation' => '手動のコーヒーミル',
            'brand_name' => '',
            'product_price' => 4000,
            'user_id' => 9,
            'sold_out' => '',
            'created_at' => $now,
            'updated_at' => $now,
        ];
        DB::table('exhibition_products')->insert($param);

        $param = [
            'product_name' => 'メイクセット',
            'product_condition_id' => 2,
            'product_picture' => '外出メイクアップセット.jpg',
            'product_explanation' => '便利なメイクアップセット',
            'brand_name' => '',
            'product_price' => 2500,
            'user_id' => 10,
            'sold_out' => '',
            'created_at' => $now,
            'updated_at' => $now,
        ];
        DB::table('exhibition_products')->insert($param);
    }
}
