<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
   public function language(){
 	return $this->belongsTo('App\Language');
   }
   public function attendent(){
   	return $this->hasMany('App\Attendent');
   }
}
