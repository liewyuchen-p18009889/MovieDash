<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Movie;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Movie::create([
            'title' => 'Into The Wind',
            'poster' => 'xxx.jpg',
            'genre' => 'drama',
            'language' => 'polish',
            'actor' => 'Sonia Mietielica, Jakub Sasak',
            'director' => 'Kristoffer Rus',
            'rating' => '0',
            'totalFavorites' => '0',
            'synopsis' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'year' => '2022'
        ]);
    }
}
