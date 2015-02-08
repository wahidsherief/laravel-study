<?php

class AdminController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// get all the inputs
        $inputs = Userdatas::all();

        // load the view and pass the inputs
        return View::make('pages.admin')
            ->with('inputs', $inputs);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$user = Userdatas::find($id);
		return View::make('pages.userdetails')
            ->with('users', $user);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		// validate
        // read more on validation at http://laravel.com/docs/validation

        $rules = array(
            'name'       => 'required',
            'email'      => 'required|email',
            'address' => 'required',
            'phone' => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('admin')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $user = new Userdatas;
            $user->name       = Input::get('name');
            $user->email      = Input::get('email');
            $user->address = Input::get('address');
            $user->phone = Input::get('phone');
            $user->save();

            // redirect
            Session::flash('message', 'Successfully Added!');
            return Redirect::to('admin');
        }
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = Userdatas::find($id);
		return View::make('pages.edit')
            ->with('users', $user);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		// validate
        // read more on validation at http://laravel.com/docs/validation

        $rules = array(
            'name'       => 'required',
            'email'      => 'required|email',
            'address' => 'required',
            'phone' => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('edit/'. $id)
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $user = Userdatas::find($id);
            $user->name       = Input::get('name');
            $user->email      = Input::get('email');
            $user->address = Input::get('address');
            $user->phone = Input::get('phone');
            $user->save();

            // redirect
            Session::flash('message', 'Successfully Updated!');
            return Redirect::to('admin');
        }
	}

	/**
	 * Delete the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function delete($id)
	{
		 // delete
        $user = Userdatas::find($id);
        $user->delete();

        // redirect
        Session::flash('message', 'Successfully deleted');
        return Redirect::to('admin');
	}
}
