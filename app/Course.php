<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table='courses';

    public function durationType(){
        return $this->belongsto('App\DurationType');
    }

    // public function shiftType(){
    //     return $this->hasMany('App\Shift');
    // }
}
