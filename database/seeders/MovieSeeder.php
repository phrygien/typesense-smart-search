<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movies = [
            ['title' => 'Inception', 'release_year' => 2010],
            ['title' => 'The Dark Knight', 'release_year' => 2008],
            ['title' => 'Interstellar', 'release_year' => 2014],
            ['title' => 'The Matrix', 'release_year' => 1999],
            ['title' => 'Fight Club', 'release_year' => 1999],
            ['title' => 'Forrest Gump', 'release_year' => 1994],
            ['title' => 'The Godfather', 'release_year' => 1972],
            ['title' => 'Pulp Fiction', 'release_year' => 1994],
            ['title' => 'The Lord of the Rings: The Return of the King', 'release_year' => 2003],
            ['title' => 'The Shawshank Redemption', 'release_year' => 1994],
            ['title' => 'The Avengers', 'release_year' => 2012],
            ['title' => 'Titanic', 'release_year' => 1997],
            ['title' => 'Avatar', 'release_year' => 2009],
            ['title' => 'Gladiator', 'release_year' => 2000],
            ['title' => 'Braveheart', 'release_year' => 1995],
            ['title' => 'Jurassic Park', 'release_year' => 1993],
            ['title' => 'Star Wars: A New Hope', 'release_year' => 1977],
            ['title' => 'The Lion King', 'release_year' => 1994],
            ['title' => 'The Silence of the Lambs', 'release_year' => 1991],
            ['title' => 'Saving Private Ryan', 'release_year' => 1998],
            ['title' => 'The Green Mile', 'release_year' => 1999],
            ['title' => 'Schindler’s List', 'release_year' => 1993],
            ['title' => 'Goodfellas', 'release_year' => 1990],
            ['title' => 'The Departed', 'release_year' => 2006],
            ['title' => 'Django Unchained', 'release_year' => 2012],
            ['title' => 'Inglourious Basterds', 'release_year' => 2009],
            ['title' => 'The Wolf of Wall Street', 'release_year' => 2013],
            ['title' => 'A Beautiful Mind', 'release_year' => 2001],
            ['title' => 'The Prestige', 'release_year' => 2006],
            ['title' => 'The Grand Budapest Hotel', 'release_year' => 2014],
            ['title' => 'Whiplash', 'release_year' => 2014],
            ['title' => 'La La Land', 'release_year' => 2016],
            ['title' => 'Blade Runner 2049', 'release_year' => 2017],
            ['title' => 'Mad Max: Fury Road', 'release_year' => 2015],
            ['title' => 'Black Panther', 'release_year' => 2018],
            ['title' => 'Joker', 'release_year' => 2019],
            ['title' => 'Parasite', 'release_year' => 2019],
            ['title' => 'No Country for Old Men', 'release_year' => 2007],
            ['title' => 'The Revenant', 'release_year' => 2015],
            ['title' => 'The Irishman', 'release_year' => 2019],
            ['title' => 'Once Upon a Time in Hollywood', 'release_year' => 2019],
            ['title' => 'Logan', 'release_year' => 2017],
            ['title' => 'Deadpool', 'release_year' => 2016],
            ['title' => 'Doctor Strange', 'release_year' => 2016],
            ['title' => 'Guardians of the Galaxy', 'release_year' => 2014],
            ['title' => 'Thor: Ragnarok', 'release_year' => 2017],
            ['title' => 'Spider-Man: No Way Home', 'release_year' => 2021],
            ['title' => 'Dune', 'release_year' => 2021],
            ['title' => 'Everything Everywhere All at Once', 'release_year' => 2022],
        ];

        foreach ($movies as $movie) {
            DB::table('movies')->insert([
                'title' => $movie['title'],
                'release_year' => $movie['release_year'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
