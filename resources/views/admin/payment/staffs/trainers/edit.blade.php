@extends('adminlte::page')
@section('title','Trainers')
@section('content_header')
<h1>
    Add Trainers Payment
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
    <li class="#">Payment</li>
    <li class="active">Add Trainers Payment</li>
  </ol>
@stop
trainerPayment

@section('content')
<!-- Input addon -->
<div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Add Payment</h3>

        </div>
@section('content')
<div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Create Shift</h3>
        </div>

{!!Form::open(['url'=>'admin/payment/staffs/trainers'.$trainerPayment->id,'method'=>'PUT',])!!}

<div class="box-body"><!-- main box -->
    <div class="form-group">
        {{Form::Label('Salary')}}
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
            {{Form::text('salary',$trainerPayment->salary,['class'=>'form-control','placeholder' => 'eg: salary'])}}

        </div>
    </div>

    <div class="form-group">
        {{Form::Label('Festival Bonus')}}
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-smile-o"></i></span>
            {{Form::text('bonus',$trainerPayment->bonus,['class'=>'form-control','value'=>'0'])}}

        </div>
    </div>
    <div class="form-group">
        {{Form::Label('Trainer Name')}}
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-id-badge"></i></span>
              <select class="js-dropdown" style="width: 100%;" name="trainer_id">
                        <option selected="selected">--select--</option>
                       @foreach ($trainers as $t)
                     <option value="{{$t->id}}"
                        selected
                        >{{$t->fullName()}}</option>
                       @endforeach
                      </select>
            </div>
</div>


        <input type="hidden" name="id" value="{{$shift->id}}"/>
       <button type="submit" class="btn btn-success">Save</button>


   <a class="btn btn-danger" href="{{url('admin/shift')}}">Back</a>

   {!!Form::close()!!}
</div>
</div>
@stop


