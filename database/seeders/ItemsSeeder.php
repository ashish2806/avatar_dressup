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
        DB::table('items')->insert([[
            'category_id' => 1,
            'name' => 'black hat',
            'image' => 'black_hat.jpeg',
            'price' => 2
        ],[
            'category_id' => 2,
            'name' => 'black hair',
            'image' => 'black_hair.jpeg',
            'price' => 3
        ]]);
    }
}
