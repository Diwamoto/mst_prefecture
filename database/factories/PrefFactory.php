<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\mst_prefecture as Pref;
use Faker\Generator as Faker;



$factory->define(Pref::class, function (Faker $faker) {
    return [
        "prefecture_cd" => Pref::count(),
        "prefecture_name" => $faker->prefecture . $faker->city . $faker->streetAddress, 
        "insert_date" => now(),
        "insert_cd" => "1",
        "update_date" => null,
        "update_cd" => null,
        "delete_date" => null,
        "delete_cd" => null,
        "delete_flag" => "0",
    ];
});
