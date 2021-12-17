

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin-panel.index')}}">

        <div class="sidebar-brand-text mx-3">Yonetici Paneli</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item @if(Request::segment(2) =="") active  @endif  ">
        <a class="nav-link" href="{{ route('admin-panel.index')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>ana sehife</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item @if(Request::segment(2) =="sliders") active  @endif">
        <a class="nav-link " href="{{ route('admin-panel.sliders')}}">
            <i class="fas fa-fw fa-table"></i>
            <span>Slayder</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item @if(Request::segment(2) =="services") active  @endif">
        <a class="nav-link " href="{{ route('admin-panel.services')}}">
            <i class="fas fa-fw fa-table"></i>
            <span>Servis</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item @if(Request::segment(2) =="information") active  @endif">
        <a class="nav-link " href="{{ route('admin-panel.information')}}">
            <i class="fas fa-fw fa-table"></i>
            <span>melumat (Xeber)</span></a>
    </li>

    <hr class="sidebar-divider">

    <li class="nav-item @if(Request::segment(2) =="team") active  @endif">
        <a class="nav-link " href="{{ route('admin-panel.team')}}">
            <i class="fas fa-fw fa-table"></i>
            <span>Komanda</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->



    <!-- Nav Item - Tables -->
    <li class="nav-item @if(Request::segment(2) =="settings") active  @endif">
        <a class="nav-link " href="{{ route('admin-panel.settings')}}">
            <i class="fas fa-fw fa-table"></i>
            <span>Sayt Parametrleri</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>



</ul>
<!-- End of Sidebar -->
