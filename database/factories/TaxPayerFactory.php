<?php
use Faker\Generator as Faker;

$factory->define(App\TaxPayer::class, function (Faker $faker) {
    return [
        'first_name' => $faker->name,
        'last_name' => $faker->unique()->safeEmail,
        'tin' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});