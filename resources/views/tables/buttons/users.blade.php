<button type="button" class="btn btn-primary btn-sm" wire:click="openModal"> Add User</button>
<x-jet-dialog-modal wire:model="modalStatus" maxWidth="lg">
    <x-slot name="title">
        {{ $this->row ? 'Edit User' : __('Add User') }}
    </x-slot>

    <x-slot name="content">
        <form wire:submit.prevent="submitForm" enctype="multipart/form-data"></form>
        <div class="row">

            <div class="form-group">
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <div class="mb-3">
                    <x-jet-input id="name" type="text"
                        class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" wire:model.defer="name"
                        placeholder="Name" autocomplete="name" />
                </div>
                <x-jet-input-error for="name" />
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" wire:model="email" placeholder="@example.com">
                <x-jet-input-error for="email" />
            </div>
            <div class="form-group">
                <label for="mobile">Mobile</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <select class="form-select" aria-label="Country" wire:model="dial_code">
                            @foreach ($this->countryCodes as $item)
                                <option value="{{ $item->dial_code }}">
                                    {{ $item->code }} ({{ $item->dial_code }}) </option>
                            @endforeach
                        </select>
                    </div>
                    <input type="text" class="form-control" id="mobile" wire:model="mobile"
                        placeholder="Phone number">
                </div>
                <x-jet-input-error for="mobile" />
            </div>
            <div class="form-group">
                <label for="mainLocation">Main Location</label>
                <select class="form-control" id="mainLocation" wire:model="mainLocation">
                    <option value="">Select location</option>
                    @forelse ($this->locations as $item)
                        <option value="{{ $item->id }}">
                            {{ $item->name }} </option>
                    @empty
                    @endforelse
                </select>
                <x-jet-input-error for="mainLocation" />
            </div>
            <div class="form-group">
                <label for="accessLevel">Access level</label>
                <select class="form-control" id="accessLevel" wire:model="accessLevel">
                    <option value="">Select access level</option>
                    <option>System Administrator</option>
                    <option>Supervisor</option>
                    <option>Employee</option>
                    <option>DM</option>
                    <option>Operations Manager</option>
                    <option>SDM</option>
                    <option>Mobilisation Lead</option>
                    <option>LHR T/L</option>
                    <option>Driver</option>
                    <option>Operative</option>
                    <option>Luton Van</option>
                    <option>Tug</option>
                    <option>Finance</option>
                    <option>YVR Sr Supervisor</option>
                    <option>YVR Team Leader</option>
                    <option>H&S Coordinator</option>
                    <option>Team Leader </option>
                    <option>YVR Systems Admin</option>
                    <option>YVR Payroll Admin</option>
                    <option>Planning</option>
                </select>
                <x-jet-input-error for="accessLevel" />
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
