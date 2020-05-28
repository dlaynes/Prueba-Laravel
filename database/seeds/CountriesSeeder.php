<?php

use Illuminate\Database\Seeder;

use App\Country;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(!Country::count()){
            Country::insert([
                ['id' => 1, 'name' => 'Brazil', 'code' => 'BR'],
                ['id' => 2, 'name' => 'USA', 'code' => 'US'],
                ['id' => 3, 'name' => 'Mexico', 'code' => 'MX' ],
            ]);
        }
    }
}
