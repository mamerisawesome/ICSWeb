<?php

class BookController extends \BaseController {


    /* SHOW FUNCTION USING A SINGLE PARAMETER */
    public function showBy($param, $val)
    {
        $book = DB::table('library')->where($param, $val)->first();
        if($book != NULL) return View::make('pages.user.show', compact('book'));
        else return "<h1>Error! SP not found!</h1>";
    }

    /* SHOW FUNCTION USING ALL INPUT VARIABLES*/
    public function showAll($lastName, $title, $year){
        $book = DB::table('library')->where(array('lastName'=>$lastName, 'title'=>$title, 'year'=>$year))->first();
        if($book != NULL) return View::make('pages.user.show', compact('book'));
        else return "<h1>Error! SP not found!</h1>";
    }

    /* SEARCH FUNCTION */
    public function search(){

        $author = Input::get('spt-author');
        $title  = Input::get('spt-title');
        $year = Input::get('spt-year');

        //if only author field is filled up
        if($author!=NULL&&$title==NULL&&$year==NULL){
            return Redirect::to('pages.library.search.showBy')->with(array('param'=>'lastName', 'val'=>$author));
        }
        //if only title field is filled up
        else if($author==NULL&&$title!=NULL&&$year==NULL){
            return Redirect::to('pages.library.search.showBy')->with(array('param'=>'title', 'val'=>$title));
        }
        //if only year field is filled up
        else if($author==NULL&&$title==NULL&&$year!=NULL){
            return Redirect::to('pages.library.search.showBy')->with(array('param'=>'year', 'val'=>$year));
        }
        else{
            return Redirect::to('pages.library.search.showAll')->with(array('lastName'=>$author, 'title'=>$title, 'year'=>$year));
        }
    }


}
