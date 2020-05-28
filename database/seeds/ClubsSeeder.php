<?php

use Illuminate\Database\Seeder;

use App\Club;

class ClubsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(!Club::count()){
            Club::insert([
                ['id' => 1, 'name' => 'Santos', 'country_id' => 1],
                ['id' => 2, 'name' => 'Sao Paulo', 'country_id' => 1],
                ['id' => 3, 'name' => 'Corinthians', 'country_id' => 1 ],
                ['id' => 4, 'name' => 'Cosmos', 'country_id' => 2]
            ]);
        }
    }
}
