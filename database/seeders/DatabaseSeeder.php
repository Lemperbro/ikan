<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use \App\Models\User;
use \App\Models\Category;
use \App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // \App\Models\Post::factory(10)->create();
        // \App\Models\Category::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

            // User::create([
            //     "username" => 'Monkey D Luffy',
            //     "password" => bcrypt('12345'),
            //     "no_tlpn" => '082929292',
            //     "alamat" => 'dempel',
            //     "email" => 'luffy@gmail.com',
            //     "is_admin" => true
            // ]);

            // User::create([
            //     "username" => 'Roronoa Zoro',
            //     "password" => bcrypt('12345'),
            //     "no_tlpn" => '082929292',
            //     "alamat" => 'dempel',
            //     "email" => 'luffy@gmail.com',
            //     "is_admin" => true
            // ]);

            // Category::create([
            //     "name" => 'programming',
            //     "slug" => 'programming_',
            // ]);
            // Category::create([
            //     "name" => 'kuliner',
            //     "slug" => 'kuliner_',
            // ]);

            Post::create([
                "category_id" => 1,
                "user_id" => 1,
                "judul" => 'judul pertama',
                "slug" => 'judul_pertama',
                "execpt" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit hic beatae repudiandae nam voluptates odit magnam impedit cupiditate ea neque.',
                "parag" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit hic beatae repudiandae nam voluptates odit magnam impedit cupiditate ea neque.,Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit hic beatae repudiandae nam voluptates odit magnam impedit cupiditate ea neque.,Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit hic beatae repudiandae nam voluptates odit magnam impedit cupiditate ea neque.,Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit hic beatae repudiandae nam voluptates odit magnam impedit cupiditate ea neque.'
            ]);

            Post::create([
                "category_id" => 2,
                "user_id" => 2,
                "judul" => 'judul kedua',
                "slug" => 'judul_kedua',
                "execpt" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit hic beatae repudiandae nam voluptates odit magnam impedit cupiditate ea neque.',
                "parag" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit hic beatae repudiandae nam voluptates odit magnam impedit cupiditate ea neque.,Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit hic beatae repudiandae nam voluptates odit magnam impedit cupiditate ea neque.,Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit hic beatae repudiandae nam voluptates odit magnam impedit cupiditate ea neque.,Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit hic beatae repudiandae nam voluptates odit magnam impedit cupiditate ea neque.'
            ]);
    }

}
