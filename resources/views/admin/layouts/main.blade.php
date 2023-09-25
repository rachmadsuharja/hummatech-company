
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
	<meta name="author" content="NobleUI">
	<meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">
	<title>Hummatech | Dashboard</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet">
    <!-- End fonts -->
	<!-- core:css -->
	<link rel="stylesheet" href="{{ asset('noble/vendors/core/core.css') }}">
	<!-- endinject -->
	<!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('noble/vendors/flatpickr/flatpickr.min.css') }}">
	<!-- End plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="{{ asset('noble/fonts/feather-font/css/iconfont.css') }}">
	<link rel="stylesheet" href="{{ asset('noble/vendors/flag-icon-css/css/flag-icon.min.css') }}">
	<!-- endinject -->
    <!-- Layout styles -->
	<link rel="stylesheet" href="{{ asset('noble/css/demo1/style.min.css') }}">
    <!-- End layout styles -->
    <link rel="stylesheet" href="{{ asset('noble/vendors/sweetalert2/sweetalert2.min.css') }}">
    
    <link rel="shortcut icon" href="{{ asset('noble/images/favicon.png') }}" />

    @yield('style')
</head>

<body class="sidebar-dark">

    <div class="main-wrapper">

        <div class="page-wrapper">
            @yield('container')
        </div>

    </div>

    @yield('script')

</body>
<!-- core:js -->
<script src="{{ asset('noble/vendors/core/core.js') }}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{ asset('noble/vendors/flatpickr/flatpickr.min.js') }}"></script>
<script src="{{ asset('noble/vendors/apexcharts/apexcharts.min.js') }}"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{ asset('noble/vendors/feather-icons/feather.min.js') }}"></script>
<script src="{{ ('noble/js/template.js') }}"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="{{ asset('noble/js/dashboard-light.js') }}"></script>
<!-- End custom js for this page -->

<script src="{{ asset('noble/vendors/sweetalert2/sweetalert2.min.js') }}"></script>

</html>

