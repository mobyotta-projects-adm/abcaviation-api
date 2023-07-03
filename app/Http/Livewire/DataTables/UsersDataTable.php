<?php

namespace App\Http\Livewire\DataTables;

use App\Http\Controllers\DashboardController;
use App\Models\Location;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Hash;

class UsersDataTable extends DataTableComponent
{

    protected $model = User::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');

        $this->setConfigurableAreas([

            'toolbar-right-start' => [
                'tables.buttons.users',
                'component' => $this
            ]
        ]);

        $this->countryCodes = DashboardController::phoneNumberCodes();
        $this->locations = Location::all();
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")->sortable(),
            Column::make('Name', 'name')->format(function ($data, $row) {
                return '<img src="' . $row->profile_photo_url . '" class="img img-responsive rounded-circle" width="50" height="50" /> &nbsp;' . $data;
            })->html(),

            Column::make("Email", "email")->sortable(),
            Column::make("Mobile", "profile.mobile")->sortable(),
            Column::make("Main Location", "profile.location.name")->sortable(),
            Column::make("Access Level", "profile.role")->sortable(),
            Column::make('Actions', 'id')->format(function ($row) {
                return '<a href="' . url('/user/edit/personal/' . $row) . '" class="btn border-0" ><i class="fa fa-edit text-primary" aria-hidden="true"></i> Personal</button>' .
                    '<a href="' . url('/user/edit/employment/' . $row) . '" class="btn border-0" ><i class="fa fa-edit text-primary" aria-hidden="true"></i> Employment</button>';
            })->html(),

        ];
    }


    public function builder(): Builder
    {
        return $this->model::query()
            ->whereHas("roles", function ($q) {
                $q->where("name", "!=", "admin");
            })
            ->orWhereDoesntHave("roles");
    }

    public $countryCodes = [];
    public $locations = [];
    public $modalStatus = false;
    public $row;


    public $name;
    public $email;
    public $dial_code = '+44';
    public $mobile;
    public $mainLocation;
    public $accessLevel;

    public function openModal($id = null)
    {
        $this->modalStatus = true;
    }
    public function closeModal()
    {
        $this->modalStatus = false;
        $this->resetErrorBag();
        $this->resetValidation();
        $this->row = null;
        $this->name = null;
        $this->email = null;
        $this->mobile = null;
        $this->mainLocation = null;
        $this->accessLevel = null;
        $this->dial_code = '+44';
    }

    public function submitForm()
    {
        $this->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'dial_code' => 'required',
            'mobile' => 'required|numeric|digits_between:8,10|unique:user_profiles,mobile',
            'mainLocation' => 'required',
            'accessLevel' => 'required',
        ]);

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make(rand(10000000, 99999999))
        ]);

        UserProfile::create([
            'user_id' => $user->id,
            'dial_code' => $this->dial_code,
            'mobile' => $this->mobile,
            'location_id' => $this->mainLocation,
            'role' => $this->accessLevel,
            'payroll_id' => null
        ]);

        $this->closeModal();
    }
}
