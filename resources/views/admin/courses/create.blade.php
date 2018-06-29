@extends('adminlte::page')

@section('title', 'Courses')

@section('content_header')
<h1>
    Create Courses
  </h1>
  <ol class="breadcrumb">
    <li><a href="/admin"><i class="fa fa-dashboard"></i>Dashboard</a></li>
    <li class="#">courses</li>
    <li class="active"> Create Courses</li>
  </ol>

@stop

@section('content')
<!-- Input addon -->
<div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Create Course</h3>
        </div>

    {!!Form::open(['url'=>'admin/courses','method'=>'post',])!!}

    <div class="box-body"><!-- main box -->
        <div class="form-group">
            {{Form::Label('Course Name')}}
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-book text-aqua"></i></span>
                {{Form::text('name','',['class'=>'form-control','placeholder' => 'Enter the Course name',])}}


            </div>
        </div>



            <div class="form-group">
                {{Form::Label(' Description')}}
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-book"></i></span>
                    {{Form::textarea('desc','',['class'=>'form-control', 'placeholder' => 'enter Course Description'])}}
                </div>
            </div>

            <div class="form-group">
                {{Form::Label(' fees')}}
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                    {{Form::text('fees','',['class'=>'form-control', 'placeholder' => '5000'])}}
                    <span class="input-group-addon">.00</span>
                </div>
            </div>

            <div class="form-group">
                {{Form::Label('Duration')}}
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                    {{Form::number('duration','',['class'=>'form-control',])}}
                </div>
            </div>

            <div class="form-group">
                {{Form::Label('Select Duration type')}}
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-shirtsinbulk"></i></span>
                    <select class="js-dropdown" style="width: 100%;" name="duration_type">
                            <option selected="selected">--select--</option>
                            @foreach($durations as $d)
                            <option value="{{$d->id}}">{{$d->duration_type}}</option>
                            @endforeach
                        </select>
                        <span class="input-group-addon" style="border-style:none">
                                <div class="box-tools">
                                        <a href="javascript:void(0)" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#duration-type-default" title="Add Duration Types">
                                            <span class="fa fa-plus"></span>
                                        </a>
                                      </div>
                        </span>
                </div>
            </div>

            {{-- <div class="form-group">
                {{Form::Label('Select Shift type')}}
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-shirtsinbulk"></i></span>
                    <select class="js-dropdown" style="width: 100%;" name="shift">
                            <option selected="selected">--select--</option>
                            @foreach($shifts as $s)
                            <option value="{{$s->id}}">{{$s->shift}}</option>
                            @endforeach
                        </select>
                        <span class="input-group-addon" style="border-style:none">
                                <div class="box-tools">
                                        <a href="javascript:void(0)" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#shift-default" title="Add shift">
                                            <span class="fa fa-plus"></span>
                                        </a>
                                      </div>
                        </span>
                    </div>
                </div> --}}
                <div class="form-group">
                     {{Form::Label('Shift')}}
                    <div class="input-group">
                        <label class="radio-inline"><input type="radio" value="morning" name="shift"> Morning  </label>
                        <label class="radio-inline"><input type="radio" value="day" name="shift">  Day </label>
                        <label class="radio-inline"><input type="radio" value="evening" name="shift">  Evening </label>
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
               <button type="submit" name="ctn" class="btn btn-primary">Save & Continue
               </button>
               <a class="btn btn-danger" href="{{url('admin/courses')}}">Back</a>
               {!!Form::close()!!}


</div>


<div class="modal fade" id="duration-type-default">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title">Add Duration Type</h4>
    </div>
    <div class="modal-body">
        {!!Form::open(['url'=>'admin/duration','method'=>'post'])!!}
        <div class="form-group">
            {{Form::Label('Duration Type')}}
            {{Form::text('duration_type','',['class'=>'form-control','placeholder' => 'eg: week','required'])}}
        </div>


        <div class="form-group">
             <span>{{Form::Label('Status')}}</span>
            <style>
                .slow .toggle-group { transition: left 0.7s; -webkit-transition: left 0.7s; }
            </style>
                <input type="checkbox" checked data-toggle="toggle" data-style="slow" name="status">
        </div>
               <br>

    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
      <button type="submit" name="redirect" class="btn btn-primary">Save</button>
    </div>
    {!!Form::close()!!}

  </div>
  <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal duration type -->



<div class="modal fade" id="shift-default">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title">Add shift</h4>
    </div>
    <div class="modal-body">

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



    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
      <button type="submit" name="redirect" class="btn btn-primary">Save</button>
    </div>
    {!!Form::close()!!}

  </div>
  <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal shift -->

@stop

