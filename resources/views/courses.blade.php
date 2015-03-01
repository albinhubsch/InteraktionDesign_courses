@extends('app')

@section('content')
<div class="row">
	@foreach($courses as $course)
		<div class="course-list">
			<div class="col-md-4">
				<div class="courseBox">
					<h2><a href="#">{{ $course->name }}</a></h2>
					{{ $course->academic_units }}hp <br>
					{{ $course->level }} <br>
					{{ $course->period }} <br>
					{{ $course->speed }} <br>
					{{ $course->prerequisite }}
				</div>
			</div>
		</div>
	@endforeach
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