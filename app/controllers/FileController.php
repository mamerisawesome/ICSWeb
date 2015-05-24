<?php
class FileController extends BaseController {
 
	public function index(){
		return View::make('fileupload');
	}
	
	public function upload_file(){
		$username = Session::get('username');
		$filename = $username.".jpg";
		//dd(Input::file('uploadfile'));
		DB::update("update accounts set avatar = '".$filename."' where username = '".$username."' ");
		Input::file('uploadfile')->move(public_path().'/upload',$filename);
		Session::put('avatar', $username);
		return View::make('pages/profile');
	}
}
?>