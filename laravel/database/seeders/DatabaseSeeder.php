<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
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
        User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        // User::create([
        //     'name' => 'Hilman Sulaeman',
        //     'email' => 'hilmansulaeman0504@gmail.com',
        //     'password' => bcrypt(1234)
        // ]);

        // User::create([
        //     'name' => 'Muhammad Fajriansyah',
        //     'email' => 'muhammadfajriansyah@gmail.com',
        //     'password' => bcrypt(1234)
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'Web-Programming'
        ]);

        Category::create([
            'name' => 'Web-Design',
            'slug' => 'web-design'
        ]);


        Category::create([
            'name' => 'Personal',
            'slug' => 'Personal'
        ]);

        Post::factory(20)->create();
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'Judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia harum mollitia exercitationem doloremque beatae illum eaque autem ullam ex sunt itaque asperiores nostrum hic molestias eos aspernatur rerum rem et dolore, saepe cum iusto aperiam eum atque! Nisi ullam libero a eligendi accusamus pariatur saepe laudantium culpa.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, labore odit repudiandae dolor iusto fuga dolorem provident sint, a quasi cum quia dignissimos perspiciatis mollitia vero excepturi odio quisquam hic beatae quae ab ipsa aperiam libero maxime! Impedit est expedita adipisci atque tempora ratione labore accusantium quaerat, quo temporibus dolores soluta eligendi itaque quibusdam vel repudiandae? Alias non perspiciatis tenetur libero ipsam cumque, eligendi quasi doloremque nihil quia harum inventore atque in aliquam excepturi dicta quam repellat quo ut nisi? Voluptatibus exercitationem blanditiis consectetur ab similique possimus voluptatem quasi! Inventore, laborum ratione rerum molestias amet voluptatem soluta pariatur, incidunt in vero fuga blanditiis quam voluptatum minima id quibusdam eius ea corporis modi ad culpa accusamus excepturi. Earum, dolorum minus sint dolor ducimus, repellendus beatae quas in ipsa vitae a possimus voluptates laboriosam facilis expedita dolorem reprehenderit? Recusandae ea autem ad est modi minima, corrupti sint quibusdam rerum. Adipisci, natus nemo!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'Judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia harum mollitia exercitationem doloremque beatae illum eaque autem ullam ex sunt itaque asperiores nostrum hic molestias eos aspernatur rerum rem et dolore, saepe cum iusto aperiam eum atque! Nisi ullam libero a eligendi accusamus pariatur saepe laudantium culpa.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, labore odit repudiandae dolor iusto fuga dolorem provident sint, a quasi cum quia dignissimos perspiciatis mollitia vero excepturi odio quisquam hic beatae quae ab ipsa aperiam libero maxime! Impedit est expedita adipisci atque tempora ratione labore accusantium quaerat, quo temporibus dolores soluta eligendi itaque quibusdam vel repudiandae? Alias non perspiciatis tenetur libero ipsam cumque, eligendi quasi doloremque nihil quia harum inventore atque in aliquam excepturi dicta quam repellat quo ut nisi? Voluptatibus exercitationem blanditiis consectetur ab similique possimus voluptatem quasi! Inventore, laborum ratione rerum molestias amet voluptatem soluta pariatur, incidunt in vero fuga blanditiis quam voluptatum minima id quibusdam eius ea corporis modi ad culpa accusamus excepturi. Earum, dolorum minus sint dolor ducimus, repellendus beatae quas in ipsa vitae a possimus voluptates laboriosam facilis expedita dolorem reprehenderit? Recusandae ea autem ad est modi minima, corrupti sint quibusdam rerum. Adipisci, natus nemo!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tigas',
        //     'slug' => 'Judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia harum mollitia exercitationem doloremque beatae illum eaque autem ullam ex sunt itaque asperiores nostrum hic molestias eos aspernatur rerum rem et dolore, saepe cum iusto aperiam eum atque! Nisi ullam libero a eligendi accusamus pariatur saepe laudantium culpa.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, labore odit repudiandae dolor iusto fuga dolorem provident sint, a quasi cum quia dignissimos perspiciatis mollitia vero excepturi odio quisquam hic beatae quae ab ipsa aperiam libero maxime! Impedit est expedita adipisci atque tempora ratione labore accusantium quaerat, quo temporibus dolores soluta eligendi itaque quibusdam vel repudiandae? Alias non perspiciatis tenetur libero ipsam cumque, eligendi quasi doloremque nihil quia harum inventore atque in aliquam excepturi dicta quam repellat quo ut nisi? Voluptatibus exercitationem blanditiis consectetur ab similique possimus voluptatem quasi! Inventore, laborum ratione rerum molestias amet voluptatem soluta pariatur, incidunt in vero fuga blanditiis quam voluptatum minima id quibusdam eius ea corporis modi ad culpa accusamus excepturi. Earum, dolorum minus sint dolor ducimus, repellendus beatae quas in ipsa vitae a possimus voluptates laboriosam facilis expedita dolorem reprehenderit? Recusandae ea autem ad est modi minima, corrupti sint quibusdam rerum. Adipisci, natus nemo!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'Judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia harum mollitia exercitationem doloremque beatae illum eaque autem ullam ex sunt itaque asperiores nostrum hic molestias eos aspernatur rerum rem et dolore, saepe cum iusto aperiam eum atque! Nisi ullam libero a eligendi accusamus pariatur saepe laudantium culpa.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, labore odit repudiandae dolor iusto fuga dolorem provident sint, a quasi cum quia dignissimos perspiciatis mollitia vero excepturi odio quisquam hic beatae quae ab ipsa aperiam libero maxime! Impedit est expedita adipisci atque tempora ratione labore accusantium quaerat, quo temporibus dolores soluta eligendi itaque quibusdam vel repudiandae? Alias non perspiciatis tenetur libero ipsam cumque, eligendi quasi doloremque nihil quia harum inventore atque in aliquam excepturi dicta quam repellat quo ut nisi? Voluptatibus exercitationem blanditiis consectetur ab similique possimus voluptatem quasi! Inventore, laborum ratione rerum molestias amet voluptatem soluta pariatur, incidunt in vero fuga blanditiis quam voluptatum minima id quibusdam eius ea corporis modi ad culpa accusamus excepturi. Earum, dolorum minus sint dolor ducimus, repellendus beatae quas in ipsa vitae a possimus voluptates laboriosam facilis expedita dolorem reprehenderit? Recusandae ea autem ad est modi minima, corrupti sint quibusdam rerum. Adipisci, natus nemo!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
