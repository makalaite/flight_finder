<?php

namespace App\Models;


class Ff_AirPorts_Model extends CoreModel
{
    protected $table =  'ff_airports';

    protected $fillable = ['id', 'name', 'countrie_id', 'city'];
}
