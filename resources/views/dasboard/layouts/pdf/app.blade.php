<!doctype html>
<html lang="ar">

<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('dasboard.layouts.pdf.head')
</head>


<body>
    @yield('content')
    @include('dasboard.layouts.pdf.script')
</body>

</html>
