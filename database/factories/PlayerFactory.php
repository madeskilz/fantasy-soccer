<?php

$factory->define(App\Player::class, function (Faker\Generator $faker) {
    return [
        "team_id" => factory('App\Team')->create(),
        "name" => $faker->name,
        "birth" => $faker->date("Y-m-d", $max = 'now'),
    ];
});
