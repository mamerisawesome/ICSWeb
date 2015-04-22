<?php

class StudentsController extends \BaseController {

    protected $student;

    public function __construct(Student $student)
    {
        $this->student = $student;
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
        $students = DB::table('students')->orderBy('lastName', 'asc')->get();
        if(DB::table('students')->count() > 0)  return View::make('pages.students.displayStudents')->with('students', $students);
        return View::make('pages.students.noStudents');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
        return View::make('pages.students.createStudent');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
        $input = Input::all();
        $pass = Hash::make(Input::get('password'));//encrypt password

        if(! $this->student->fill($input)->isValid())
        {
            return Redirect::back()->withInput()->withErrors($this->student->messages);
        }

        $this->student->password = $pass;
        $this->student->save();

        return Redirect::route('pages.students.index');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($username)
	{
		//
        $student = DB::table('students')->where('username', $username)->first();;
        return View::make('pages.students.viewStudent', compact('student'));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($username)
	{
		//
        $student = DB::table('students')->where('username', $username)->first();
        return View::make('pages.students.editStudent')->with('student', $student);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($username)
	{
		//
        $student = DB::table('students')->where('username', $username)->first();
        $input = Input::all()->except('accessCode');
        $pass = Hash::make(Input::get('password'));//encrypt password

        if(! $this->student->fill($input)->isValid()) {
            return Redirect::back()->withInput()->withErrors($this->student->messages);
        }

        $student->password = $pass;
        $student->save();

        return Redirect::route('pages.students.index');
	}


}
