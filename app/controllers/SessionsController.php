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
		$validator = Validator::make($data, User::$auth_rules);
		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		if(Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password')))){
			Session::put('type', Auth::user()->type);
			Session::put('username',Auth::user()->username);
			Session::put('id',Auth::user()->id);
			Session::put('firstName',Auth::user()->firstName);
			Session::put('middleName',Auth::user()->middleName);
			Session::put('lastName',Auth::user()->lastName);
			Session::put('birthdate',Auth::user()->birthdate);
			Session::put('sex',Auth::user()->sex);
			Session::put('email',Auth::user()->email);
			Session::put('password',Auth::user()->password);

			if(Auth::user()->type=='student'){
				Session::put('studentNumber',Auth::user()->studentNumber);
				return Redirect::intended('pages/groups/group');
			}else{
				Session::put('employeeNumber',Auth::user()->employeeNumber);
				Session::put('room',Auth::user()->room);
				Session::put('academic',Auth::user()->academicPosition);
				return Redirect::intended('pages/profile');
			}
		}
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 **/
	/*public function create()
	{
		return View::make('sessions.create');
	}
*/

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
	public function destroy(){
		Session::flush();
		return Redirect::to('/');
	}


}
