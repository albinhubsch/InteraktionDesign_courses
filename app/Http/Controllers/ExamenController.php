<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Tag;

class ExamenController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$tag_courses = array();

		$tag_courses['Y'] = Tag::find(1)->courses()->get(array('id', 'name', 'academic_units'));
		$tag_courses['F'] = Tag::find(2)->courses()->get(array('id', 'name', 'academic_units'));
		$tag_courses['B'] = Tag::find(3)->courses()->get(array('id', 'name', 'academic_units'));
		$tag_courses['Fri'] = Tag::find(4)->courses()->get(array('id', 'name', 'academic_units'));
		$tag_courses['A'] = Tag::find(5)->courses()->get(array('id', 'name', 'academic_units'));

		return view('examenform')->with('tag_courses', $tag_courses);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
