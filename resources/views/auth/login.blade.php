<!doctype html>
<html class="no-js" lang="">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Hummatech | Login</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('xmee/img/favicon.png') }}">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('xmee/css/bootstrap.min.css') }}">
	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="{{ asset('xmee/css/fontawesome-all.min.css') }}">
	<!-- Flaticon CSS -->
	<link rel="stylesheet" href="{{ asset('xmee/font/flaticon.css') }}">
	<!-- Google Web Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="{{ asset('xmee/style.css') }}">
</head>

<body>
	<!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <div id="preloader" class="preloader d-flex align-items-center justify-content-center">
        <img width="100" height="100" src="{{ asset('hummatech_logo.png') }}" alt="">
    </div>
	<section class="fxt-template-animation fxt-template-layout4">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 col-12 fxt-bg-wrap">
					<div class="fxt-bg-img" data-bg-image="{{ asset('xmee/img/figure/bg4-l.jpg') }}">
						<div class="fxt-header">
							<div class="fxt-transformY-50 fxt-transition-delay-1">
								<a href="login-4.html" class="fxt-logo"><img src="{{ asset('hummatech.png') }}" alt="Logo"></a>
							</div>
							<div class="fxt-transformY-50 fxt-transition-delay-2">
								<h1>Welcome to Hummatech</h1>
							</div>
							<div class="fxt-transformY-50 fxt-transition-delay-3">
								<p>Hummasoft merupakan sebuah perusahaan yang bergerak dibidang IT (Information Technology)</p>
							</div>
						</div>
						<ul class="fxt-socials">
							<li class="fxt-instagram fxt-transformY-50 fxt-transition-delay-6"><a href="{{ ($sosmed->instagram != null) ? $sosmed->instagram : '#' }}" title="instagram"><i class="fab fa-instagram"></i></a></li>
							<li class="fxt-facebook fxt-transformY-50 fxt-transition-delay-4"><a href="{{ ($sosmed->facebook != null) ? $sosmed->facebook : '#' }}" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
							<li class="fxt-twitter fxt-transformY-50 fxt-transition-delay-5"><a href="{{ ($sosmed->twitter != null) ? $sosmed->twitter : '#' }}" title="twitter"><i class="fab fa-twitter"></i></a></li>
							<li class="fxt-youtube fxt-transformY-50 fxt-transition-delay-8"><a href="{{ ($sosmed->youtube != null) ? $sosmed->youtube : '#' }}" title="youtube"><i class="fab fa-youtube"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-6 col-12 fxt-bg-color">
					<div class="fxt-content">
						<div class="fxt-form">
							<form action="{{ route('postlogin') }}" method="POST">
                                @csrf
								<div class="form-group">
									<label for="email" class="input-label">Email</label>
									<input type="text" id="email" class="form-control @error('email') is-invalid @enderror"" name="email" placeholder="mail@host.com">
								</div>
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
								<div class="form-group">
									<label for="password" class="input-label">Password</label>
									<input id="password" type="password" class="form-control" name="password" placeholder="********">
									<i toggle="#password" class="fa fa-fw fa-eye toggle-password field-icon"></i>
								</div>
								<div class="form-group">
									<button type="submit" class="fxt-btn-fill">Log in</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- jquery-->
	<script src="{{ asset('xmee/js/jquery.min.js') }}"></script>
	<!-- Bootstrap js -->
	<script src="{{ asset('xmee/js/bootstrap.min.js') }}"></script>
	<!-- Imagesloaded js -->
	<script src="{{ asset('xmee/js/imagesloaded.pkgd.min.js') }}"></script>
	<!-- Validator js -->
	<script src="{{ asset('xmee/js/validator.min.js') }}"></script>
	<!-- Custom Js -->
	<script src="{{ asset('xmee/js/main.js') }}"></script>

</body>
</html>
