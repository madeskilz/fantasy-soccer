<?php

$factory->define(App\Game::class, function (Faker\Generator $faker) {
    return [
        "home_team_id" => factory('App\Team')->create(),
        "away_team_id" => factory('App\Team')->create(),
        "begins" => $faker->date("Y-m-d H:i:s", $max = 'now'),
        "result1" => $faker->randomNumber(2),
        "result2" => $faker->randomNumber(2),
    ];
});
