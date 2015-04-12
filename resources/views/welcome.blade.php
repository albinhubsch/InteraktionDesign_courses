<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../../favicon.ico">

	<title>interaktion & Design - Kurser</title>

	<!-- Load Font -->
	<link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>

	<!-- Bootstrap core CSS -->
	<link href="/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="/css/overlay/overlay.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="css/overlay/frontpage.css" rel="stylesheet">

</head>

<body>

	<div class="site-wrapper">

		<div class="site-wrapper-inner">

			<div class="cover-container">

				<div class="masthead clearfix">
					<div class="inner">
						<h3 class="masthead-brand">Interaktion & Design</h3>
						<nav>
							<ul class="nav masthead-nav">
								<li>{!! Html::link('/kurser', 'Kurser') !!}</li>
								<li>{!! Html::link('/examen', 'Examensformulär') !!}</li>
							</ul>
						</nav>
					</div>
				</div>

				<div class="inner cover">
					<h1 class="cover-heading">Kurskatalog för Interaktion & Design</h1>
					<p class="lead">Vi på Interaktion & Design har ett stort urval av kurser att välja bland. Och med många valfria poäng att fylla kan det vara svårt att hitta rätt. Denna onlinekatalog samlar information om kurser och hjälper dig göra bra val.</p>
					<p class="lead">
						{!! Html::link('/kurser', 'Bläddra bland kurser', array('class' => 'btn btn-lg btn-default')) !!}
					</p>
				</div>

				<div class="mastfoot">
					<div class="inner">
						<p>Interaktion & Design - <a href="https://github.com/albinhubsch/InteraktionDesign_courses">Delta i projektet på GitHub</a></p>
					</div>
				</div>

			</div>

		</div>

	</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script>
    	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    	ga('create', 'UA-61807089-1', 'auto');
    	ga('send', 'pageview');

    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
