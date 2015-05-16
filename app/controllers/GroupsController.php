<?php

class GroupsController extends BaseController {

    protected $group;

    public function __construct(Group $group)
    {
        $this->group = $group;
    }

	public function index()
	{
        return View::make('pages.groups.group');
    }
//
//
//	public function create()
//	{
//        return View::make('pages.groups.createGroup');
//	}
//
//
//	public function store()
//    {
//        $data = new Group;
//
//        $data->accessCode = Input::get('accessCode');
//        $data->courseTitle = Input::get('courseTitle');
//        $data->section = Input::get('section');
//        $data->classSize = Input::get('classSize');
//
//        //dd(URL::to("JSONcontents/groups/".$data->courseTitle.".json"));
//        //dd(File::isDirectory("JSONcontents"));
//        File::put("public/JSONcontents/groups/".$data->courseTitle.".json",$data);
//
//        $data->save();
//
//        return Redirect::route('page.group');
//	}
//
//    public function show($id)
//	{
//        $data = DB::table('groups')->where('courseTitle',$id)->first();
//        if($data != NULL) return View::make('pages.groups.group', compact('data'));
//	    else{
//            echo "<h1>Error 404! Group not found!</h1>";
//        }
//    }

    public function groupPost(){
        $groupData = Input::all();
        dd($groupData);

        $group_posts = [array(
            "postBy"            => NULL,
            "dateOfPost"        => NULL,
            "postTitle"         => NULL,
            "postContent"       => NULL,
            "comments"          => array(
                "commentBy"     => NULL,
                "date"          => NULL,
                "content"       => NULL
            )
        )];

        File::put('public/JSONcontents/groups/classList/'.$groupData.'_classList.json', json_encode($group_classList));
        File::put('public/JSONcontents/groups/posts/'.$name.'_posts.json', json_encode($group_posts));
        return Redirect::route('page.group');
    }


}
