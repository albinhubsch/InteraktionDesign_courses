<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Course;

class CourseController extends Controller {

	/**
	 *
	 * @return Response
	 */
	public function index($course)
	{
		return view('course')->with('course', Course::where('name', '=', $course)->firstOrFail());
	}

}
