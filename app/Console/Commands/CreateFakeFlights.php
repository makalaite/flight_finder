<?php

namespace App\Console\Commands;

use App\Models\Ff_AirLines_Model;
use App\Models\Ff_AirPorts_Model;
use App\Models\Ff_Flights_Model;
use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Console\Command;

class CreateFakeFlights extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fakedata:flights';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generates 50 fake flight records';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $time = Carbon::create(rand(2017, 2018), rand(1, 12), rand(1, 31), rand(0, 23), rand(0, 59), rand(0, 59));
        $faker = Factory::create();
        for ($i = 1; $i <= 5; $i++) {
            Ff_Flights_Model::create([
                'id' => $faker->uuid,
                'origin_id' => Ff_AirPorts_Model::all()->random()->id,
                'destination_id' => Ff_AirPorts_Model::all()->random()->id,
                'departure' => $time->toDateTimeString(),
                'arival' => $time->addMinutes(rand(30, 960))->toDateTimeString(),
                'airline_id' => Ff_AirLines_Model::all()->random()->id,
            ]);
        }
        return redirect()->route('app.flights.index');
    }
}
