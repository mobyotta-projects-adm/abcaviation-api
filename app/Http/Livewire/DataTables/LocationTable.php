<?php

namespace App\Http\Livewire\DataTables;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Location;

class LocationTable extends DataTableComponent
{
    protected $model = Location::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setColumnSelectDisabled();

        $this->setConfigurableAreas([

            'toolbar-right-start' => [
                'tables.buttons.location',
                'component' => $this
            ]

        ]);
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Name")->sortable(),
            Column::make("Address")->sortable(),
            Column::make('Actions', 'id')->format(function ($row) {
                return '<a href="' . url('/location/edit/' . $row) . '" class="btn border-0" ><i class="fa fa-edit text-primary" aria-hidden="true"></i> Edit</button>';
            })->html(),
        ];
    }

    public $modalStatus = false;
    public $row;

    public $name;
    public $address;
    public $start_week_day;

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
        $this->address = null;
        $this->start_week_day = null;
    }



    public function submitForm()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'start_week_day' => 'required|string|max:255',
        ]);

        Location::insert([
            'name' => $this->name,
            'address' => $this->address,
            'start_week_day' => $this->start_week_day,
        ]);

        $this->closeModal();
    }
}
