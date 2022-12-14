<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => fake()->name(),
                'balance' => 100
            ],
            [
                'name' => fake()->name(),
                'balance' => 200
            ],
            [
                'name' => fake()->name(),
                'balance' => 150
            ],
            [
                'name' => fake()->name(),
                'balance' => 200
            ],
            [
                'name' => fake()->name(),
                'balance' => 200
            ]
    ]);
    }
}
