<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TrainerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => '手塚翔太',
            'sex' => '男',
            'age' => 36,
        ];
        DB::table('trainers')->insert($param);

        $param = [
            'name' => '井原菜月',
            'sex' => '女',
            'age' => 30,
        ];
        DB::table('trainers')->insert($param);

        $param = [
            'name' => '前田雄介',
            'sex' => 'その他',
            'age' => 45,
        ];
        DB::table('trainers')->insert($param);
    }
}
