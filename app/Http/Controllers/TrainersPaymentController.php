<?php

namespace App\Http\Controllers;

use App\TrainerPayment;
use App\Trainer;
use Illuminate\Http\Request;

class TrainersPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.payment.staffs.trainers.index',[
            'trainerPayments'=>TrainerPayment::paginate(7),

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.payment.staffs.trainers.create',[
            'trainers'=>Trainer::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $trainerPayment= new TrainerPayment();
        $trainerPayment->salary=$request->input('salary');
        $trainerPayment->bonus=$request->input('bonus');
        $trainerPayment->trainer_id=$request->input('trainer_id');
        $trainerPayment->save();
        return redirect('admin/payment/staffs/trainers');

        if($request->has('ctn')){
            return redirect('admin/payment/staffs/trainers/create');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TrainerPayment  $trainerPayment
     * @return \Illuminate\Http\Response
     */
    public function show(TrainerPayment $trainerPayment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TrainerPayment  $trainerPayment
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $trainerPayment=TrainerPayment::findOrFail($id);
        return view('admin.payment.students.edit',[
            'trainerPayment'=>$trainerPayment,
            'bookings'=>Booking::all(),

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TrainerPayment  $trainerPayment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TrainerPayment $trainerPayment)
    {
        $trainerPayment->salary=$request->input('salary');
        $trainerPayment->bonus=$request->input('bonus');
        $trainerPayment->trainer_id=$request->input('trainer_id');
        $trainerPayment->save();
        return redirect('admin/payment/staffs/trainers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TrainerPayment  $trainerPayment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $type=TrainerPayment::find($id);
        $type->delete();
        return redirect('admin/payment/staffs/trainers');
    }
}
