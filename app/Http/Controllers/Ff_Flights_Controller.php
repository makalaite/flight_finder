<?php namespace App\Http\Controllers;

use App\Models\Ff_Flights_Model;
use Illuminate\Routing\Controller;

class Ff_Flights_Controller extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /ff_flights_
	 *
	 * @return Response
	 */
	public function index()
	{
        $config['list'] = Ff_Flights_Model::get()->toArray();

        $config['tableName'] = 'Flights';
        $config['serviceTitle'] = 'Flights list';

        return view('admin.list', $config);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /ff_flights_/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /ff_flights_
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /ff_flights_/{id}
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
	 * GET /ff_flights_/{id}/edit
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
	 * PUT /ff_flights_/{id}
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
	 * DELETE /ff_flights_/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}