<?php

use App\Models\Post;
use App\Models\Category;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $categories_ids = Category::all()->pluck('id');

        for ($i=0; $i < 150; $i++) { 
            $post = new Post;
            $post->title = $faker->words(rand(3, 10), true);
            $post->slug = Post::getSlug($post->title);
            $post->category_id = $faker->randomElement($categories_ids);
            $post->image = 'https://picsum.photos/id/' . rand(1, 800) . '/200/300';
            $post->content = $faker->paragraphs(rand(2,10), true);
            $post->save();
            // $post->excerpt = $faker->paragrasphs();
            
        }
    }
}
