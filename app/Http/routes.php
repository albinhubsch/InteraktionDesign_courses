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

use App\Tag;

// Homepage
Route::get('/', 'HomeController@index');

// 
Route::get('/examen', 'ExamenController@index');

// Undersidan för listning av alla kurser
Route::get('/kurser', 'CoursesController@index');

// Route för specifik kurs
Route::get('/kurser/{course}', 'CourseController@index');




// ======================================================
// ======================================================
// ======================================================



// Dev Sidor för tillägg av kurser
Route::get('/add', 'CoursesController@create');
Route::post('/add', 'CoursesController@store');

// Dev Sidor för tillägg av recensioner
Route::get('/addReview', 'ReviewController@create');
Route::post('/addReview', 'ReviewController@store');

// 
Route::get('/addTagConn', function(){
	return view('addTagConn')->with('tags', DB::table('tags')->select('name', 'id')->get() );
});

Route::post('/addTagConn', function(){
	Tag::create(Request::all());
});

// 
// Route::controllers([
// 	'auth' => 'Auth\AuthController',
// 	'password' => 'Auth\PasswordController',
// ]);
