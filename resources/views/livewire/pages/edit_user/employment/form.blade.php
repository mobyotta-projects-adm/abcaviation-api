<div>
    &nbsp; <h2 class="text-center mt-4">{{ $user->name }}</h2>

    @if (session()->has('message'))
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close text-danger" data-bs-dismiss="alert" aria-label="Close"></button>
            <strong>Updated Successful</strong>
        </div>
    @endif
    <!-- Nav tabs -->
    <div class="row">
        <div class="col-md-3 col-sm-12">
            <ul class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <li><a class="nav-link {{ $current_tab == 'work_details' ? 'active' : '' }}"
                        wire:click="setTab('work_details')" role="tab"
                        aria-selected="{{ $current_tab == 'work_details' ? 'true' : 'false' }}">Work
                        Details</a></li>

                <li><a class="nav-link {{ $current_tab == 'pay_details' ? 'active' : '' }}"
                        wire:click="setTab('pay_details')" role="tab"
                        aria-selected="{{ $current_tab == 'pay_details' ? 'true' : 'false' }}">Pay
                        Details</a></li>
                <li><a class="nav-link {{ $current_tab == 'work_hours' ? 'active' : '' }}"
                        wire:click="setTab('work_hours')" role="tab"
                        aria-selected="{{ $current_tab == 'work_hours' ? 'true' : 'false' }}">
                        Working hours</a></li>
                <li><a class="nav-link {{ $current_tab == 'leave' ? 'active' : '' }}" wire:click="setTab('leave')"
                        role="tab" aria-selected="{{ $current_tab == 'leave' ? 'true' : 'false' }}">Pay
                        Leave entitlements</a></li>



            </ul>
        </div>
        <div class="col-md-9 col-sm-12">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane {{ $current_tab == 'work_details' ? 'show active' : '' }} " id="home"
                    role="tabpanel" aria-labelledby="home-tab">
                    @include('livewire.pages.edit_user.employment.work_details')
                </div>

                <div class="tab-pane {{ $current_tab == 'pay_details' ? 'show active' : '' }} " id="profile"
                    role="tabpanel" aria-labelledby="profile-tab">
                    @include('livewire.pages.edit_user.employment.pay_details')
                </div>
                <div class="tab-pane {{ $current_tab == 'pay_details' ? 'show active' : '' }} " id="profile"
                    role="tabpanel" aria-labelledby="profile-tab">
                    @include('livewire.pages.edit_user.employment.pay_details')
                </div>
                <div class="tab-pane {{ $current_tab == 'leave' ? 'show active' : '' }} " id="profile"
                    role="tabpanel" aria-labelledby="profile-tab">
                    @include('livewire.pages.edit_user.employment.leave')
                </div>
            </div>
        </div>
    </div>




</div>
