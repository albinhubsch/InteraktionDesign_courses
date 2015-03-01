<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('courses', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->text('description');
			$table->float('academic_units');
			$table->enum('level', ['Grundnivå ej nybörjare', 'Avancerad nivå']);
			$table->enum('period', ['LP1', 'LP2', 'LP3', 'LP4', 'LP1-LP2', 'LP3-LP4']);
			$table->enum('speed', ['25%', '50%', '75%', '100%']);
			$table->text('prerequisite');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('courses');
	}

}
