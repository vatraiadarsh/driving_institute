<?php

namespace App\Http\Controllers;

use App\Shift;
use Illuminate\Http\Request;

class ShiftController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.shift.index',[
            'shifts'=>Shift::paginate(7)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.shift.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $shift=new Shift();
        $shift->shift=$request->input('shift');
        $shift->status=$request->has('status');
        $shift->save();
        if($request->has('ctn')){
            return redirect('admin/shift/create');
        }
        if ($request->has('redirect')){
            return redirect('admin/courses/create');
        }

        return redirect('admin/shift');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Shift  $shift
     * @return \Illuminate\Http\Response
     */
    public function show(Shift $shift)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Shift  $shift
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $shift=Shift::findOrFail($id);
        return view('admin.shift.edit',[
            'shift'=>$shift
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Shift  $shift
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shift $shift)
    {
        $shift=Shift::find($request->input('id'));
        $shift->shift=$request->input('shift');
        $shift->status=$request->has('status');
        $shift->save();
        return redirect('admin/shift');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Shift  $shift
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $type=Shift::find($id);
        $type->delete();
        return redirect('admin/shift');
    }

}
