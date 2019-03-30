<?php

use Illuminate\Database\Seeder;

class PlayerSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'team_id' => 1, 'name' => 'SS Jamal', 'birth' => '1989-06-14',],
            ['id' => 2, 'team_id' => 2, 'name' => 'Wole Tunde', 'birth' => '1988-09-14',],

        ];

        foreach ($items as $item) {
            \App\Player::create($item);
        }
    }
}
