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

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Name")
                ->sortable(),
            Column::make("Created at", "created_at")
                ->sortable(),

        ];
    }

    public function builder(): Builder
    {
        return $this->model::query()
            ->where('location_id', $this->locationId);
    }
}
