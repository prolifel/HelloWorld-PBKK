<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    @yield('title')

	<link href="{{ asset('daeng/css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('daeng/css/simple-line-icons.css') }}" rel="stylesheet">
	<link href="{{ asset('daeng/css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('daeng/vendors/pace-progress/css/pace.min.css') }}" rel="stylesheet">
</head>
<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    @include('layouts.module.header')
    <div class="app-body" id="dw">
        <div class="sidebar">
            @include('layouts.module.sidebar')
            <button class="sidebar-minimizer brand-minimizer" type="button"></button>
        </div>
        @yield('content')
    </div>

    <footer class="app-footer">
        <div>
            <a>&copy; Copyright 2021 Clement & Angga</a>
            <span>- All Rights Reserved</span>
        </div>
    </footer>

    <script src="{{ asset('daeng/js/jquery.min.js') }}"></script>
    <script src="{{ asset('daeng/js/popper.min.js') }}"></script>
    <script src="{{ asset('daeng/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('daeng/js/pace.min.js') }}"></script>
    <script src="{{ asset('daeng/js/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('daeng/js/coreui.min.js') }}"></script>
    <script src="{{ asset('daeng/js/custom-tooltips.min.js') }}"></script>
    @yield('js')
</body>
</html>
