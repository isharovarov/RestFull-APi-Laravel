<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'body'        => $faker->realText(100),
        'user_id'     => \App\User::all()->random()->id,
        'document_id' => \App\Document::all()->random()->id,
        'created_at'  => now()
    ];
});
