<?php

namespace App\Models;

class Ff_Flights_Model extends CoreModel
{
    protected $table =  'ff_flights';

    protected $fillable = ['id', 'arival', 'departure', 'airline_id', 'destination_id', 'origin_id'];
}
