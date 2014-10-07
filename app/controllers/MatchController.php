<?php

class MatchController extends \BaseController {

	/**
	 * Send back all matches as JSON
	 *
	 * @return Response
	 */
	public function index()
	{
		return Response::json(Match::get());
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		Match::create(array(
				'my_char' => Input::get('my_char'),
				'op_char' => Input::get('op_char'),
				'result' => Input::get('result')
			));

		return Response::json(array('success' => true));
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return Response::json(Match::get($id));
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Match::destroy($id);

		return Response::json(array('success' => true));
	}


}
