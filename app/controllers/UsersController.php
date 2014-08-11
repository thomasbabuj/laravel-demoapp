<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// Fetch users from our database via eloquent object
		$users = User::all();

		// calling index view
		return View::make('users.index', compact('users'));

	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		// Creating a new users
		return View::make('users.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// To store our form data to database tabel
		$input = Input::all();
		$validation = Validator::make($input, User::$rules);

		if( $validation->passes() )
		{
			User::create($input);

			return Redirect::route('users.index');
		}

		return Redirect::route('users.create')
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// show the user details 
		$user = User::find($id);
					
		return View::make('users.show', compact('user'));

	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// Handing the user edit request
		$user = User::find($id);

		if ( is_null($user) )
		{
			return Redirect::route('users.index');
		}	
		
		return View::make('users.edit', compact('user'));
	}	


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		
		// update users data to database
		$input = Input::all();
		$validation = Validator::make($input, User::$rules);
		if ( $validation->passes() )
		{
			$user = User::find($id);
			$user->update($input);
			return Redirect::route('users.show', $id);
		}

		return Redirect::route('users.edit', $id)
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		// delete a record
		User::find($id)->delete();
		return Redirect::route('users.index');
	}


}
