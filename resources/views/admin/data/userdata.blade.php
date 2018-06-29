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
              <h3 class="box-title">User Data table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                <table  class="table table-striped table-bordered " style="width:100%" id="table">
                    <thead>
                       <tr>
                           <th>ID</th>
                             <th>Name</th>
                             <th>Email</th>
                             <th>Created Date</th>
                             <th>Updated Date</th>
                       </tr>
                    </thead>
                 </table>
                </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        </div>
        <!-- /.row -->

        </div>
@stop

@section('js')
<script>
    $(function() {
          $('#table').DataTable({
          processing: true,
          'paging'      : true,
          'autoWidth'   : true,
          'search'      :false,
          serverSide: true,
          ajax: '{{ url('admin/userajax') }}',
            columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'email', name: 'email' },
            { data: 'created_at', name: 'created_at' },
            { data: 'updated_at', name: 'updated_at' }

        ],
       });
    });
</script>

@stop
