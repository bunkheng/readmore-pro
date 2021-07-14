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
                'title' => 'The Seven Deadly Sins: Wrath of the Gods',
                'description' => 'That Time I Got Reincarnated as a Slime also known as TenSura or Slime Isekai is a Japanese fantasy light novel series written by Fuse.',
                'genre' => 'Action, Adventure',
                'rating' => '9.2 / 10',
                'volume' => '100',
                'status'=> 'FALSE',
                'readSrc'=> 'https://drive.google.com/file/d/1TPX4SfwQUTXhorr5Euz7Pn-1_6JvCdn3/preview',
                'img' => 'https://images-na.ssl-images-amazon.com/images/I/91CDclYaKfL.jpg',
                'slideimg' => 'https://img.wallpapersafari.com/desktop/1920/1080/56/2/HRGg1I.jpg',
            ],
            [
                'title' => 'Yuru Camp!',
                'description' => 'While the perfect getaway for most girls her age might be a fancy vacation with their loved ones ',
                'genre' => 'Slice of Life, Comedy',
                'rating' => '8.27 / 10',
                'volume' => '20',
                'status'=> 'FALSE',
                'readSrc'=> 'https://drive.google.com/file/d/1ysDLK3CUa948bOq7AOVfVsEXpoNlnh-L/preview',
                'img' => 'https://i.frog.ink/AUmt1Eqw/laid-back-camp-guide-book-obi.jpg?r=eDWLmKT8tBVUKvmaPqP0wJe7ygMPclg96w1np5G9Zi0G6a',
                'slideimg' => 'https://i.ytimg.com/vi/BV2oVNbREhM/maxresdefault.jpg',
            ],
            [
                'title' => 'Shingeki no Kyojin Season 3 Part 2',
                'description' => 'That Time I Got Reincarnated as a Slime also known as TenSura or Slime Isekai is a Japanese fantasy light novel series written by Fuse.',
                'genre' => 'Action, Supernatural',
                'rating' => '9.1 / 10',
                'volume' => '200',
                'status'=> 'FALSE',
                'readSrc'=> 'FALSE',
                'img' => 'https://aotmanga.com/wp-content/uploads/2021/01/EoD3BdSXcAA_Kfy.jpg',
                'slideimg' => 'https://wallpaperaccess.com/full/5286029.png',
            ],
            [
                'title' => 'Fullmetal Alchemist: Brotherhood',
                'description' => 'That Time I Got Reincarnated as a Slime also known as TenSura or Slime Isekai is a Japanese fantasy light novel series written by Fuse.',
                'genre' => 'Action, Supernatural',
                'rating' => '8.6 / 10',
                'volume' => '100',
                'status'=> 'FALSE',
                'readSrc'=> 'FALSE',
                'img' => 'https://images-na.ssl-images-amazon.com/images/I/819gbwpjLcL.jpg',
                'slideimg' => 'https://i.pinimg.com/originals/27/44/42/27444291e48afb5774549e436c190a10.jpg',
            ],
            [
                'title' => 'Shiratorizawa Gakuen Koukou',
                'description' => 'That Time I Got Reincarnated as a Slime also known as TenSura or Slime Isekai is a Japanese fantasy light novel series written by Fuse.',
                'genre' => 'Drama, Romance',
                'rating' => '7.8 / 10',
                'volume' => '80',
                'status'=> 'FALSE',
                'readSrc'=> 'FALSE',
                'img' => 'https://m.media-amazon.com/images/I/51zkg51lqRL.jpg',
                'slideimg' => 'https://wallpaperaccess.com/full/1991387.jpg',
            ],
            [
                'title' => 'Code Geass: Hangyaku no Lelouch R2',
                'description' => 'That Time I Got Reincarnated as a Slime also known as TenSura or Slime Isekai is a Japanese fantasy light novel series written by Fuse.',
                'genre' => 'Action, Supernatural',
                'rating' => '8.6 / 10',
                'volume' => '150',
                'status'=> 'FALSE',
                'readSrc'=> 'FALSE',
                'img' => 'https://images-na.ssl-images-amazon.com/images/I/81a5yIRD1ZL.jpg',
                'slideimg' => 'https://wallpapercave.com/wp/wp8969296.jpg',
            ],
            [
                'title' => 'Gintama Movie 2: Kanketsu-hen - Yorozuya yo Eien',
                'description' => 'That Time I Got Reincarnated as a Slime also known as TenSura or Slime Isekai is a Japanese fantasy light novel series written by Fuse.',
                'genre' => 'Action, Supernatural',
                'rating' => '8.2 / 10',
                'volume' => '60',
                'status'=> 'FALSE',
                'readSrc'=> 'FALSE',
                'img' => 'https://images-na.ssl-images-amazon.com/images/I/81UHGZF6D5S.jpg',
                'slideimg' => 'https://c4.wallpaperflare.com/wallpaper/605/706/353/anime-gintama-elizabeth-gintama-gintoki-sakata-wallpaper-preview.jpg',
            ],
            [
                'title' => 'Solo Leveling',
                'description' => 'Ten years ago, "the Gate" appeared and connected the real world with the realm of magic and monsters.',
                'genre' => 'Action, Adventure, Fantasy',
                'rating' => '8.86 / 10',
                'volume' => '160',
                'status'=> 'FALSE',
                'readSrc'=> 'FALSE',
                'img' => 'https://images-na.ssl-images-amazon.com/images/I/81jS951SgDL.jpg',
                'slideimg' => 'https://i.pinimg.com/originals/4d/bb/ea/4dbbea51049fe42476e0b2e6ba8ec6c1.jpg',
            ],

        ]);
    }
}
