<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            [
                'title' => 'That time i got incarnated as a slime',
                'description' => 'That Time I Got Reincarnated as a Slime also known as TenSura or Slime Isekai is a Japanese fantasy light novel series written by Fuse, and illustrated by Mitz Vah.',
                'genre' => 'Fantasy',
                'rating' => '8.2 / 10',
                'volume' => '1',
                'img' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.imdb.com%2Ftitle%2Ftt9054364%2F&psig=AOvVaw3foawkuenqmhpjasjJI4iW&ust=1626080645384000&source=images&cd=vfe&ved=0CAoQjRxqFwoTCNi8xszU2vECFQAAAAAdAAAAABAD',
            ],

        ]);
    }
}
