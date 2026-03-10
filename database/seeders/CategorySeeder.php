<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::insert([
            'title' => "Кухонная мебель"
        ]);
        Category::insert([
            'title' => "Мебель для ванной"
        ]);
        Category::insert([
            'title' => "Текстиль для дома"
        ]);
    }
}
