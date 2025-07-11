<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('dasboard.layouts.head')
    {{-- <title>{{ config('app.name', display('Laravel')) }}</title> --}}
</head>


<body class="hold-transition login-page">

    <!-- Main content -->
    <section class="content">
        @yield('content')
    </section>
    <!-- /.content -->

    @include('vendor.sweetalert.alert')


    {{-- Script  --}}
    {{-- @include('dasboard.layouts.script') --}}
</body>

</html>
