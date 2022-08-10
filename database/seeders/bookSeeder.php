<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class bookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
                                                                
            [   'book_ID'=>'101589',
                'genre_ID'=>'2',
                'genre'=>'Thriller',
                'title'=>'The 6:20 man',
                'image'=>'https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1646415706l/59568612.jpg',
                'author'=>'David Baldashi',
                'price'=>'14.99',
                'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.Reprehenderit optio praesentium recusandae placeat.'
                
            ],

            [
                'book_ID'=>'785394',
                'genre_ID'=>'2',
                'genre'=>'Thriller and Romance',
                'title'=>'Suspects',
                'image'=>'https://images.penguinrandomhouse.com/cover/9781984821676',
                'author'=>'Danielle Steel',
                'price'=>'28.99',
                'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.Reprehenderit optio praesentium recusandae placeat.'
                
            ],

            [
                'book_ID'=>'856972',
                'genre_ID'=>'7',
                'genre'=>'Fantacy',
                'title'=>'Skin of the sea',
                'image'=>'https://m.media-amazon.com/images/I/51rjrsluyLL.jpg',
                'author'=>'Natasha Bowen',
                'price'=>'11.99',
                'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.Reprehenderit optio praesentium recusandae placeat.'
                
            ],

            [
                'book_ID'=>'448965',
                'genre_ID'=>'4',
                'genre'=>'Romance',
                'title'=>'Someone Perfect',
                'image'=>'https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1622708128l/57346221.jpg',
                'author'=>'Mary Balogh',
                'price'=>'27.00',
                'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.Reprehenderit optio praesentium recusandae placeat.'
                
            ],

            [
                'book_ID'=>'569211',
                'genre_ID'=>'1',
                'genre'=>'Mystery',
                'title'=>'A Wicked Conceit',
                'image'=>'https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1633522372l/59214443._SX318_.jpg',
                'author'=>'Anna Lee Huber',
                'price'=>'17.00',
                'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.Reprehenderit optio praesentium recusandae placeat.'
                
            ],

            [
                'book_ID'=>'753951',
                'genre_ID'=>'7',
                'genre'=>'Fantacy',
                'title'=>'The starless Sea',
                'image'=>'https://images-na.ssl-images-amazon.com/images/I/A1A4Zsw7+eL.jpg',
                'author'=>'Erin Morgenstern',
                'price'=>'18.00',
                'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.Reprehenderit optio praesentium recusandae placeat.'
                
            ],

            [
                'book_ID'=>'456852',
                'genre_ID'=>'4',
                'genre'=>'Romance',
                'title'=>'I think I love you',
                'image'=>'https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1610590051l/49291330._SY475_.jpg',
                'author'=>'Auriane Desombre',
                'price'=>'12.59',
                'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.Reprehenderit optio praesentium recusandae placeat.'
                
            ],

            [
                'book_ID'=>'147899',
                'genre_ID'=>'9',
                'genre'=>'Science and Historical Fiction',
                'title'=>'The daughter of Doctor Moreau',
                'image'=>'https://images.penguinrandomhouse.com/cover/9780593610015',
                'author'=>'Silvia Moreno-Garcia',
                'price'=>'28.00',
                'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.Reprehenderit optio praesentium recusandae placeat.'
                
            ],

            [
                'book_ID'=>'654893',
                'genre_ID'=>'9',
                'genre'=>'Historical Fiction',
                'title'=>'The War Girls',
                'image'=>'https://m.media-amazon.com/images/I/41LwqAwZVqL.SX316.SY480._SL500_.jpg',
                'author'=>'V.S.Alexender',
                'price'=>'25.89',
                'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.Reprehenderit optio praesentium recusandae placeat.'
                
            ],

            [
                'book_ID'=>'875621',
                'genre_ID'=>'2',
                'genre'=>'Thriller',
                'title'=>'The Retreat',
                'image'=>'https://images-na.ssl-images-amazon.com/images/I/91oEeK2HYGL.jpg',
                'author'=>'Sarah Pearse',
                'price'=>'27.99',
                'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.Reprehenderit optio praesentium recusandae placeat.'
                
            ],

        ]);
    }
}
