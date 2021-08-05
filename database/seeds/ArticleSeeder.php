<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            'UserId' => 1,
            'CategoriesId' => 1,
            'title' => 'Pantai Pink',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente vel quo quod impedit alias adipisci aspernatur blanditiis ducimus, voluptas fugiat ab at facilis expedita id odio. Dicta corrupti id pariatur.',
            'image' => 'pantai_pink.jpg'
        ]);

        DB::table('articles')->insert([
            'UserId' => 1,
            'CategoriesId' => 1,
            'title' => 'Pasir Timbul',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente vel quo quod impedit alias adipisci aspernatur blanditiis ducimus, voluptas fugiat ab at facilis expedita id odio. Dicta corrupti id pariatur.',
            'image' => 'pasir_timbul.jpg'
        ]);

        DB::table('articles')->insert([
            'UserId' => 1,
            'CategoriesId' => 1,
            'title' => 'Pesisir Selatan',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente vel quo quod impedit alias adipisci aspernatur blanditiis ducimus, voluptas fugiat ab at facilis expedita id odio. Dicta corrupti id pariatur.',
            'image' => 'pesisir_selatan.jpg'
        ]);

        DB::table('articles')->insert([
            'UserId' => 1,
            'CategoriesId' => 2,
            'title' => 'Bromo',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente vel quo quod impedit alias adipisci aspernatur blanditiis ducimus, voluptas fugiat ab at facilis expedita id odio. Dicta corrupti id pariatur.',
            'image' => 'bromo.jpg'
        ]);

        DB::table('articles')->insert([
            'UserId' => 1,
            'CategoriesId' => 2,
            'title' => 'Merapi',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente vel quo quod impedit alias adipisci aspernatur blanditiis ducimus, voluptas fugiat ab at facilis expedita id odio. Dicta corrupti id pariatur.',
            'image' => 'merapi.jpg'
        ]);

        DB::table('articles')->insert([
            'UserId' => 1,
            'CategoriesId' => 2,
            'title' => 'Rinjani',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente vel quo quod impedit alias adipisci aspernatur blanditiis ducimus, voluptas fugiat ab at facilis expedita id odio. Dicta corrupti id pariatur.',
            'image' => 'Rinjani.jpeg'
        ]);

        DB::table('articles')->insert([
            'UserId' => 1,
            'CategoriesId' => 3,
            'title' => 'Borobudur',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente vel quo quod impedit alias adipisci aspernatur blanditiis ducimus, voluptas fugiat ab at facilis expedita id odio. Dicta corrupti id pariatur.',
            'image' => 'borobudur.jpg'
        ]);

        DB::table('articles')->insert([
            'UserId' => 1,
            'CategoriesId' => 3,
            'title' => 'Prambanan',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente vel quo quod impedit alias adipisci aspernatur blanditiis ducimus, voluptas fugiat ab at facilis expedita id odio. Dicta corrupti id pariatur.',
            'image' => 'Prambanan.jpg'
        ]);

        DB::table('articles')->insert([
            'UserId' => 1,
            'CategoriesId' => 3,
            'title' => 'Ratu Boko',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente vel quo quod impedit alias adipisci aspernatur blanditiis ducimus, voluptas fugiat ab at facilis expedita id odio. Dicta corrupti id pariatur.',
            'image' => 'ratu_boko.jpg'
        ]);

        DB::table('articles')->insert([
            'UserId' => 1,
            'CategoriesId' => 3,
            'title' => 'Tanah Lot',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente vel quo quod impedit alias adipisci aspernatur blanditiis ducimus, voluptas fugiat ab at facilis expedita id odio. Dicta corrupti id pariatur.',
            'image' => 'tanah_lot.jpg'
        ]);
    }
}
