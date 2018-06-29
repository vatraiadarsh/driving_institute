@extends('adminlte::master')

@section('adminlte_css')
    <link rel="stylesheet"
          href="{{ asset('vendor/adminlte/dist/css/skins/skin-' . config('adminlte.skin', 'blue') . '.min.css')}} ">
    @stack('css')
    @yield('css')
@stop

@section('body_class', 'skin-' . config('adminlte.skin', 'blue') . ' sidebar-mini ' . (config('adminlte.layout') ? [
    'boxed' => 'layout-boxed',
    'fixed' => 'fixed',
    'top-nav' => 'layout-top-nav'
][config('adminlte.layout')] : '') . (config('adminlte.collapse_sidebar') ? ' sidebar-collapse ' : ''))

@section('body')
    <div class="wrapper">

        <!-- Main Header -->
        <header class="main-header">
            @if(config('adminlte.layout') == 'top-nav')
            <nav class="navbar navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <a href="{{ url(config('adminlte.dashboard_url', 'home')) }}" class="navbar-brand">
                            {!! config('adminlte.logo', '<b>Admin</b>LTE') !!}
                        </a>
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                        <ul class="nav navbar-nav">
                            @each('adminlte::partials.menu-item-top-nav', $adminlte->menu(), 'item')
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
            @else
            <!-- Logo -->
            <a href="{{ url(config('adminlte.dashboard_url', 'home')) }}" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini">{!! config('adminlte.logo_mini', '<b>A</b>LT') !!}</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg">{!! config('adminlte.logo', '<b>Admin</b>LTE') !!}</span>
            </a>

            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">{{ trans('adminlte::adminlte.toggle_navigation') }}</span>
                </a>
            @endif

                <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">

                <ul class="nav navbar-nav">






                        <li class="dropdown notifications-menu">
                                <a href="" class="dropdown-toggle" data-toggle="dropdown">
                                  <i class="fa fa-plus-square"></i>
                                  <span class="label label-info">4</span>
                                </a>
                                <ul class="dropdown-menu">
                                  <li class="header"><center>Quick Actions</center></li>
                                  <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                    <li>

                                        <a href="#">
                                            <div class="box-body">
                                                <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#course-modal-default">
                                                    <center>
                                                    <i class="fa fa-users text-aqua"></i> Add Courses
                                                    </center>
                                                </button>
                                        </a>
                                    </li>
                                        <a href="#">
                                            <div class="box-body">
                                                <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#modal-default">
                                                    <center>
                                                    <i class="fa fa-users text-aqua"></i> Add Courses
                                                    </center>
                                                </button>
                                        </a>
                                      <li>
                                        <a href="#">
                                            <div class="box-body">
                                                <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#modal-default">
                                                    <center>
                                                        <i class="fa fa-users text-aqua"></i> Add Courses
                                                    </center>
                                                </button>
                                        </a>
                                      </li>
                                      <li>
                                        <a href="#">
                                            <div class="box-body">
                                                <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#modal-default">
                                                    <center>
                                                        <i class="fa fa-users text-aqua"></i> Add Courses
                                                    </center>
                                                </button>
                                                </a>
                                      </li>

                                    </ul>
                                  </li>

                                </ul>
                              </li>
















                  <!-- Messages: style can be found in dropdown.less-->
                  <li class="dropdown messages-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <i class="fa fa-envelope-o"></i>
                      <span class="label label-success">4</span>
                    </a>
                    <ul class="dropdown-menu">
                      <li class="header">You have 4 messages</li>
                      <li>
                        <!-- inner menu: contains the actual data -->
                        <ul class="menu">
                          <li><!-- start message -->
                            <a href="#">
                              <div class="pull-left">
                                <img src="https://www.w3schools.com/w3css/img_lights.jpg" class="img-circle" alt="User Image">
                              </div>
                              <h4>
                                Support Team
                                <small><i class="fa fa-clock-o"></i> 5 mins</small>
                              </h4>
                              <p>Why not buy a new awesome theme?</p>
                            </a>
                          </li>
                          <!-- end message -->
                          <li>
                            <a href="#">
                              <div class="pull-left">
                                <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                              </div>
                              <h4>
                                AdminLTE Design Team
                                <small><i class="fa fa-clock-o"></i> 2 hours</small>
                              </h4>
                              <p>Why not buy a new awesome theme?</p>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <div class="pull-left">
                                <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                              </div>
                              <h4>
                                Developers
                                <small><i class="fa fa-clock-o"></i> Today</small>
                              </h4>
                              <p>Why not buy a new awesome theme?</p>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <div class="pull-left">
                                <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                              </div>
                              <h4>
                                Sales Department
                                <small><i class="fa fa-clock-o"></i> Yesterday</small>
                              </h4>
                              <p>Why not buy a new awesome theme?</p>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <div class="pull-left">
                                <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                              </div>
                              <h4>
                                Reviewers
                                <small><i class="fa fa-clock-o"></i> 2 days</small>
                              </h4>
                              <p>Why not buy a new awesome theme?</p>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="footer"><a href="#">See All Messages</a></li>
                    </ul>
                  </li>
                  <!-- Notifications: style can be found in dropdown.less -->
                  <li class="dropdown notifications-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <i class="fa fa-bell-o"></i>

                      <span class="label label-warning">10</span>
                    </a>
                    <ul class="dropdown-menu">
                      <li class="header">You have 10 notifications</li>
                      <li>
                        <!-- inner menu: contains the actual data -->
                        <ul class="menu">
                          <li>
                            <a href="#">
                              <i class="fa fa-users text-aqua"></i> 5 new members joined today
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                              page and may cause design problems
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <i class="fa fa-users text-red"></i> 5 new members joined
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <i class="fa fa-user text-red"></i> You changed your username
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="footer"><a href="#">View all</a></li>
                    </ul>
                  </li>
                  <!-- Tasks: style can be found in dropdown.less -->
                  <li class="dropdown tasks-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <i class="fa fa-flag-o"></i>
                      <span class="label label-danger">9</span>
                    </a>
                    <ul class="dropdown-menu">
                      <li class="header">You have 9 tasks</li>
                      <li>
                        <!-- inner menu: contains the actual data -->
                        <ul class="menu">
                          <li><!-- Task item -->
                            <a href="#">
                              <h3>
                                Design some buttons
                                <small class="pull-right">20%</small>
                              </h3>
                              <div class="progress xs">
                                <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                  <span class="sr-only">20% Complete</span>
                                </div>
                              </div>
                            </a>
                          </li>
                          <!-- end task item -->
                          <li><!-- Task item -->
                            <a href="#">
                              <h3>
                                Create a nice theme
                                <small class="pull-right">40%</small>
                              </h3>
                              <div class="progress xs">
                                <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"
                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                  <span class="sr-only">40% Complete</span>
                                </div>
                              </div>
                            </a>
                          </li>
                          <!-- end task item -->
                          <li><!-- Task item -->
                            <a href="#">
                              <h3>
                                Some task I need to do
                                <small class="pull-right">60%</small>
                              </h3>
                              <div class="progress xs">
                                <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"
                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                  <span class="sr-only">60% Complete</span>
                                </div>
                              </div>
                            </a>
                          </li>
                          <!-- end task item -->
                          <li><!-- Task item -->
                            <a href="#">
                              <h3>
                                Make beautiful transitions
                                <small class="pull-right">80%</small>
                              </h3>
                              <div class="progress xs">
                                <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"
                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                  <span class="sr-only">80% Complete</span>
                                </div>
                              </div>
                            </a>
                          </li>
                          <!-- end task item -->
                        </ul>
                      </li>
                      <li class="footer">
                        <a href="#">View all tasks</a>
                      </li>
                    </ul>
                  </li>
                  <!-- User Account: style can be found in dropdown.less -->
                  <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <img src="https://www.w3schools.com/w3css/img_lights.jpg" class="user-image" alt="User Image">
                      <span class="hidden-xs">Alexander Pierce</span>
                    </a>



                    <ul class="dropdown-menu">
                      <!-- User image -->
                      <li class="user-header">
                        <img src="https://www.w3schools.com/w3css/img_lights.jpg" class="img-circle" alt="User Image">
                        <p>
                          Alexander Pierce - Web Developer
                          <small>Member since Nov. 2012</small>
                        </p>
                      </li>
                      <!-- Menu Body -->
                      <li class="user-body">
                        <div class="row">
                          <div class="col-xs-4 text-center">
                            <a href="#">Followers</a>
                          </div>
                          <div class="col-xs-4 text-center">
                            <a href="#">Sales</a>
                          </div>
                          <div class="col-xs-4 text-center">
                            <a href="#">Friends</a>
                          </div>
                        </div>
                        <!-- /.row -->
                      </li>
                      <!-- Menu Footer-->
                    <li class="user-footer">
                        <div class="pull-left">
                                <div class="pull-left">
                                        <div class="navbar-custom-menu">
                                                <ul class="nav navbar-nav">
                                                    <li>
                                                            <a href="{url('')}">
                                                                <i class="fa fa-key"></i>Change Password
                                                            </a>
                                                </li>
                                                </ul>
                                        </div>
                                </div>
                        </div>
                        <div class="pull-right">
                                <div class="pull-right">
                                        <div class="navbar-custom-menu">
                                                <ul class="nav navbar-nav">
                                                    <li>
                                                        @if(config('adminlte.logout_method') == 'GET' || !config('adminlte.logout_method') && version_compare(\Illuminate\Foundation\Application::VERSION, '5.3.0', '<'))
                                                            <a href="{{ url(config('adminlte.logout_url', 'auth/logout')) }}">
                                                                <i class="fa fa-fw fa-power-off"></i> {{ trans('adminlte::adminlte.log_out') }}
                                                            </a>
                                                        @else
                                                            <a href="#"
                                                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                                            >
                                                                <i class="fa fa-fw fa-power-off"></i> {{ trans('adminlte::adminlte.log_out') }}
                                                            </a>
                                                            <form id="logout-form" action="{{ url(config('adminlte.logout_url', 'auth/logout')) }}" method="POST" style="display: none;">
                                                                @if(config('adminlte.logout_method'))
                                                                    {{ method_field(config('adminlte.logout_method')) }}
                                                                @endif
                                                                {{ csrf_field() }}
                                                            </form>
                                                        @endif
                                                    </li>
                                                </ul>
                                        </div>
                                </div>
                        </div>
                    </li>
                </ul>
            </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul>
          </div>

                @if(config('adminlte.layout') == 'top-nav')
                </div>
                @endif
            </nav>
        </header>

        @if(config('adminlte.layout') != 'top-nav')
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">

            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">

                <!-- Sidebar Menu -->
                <ul class="sidebar-menu" data-widget="tree">
                    @each('adminlte::partials.menu-item', $adminlte->menu(), 'item')
                </ul>
                <!-- /.sidebar-menu -->
            </section>
            <!-- /.sidebar -->
        </aside>
        @endif

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @if(config('adminlte.layout') == 'top-nav')
            <div class="container">
            @endif

            <!-- Content Header (Page header) -->
            <section class="content-header">
                @yield('content_header')
            </section>

            <!-- Main content -->
            <section class="content">
                <!--Alert for all form -->

                @if ($errors->any())
                <div class="box-body">
                        <div class="alert alert-danger fade in alert-dismissible ">
                           <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                           <h4><i class="icon fa fa-warning"></i> Alert!</h4>
                           <ul type='none'>
                                  @foreach ($errors->all() as $error)
                                      <li><i class="fa fa-hand-o-right"></i>&nbsp;&nbsp;{{ $error }}</li>
                                  @endforeach
                              </ul>
                            </div>
                </div>
                @endif

                <div class="modal fade" id="course-modal-default">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title">Default Modal</h4>
                            </div>
                            <div class="modal-body">
                                    <form>
                                      <div class="form-group">
                                        <label for="recipient-name" class="control-label">Recipient:</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                      </div>
                                      <div class="form-group">
                                        <label for="message-text" class="control-label">Message:</label>
                                        <textarea class="form-control" id="message-text"></textarea>
                                      </div>
                                    </form>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save</button>
                                  </div>
                          </div>
                          <!-- /.modal-body -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->











                @yield('content')


            </section>
            <!-- /.content -->
            @if(config('adminlte.layout') == 'top-nav')
            </div>
            <!-- /.container -->
            @endif
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
          @yield('footer')
         </footer>

    </div>
    <!-- ./wrapper -->
@stop

@section('adminlte_js')
    <script src="{{ asset('vendor/adminlte/dist/js/adminlte.min.js') }}"></script>
    @stack('js')
    @yield('js')
@stop
