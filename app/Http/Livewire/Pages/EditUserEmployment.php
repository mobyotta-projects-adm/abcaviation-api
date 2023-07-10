<?php

namespace App\Http\Livewire\Pages;

use App\Http\Controllers\DashboardController;
use App\Models\Country;
use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditUserEmployment extends Component
{
    use WithFileUploads;
    public $user;

    public function render()
    {
        $this->countries = Country::all();
        return view('livewire.pages.edit_user.employment.form');
    }

    public function mount(User $user)
    {
        $this->user = $user;

        if ($user->profile) {
            $this->name = $user->name;
            $this->date_of_birth = $user->profile->date_of_birth;
            $this->address = $user->profile->address;
            $this->postcode = $user->profile->post_code;
            $this->city = $user->profile->city;
            $this->gender = $user->profile->gender;
            $this->country = $user->profile->country;
            $this->emergencyContactName = $user->profile->emergency_contact_name;
            $this->emergencyPhoneNumber = $user->profile->emergency_contact_phone;
        }
    }

    public $current_tab = "work_details";
    public function setTab($tab)
    {
        $this->current_tab = $tab;
    }


    public $countries = [];

    public $photo;
    public $name;
    public $date_of_birth;
    public $gender;


    public $address;
    public $postcode;
    public $city;
    public $country;
    public $emergencyContactName;
    public $emergencyPhoneNumber;

    public function submitPersonal()
    {


        $this->validate([
            'photo' => 'nullable|image|max:2048', // Assuming you want to validate the uploaded photo
            'name' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'gender' => 'required|string|max:255',
        ]);



        if ($this->photo) {
            $this->user->updateProfilePhoto($this->photo);
        }
        $this->user->update(['name' => $this->name]);
        $this->user->profile->update([
            'date_of_birth' => $this->date_of_birth,
            'gender' => $this->gender,
        ]);


        session()->flash('message', "Success");
    }

    public function submitContact()
    {

        $this->validate([
            'address' => 'required|string|max:255',
            'postcode' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'emergencyContactName' => 'required|string|max:255',
            'emergencyPhoneNumber' => 'required|string|max:255',
        ]);

        $this->user->profile->update([
            'address' => $this->address,
            'post_code' => $this->postcode,
            'city' => $this->city,
            'country' => $this->country,
            'emergency_contact_name' => $this->emergencyContactName,
            'emergency_contact_phone' => $this->emergencyPhoneNumber,
        ]);

        session()->flash('message', "Success");
    }
}
