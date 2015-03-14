{!! Form::open(array('url' => '/addTagConn')) !!}

	{!! Form::select('tag_id', $courses) !!}
    <br><br>

    {!! Form::select('course_id', $tags) !!}
	<br><br>

    {!! Form::submit('Lägg till'); !!}
{!! Form::close() !!}