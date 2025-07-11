<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    @include('dasboard.layouts.head')
    {{-- <title>{{ config('app.name', display('Laravel')) }}</title> --}}
    <meta name="theme-color" content="lab(29.2345% 39.3825 20.0664)">

</head>


<body class="hold-transition sidebar-mini layout-fixed">

    <div class="wrapper">
        @if (Auth::check())
            <!-- Navbar -->
            @include('dasboard.layouts.navbar')
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            @include('dasboard.layouts.aside')
        @endif

        @if (Auth::check())
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
            @else
                <div class="container-fluid">
        @endif


        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">{{ display('Dashboard') }}</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="">{{ display('Home') }}</a></li>
                            <li class="breadcrumb-item active">{{ display('Dashboard') }}</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            @yield('content')
        </section>
        <!-- /.content -->

    </div>
    <!-- /.content-wrapper -->


    @include('vendor.sweetalert.alert')
    <!-- footer-->
    @include('dasboard.layouts.footer')


    {{-- <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar --> --}}
    </div>
    <!-- ./wrapper -->

    {{-- Script  --}}
    @include('dasboard.layouts.script')
</body>

</html>
