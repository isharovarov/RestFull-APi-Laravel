<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Document;
use Faker\Generator as Faker;

$factory->define(Document::class, function (Faker $faker) {
    return [
        'title'      => $faker->text(150),
        'body'       => $faker->realText(300),
        'user_id'    => \App\User::all()->random()->id,
        'created_at' => now()
    ];
});
