<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
    use App\Models\Category;
class CategorySeeder extends Seeder
{
public function run()
{
    Category::create(['name' => 'belum pernah']);
    Category::create(['name' => 'metode hormonal']);
    Category::create(['name' => 'metode non hormonal']);
    Category::create(['name' => 'metode permanen']);
    Category::create(['name' => 'metode alami']);
    Category::create(['name' => 'metode darurat']);
}

}