@extends('adminlte::page')
@section('title', 'Courses')

@section('content_header')
<h1>
    Edit Courses
  </h1>
  <ol class="breadcrumb">
    <li><a href="/admin"><i class="fa fa-dashboard"></i>Dashboard</a></li>
    <li class="#">courses</li>
    <li class="active"> Edit Courses</li>
  </ol>
@stop
@section('content')
<!-- Input addon -->
<div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Create Course</h3>
    </div>

    {!!Form::open(['url'=>'admin/courses/'.$courses->id,'method'=>'PUT',])!!}

    <div class="box-body"><!-- main box -->
        <div class="form-group">
            {{Form::Label('Course Name')}}
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-book text-aqua"></i></span>
                {{Form::text('name',$courses->name,['class'=>'form-control'])}}

            </div>
        </div>

        <div class="form-group">
            {{Form::Label('Description')}}
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-book"></i></span>
                {{Form::textarea('desc',$courses->desc,['class'=>'form-control'])}}
            </div>
        </div>
        <div class="form-group">
            {{Form::Label('Fees')}}
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                {{Form::text('fees',$courses->fees,['class'=>'form-control'])}}
                <span class="input-group-addon">.00</span>
            </div>
        </div>
        <div class="form-group">
            {{Form::Label('Duration')}}
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                {{Form::text('duration',$courses->duration,['class'=>'form-control'])}}
            </div>
        </div>
        <div class="form-group">
            {{Form::Label('Duration Types')}}
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-shirtsinbulk"></i></span>
                    <select class="js-dropdown" style="width: 100%;" name="duration_type">
                            <option selected="selected">--select--</option>
                            @foreach($durations as $d)
                            <option value="{{$d->id}}"
                           selected
                           {{-- just write selected in hare to get selected in dropdown --}}
                            >{{$d->duration_type}}</option>
                            @endforeach
                        </select>
            </div>
        </div>
        <div class="form-group">
            {{Form::Label('Shift')}}
            <div class="input-group">
                <label class="radio-inline"><input type="radio" value="morning" name="shift"
                @if($courses->shift == 'morning') checked="checked" @endif
                > Morning </label>

                <label class="radio-inline"><input type="radio" value="day" name="shift"
                @if($courses->shift == 'day') checked="checked" @endif
                > Day </label>

                <label class="radio-inline"><input type="radio" value="evening" name="shift"
                @if($courses->shift == 'evening') checked="checked" @endif
                > Evening </label>

            </div>
        </div>




        <div class="form-group">
                {{Form::Label('Status')}}
                <style>
                   .slow .toggle-group { transition: left 0.7s; -webkit-transition: left 0.7s; }
                 </style>
                 <input type="checkbox" checked data-toggle="toggle" data-style="slow"  data-onstyle="success" data-offstyle="danger" data-size="mini" name="status">
            </div>
     <br>


    <button type="submit" class="btn btn-primary">Save</button>
    <a class="btn btn-danger" href="{{url('admin/courses')}}">Back</a>
{!!Form::close()!!}
@stop
