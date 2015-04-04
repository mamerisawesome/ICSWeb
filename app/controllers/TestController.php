<?php
/**
 * Created by PhpStorm.
 * User: Almer
 * Date: 4/3/2015
 * Time: 6:46 PM
 */

class TestController extends BaseController{
    /*
	|--------------------------------------------------------------------------
	| Test Controller
	|--------------------------------------------------------------------------
	|
	|   This is a controller test.
	|
	|	Route::get('/test', 'TestController@showContent');
	|
	*/

    public function show()
    {
        return View::make('pages.test');
    }
} 