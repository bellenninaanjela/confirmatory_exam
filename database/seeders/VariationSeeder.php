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
        $this->call(VariationSeeder::class);

        DB::table('variations')->insert([
            'name' => 'beef',
        ]);
    }
}
