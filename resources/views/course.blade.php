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
			
		<div class="course-single-page-info">
		{{{ $course->description }}}

		</div>

		<div class="single-page-reviews">
			<h3>Recensioner</h3>	

			{{{ $course->description }}}

		</div>
	</div>

	<div class="col-md-3">

		<h3>Länkar</h3>
		<ul>
  			<li><a href="http://www.umu.se/utbildning/program-kurser/kurs/?code=5TF034">Kursen på Umeå Universitet</a></li>
  			<li><a href="https://www.antagning.se/se/course/HT_2015/UMU-54811">Kursen på Antagning</a></li>
		</ul>

	</div>
</div>
@endsection