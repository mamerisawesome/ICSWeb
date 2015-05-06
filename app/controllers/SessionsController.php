<?php

class SessionsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}
	public function getLogin(){
		return View::make('pages.auth.logStud');
	}

	public function postLogin() {
		$data = Input::all();
		$validator = Validator::make($data, Student::$auth_rules);
		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$thisemail = Input::get('email');
		echo $thisemail;

		if(Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password')))){
			$id = Auth::user()->id;
			$username = Auth::user()->username;
			$firstName = Auth::user()->firstName;
			$middleName = Auth::user()->middleName;
			$lastName = Auth::user()->lastName;
			$birthdate = Auth::user()->birthdate;
			$sex = Auth::user()->sex;
			$email = Auth::user()->email;
			$password = Auth::user()->password;
			$studentNumber = Auth::user()->studentNumber;
			$accessCode =Auth::user()->accessCode;
			Session::put('username',$username);
			Session::put('id',$id);
			Session::put('firstName',$firstName);
			Session::put('middleName',$middleName);
			Session::put('lastName',$lastName);
			Session::put('birthdate',$birthdate);
			Session::put('sex',$sex);
			Session::put('email',$email);
			Session::put('password',$password);
			Session::put('studentNumber',$studentNumber);
			Session::put('accessCode',$accessCode);
			//echo $thisemail;
			return Redirect::intended('pages/group');
		}
		
		return Redirect::route('student.login');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('sessions.create');
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
	public function destroy()
	{
		Auth::logout();
		Session::flush();
		return Redirect::route('pages/student/login');
	}


}
