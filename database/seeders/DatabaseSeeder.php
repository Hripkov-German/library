<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Author::factory(10)->create();
        \App\Models\Book::factory(20)->create();
        $authors = \App\Models\Author::all();

        \App\Models\Book::all()->each(function ($book) use ($authors) {
            $book->authors()->attach(
                $authors->random(rand(1, 3))->pluck('id')->toArray()
            );
        });
    }
}
