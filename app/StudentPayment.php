<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentPayment extends Model
{
    protected $table=('students_payment');

    public function booking(){
        return $this->belongsto('App\Booking');
    }

    public function discountAmount(){
        return $this->fees * (100-$this->discount)/100 ;
    }


    // public function payableAmount(){
    //     return $this->fees - ( $this->advance + $this->discountAmount);
    // }

    public function payableAmount(){
        return $this->fees - ( $this->advance + 500);
    }




}
