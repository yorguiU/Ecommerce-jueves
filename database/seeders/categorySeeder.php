<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category; 

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $myCategory1 = new Category();
        $myCategory1->name = "Electronics";
        $myCategory1->save();

        $myCategory2 = new Category();
        $myCategory2->name = "phones";
        $myCategory2->save();

        $myCategory3 = new Category();
        $myCategory3->name = "computers";
        $myCategory3->save();
    }
}
