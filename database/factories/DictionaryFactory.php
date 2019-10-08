<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Dictionary;
use Faker\Generator as Faker;



$factory->define(Dictionary::class , function (Faker $faker){
    return [
        'word' => $faker->word,
        'translated_word' => 'translated',
    ];
});
