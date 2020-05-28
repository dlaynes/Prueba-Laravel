<?php

use Illuminate\Database\Seeder;

use App\Player;

class PlayersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(!Player::count()){
            Player::insert([
                ['id' => 1, 'name' => 'Edson', 'last_name' => 'Arantes', 'matches'=> 1351, 'goals' => 1284, 'country_id' => 1]
            ]);

            DB::table('club_player')->insert([
                ['club_id' => 1, 'player_id' => 1, 'started_on'=>'1956-09-07', 'ended_on'=>'1974-10-01'],
                ['club_id' => 4, 'player_id' => 1, 'started_on'=>'1975-06-11', 'ended_on'=>'1977-10-01'],
            ]);
        }
    }
}
