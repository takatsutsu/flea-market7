<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class PaymentMethodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();
        //支払い方法
        $param = [
            'payment_name' => 'コンビニ支払い',
            'created_at' => $now,
            'updated_at' => $now,
        ];
        DB::table('payment_methods')->insert($param);

        $param = [
            'payment_name' => 'カード支払い',
            'created_at' => $now,
            'updated_at' => $now,
        ];
        DB::table('payment_methods')->insert($param);
    }
}
