<?php

class GroupsController extends \BaseController {

    protected $group;

    public function __construct(Group $group)
    {
        $this->group = $group;
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = new StdClass;
        $data->name = 'first';

        return View::make('pages.groups.group', compact('data'));
    }


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('pages.groups.createGroup');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
    {
        $data = new StdClass;
        $input = Input::all();

        if(! $this->group->fill($input)->isValid())
        {
             return Redirect::back()->withInput()->withErrors($this->group->messages);
        }

        $this->group->accessCode = Input::get('accessCode');
        $this->group->courseTitle = Input::get('courseTitle');
        $this->group->section = Input::get('section');
        $this->group->classSize = Input::get('classSize');

        $this->group->save();

        return Redirect::route('pages.group.index');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  string  $user
	 * @return Response
	 */
	public function show($id)
	{
		/*$groups = array();

        for($i = 0; $i < 10; $i += 1){
            $group = new StdClass;

            $group->name = "sample{$i}";
            $group->id = $i;

            $groups[] = $group;
        }*/
        $data = new StdClass;
        $data->name = $id;

        //echo "<script>alert($group->name);</script>";

        return View::make('pages.groups.group', compact('data'));
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
