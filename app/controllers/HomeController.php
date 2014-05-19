<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function showLogin()
	{
		return View::make('login');
	}


	public function postLogin()
	{
		// validate the info, create rules for the inputs
			$rules = array(
			'email' => 'required|email', // make sure the email is an actual email
			'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
			);
			// run the validation rules on the inputs from the form
			$validator = Validator::make(Input::all(), $rules);
			// if the validator fails, redirect back to the form
			if ($validator->fails()) {
			return Redirect::to('login')
			->withErrors($validator) // send back all errors to the login form
			->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
			} else {
			// create our user data for the authentication
			$userdata = array(
			'email' => Input::get('email'),
			'password' => Input::get('password')
			);
			// attempt to do the login
			if (Auth::attempt($userdata)) {
			// validation successful!
			// redirect them to the secure section or whatever
			// return Redirect::to('secure');
			
			echo 'SUCCESS!' . 'Hej och välkommen ' . strtoupper(Auth::user()->name);
			} else {
			// validation not successful, send back to form 
			echo "Fel på lösenor eller Email, var god försök igen";
			}
		}
	}
	

	// public function postLogin(){
		
	
	// 	// $email = Input::get('email');

	// 	// $mysqli = new mysqli('localhost', 'root', '', 'reborn');

		

	// 	// $result = $mysqli->query("SELECT email from users WHERE email = '{$email}' LIMIT 1");

	// 	// if ($result->num_rows == 1) {
	// 	// 	echo 'yes sir';

	// 	// }
	// 	// else{
	// 	// 	echo 'nooop';
	// 	// }

	// 	$userData = array('email' => Input::get('email'), 'password' => Input::get('password'));

	// 	if(Auth::attempt($userData)){
	// 	echo 'yeees du klarade det ';
	// 	}
	// 	else{
		
	//  	return Redirect::to('hundennaaaaj');
	// 	}
	// }


	public function showRegister()
	{
		return View::make('register');
	}

	public function postRegister()
	{
		$input = Input::all();
		$rules = array('Username' => 'required|min:5', 'email' => 'required|min:5|unique:users|email', 'password' => 'required|min:5');
		
		$v = Validator::make($input, $rules);

		if($v->passes()){

			$user = new User();
			$user->name = $input['Username'];
			$user->email = $input['email'];
			$user->password = Hash::make($input['password']);

			$user->save();

			return Redirect::to('login');
		}
		else{
			// $messages = $v->messages();
			// echo $messages;
			return Redirect::to('register')->withInput()->withErrors($v);
		}
	}

	public function showAbout()
	{
		return View::make('about');
	}






}

