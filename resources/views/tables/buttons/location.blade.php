<button type="button" class="btn btn-primary btn-sm" wire:click="openModal">Add Location</button>

<x-jet-dialog-modal wire:model="modalStatus" maxWidth="lg">
    <x-slot name="title">
        {{ $this->row ? 'Edit Location' : __('Add Location') }}
    </x-slot>

    <x-slot name="content">
        <form wire:submit.prevent="submitForm" enctype="multipart/form-data"></form>
        <div class="row">


            <div class="col-md-6">
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <div class="mb-3">
                    <x-jet-input id="name" type="text"
                        class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" wire:model.defer="name"
                        placeholder="Name" autocomplete="name" />
                </div>
                <x-jet-input-error for="name" />
            </div>
            <div class="col-md-6">
                <x-jet-label for="address" value="{{ __('Address') }}" />
                <div class="mb-3">
                    <x-jet-input id="address" type="text"
                        class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}"
                        wire:model.defer="address" placeholder="address" autocomplete="Address" />
                </div>
                <x-jet-input-error for="address" />
            </div>


            <div class="col-md-6">
                <x-jet-label for="start_week_day" value="{{ __('Week Start Day') }}" />
                <div class="mb-3">
                    <select class="form-select form-select-lg" name="start_week_day" wire:model="start_week_day">
                        <option value="">Select</option>
                        <option value="Monday">Monday</option>
                        <option value="Tuesday">Tuesday</option>
                        <option value="Wednesday">Wednesday</option>
                        <option value="Thursday">Thursday</option>
                        <option value="Friday">Friday</option>
                        <option value="Saturday">Saturday</option>
                        <option value="Sunday">Sunday</option>
                    </select>
                </div>
                <x-jet-input-error for="start_week_day" />
            </div>












        </div>

    </x-slot>

    <x-slot name="footer">
        <x-jet-secondary-button wire:click="closeModal">
            {{ __('Cancel') }}
        </x-jet-secondary-button>

        <x-jet-button class="ms-2" wire:click="submitForm">

            {{ __('Submit') }}
        </x-jet-button>

    </x-slot>

</x-jet-dialog-modal>
