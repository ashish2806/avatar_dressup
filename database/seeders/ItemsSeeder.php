<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert(
        [
            [
                'category_id' => 1,
                'name' => 'Black hat',
                'image' => 'black_hat.jpg',
                'price' => 2
            ],
            [
                'category_id' => 1,
                'name' => 'Red hat',
                'image' => 'red_hat.jpg',
                'price' => 3
            ],
            [
                'category_id' => 2,
                'name' => 'Black hair',
                'image' => 'black_hair.jpg',
                'price' => 4
            ],
            [
                'category_id' => 2,
                'name' => 'Red head',
                'image' => 'red_head.jpg',
                'price' => 5
            ],
            [
                'category_id' => 3,
                'name' => 'Black eye',
                'image' => 'black_eye.jpg',
                'price' => 4
            ],
            [
                'category_id' => 3,
                'name' => 'Red eye',
                'image' => 'red_eye.jpg',
                'price' => 6
            ],
            [
                'category_id' => 4,
                'name' => 'Black Lips',
                'image' => 'black_lips.jpg',
                'price' => 8
            ],
            [
                'category_id' => 4,
                'name' => 'Red Lips',
                'image' => 'red_lips.jpg',
                'price' => 1
            ],
            [
                'category_id' => 5,
                'name' => 'Black Neck',
                'image' => 'black_neck.jpg',
                'price' => 1
            ],
            [
                'category_id' => 5,
                'name' => 'Red Neck',
                'image' => 'red_neck.jpg',
                'price' => 1
            ],
            [
                'category_id' => 6,
                'name' => 'Black Torso',
                'image' => 'black_torso.jpg',
                'price' => 2
            ],
            [
                'category_id' => 6,
                'name' => 'Red Torso',
                'image' => 'red_torso.jpg',
                'price' => 2
            ],

            [
                'category_id' => 6,
                'name' => 'Black Torso',
                'image' => 'black_torso.jpg',
                'price' => 2
            ],
            [
                'category_id' => 6,
                'name' => 'Red Torso',
                'image' => 'red_torso.jpg',
                'price' => 2
            ],

            [
                'category_id' => 6,
                'name' => 'Black Torso',
                'image' => 'black_torso.jpg',
                'price' => 2
            ],
            [
                'category_id' => 6,
                'name' => 'Red Torso',
                'image' => 'red_torso.jpg',
                'price' => 2
            ],

            [
                'category_id' => 7,
                'name' => 'Black Hand',
                'image' => 'black_hand.jpg',
                'price' => 2
            ],
            [
                'category_id' => 7,
                'name' => 'Red Hand',
                'image' => 'red_hand.jpg',
                'price' => 2
            ],

            [
                'category_id' => 8,
                'name' => 'Black Vest',
                'image' => 'black_vest.jpg',
                'price' => 2
            ],
            [
                'category_id' => 8,
                'name' => 'Red Vest',
                'image' => 'red_vest.jpg',
                'price' => 7
            ],

            [
                'category_id' => 9,
                'name' => 'Black Pants',
                'image' => 'black_pants.jpg',
                'price' => 2
            ],
            [
                'category_id' => 9,
                'name' => 'Red Pants',
                'image' => 'red_pants.jpg',
                'price' => 2
            ],

            [
                'category_id' => 10,
                'name' => 'Black Shoes',
                'image' => 'black_shoes.jpg',
                'price' => 8
            ],
            [
                'category_id' => 10,
                'name' => 'Red Shoes',
                'image' => 'red_shoes.jpg',
                'price' => 2
            ],

            [
                'category_id' => 11,
                'name' => 'Black Skin',
                'image' => 'black_skin.jpg',
                'price' => 2
            ],
            [
                'category_id' => 11,
                'name' => 'Red Skin',
                'image' => 'red_skin.jpg',
                'price' => 2
            ],
        ]);
    }
}
