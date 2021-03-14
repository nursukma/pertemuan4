<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post')->insert([
            'title' => 'Belajar model dengan laravel',
            'slug' => 'belajar-model-dengan-laravel',
            'content' => 'belajar laravel itu menyenangkan',
            'draft' => 0
        ]);
    }
}
