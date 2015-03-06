@extends('app')

@section('jumbotron')
	<h3>Sök efter kurs</h3>
	<input id="jumbotron_search_field" name="jumbotron_search_field" class=".col-xs-12 .col-md-8" type="text">
	<br><br>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi quo ad voluptas, cupiditate eos autem.</p>
@endsection

@section('content')
<div class="row">
	<div class="course-list col-md-9">
	@foreach($courses as $course)
		<div class="course-list-item">
			<h2>{!! Html::link('kurser/'.$course->name, $course->name) !!}</h2>
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
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic corporis inventore rem perferendis reiciendis aspernatur obcaecati, facilis labore quam soluta blanditiis voluptas, modi rerum aperiam libero odio magni, porro odit.
	</div>
</div>
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