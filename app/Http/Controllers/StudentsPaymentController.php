<?php

namespace App\Http\Controllers;

use App\StudentPayment;
use App\Booking;
use Illuminate\Http\Request;

class StudentsPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.payment.students.index',[
            'studentPayments'=>StudentPayment::paginate(7),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.payment.students.create',[
            'bookings'=>Booking::all(),

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
        $studentPayment= new StudentPayment();
        $studentPayment->booking_id=$request->input('booking_id');
        $studentPayment->save();
        return redirect('admin/payment/students');

        if($request->has('ctn')){
            return redirect('admin/payment/students/create');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\StudentPayment  $studentPayment
     * @return \Illuminate\Http\Response
     */
    public function show(StudentPayment $studentPayment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StudentPayment  $studentPayment
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $studentPayment=StudentPayment::findOrFail($id);
        return view('admin.payment.students.edit',[
            'studentPayment'=>$studentPayment,
            'bookings'=>Booking::all(),

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StudentPayment  $studentPayment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StudentPayment $studentPayment)
    {
        $studentPayment->booking_id=$request->input('booking_id');
        $studentPayment->save();
        return redirect('admin/payment/students');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StudentPayment  $studentPayment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $type=StudentPayment::find($id);
        $type->delete();
        return redirect('admin/payment/students');
    }
}
