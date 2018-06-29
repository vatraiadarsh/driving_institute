@extends('adminlte::page')
@section('title','Duration')
@section('content_header')
<h1>
    Duration
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
    <li class="#">Duration</li>
    <li class="active"> Edit Duration</li>
  </ol>

@stop

@section('content')
<div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Create Course</h3>
        </div>

{!!Form::open(['url'=>'admin/duration/'.$duration->id,'method'=>'PUT',])!!}
<div class="box-body"><!-- main box -->
<div class="form-group">
        {{Form::Label('Duration Name')}}
        <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
        {{Form::text('duration_type',$duration->duration_type,['class'=>'form-control'])}}
    </div>
</div>

<div class="form-group">
        {{Form::Label('Status')}}
        <style>
           .slow .toggle-group { transition: left 0.7s; -webkit-transition: left 0.7s; }
         </style>
         <input type="checkbox" checked data-toggle="toggle" data-style="slow"  data-onstyle="success" data-offstyle="danger" data-size="mini" name="status">
    </div>

        <input type="hidden" name="id" value="{{$duration->id}}"/>
       <button type="submit" class="btn btn-success">Save</button>


   <a class="btn btn-danger" href="{{url('admin/duration')}}">Back</a>

   {!!Form::close()!!}
</div>
</div>
@stop


