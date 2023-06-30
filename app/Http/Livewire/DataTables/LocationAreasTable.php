<?php

namespace App\Http\Livewire\DataTables;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\WorkingAreas;
use Illuminate\Database\Eloquent\Builder;

class LocationAreasTable extends DataTableComponent
{
    protected $model = WorkingAreas::class;

    public $locationId;
    public $name;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setConfigurableAreas([

            'before-tools' => [
                'tables.buttons.working_area',
                'component' => $this
            ]

        ]);

        $this->setReorderStatus(true);
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Name")
                ->sortable(),

            Column::make('Actions', 'id')->format(function ($row) {
                return '<a class="btn border-0" ><i class="fa fa-edit text-primary" aria-hidden="true"></i> Edit</button>';
            })->html(),


        ];
    }

    public function builder(): Builder
    {
        return $this->model::query()
            ->where('location_id', $this->locationId);
    }

    public function reorder($items): void
    {
        // foreach ($items as $item) {
        //     $this->model::find((int)$item['value'])->update(['position' => (int)$item['order']]);
        // }
    }


    public function addArea()
    {
        $this->validate([
            'name' => 'required|string|max:255'
        ]);

        // $area = $this->model::where('location_id', $this->locationId)->orderBy('position', 'desc')->first();
        // if (!$area)
        //     $position = 0;
        // else $position = $area->position + 1;

        $this->model::insert([
            'name' => $this->name,
           
            'location_id' => $this->locationId,
            'color' => "#FFF"
        ]);

        $this->resetErrorBag();
        $this->resetValidation();

        $this->name = null;
    }
}
