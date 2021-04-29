<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesAndPermissionsSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(PostsSeeder::class);
        $this->call(PagesSeeder::class);
        $this->call(CommentsSeeder::class);
    }
}
