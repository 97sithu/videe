<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Language;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Language::class, function (Faker $faker) {
    return [
        'name'=>ucwords($faker->word)
            ];
});
