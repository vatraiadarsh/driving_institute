@extends('adminlte::page')

@section('title', 'Enquiry')

@section('content_header')
<h1>
    Edit Enquiry
  </h1>
  <ol class="breadcrumb">
    <li><a href="/admin"><i class="fa fa-dashboard"></i>Dashboard</a></li>
    <li class="#">Enquiry</li>
    <li class="active"> Edit Enquiries</li>
  </ol>
@stop
@section('content')
<!-- Input addon -->
<div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">EditEnquiry</h3>
        </div>

    {!!Form::open(['url'=>'admin/enquiries/'.$enquiry->id,'method'=>'PUT',])!!}

    <div class="box-body"><!-- main box -->
        <div class="form-group">
            {{Form::Label('Full Name')}}
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                {{Form::text('name',$enquiry->name,['class'=>'form-control','placeholder' => 'Enter the full name'])}}


            </div>
        </div>

        <div class="form-group">
            {{Form::Label('Date of Birth')}}
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-birthday-cake"></i></span>
                    {{Form::date('dob',$enquiry->dob,['class'=>'form-control'])}}

                </div>
        </div>

        <div class="form-group">
                {{Form::Label('Email')}}
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        {{Form::email('email',$enquiry->email,['class'=>'form-control', 'placeholder' => 'example@yourdomain.com'])}}

                    </div>
            </div>

            <div class="form-group">
                    {{Form::Label('Contact No')}}
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                            {{Form::text('cont_no',$enquiry->cont_no,['class'=>'form-control'])}}

                        </div>
            </div>

            <div class="form-group">
                    {{Form::Label('Shift')}}
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-shirtsinbulk"></i></span>
                            {{Form::text('shift',$enquiry->shift,['class'=>'form-control',])}}
                            <select class="js-dropdown" style="width: 100%;" name="shift">
                                <option selected="selected">--select--</option>
                                   @foreach ($shifts as $shift)
                                 <option value="{{$d->id}}"
                                 selected
                                 >{{$d->shift}}</option>
                                   @endforeach
                                  </select>

                                  </select>

                        </div>
            </div>


            <div class="form-group">
                    {{Form::Label('Course Id')}}
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-id-badge"></i></span>
                            <select class="js-dropdown" style="width: 100%;" name="course_id">
                                    <option selected="selected">--select--</option>
                                   @foreach ($courses as $c)
                                 <option value="{{$c->id}}"
                                 selected
                                 >{{$c->name}}</option>
                                   @endforeach
                                  </select>
                        </div>
            </div>

            <div class="form-group">
                    {{Form::Label('Time')}}
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                            {{Form::time('timing',$enquiry->timing,['class'=>'form-control','palceholder'=>'Please Enter your Prefferen Timing'])}}
                        </div>
            </div>

    </div><!-- end of main box -->



    <button type="submit" class="btn btn-primary">Save</button>
    <a class="btn btn-danger" href="{{url('admin/enquiries')}}">Back</a>
{!!Form::close()!!}

@stop


@section('css')
<!--Toggle Button-->
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
@stop

@section('js')
<!--Toggle Button-->
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
@stop

