@extends('adminlte::page')
@section('title','Shift')
@section('content_header')
<h1>
    Add Shift
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
    <li class="#">Shift</li>
    <li class="active">Add Shift</li>
  </ol>
@stop


@section('content')
<!-- Input addon -->
<div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Add Shift</h3>

        </div>
{!!Form::open(['url'=>'admin/shift','method'=>'post'])!!}

<div class="box-body"><!-- main box -->
<div class="form-group">
        {{Form::Label('Shift')}}
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-exchange"></i></span>
            {{Form::text('shift','',['class'=>'form-control','placeholder' => 'eg: morning'])}}

        </div>
    </div>


    <div class="form-group">
            {{Form::Label('Status')}}
            <style>
               .slow .toggle-group { transition: left 0.7s; -webkit-transition: left 0.7s; }
             </style>
             <input type="checkbox" checked data-toggle="toggle" data-style="slow"  data-onstyle="success" data-offstyle="danger" data-size="mini" name="status">
        </div>



    <button type="submit" class="btn btn-success">Save</button>

    <button type="submit" name="ctn" class="btn btn-primary">Save & Continue
    </button>

<a class="btn btn-danger" href="{{url('admin/shift')}}">Back</a>
</div>
</div>
{!!Form::close()!!}
@stop

