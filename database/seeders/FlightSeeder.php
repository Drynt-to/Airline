<?php

namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Flight;
use Carbon\Carbon;

class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $flights = [
            [
                'flight_code' => 'JT610',
                'origin' => 'SUB',
                'destination' => 'CGK',
                'departure_time' => Carbon::parse('2025-04-10 07:00'),
                'arrival_time' => Carbon::parse('2025-04-10 09:00'),
            ],
            [
                'flight_code' => 'GA123',
                'origin' => 'CGK',
                'destination' => 'DPS',
                'departure_time' => Carbon::parse('2025-04-10 10:00'),
                'arrival_time' => Carbon::parse('2025-04-10 12:30'),
            ],
            [
                'flight_code' => 'QG456',
                'origin' => 'BDO',
                'destination' => 'SUB',
                'departure_time' => Carbon::parse('2025-04-11 08:15'),
                'arrival_time' => Carbon::parse('2025-04-11 09:45'),
            ],
            [
                'flight_code' => 'ID789',
                'origin' => 'DPS',
                'destination' => 'UPG',
                'departure_time' => Carbon::parse('2025-04-11 14:00'),
                'arrival_time' => Carbon::parse('2025-04-11 17:00'),
            ],
            [
                'flight_code' => 'SJ321',
                'origin' => 'UPG',
                'destination' => 'CGK',
                'departure_time' => Carbon::parse('2025-04-12 06:45'),
                'arrival_time' => Carbon::parse('2025-04-12 08:50'),
            ],
        ];

        foreach ($flights as $flight) {
            Flight::create($flight);
        }
    }
}
