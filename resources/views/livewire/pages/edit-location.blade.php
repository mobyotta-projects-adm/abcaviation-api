<div>
    <h5 class="mb-3"> {{ $location->name }} </h5>
    <div class="row">
        <div class="col-md-3 col-sm-12">
            <ul class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <li><a class="nav-link " id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home"
                        role="tab" aria-controls="v-pills-home" aria-selected="true">General</a></li>
                <li><a class="nav-link active" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-profile"
                        role="tab" aria-controls="v-pills-profile" aria-selected="false">Areas</a></li>
                <li><a class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" href="#v-pills-messages"
                        role="tab" aria-controls="v-pills-messages" aria-selected="false">Settings</a></li>
                <li><a class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" href="#v-pills-settings"
                        role="tab" aria-controls="v-pills-settings" aria-selected="false">Timesheets</a></li>
            </ul>
        </div>
        <div class="col-md-9 col-sm-12">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade " id="v-pills-home" role="tabpanel"
                    aria-labelledby="v-pills-home-tab">
                    <div class="container">
                        @if (session()->has('message'))
                            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                <button type="button" class="btn-close text-danger" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                                <strong>Updated Successful</strong>
                            </div>
                        @endif

                        <form method="post" wire:submit.prevent='submitGeneralTab'>
                            @csrf

                            <div class="mb-3">
                                <x-jet-label for="name" value="{{ __('Name') }}" />
                                <x-jet-input id="name" type="text"
                                    class="{{ $errors->has('name') ? 'is-invalid' : '' }}" wire:model="name"
                                    autocomplete="name" />
                                <x-jet-input-error for="name" />
                            </div>

                            <div class="mb-3">
                                <x-jet-label for="address" value="{{ __('Address') }}" />
                                <div class="mb-3">
                                    <x-jet-input id="address" type="text"
                                        class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}"
                                        wire:model.defer="address" placeholder="address" autocomplete="Address" />
                                </div>
                                <x-jet-input-error for="address" />
                            </div>
                            <div wire:ignore>
                                <div class="mb-3">
                                    <x-jet-label for="timezone" value="{{ __('Timezone') }}" />
                                    <div class="mb-3">
                                        <select class="form-control {{ $errors->has('timezone') ? 'is-invalid' : '' }}"
                                            wire:model="timezone" name="" id="timezone">
                                            <option selected value="">Select </option>
                                            @foreach ($timezones as $item)
                                                <option value="{{ $item }}">{{ $item }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <x-jet-input-error for="timezone" />
                                </div>
                            </div>
                            <br>

                            <h5 wire:click='change'>Operating Hours</h5>

                            @if ($operating_hours)
                                @php
                                    $temp = json_decode($operating_hours);
                                @endphp
                                @foreach ($weekdays as $day)
                                    @php
                                        $slot = $temp->$day;
                                    @endphp
                                    <div class="row align-items-center mb-2" style="min-height: 50px">
                                        <div class="col-md-2">
                                            <div class="form-check" wire:click="toggleDay('{{ $day }}')">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    {{ $slot->is_open == true ? 'checked' : '' }} id="">
                                                <label class="form-check-label" for="">
                                                    {{ $day }}
                                                </label>
                                            </div>
                                        </div>

                                        @if ($slot->is_open == true)
                                            <div class="col-md-4">
                                                <select
                                                    class="form-control {{ $errors->has('timezone') ? 'is-invalid' : '' }}"
                                                    id="{{ $day }}_start_time"
                                                    wire:change="start_day_change('{{ $day }}'  ,$event.target.value)">

                                                    >
                                                    <option value="24_hours" {{ $slot->is_24hour ? 'selected' : '' }}>
                                                        Open 24 hours
                                                    </option>
                                                    @foreach ($timeSlots as $item)
                                                        {{ $item }}</option>
                                                        <option value="{{ $item }}"
                                                            {{ !$slot->is_24hour && $slot->start_time == $item ? 'selected' : '' }}>
                                                            {{ $item }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            @if ($slot->is_24hour == false)
                                                <div class="col-md-4">
                                                    <select
                                                        class="form-control {{ $errors->has('timezone') ? 'is-invalid' : '' }}"
                                                        id="{{ $day }}_end_time">

                                                        @foreach ($timeSlots as $item)
                                                            <option value="{{ $item }}"
                                                                {{ $slot->end_time == $item ? 'selected' : '' }}>
                                                                {{ $item }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            @endif
                                        @endif
                                    </div>
                                @endforeach
                            @endif


                            <button type="submit" name="" id=""
                                class="btn btn-primary">Submit</button>

                        </form>
                    </div>
                </div>

            </div>
            <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <livewire:data-tables.location-areas-table locationId="{{ $location->id }}">
            </div>
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">

            </div>
            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">

            </div>
        </div>
    </div>
</div>
</div>

@push('body')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>



    <script>
        document.addEventListener('livewire:load', function() {
            $('#timezone').select2({
                placeholder: 'Select Timezone'
            });
            $('#timezone').on('change', function(e) {
                var data = $('#timezone').select2("val");
                @this.set('timezone', data);

            });

        });
    </script>
@endpush
