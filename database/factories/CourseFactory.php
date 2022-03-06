<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Course;
use Faker\Generator as Faker;

$factory->define(Course::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'group'=>$faker->name,
        'lecturer'=>$faker->name,
        'language_id'=>rand(1,3),
        'start_date'=>$faker->date,
        'remark'=>$faker->paragraph,
        'user_id'=>rand(1,2),

    ];
});
