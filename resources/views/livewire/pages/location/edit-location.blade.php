<div>
    <h5 class="mb-3"> {{ $location->name }} </h5>


    <div class="row">
        <div class="col-md-3 col-sm-12">
            <ul class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <li><a class="nav-link {{ $current_tab == 'general' ? 'active' : '' }} " wire:click="setTab('general')"
                        role="tab" aria-selected="{{ $current_tab == 'general' ? 'true' : 'false' }}">General</a>
                </li>

                <li><a class="nav-link {{ $current_tab == 'area' ? 'active' : '' }}" wire:click="setTab('area')"
                        role="tab" aria-selected="{{ $current_tab == 'general' ? 'true' : 'false' }}">Areas</a></li>
                <li><a class="nav-link {{ $current_tab == 'sheduling' ? 'active' : '' }}"
                        wire:click="setTab('sheduling')" id="v-pills-messages-tab" role="tab"
                        aria-selected="{{ $current_tab == 'general' ? 'true' : 'false' }}">Sheduling</a></li>
                <li><a class="nav-link {{ $current_tab == 'timesheet' ? 'active' : '' }}"
                        wire:click="setTab('timesheet')" id="v-pills-settings-tab" role="tab"
                        aria-selected="{{ $current_tab == 'general' ? 'true' : 'false' }}">Timesheets</a></li>
            </ul>
        </div>
        <div class="col-md-9 col-sm-12">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade  {{ $current_tab == 'general' ? 'show active' : '' }}  " id="v-pills-home"
                    role="tabpanel" aria-labelledby="v-pills-home-tab">
                    @include('livewire.pages.location.sections.general')
                </div>
                <div class="tab-pane fade {{ $current_tab == 'area' ? 'show active' : '' }}" id="v-pills-profile"
                    role="tabpanel" aria-labelledby="v-pills-profile-tab">

                    <livewire:data-tables.location-areas-table locationId="{{ $location->id }}" />

                </div>
                <div class="tab-pane fade {{ $current_tab == 'sheduling' ? 'show active' : '' }}" id="v-pills-messages"
                    role="tabpanel" aria-labelledby="v-pills-messages-tab">
                    @include('livewire.pages.location.sections.sheduling')
                </div>
                <div class="tab-pane fade {{ $current_tab == 'timesheet' ? 'show active' : '' }}" id="v-pills-settings"
                    role="tabpanel" aria-labelledby="v-pills-settings-tab">
                    @include('livewire.pages.location.sections.timesheets')
                </div>
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
