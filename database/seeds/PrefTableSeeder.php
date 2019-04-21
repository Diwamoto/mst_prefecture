<?php

use Illuminate\Database\Seeder;

class PrefTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mst_prefecture')->insert([
           'prefecture_cd' => str_random(1),
           'prefecture_name' => str_random(15),
           'insert_date' => new DateTime(),
           'insert_cd' => "1",
           'update_date' => null,
           'update_cd' => null,
           'delete_date'=> null,
           'delete_cd' => null,
           'delete_flag' => "0"
        ]);

    }
}
