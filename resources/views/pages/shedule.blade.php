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

                                               @foreach ([1,2,3,4,5,4,3,1,3,3,32,32,] as $item)
                                                   
                                            
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
                                                @endforeach 
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
                        <div class="">
                            <div class="card-body">
                                {{-- Data Starts  --}}
                                <div id="calendar" class="calendar"></div>

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

    <div class="modal fade" id="calendar-modal" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="calendar-modal-title f-w-600 text-truncate">Modal title</h3>
                    <a href="#" class="avtar avtar-s btn-link-danger btn-pc-default" data-bs-dismiss="modal">
                        <i class="ti ti-x f-20"></i>
                    </a>
                </div>
                <div class="modal-body">
                    <div class="d-flex">
                        <div class="flex-shrink-0">
                            <div class="avtar avtar-xs bg-light-secondary">
                                <i class="ti ti-heading f-20"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h5 class="mb-1"><b>Title</b></h5>
                            <p class="pc-event-title text-muted"></p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="flex-shrink-0">
                            <div class="avtar avtar-xs bg-light-warning">
                                <i class="ti ti-map-pin f-20"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h5 class="mb-1"><b>Venue</b></h5>
                            <p class="pc-event-venue text-muted"></p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="flex-shrink-0">
                            <div class="avtar avtar-xs bg-light-danger">
                                <i class="ti ti-calendar-event f-20"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h5 class="mb-1"><b>Date</b></h5>
                            <p class="pc-event-date text-muted"></p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="flex-shrink-0">
                            <div class="avtar avtar-xs bg-light-primary">
                                <i class="ti ti-file-text f-20"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h5 class="mb-1"><b>Description</b></h5>
                            <p class="pc-event-description text-muted"></p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <ul class="list-inline me-auto mb-0">
                        <li class="list-inline-item align-bottom">
                            <a href="#" id="pc_event_remove"
                                class="avtar avtar-s btn-link-danger btn-pc-default w-sm-auto"
                                data-bs-toggle="tooltip" title="Delete">
                                <i class="ti ti-trash f-18"></i>
                            </a>
                        </li>
                        <li class="list-inline-item align-bottom">
                            <a href="#" id="pc_event_edit"
                                class="avtar avtar-s btn-link-success btn-pc-default" data-bs-toggle="tooltip"
                                title="Edit">
                                <i class="ti ti-edit-circle f-18"></i>
                            </a>
                        </li>
                    </ul>
                    <div class="flex-grow-1 text-end">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="calendar-add_edit_event">
        <div class="offcanvas-header">
            <h3 class="f-w-600 text-truncate">Add Events</h3>
            <a href="#" class="avtar avtar-s btn-link-danger btn-pc-default" data-bs-dismiss="offcanvas">
                <i class="ti ti-x f-20"></i>
            </a>
        </div>
        <div class="offcanvas-body">
            <form id="pc-form-event" novalidate>
                <div class="form-group">
                    <label class="form-label">Title</label>
                    <input type="email" class="form-control" id="pc-e-title" placeholder="Enter event title">
                </div>
                <div class="form-group">
                    <label class="form-label">Venue</label>
                    <input type="email" class="form-control" id="pc-e-venue" placeholder="Enter event venue">
                </div>
                <div class="form-group m-0">
                    <input type="hidden" class="form-control" id="pc-e-sdate">
                    <input type="hidden" class="form-control" id="pc-e-edate">
                </div>
                <div class="form-group">
                    <label class="form-label">Description</label>
                    <textarea class="form-control" placeholder="Enter event description" rows="3" id="pc-e-description"></textarea>
                </div>
                <div class="form-group">
                    <label class="form-label">Type</label>
                    <select class="form-select" id="pc-e-type">
                        <option value="empty" selected>Type</option>
                        <option value="event-primary">Primary</option>
                        <option value="event-secondary">Secondary</option>
                        <option value="event-success">Success</option>
                        <option value="event-danger">Danger</option>
                        <option value="event-warning">Warning</option>
                        <option value="event-info">Info</option>
                    </select>
                </div>
                <div class="row justify-content-between">
                    <div class="col-auto"><button type="button" class="btn btn-link-danger btn-pc-default"
                            data-bs-dismiss="offcanvas"><i class="align-text-bottom me-1 ti ti-circle-x"></i>
                            Close</button></div>
                    <div class="col-auto">
                        <button id="pc_event_add" type="button" class="btn btn-secondary" data-pc-action="add">
                            <span id="pc-e-btn-text"><i class="align-text-bottom me-1 ti ti-calendar-plus"></i>
                                Add</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    @push('head')
        <link rel="stylesheet" href="<?= asset('assets/css/plugins/main.css') ?>">
    @endpush

    @push('body')
        <script src="<?= asset('assets/js/plugins/main.min.js') ?>"></script>
        <!-- Sweet Alert -->
        <script src="<?= asset('assets/js/plugins/sweetalert2.all.min.js') ?>"></script>
        <script src="<?= asset('assets/js/pages/calendar.js') ?>"></script>
    @endpush


</x-app-layout>
