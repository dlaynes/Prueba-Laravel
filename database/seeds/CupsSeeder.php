<?php

use Illuminate\Database\Seeder;

use App\Cup;

class CupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(!Cup::count()){
            Cup::insert([
                ['id' => 1, 'year' => '1970', 'country_id' => 3],
            ]);
        }
    }
}
