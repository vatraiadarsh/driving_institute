@extends('adminlte::page')
@section('title', 'Shift')
@section('content_header')

    <h1>
      Shift
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
      <li class="active">Shift</li>
    </ol>

@stop

@section('content')

<div class="box">
        <div class="box-header">
          <h3 class="box-title">Data Table With Full Features</h3>
          <div class="box-tools">
        <a href="{{url('admin/shift/create')}}" class="btn btn-primary btn-xs" title="Add Duration">
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
        <th>Shift</th>
        <th>Created Date</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
</thead>

    @foreach($shifts as $shift)
    <tbody>
        <tr>
            <td>{{$shift->id}}</td>
            <td>{{$shift->shift}}</td>
            <td>{{$shift->created_at}}</td>
            <td>
                @if($shift->status)
                <label class="label label-success">Active</label>
                @else
                <label class="label label-danger">Inactive</label>
                @endif
                </td>
            <td>
                <form method="post" action="{{url('admin/shift/'.$shift->id)}}">
                    <a href="{{url('admin/shift/'.$shift->id.'/edit')}}" class="btn btn-success btn-xs" title="Edit Shift">
                        <span class="glyphicon glyphicon-pencil"></span>
                    </a>
                    {{csrf_field()}}

                        <button type="submit" class="btn btn-danger btn-xs">
                            <span class="glyphicon glyphicon-trash"></span>
                            <input type="hidden" name="_method" value="DELETE">
                        </button>
                </form>
            </td>
        </tr>
    <tbody>
    @endforeach

</table>
{{ $shifts->links() }}

@stop

