<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cities;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cities::create([
            'country_id' => '1',
            'state_id' => '1',
            'name' => 'Adoni'
        ]);
        Cities::create([
            'country_id' => '1',
            'state_id' => '1',
            'name' => 'Akkarampalle'
        ]);
        Cities::create([
            'country_id' => '1',
            'state_id' => '1',
            'name' => 'vijayawada'
        ]);
        Cities::create([
            'country_id' => '1',
            'state_id' => '2',
            'name' => 'Ahmedabad'
        ]);
        Cities::create([
            'country_id' => '1',
            'state_id' => '2',
            'name' => 'Surat'
        ]);
        Cities::create([
            'country_id' => '1',
            'state_id' => '2',
            'name' => 'Vadodara'
        ]);
        Cities::create([
            'country_id' => '1',
            'state_id' => '2',
            'name' => 'Rajkot'
        ]);
        Cities::create([
            'country_id' => '1',
            'state_id' => '3',
            'name' => 'Addur'
        ]);
        Cities::create([
            'country_id' => '1',
            'state_id' => '3',
            'name' => 'Adityapatna'
        ]);
        Cities::create([
            'country_id' => '1',
            'state_id' => '4',
            'name' => 'Mumbai'
        ]);
        Cities::create([
            'country_id' => '1',
            'state_id' => '4',
            'name' => 'Nashik'
        ]);
        Cities::create([
            'country_id' => '1',
            'state_id' => '4',
            'name' => 'Pune'
        ]);
        Cities::create([
            'country_id' => '1',
            'state_id' => '4',
            'name' => 'Nagpur'
        ]);
        Cities::create([
            'country_id' => '1',
            'state_id' => '4',
            'name' => 'Latur'
        ]);
        Cities::create([
            'country_id' => '1',
            'state_id' => '5',
            'name' => 'Chennai'
        ]);
        Cities::create([
            'country_id' => '1',
            'state_id' => '5',
            'name' => 'Coimbatore'
        ]);
        Cities::create([
            'country_id' => '1',
            'state_id' => '5',
            'name' => 'Madurai'
        ]);
        Cities::create([
            'country_id' => '2',
            'state_id' => '6',
            'name' => 'Atlanta'
        ]);
        Cities::create([
            'country_id' => '2',
            'state_id' => '6',
            'name' => 'Columbus'
        ]);
        Cities::create([
            'country_id' => '2',
            'state_id' => '7',
            'name' => 'Dallas'
        ]);
        Cities::create([
            'country_id' => '2',
            'state_id' => '7',
            'name' => 'Houston'
        ]);
    }
}
