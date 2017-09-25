<?php namespace App\Http\Controllers;

use App\Models\Ff_AirPorts_Model;
use App\Models\Ff_Flights_Model;
use Carbon\Carbon;
use Illuminate\Routing\Controller;

class SearchFlightsController extends Controller
{

    /**
     * Display a listing of the resource.
     * GET /searchflights
     *
     * @return Response
     */
    public function index()
    {
        $config['origin_id'] = Ff_AirPorts_Model::pluck('name', 'id');
        $config['destination_id'] = Ff_AirPorts_Model::pluck('name', 'id');
        $config['date'] = Carbon::now('Europe/Vilnius')->format('Y-m-d');
        $config['flights'] = $this->getFlights();

        return view ('welcome', $config);
    }

    public function getFlights()
    {
        $data = request()->all();
        if (sizeof($data) == 0)
        {
        } else {

            $origin_id = $data['origin_id'];
            $destination_id = $data['destination_id'];
            $departure = $data['departure'];

            $config['flights'] = Ff_Flights_Model::where('origin_id', '=', $origin_id)->
            where('destination_id', '=', $destination_id)->
            where('departure', '>=', $departure)->
            where('departure', '<=', $departure . '23:59:59')->
            get()->toArray();

            return $config['flights'];
        }
    }

    /**
     * Show the form for creating a new resource.
     * GET /searchflights/create
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * POST /searchflights
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     * GET /searchflights/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * GET /searchflights/{id}/edit
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * PUT /searchflights/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * DELETE /searchflights/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}