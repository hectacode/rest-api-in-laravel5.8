<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        //
    	'title' => $faker->text(50),
    	'alias' => $faker->slug(20),
        'content'  => $faker->text(200)
    ];
});
