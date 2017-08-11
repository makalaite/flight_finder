<?php

namespace App\Models;

class Ff_Flights_Model extends CoreModel
{
    protected $table =  'ff_flights';

    protected $fillable = ['id', 'arival', 'departure', 'airline_id', 'destination_id', 'origin_id'];

    protected $with = ['originAirport', 'destinationAirport', 'airline'];

    public function originAirport()
    {
        return $this->hasOne(Ff_AirPorts_Model::class, 'id', 'origin_id');
    }

    public function destinationAirport()
    {
        return $this->hasOne(Ff_AirPorts_Model::class, 'id', 'destination_id');
    }

    public function airline()
    {
        return $this->hasOne(Ff_AirLines_Model::class, 'id', 'airline_id');
    }

}
