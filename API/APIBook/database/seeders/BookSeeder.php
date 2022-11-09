<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'book_name' => 'Subhe Sadique',
            'author_name' => 'Khurram Murad',
            'publisher_name' => 'BIIT',
            'price' => 160,
        ]);
        DB::table('books')->insert([
            'book_name' => 'Morning in Jenin',
            'author_name' => 'Sujan Abulhawa',
            'publisher_name' => 'Nobo Prokash',
            'price' => 320,
        ]);
    }
}


            // $table->string('book_name');
            // $table->string('author_name');
            // $table->string('publisher_name');
            // $table->integer('price');
