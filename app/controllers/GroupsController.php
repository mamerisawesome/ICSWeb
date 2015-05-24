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
	public function create()
	{
        return View::make('pages.groups.createGroup');
	}
//
//
	public function store()
    {
        $data = new Group;
        $data->accessCode = Input::get('accessCode');
        $data->courseTitle = Input::get('courseTitle');
        $data->section = Input::get('section');
        $data->classSize = Input::get('classSize');
        $data->classList = 'http://localhost/public/JSONcontents/groups/classList/'.$data->courseTitle.$data->section.'_classList.json';
        $data->posts = 'http://localhost/public/JSONcontents/groups/classList/'.$data->courseTitle.$data->section.'_classList.json';

        function createGroupJsonFile($name){
            // JSON file creator
            $group_classList = [array(
                "username"  =>Session::get('username'),
                "firstname" =>Session::get('firstName'),
                "middlename"=>Session::get('middleName'),
                "lastname"  =>Session::get('lastName')
            )];

//            $group_posts = [];

//            $group_classList = array(
//                "userName"          => NULL,
//                "studentNumber"     => NULL
//            );
//
            $group_posts = [array(
                "postBy"            => Session::get('firstName') . ' ' . Session::get('lastName'),
                "dateOfPost"        => date('F d, Y'),
                "postTitle"         => 'Group created',
                "postContent"       => 'Your new group has been created. Updates will be posted in here.',
                "comments"          => []
            )];

            $userData = json_decode(file_get_contents('public/JSONcontents/accounts/groups/'. Session::get('username') . '_groups.json'), true);
            $groupObject = [
                "subject"=>Input::get('courseTitle'),
                "section"=>Input::get('section')
            ];
            array_push($userData['groups'],$groupObject);

            File::put('public/JSONcontents/accounts/groups/'.Session::get('username').'_groups.json', json_encode($userData));
            File::put('public/JSONcontents/groups/classList/'.$name.'_classList.json', json_encode($group_classList));
            File::put('public/JSONcontents/groups/posts/'.$name.'_posts.json', json_encode($group_posts));
        }
        $groupData = $data->courseTitle.$data->section;
        createGroupJsonFile($groupData);

        $data->save();

        return Redirect::route('page.group');
	}
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
        $group_posts = array(
            "postBy"            => htmlspecialchars(Input::get('postBy')),
            "dateOfPost"        => date('F d, Y'),
            "postTitle"         => htmlspecialchars(Input::get('postTitle')),
            "postContent"       => htmlspecialchars(Input::get('postContent')),
            "comments"          => []
        );

        $groupData = json_decode(file_get_contents('public/JSONcontents/groups/posts/'. Input::get('subject-name') . Input::get('section-name') . '_posts.json'), true);
        array_push($groupData,$group_posts);
        File::put('public/JSONcontents/groups/posts/'.Input::get('subject-name').Input::get('section-name').'_posts.json', json_encode($groupData));
        return Redirect::route('page.group');
    }

    public function showGroupJoin(){
        return View::make('pages.groups.joinGroup');
    }

    public function groupJoin(){
        $count = DB::table('groups')->where('accessCode',Input::get('accessCode'))->count();
        if($count){
            $query = DB::table('groups')->where('accessCode',Input::get('accessCode'))->first();
            $username = Input::get('userName');
            $firstname = Session::get('firstName');
            $middlename = Session::get('middleName');
            $lastname = Session::get('lastName');
            $group = $query->courseTitle . $query->section;

            $userData = array(
                "username" => $username,
                "firstname" => $firstname,
                "middlename" => $middlename,
                "lastname" => $lastname
            );
            $flag = 0;
            $groupData = json_decode(file_get_contents('public/JSONcontents/groups/classList/'. $group . '_classList.json'), true);
            for($o = 0; $o < count($groupData); $o += 1) {
                if($username == $groupData[$o]['username']){
                    $flag += 1;
                }
            }
            if($flag == 0){
                array_push($groupData, $userData);

                $userData = json_decode(file_get_contents('public/JSONcontents/accounts/groups/' . $username . '_groups.json'), true);
                $groupObject = [
                    "subject" => $query->courseTitle,
                    "section" => $query->section
                ];
                array_push($userData['groups'], $groupObject);

                File::put('public/JSONcontents/groups/classList/' . $group . '_classList.json', json_encode($groupData));
                File::put('public/JSONcontents/accounts/groups/' . $username . '_groups.json', json_encode($userData));
            }
        }

        return Redirect::route('page.group');
    }

    public function storeComment(){
//        dd(Input::all());

        $commentData = array(
            "commentBy"     => Session::get('firstName') . ' ' . Session::get('lastName'),
            "date"          => date('F d, Y'),
            "content"       => Input::get('commentContent')
        );

        $comment = json_decode(file_get_contents('public/JSONcontents/groups/posts/' . Input::get('commentGroup') . '_posts.json'), true);
//        dd($userData);
        array_push($comment[Input::get('commentPostIndex')]['comments'], $commentData);
//        dd($userData[Input::get('commentPostIndex')]['comments']);
//        dd($comment);
        File::put('public/JSONcontents/groups/posts/' . Input::get('commentGroup') . '_posts.json', json_encode($comment));
        return Redirect::route('page.group');
    }

}
