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

<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered table-hover" id="table">
                    <thead>
                       <tr>
                             <th>Id</th>
                             <th>Name</th>
                             <th>Description</th>
                             <th>Fees</th>
                             <th>Duration</th>
                             <th>Duration Types</th>
                             <th>Created Date</th>
                       </tr>
                    </thead>
                 </table>
            </div>
            <!-- /.box-body -->
        </div>
          <!-- /.box -->

    </div>
    <!-- /.col -->

</div>
 <!-- /.row -->












@stop

@section('js')
<script>
    $(function() {
          $('#table').DataTable({
          processing: true,
          'paging'      : true,
          'autoWidth'   : true,
          serverSide: true,
          ajax: '{{ url('admin/courseajax') }}',
          columns: [
                   { data: 'id', name: 'id' },
                   { data: 'name', name: 'name' },
                   { data: 'desc', name: 'desc' },
                   { data: 'fees', name: 'fees' },
                   { data: 'duration', name: 'duration' },
                   { data: 'duration_type', name: 'duration_type' },
                   { data: 'created_at', name: 'created_at' },

                ],
       });
    });

</script>

@stop


@section('js')
<script>
     $(document).ajaxStart(function() { Pace.restart(); });
</script>
@stop
