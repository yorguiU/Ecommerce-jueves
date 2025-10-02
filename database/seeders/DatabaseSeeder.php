<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\categorySeeder; 

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        $this->call([
            categorySeeder::class,
        ]);
    }
}
