<?php

namespace Database\Seeders;

use App\Models\Category;
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
        
        $variations = [
            [
                'name' => 'Beef',
                'image' => '/img/category/category3.jpg'
            ],
            [
                'name' => 'Chicken',
                'image' => '/img/category/category1.jpg'
            ],
            [
                'name' => 'Veggies',
                'image' => '/img/category/category4.jpg'
            ],
        ];
        
        foreach($variations as $variation) {
            $variation = Category::create($variation);
        }
    }
}
