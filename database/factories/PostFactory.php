<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        //
    	"text" => $faker->paragraph(),
    	"user_id" => rand(1,50),
    	"imatge" => "1",
    ];
});
