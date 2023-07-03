<div class="row mt-4">

    <form wire:submit.prevent='submitContact'>
        <div class="col-md-12  mb-3">


            <div class="form-group m-form-group-border row mt-2">
                <div class="col-md-6">
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                </div>
                <div class="col-md-4">
                    <x-jet-input id="email" type="email" disabled value="{{ $user->email }}"
                        class="{{ $errors->has('email') ? 'is-invalid' : '' }}" />
                    <x-jet-input-error for="email" />
                </div>
            </div>

            <div class="row mt-2">
                <label class="col-md-6 col-form-label">Mobile</label>
                <div class="col-md-4">

                    <input class="form-control @error('mobile') is-invalid @enderror" type="text" disabled
                        value="{{ $user->profile->mobile }}" />
                    <x-jet-input-error for="mobile" />
                </div>
            </div>

            <div class="row mt-2">
                <label class="col-md-6 col-form-label">Address</label>
                <div class="col-md-4">
                    <input class="form-control @error('address') is-invalid @enderror" type="text" autocomplete="off"
                        tabindex="" aria-label="" inputmode="" placeholder="" wire:model="address" />
                    @error('address')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row mt-2">
                <label class="col-md-6 col-form-label">Postcode</label>
                <div class="col-md-4">
                    <input class="form-control @error('postcode') is-invalid @enderror" type="text"
                        autocomplete="off" tabindex="" aria-label="" inputmode="" placeholder=""
                        wire:model="postcode" />
                    @error('postcode')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row mt-2">
                <label class="col-md-6 col-form-label">City</label>
                <div class="col-md-4">
                    <input class="form-control @error('city') is-invalid @enderror" type="text" autocomplete="off"
                        tabindex="" aria-label="" inputmode="" placeholder="" wire:model="city" />
                    @error('city')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>



            <div class="form-group m-form-group-border row mt-2">
                <div class="col-md-6">
                    <label for="" class="form-label">State</label>
                </div>
                <div class="col-md-4">
                    <select class="form-select form-select-lg" name="" id="">
                        <option value="">Select</option>
                    </select>
                    <x-jet-input-error for="state" />
                </div>
            </div>


            <div class="form-group m-form-group-border row mt-2">
                <div class="col-md-6">
                    <label for="" class="form-label">Country</label>
                </div>
                <div class="col-md-4">


                    <select class="form-select form-select-lg" name="" id="" wire:model='country'>
                        <option value="">Select</option>
                        @forelse ($countries as $item)
                            <option value="{{ $item->id }}" >{{ $item->name }}</option>
                        @empty
                        @endforelse
                    </select>
                    <x-jet-input-error for="country" />
                </div>
            </div>

            <div class="form-group m-form-group-border row mt-2">
                <label class="col-md-6 col-form-label">Emergency contact name</label>
                <div class="col-md-4">
                    <input class="form-control @error('emergencyContactName') is-invalid @enderror" type="text"
                        autocomplete="off" tabindex="" aria-label="" inputmode="" placeholder=""
                        wire:model="emergencyContactName" />
                    @error('emergencyContactName')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row mt-2">
                <label class="col-md-6 col-form-label">Emergency phone number</label>
                <div class="col-md-4">
                    <input class="form-control @error('emergencyPhoneNumber') is-invalid @enderror" type="text"
                        autocomplete="off" tabindex="" aria-label="" inputmode="" placeholder=""
                        wire:model="emergencyPhoneNumber" />
                    @error('emergencyPhoneNumber')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>




            <button type="submit" name="" id="" class="btn btn-primary">Submit</button>

        </div>
    </form>
</div>
