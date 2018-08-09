<?php
use Faker\Generator as Faker;

$factory->define(App\TaxPayer::class, function (Faker $faker) {
    return [
        'first_name' => $faker->name,
        'last_name' => $faker->name,
        'tin' => $faker->randomNumber, // secret
        'trade_name'=>$faker->companyName,
        'service_income'=>$faker->randomFloat,
        'commencemement_of_bussiness'=>$faker->word,
        'remember_token' => str_random(10),
    ];
}); // to be continued..