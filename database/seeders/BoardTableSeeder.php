<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class BoardTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        for($i = 1; $i <= 100; $i ++){
            $id = mt_rand(1,12);
            $rand_str = chr(mt_rand(65,90)) . chr(mt_rand(65,90)) . chr(mt_rand(65,90)) . chr(mt_rand(65,90)) . chr(mt_rand(65,90)) . chr(mt_rand(65,90)) . chr(mt_rand(65,90));
            $param = [
                'person_id' => $id,
                'title' => 'Title' . $i,
                'message' => $rand_str,
            ];
            DB::table('boards')->insert($param);
        }
        
    }
}
