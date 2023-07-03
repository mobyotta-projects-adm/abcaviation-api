<form wire:submit.prevent='submitPersonal'>

    <div class="row mt-4">
        <div class="col-md-12  mb-3">
            <div class="text-center mb-4">
                <div class="user-upload wid-75">
                    <!-- New Profile Photo Preview -->
                    <img src="{{ $this->photo ? $this->photo->temporaryUrl() : $this->user->profile_photo_url }}"
                        class="rounded-circle" width="80px" height="80px">
                    <label for="uplfile" class="img-avtar-upload">
                        <i class="ti ti-camera f-24 mb-1"></i>
                        <span>Upload</span>
                    </label>
                    <input type="file" id="uplfile" hidden wire:model="photo" x-ref="photo" accept="image/*">
                </div>
            </div>


            <div class="form-group m-form-group-border row mt-2">
                <div class="col-md-6">
                    <x-jet-label for="name" value="{{ __('Name') }}" />
                </div>
                <div class="col-md-4">
                    <x-jet-input id="name" type="text" class="{{ $errors->has('name') ? 'is-invalid' : '' }}"
                        wire:model="name" autocomplete="name" />
                    <x-jet-input-error for="name" />
                </div>
            </div>

            <div class="form-group m-form-group-border row mt-2">
                <div class="col-md-6">
                    <label for="" class="form-label">Gender</label>
                </div>
                <div class="col-md-4">
                    <select class="form-select form-select-lg" name="" id="" wire:model='gender'>
                        <option value="">Select</option>
                        <option>Prefer not to say</option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Non-binary</option>

                    </select>
                    <x-jet-input-error for="gender" />
                </div>
            </div>





            <div class="form-group m-form-group-border row mt-2">
                <div class="col-md-6">
                    <label for="" class="form-label">Date Of Birth</label>
                </div>
                <div class="col-md-4">
                    <x-jet-input id="date_of_birth" type="date"
                        class="{{ $errors->has('date_of_birth') ? 'is-invalid' : '' }}" wire:model="date_of_birth" />
                    <x-jet-input-error for="date_of_birth" />
                </div>
            </div>

            <button type="submit" name="" id="" class="btn btn-primary">Submit</button>

        </div>
    </div>
</form>
