
<?php

class BookController extends \BaseController {


    /* SHOW FUNCTION USING A SINGLE PARAMETER
    public function showBy($param, $val)
    {
        $book = DB::table('library')->where($param, $val)->first();
        if($book != NULL) return View::make('pages.book.show', compact('book'));
        else return "<h1>Error! SP not found!</h1>";
    }*/

    /* SHOW FUNCTION USING ALL INPUT VARIABLES
    public function showAll($lastName, $title, $year){
        $book = DB::table('library')->where(array('lastName'=>$lastName, 'title'=>$title, 'year'=>$year))->first();
        if($book != NULL) return View::make('pages.book.show')->with('book', $book);
        else return "<h1>Error! SP not found!</h1>";
    }*/

    /* SEARCH FUNCTION */
    public function search(){

        $author = Input::get('spt-author');
        $title  = Input::get('spt-title');
        $year = Input::get('spt-year');

        //if only author field is filled up
        if($author!=NULL&&$title==NULL&&$year==NULL){
            $result = DB::table('library')->where('lastName', $author)->get();
            if($result != NULL) return View::make('pages.book.show', compact('result'));
            else return View::make('pages.book.error');
        }

        //if only title field is filled up
        else if($author==NULL&&$title!=NULL&&$year==NULL){
            $result = DB::table('library')->where('title', $title)->get();
            if($result != NULL) return View::make('pages.book.show', compact('result'));
            else return View::make('pages.book.error');
        }

        //if only year field is filled up
        else if($author==NULL&&$title==NULL&&$year!=NULL){
             $result = DB::table('library')->where('year', $year)->get();
            if($result != NULL) return View::make('pages.book.show', compact('result'));
            else return View::make('pages.book.error');
        }

        //if author and title field is filled up
        else if($author!=NULL&&$title!=NULL&&$year==NULL){
             $result = DB::table('library')->where('author', $author)->orWhere('title', $title)->get();
            if($result != NULL) return View::make('pages.book.show', compact('result'));
            else return View::make('pages.book.error');
        }

        //if author and year field is filled up
        else if($author!=NULL&&$title==NULL&&$year!=NULL){
             $result = DB::table('library')->where('author', $author)->orWhere('year', $year)->get();
            if($result != NULL) return View::make('pages.book.show', compact('result'));
            else return View::make('pages.book.error');
        }

        //if title and year field is filled up
        else if($author==NULL&&$title!=NULL&&$year!=NULL){
             $result = DB::table('library')->where('title', $title)->orWhere('year', $year)->get();
            if($result != NULL) return View::make('pages.book.show', compact('result'));
            else return View::make('pages.book.error');
        }

        //if all fields are filled up
        else if($author!=NULL&&$title!=NULL&&$year!=NULL){

            $result = DB::table('library')->where('title', $title)->orWhere('author', $author)->get();

            if($result != NULL) return View::make('pages.book.show1', compact('result'))->with('year', $year);
            else return View::make('pages.book.error');
        }
    }

}