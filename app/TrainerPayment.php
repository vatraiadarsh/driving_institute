<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrainerPayment extends Model
{
    protected $table='trainers_payment';

    public function trainer(){
        return $this->belongsto('App\Trainer');
    }
}

