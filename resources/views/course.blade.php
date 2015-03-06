@extends('app')

@section('jumbotron')
	<h3>{{{ $course->name }}}</h3>
@endsection

@section('content')
<div class="row">
	<div class="col-md-9">
		{{{ $course->description }}}
	</div>
	<div class="col-md-3">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic corporis inventore rem perferendis reiciendis aspernatur obcaecati, facilis labore quam soluta blanditiis voluptas, modi rerum aperiam libero odio magni, porro odit.
	</div>
</div>
@endsection