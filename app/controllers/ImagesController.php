<?php

class ImagesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index() {
		$images = Image::all();

		return View::make('images.index')
			->with('images', $images);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create() {
		Session::flash('message', 'There are probably some things you should know about images '.public_path());
		return View::make('images.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store() {

		$file            = Input::file('image');
		$destinationPath = 'uploads';

		$file->move($destinationPath, $file->getClientOriginalName());

		$image           = new Image;
		$image->filename = $file->getClientOriginalName();
		$image->save();

		Session::flash('message', 'Sucessfully added image');
		return Redirect::to('images');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id) {
		//
	}

	/**
	 * Remove the specified resource from storage and filesystem.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id) {
		$image = Image::find($id);
		$image->delete();

		unlink('uploads/'.$image->filename);

		Session::flash('message', 'Sucessfully deleted '.$image->filename);
		return Redirect::to('images');

	}

}
