@extends('adminlte::page')

@section('title', 'Enquiries')

@section('content_header')
<h1>.</h1>
  <ol class="breadcrumb">
    <li><a href="/admin"><i class="fa fa-dashboard"></i>Dashboard</a></li>
    <li class="#">Enquiry</li>
    <li class="active"> Create Enquiry</li>
  </ol>
@stop

@section('content')
<!-- Input addon -->
<div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Create Enquiry</h3>
        </div>

    {!!Form::open(['url'=>'admin/enquiries','method'=>'post',])!!}

    <div class="box-body"><!-- main box -->
        <div class="form-group">
            {{Form::Label('Full Name')}}
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                {{Form::text('name','',['class'=>'form-control','placeholder' => 'Enter the full name',])}}

            </div>
        </div>

        <div class="form-group">
            {{Form::Label('Date of Birth')}}
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-birthday-cake"></i></span>
                    {{Form::date('dob','',['class'=>'form-control','placeholder' => 'Enter born date',])}}

                </div>
        </div>

        <div class="form-group">
                {{Form::Label('Email')}}
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        {{Form::text('email','',['class'=>'form-control','placeholder' => 'Enter Email'])}}

                    </div>
            </div>

            <div class="form-group">
                    {{Form::Label('Contact No')}}
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                            <input type="text" class="form-control" name="cont_no">

                        </div>
            </div>


            <div class="form-group">
                    {{Form::Label('Course Id')}}
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-id-badge"></i></span>
                          <select class="js-dropdown" style="width: 100%;" name="course_id">
                                    <option selected="selected">--select--</option>
                                   @foreach ($courses as $c)
                                 <option value="{{$c->id}}">{{$c->name}}&#44;&nbsp;&nbsp;{{$c->duration}} {{$c->durationType->duration_type}}</option>
                                   @endforeach
                                  </select>
                        </div>
            </div>

            <div class="form-group">
                    {{Form::Label('Time')}}
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                            {{Form::time('timing','',['class'=>'form-control',])}}

                        </div>
            </div>

    </div><!-- end of main box -->






</div>

    <button type="submit" class="btn btn-primary">Save</button>
    <button type="submit" name="ctn" class="btn btn-primary">Save & Continue
    </button>
    <a class="btn btn-danger" href="{{url('admin/enquiries')}}">Back</a>
{!!Form::close()!!}

@stop

