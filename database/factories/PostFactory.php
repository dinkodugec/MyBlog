<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {  //factory produce many dummy dataz
    return [
        'user_id'=>factory('App\User'),  //factory,helper function, creating lot of data reletaed with User class
        'title'=>$faker->sentence, 
        'post_image'=>$faker->imageUrl('900','300'),
        'body'=>$faker->paragraph
    ];
});