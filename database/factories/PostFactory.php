<?php

use Faker\Generator as Faker;
use Faker\Provider\en_US\Text;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Post::class, function (Faker $faker) {
    $text = new Text($faker);
    return [
        'title' => $text->realText(200, 2),
        'short_description' => $text->realText(200, 2),
        'content' => $text->realText(200, 2),
        'author_id' => \mt_rand(1,10),
    ];
});
