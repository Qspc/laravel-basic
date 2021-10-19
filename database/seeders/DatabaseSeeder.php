<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\category;
use App\Models\Post;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(2)->create();

        User::create([
            'name' => "qspc",
            'email' => "qspc@gmail.com",
            'password' => bcrypt('pasword')
        ]);

        // User::create([
        //     'name' => "spidpes",
        //     'email' => "spidpes@gmail.com",
        //     'password' => bcrypt('12345')
        // ]);

        // User::factory(5)->create();

        category::create([
            'name' => "film",
            'slug' => "film"
        ]);

        category::create([
            'name' => "non film",
            'slug' => "non-film"
        ]);

        Post::factory(5)->create();

        // Post::create([
        //     'title' => "sang pencerah",
        //     'slug' => "sang-pencerah",
        //     'script' => "lorem ipsum",
        //     'body' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex, dolor.",
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => "sang kuriang",
        //     'slug' => "sang-kuriang",
        //     'script' => "lorem ipsum",
        //     'body' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex, dolor.",
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => "sang sakala",
        //     'slug' => "sang-sakala",
        //     'script' => "lorem ipsum",
        //     'body' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex, dolor.",
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => "sang sang lampu",
        //     'slug' => "sang-sang-lampu",
        //     'script' => "lorem ipsum",
        //     'body' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex, dolor.",
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => "sang penakluk",
        //     'slug' => "sang-penakluk",
        //     'script' => "lorem ipsum",
        //     'body' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex, dolor.",
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);
    }
}
