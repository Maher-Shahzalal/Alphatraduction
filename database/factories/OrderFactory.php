<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;




$factory->define(Order::class, function (Faker $faker) {
    return [
        'First_name' => $faker->sentence(5),
        'Last_name' => $faker->sentence(5),
        'Email'      => $faker->sentence(5),
        'whatsapp_number' => $faker->numberBetween(12),
        'Message' => $faker->sentence(5)
    ];
});

/**
public function definition()
{
	 return [
        'First_name' => $this->faker->First_name,
        'Last_name'  => $this->faker->Last_name,,
        'Email'      => $this->faker->Email,
        'whatsapp_number' => $this->faker->whatsapp_number,
        'Message' => $this->faker->Message,
    ];
}
**/
