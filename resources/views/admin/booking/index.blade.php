@extends('adminlte::page')

@section('title', 'Booking')

@section('content_header')
<h1>
    Booking
  </h1>
  <ol class="breadcrumb">
    <li><a href="/admin"><i class="fa fa-dashboard"></i>Dashboard</a></li>
    <li class="active">Booking</li>
  </ol>
</section>
@stop

@section('content')


    <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
              <div class="box-tools">
                <a href="{{url('admin/bookings/create')}}" class="btn btn-primary btn-xs" title="Add Trainers">
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
            <th>Enquiry Id</th>
            <th>Advance</th>
            <th>Discount</th>
            <th>Booked Date</th>
            <th>Trainer Id</th>
            <th>Action</th>
        </tr>
    </thead>

        @foreach($bookings as $booking)
        <tbody>
            <tr>
                <td>{{$booking->id}}</td>
                <td>{{$booking->enquiry->name}}   {{$booking->enquiry->course->name}}&#44;&nbsp;&nbsp;{{$booking->enquiry->course->duration}} {{$booking->enquiry->course->durationType->duration_type}}</td>
                <td>{{$booking->advance}}</td>
                <td>{{$booking->discount}}</td>
                <td>{{$booking->booked_date}}</td>
                <td>{{$booking->trainer->fullName()}}</td>


                <td>
                    <form method="post" action="{{url('admin/bookings/'.$booking->id)}}">
                        <a href="{{url('admin/bookings/'.$booking->id.'/edit')}}" class="btn btn-success btn-xs" title="Edit Bookings">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>
                        {{csrf_field()}}
                        <input type="hidden" name="id" value="{{$booking->id}}"/>
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
{{$bookings->links()}}
@stop



