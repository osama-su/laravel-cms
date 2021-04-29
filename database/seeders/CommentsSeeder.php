<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        $user = collect(User::where('id','>',2)->get()->modelKey());
        $post = collect(Post::wherePostType('post')->whereStatus('1')->whereCommentAble(1)->get());

        for ($i=0; $i < 100; $i++) { 
            
        }

        $comment = Comment::create([
            'name' => $faker->name,
            'email' => $faker->email,
            'url' => $faker->url,
            'ip_address' => $faker->ipv4,
            'comment' => $faker->paragraph(2,true),
            'status' => rand(0,1),
            'post_id' => $post->random()->id,
            'user_id' => $user->random(),

        ]);
    }
}
