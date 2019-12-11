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
        <p>{{Auth::user()->user_role}}</p>
        <i class="fa fa-circle text-success"></i> Online
        </div>
    </div>
    <br>
    <ul class="sidebar-menu" data-widget="tree">
        <!-- <li class="header">MAIN NAVIGATION</li> -->
        <li class="">
            <a href="{{url('/home/home')}}">
                <i class="fa fa-university text-aqua"></i> <span>Home</span>
                <span class="pull-right-container"></span>
            </a>
        </li>
        @if(Auth::user()->user_role=="administrator")
        <li>
            <a href="#project" data-toggle="collapse" class="collapsed"><i class="fa fa-folder text-aqua"></i> <span>PROJECT MANAJEMENT</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
            <div id="project" class="collapse ">
                <ul class="nav">
                    <li><a href="#" class=""><i class="fa fa-list"></i> &nbsp Project Manajement</a></li>
                </ul>
            </div>
        </li>
        <li>
            <a href="#partner" data-toggle="collapse" class="collapsed"><i class="fa fa-folder text-aqua"></i> <span>PARTNER MANAJEMENT</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
            <div id="partner" class="collapse ">
                <ul class="nav">
                    <li><a href="#" class=""><i class="fa fa-list"></i> &nbsp Partner Manajement</a></li>
                </ul>
            </div>
        </li>
        <li>
            <a href="#modul" data-toggle="collapse" class="collapsed"><i class="fa fa-folder text-aqua"></i> <span>MODUL MANAJEMENT</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
            <div id="modul" class="collapse ">
                <ul class="nav">
                    <li><a href="#" class=""><i class="fa fa-list"></i> &nbsp Modul Manajement</a></li>
                </ul>
            </div>
        </li>
        <li>
            <a href="#customer" data-toggle="collapse" class="collapsed"><i class="fa fa-folder text-aqua"></i> <span>CUSTOMER MANAJEMENT</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
            <div id="customer" class="collapse ">
                <ul class="nav">
                    <li><a href="#" class=""><i class="fa fa-list"></i> &nbsp Customer Manajement</a></li>
                </ul>
            </div>
        </li>
        <li>
            <a href="#user" data-toggle="collapse" class="collapsed"><i class="fa fa-folder text-aqua"></i> <span>USER MANAJEMENT</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
            <div id="user" class="collapse ">
                <ul class="nav">
                    <li><a href="#" class=""><i class="fa fa-list"></i> &nbsp User Manajement</a></li>
                </ul>
            </div>
        </li>
        <li>
            <a href="#master" data-toggle="collapse" class="collapsed"><i class="fa fa-folder text-aqua"></i> <span>MASTER DATA MANAJEMENT</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
            <div id="master" class="collapse ">
                <ul class="nav">
                    <li><a href="#" class=""><i class="fa fa-list"></i> &nbsp Master Data Manajement</a></li>
                </ul>
            </div>
        </li>
         <li class="">
            <a href="{{url('/admin/index')}}">
                <i class="fa fa-user-o text-aqua"></i><span>USER</span>
                <span class="pull-right-container"></span>
            </a>
        </li>
        @elseif(Auth::user()->user_role=="officer")
        <li>
            <a href="#modul" data-toggle="collapse" class="collapsed"><i class="fa fa-folder text-aqua"></i> <span>MODUL MANAJEMENT</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
            <div id="modul" class="collapse ">
                <ul class="nav">
                    <li><a href="#" class=""><i class="fa fa-list"></i> &nbsp Modul Manajement</a></li>
                </ul>
            </div>
        </li>
        <li>
            <a href="#customer" data-toggle="collapse" class="collapsed"><i class="fa fa-folder text-aqua"></i> <span>CUSTOMER MANAJEMENT</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
            <div id="customer" class="collapse ">
                <ul class="nav">
                    <li><a href="#" class=""><i class="fa fa-list"></i> &nbsp Customer Manajement</a></li>
                </ul>
            </div>
        </li>
        <li>
            <a href="#user" data-toggle="collapse" class="collapsed"><i class="fa fa-folder text-aqua"></i> <span>USER MANAJEMENT</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
            <div id="user" class="collapse ">
                <ul class="nav">
                    <li><a href="#" class=""><i class="fa fa-list"></i> &nbsp User Manajement</a></li>
                </ul>
            </div>
        </li>
        <li>
            <a href="#master" data-toggle="collapse" class="collapsed"><i class="fa fa-folder text-aqua"></i> <span>MASTER DATA MANAJEMENT</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
            <div id="master" class="collapse ">
                <ul class="nav">
                    <li><a href="#" class=""><i class="fa fa-list"></i> &nbsp Master Data Manajement</a></li>
                </ul>
            </div>
        </li>
        @elseif(Auth::user()->user_role=="user")
        <li>
            <a href="#project" data-toggle="collapse" class="collapsed"><i class="fa fa-folder text-aqua"></i> <span>PROJECT MANAJEMENT</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
            <div id="project" class="collapse ">
                <ul class="nav">
                    <li><a href="#" class=""><i class="fa fa-list"></i> &nbsp Project Manajement</a></li>
                </ul>
            </div>
        </li>
        <li>
            <a href="#partner" data-toggle="collapse" class="collapsed"><i class="fa fa-folder text-aqua"></i> <span>PARTNER MANAJEMENT</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
            <div id="partner" class="collapse ">
                <ul class="nav">
                    <li><a href="#" class=""><i class="fa fa-list"></i> &nbsp Partner Manajement</a></li>
                </ul>
            </div>
        </li>
        @endif
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