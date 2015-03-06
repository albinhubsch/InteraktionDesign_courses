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

// Undersidan för listning av alla kurser
Route::get('/kurser', 'CoursesController@index');

// Route för specifik kurs
Route::get('/kurser/{course}', 'CourseController@index');

// Dev Sidor för tillägg av kurser
Route::get('/add', 'CoursesController@create');
Route::post('/add', 'CoursesController@store');


// 
// Route::controllers([
// 	'auth' => 'Auth\AuthController',
// 	'password' => 'Auth\PasswordController',
// ]);
