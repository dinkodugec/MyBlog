<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $guarded= []; //https://codewithtravel.medium.com/laravel-mass-assignment-guarded-or-fillable-7c3a64b49ca6

   public function user()
   {
       return $this->belongsTo(User::class);  //each post has user
   }
}
