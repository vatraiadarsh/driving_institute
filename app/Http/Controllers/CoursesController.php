<?php

namespace App\Http\Controllers;

use App\Course;
use App\DurationType;
use Illuminate\Http\Request;
use App\Http\Requests\CourseFormRequest;


class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.courses.index',[
            'courses'=>Course::paginate(7)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.courses.create',[
            'durations'=>DurationType::where('status', 1)->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CourseFormRequest $request)
    {
        $course= new Course();
        $course->name=$request->input('name');
        $course->desc=$request->input('desc');
        $course->fees=$request->input('fees');
        $course->duration=$request->input('duration');
        $course->duration_type_id=$request->input('duration_type');
        $course->shift=$request->input('shift');
        $course->status=$request->has('status');
        $course->save();

        if($request->has('ctn')){
            return redirect('admin/courses/create');
        }

        return redirect('admin/courses');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course=Course::findOrFail($id);
        return view('admin.courses.edit',[
            'courses'=>$course,
            'durations'=>DurationType::where('status',1)->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(CourseFormRequest $request, Course $course)
    {
        $course->name=$request->input('name');
        $course->desc=$request->input('desc');
        $course->fees=$request->input('fees');
        $course->duration=$request->input('duration');
        $course->status=$request->has('status');
        $course->duration_type_id=$request->input('duration_type');
        $course->shift=$request->input('shift');
        $course->save();
        return redirect('admin/courses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $type=Course::find($id);
        $type->delete();
        return redirect('admin/courses');
    }
}
