<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Role;
use App\Post;
use App\Photo;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) { // function brings back a $faker, what is object and library
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
       /*  'role_id'=>Str::random(10),
        'is_active'=>Str::random(10), */
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

 /* $factory->define(Post::class, function (Faker $faker) {
    return [
        'category_id' => $faker->nunberBetween(1,10),
        'photo_id' => $faker->unique()->safeEmail,
        'title'=>$faker->sentence(7,11),
        'body' =>$faker->paragraphs(rand(10,15), true),
        'slug' => $faker->slug()
    ];
}); 
 */

 /* $factory->define(Role::class, function (Faker $faker) {
    return [
        'name'=> $faker->randomElement(['administrator', 'author', 'subscriber']),
    ];
}); 
 */

  /* $factory->define(Category::class, function (Faker $faker) {
    return [
        'name'=> $faker->randomElement(['PHP', 'Programing', 'Javascript', 'Life', 'Travel', 'Cofee']),
    ];
}); 
 */

 /* $factory->define(Photo::class, function (Faker $faker) {
    return [
        'file'=> 'placeholder.jpg'
    ];
}); 
 */