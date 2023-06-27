<?php

namespace App\Http\Livewire\Pages;

use App\Models\Location;
use Livewire\Component;

class EditLocation extends Component
{
    public $location;


    public $name;
    public $address;
    public $timezone;
    public $operating_hours;
    public $timezones = [];
    public $timeSlots = [];

    public $weekdays = [];

    public function mount(Location $location)
    {
        $this->location = $location;
        $this->name = $location->name;
        $this->address = $location->address;
        $this->timezone = $location->timezone;
        $this->operating_hours = $this->location->operating_hours;
        $this->timezones = Location::$timezones;
        $this->weekdays = Location::$weekdays;
        $this->timeSlots = Location::getTimeSlots();
    }


    public function render()
    {
        return view('livewire.pages.edit-location');
    }


    public function getOperatingHours()
    {
        return $this->operating_hours;
    }

    public function toggleDay($day)
    {

        $data = json_decode($this->operating_hours);
        $slot = $data->$day;
        $slot->is_open = !$slot->is_open;
        $data->$day = $slot;
        $this->operating_hours = json_encode($data);
    }

    public function start_day_change($day, $value)
    {

        $data = json_decode($this->operating_hours);
        $slot = $data->$day;
        if ($value == '24_hours')
            $slot->is_24hour = true;
        else {
            $slot->is_24hour = false;
            $slot->start_time = $value;

            $gap_hours = $this->location->default_shift_duration;
            $index_count = $gap_hours * 4; // 60  min / 15 minues
            $count = count($this->timeSlots);

            $index = array_search($value, $this->timeSlots);
            $end_index = $index + $index_count;
            $slot->end_time = $this->timeSlots[$count % $end_index];
        }
        $data->$day = $slot;
        $this->operating_hours = json_encode($data);
    }
    public function end_day_change($day, $value)
    {
        $data = json_decode($this->operating_hours);
        $slot = $data->$day;
        $slot->end_time = $value;
        $data->$day = $slot;
        $this->operating_hours = json_encode($data);
    }

    public function submitGeneralTab()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'timezone' => 'required|string|max:255',
        ]);

        $this->location->update([
           'name' => $this->name,
           'address' => $this->address,
           'timezone' => $this->timezone,
           'operating_hours' => $this->operating_hours,
        ]);
        session()->flash('message', "Success");
    }
}
