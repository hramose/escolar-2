<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    public function facultad(){
    	return $this->belongsTo('App\Facultad');
    }
}
