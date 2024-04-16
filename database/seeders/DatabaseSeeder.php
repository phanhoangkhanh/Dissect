<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Number;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // \App\Models\Product::factory(10)->insert([
        //     ['name' => 'Điện thoại'],
        //     ['price' => 'Laptop'],
        // ]);
        \App\Models\Product::factory()->create();
    //     \App\Models\Product::factory()->create([
    //         'name' => 'AK47',
    //         'price' => 300
    //     ],
    //     [
    //         'name' => 'M16',
    //         'price' => 900
    //     ],
    //     [
    //         'name' => 'T90',
    //         'price' => 12300
    //     ],
    //     [
    //         'name' => 'SU57',
    //         'price' => 30000
    //     ]

    // );
    }
}
