@extends('adminlte::page')

@section('title', 'Enquiry')

@section('content_header')
<h1>
    Enquiry
  </h1>
  <ol class="breadcrumb">
    <li><a href="/admin"><i class="fa fa-dashboard"></i>Dashboard</a></li>
    <li class="active">Enquiry</li>
  </ol>
</section>
@stop

@section('content')


    <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
              <div class="box-tools">
                <a href="{{url('admin/enquiries/create')}}" class="btn btn-primary btn-xs" title="Add Trainers">
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
            <th>Course Name</th>
            <th>Course Duration</th>
            <th>DOB</th>
            <th>Email</th>
            <th>Contact No</th>
            <th>timing</th>
            <th>Action</th>
        </tr>
    </thead>


        @foreach($enquiries as $enquiry)
        <tbody>
            <tr>
                <td>{{$enquiry->id}}</td>
                <td>{{$enquiry->name}}</td>
                <td>{{$enquiry->course->name}}</td>
                <td>{{$enquiry->course->duration}}&nbsp;{{$enquiry->course->durationType->duration_type}}</td>
                <td>{{$enquiry->dob}}</td>
                <td>{{$enquiry->email}}</td>
                <td>{{$enquiry->cont_no}}</td>
                <td>{{$enquiry->timing}}</td>


                <td>
                    <form method="post" action="{{url('admin/enquiries/'.$enquiry->id)}}">
                        <a href="{{url('admin/enquiries/'.$enquiry->id.'/edit')}}" class="btn btn-success btn-xs" title="Edit Courses">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>
                        {{csrf_field()}}
                        <input type="hidden" name="id" value="{{$enquiry->id}}"/>
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
{{$enquiries->links()}}
@stop



