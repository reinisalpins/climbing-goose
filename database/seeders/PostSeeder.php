<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        /**
         * Create 15 posts
         * Add 1-5 categories and 1-5 comments to each post
         */
        Post::factory(15)->create()->each(function (Post $post) {
            $post->categories()->attach(Category::inRandomOrder()->limit(rand(1, 5))->pluck('id'));
            $post->comments()->createMany(
                Comment::factory(rand(1, 5))->make(['post_id' => $post->id])->toArray()
            );
        });
    }
}
