@extends('adminlte::page')
@section('title','Duration')
@section('content_header')
<h1>
    Add Duration
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
    <li class="#">Duration</li>
    <li class="active">Add Duration</li>
  </ol>
@stop


@section('content')
<!-- Input addon -->
<div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Add Duration Types</h3>

        </div>
{!!Form::open(['url'=>'admin/duration','method'=>'post'])!!}

<div class="box-body"><!-- main box -->
<div class="form-group">
        {{Form::Label('Duration Type')}}
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
            {{Form::text('duration_type','',['class'=>'form-control','placeholder' => 'eg: week'])}}

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

<a class="btn btn-danger" href="{{url('admin/duration')}}">Back</a>
</div>
</div>
{!!Form::close()!!}
@stop

