<?php

namespace Database\Seeders;

use App\Models\Post;
use Faker\Factory;
use Illuminate\Database\Seeder;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        $post = Post::create([
            'title' => 'About-us',
            'content' => $faker->paragraph(),
            'comment_able' => 0,
            'post_type' => 'page',
            'status' => 1,
            'user_id' => 1,
            'category_id'=> 1,

        ]);
        $post = Post::create([
            'title' => 'conatact',
            'content' => $faker->paragraph(),
            'comment_able' => 0,
            'post_type' => 'page',
            'status' => 1,
            'user_id' => 1,
            'category_id'=> 1,

        ]);
    }
}
