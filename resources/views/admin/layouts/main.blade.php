
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
    <link rel="stylesheet" href="{{ asset('noble/vendors/select2/select2.min.css') }}">
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

    <link rel="shortcut icon" href="{{ asset('hummatech_logo.png') }}" />
    <script src="https://cdn.tiny.cloud/1/pgkwxbi2o53fh094amtp86u1odimouuvquzqhp08le3i65n9/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
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
<script src="{{ asset('noble/vendors/select2/select2.min.js') }}"></script>
<script src="{{ asset('noble/vendors/apexcharts/apexcharts.min.js') }}"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{ asset('noble/vendors/feather-icons/feather.min.js') }}"></script>
<script src="{{ asset('noble/js/template.js') }}"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="{{ asset('noble/js/select2.js') }}"></script>
<script src="{{ asset('noble/js/dashboard-light.js') }}"></script>
<!-- End custom js for this page -->

<script src="{{ asset('noble/vendors/sweetalert2/sweetalert2.min.js') }}"></script>

</html>

