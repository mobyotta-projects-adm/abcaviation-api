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
                <li><a class="nav-link {{ $current_tab == 'personal' ? 'active' : '' }}" wire:click="setTab('personal')"
                        role="tab" aria-selected="{{ $current_tab == 'personal' ? 'true' : 'false' }}">Personal
                        Details</a></li>

                <li><a class="nav-link {{ $current_tab == 'contact' ? 'active' : '' }}" wire:click="setTab('contact')"
                        role="tab" aria-selected="{{ $current_tab == 'contact' ? 'true' : 'false' }}">Contact
                        Details</a></li>



            </ul>
        </div>
        <div class="col-md-9 col-sm-12">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane {{ $current_tab == 'personal' ? 'show active' : '' }} " id="home"
                    role="tabpanel" aria-labelledby="home-tab">
                    @include('livewire.pages.edit_user.personal.personal')
                </div>
                <div class="tab-pane {{ $current_tab == 'contact' ? 'show active' : '' }} " id="profile"
                    role="tabpanel" aria-labelledby="profile-tab">
                    @include('livewire.pages.edit_user.personal.contact') </div>
            </div>
        </div>
    </div>




</div>
