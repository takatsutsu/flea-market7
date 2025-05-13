<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();

        //一般利用者
        $param = [
            'name' => '後藤 喜之',
            'email' => 'nobuyukigoto_28897424@yahoo.co.jp',
            'email_verified_at' => $now,
            'password' => bcrypt('password'),
            'role' => 'user',
            'postal_code' => '885-3490',
            'address' => '宮崎県延岡市大貫町1-1-',
            'building_name' => 'ルジェンテ・リベル804',
            'created_at' => $now,
            'updated_at' => $now,
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => '笠原 友紀',
            'email' => 'tomokikasahara_87043531@hotmaill.com',
            'email_verified_at' => $now,
            'password' => bcrypt('password'),
            'role' => 'user',
            'postal_code' => '124-4447',
            'address' => '東京都町田市鶴間1-2-3',
            'building_name' => '',
            'created_at' => $now,
            'updated_at' => $now,
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => '藤村 和博',
            'email' => 'fujimura711_40997695@hotmaill.com',
            'email_verified_at' => $now,
            'password' => bcrypt('password'),
            'role' => 'user',
            'postal_code' => '157-6970',
            'address' => '東京都八王子市子安町3-4-4',
            'building_name' => '',
            'created_at' => $now,
            'updated_at' => $now,
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => '中田 朋裕',
            'email' => 'tomohiro_nakata_79353192@hotmaill.com',
            'email_verified_at' => $now,
            'password' => bcrypt('password'),
            'role' => 'user',
            'postal_code' => '155-1994',
            'address' => '東京都葛飾区東新小岩3-3-7',
            'building_name' => '',
            'created_at' => $now,
            'updated_at' => $now,
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => '山下 しんじ',
            'email' => 'yamashita311_84938715@gmail.com',
            'email_verified_at' => $now,
            'password' => bcrypt('password'),
            'role' => 'user',
            'postal_code' => '535-1192',
            'address' => '大阪府豊中市熊野町3-4-19',
            'building_name' => '',
            'created_at' => $now,
            'updated_at' => $now,
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => '市川 貴之',
            'email' => 'takayukiichikawa_02389587@hotmaill.com',
            'email_verified_at' => $now,
            'password' => bcrypt('password'),
            'role' => 'user',
            'postal_code' => '521-2874',
            'address' => '滋賀県大津市本堅田3-3-4',
            'building_name' => 'ヒルズコート508',
            'created_at' => $now,
            'updated_at' => $now,
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => '秦野 真治',
            'email' => 'hatano_36_17059075@hotmaill.com',
            'email_verified_at' => $now,
            'password' => bcrypt('password'),
            'role' => 'user',
            'postal_code' => '182-5599',
            'address' => '東京都港区虎ノ門3-3-10ハーモニーコート502',
            'building_name' => '',
            'created_at' => $now,
            'updated_at' => $now,
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => '益田 麻衣',
            'email' => 'masuda_mai_83104546@gmail.com',
            'email_verified_at' => $now,
            'password' => bcrypt('password'),
            'role' => 'user',
            'postal_code' => '549-9201',
            'address' => '大阪府大阪市東淀川区東淡路1-1-108',
            'building_name' => 'ペルル209',
            'created_at' => $now,
            'updated_at' => $now,
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => '竹内 ゆい',
            'email' => 'takeuchi_618_01018419@yahoo.co.jp',
            'email_verified_at' => $now,
            'password' => bcrypt('password'),
            'role' => 'user',
            'postal_code' => '351-2392',
            'address' => '埼玉県草加市旭町3-2-7',
            'building_name' => 'パークマンション206',
            'created_at' => $now,
            'updated_at' => $now,
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => '原 健太郎',
            'email' => 'hara115_54048893@hotmaill.com',
            'email_verified_at' => $now,
            'password' => bcrypt('password'),
            'role' => 'user',
            'postal_code' => '942-5391',
            'address' => '新潟県新潟市江南区旭1-3-507',
            'building_name' => '',
            'created_at' => $now,
            'updated_at' => $now,
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => '柳澤 桂一',
            'email' => 'keiichi_yanagisawa_06661193@hotmaill.com',
            'email_verified_at' => $now,
            'password' => bcrypt('password'),
            'role' => 'user',
            'postal_code' => '670-2964',
            'address' => '兵庫県神戸市灘区高尾通1-3-9',
            'building_name' => '',
            'created_at' => $now,
            'updated_at' => $now,
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => '野口 文恵',
            'email' => 'fumienoguchi_26170702@yahoo.co.jp',
            'email_verified_at' => $now,
            'password' => bcrypt('password'),
            'role' => 'user',
            'postal_code' => '102-3721',
            'address' => '東京都江戸川区西瑞江3-1-7',
            'building_name' => '',
            'created_at' => $now,
            'updated_at' => $now,
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => '有坂 勝俊',
            'email' => 'arisaka_katsutoshi_05358794@gmail.com',
            'email_verified_at' => $now,
            'password' => bcrypt('password'),
            'role' => 'user',
            'postal_code' => '071-0421',
            'address' => '北海道札幌市手稲区西宮の沢四条2-5-709',
            'building_name' => '',
            'created_at' => $now,
            'updated_at' => $now,
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => '木村 正典',
            'email' => 'kimuramasanori_89759835@hotmaill.com',
            'email_verified_at' => $now,
            'password' => bcrypt('password'),
            'role' => 'user',
            'postal_code' => '198-1961',
            'address' => '東京都葛飾区東金町4-3-10',
            'building_name' => '',
            'created_at' => $now,
            'updated_at' => $now,
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => '青木 寛',
            'email' => 'aoki_hiroshi_47099317@gmail.com',
            'email_verified_at' => $now,
            'password' => bcrypt('password'),
            'role' => 'user',
            'postal_code' => '486-1294',
            'address' => '愛知県名古屋市中川区尾頭橋1-5-10',
            'building_name' => '',
            'created_at' => $now,
            'updated_at' => $now,
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => '長谷川 竜太',
            'email' => 'ryouta_hasegawa_10297856@yahoo.co.jp',
            'email_verified_at' => $now,
            'password' => bcrypt('password'),
            'role' => 'user',
            'postal_code' => '516-6779',
            'address' => '三重県伊勢市神久1-3-21',
            'building_name' => '',
            'created_at' => $now,
            'updated_at' => $now,
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => '関 佐江子',
            'email' => 'seki_saeko_62968667@yahoo.co.jp',
            'email_verified_at' => $now,
            'password' => bcrypt('password'),
            'role' => 'user',
            'postal_code' => '090-2780',
            'address' => '北海道旭川市宮下通3-1-3',
            'building_name' => '',
            'created_at' => $now,
            'updated_at' => $now,
        ];
        DB::table('users')->insert($param);
    }
}
