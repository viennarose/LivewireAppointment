<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories =[
        [
            'category' => 'Comedy',
            'remarks' => Str::random(25),
        ],
        [
            'category' => 'Romance',
            'remarks' => Str::random(25),
        ],
        [
            'category' => 'Religion',
            'remarks' => Str::random(25),
        ],
        [
            'category' => 'Politics',
            'remarks' => Str::random(25),
        ],
        [
            'category' => 'Education',
            'remarks' => Str::random(25),
        ],
        [
            'category' => 'Business',
            'remarks' => Str::random(25),
        ],
    ];
    Category::insert($categories);
}
}
