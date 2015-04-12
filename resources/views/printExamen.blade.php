<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../../favicon.ico">

	<title>Interaktion & Design - Examensformulär</title>

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
<body onload="ExamenFormModule.printPage()">
	<div class="container">
		<h1>Examensformulär</h1>
		<p></p>

		<h3 id="Baskurser"><i class="fa fa-graduation-cap"></i> Baskurser</h3>
		<p>Platsgaranti för programstudenter</p>
		<h4 id="Teknik-för-interaktion">Teknik för interaktion</h4>
		<table class="table table-striped">
			<tr>
				<th>Kurs</th>
				<th></th>
				<th>Högskolepoäng</th>
				<th></th>
			</tr>
			<tr>
				<td>Interaktionsteknik och design</td>
				<td></td>
				<td>7.5 hp</td>
				<td></td>
			</tr>
			<tr>
				<td>Programmeringsteknik med C och Matlab</td>
				<td></td> 
				<td>7.5 hp</td>
				<td></td>
			</tr>
			<tr>
				<td>Berättarteknik</td>
				<td></td> 
				<td>7.5 hp</td>
				<td></td>
			</tr>
			<tr>
				<td>Applikationsutveckling för Internet för ingenjörer</td>
				<td></td> 
				<td>7.5 hp</td>
				<td></td>
			</tr>
			<tr>
				<td>Databasteknik och webbaserade system för ingenjörer</td>
				<td></td> 
				<td>7.5 hp</td>
				<td></td>
			</tr>
			<tr>
				<td>Webbteknik för ingenjörer</td>
				<td></td> 
				<td>7.5 hp</td>
				<td></td>
			</tr>
			<tr>
				<td>Människa‐datorinteraktion</td>
				<td></td> 
				<td>7.5 hp</td>
				<td></td>
			</tr>

			<tr>
				<td></td>
				<td></td> 
				<th>52.5 hp</th>
				<td></td>
			</tr>
		</table>

		<h4 id="Datavetenskap">Datavetenskap</h4>
		<table class="table table-striped">
			<tr>
				<th>Kurs</th>
				<th></th>
				<th>Högskolepoäng</th>
				<th></th>
			</tr>
			<tr>
				<td>Objektorienterad programmeringsmetodik (Java)</td>
				<td></td>
				<td>7.5 hp</td>
				<td></td>
			</tr>
			<tr>
				<td>Datastrukturer och algoritmer</td>
				<td></td> 
				<td>7.5 hp</td>
				<td></td>
			</tr>
			<tr>
				<td>Datakommunikation och Internet</td>
				<td></td> 
				<td>7.5 hp</td>
				<td></td>
			</tr>

			<tr>
				<td></td>
				<td></td> 
				<th>22.5 hp</th>
				<td></td>
			</tr>
		</table>

		<h4 id="Medieteknik">Medieteknik</h4>
		<table class="table table-striped">
			<tr>
				<th>Kurs</th>
				<th></th>
				<th>Högskolepoäng</th>
				<th></th>
			</tr>
			<tr>
				<td>Mediesignaler</td>
				<td></td>
				<td>15 hp</td>
				<td></td>
			</tr>

			<tr>
				<td></td>
				<td></td> 
				<th>15 hp</th>
				<td></td>
			</tr>
		</table>
		
		<br>
		<h4 id="Matematik-&-Matematisk-statistik">Matematik & matematisk statistik</h4>
		<table id="table-Ma" class="table table-striped">
			<tr>
				<th>Kurs</th>
				<th></th>
				<th>Högskolepoäng</th>
				<th></th>
			</tr>
			<tr>
				<td>Envariabelanalys 1</td>
				<td></td>
				<td class="academic_units">7.5 hp</td>
				<td></td>
			</tr>
			<tr>
				<td>Envariabelanalys 2</td>
				<td></td>
				<td class="academic_units">7.5 hp</td>
				<td></td>
			</tr>
			<tr>
				<td>Linjär Algebra</td>
				<td></td>
				<td class="academic_units">7.5 hp</td>
				<td></td>
			</tr>
			<tr>
				<td>Statistik för Teknologer</td>
				<td></td>
				<td class="academic_units">7.5 hp</td>
				<td></td>
			</tr>

			<tr>
				<td></td>
				<td></td> 
				<th class="academic_units_sum">--</th>
				<td></td>
			</tr>
		</table>

		<h4 id="Industridesign">Industridesign</h4>
		<table class="table table-striped">
			<tr>
				<th>Kurs</th>
				<th></th>
				<th>Högskolepoäng</th>
				<th></th>
			</tr>
			<tr>
				<td>Industridesign & Interaktionsdesign</td>
				<td></td>
				<td>15 hp</td>
				<td></td>
			</tr>

			<tr>
				<td></td>
				<td></td> 
				<th>15 hp</th>
				<td></td>
			</tr>
		</table>

		<h4 id="Kultur-&-Medier">Kultur & Medier</h4>
		<table class="table table-striped">
			<tr>
				<th>Kurs</th>
				<th></th>
				<th>Högskolepoäng</th>
				<th></th>
			</tr>
			<tr>
				<td>Interaktion & Medier</td>
				<td></td>
				<td>7.5 hp</td>
				<td></td>
			</tr>

			<tr>
				<td></td>
				<td></td> 
				<th>7.5 hp</th>
				<td></td>
			</tr>
		</table>

		<h4 id="Psykologi">Psykologi</h4>
		<table class="table table-striped">
			<tr>
				<th>Kurs</th>
				<th></th>
				<th>Högskolepoäng</th>
				<th></th>
			</tr>
			<tr>
				<td>Psykets Arkitektur</td>
				<td></td>
				<td>7.5 hp</td>
				<td></td>
			</tr>

			<tr>
				<td></td>
				<td></td> 
				<th>7.5 hp</th>
				<td></td>
			</tr>
		</table>

		<h4 id="Allmäna-Ingenjörskurser">Allmäna Ingenjörskurser</h4>
		<table class="table table-striped">
			<tr>
				<th>Kurs</th>
				<th></th>
				<th>Högskolepoäng</th>
				<th></th>
			</tr>
			<tr>
				<td>Projektledning</td>
				<td></td>
				<td>7.5 hp</td>
				<td></td>
			</tr>
			<tr>
				<td>Teknik för hållbar utveckling</td>
				<td></td>
				<td>7.5 hp</td>
				<td></td>
			</tr>

			<tr>
				<td></td>
				<td></td> 
				<th>15 hp</th>
				<td></td>
			</tr>
		</table>

		<h3 id="Valbara-Kurser"><i class="fa fa-cubes"></i> Valbara Kurser</h3>
		<p>Flertalet kurser skall du själv välja och fylla din examen med.</p>
		<h4 id="Teknik-för-interaktion-yrkesförberedande">Teknik för interaktion yrkesförberedande</h4>
		<p>4 kurser varav 1 projektkurs och 2 på avancerad nivå, 30 hp</p>
		<table id="table-Y" class="table table-striped">
			<tr>
				<th>Kurs</th>
				<th></th>
				<th>Högskolepoäng</th>
				<th></th>
			</tr>
			<tr>
				<td>Ubiquitous computing</td>
				<td></td>
				<td class="academic_units">7.5 hp</td>
				<td></td>
			</tr>
			<tr>
				<td>DBT - Design Build Test</td>
				<td></td>
				<td class="academic_units">7.5 hp</td>
				<td></td>
			</tr>

			<tr>
				<td></td>
				<td></td> 
				<th class="academic_units_sum">--</th>
				<td></td>
			</tr>
		</table>

		<h4 id="Teknik-för-interaktion-fördjupning">Teknik för interaktion fördjupning</h4>
		<p>Fördjupning, 3 kurser varav 2 på avancerad nivå i datavetenskap eller medieteknik, 22,5 hp.</p>
		<table id="table-F" class="table table-striped">
			<tr>
				<th>Kurs</th>
				<th></th>
				<th>Högskolepoäng</th>
				<th></th>
			</tr>
			<tr>
				<td>Artificiell Intelligens</td>
				<td></td>
				<td class="academic_units">7.5 hp</td>
				<td></td>
			</tr>

			<tr>
				<td></td>
				<td></td> 
				<th class="academic_units_sum">--</th>
				<td></td>
			</tr>
		</table>

		<h4 id="Breddningskurser">Breddingskurser</h4>
		<p>Inom psykologi, pedagogik, industridesign, lingvistik, ekonomi, informatik (ej tekniska kurser) 15 hp</p>
		<table id="table-B" class="table table-striped">
			<tr>
				<th>Kurs</th>
				<th></th>
				<th>Högskolepoäng</th>
				<th></th>
			</tr>
			<tr>
				<td></td>
				<td></td> 
				<th class="academic_units_sum">--</th>
				<td></td>
			</tr>
		</table>

		<h4 id="Fria-kurser">Fria Kurser</h4>
		<p>Totalt 30 hp fria kurser. Kan väljas fritt bland kurser.</p>
		<table id="table-Fri" class="table table-striped">
			<tr>
				<th>Kurs</th>
				<th></th>
				<th>Högskolepoäng</th>
				<th></th>
			</tr>
			<tr>
				<td></td>
				<td></td> 
				<th class="academic_units_sum">--</th>
				<td></td>
			</tr>
		</table>

		<h4 id="Examensarbete">Examensarbete</h4>
		<p></p>
		<table class="table table-striped">
			<tr>
				<th>Kurs</th>
				<th></th>
				<th>Högskolepoäng</th>
				<th></th>
			</tr>
			<tr>
				<td>Valbart inom området för utbildningen</td>
				<td></td>
				<th>30 hp</th>
				<td></td>
			</tr>

			<tr>
				<td></td>
				<td></td> 
				<th>30 hp</th>
				<td></td>
			</tr>
		</table>

		<style>
			td:first-child{
				width: 60%;
			}
		</style>

	  	<hr>
		<footer>
			<p>Detta formulär genererades på http://kurser.interaktion.nu.</p>
			<p>&copy; Interaktion & Design - <a href="https://github.com/albinhubsch/InteraktionDesign_courses"> <i class="fa fa-github"></i></a></p>
		</footer>
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
	{{-- <script src="/js/ie10-viewport-bug-workaround.js"></script> --}}
	{!! Html::script('/js/base.js') !!}
</body>