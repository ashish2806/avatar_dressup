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
        DB::table('categories')->insert([[
            'name' => 'Head',
            'image' => 'head.jpeg',
            'position' => 1
        ],[
            'name' => 'Hair',
            'image' => 'hair.jpeg',
            'position' => 2
        ]]);
       
    }
}
