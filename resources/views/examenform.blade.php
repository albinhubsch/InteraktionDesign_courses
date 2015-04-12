@extends('app')

@section('jumbotron')

<div class ="single-course-title"> 
	<h2>Examensformulär</h2>
	<p>Formuläret nedan hjälper dig planera din examen och de kurser du vill skall ingå i din utbildning.</p>
</div>
@endsection


@section('content')

<div class="row">
	<div class="col-md-9">
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
				<td>
					<select name="Ma-kurs-0" class="form-control select-Ma-kurser">
						<option value="0">--</option>
					</select>
				</td>
				<td></td>
				<td class="academic_units">--</td>
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
				<td>7.5 hp</td>
				<td></td>
			</tr>
			<tr>
				<td>DBT - Design Build Test</td>
				<td></td>
				<td>7.5 hp</td>
				<td></td>
			</tr>
			@for ($i = 0; $i < 2; $i++)
				<tr>
					<td>
						<select name="Y-kurs-{!! $i !!}" class="form-control select-Y-kurser">
							<option value="0">--</option>
						</select>
					</td>
					<td></td>
					<td class="academic_units">--</td>
					<td></td>
				</tr>
			@endfor

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
				<td>7.5 hp</td>
				<td></td>
			</tr>
			<tr>
				<td>
					<select name="F-kurs-0" class="form-control">
						<option value="0">--</option>
						<option value="4">Student Conference in Computing Science</option>
						<option value="18">Aktuell utveckling inom Interaktionsteknik och design</option>
					</select>
				</td>
				<td></td>
				<td class="academic_units">--</td>
				<td></td>
			</tr>
			@for ($i = 0; $i < 1; $i++)
				<tr>
					<td>
						<select name="F-kurs-{!! $i+1 !!}" class="form-control select-F-kurser">
							<option value="0">--</option>
						</select>
					</td>
					<td></td>
					<td class="academic_units">--</td>
					<td></td>
				</tr>
			@endfor
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
			@for ($i = 0; $i < 2; $i++)
				<tr>
					<td>
						<select name="B-kurs-{!! $i !!}" class="form-control select-B-kurser">
							<option value="0">--</option>
						</select>
					</td>
					<td></td>
					<td class="academic_units">--</td>
					<td></td>
				</tr>
			@endfor
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
			@for ($i = 0; $i < 4; $i++)
				<tr>
					<td>
						<select name="Fri-kurs-{!! $i !!}" class="form-control select-Fri-kurser">
							<option value="0">--</option>
						</select>
					</td>
					<td></td>
					<td class="academic_units">--</td>
					<td></td>
				</tr>
			@endfor
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

	</div>

	<div class="col-md-3">
		<div id="right-static-nav" class="hidden-print hidden-xs hidden-sm" data-spy="affix" data-offset-top="280">
			<ul>
				<li>
					<a class="right-static-nav-header" href="#Baskurser">Baskurser</a>
					<ul class="right-static-nav-inner">
						<li><a href="#Teknik-för-interaktion">Teknik för interaktion</a></li>
						<li><a href="#Datavetenskap">Datavetenskap</a></li>
						<li><a href="#Medieteknik">Medieteknik</a></li>
						<li><a href="#Matematik-&-Matematisk-statistik">Matematik & Matematisk statistik</a></li>
						<li><a href="#Industridesign">Industridesign</a></li>
						<li><a href="#Kultur-&-Medier">Kultur & Medier</a></li>
						<li><a href="#Psykologi">Psykologi</a></li>
						<li><a href="#Allmäna-Ingenjörskurser">Allmäna Ingenjörskurser</a></li>
					</ul>
				</li>
				<li>
					<a class="right-static-nav-header" href="#Valbara-Kurser">Valbara kurser</a>
					<ul class="right-static-nav-inner">
						<li><a href="#Teknik-för-interaktion-yrkesförberedande">Teknik för interaktion yrkesförberedande</a></li>
						<li><a href="#Teknik-för-interaktion-fördjupning">Teknik för interaktion fördjupning</a></li>
						<li><a href="#Breddningskurser">Breddningskurser</a></li>
						<li><a href="#Fria-kurser">Fria kurser</a></li>
						<li><a href="#Examensarbete">Examensarbete</a></li>
					</ul>
				</li>
			</ul>
			<hr>
			<div id="controllers">
				{{-- <button class="btn btn-success btn-block"><i class="fa fa-hdd-o"></i> Spara formuläret</button> --}}
				<a class="btn btn-success btn-block" href="examen/print" target="_blank"><i class="fa fa-print"></i> Skriv ut</a>
				<button class="btn btn-danger btn-block" onclick="ExamenFormModule.emptyExamForm()"><i class="fa fa-trash-o"></i> Töm formuläret</button>
			</div>
		</div>
	</div>
</div>
{{-- LOAD DATA INTO JAVASCRIPT VARIABLE --}}
<script>
	var examen_kurser = {!! json_encode($tag_courses); !!};
</script>

@endsection

@section('onLoad')
	<script>
		ExamenFormModule.init();
	</script>
@endsection