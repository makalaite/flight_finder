<?php

namespace App\Console\Commands;

use App\Models\Ff_AirPorts_Model;
use App\Models\Ff_Countries_Model;
use Faker\Factory;
use Illuminate\Console\Command;

class CreateFakeAirports extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fakedata:airports';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generates 50 fake airport records';

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

    public function generateAirportId()
    {
        $letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $airport_id = '';
        for ($i = 1; $i <= 3; $i++) {
            $airport_id .= $letters[mt_rand(0, strlen($letters) - 1)];
        }
        return $airport_id;
    }

    public function handle()
    {
        $faker = Factory::create();
        for ($i = 0; $i <= 50; $i++) {
            Ff_AirPorts_Model::create([
                'name' => $faker->company,
                'id' => $this->generateAirportId(),
                'city' => $faker->city,
                'countrie_id' => Ff_Countries_Model::all()->random()->id,
            ]);
        }
    }
}
