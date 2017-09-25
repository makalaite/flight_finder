<?php namespace App\Http\Controllers;

use App\Models\Ff_AirPorts_Model;
use App\Models\Ff_Countries_Model;
use Illuminate\Routing\Controller;

class Ff_AirPorts_Controller extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /ff_airports_
	 *
	 * @return Response
	 */
	public function index()
	{
        $config['list'] = Ff_AirPorts_Model::paginate(15)->toArray();

        $config['pageTitle'] = 'Airports';
        $config['route'] = route('app.airports.create');

        return view('admin.list', $config);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /ff_airports_/create
	 *
	 * @return Response
	 */
	public function create()
	{
        $config['pageTitle'] = 'Airports';
        $config['country_id'] = Ff_Countries_Model::pluck('name', 'id');
        return view('admin.formAirports', $config);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /ff_airports_
	 *
	 * @return Response
	 */
	public function store()
	{
        $data = request()->all();
        Ff_AirPorts_Model::create([
            'name' => $data['name'],
            'id' => $data['id'],
            'countrie_id' => $data['country_id'],
            'city' => $data['city']
        ]);
        return redirect()->route('app.airports.index');
	}

	/**
	 * Display the specified resource.
	 * GET /ff_airports_/{id}
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
	 * GET /ff_airports_/{id}/edit
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
	 * PUT /ff_airports_/{id}
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
	 * DELETE /ff_airports_/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}