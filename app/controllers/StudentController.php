<?php

class StudentController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('pages.register_form');
    }

    /**
     * Process this form.
     *
     * @return Response
     */
    public function processForm(Request $request)
    {
        $sampleVar = $request -> get('nameOfInputFromFOrm');
        if(isset($sampleVar) /* checks if the input is empty */){
            $query = DB::table('tableNameHere')->where('column',$column)->get();
            /* query builder if column is unique; 'column' == $column*/

            if(($password == $retypePassword) && count($query) == 0){
                DB::table('tableNameHere')->insert(
                    [
                        'column1' => $column1,
                        'column2' => $column2
                    ]
                );

                /* something here */
            }

        }
    }


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
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
