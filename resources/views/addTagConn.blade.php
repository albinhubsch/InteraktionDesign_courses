{!! Form::open(array('url' => '/addTagConn')) !!}

	{{{ $tags }}}

    {!! Form::select('course_id', array('L' => 'Large', 'S' => 'Small')) !!}
	<br>

	{!! Form::select('tag_id', array('L' => 'Large', 'S' => 'Small')) !!}
    <br>

    {!! Form::submit('Lägg till'); !!}
{!! Form::close() !!}