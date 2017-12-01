<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function applications(){
      $this->belongsToMany('App\Application');
    }
}
