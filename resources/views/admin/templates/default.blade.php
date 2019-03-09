<!DOCTYPE html>
<html lang="en">
@include('admin.templates.pembagian.headscript')
<body class="app sidebar-mini rtl">
<!-- Navbar-->
@include('admin.templates.pembagian.header')
<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
@include('admin.templates.pembagian.sidebar')
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
            <p>A free and open source Bootstrap 4 admin template</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        </ul>
    </div>

    @include('admin.templates.pembagian.alert')

    @yield('content')
</main>
<!-- Essential javascripts for application to work-->
@include('admin.templates.pembagian.footerscript')
</body>
</html>
