<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table='bookings';

    public function enquiry(){
        return $this->belongsto('App\Enquiry');
    }

    public function trainer(){
        return $this->belongsto('App\Trainer');
    }

}
