@extends('app')

@section('jumbotron')

<div class ="single-course-title"> 
	<h2>Examensformulär</h2>
</div>
@endsection


@section('content')

<div class="row">
	<div class="col-md-9">
		<h3>Baskurser</h3>
		<p>Platsgaranti för programstudenter</p><br>
		<h4>Teknik för interaktion</h4>
		<table class="table table-striped">
			<tr>
				<th>Kurs</th>
				<th>Datum</th>
				<th>Högskolepoäng</th>
				<th>Kommentar</th>
			</tr>
			<tr>
				<td>Interaktionsteknik och design</td>
				<td></td>
				<td>7,5 hp</td>
				<td></td>
			</tr>
			<tr>
				<td>Programmeringsteknik med C och Matlab</td>
				<td></td> 
				<td>7,5 hp</td>
				<td></td>
			</tr>
			<tr>
				<td>Berättarteknik</td>
				<td></td> 
				<td>7,5 hp</td>
				<td></td>
			</tr>
			<tr>
				<td>Applikationsutveckling för Internet för ingenjörer</td>
				<td></td> 
				<td>7,5 hp</td>
				<td></td>
			</tr>
			<tr>
				<td>Databasteknik och webbaserade system för ingenjörer</td>
				<td></td> 
				<td>7,5 hp</td>
				<td></td>
			</tr>
			<tr>
				<td>Webbteknik för ingenjörer</td>
				<td></td> 
				<td>7,5 hp</td>
				<td></td>
			</tr>
			<tr>
				<td>Människa‐datorinteraktion</td>
				<td></td> 
				<td>7,5 hp</td>
				<td></td>
			</tr>

			<tr>
				<td></td>
				<td></td> 
				<th>52,5 hp</th>
				<td></td>
			</tr>
		</table>

		<h4>Datavetenskap</h4>
		<table class="table table-striped">
			<tr>
				<th>Kurs</th>
				<th>Datum</th>
				<th>Högskolepoäng</th>
				<th>Kommentar</th>
			</tr>
			<tr>
				<td>Objektorienterad programmeringsmetodik (Java)</td>
				<td></td>
				<td>7,5 hp</td>
				<td></td>
			</tr>
			<tr>
				<td>Datastrukturer och algoritmer</td>
				<td></td> 
				<td>7,5 hp</td>
				<td></td>
			</tr>
			<tr>
				<td>Datakommunikation och Internet</td>
				<td></td> 
				<td>7,5 hp</td>
				<td></td>
			</tr>

			<tr>
				<td></td>
				<td></td> 
				<th>22,5 hp</th>
				<td></td>
			</tr>
		</table>

		<h4>Medieteknik</h4>
		<table class="table table-striped">
			<tr>
				<th>Kurs</th>
				<th>Datum</th>
				<th>Högskolepoäng</th>
				<th>Kommentar</th>
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

		<h4>Matematik och matematisk statistik</h4>
		<table class="table table-striped">
			<tr>
				<th>Kurs</th>
				<th>Datum</th>
				<th>Högskolepoäng</th>
				<th>Kommentar</th>
			</tr>
			<tr>
				<td>Envariabelanalys 1</td>
				<td></td>
				<td>7,5 hp</td>
				<td></td>
			</tr>
			<tr>
				<td>Envariabelanalys 2</td>
				<td></td>
				<td>7,5 hp</td>
				<td></td>
			</tr>
			<tr>
				<td>Linjär Algebra</td>
				<td></td>
				<td>7,5 hp</td>
				<td></td>
			</tr>
			<tr>
				<td>Statistik för Teknologer</td>
				<td></td>
				<td>7,5 hp</td>
				<td></td>
			</tr>
			<tr>
				<td>
					<select class="form-control">
						<option> -- </option>
						<option> -- </option>
					</select>
				</td>
				<td></td>
				<td>7,5 hp</td>
				<td></td>
			</tr>

			<tr>
				<td></td>
				<td></td> 
				<th>37,5 hp</th>
				<td></td>
			</tr>
		</table>

		<h4>Industridesign</h4>
		<table class="table table-striped">
			<tr>
				<th>Kurs</th>
				<th>Datum</th>
				<th>Högskolepoäng</th>
				<th>Kommentar</th>
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

		<h4>Kultur & Medier</h4>
		<table class="table table-striped">
			<tr>
				<th>Kurs</th>
				<th>Datum</th>
				<th>Högskolepoäng</th>
				<th>Kommentar</th>
			</tr>
			<tr>
				<td>Interaktion & Medier</td>
				<td></td>
				<td>7,5 hp</td>
				<td></td>
			</tr>

			<tr>
				<td></td>
				<td></td> 
				<th>7,5 hp</th>
				<td></td>
			</tr>
		</table>

		<h4>Psykologi</h4>
		<table class="table table-striped">
			<tr>
				<th>Kurs</th>
				<th>Datum</th>
				<th>Högskolepoäng</th>
				<th>Kommentar</th>
			</tr>
			<tr>
				<td>Psykets Arkitektur</td>
				<td></td>
				<td>7,5 hp</td>
				<td></td>
			</tr>

			<tr>
				<td></td>
				<td></td> 
				<th>7,5 hp</th>
				<td></td>
			</tr>
		</table>

		<h4>Allmäna Ingenjörskurser</h4>
		<table class="table table-striped">
			<tr>
				<th>Kurs</th>
				<th>Datum</th>
				<th>Högskolepoäng</th>
				<th>Kommentar</th>
			</tr>
			<tr>
				<td>Projektledning</td>
				<td></td>
				<td>7,5 hp</td>
				<td></td>
			</tr>
			<tr>
				<td>Teknik för hållbar utveckling</td>
				<td></td>
				<td>7,5 hp</td>
				<td></td>
			</tr>

			<tr>
				<td></td>
				<td></td> 
				<th>15 hp</th>
				<td></td>
			</tr>
		</table>

		<h3>Valbara Kurser</h3>
		<p>Flertalet kurser skall du själv välja och fylla din examen med.</p><br>
		<h4>Teknik för interaktion yrkesförberedande</h4>
		<p>4 kurser varav 1 projektkurs och 2 på avancerad nivå, 30 hp</p>
		<table class="table table-striped">
			<tr>
				<th>Kurs</th>
				<th>Datum</th>
				<th>Högskolepoäng</th>
				<th>Kommentar</th>
			</tr>
			<tr>
				<td>Ubiquitous computing</td>
				<td></td>
				<td>7,5 hp</td>
				<td></td>
			</tr>
			<tr>
				<td>DBT - Design Build Test</td>
				<td></td>
				<td>7,5 hp</td>
				<td></td>
			</tr>
			<tr>
				<td>
					<select class="form-control">
						<option> -- </option>
						<option> -- </option>
					</select>
				</td>
				<td></td>
				<td>7,5 hp</td>
				<td></td>
			</tr>
			<tr>
				<td>
					<select class="form-control">
						<option> -- </option>
						<option> -- </option>
					</select>
				</td>
				<td></td>
				<td>7,5 hp</td>
				<td></td>
			</tr>

			<tr>
				<td></td>
				<td></td> 
				<th>30 hp</th>
				<td></td>
			</tr>
		</table>

		<h4>Teknik för interaktion</h4>
		<p>Fördjupning, 3 kurser varav 2 på avancerad nivå i datavetenskap eller medieteknik, 22,5 hp.</p>
		<table class="table table-striped">
			<tr>
				<th>Kurs</th>
				<th>Datum</th>
				<th>Högskolepoäng</th>
				<th>Kommentar</th>
			</tr>
			<tr>
				<td>
					<select class="form-control">
						<option>Student Conference</option>
						<option>Aktuell utveckling av interaktionsteknik och design</option>
					</select>
				</td>
				<td></td>
				<td>7,5 hp</td>
				<td></td>
			</tr>
			<tr>
				<td>Artificiell Intelligens</td>
				<td></td>
				<td>7,5 hp</td>
				<td></td>
			</tr>
			<tr>
				<td>
					<select class="form-control">
						<option> -- </option>
						<option> -- </option>
					</select>
				</td>
				<td></td>
				<td>7,5 hp</td>
				<td></td>
			</tr>

			<tr>
				<td></td>
				<td></td> 
				<th>22,5 hp</th>
				<td></td>
			</tr>
		</table>

		<h4>Breddingskurser</h4>
		<p>Inom psykologi, pedagogik, industridesign, lingvistik, ekonomi, informatik (ej tekniska kurser) 15 hp</p>
		<table class="table table-striped">
			<tr>
				<th>Kurs</th>
				<th>Datum</th>
				<th>Högskolepoäng</th>
				<th>Kommentar</th>
			</tr>
			<tr>
				<td>
					<select class="form-control">
						<option> -- </option>
						<option> -- </option>
					</select>
				</td>
				<td></td>
				<td>7,5 hp</td>
				<td></td>
			</tr>
			<tr>
				<td>
					<select class="form-control">
						<option> -- </option>
						<option> -- </option>
					</select>
				</td>
				<td></td>
				<td>7,5 hp</td>
				<td></td>
			</tr>

			<tr>
				<td></td>
				<td></td> 
				<th>15 hp</th>
				<td></td>
			</tr>
		</table>

		<h4>Fria Kurser</h4>
		<p></p>
		<table class="table table-striped">
			<tr>
				<th>Kurs</th>
				<th>Datum</th>
				<th>Högskolepoäng</th>
				<th>Kommentar</th>
			</tr>
			<tr>
				<td>
					<select class="form-control">
						<option> -- </option>
						<option> -- </option>
					</select>
				</td>
				<td></td>
				<td>7,5 hp</td>
				<td></td>
			</tr>
			<tr>
				<td>
					<select class="form-control">
						<option> -- </option>
						<option> -- </option>
					</select>
				</td>
				<td></td>
				<td>7,5 hp</td>
				<td></td>
			</tr>
			<tr>
				<td>
					<select class="form-control">
						<option> -- </option>
						<option> -- </option>
					</select>
				</td>
				<td></td>
				<td>7,5 hp</td>
				<td></td>
			</tr>
			<tr>
				<td>
					<select class="form-control">
						<option> -- </option>
						<option> -- </option>
					</select>
				</td>
				<td></td>
				<td>7,5 hp</td>
				<td></td>
			</tr>

			<tr>
				<td></td>
				<td></td> 
				<th>30 hp</th>
				<td></td>
			</tr>
		</table>

		<h4>Examensarbete</h4>
		<p></p>
		<table class="table table-striped">
			<tr>
				<th>Kurs</th>
				<th>Datum</th>
				<th>Högskolepoäng</th>
				<th>Kommentar</th>
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
		<div class="hidden-print hidden-xs hidden-sm affix">
			<ul>
				<li>Baskurser</li>
				<ul>
					<li>Teknik för interaktion</li>
					<li>Datavetenskap</li>
					<li>Medieteknik</li>
					<li>Matematik & Matematisk statistik</li>
					<li>Industridesign</li>
					<li>Kultur & Medier</li>
					<li>Psykologi</li>
					<li>Allmäna Ingenjörskurser</li>
				</ul>
				<li>Valbara kurser</li>
				<ul>
					<li>Teknik för interaktion yrkesförberedande</li>
					<li>Teknik för interaktion</li>
					<li>Breddningskurser</li>
					<li>Fria kurser</li>
				</ul>
			</ul>
		</div>
	</div>
</div>
@endsection