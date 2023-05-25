<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use App\Models\Variation;
use Illuminate\Database\Seeder;

class VariationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $variations = [
            'Beef',
            'Chicken',
            'Veggies',
        ];
        
        foreach($variations as $variation) {
            Variation::create([
                'name' => $variation
            ]);
        }
    }
}
