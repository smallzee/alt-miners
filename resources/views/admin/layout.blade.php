<!Doctype html>
<html>
<head>
    <meta property="og:locale" content="en_US">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <title>{{ page_title(@$page_title)  }}</title>

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{url('assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{url('assets/admin/bower_components/Ionicons/css/ionicons.min.css')}}">
    <!-- fullCalendar -->
    <link rel="stylesheet" href="{{url('aseets/admin/bower_components/morris.js/morris.css')}}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{url('assets/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/admin/bower_components/fullcalendar/dist/fullcalendar.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/admin/bower_components/fullcalendar/dist/fullcalendar.print.min.css')}}" media="print">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{url('assets/admin/dist/css/AdminLTE.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/admin/plugins/pace/pace.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/admin/dist/css/bootstrap-datepicker.min.css')}}">

    <!-- jQuery 3 -->
    <script src="{{url('assets/admin/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <link rel="stylesheet" href="{{url('assets/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">

    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{url('assets/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{url('assets/admin/bower_components/select2/dist/css/select2.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/0.5.0/sweet-alert.css">
    <!-- folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{url('assets/admin/dist/css/skins/_all-skins.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{url('assets/admin/css/style.css')}}">
    <link rel="icon" href="{{image_url('logo.png')}}">
</head>
<body class="hold-transition skin-blue sidebar-mini" style="font-size: 15px;">

<div class="wrapper">
    <header class="main-header">
        <!-- Logo -->
        <a href="{{url('/')}}" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>{{get_settings('web_title')}}</b></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>{{get_settings('web_title')}}</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{image_url('author.jpeg')}}" class="user-image" alt="User Image">
                            <span class="hidden-xs">{{ucwords(auth()->user()->full_name)}} ({{role(auth()->user()->role_id)}})</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{image_url( 'author.jpeg')}}" style="width: 40px; height: 40px;" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>{{ucwords(auth()->user()->full_name)}}</p>
                    <a href="#"><i class="fa fa-circle text-green"></i> Online</a>
                </div>
            </div>
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">MAIN NAVIGATION</li>
                <li >
                    <a href="{{url('admin/dashboard')}}">
                        <i class="fa fa-home text-primary "></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="{{url('admin/role')}}">
                        <i class="fa fa-map text-primary "></i>
                        <span>Admin Role</span>
                    </a>
                </li>

                <li>
                    <a href="{{url('admin/admin')}}">
                        <i class="fa fa-user text-primary "></i>
                        <span>All Admins</span>
                    </a>
                </li>

                <li>
                    <a href="{{url('admin/country')}}">
                        <i class="fa fa-map-marker text-primary "></i>
                        <span>All Countries</span>
                    </a>
                </li>

                <li>
                    <a href="{{url('admin/add-pricing')}}">
                        <i class="fa fa-plus text-primary "></i>
                        <span>Add New Pricing</span>
                    </a>
                </li>

                <li>
                    <a href="{{url('admin/cloud-pricing')}}">
                        <i class="fa fa-cloud text-primary "></i>
                        <span>All Cloud Pricing</span>
                    </a>
                </li>

                <li>
                    <a href="{{url('admin/doge-pricing')}}">
                        <i class="fa fa-cloud text-primary "></i>
                        <span>All Doge Pricing</span>
                    </a>
                </li>


                <li class="header">USERS / MINING / WITHDRAWAL</li>

                <li >
                    <a href="{{url('admin/mining')}}">
                        <i class="fa-history fa text-primary "></i>
                        <span>&nbsp; All Mining</span>
                    </a>
                </li>

                <li >
                    <a href="{{url('admin/users')}}">
                        <i class="fa fa-user text-primary "></i>
                        <span> &nbsp; All Users</span>
                    </a>
                </li>

                <li >
                    <a href="{{url('admin/kyc')}}">
                        <i class="fa fa-user text-primary "></i>
                        <span> &nbsp; All KYC Type</span>
                    </a>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-user text-primary"></i>
                        <span> &nbsp; All KYC Users</span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">

                        @foreach(array('3'=>'Approved KYC','2'=>'Rejected KYC', '1'=>'Processing KYC') as $key => $value)

                            <li>
                                <a href="{{url('admin/kyc-users/'.$key)}}">
                                    <i class="fa fa-circle-o-notch"></i>
                                    <span>{{ $value }}</span>
                                </a>
                            </li>

                        @endforeach

                    </ul>
                </li>

                <li>
                    <a href="{{url('admin/deposit')}}">
                        <i class="fa fa-wallet text-primary "></i>
                        <span>All Users Deposited</span>
                    </a>
                </li>

                <li >
                    <a href="{{url('admin/withdrawal')}}">
                        <i class="fa fa-wallet text-primary "></i>
                        <span>&nbsp; All Users Withdrawal</span>
                    </a>
                </li>


                <li class="header">SETTINGS</li>

                <li>
                    <a href="{{url('admin/settings')}}">
                        <i class="fa fa-wrench text-primary"></i>
                        <span>Settings</span>
                    </a>
                </li>

                <li>
                    <a href="{{url('admin/logout')}}">
                        <em class="fa fa-sign-out text-danger"></em>
                        <div class="label label-primary pull-right"></div>
                        <span>Logout</span>
                    </a>
                </li>
                <!-- END Menu-->
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                {{$page_title}}
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{url('admin/dashboard')}}"><i class="fa fa-home"></i> Dashboard</a></li>
                <li class="active">{{$page_title}}</li>
            </ol>
        </section>

        <section class="content">

            @include('flash')

            <div class="row">

                @yield('content')

            </div>
        </section>
    </div>
    <footer class="main-footer">
        <!-- <div class="float-right d-none d-sm-block">
          <b>Version</b> 3.0.0-alpha
        </div> -->
        <span>Copyright &copy; 2020 - <?= date('Y'); ?>  <a href="{{url('/')}}" target="_blank">{{get_settings('web_title')}}</a>.</span> All rights
        reserved.
    </footer>
</div>

<!-- /.control-sidebar -->
<!-- Bootstrap 3.3.7 -->
<script src="{{url('assets/admin/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{url('assets/admin/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- PACE -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="{{url('assets/admin/bower_components/PACE/pace.min.js')}}"></script>
<script src="{{url('assets/admin/dist/js/bootstrap-datepicker.min.js')}}"></script>
<!-- Morris.js charts -->
<script src="{{url('assets/admin/bower_components/raphael/raphael.min.js')}}"></script>
<script src="{{url('assets/admin/bower_components/morris.js/morris.min.js')}}"></script>
<!-- DataTables -->
<script src="{{url('assets/admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{url('assets/admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<!-- FastClick -->
<script src="{{url('assets/admin/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- Slimscroll -->
<script src="{{url('assets/admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{url('assets/admin/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{url('assets/admin/dist/js/adminlte.min.js')}}"></script>
<!-- Select2 -->
<script src="{{url('assets/admin/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->

<script src="{{url('assets/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<script src="{{url('assets/admin/bower_components/ckeditor/ckeditor.js')}}"></script>
<script src="{{url('assets/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<script src="{{url('assets/admin/dist/js/demo.js')}}"></script>
<script src="{{url('assets/admin/js/main.js')}}"></script>
<!-- fullCalendar -->
<script src="{{url('assets/admin/bower_components/moment/moment.js')}}"></script>
<script src="{{url('assets/admin/bower_components/fullcalendar/dist/fullcalendar.min.js')}}"></script>
</body>
</html>