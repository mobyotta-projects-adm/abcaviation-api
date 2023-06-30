<div class="container">
    @if (session()->has('message'))
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close text-danger" data-bs-dismiss="alert" aria-label="Close"></button>
            <strong>Updated Successful</strong>
        </div>
    @endif

    <form method="post" wire:submit.prevent='submitGeneralTab'>
        @csrf

        <div class="mb-3">
            <x-jet-label for="name" value="{{ __('Name') }}" />
            <x-jet-input id="name" type="text" class="{{ $errors->has('name') ? 'is-invalid' : '' }}"
                wire:model="name" autocomplete="name" />
            <x-jet-input-error for="name" />
        </div>

        <div class="mb-3">
            <x-jet-label for="address" value="{{ __('Address') }}" />
            <div class="mb-3">
                <x-jet-input id="address" type="text"
                    class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" wire:model.defer="address"
                    placeholder="address" autocomplete="Address" />
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

                        <div class="form-check form-switch" wire:click="toggleDay('{{ $day }}')">
                            <input class="form-check-input" type="checkbox" value=""
                                {{ $slot->is_open == true ? 'checked' : '' }} id="">
                            <label class="form-check-label" for="">
                                {{ $day }}
                            </label>
                        </div>
                    </div>

                    @if ($slot->is_open == true)
                        <div class="col-md-4">
                            <select class="form-control {{ $errors->has('timezone') ? 'is-invalid' : '' }}"
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
                                <select class="form-control {{ $errors->has('timezone') ? 'is-invalid' : '' }}"
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


        <button type="submit" name="" id="" class="btn btn-primary">Submit</button>

    </form>
</div>
