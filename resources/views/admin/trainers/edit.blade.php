@extends('adminlte::page')

@section('title', 'Trainers')

@section('content_header')
<h1>
    Edit Trainers
  </h1>
  <ol class="breadcrumb">
    <li><a href="/admin"><i class="fa fa-dashboard"></i>Dashboard</a></li>
    <li class="#">Trainers</li>
    <li class="active"> Edit Trainers</li>
  </ol>
@stop
@section('content')
<!-- Input addon -->
<div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">EditEnquiry</h3>
        </div>


    {!!Form::open(['url'=>'admin/trainers/'.$trainers->id,'method'=>'PUT',])!!}
     <div class="box-body"><!-- main box -->
    <div class="form-group">
    
        {{Form::Label('Trainer Name')}}
        <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
        {{Form::text('first_name',$trainers->first_name,['class'=>'form-control'])}}
       </div>
    </div>

    <div class="form-group">
        {{Form::Label('Last Name')}}
        <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user-o"></i></span>
        {{Form::text('last_name',$trainers->last_name,['class'=>'form-control'])}}
        </div>
    </div>

    <div class="form-group">
        {{Form::Label('Email')}}
         <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
        {{Form::email('email',$trainers->email,['class'=>'form-control'])}}
        </div>  
    </div>

    <div class="form-group">
        {{Form::Label('Cont No')}}
        <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
        {{Form::text('cont_no',$trainers->cont_no,['class'=>'form-control'])}}
       
    </div>
</div>


    <button type="submit" class="btn btn-primary">Save</button>
    <a class="btn btn-danger" href="{{url('admin/courses')}}">Back</a>
{!!Form::close()!!}

@stop


