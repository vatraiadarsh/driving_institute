<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    Protected $table = 'enquiries';


    public function course(){
        return $this->belongsto('App\Course');
    }
}
