@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

<h1>Dashboard</h1>

@stop


@section('content')

<!-- Small boxes (Stat box) -->
<div class="row">
	<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-aqua">
			<div class="inner">
            <h3>{{$users}}</h3>
				<p>Total Users</p>
			</div>
			<div class="icon">
				<i class="ion ion-person"></i>
			</div>
			<a href="{{url('admin/courses')}}" class="small-box-footer">More info
				<i class="fa fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>
	<!-- ./col -->

	<!-- ./col -->
	<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-yellow">
			<div class="inner">
				<h3>{{$total_course}}</h3>
				<p>Total Courses</p>
			</div>
			<div class="icon">
				<i class="ion ion-ios-book-outline"></i>
			</div>
			<a href="{{url('admin/enquiries')}}" class="small-box-footer">More info
				<i class="fa fa-arrow-circle-right"></i>
			</a>
		</div>
    </div>
    <!-- ./col -->
	<div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3>{{$active_course}}</h3>
                    <p>Active Course</p>
                </div>
                <div class="icon">
                    <i class="ion ion-ios-book-outline"></i>
                </div>
                <a href="{{url('admin/enquiries')}}" class="small-box-footer">More info
                    <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
	<!-- ./col -->
	<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-red">
			<div class="inner">
				<h3>65</h3>
				<p>Unique Visitors</p>
			</div>
			<div class="icon">
				<i class="ion ion-pie-graph"></i>
			</div>
			<a href="{{url('admin')}}" class="small-box-footer">More info
				<i class="fa fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>
	<!-- ./col -->
</div>
<!-- /.row -->
<!-- START CUSTOM TABS -->
<h2 class="page-header">Datas</h2>
<div class="row">
	<div class="col-md-12">
		<!-- Custom Tabs -->
		<div class="nav-tabs-custom">
			<ul class="nav nav-tabs">
				<li class="active">
					<a href="#tab_1" data-toggle="tab">User Data</a>
				</li>
				<li>
					<a href="#tab_2" data-toggle="tab">Course Data</a>
				</li>
				<li>
					<a href="#tab_3" data-toggle="tab">Trainer Data</a>
				</li>
				<li>
					<a href="#tab_3" data-toggle="tab">Enquiry Data</a>
				</li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane active" id="tab_1">
					<div class="row">
						<div class="col-xs-12">
							<div class="box">
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


                    @section('js')

				    <script>
                        $(function() {
                            $('#table').DataTable({
                            processing: true,
                            'paging'      : true,
                            'autoWidth'   : true,
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
                    <script>
                     $(document).ajaxStart(function() { Pace.restart(); });
                    </script>

                    @stop

				<!-- /.tab-pane -->
				<div class="tab-pane" id="tab_2">
                 The European languages are members of the same family. Their separate existence is a myth.
                 For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ
                 in their grammar, their pronunciation and their most common words. Everyone realizes why a
                 new common language would be desirable: one could refuse to pay expensive translators. To
                 achieve this, it would be necessary to have uniform grammar, pronunciation and more common
                 words. If several languages coalesce, the grammar of the resulting language is more simple
                 and regular than that of the individual languages.
               </div>
				<!-- /.tab-pane -->
				<div class="tab-pane" id="tab_3">
                 Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                 Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                 when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                 It has survived not only five centuries, but also the leap into electronic typesetting,
                 remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                 sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                 like Aldus PageMaker including versions of Lorem Ipsum.
               </div>
				<!-- /.tab-pane -->
			</div>
			<!-- /.tab-content -->
		</div>
		<!-- nav-tabs-custom -->
	</div>
	<!-- /.col -->


@stop


