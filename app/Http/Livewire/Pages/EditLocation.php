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

    public $current_tab = "general";
    public function setTab($tab)
    {
        $this->current_tab = $tab;
    }

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

        //sheduling information
        $this->week_start = $location->week_start;
        $this->default_shift_duration = $location->default_shift_duration;
        $this->default_mealbreak_duration = $location->default_mealbreak_duration;
        $this->roster_prevent_change_hours = $location->roster_prevent_change_hours;
        $this->notification_on_shift_removed = $location->notification_on_shift_removed;
        $this->roster_require_confirm_hours = $location->roster_require_confirm_hours;
        $this->roster_recommendation_sorting = $location->roster_recommendation_sorting;
        $this->roster_allow_peer_view = $location->roster_allow_peer_view;
        $this->shift_cost_additional = $location->shift_cost_additional;
        $this->shift_default_cost = $location->shift_default_cost;
        $this->roster_allow_sms_with_full_name = $location->roster_allow_sms_with_full_name;
        $this->roster_allow_swap_shift = $location->roster_allow_swap_shift;
        $this->roster_allow_offer_shift = $location->roster_allow_offer_shift;
        // Timesheet Information
        $this->timesheet_closest_block = $location->timesheet_closest_block;
        $this->timesheet_auto_time_approve = $location->timesheet_auto_time_approve;
        $this->timesheet_round_start_time = $location->timesheet_round_start_time;
        $this->timesheet_round_end_time = $location->timesheet_round_end_time;
        $this->timesheet_round_mealbreak = $location->timesheet_round_mealbreak;
        $this->timesheet_match_roster = $location->timesheet_match_roster;
        $this->timesheet_match_roster_time = $location->timesheet_match_roster_time;
        $this->mealbreak_is_paid = $location->mealbreak_is_paid;
        $this->can_clockin_shift_earlier_mins = $location->can_clockin_shift_earlier_mins;
        $this->timesheet_maturity = $location->timesheet_maturity;
        $this->can_mobile_bump_shift = $location->can_mobile_bump_shift;
        $this->can_bump_shift_via_desk = $location->can_bump_shift_via_desk;
        $this->can_sms_bump_shift = $location->can_sms_bump_shift;
        $this->require_kiosk_photo_bump_shift = $location->require_kiosk_photo_bump_shift;
        $this->can_submit_shift_via_desk = $location->can_submit_shift_via_desk;
        $this->can_modify_timesheet_on_end = $location->can_modify_timesheet_on_end;
        $this->can_clockin_shift_earlier = $location->can_clockin_shift_earlier;
        $this->can_end_break_earlier = $location->can_end_break_earlier;
        $this->timesheet_auto_round = $location->timesheet_auto_round;
        $this->timesheet_round_start_time_rs = $location->timesheet_round_start_time_rs;
        $this->timesheet_round_end_time_rs = $location->timesheet_round_end_time_rs;
        $this->timesheet_round_mealbreak_rs = $location->timesheet_round_mealbreak_rs;
        $this->auto_suggest_break = $location->auto_suggest_break;
        $this->can_display_break_warning = $location->can_display_break_warning;
    }


    public function render()
    {
        return view('livewire.pages.location.edit-location');
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

    // sheduling Tab
    public function submitSheduledTab()
    {
        $this->location->update([
            'week_start' => $this->week_start,
            'operating_hours' => $this->operating_hours,
            'default_mealbreak_duration' => $this->default_mealbreak_duration,
            'roster_prevent_change_hours' => $this->roster_prevent_change_hours,
            'notification_on_shift_removed' => $this->notification_on_shift_removed,
            'roster_require_confirm_hours' => $this->roster_require_confirm_hours,
            'roster_recommendation_sorting' => $this->roster_recommendation_sorting,
            'roster_allow_peer_view' => $this->roster_allow_peer_view,
            'shift_cost_additional' => $this->shift_cost_additional,
            'shift_default_cost' => $this->shift_default_cost,
            'roster_allow_sms_with_full_name' => $this->roster_allow_sms_with_full_name,
            'roster_allow_swap_shift' => $this->roster_allow_swap_shift,
            'roster_allow_offer_shift' => $this->roster_allow_offer_shift,
        ]);
        session()->flash('message', "Success");
    }

    // timesheet Tab

    public function submitTimesheetTab()
    {

        $this->location->update([

            'timesheet_closest_block' => $this->timesheet_closest_block,
            'timesheet_auto_time_approve' => $this->timesheet_auto_time_approve,
            'timesheet_round_start_time' => $this->timesheet_round_start_time,
            'timesheet_round_end_time' => $this->timesheet_round_end_time,
            'timesheet_round_mealbreak' => $this->timesheet_round_mealbreak,
            'timesheet_match_roster' => $this->timesheet_match_roster,
            'timesheet_match_roster_time' => $this->timesheet_match_roster_time,
            'mealbreak_is_paid' => $this->mealbreak_is_paid,
            'can_clockin_shift_earlier_mins' => $this->can_clockin_shift_earlier_mins,
            'timesheet_maturity' => $this->timesheet_maturity,
            'can_mobile_bump_shift' => $this->can_mobile_bump_shift,
            'can_bump_shift_via_desk' => $this->can_bump_shift_via_desk,
            'can_sms_bump_shift' => $this->can_sms_bump_shift,
            'require_kiosk_photo_bump_shift' => $this->require_kiosk_photo_bump_shift,
            'can_submit_shift_via_desk' => $this->can_submit_shift_via_desk,
            'can_modify_timesheet_on_end' => $this->can_modify_timesheet_on_end,
            'can_clockin_shift_earlier' => $this->can_clockin_shift_earlier,
            'can_end_break_earlier' => $this->can_end_break_earlier,
            'timesheet_auto_round' => $this->timesheet_auto_round,
            'timesheet_round_start_time_rs' => $this->timesheet_round_start_time_rs,
            'timesheet_round_end_time_rs' => $this->timesheet_round_end_time_rs,
            'timesheet_round_mealbreak_rs' => $this->timesheet_round_mealbreak_rs,
            'auto_suggest_break' => $this->auto_suggest_break,
            'can_display_break_warning' => $this->can_display_break_warning,
        ]);

        session()->flash('message', "Success");
    }



    //select 
    public $week_start;
    public $default_shift_duration;
    public $default_mealbreak_duration;
    public $roster_prevent_change_hours;
    public $notification_on_shift_removed;
    public $roster_require_confirm_hours;
    public $roster_recommendation_sorting;
    public $roster_allow_peer_view;
    public $shift_cost_additional;
    public $shift_default_cost;
    public $roster_allow_sms_with_full_name;
    public $roster_allow_swap_shift;
    public $roster_allow_offer_shift;
    // timesheet Information
    public $timesheet_closest_block;
    public $timesheet_auto_time_approve;
    public $timesheet_round_start_time;
    public $timesheet_round_end_time;
    public $timesheet_round_mealbreak;
    public $timesheet_match_roster;
    public $timesheet_match_roster_time;
    public $mealbreak_is_paid;
    public $can_clockin_shift_earlier_mins;
    public $timesheet_maturity;
    public $can_mobile_bump_shift;
    public $can_bump_shift_via_desk;
    public $can_sms_bump_shift;
    public $require_kiosk_photo_bump_shift;
    public $can_submit_shift_via_desk;
    public $can_modify_timesheet_on_end;
    public $can_clockin_shift_earlier;
    public $can_end_break_earlier;
    public $timesheet_auto_round;
    public $timesheet_round_start_time_rs;
    public $timesheet_round_end_time_rs;
    public $timesheet_round_mealbreak_rs;
    public $auto_suggest_break;
    public $can_display_break_warning;
}
