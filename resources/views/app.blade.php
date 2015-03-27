<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../../favicon.ico">

	<title>Interaktion & Design - Kurser</title>

	<!-- Load Font -->
	<link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>

	<!-- Bootstrap core CSS -->
	{!! Html::style('/css/bootstrap.min.css') !!}

	{{-- Include font awesome --}}
	{!! Html::style('/font-awesome/css/font-awesome.min.css') !!}

	<!-- Custom styles for this template -->
	{!! Html::style('/css/overlay/overlay.css') !!}

	<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
	<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
	{{-- <script src="../../assets/js/ie-emulation-modes-warning.js"></script> --}}

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
</head>

<body>
	<nav class="navbar navbar-static-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				{!! Html::link('/', 'Interaktion & Design', array('class' => 'navbar-brand')) !!}
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-right navbar-nav">
					<li>{!! Html::link('/kurser', 'Kurser') !!}</li>
					<li>{!! Html::link('/examen', 'Examensformulär') !!}</li>
					<li>{!! Html::link('/loggain', 'Logga in') !!}</li>
				</ul>
			</div><!--/.navbar-collapse -->
		</div>
	</nav>

	<!-- Main jumbotron for a primary marketing message or call to action -->
	<div class="jumbotron">
		<div class="container">
			@yield('jumbotron')
		</div>
	</div>

	<div class="container">
		@yield('content')

	  	<hr>
		<footer>
			<p>&copy; Interaktion & Design - <a href="https://github.com/albinhubsch/InteraktionDesign_courses">Delta i projektet på GitHub <i class="fa fa-github"></i></a></p>
		</footer>
	</div>

	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	{{-- <script src="/js/ie10-viewport-bug-workaround.js"></script> --}}
	{!! Html::script('/js/base.js') !!}
</body>
</html>
