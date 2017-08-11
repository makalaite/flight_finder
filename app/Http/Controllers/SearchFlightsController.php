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
        $config['route'] = route('app.search.index');
        $config['origin'] = Ff_AirPorts_Model::pluck('name', 'id')->toArray();
        $config['destination'] = Ff_AirPorts_Model::pluck('name', 'id')->toArray();
        $config['date'] = Carbon::now('Europe/Vilnius')->format('Y-m-d');

        $data = request()->all();
//        dd($data);
        if($data){
            $config['data'] = $this->getFlights($data);
            dd($config);
        }
        return view ('welcome', $config);
    }

    public function getFlights($data)
    {
        $con = Ff_Flights_Model::where('origin_id', $data['origin'])->
        where('destination_id', $data['destination'])->
        where('departure', '>=', $data['departure'])->
        where('departure', '<=', $data['departure'] . '23:59:59')->
        get()->toArray();


        return $con;
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