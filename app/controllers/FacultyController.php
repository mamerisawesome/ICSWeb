<?php

class FacultyController extends \BaseController {

    protected $faculty;

    public function __construct(Faculty $faculty)
    {
        $this->faculty = $faculty;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $faculties = DB::table('faculties')->orderBy('lastName', 'asc')->get();
        if(DB::table('faculties')->count() > 0)  return View::make('pages.faculty.index')->with('faculties', $faculties);
        return View::make('pages.faculty.empty');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        return View::make('pages.faculty.create');
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

        if(! $this->faculty->fill($input)->isValid())
        {
            return Redirect::back()->withInput()->withErrors($this->faculty->messages);
        }

        $this->faculty->password = $pass;
        $this->faculty->save();

        return Redirect::route('pages.faculty.index');
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
        $faculty = DB::table('faculties')->where('username', $username)->first();;
        return View::make('pages.faculty.show', compact('faculty'));
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
        $faculty = DB::table('faculties')->where('username', $username)->first();
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
        $faculty = DB::table('faculties')->where('username', $username)->first();
        $pass = Hash::make(Input::get('password'));//encrypt password

        if(! $this->faculty->fill($input)->isValid()) {
            return Redirect::back()->withInput()->withErrors($this->faculty->messages);
        }

        $faculty->password = $pass;
        $faculty->save();

        return Redirect::route('pages.faculty.index');
    }


}
