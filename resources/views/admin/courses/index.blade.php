@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>
    Courses
  </h1>
  <ol class="breadcrumb">
    <li><a href="/admin"><i class="fa fa-dashboard"></i>Dashboard</a></li>
    <li class="active">Courses</li>
  </ol>
</section>
@stop

@section('content')
<div class="box">
    <div class="box-header">
      <h3 class="box-title">Data Table With Full Features</h3>
      <div class="box-tools">
            <a href="{{url('admin/courses/create')}}" class="btn btn-primary btn-xs" title="Add Courses">
                <span class="fa fa-plus"></span>
            </a>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="enquiry-table" class="table table-bordered table-striped">
    <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Fees</th>
                <th>Duration</th>
                {{-- <th>Duration Types</th> --}}
                <th>Shift</th>
                <th>Created Date</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
    </thead>

        @foreach($courses as $course)
        <tbody>
            <tr>
                <td>{{$course->id}}</td>
                <td>{{$course->name}}</td>
                <td>{{$course->desc}}</td>
                <td>{{$course->fees}}</td>
                <td>{{$course->duration}} &nbsp; {{$course->durationType->duration_type}}</td>
                {{-- <td>{{$course->durationType->duration_type}}</td> --}}
                <td>{{$course->shift}}</td>
                <td>{{$course->created_at}}</td>
                <td>
                        @if($course->status)
                        <label class="label label-success">Active</label>
                        @else
                        <label class="label label-danger">Inactive</label>
                        @endif
                </td>


                <td>
                    <form method="post" action="{{url('admin/courses/'.$course->id)}}">
                        <a href="{{url('admin/courses/'.$course->id.'/edit')}}" class="btn btn-success btn-xs" title="Edit Courses">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>
                        {{csrf_field()}}
                        <input type="hidden" name="id" value="{{$course->id}}"/>
                        <input type="hidden" name="_method" value="DELETE"/>
                            <button type="submit" class="btn btn-danger btn-xs">
                            <span class="glyphicon glyphicon-trash"></span>

                        </button>
                    </form>
                </td>
            </tr>
        </tbody>
        @endforeach

    </table>
{{$courses->links()}}
@stop
