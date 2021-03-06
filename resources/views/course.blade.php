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



			<style> 
				inputs:-webkit-input-placeholder {
					color: #b5b5b5;
				}

				inputs-moz-placeholder {
					color: #b5b5b5;
				}
			</style> 


			@if(count($course->reviews) != 0)
			<div class ="text-review"> 
				@foreach($course->reviews as $review)
				<div class="review-content">
					<span>Anonym</span>
					<br>
					<p id="review-text">{{{ $review->text }}}</p>
					<br>
					<div id="border"></div>
				</div>	

				@endforeach
			</div>
			@else
			<p>Tyvärr finns det inga recensioner för denna kurs</p>  

			@endif
			


		</div>
	</div>

	<div class="col-md-3">

	</div>



</div>
@endsection