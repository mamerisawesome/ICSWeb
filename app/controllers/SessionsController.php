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

	public function viewProfile($lastName){
		$user = DB::table('accounts')->where('lastName', $lastName)->first();
		if($user==null){
			return View::make('pages.notfound');
		}else if($user->type=='student'){
			Session::put('typeProf', $user->type);
			return View::make('pages.notfound');
		}else{
			Session::put('avatarProf', $user->avatar);
			Session::put('firstNameProf',$user->firstName);
			Session::put('middleNameProf',$user->middleName);
			Session::put('lastNameProf',$user->lastName);
			Session::put('usernameProf',$user->username);
			Session::put('academicProf',$user->academicPosition);
			Session::put('roomProf',$user->room);
			Session::put('consultProf', $user->consultation);
			Session::put('guideProf', $user->guide);
			Session::put('bioProf', $user->bio);
			return View::make('pages.profile-view');
		}
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
				return Redirect::intended('pages/group');
			}else{
				if(Auth::user()->avatar!=null){
					Session::put('avatar', Auth::user()->avatar);
				}
				Session::put('employeeNumber',Auth::user()->employeeNumber);
				Session::put('room',Auth::user()->room);
				Session::put('academic',Auth::user()->academicPosition);
				Session::put('consult', Auth::user()->consultation);
				Session::put('guide', Auth::user()->guide);
				Session::put('bio', Auth::user()->bio);
				return Redirect::intended('pages/profile');
			}
			
		}else{
			return Redirect::back();
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
		return Redirect::to('pages/home');
	}


}
