@extends('adminlte::page')
@section('title','Students')
@section('content_header')
<h1>
    Add Student
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
    <li class="#">Student</li>
    <li class="active">Edit Student</li>
  </ol>
@stop


@section('content')
<!-- Input addon -->
<div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Add Shift</h3>

        </div>

{!!Form::open(['url'=>'admin/payment/students'.$studentPayment->id,'method'=>'PUT',])!!}

<div class="box-body"><!-- main box -->
    <div class="form-group">
        {{Form::Label('Student Name')}}
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-id-badge"></i></span>
                <select class="js-dropdown" style="width: 100%;" name="booking_id">
                    <option selected="selected">--select--</option>
                   @foreach ($bookings as $b)
                 <option value="{{$b->id}}"
                    selected
                    >{{$b->enquiry->name}}&#44;&nbsp;&nbsp;{{ $b->enquiry->course->name }}&nbsp;&nbsp;{{$b->enquiry->course->duration}} {{$b->enquiry->course->durationType->duration_type}}</option>
                   @endforeach
                  </select>
        </div>
    </div>


</div>



        <input type="hidden" name="id" value="{{$studentPayment->id}}"/>
       <button type="submit" class="btn btn-success">Save</button>


   <a class="btn btn-danger" href="{{url('admin/payment/students')}}">Back</a>

   {!!Form::close()!!}
</div>
</div>
@stop


