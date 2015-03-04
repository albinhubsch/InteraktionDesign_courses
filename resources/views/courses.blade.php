@extends('app')

@section('content')
<div class="row">
	<div class="course-list col-md-9">
	@foreach($courses as $course)
		<div class="course-list-item">
			<h2><a href="#">{{ $course->name }}</a></h2>
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