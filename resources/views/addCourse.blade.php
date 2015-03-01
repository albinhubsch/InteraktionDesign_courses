{!! Form::open(array('url' => '/add')) !!}
    {!! Form::text('name', 'Kursnamn'); !!}
    <br>

    {!! Form::textarea('description', 'description'); !!}
	<br>

	{!! Form::text('academic_units', 'academic_units'); !!}
    <br>

    {!! Form::text('level', 'level'); !!}
    <br>

    {!! Form::text('period', 'period'); !!}
    <br>

    {!! Form::text('speed', 'speed'); !!}
    <br>

    {!! Form::text('prerequisite', 'prerequisite'); !!}
    <br>


    {!! Form::submit('Lägg till'); !!}
{!! Form::close() !!}

{{-- $table->increments('id');
$table->string('name');
$table->text('description');
$table->float('academic_units');
$table->enum('level', ['Grundnivå ej nybörjare', 'Avancerad nivå']);
$table->enum('period', ['LP1', 'LP2', 'LP3', 'LP4', 'LP1-LP2', 'LP3-LP4']);
$table->enum('speed', ['25%', '50%', '75%', '100%']);
$table->text('prerequisite');
$table->timestamps(); --}}