@extends('app')

@section('jumbotron')
	<h2>Kurskatalog</h2>
	<p>Nedan hittar du en lista på flertalet av de kurser som kan väljas in i din examen.</p>
	{{-- <h3>Sök efter kurs</h3>
	<input id="jumbotron_search_field" name="jumbotron_search_field" class=".col-xs-12 .col-md-8" type="text">
	<br><br>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi quo ad voluptas, cupiditate eos autem.</p>
	<div class="btn-group">
		<button type="button" class="btn btn-default dropdown-toggle" aria-expanded="false" >
			HT 
		</button>
	</div>
	<div class="btn-group">
		<button type="button" class="btn btn-default dropdown-toggle" aria-expanded="false" >
			VT 
		</button>
	</div>	 
	<div class="btn-group">
		<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
			Studietakt <span class="caret"></span>
		</button>
		<ul class="dropdown-menu" role="menu">
			<li><a href="#">25%</a></li>
			<li><a href="#">50%</a></li>
			<li><a href="#">100%</a></li>
			<li class="divider"></li>
			<li><a href="#">Här kan man också ha nått</a></li>
		</ul>
	</div>
	<div class="btn-group">
		<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
			Läsperiod <span class="caret"></span>
		</button>
		<ul class="dropdown-menu" role="menu">
			<li><a href="#">HT period 1</a></li>
			<li><a href="#">HT period 2</a></li>
			<li><a href="#">VT Period 3</a></li>
			<li><a href="#">VT Period 4</a></li>
			<li class="divider"></li>
			<li><a href="#">Här kan man också ha nått</a></li>
		</ul>
	</div>
	<div class="btn-group">
		<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
			Högskolepoäng <span class="caret"></span>
		</button>
		<ul class="dropdown-menu" role="menu">
			<li><a href="#">7.5 hp</a></li>
			<li><a href="#">9 hp</a></li>
			<li><a href="#">15 hp</a></li>
			<li class="divider"></li>
			<li><a href="#">Här kan man också ha nått</a></li>
		</ul>
	</div>
	<div class="btn-group">
		<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
			Nivå <span class="caret"></span>
		</button>
		<ul class="dropdown-menu" role="menu">
			<li><a href="#">Grundnivå ej nybörjare</a></li>
			<li><a href="#">Avancerad nivå</a></li>
			<li class="divider"></li>
			<li><a href="#">Här kan man också ha nått</a></li>
		</ul>
	</div> --}}
@endsection

@section('content')
<div class="row">
	<div class="course-list col-md-9">
	@foreach($courses as $course)
		<div class="course-list-item">
			<h2>{!! Html::link('kurser/'.urlencode($course->name), $course->name) !!}</h2>
			<span>
				
				<h3>
					<span>Studietakt:</span> {{ $course->speed }} 
				</h3>
				<h3>
					<span>Läsperiod:</span> {{ $periodArray[$course->period] }} 
				</h3>
				<h3> 
					<span>Högskolepoäng:</span> {{ $course->academic_units }} hp
				</h3>
				<h3>
					<span>Nivå:</span> {{ $course->level }} 
				</h3>
			</span>
		</div>
	@endforeach
	</div>
	<div class="col-md-3">

	</div>
</div>
<script>
	var data = {!! json_encode($courses) !!}
</script>
@endsection

{{-- $table->increments('id');
$table->string('name');
$table->text('description');
$table->float('academic_units');
$table->enum('level', ['Grundnivå ej nybörjare', 'Avancerad nivå']);
$table->string('period', ['LP1', 'LP2', 'LP3', 'LP4', 'LP1-LP2', 'LP3-LP4']);
$table->enum('speed', ['25%', '50%', '75%', '100%']);
$table->text('prerequisite');
$table->timestamps(); --}}