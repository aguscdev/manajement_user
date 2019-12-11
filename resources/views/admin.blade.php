<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Peneglolaan UKM</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{URL::asset('assets/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{URL::asset('assets/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{URL::asset('assets/bower_components/Ionicons/css/ionicons.min.css')}}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{URL::asset('assets/bower_components/jvectormap/jquery-jvectormap.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{URL::asset('assets/dist/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
        folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{URL::asset('assets/dist/css/skins/_all-skins.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/assets/css/jquery.dataTables.min.css')}}">
    <!-- chart -->
    <link rel="stylesheet" href="{{URL::asset('assets/chartjs/Chart.js')}}">
    <script type="text/javascript" src="{{URL::asset('assets/chartjs/Chart.js')}}"></script>
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>


<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
          <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">Menu Utama</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
    </a>
    
    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
        </ul>
    </div>
    </nav>
</header>

<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="pull-left image">
        <img src="{{URL::asset('assets/img/no-avatar.png')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
        <p>
            admin        </p>
        <i class="fa fa-circle text-success"></i> Online
        </div>
    </div>
    <br>
    <ul class="sidebar-menu" data-widget="tree">
        <!-- <li class="header">MAIN NAVIGATION</li> -->
        <li class="">
            <a href="#">
                <i class="fa fa-university text-aqua"></i> <span>Home</span>
                <span class="pull-right-container"></span>
            </a>
        </li>

        <li class="">
            <a href="{{url('/admin/index')}}">
                <i class="fa fa-user-o text-aqua"></i><span>USER</span>
                <span class="pull-right-container"></span>
            </a>
        </li>
        <li>
            <a href="{{url('/logout')}}">
                <i class="fa fa-power-off text-red"></i><span>Logout</span>
                <span class="pull-right-container"></span>
            </a>
        </li>
    </ul>
    </section>
    <!-- /.sidebar -->
</aside>
    <div class="contents">
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Dashboard {{Auth::user()->name}} - {{Auth::user()->user_role}}</h1><br/>
          <div class="row">
            

         
            <ul>
                <li>Home</li>
                @if(Auth::user()->user_role=="officer" || Auth::user()->user_role=="administrator")
                <li>Officer</li>
                <li>User</li>
                @elseif(Auth::user()->user_role=="user")
                <li>User</li>
                @endif
            </ul>

            
    
           
           
            <!-- box body -->
          </div>
          <!-- end chart -->
        </section><br>
      </div>
    </div>
  </div>
</body>
<!-- jQuery 3 -->
<script src="{{URL::asset('assets/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{URL::asset('assets/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{URL::asset('assets/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- Morris.js charts -->
<script src="{{URL::asset('assets/bower_components/raphael/raphael.min.js')}}"></script>
<script src="{{URL::asset('assets/bower_components/morris.js/morris.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{URL::asset('assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap -->
<script src="{{URL::asset('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{URL::asset('assets/bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{URL::asset('assets/bower_components/moment/min/moment.min.js')}}"></script>
<script src="{{URL::asset('assets/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- datepicker -->
<script src="{{URL::asset('assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{URL::asset('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{URL::asset('assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{URL::asset('assets/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{URL::asset('assets/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{URL::asset('assets/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="../assets/dist/js/demo.js"></script> -->

<script src="{{URL::asset('assets/assets/js/jquery-3.3.1.js')}}"></script>
<script src="{{URL::asset('assets/assets/js/jquery.dataTables.min.js')}}"></script>
<footer class="main-footer text-center">
    <strong>Copyright &copy; 2019 Agus Cahyadi</strong>
</footer></html>
