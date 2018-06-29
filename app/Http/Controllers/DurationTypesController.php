<?php

namespace App\Http\Controllers;

use App\DurationType;
use Illuminate\Http\Request;


class DurationTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.duration.index',[
            // //pagination little change in the main code
            //'durations'=>DurationType::all(){!main code}
            'durations'=>DurationType::paginate(7)

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.duration.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $duration=new DurationType();
        $duration->duration_type=$request->input('duration_type');
        $duration->status=$request->has('status');
        $duration->save();
        if($request->has('ctn')){
            return redirect('admin/duration/create');
        }

        if($request->has('redirect')){
            return redirect('admin/courses/create');
        }

        return redirect('admin/duration');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DurationType  $durationType
     * @return \Illuminate\Http\Response
     */
    public function show(DurationType $durationType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DurationType  $durationType
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $duration=DurationType::findOrFail($id);
        return view('admin.duration.edit',[
            'duration'=>$duration
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DurationType  $durationType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DurationType $durationType)
    {
        $durationType=DurationType::find($request->input('id'));
        $durationType->duration_type=$request->input('duration_type');
        $durationType->status=$request->has('status');
        $durationType->save();
        return redirect('admin/duration');

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DurationType  $durationType
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $type=DurationType::find($id);
        $type->delete();
        return redirect('admin/duration');
    }
}
