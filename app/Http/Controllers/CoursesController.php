<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Course;

use Request;

class CoursesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$periodArray = ['LP1' => 'HT period 1','LP2' => 'HT period 2', 'LP3' => 'VT period 3', 'LP4' => 'VT period 4', 'LP1-LP2' => 'HT period 1-2','LP1-LP2, LP3-LP4' => 'HT period 1-2 eller VT period 3-4', 'LP3-LP4' => 'VT period 3-4', 'LP1A' => 'HT period 1A','LP1B' => 'HT period 1B', 'LP2A' => 'HT period 2A','LP2B' => 'HT period 2B', 'LP3A' => 'VT period 3A', 'LP3B' => 'VT period 3B', 'LP4A' => 'VT period 4A', 'LP4B' => 'VT period 4B' ];

		$courses = Course::orderBy('name')->get();
		return view('courses')->with('courses', $courses)->with('periodArray', $periodArray);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return view('addCourse');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		Course::create(Request::all());
		return $input;
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
