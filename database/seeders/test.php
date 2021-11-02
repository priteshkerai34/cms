<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class test extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        DB::table('test')->insert([
            "name"=>$faker->name(),
            "email"=>$faker->safeEmail,
            "number"=>$faker->PhoneNumber
        ]);
    }
}
