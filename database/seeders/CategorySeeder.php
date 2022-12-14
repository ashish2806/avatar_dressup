<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Fake\Factory as Faker;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'Head',
                'image' => 'head.jpg',
                'position' => 1
            ],
            [
                'name' => 'Hair',
                'image' => 'hair.jpg',
                'position' => 2
            ],
            [ 
                'name' => 'Eyes',
                'image' => 'eye.jpg',
                'position' => 3
            ],
            [
                'name' => 'Lips',
                'image' => 'lips.jpg',
                'position' => 4
            ],
            [
                'name' => 'Neck',
                'image' => 'neck.jpg',
                'position' => 5
            ],
            [
                'name' => 'Torso',
                'image' => 'torso.jpg',
                'position' => 6
            ],
            [
                'name' => 'Hand',
                'image' => 'hand.jpg',
                'position' => 7
            ],
            [
                'name' => 'Vest',
                'image' => 'vest.jpg',
                'position' => 8
            ],
            [
                'name' => 'Pants',
                'image' => 'pants.jpg',
                'position' => 9
            ],
            [
                'name' => 'Shoes',
                'image' => 'shoes.jpg',
                'position' => 10
            ],
            [
                'name' => 'Skin',
                'image' => 'skin.jpg',
                'position' => 11
            ]    
    ]);
       
    }
}
