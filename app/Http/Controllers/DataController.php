<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Datatables;
 /*
    * All models whose data is to be retrived from database goes here
 */

use App\User;
use App\Course;
use App\Enquiry;
use App\Trainer;


class DataController extends Controller
{

    public function userdata()
    {
        return view('admin.data.userdata');
    }

    public function userajax()
    {
        return Datatables::of(User::query())->make(true);
    }


    public function coursedata()
    {
        return view('admin.data.coursedata');
    }

    public function courseajax()
    {
        return Datatables::of(Course::query())->make(true);
    }

    public function enquirydata()
    {
        return view('admin.data.enquirydata');
    }

    public function enquiryajax()
    {
        return Datatables::of(Enquiry::query())->make(true);
    }


    public function trainerdata()
    {
        return view('admin.data.trainerdata');
    }

    public function trainerajax()
    {
     return Datatables::of(Trainer::query())->make(true);
    }





}


