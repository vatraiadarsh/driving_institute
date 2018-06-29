@extends('adminlte::page')

@section('title', 'Booking')

@section('content_header')
<h1>.</h1>
  <ol class="breadcrumb">
    <li><a href="/admin"><i class="fa fa-dashboard"></i>Dashboard</a></li>
    <li class="#">Booking</li>
    <li class="active"> Create Booking</li>
  </ol>
@stop

@section('content')
<!-- Input addon -->
<div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Create Booking</h3>
        </div>

    {!!Form::open(['url'=>'admin/bookings','method'=>'post',])!!}

    <div class="box-body"><!-- main box -->
        <div class="form-group">
                    {{Form::Label('Enquiry Id')}}
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-id-badge"></i></span>
                          <select class="js-dropdown" style="width: 100%;" name="enquiry_id">
                                    <option selected="selected">--select--</option>
                                   @foreach ($enquiries as $e)
                                 <option value="{{$e->id}}">{{$e->name}}&#44;&nbsp;&nbsp;{{$e->course->name}} {{$e->course->duration}} {{$e->course->durationType->duration_type}}</option>
                                   @endforeach
                                  </select>
                        </div>
            </div>

        <div class="form-group">
            {{Form::Label('Trainer id')}}
                <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-id-badge"></i></span>
                          <select class="js-dropdown" style="width: 100%;" name="trainer_id">
                                    <option selected="selected">--select--</option>
                                   @foreach ($trainers as $t)
                                 <option value="{{$t->id}}">{{$t->first_name}}&nbsp;{{$t->last_name}}</option>
                                   @endforeach
                                  </select>
                        </div>
        </div>

        <div class="form-group">
                {{Form::Label('Advanced')}}
                    <div class="input-group">
                        <span class="input-group-addon"><b>Rs</b></i></span>
                        {{Form::text('advance','',['class'=>'form-control','placeholder' => 'Enter Email'])}}
                         <span class="input-group-addon">.00</span>
                    </div>
            </div>

            <div class="form-group">
                    {{Form::Label('Discount')}}
                        <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                        {{Form::text('discount','',['class'=>'form-control','placeholder' => 'Enter Email'])}}
                         <span class="input-group-addon">%</span>
                    </div>
            </div>

             <div class="form-group">
                    {{Form::Label('Booked Date')}}
                        <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-bookmark"></i></span>
                        {{Form::text('booked_date','',['class'=>'form-control','placeholder' => 'Enter Email'])}}

                    </div>
            </div>



    </div><!-- end of main box -->






</div>

    <button type="submit" class="btn btn-primary">Save</button>
    <button type="submit" name="ctn" class="btn btn-primary">Save & Continue
    </button>
    <a class="btn btn-danger" href="{{url('admin/bookings')}}">Back</a>
{!!Form::close()!!}

@stop

