<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AuthController extends Controller {

	//
	public function login()
	{
		// return 'hello';
		return \Socialize::with('github')->redirect();
	}

	// public function welcomeBack()
	// {
	// 	return Socialite::with('github')->user();
	// }

}