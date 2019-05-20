<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;
use App\Transaction;

$factory->define(Transaction::class, function (Faker $faker) {
    $number = $faker->unique()->unixTime();
    return [
        'code' =>  "TR-#".$number,
        'name' => $faker->randomElement
        (
            [
                'Nasi Goreng, Mie Goreng, Es Teh',
                'Nasi Goreng',
                'Es Teh, Mie Goreng',
                'Mie Goreng',
                'Nasi Goreng, Es Teh, Es Degan'
            ]
        )
    ];
});
