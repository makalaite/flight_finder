<?php namespace App\Http\Controllers;

use App\Models\Ff_AirLines_Model;
use App\Models\Ff_AirPorts_Model;
use App\Models\Ff_Flights_Model;
use Carbon\Carbon;
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
        $config['list'] = Ff_Flights_Model::paginate(15)->toArray();

        foreach ($config['list']['data'] as $key => &$value){
            $value['airport_name'] = $value['airport_name']['name'];
        }
        $config['pageTitle'] = 'Flights';
        $config['route'] = route('app.flights.create');
        $config['faker'] = route('app.flights.faker');
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
        $config['pageTitle'] = 'Flights';
        $config['origin_airport'] = Ff_AirPorts_Model::pluck('name', 'id');
        $config['destination_airport'] = Ff_AirPorts_Model::pluck('name', 'id');
        $config['airline'] = Ff_AirLines_Model::pluck('name', 'id');
        $config['arrival_date'] = Carbon::now('Europe/Vilnius');
        $config['departure_date'] = Carbon::now('Europe/Vilnius');
        return view('admin.formFlights', $config);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /ff_flights_
	 *
	 * @return Response
	 */
	public function store()
	{
        $data = request()->all();
        Ff_Flights_Model::create([
            'origin_id' => $data['origin_id'],
            'destination_id' => $data['destination_id'],
            'airline_id' => $data['airline_id'],
            'departure' => $data['departure'],
            'arival' => $data['arrival']
        ]);
        return redirect()->route('app.flights.index');
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