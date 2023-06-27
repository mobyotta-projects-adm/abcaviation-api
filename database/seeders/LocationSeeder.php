<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Locale;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public static function run()
    {
        $locations = ["139 Office, Terminal 3", "400 Hours Group", "ABCoast Agility", "Active Group", "British Airways", "COBALT RAMP", "CONTACT 4", "Do Not Use", "Drivers", "Flexi-Furlough", "Heathrow Polar Park Police Stati", "HOD", "Mandatory Training", "Operatives", "T/L Group", "Terminal 1", "Terminal 2", "Terminal 3", "Terminal 4", "Terminal 5", "The Mill Heathrow", "Vancouver International Airport", "Wilson James", "YVR Coast MTE"];
        $address = ["Heathrow Terminal 3, TW6 1EW, London", "Heathrow Airport", "Vancouver Airport", "Heathrow Airport", "Heathrow Terminal 3", "Terminal 3", "Heathrow", "Vancouver Airport", "Heathrow", "Heathrow", "Polar Park #3, Bath Rd, Harmondsworth, West Drayton UB7 0DG, Uni", "Heathrow", "Stanwell, England , United Kingdom", "Heathrow Terminal", "Longford TW6, United Kingdom", "Terminal 1, Longford, Hounslow TW6 1BJ, UK", "Terminal 2, Inner Ring E, Longford, Hounslow TW6 1RR, UK", "Terminal 3, TW6 1QG, London", "Heathrow Terminal 4,TW6 3XA, London", "Heathrow Terminal 5, TW6 2GA, London", "Horton Road, Staines-upon-Thames TW19 6BJ, United Kingdom", "3211 Grant McConachie Way, Richmond, BC V7B 0A4, Canada", "Terminal 3", "3211 Grant McConachie Way, Richmond, BC V7B 0A4, Canada"];
        $weekdays = [
            'Monday',
            'Tuesday',
            'Wednesday',
            'Thursday',
            'Friday',
            'Saturday',
            'Sunday'
        ];
        $data = [];
        foreach ($weekdays as $weekday) {
            $data[$weekday] = [
                'is_open' => true,
                'is_24hour' => false,
                'start_time' => '09:00 AM',
                'end_time' => '05:00 PM',
            ];
        }
        $data = json_encode($data);

        foreach ($locations as $index => $name) {

            Location::firstOrCreate([
                'name' => $name,
            ], [
                'address' => $address[$index],
                'start_week_day' => $weekdays[$index % 7],
                'operating_hours' =>
                $data

            ]);
        }
    }
}
