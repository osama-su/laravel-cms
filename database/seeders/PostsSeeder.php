<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        $categories = collect(Category::all()->modelKeys());
        $user = collect(User::where('id','>',2)->get()->modelKeys());

        for ($i=0; $i < 100; $i++) { 
            $post = Post::create([
                'title' => $faker->sentence(mt_rand(3,6),true),
                'content' => $faker->paragraph(),
                'comment_able' => rand(0,1),
                'status' => rand(0,1),
                'user_id' => $user->random(),
                'category_id'=> $categories->random(),

            ]);
        }
    }
}
