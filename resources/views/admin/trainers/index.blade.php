@extends('adminlte::page')

@section('title', 'Trainers')

@section('content_header')
<h1>
    Courses
  </h1>
  <ol class="breadcrumb">
    <li><a href="/admin"><i class="fa fa-dashboard"></i>Dashboard</a></li>
    <li class="active">Trainers</li>
  </ol>
</section>
@stop

@section('content')
<div class="box">
    <div class="box-header">
      <h3 class="box-title">Data Table With Full Features</h3>
      <div class="box-tools">
            <a href="{{url('admin/trainers/create')}}" class="btn btn-primary btn-xs" title="Add Trainers">
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
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Contact No</th>
            <th>Action</th>
        </tr>
    </thead>
        @foreach($trainers as $trainer)
        <tbody>
            <tr>
                <td>{{$trainer->id}}</td>
                <td>{{$trainer->first_name}}</td>
                <td>{{$trainer->last_name}}</td>
                <td>{{$trainer->email}}</td>
                <td>{{$trainer->cont_no}}</td>
                <td>
                    <form method="post" action="{{url('admin/trainers/'.$trainer->id)}}">
                        <a href="{{url('admin/trainers/'.$trainer->id.'/edit')}}" class="btn btn-success btn-xs" title="Edit Courses">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>
                        {{csrf_field()}}
                        <input type="hidden" name="id" value="{{$trainer->id}}"/>
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

@stop
