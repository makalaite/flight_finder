<?php namespace App\Http\Controllers;

use App\Models\Ff_Countries_Model;
use Illuminate\Routing\Controller;

class Ff_Countries_Controller extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /ff_countries_
	 *
	 * @return Response
	 */
	public function index()
	{
        $config['list'] = Ff_Countries_Model::paginate(15)->toArray();
        $config['pageTitle'] = 'Countries';

        return view('admin.list', $config);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /ff_countries_/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /ff_countries_
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /ff_countries_/{id}
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
	 * GET /ff_countries_/{id}/edit
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
	 * PUT /ff_countries_/{id}
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
	 * DELETE /ff_countries_/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}