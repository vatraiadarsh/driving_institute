@extends('adminlte::page')
@section('title', ' Student Payments')
@section('content_header')

    <h1>
        Students
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
      <li class="active">Students</li>
    </ol>

@stop

@section('content')

<div class="box">
        <div class="box-header">
          <h3 class="box-title">Data Table With Full Features</h3>
          <div class="box-tools">
        <a href="{{url('admin/payment/students/create')}}" class="btn btn-primary btn-xs" title="Add Students">
            <span class="fa fa-plus"></span>
        </a>
      </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table id="enquiry-table" class="table table-bordered table-striped">
<thead>
    <tr>
        <th>Id</th>
        <th>Student Name</th>
        <th>Course Name</th>
        <th>Course Duration</th>
        <th>Fees</th>
        <th>Advance Given</th>
        <th>Discount <b>%</b></th>
        <th>Discount Amount</th>
        <th>Payable Amount</th>

        <th>Advance - Discount</th>
        <th>Action</th>
    </tr>
</thead>

    @foreach($studentPayments as $studentPayment)
    <tbody>
        <tr>
            <td>{{ $studentPayment->id }}</td>
            <td>{{ $studentPayment->booking->enquiry->name }}</td>
            <td>{{ $studentPayment->booking->enquiry->course->name }}</td>
            <td>{{ $studentPayment->booking->enquiry->course->duration }}&nbsp;{{ $studentPayment->booking->enquiry->course->durationType->duration_type }}</td>
            <td>{{ $studentPayment->booking->enquiry->course->fees }} </td>
            <td>{{ $studentPayment->booking->advance}}</td>
            <td>{{ $studentPayment->booking->discount }}</td>
            <td>{{ $studentPayment->discountAmount() }}</td>
            <td>{{ $studentPayment->payableAmount()}}</td>


            <td>{{ $studentPayment->Advanceminusdiscount()}}</td>
            <td>
                <form method="post" action="{{url('admin/payment/students/'.$studentPayment->id)}}">
                    <a href="{{url('admin/payment/students/'.$studentPayment->id.'/edit')}}" class="btn btn-success btn-xs" title="Edit Students Payment">
                        <span class="glyphicon glyphicon-pencil"></span>
                    </a>
                    {{csrf_field()}}

                        <button type="submit" class="btn btn-danger btn-xs">
                            <span class="glyphicon glyphicon-trash"></span>
                            <input type="hidden" name="_method" value="DELETE">
                        </button>
                </form>
            </td>
        </tr>
    <tbody>
    @endforeach

</table>
{{ $studentPayments->links() }}

@stop

