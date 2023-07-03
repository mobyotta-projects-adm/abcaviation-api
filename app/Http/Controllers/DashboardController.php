<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function me()
    {
        return view('pages.me');
    }
    public function newsfeed()
    {
        return view('pages.newsfeed');
    }
    public function tasks()
    {
        return view('pages.tasks');
    }
    public function location()
    {
        return view('pages.locations');
    }
    public function people()
    {
        return view('pages.people');
    }
    public function schedule()
    {
        return view('pages.shedule');
    }
    public function approved_timesheet()
    {
        return view('pages.approve-timesheets');
    }
    public function export_timesheet()
    {
        return view('pages.export-timesheet');
    }
    public function report()
    {
        return view('pages.report');
    }

    public static function phoneNumberCodes($array=false)
    {
        $fileContents = file_get_contents(public_path('assets/numbers.json'));
        return json_decode($fileContents,$array);
    }
}
