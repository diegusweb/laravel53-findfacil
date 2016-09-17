<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Sept - StratUp Landing Page</title>

		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,400italic,600,300italic,300|Oswald:400,300,700' rel='stylesheet' type='text/css'>
    <!-- Bootstrap -->
    <link href="{{ asset('web/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('web/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('web/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('web/css/owl.theme.css') }}" rel="stylesheet">
    <link href="{{ asset('web/css/owl.transitions.css') }}" rel="stylesheet">
    <link href="{{ asset('web/css/style.css') }}" rel="stylesheet">




		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="js/html5shiv.min.js"></script>
		<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>
	<body data-spy="scroll" data-target=".main-nav">

		<header class="st-navbar">
			<nav class="navbar navbar-default navbar-fixed-top clearfix" role="navigation">
				<div class="container"><!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sept-main-nav">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#"><img src="{{ asset('web/photos/logo3.png') }}" alt="" class="img-responsive"></a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse main-nav" id="sept-main-nav">
						<ul class="nav navbar-nav navbar-right">
							<li class="active"><a href="#home">Home</a></li>
							<li><a href="#about">About</a></li>
                <li><a href="#service">service</a></li>



							<li><a href="#login">Login</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div>
			</nav>
		</header>

		@yield('content')

		<footer class="site-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						&copy; <a href="https://www.cantothemes.com">CantoThemes</a> 2015.
						<!-- Don't Remove/Edit this. If you remove this you don't have permission to use this template. -->
						Designed by <a href="https://www.cantothemes.com">CantoThemes</a>
						<!-- So Please don't remove this -->
					</div>
				</div>
			</div>
		</footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('web/js/jquery.min.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('web/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('web/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('web/js/jquery.stellar.js') }}"></script>
    <script src="{{ asset('web/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('web/js/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('web/js/jquery.countTo.js') }}"></script>
    <script src="{{ asset('web/js/jquery.shuffle.modernizr.js') }}"></script>
    <script src="{{ asset('web/js/jquery.shuffle.js') }}"></script>
    <script src="{{ asset('web/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('web/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('web/js/script.js') }}"></script>
	</body>
</html>
