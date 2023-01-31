<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\States;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        States::create([
            'country_id' => '1',
            'name' => 'Andhra Pradesh'
        ]);
        States::create([
            'country_id' => '1',
            'name' => 'Gujarat'
        ]);
        States::create([
            'country_id' => '1',
            'name' => 'Karnataka'
        ]);
        States::create([
            'country_id' => '1',
            'name' => 'Maharashtra'
        ]);
        States::create([
            'country_id' => '1',
            'name' => 'Tamil Nadu'
        ]);
        States::create([
            'country_id' => '2',
            'name' => 'Georgia'
        ]);
        States::create([
            'country_id' => '2',
            'name' => 'Texas'
        ]);

    }
}
