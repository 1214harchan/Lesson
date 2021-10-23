<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => '浮田啓介',
            'mail' => 'keisuke@201.quiunque',
            'age' => 57,
        ];
        DB::table('people')->insert($param);
        $param = [
            'name' => '柿沼あいり',
            'mail' => 'airi@201.quiunque',
            'age' => 23,
        ];
        DB::table('people')->insert($param);
        $param = [
            'name' => '柿沼遼',
            'mail' => 'ryo@201.quiunque',
            'age' => 23,
        ];
        DB::table('people')->insert($param);
    }
}
