<?php namespace App\Http\Controllers;

use App\Models\Ff_AirLines_Model;
use Illuminate\Routing\Controller;

class Ff_AirLines_Controller extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /ff_airlines_
	 *
	 * @return Response
	 */
	public function index()
	{
	    $config['list'] = Ff_AirLines_Model::paginate(15)->toArray();

        $config['pageTitle'] = 'Airlines';
        $config['route'] = route('app.airlines.create');

		return view('admin.list', $config);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /ff_airlines_/create
	 *
	 * @return Response
	 */
	public function create()
	{
        $config['pageTitle'] = 'Airlines';
        return view('admin.formAirlines', $config);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /ff_airlines_
	 *
	 * @return Response
	 */
	public function store()
	{
        $data = request()->all();
//		$data['id'] = Uuid::uuid4();
        Ff_AirLines_Model::create([
            'name' => $data['name']
        ]);
        return redirect()->route('app.airlines.index');
	}

	/**
	 * Display the specified resource.
	 * GET /ff_airlines_/{id}
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
	 * GET /ff_airlines_/{id}/edit
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
	 * PUT /ff_airlines_/{id}
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
	 * DELETE /ff_airlines_/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}