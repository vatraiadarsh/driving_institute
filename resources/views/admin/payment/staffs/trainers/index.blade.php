@extends('adminlte::page')
@section('title', 'Trainers Payment')
@section('content_header')

    <h1>
      Shift
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
      <li class="active">Trainers Payment</li>
    </ol>

@stop

@section('content')

<div class="box">
        <div class="box-header">
          <h3 class="box-title">Data Table With Full Features</h3>
          <div class="box-tools">
        <a href="{{url('admin/payment/staffs/trainers/create')}}" class="btn btn-primary btn-xs" title="Add Duration">
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
        <th>Trainer Name</th>
        <th>Monthly Salary</th>
        <th>Bonus</th>
        <th>Salary Taken</th>
        <th>Salary Left</th>
        <th>Action</th>
    </tr>
</thead>

    @foreach($trainerPayments as $trainerPayment)
    <tbody>
        <tr>
            <td>{{$trainerPayment->id}}</td>
            <td>{{ $trainerPayment->trainer->fullName()}}</td>
            <td>Rs&nbsp;{{$trainerPayment->salary}}</td>
            <td>{{$trainerPayment->bonus}}</td>
            <td></td>
            <td></td>

            <td>
                <form method="post" action="{{url('admin/payment/staffs/trainers/'.$trainerPayment->id)}}">
                    <a href="{{url('admin/payment/staffs/trainers/'.$trainerPayment->id.'/edit')}}" class="btn btn-success btn-xs" title="Edit Shift">
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
{{ $trainerPayments->links() }}

@stop

