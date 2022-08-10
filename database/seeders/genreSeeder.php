<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class genreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
                                                                
            [
                'name'=>'Mystery',
                'image'=>'https://www.novelsuspects.com/wp-content/uploads/2021/04/Featured-Imaged-4.png?fit=1200%2C600&w=640',
                
                'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.Reprehenderit optio praesentium recusandae placeat.'
                
            ],

            [
                'name'=>'Adventure',
                'image'=>'https://ichef.bbci.co.uk/images/ic/1920x1080/p0852nhm.jpg',
                
                'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.Reprehenderit optio praesentium recusandae placeat.'
                
            ],

            [
                'name'=>'Thriller',
                'image'=>'https://48b6yd3iigex2rv7g41h5sts-wpengine.netdna-ssl.com/wp-content/uploads/2019/10/what-is-a-thriller.jpg',
                
                'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.Reprehenderit optio praesentium recusandae placeat.'
                
            ],

            [
                'name'=>'Crime',
                'image'=>'https://www.deadgoodbooks.co.uk/wp-content/uploads/2019/11/Best-crime-novels-of-2019.jpg',
                
                'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.Reprehenderit optio praesentium recusandae placeat.'
                
            ],

            [
                'name'=>'Fantacy',
                'image'=>'https://hips.hearstapps.com/hmg-prod/images/v-e-books-1602267356.jpg',
                
                'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.Reprehenderit optio praesentium recusandae placeat.'
                
            ],

            [
                'name'=>'Romance',
                'image'=>'https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/romance-novels-1611696322.jpg',
                
                'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.Reprehenderit optio praesentium recusandae placeat.'
                
            ],

            [
                'name'=>'Kids stories',
                'image'=>'https://playandgo.com.au/wp-content/uploads/2021/11/top-50-kids-books-2021a.png',
                
                'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.Reprehenderit optio praesentium recusandae placeat.'
                
            ],

            [
                'name'=>'Humor & Comedy',
                'image'=>'https://pyxis.nymag.com/v1/imgs/834/35b/24e277065cb23b72098b8a5638deb63dba-18-comedy-books-3.rsocial.w1200.jpg',
                
                'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.Reprehenderit optio praesentium recusandae placeat.'
                
            ]

            

        ]);
    }
}

    
