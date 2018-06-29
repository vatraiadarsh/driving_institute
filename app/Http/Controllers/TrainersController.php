<?php

namespace App\Http\Controllers;

use App\Trainer;
use Illuminate\Http\Request;

class TrainersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.trainers.index',[
            'trainers'=>Trainer::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.trainers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $trainer = new Trainer();
        $trainer->first_name=$request->input('first_name');
        $trainer->last_name=$request->input('last_name');
        $trainer->email=$request->input('email');
        $trainer->cont_no=$request->input('cont_no');
        $trainer->save();
        return redirect('admin/trainers');

        if ($request->has('ctn')){
            return redirect('admin/trainers/create');
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Trainer  $trainer
     * @return \Illuminate\Http\Response
     */
    public function show(Trainer $trainer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Trainer  $trainer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $trainer=Trainer::findOrFail($id);
        return view('admin.trainers.edit',[
            'trainers'=>$trainer
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Trainer  $trainer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trainer $trainer)
    {
        $trainer->first_name=$request->input('first_name');
        $trainer->last_name=$request->input('last_name');
        $trainer->email=$request->input('email');
        $trainer->cont_no=$request->input('cont_no');
        $trainer->save();
        return redirect('admin/trainers');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Trainer  $trainer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $type=Trainer::find($id);
        $type->delete();
        return redirect('admin/trainers');
    }
}
