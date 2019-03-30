<?php

use Illuminate\Database\Seeder;

class GameSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'home_team_id' => 1, 'away_team_id' => 2, 'begins' => '2018-08-01 11:00:00', 'result1' => null, 'result2' => null,],
            ['id' => 2, 'home_team_id' => 2, 'away_team_id' => 1, 'begins' => '2018-07-18 08:30:00', 'result1' => 90, 'result2' => 80,],

        ];

        foreach ($items as $item) {
            \App\Game::create($item);
        }
    }
}
