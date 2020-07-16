<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\City;
use App\Country;
use App\Department;
use App\Division;
use App\State;

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'username' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'lastname' => null,
        'firstname' => null,
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Employee::class, function (Faker\Generator $faker) {
    $country = Country::inRandomOrder()->first();
    $state = State::inRandomOrder()->first();
    $city = City::inRandomOrder()->first();
    $department = Department::inRandomOrder()->first();
    $division = Division::inRandomOrder()->first();

    return [
        'lastname' => $faker->lastName,
        'middlename' => $faker->name,
        'firstname' => $faker->firstName,
        'address' => $faker->address,
        'city_id' => $city->id,
        'state_id' => $state->id,
        'country_id' => $country->id,
        'zip' => $faker->postcode,
        'age' => rand(18, 50),
        'birthdate' => $faker->dateTimeBetween('-30 years', '-20 years'),
        'date_hired' => \Carbon\Carbon::now()->format('Y-m-d'),
        'department_id' => $department->id,
        'division_id' => $division->id,
        'picture' => '../avatars/default.jpg'
    ];
});