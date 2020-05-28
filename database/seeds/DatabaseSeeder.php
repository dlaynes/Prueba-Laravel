<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CountriesSeeder::class);
        $this->call(ClubsSeeder::class);
        $this->call(CupsSeeder::class);
        $this->call(PlayersSeeder::class);
    }
}
