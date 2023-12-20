<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="colorlib">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Airlines ticket booking</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/linearicons.css">
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/bootstrap.css">
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/magnific-popup.css">
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/jquery-ui.css">
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/nice-select.css">
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/animate.min.css">
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/owl.carousel.css">
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/main.css">
</head>
<script>
    (function (window, document) {
        var loader = function () {
            var script = document.createElement("script"), tag = document.getElementsByTagName("script")[0];
            script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7);
            tag.parentNode.insertBefore(script, tag);
        };

        window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
    })(window, document);
</script>

<body>


	@include('frontend.partials.header')

	<main>
		@yield('content')
	</main>

	@include('frontend.partials.footer')



	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>

	<script src="{{ asset('frontend') }}/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="{{ asset('frontend') }}/js/popper.min.js"></script>
	<script src="{{ asset('frontend') }}/js/vendor/bootstrap.min.js"></script>
	<script src="{{ asset('frontend') }}/js/jquery-ui.js"></script>
	<script src="{{ asset('frontend') }}/js/easing.min.js"></script>
	<script src="{{ asset('frontend') }}/js/hoverIntent.js"></script>
	<script src="{{ asset('frontend') }}/js/superfish.min.js"></script>
	<script src="{{ asset('frontend') }}/js/jquery.ajaxchimp.min.js"></script>
	<script src="{{ asset('frontend') }}/js/jquery.magnific-popup.min.js"></script>
	<script src="{{ asset('frontend') }}/js/jquery.nice-select.min.js"></script>
	<script src="{{ asset('frontend') }}/js/owl.carousel.min.js"></script>
	<script src="{{ asset('frontend') }}/js/mail-script.js"></script>
	<script src="{{ asset('frontend') }}/js/main.js"></script>
</body>

</html>