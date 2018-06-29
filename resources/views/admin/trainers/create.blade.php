@extends('adminlte::page')

@section('title', 'Trainers ')


@section('content_header')
<h1>
    Add New Trainers
  </h1>
  <ol class="breadcrumb">
    <li><a href="/admin"><i class="fa fa-dashboard"></i>Dashboard</a></li>
    <li class="#">Trainers</li>
    <li class="active"> Add New Trainers</li>
  </ol>

@stop
@section('content')
<!-- Input addon -->
<div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Create Enquiry</h3>
        </div>


    {!!Form::open(['url'=>'admin/trainers','method'=>'post',])!!}
<div class="box-body"><!-- main box -->
    <div class="form-group">
        {{Form::Label('First Name')}}
        <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
        {{Form::text('first_name','',['class'=>'form-control','placeholder' => 'Enter your first name'])}}
        </div>
    </div>

    <div class="form-group">
        {{Form::Label('Last Name')}}
        <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user-o"></i></span>
        {{Form::text('last_name','',['class'=>'form-control', 'placeholder' => 'Enter your last name'])}}
        </div>
    </div>

    <div class="form-group">
        {{Form::Label('Email')}}
        <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
        {{Form::email('email','',['class'=>'form-control', 'placeholder' => 'example@yourdomain.com'])}}
        </div>
    </div>

    <div class="form-group">
        {{Form::Label('Contact No')}}
        <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
        {{Form::text('cont_no','',['class'=>'form-control','palceholder' => 'Enter your contact No'])}}
        </div>
    </div>

</div>
</div><!-- end of main box -->

    <button type="submit" class="btn btn-primary">Save</button>
    <button type="submit" name="ctn" class="btn btn-primary">Save & Continue
    </button>
    <a class="btn btn-danger" href="{{url('admin/trainers')}}">Back</a>
{!!Form::close()!!}

@stop
