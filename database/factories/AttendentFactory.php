<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Attendent;
use Faker\Generator as Faker;

$factory->define(Attendent::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'phone_no'=>$faker->phoneNumber,
        'email'=>$faker->safeEmail,
        'address'=>$faker->address,
        'course_id'=>rand(1,20),
    ];
});
