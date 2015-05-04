<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//Controllers for home
Route::get('/', array('uses' => 'HomeController@showWelcome', 'as' => 'index'));
Route::post('/', array('uses'=> 'HomeController@showWelcome', 'as' => 'index'));

//Defined by GeneralController to the web pages in the site
Route::get('pages/about',array('uses' => 'GeneralController@showAbout', 'as' => 'page.about'));
Route::get('pages/library',array('uses' => 'GeneralController@showLibrary', 'as' => 'page.library'));
Route::get('pages/curriculum',array('uses' => 'GeneralController@showCurriculum', 'as' => 'page.curriculum'));
Route::get('pages/directory',array('uses' => 'GeneralController@showDirectory', 'as' => 'page.directory'));
Route::get('pages/division',array('uses' => 'GeneralController@showDivision', 'as' => 'page.division'));
Route::get('pages/group',array('uses' => 'GeneralController@showGroup', 'as' => 'page.group'));
Route::get('pages/home',array('uses' => 'GeneralController@showHome', 'as' => 'page.home'));
Route::get('pages/profile',array('uses' => 'GeneralController@showProfile', 'as' => 'page.profile'));
Route::get('pages/publication',array('uses' => 'GeneralController@showPublication', 'as' => 'page.publication'));
Route::get('pages/register',array('uses' => 'GeneralController@showRegisterForm', 'as' => 'page.reg_form'));

//Resourceful controllers
Route::resource('pages/students','StudentsController');
Route::resource('pages/faculty','FacultyController');

//Initial route given by the Laravel project
Route::get('/thisIsATestRoute','LaravelHomeControl@showHome');
