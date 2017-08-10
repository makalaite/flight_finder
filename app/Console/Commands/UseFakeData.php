<?php

namespace App\Console\Commands;

use App\Models\Ff_AirLines_Model;
use App\Models\Ff_AirPorts_Model;
use App\Models\Ff_Countries_Model;
use App\Models\Ff_Flights_Model;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Faker\Factory;
class UseFakeData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fake:data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate fake data';

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
        $this->fakeData();
    }

    private function getRandomString($length = 3)
    {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $airport_id = '';


        for ($i = 0; $i < $length; $i++) {
            $airport_id .= $characters[mt_rand(0, strlen($characters) - 1)];
        }

        return $airport_id;
    }
    public function fakeData()
    {
        $faker = Factory::create();

        for ($i = 0; $i < 50; $i++) {
            Ff_AirLines_Model::create([
                'id' => $faker->uuid,
                'name' => $faker->domainWord
            ]);
        }

        for ($i = 0; $i < 100; $i++) {
            Ff_AirPorts_Model::create([
                'id' => $this->getRandomString(),
                'name' => $faker->company,
                'countrie_id' => $faker->randomElement(Ff_Countries_Model::get()->pluck('id')->toArray()),
                'city' => $faker->city
            ]);
        }

        for ($i = 0; $i < 300; $i++) {
            Ff_Flights_Model::create([
                'id' => $faker->uuid,
                'arival' => $arrival = Carbon::now(),
                'departure' => $departure = Carbon::now(),
                'airline_id' => Ff_AirLines_Model::all()->random() -> id,
                'destination_id' => Ff_AirPorts_Model::all()->random() -> id,
                'origin_id' => Ff_AirPorts_Model::all()->random() -> id
            ]);
        }
    }
}