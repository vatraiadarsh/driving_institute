<?php

namespace App\Http\Controllers;
use App\Course;

abstract class AdminController extends Controller{
    public $totalCourses=0;

    public function __construct(){
        $this->totalCourses=Course::where(['status' => 1])->get()->count();
      
    }
}
