<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::create([
            'name' => 'Action',
        ]);
        Category::create([
            'name' => 'Comedy',
        ]);
        Category::create([
            'name' => 'Drama',
        ]);
        Category::create([
            'name' => 'Honnor',
        ]);
        Category::create([
            'name' => 'Animation',
        ]);
        Category::create([
            'name' => 'Fantasy',
        ]);



    }
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
    }
}
