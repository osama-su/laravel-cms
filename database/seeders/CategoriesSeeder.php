<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Category::create(['name'=>'un-categoriezed','status'=>1]);
        \App\Models\Category::create(['name'=>'cat','status'=>1]);
        \App\Models\Category::create(['name'=>'news','status'=>1]);
        \App\Models\Category::create(['name'=>'tech','status'=>1]);
    }
}
