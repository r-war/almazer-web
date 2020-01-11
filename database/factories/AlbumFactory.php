<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Album;
use App\albumPicture;
use Faker\Generator as Faker;

$autoIncrement = autoIncrement();
$factory->define(Album::class, function (Faker $faker) use ($autoIncrement) {
    $autoIncrement->next();
    return [
        'index'=> $autoIncrement->current(),
        'name' => $faker->monthName . '-' .$faker->year,
        'picture'=> $faker->imageUrl($width= 480, $height= 200),


    ];
});

$factory->define(albumPicture::class, function (Faker $faker) use ($autoIncrement){
    $autoIncrement->next();
    return [
        'index' => $autoIncrement->current(),
        'name'  => $faker->name,
        'description' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'picture'   => $faker->imageUrl($width = 480, $height = 200),
        'url'       => $faker->url,
    ];
});

function autoIncrement(){
    for($i=0; $i<=100; $i++){
        yield $i;
    }
}
