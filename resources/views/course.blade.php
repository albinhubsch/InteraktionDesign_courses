@extends('app')

@section('jumbotron')
	
	<div class ="single-course-title"> 
	<h2>{{{ $course->name }}}</h2>
	</div>
		<div class="course-list-item2">

			<span>
				
				<h3>
					<span>Studietakt:</span> {{ $course->speed }} 
				</h3>
				<h3>
					<span>Läsperiod:</span> {{ $course->period }} 
				</h3>
				<h3> 
					<span>Högskolepoäng:</span> {{ $course->academic_units }} hp
				</h3>
				<h3>
					<span>Nivå:</span> {{ $course->level }} 
				</h3>
			</span>
		</div>
@endsection


@section('content')
<div class="row">
	<div class="col-md-9">
		<h3>Kursbeskrivning</h3>
			
			<span class="course-single-page-info">
			{{{ $course->description }}}

			</span>
	</div>

	<div class="col-md-3">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic corporis inventore rem perferendis reiciendis aspernatur obcaecati, facilis labore quam soluta blanditiis voluptas, modi rerum aperiam libero odio magni, porro odit.
	</div>
</div>
@endsection