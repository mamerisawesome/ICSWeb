<?php
/**
 * Created by PhpStorm.
 * User: Almer
 * Date: 4/10/2015
 * Time: 7:50 PM
 */

class LaravelHomeControl extends BaseController{
    public function showHome(){
        return View::make('hello');
    }
}