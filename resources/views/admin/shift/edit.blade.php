@extends('adminlte::page')
@section('title','Shift')
@section('content_header')
<h1>
    Shift
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
    <li class="#">Shift</li>
    <li class="active"> Edit Shift</li>
  </ol>

@stop

@section('content')
<div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Create Shift</h3>
        </div>

{!!Form::open(['url'=>'admin/shift/'.$shift->id,'method'=>'PUT',])!!}
<div class="box-body"><!-- main box -->
<div class="form-group">
        {{Form::Label('Shift Name')}}
        <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-exchange"></i></span>
        {{Form::text('shift',$shift->shift,['class'=>'form-control'])}}
    </div>
</div>

<div class="form-group">
        {{Form::Label('Status')}}
        <style>
           .slow .toggle-group { transition: left 0.7s; -webkit-transition: left 0.7s; }
         </style>
         <input type="checkbox" checked data-toggle="toggle" data-style="slow"  data-onstyle="success" data-offstyle="danger" data-size="mini" name="status">
    </div>

        <input type="hidden" name="id" value="{{$shift->id}}"/>
       <button type="submit" class="btn btn-success">Save</button>


   <a class="btn btn-danger" href="{{url('admin/shift')}}">Back</a>

   {!!Form::close()!!}
</div>
</div>
@stop


