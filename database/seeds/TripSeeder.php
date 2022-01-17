<?php

use App\Models\Trip;
use Illuminate\Database\Seeder;

class TripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $trips = [

            [
                'departure' => 'Mosca',
                'destination' => 'Tokyo',
                'airline' => 'MoscaAirLine',
                'price' => '500',
                'date' => '2022-03-20',

            ],

            [
                'departure' => 'Madrid',
                'destination' => 'Mosca',
                'airline' => 'MadridAirLine',
                'price' => '100',
                'date' => '2022-03-22',

            ],

            [
                'departure' => 'Tokyo',
                'destination' => 'Madrid',
                'airline' => 'TokyoAirLine',
                'price' => '300',
                'date' => '2022-04-10',

            ],

            [
                'departure' => 'Roma',
                'destination' => 'Tokyo',
                'airline' => 'RomaAirLine',
                'price' => '250',
                'date' => '2022-01-14',

            ],

        ];

        foreach ($trips as $trip) {
            $_trip = new Trip();
            $_trip->departure = $trip['departure'];
            $_trip->destination = $trip['destination'];
            $_trip->airline = $trip['airline'];
            $_trip->price = $trip['price'];
            $_trip->date = $trip['date'];
            $_trip->save();

        }

    }
}
