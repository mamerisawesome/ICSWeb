<?php
/**
 * Created by PhpStorm.
 * User: Almer
 * Date: 4/3/2015
 * Time: 6:46 PM
 */

class GeneralController extends BaseController{
    /*
	|--------------------------------------------------------------------------
	| General Controller
	|--------------------------------------------------------------------------
	|
	|   This is a controller for all the webpages.
	|
	|	Route::get('/pages', 'GeneralController@showContent');
	|
	*/

    public function show($somePage)
    {
        return View::make($somePage);
    }

    public function showCurriculum()
    {
        return View::make('pages.curriculum');
    }

    public function showDirectory()
    {
        return View::make('pages.directory');
    }

    public function showDivision()
    {
        return View::make('pages.division');
    }

    public function showGroup()
    {
        return View::make('pages.groups.group');
    }

    public function showHome()
    {
        return View::make('pages.home');
    }

    public function showAbout()
    {
        return View::make('pages.about');
    }

    public function showLibrary()
    {
        return View::make('pages.library');
    }

    public function showProfile()
    {
        return View::make('pages.profile');
    }

    public function showPublication()
    {
        return View::make('pages.publication');
    }

    public function showRegisterForm()
    {
        return View::make('pages.register_form');
    }

}