{!! Form::open(array('url' => '/addReview')) !!}

    {!! Form::textarea('text', 'Text'); !!}
	<br>

	{!! Form::text('author', 'Author'); !!}
    <br>

    {!! Form::text('course_id', 'Course_id'); !!}
    <br>

    {!! Form::submit('Lägg till'); !!}
{!! Form::close() !!}