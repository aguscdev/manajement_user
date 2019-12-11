<!DOCTYPE html>
<html>
@include('home/header')


<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
@include('home/sidebar')
    <div class="contents">
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Dashboard {{Auth::user()->name}} - {{Auth::user()->user_role}}</h1><br/>
          <div class="row">
           
            <!-- box body -->
          </div>
          <!-- end chart -->
        </section><br>
      </div>
    </div>
  </div>
</body>
@include('home/footer')
</html>
