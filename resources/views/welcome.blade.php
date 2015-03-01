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
								<li>{!! Html::link('#', 'Ladda ner') !!}</li>
							</ul>
						</nav>
					</div>
				</div>

				<div class="inner cover">
					<h1 class="cover-heading">Kurskatalog för Interaktion & Design</h1>
					<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem iste, eius adipisci vitae reprehenderit ullam quisquam obcaecati, soluta eligendi dolorum?</p>
					<p class="lead">
						{!! Html::link('/kurser', 'Bläddra bland kurser', array('class' => 'btn btn-lg btn-default')) !!}
					</p>
				</div>

				<div class="mastfoot">
					<div class="inner">
						<p>asd</p>
					</div>
				</div>

			</div>

		</div>

	</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
