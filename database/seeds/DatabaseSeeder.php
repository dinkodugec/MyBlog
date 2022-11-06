<?php

use Faker\Factory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

         /*  DB::statement('SET FOREIGN_KEY_CHECKS=0');
          DB::table('users')->truncate();
          DB::table('posts')->truncate();
          DB::table('roles')->truncate();
          DB::table('categories')->truncate();
          DB::table('photos')->truncate();
          DB::table('comments')->truncate();
          DB::table('comments_replies')->truncate();

          factory(App\User::class, 10)->create()->each(function($user){

          $user->posts()->save(factory(App\Post::class)->make()); 

          }); */
         factory('App\User', 10)->create()->each(function($user){
         $user->posts()->save(factory(App\Post::class)->make()); //create 10 users and posts also

         }); 
        /*  $this->call(UserSeeder::class); */
    }
}