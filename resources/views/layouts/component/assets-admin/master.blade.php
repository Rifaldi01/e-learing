<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from adminbsb-sensitive.firebaseapp.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Aug 2021 13:35:47 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
@include('layouts.component.assets-admin.head')
<body>
<div class="all-content-wrapper">
    <!-- Top Bar -->
@include('layouts.component.assets-admin.header')
<!-- #END# Top Bar -->
    <!-- Left Menu -->
@include('layouts.component.assets-admin.left-sidebar')
<!-- #END# Left Menu -->
    <!-- Right Sidebar -->
@include('layouts.component.assets-admin.right-sidebar')
<!-- #END# Right Sidebar -->
    <section class="content dashboard">
        <!-- Dashboard Heading -->
        <div class="dashboard-heading">
            @yield('content')
        </div>
        <!-- #END# Dashboard Heading -->
    </section>

    <!-- Footer -->
@include('layouts.component.assets-admin.footer')
<!-- #END# Footer -->
</div>

@include('layouts.component.assets-admin.js')
</body>


<!-- Mirrored from adminbsb-sensitive.firebaseapp.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Aug 2021 13:35:47 GMT -->
</html>
