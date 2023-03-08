<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>OnePage - Creative Design Studio</title>
		<link rel="shortcut icon" href="{{asset('assets')}}/images/fv.png" type="image/x-icon">
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--Css Fils -->
		<link rel="stylesheet" href="{{asset('assets')}}/css/animate.css">
		<link rel="stylesheet" href="{{asset('assets')}}/css/fontawesome-all.css">
		<link rel="stylesheet" href="{{asset('assets')}}/css/owl.carousel.css">
		<link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.min.css">
		<link rel="stylesheet" href="{{asset('assets')}}/css/flaticon-32.css">
		<link rel="stylesheet" href="{{asset('assets')}}/css/rs6-32.css">
		<link rel="stylesheet" href="{{asset('assets')}}/css/revulation-arrow-32.css">
		<link rel="stylesheet" href="{{asset('assets')}}/css/style-32.css">
	</head>

	<body>
        <!-- Preloader-->
		<div class="loading-preloader">
			<div id="loading-preloader">
				<div class="line_shape"></div>
				<div class="line_shape"></div>
				<div class="line_shape"></div>
				<div class="line_shape"></div>
				<div class="line_shape"></div>
				<div class="line_shape"></div>
				<div class="line_shape"></div>
				<div class="line_shape"></div>
				<div class="line_shape"></div>
				<div class="line_shape"></div>
			</div>
		</div>
		<!-- Preloader End -->
        <!-- ScrollTop Button -->
        <a href="#" class="applghu-scroll-top"><i class="fas fa-angle-up"></i></a>

        @include('layouts.header')
        @yield('content')        
        @include('layouts.footer')

    </body>
</html>