<?php

namespace Database\Seeders;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Filmseeder extends Seeder
{
    public function run()
    {
        Film::create([
            'name' => 'example movie',
            'date' => '29.01.2025',
            'category_id' => 1,
            'summary' => 'This is an example movie summary.',
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
