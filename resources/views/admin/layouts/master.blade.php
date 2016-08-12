<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    @include('admin.layouts.style')
</head>
<body class="skin-blue-light sidebar-mini">
    <div class="wrapper">

        @include('admin.common.header')

        <!-- サイドバー -->
        @include('admin.common.sidebar')
        <!-- end sidebar -->

        <!-- content -->
        @yield('admin.contents')
        <!-- end content -->


        <!-- フッター -->
        @include('admin.common.footer')
        <!-- end footer -->


    </div><!-- end wrapper -->
    <!-- JS -->
    @include('admin.layouts.script')

</body>
</html>