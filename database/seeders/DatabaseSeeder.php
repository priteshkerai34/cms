<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\member;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=10;$i++) {
            $this->call([
                member::class
            ]);
        }
    }
}
