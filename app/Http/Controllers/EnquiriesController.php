<?php

namespace App\Http\Controllers;

use App\Enquiry;
use App\Course;
//to fetch Course
use Illuminate\Http\Request;
use App\Http\Requests\EnquiryFormRequest;

class EnquiriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.enquiry.index',[
            'enquiries'=>Enquiry::paginate(7)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.enquiry.create',[
         'courses'=>Course::where('status',1)->get(),
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EnquiryFormRequest $request)
    {

        $enquiry= new Enquiry();
        $enquiry->name=$request->input('name');
        $enquiry->dob=$request->input('dob');
        $enquiry->email=$request->input('email');
        $enquiry->cont_no=$request->input('cont_no');
        $enquiry->timing=$request->input('timing');
        $enquiry->course_id=$request->input('course_id');
        $enquiry->save();
        return redirect('admin/enquiries');

        if($request->has('ctn')){
            return redirect('admin/enquiry/create');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Enquiry  $enquiry
     * @return \Illuminate\Http\Response
     */
    public function show(Enquiry $enquiry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Enquiry  $enquiry
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $enquiry=Enquiry::findOrFail($id);
        return view('admin.enquiry.edit',[
            'enquiry'=>$enquiry,
            'courses'=>Course::where('status',1)->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Enquiry  $enquiry
     * @return \Illuminate\Http\Response
     */
    public function update(EnquiryFormRequest $request, Enquiry $enquiry)
    {
        $enquiry->name=$request->input('name');
        $enquiry->dob=$request->input('dob');
        $enquiry->email=$request->input('email');
        $enquiry->cont_no=$request->input('cont_no');
        $enquiry->timing=$request->input('timing');
        $enquiry->course_id=$request->input('course_id');
        $enquiry->save();
        return redirect('admin/enquiries');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Enquiry  $enquiry
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $type=Enquiry::find($id);
        $type->delete();
        return redirect('admin/enquiries');
    }

}

