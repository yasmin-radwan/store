<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Contact;
use Faker\Generator as Faker;

$factory->define(Contact::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email'=>$faker->email,
        'mobile'=>$faker->phoneNumber,
        'address'=>$faker->address,
        'message'=>$faker->paragraph(3)
    ];
});
