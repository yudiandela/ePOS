<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return Category::create([
            'name' => 'Uncategories',
            'slug' => 'uncategories'
        ]);
    }
}
