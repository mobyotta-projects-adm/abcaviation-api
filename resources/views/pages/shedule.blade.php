<x-app-layout>

    <div class="row">
        <!-- [ sample-page ] start -->
        <div class="col-sm-12">
            <div class="chat-wrapper">
                <div class="offcanvas-md offcanvas-start chat-offcanvas" tabindex="-1" id="offcanvas_User_list">
                    <div class="offcanvas-header">
                        <button class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvas_User_list"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body p-0">
                        <div id="chat-user_list" class="show collapse collapse-horizontal">
                            <div class="chat-user_list">
                                <div class="card overflow-hidden">
                                    <div class="card-body">
                                        <h5 class="mb-4">Users
                                        </h5>
                                        <div class="form-search">
                                            <i class="ti ti-search"></i>
                                            <input type="search" class="form-control" placeholder="Search ...">
                                        </div>
                                    </div>
                                    <div class="scroll-block">
                                        <div class="card-body p-0">
                                            <div class="list-group list-group-flush">

                                                <a href="#" class="list-group-item list-group-item-action p-3">
                                                    <div class="media align-items-center">
                                                        <div class="chat-avtar">
                                                            <img class="rounded-circle img-fluid wid-40"
                                                                src="{{ asset('assets/images/user/avatar-1.jpg') }}"
                                                                alt="User image">
                                                            <div class="bg-success chat-badge"></div>
                                                        </div>
                                                        <div class="media-body mx-2">
                                                            <h6 class="mb-0">John Doe </h6>
                                                            <span class="text-sm text-muted">112h 30m : £329.00
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="chat-content">
                    <div class="card mb-0">
                        <div class="card-header p-3">
                            <div class="d-flex align-items-center">
                                <ul class="list-inline me-auto mb-0">
                                    <li class="list-inline-item align-bottom">
                                        <a href="#" class="d-md-none avtar avtar-s btn-link-secondary"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvas_User_list">
                                            <i class="ti ti-menu-2 f-18"></i>
                                        </a>
                                        <a href="#"
                                            class="d-none d-md-inline-flex avtar avtar-s btn-link-secondary"
                                            data-bs-toggle="collapse" data-bs-target="#chat-user_list">
                                            <i class="ti ti-menu-2 f-18"></i>
                                        </a>
                                    </li>

                                </ul>

                            </div>
                        </div>
                        <div class="scroll-block chat-message">
                            <div class="card-body">
                                {{-- Data Starts  --}}


                                {{-- Data Ends  --}}
                            </div>
                        </div>

                    </div>
                </div>
                <div class="offcanvas-md offcanvas-end chat-offcanvas" tabindex="-1" id="offcanvas_User_info">
                    <div class="offcanvas-header">
                        <button class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvas_User_info"
                            aria-label="Close"></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ sample-page ] end -->
    </div>


</x-app-layout>
