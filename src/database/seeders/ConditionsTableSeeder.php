<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ConditionsTableSeeder extends Seeder
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
            'condition' => '良好',
            'created_at' => $now,
            'updated_at' => $now,
        ];
        DB::table('conditions')->insert($param);

        $param = [
            'condition' => '目立った傷や汚れなし',
            'created_at' => $now,
            'updated_at' => $now,
        ];
        DB::table('conditions')->insert($param);

        $param = [
            'condition' => 'やや傷や汚れあり',
            'created_at' => $now,
            'updated_at' => $now,
        ];
        DB::table('conditions')->insert($param);

        $param = [
            'condition' => '状態が悪い',
            'created_at' => $now,
            'updated_at' => $now,
        ];
        DB::table('conditions')->insert($param);

    }
}
