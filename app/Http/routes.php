<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Homepage
Route::get('/', 'HomeController@index');

// 
Route::get('/examen', 'ExamenController@index');
Route::get('/examen/print', 'ExamenController@printForm');

// Undersidan för listning av alla kurser
Route::get('/kurser', 'CourseController@index');

// Route för specifik kurs
Route::get('/kurser/{course}', 'CourseController@show');

// Route för login
Route::get('/login', 'AuthController@login');


// ======================================================
// ======================================================
// ======================================================



// Dev Sidor för tillägg av kurser
Route::get('/add', 'CourseController@create');
Route::post('/add', 'CourseController@store');

// Dev Sidor för tillägg av recensioner
Route::get('/addReview', 'ReviewController@create');
Route::post('/addReview', 'ReviewController@store');

Route::get('/testTag', function(){
	$course = App\Course::find(1);
	$arr = '';
	foreach ($course->tags()->get() as $tag) {
		$arr = ''.$tag->short.':'.$arr;
	}
	return $arr;
});

// 
Route::get('/addTagConn', function(){
	$tags = array();

	foreach (DB::table('tags')->select('short', 'id')->get() as $tag) {
		$tags = array_add($tags, $tag->id, $tag->short);
	}

	$courses = array();

	foreach (DB::table('courses')->select('name', 'id')->get() as $course) {
		$courses = array_add($courses, $course->id, $course->name);
	}

	// return $tags;
	return view('addTagConn')->with('tags', $tags)->with('courses', $courses);
});

Route::post('/addTagConn', function(){
	
	$input = Request::all();

	$course = App\Course::find($input['course_id']);

	$course->tags()->attach($input['tag_id']);

	return 'tillagd';
});

// 
// Route::controllers([
// 	'auth' => 'Auth\AuthController',
// 	'password' => 'Auth\PasswordController',
// ]);
