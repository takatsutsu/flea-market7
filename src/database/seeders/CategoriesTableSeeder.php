<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();
        //カテゴリー
        $param = [
            'category_name' => 'ファッション',
            'created_at' => $now,
            'updated_at' => $now,
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category_name' => '家電',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        DB::table('categories')->insert($param);

        $param = [
            'category_name' => 'インテリア',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        DB::table('categories')->insert($param);

        $param = [
            'category_name' => 'レディース',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        DB::table('categories')->insert($param);

        $param = [
            'category_name' => 'メンズ',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        DB::table('categories')->insert($param);

        $param = [
            'category_name' => 'コスメ',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        DB::table('categories')->insert($param);


        $param = [
            'category_name' => '本',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        DB::table('categories')->insert($param);

        $param = [
            'category_name' => 'ゲーム',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        DB::table('categories')->insert($param);

        $param = [
            'category_name' => 'スポーツ',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        DB::table('categories')->insert($param);

        $param = [
            'category_name' => 'キッチン',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        DB::table('categories')->insert($param);

        $param = [
            'category_name' => 'ハンドメイド',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        DB::table('categories')->insert($param);

        $param = [
            'category_name' => 'アクセサリー',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        DB::table('categories')->insert($param);

        $param = [
            'category_name' => 'おもちゃ',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        DB::table('categories')->insert($param);

        $param = [
            'category_name' => 'ベビー・キッズ',
            'created_at' => $now,
            'updated_at' => $now,
        ];

        DB::table('categories')->insert($param);
    }
}
