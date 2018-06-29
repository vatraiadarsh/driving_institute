@extends('adminlte::page')
@section('title', 'Duration')
@section('content_header')

    <h1>
      Durations
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
      <li class="active">Duration</li>
    </ol>

@stop

@section('content')

<div class="box">
        <div class="box-header">
          <h3 class="box-title">Data Table With Full Features</h3>
          <div class="box-tools">
        <a href="{{url('admin/duration/create')}}" class="btn btn-primary btn-xs" title="Add Duration">
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
        <th>Duration Type</th>
        <th>Created Date</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
</thead>

    @foreach($durations as $duration)
    <tbody>
        <tr>
            <td>{{$duration->id}}</td>
            <td>{{$duration->duration_type}}</td>
            <td>{{$duration->created_at}}</td>
            <td>
                @if($duration->status)
                <label class="label label-success">Active</label>
                @else
                <label class="label label-danger">Inactive</label>
                @endif
                </td>
            <td>
                <form method="post" action="{{url('admin/duration/'.$duration->id)}}">
                    <a href="{{url('admin/duration/'.$duration->id.'/edit')}}" class="btn btn-success btn-xs" title="Edit Duration">
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
{{ $durations->links() }}

@stop

