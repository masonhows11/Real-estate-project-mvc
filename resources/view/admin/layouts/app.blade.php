<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">

<!-- BEGIN: Head-->
<head>
@include('admin.layouts.head')
<title>@yield('admin_title')</title>
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

<!-- BEGIN: Header-->
@include('admin.layouts.header')
<!-- END: Header-->


<!-- BEGIN: Main Menu Sidebar-->
@include('admin.layouts.sidebar')
<!-- END: Main Menu Sidebar-->

<!-- BEGIN: Content-->
<div class="app-content content">
@yield('main_content')
</div>
<!-- END: Content-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<!-- BEGIN: Footer-->
@include('admin.layouts.footer')
<button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
<!-- END: Footer-->

<!-- START SCRIPTS -->
@include('admin.layouts.scripts')
@yield('scripts')
<!-- END SCRIPTS -->

</body>
<!-- END: Body-->

</html>

