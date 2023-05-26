<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Food;

class Foods extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Food::create([
            'name' => 'Food 1'
        ]);
        Food::create([
            'name' => 'Food 2'
        ]);
    }
}
