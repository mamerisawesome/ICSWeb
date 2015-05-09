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
		$data = DB::table('groups')->first();
        if($data != NULL) return View::make('pages.groups.group', compact('data'));
        else return View::make('pages.groups.empty');
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
        $data = new Group;

//        if(! $this->group->fill($input)->isValid())
//        {
//             return Redirect::back()->withInput()->withErrors($this->group->messages);
//        }

        $data->accessCode = Input::get('accessCode');
        $data->courseTitle = Input::get('courseTitle');
        $data->section = Input::get('section');
        $data->classSize = Input::get('classSize');

        //dd(URL::to("JSONcontents/groups/".$data->courseTitle.".json"));
        //dd(File::isDirectory("JSONcontents"));
        File::put("public/JSONcontents/groups/".$data->courseTitle.".json",$data);

        $data->save();

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
        $data = DB::table('groups')->where('courseTitle',$id)->first();
        if($data != NULL) return View::make('pages.groups.group', compact('data'));
	    else{
            echo "<h1>Error 404! Group not found!</h1>";
        }
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
