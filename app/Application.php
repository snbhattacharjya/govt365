<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    public function category(){
      $this->hasOne('App\Category');
    }
}
