<x-app-layout>
    <div class="col-sm-12">
        <div class="row">
            <div class="col-lg-3 col-xxl-3">
                <div class="card">
                    <div class="text-center">
                        <div class="card-body">
                            <div class="rounded-circle logo-medashboard">
                                <img class="rounded-circle img-fluid wid-100"
                                    src="https://cutedp.in/wp-content/uploads/2022/12/Stylish-C-Letter-Dp-1024x1024.jpg"
                                    alt="Logo">
                            </div>
                            <h5 class="card-title mt-2">Cherelle</h5>
                            <p class="card-text">No scheduled shifts</p>

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-success wid-115 rounded rounded-14"
                                data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Start Shift
                            </button>

                        </div>
                    </div>


                </div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Start unscheduled shift</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                <div class="form-group">
                                    {{-- <label class="form-label" fosr="exampleFormControlSelect1">Example select</label> --}}
                                    <select class="form-select" id="exampleFormControlSelect1">
                                        <option selected>Select an area...</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light-secondary btn-sm rounded rounded-14"
                                    data-bs-dismiss="modal">Cancle</button>
                                <button type="button" class="btn btn-light-primary btn-sm rounded rounded-14">Start
                                    Shift</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-xxl-9 ">
                <div class="card ">
                    <div class="card-header d-flex justify-content-between">
                        <span id="dbref">
                            <h3 class="margin-none">Dashboard </h3>
                        </span>
                        
                        <span id="dbref1">
                            <button type="button" class="btn btn-icon btn-light-primary"><i class="ti ti-refresh"></i></button>
                            <button type="button" class="btn btn-icon btn-light-success"><i class="ti ti-chevron-down"></i></button>
                        </span>
                       
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4 col-xxl-4">
                                <div class="fs-6  fw-bold">Needs Attention</div>
                                <div class="accordion mb-2" id="shiftAccordion">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="shiftHeading">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#shiftCollapse" aria-expanded="true"
                                                aria-controls="shiftCollapse">
                                                <span class="fa fa-clock fa-lg feature-icon float-start me-3"></span>
                                                <div>
                                                    <span class="fs-7 fw-bold float-end">10 Unfilled Open
                                                        Shifts</span><br>
                                                    <span class="text-secondary">10 Today</span>
                                                </div>
                                            </button>
                                        </h2>
                                        <div id="shiftCollapse" class="accordion-collapse collapse show"
                                            aria-labelledby="shiftHeading" data-bs-parent="#shiftAccordion">
                                            <div class="accordion-body" style="max-height: 240px; overflow-y: auto;">
                                                <div class="dashboard-card-list-container">
                                                    <ul class="dashboard-card-list list-unstyled margin-none">
                                                        <li class="dc-list-item av-left js-open-shift-item">
                                                            <a href="#roster/record/505697"
                                                                data-dp-analytics="waDashboardClickCard-js-open-shift-item"
                                                                class="d-flex align-items-center">
                                                                <div class="col-auto">
                                                                    <div class="avatar me-3"><span
                                                                            class="fa fa-user fa-3x"></span></div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="dc-list-content m-0">
                                                                        <div class="m-0"><strong>Today, 25
                                                                                Jun</strong>
                                                                        </div>
                                                                        <div class="m-0"><small
                                                                                class="text-muted">3:45 am -
                                                                                11:45 am @ Trans-Border Scan -
                                                                                Operative</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="dc-list-item av-left js-open-shift-item">
                                                            <a href="#roster/record/505697"
                                                                data-dp-analytics="waDashboardClickCard-js-open-shift-item"
                                                                class="d-flex align-items-center">
                                                                <div class="col-auto">
                                                                    <div class="avatar me-3"><span
                                                                            class="fa fa-user fa-3x"></span></div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="dc-list-content m-0">
                                                                        <div class="m-0"><strong>Today, 25
                                                                                Jun</strong>
                                                                        </div>
                                                                        <div class="m-0"><small
                                                                                class="text-muted">3:45 am -
                                                                                11:45 am @ Trans-Border Scan -
                                                                                Operative</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="dc-list-item av-left js-open-shift-item">
                                                            <a href="#roster/record/505697"
                                                                data-dp-analytics="waDashboardClickCard-js-open-shift-item"
                                                                class="d-flex align-items-center">
                                                                <div class="col-auto">
                                                                    <div class="avatar me-3"><span
                                                                            class="fa fa-user fa-3x"></span></div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="dc-list-content m-0">
                                                                        <div class="m-0"><strong>Today, 25
                                                                                Jun</strong>
                                                                        </div>
                                                                        <div class="m-0"><small
                                                                                class="text-muted">3:45 am -
                                                                                11:45 am @ Trans-Border Scan -
                                                                                Operative</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="dc-list-item av-left js-open-shift-item">
                                                            <a href="#roster/record/505697"
                                                                data-dp-analytics="waDashboardClickCard-js-open-shift-item"
                                                                class="d-flex align-items-center">
                                                                <div class="col-auto">
                                                                    <div class="avatar me-3"><span
                                                                            class="fa fa-user fa-3x"></span></div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="dc-list-content m-0">
                                                                        <div class="m-0"><strong>Today, 25
                                                                                Jun</strong>
                                                                        </div>
                                                                        <div class="m-0"><small
                                                                                class="text-muted">3:45 am
                                                                                - 11:45 am @ Trans-Border Scan -
                                                                                Operative</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <!-- Add more list items for open shifts as needed -->
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion mb-2" id="shiftAccordion">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="shiftHeading">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#shiftCollapse" aria-expanded="true"
                                                aria-controls="shiftCollapse">
                                                <span class="fa fa-clock fa-lg feature-icon float-start me-3"></span>
                                                <div>
                                                    <span class="fs-7 fw-bold float-end">10 Unfilled Open
                                                        Shifts</span><br>
                                                    <span class="text-secondary">10 Today</span>
                                                </div>
                                            </button>
                                        </h2>
                                        <div id="shiftCollapse" class="accordion-collapse collapse show"
                                            aria-labelledby="shiftHeading" data-bs-parent="#shiftAccordion">
                                            <div class="accordion-body">
                                                <div class="dashboard-card-list-container">
                                                    <ul class="dashboard-card-list list-unstyled margin-none">
                                                        <li class="dc-list-item av-left js-open-shift-item">
                                                            <a href="#roster/record/505697"
                                                                data-dp-analytics="waDashboardClickCard-js-open-shift-item"
                                                                class="d-flex align-items-center">
                                                                <div class="col-auto">
                                                                    <div class="avatar me-3"><span
                                                                            class="fa fa-user fa-3x"></span></div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="dc-list-content m-0">
                                                                        <div class="m-0"><strong>Today, 25
                                                                                Jun</strong>
                                                                        </div>
                                                                        <div class="m-0"><small
                                                                                class="text-muted">3:45 am
                                                                                -
                                                                                11:45 am @ Trans-Border Scan -
                                                                                Operative</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="dc-list-item av-left js-open-shift-item">
                                                            <a href="#roster/record/505697"
                                                                data-dp-analytics="waDashboardClickCard-js-open-shift-item"
                                                                class="d-flex align-items-center">
                                                                <div class="col-auto">
                                                                    <div class="avatar me-3"><span
                                                                            class="fa fa-user fa-3x"></span></div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="dc-list-content m-0">
                                                                        <div class="m-0"><strong>Today, 25
                                                                                Jun</strong>
                                                                        </div>
                                                                        <div class="m-0"><small
                                                                                class="text-muted">3:45 am
                                                                                -
                                                                                11:45 am @ Trans-Border Scan -
                                                                                Operative</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="dc-list-item av-left js-open-shift-item">
                                                            <a href="#roster/record/505697"
                                                                data-dp-analytics="waDashboardClickCard-js-open-shift-item"
                                                                class="d-flex align-items-center">
                                                                <div class="col-auto">
                                                                    <div class="avatar me-3"><span
                                                                            class="fa fa-user fa-3x"></span></div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="dc-list-content m-0">
                                                                        <div class="m-0"><strong>Today, 25
                                                                                Jun</strong>
                                                                        </div>
                                                                        <div class="m-0"><small
                                                                                class="text-muted">3:45 am
                                                                                -
                                                                                11:45 am @ Trans-Border Scan -
                                                                                Operative</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="dc-list-item av-left js-open-shift-item">
                                                            <a href="#roster/record/505697"
                                                                data-dp-analytics="waDashboardClickCard-js-open-shift-item"
                                                                class="d-flex align-items-center">
                                                                <div class="col-auto">
                                                                    <div class="avatar me-3"><span
                                                                            class="fa fa-user fa-3x"></span></div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="dc-list-content m-0">
                                                                        <div class="m-0"><strong>Today, 25
                                                                                Jun</strong>
                                                                        </div>
                                                                        <div class="m-0"><small
                                                                                class="text-muted">3:45 am
                                                                                - 11:45 am @ Trans-Border Scan -
                                                                                Operative</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <!-- Add more list items for open shifts as needed -->
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xxl-4">
                                <div class="fs-6  fw-bold">Needs Approval</div>
                                <div class="accordion mb-2" id="shiftAccordion">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="shiftHeading">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#shiftCollapse" aria-expanded="true"
                                                aria-controls="shiftCollapse">
                                                <span class="fa fa-clock fa-lg feature-icon float-start me-3"></span>
                                                <div>
                                                    <span class="fs-7 fw-bold float-end">10 Unfilled Open
                                                        Shifts</span><br>
                                                    <span class="text-secondary">10 Today</span>
                                                </div>
                                            </button>
                                        </h2>
                                        <div id="shiftCollapse" class="accordion-collapse collapse show"
                                            aria-labelledby="shiftHeading" data-bs-parent="#shiftAccordion">
                                            <div class="accordion-body">
                                                <div class="dashboard-card-list-container">
                                                    <ul class="dashboard-card-list list-unstyled margin-none">
                                                        <li class="dc-list-item av-left js-open-shift-item">
                                                            <a href="#roster/record/505697"
                                                                data-dp-analytics="waDashboardClickCard-js-open-shift-item"
                                                                class="d-flex align-items-center">
                                                                <div class="col-auto">
                                                                    <div class="avatar me-3"><span
                                                                            class="fa fa-user fa-3x"></span></div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="dc-list-content m-0">
                                                                        <div class="m-0"><strong>Today, 25
                                                                                Jun</strong>
                                                                        </div>
                                                                        <div class="m-0"><small
                                                                                class="text-muted">3:45 am
                                                                                -
                                                                                11:45 am @ Trans-Border Scan -
                                                                                Operative</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="dc-list-item av-left js-open-shift-item">
                                                            <a href="#roster/record/505697"
                                                                data-dp-analytics="waDashboardClickCard-js-open-shift-item"
                                                                class="d-flex align-items-center">
                                                                <div class="col-auto">
                                                                    <div class="avatar me-3"><span
                                                                            class="fa fa-user fa-3x"></span></div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="dc-list-content m-0">
                                                                        <div class="m-0"><strong>Today, 25
                                                                                Jun</strong>
                                                                        </div>
                                                                        <div class="m-0"><small
                                                                                class="text-muted">3:45 am
                                                                                -
                                                                                11:45 am @ Trans-Border Scan -
                                                                                Operative</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="dc-list-item av-left js-open-shift-item">
                                                            <a href="#roster/record/505697"
                                                                data-dp-analytics="waDashboardClickCard-js-open-shift-item"
                                                                class="d-flex align-items-center">
                                                                <div class="col-auto">
                                                                    <div class="avatar me-3"><span
                                                                            class="fa fa-user fa-3x"></span></div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="dc-list-content m-0">
                                                                        <div class="m-0"><strong>Today, 25
                                                                                Jun</strong>
                                                                        </div>
                                                                        <div class="m-0"><small
                                                                                class="text-muted">3:45 am
                                                                                -
                                                                                11:45 am @ Trans-Border Scan -
                                                                                Operative</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="dc-list-item av-left js-open-shift-item">
                                                            <a href="#roster/record/505697"
                                                                data-dp-analytics="waDashboardClickCard-js-open-shift-item"
                                                                class="d-flex align-items-center">
                                                                <div class="col-auto">
                                                                    <div class="avatar me-3"><span
                                                                            class="fa fa-user fa-3x"></span></div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="dc-list-content m-0">
                                                                        <div class="m-0"><strong>Today, 25
                                                                                Jun</strong>
                                                                        </div>
                                                                        <div class="m-0"><small
                                                                                class="text-muted">3:45 am
                                                                                - 11:45 am @ Trans-Border Scan -
                                                                                Operative</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <!-- Add more list items for open shifts as needed -->
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion mb-2" id="shiftAccordion">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="shiftHeading">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#shiftCollapse" aria-expanded="true"
                                                aria-controls="shiftCollapse">
                                                <span class="fa fa-clock fa-lg feature-icon float-start me-3"></span>
                                                <div>
                                                    <span class="fs-7 fw-bold float-end">10 Unfilled Open
                                                        Shifts</span><br>
                                                    <span class="text-secondary">10 Today</span>
                                                </div>
                                            </button>
                                        </h2>
                                        <div id="shiftCollapse" class="accordion-collapse collapse show"
                                            aria-labelledby="shiftHeading" data-bs-parent="#shiftAccordion">
                                            <div class="accordion-body">
                                                <div class="dashboard-card-list-container">
                                                    <ul class="dashboard-card-list list-unstyled margin-none">
                                                        <li class="dc-list-item av-left js-open-shift-item">
                                                            <a href="#roster/record/505697"
                                                                data-dp-analytics="waDashboardClickCard-js-open-shift-item"
                                                                class="d-flex align-items-center">
                                                                <div class="col-auto">
                                                                    <div class="avatar me-3"><span
                                                                            class="fa fa-user fa-3x"></span></div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="dc-list-content m-0">
                                                                        <div class="m-0"><strong>Today, 25
                                                                                Jun</strong>
                                                                        </div>
                                                                        <div class="m-0"><small
                                                                                class="text-muted">3:45 am
                                                                                -
                                                                                11:45 am @ Trans-Border Scan -
                                                                                Operative</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="dc-list-item av-left js-open-shift-item">
                                                            <a href="#roster/record/505697"
                                                                data-dp-analytics="waDashboardClickCard-js-open-shift-item"
                                                                class="d-flex align-items-center">
                                                                <div class="col-auto">
                                                                    <div class="avatar me-3"><span
                                                                            class="fa fa-user fa-3x"></span></div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="dc-list-content m-0">
                                                                        <div class="m-0"><strong>Today, 25
                                                                                Jun</strong>
                                                                        </div>
                                                                        <div class="m-0"><small
                                                                                class="text-muted">3:45 am
                                                                                -
                                                                                11:45 am @ Trans-Border Scan -
                                                                                Operative</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="dc-list-item av-left js-open-shift-item">
                                                            <a href="#roster/record/505697"
                                                                data-dp-analytics="waDashboardClickCard-js-open-shift-item"
                                                                class="d-flex align-items-center">
                                                                <div class="col-auto">
                                                                    <div class="avatar me-3"><span
                                                                            class="fa fa-user fa-3x"></span></div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="dc-list-content m-0">
                                                                        <div class="m-0"><strong>Today, 25
                                                                                Jun</strong>
                                                                        </div>
                                                                        <div class="m-0"><small
                                                                                class="text-muted">3:45 am
                                                                                -
                                                                                11:45 am @ Trans-Border Scan -
                                                                                Operative</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="dc-list-item av-left js-open-shift-item">
                                                            <a href="#roster/record/505697"
                                                                data-dp-analytics="waDashboardClickCard-js-open-shift-item"
                                                                class="d-flex align-items-center">
                                                                <div class="col-auto">
                                                                    <div class="avatar me-3"><span
                                                                            class="fa fa-user fa-3x"></span></div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="dc-list-content m-0">
                                                                        <div class="m-0"><strong>Today, 25
                                                                                Jun</strong>
                                                                        </div>
                                                                        <div class="m-0"><small
                                                                                class="text-muted">3:45 am
                                                                                - 11:45 am @ Trans-Border Scan -
                                                                                Operative</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <!-- Add more list items for open shifts as needed -->
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xxl-4">
                                <div class="fs-6 fw-bold">What's happening?</div>
                                <div class="accordion mb-2" id="shiftAccordion">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="shiftHeading">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#shiftCollapse" aria-expanded="true"
                                                aria-controls="shiftCollapse">
                                                <span class="fa fa-clock fa-lg feature-icon float-start me-3"></span>
                                                <div>
                                                    <span class="fs-7 fw-bold float-end">10 Unfilled Open
                                                        Shifts</span><br>
                                                    <span class="text-secondary">10 Today</span>
                                                </div>
                                            </button>
                                        </h2>
                                        <div id="shiftCollapse" class="accordion-collapse collapse show"
                                            aria-labelledby="shiftHeading" data-bs-parent="#shiftAccordion">
                                            <div class="accordion-body">
                                                <div class="dashboard-card-list-container">
                                                    <ul class="dashboard-card-list list-unstyled margin-none">
                                                        <li class="dc-list-item av-left js-open-shift-item">
                                                            <a href="#roster/record/505697"
                                                                data-dp-analytics="waDashboardClickCard-js-open-shift-item"
                                                                class="d-flex align-items-center">
                                                                <div class="col-auto">
                                                                    <div class="avatar me-3"><span
                                                                            class="fa fa-user fa-3x"></span></div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="dc-list-content m-0">
                                                                        <div class="m-0"><strong>Today, 25
                                                                                Jun</strong>
                                                                        </div>
                                                                        <div class="m-0"><small
                                                                                class="text-muted">3:45 am
                                                                                -
                                                                                11:45 am @ Trans-Border Scan -
                                                                                Operative</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="dc-list-item av-left js-open-shift-item">
                                                            <a href="#roster/record/505697"
                                                                data-dp-analytics="waDashboardClickCard-js-open-shift-item"
                                                                class="d-flex align-items-center">
                                                                <div class="col-auto">
                                                                    <div class="avatar me-3"><span
                                                                            class="fa fa-user fa-3x"></span></div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="dc-list-content m-0">
                                                                        <div class="m-0"><strong>Today, 25
                                                                                Jun</strong>
                                                                        </div>
                                                                        <div class="m-0"><small
                                                                                class="text-muted">3:45 am
                                                                                -
                                                                                11:45 am @ Trans-Border Scan -
                                                                                Operative</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="dc-list-item av-left js-open-shift-item">
                                                            <a href="#roster/record/505697"
                                                                data-dp-analytics="waDashboardClickCard-js-open-shift-item"
                                                                class="d-flex align-items-center">
                                                                <div class="col-auto">
                                                                    <div class="avatar me-3"><span
                                                                            class="fa fa-user fa-3x"></span></div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="dc-list-content m-0">
                                                                        <div class="m-0"><strong>Today, 25
                                                                                Jun</strong>
                                                                        </div>
                                                                        <div class="m-0"><small
                                                                                class="text-muted">3:45 am
                                                                                -
                                                                                11:45 am @ Trans-Border Scan -
                                                                                Operative</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="dc-list-item av-left js-open-shift-item">
                                                            <a href="#roster/record/505697"
                                                                data-dp-analytics="waDashboardClickCard-js-open-shift-item"
                                                                class="d-flex align-items-center">
                                                                <div class="col-auto">
                                                                    <div class="avatar me-3"><span
                                                                            class="fa fa-user fa-3x"></span></div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="dc-list-content m-0">
                                                                        <div class="m-0"><strong>Today, 25
                                                                                Jun</strong>
                                                                        </div>
                                                                        <div class="m-0"><small
                                                                                class="text-muted">3:45 am
                                                                                - 11:45 am @ Trans-Border Scan -
                                                                                Operative</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <!-- Add more list items for open shifts as needed -->
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion mb-2" id="shiftAccordion">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="shiftHeading">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#shiftCollapse" aria-expanded="true"
                                                aria-controls="shiftCollapse">
                                                <span class="fa fa-clock fa-lg feature-icon float-start me-3"></span>
                                                <div>
                                                    <span class="fs-7 fw-bold float-end">10 Unfilled Open
                                                        Shifts</span><br>
                                                    <span class="text-secondary">10 Today</span>
                                                </div>
                                            </button>
                                        </h2>
                                        <div id="shiftCollapse" class="accordion-collapse collapse show"
                                            aria-labelledby="shiftHeading" data-bs-parent="#shiftAccordion">
                                            <div class="accordion-body">
                                                <div class="dashboard-card-list-container">
                                                    <ul class="dashboard-card-list list-unstyled margin-none">
                                                        <li class="dc-list-item av-left js-open-shift-item">
                                                            <a href="#roster/record/505697"
                                                                data-dp-analytics="waDashboardClickCard-js-open-shift-item"
                                                                class="d-flex align-items-center">
                                                                <div class="col-auto">
                                                                    <div class="avatar me-3"><span
                                                                            class="fa fa-user fa-3x"></span></div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="dc-list-content m-0">
                                                                        <div class="m-0"><strong>Today, 25
                                                                                Jun</strong>
                                                                        </div>
                                                                        <div class="m-0"><small
                                                                                class="text-muted">3:45 am
                                                                                -
                                                                                11:45 am @ Trans-Border Scan -
                                                                                Operative</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="dc-list-item av-left js-open-shift-item">
                                                            <a href="#roster/record/505697"
                                                                data-dp-analytics="waDashboardClickCard-js-open-shift-item"
                                                                class="d-flex align-items-center">
                                                                <div class="col-auto">
                                                                    <div class="avatar me-3"><span
                                                                            class="fa fa-user fa-3x"></span></div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="dc-list-content m-0">
                                                                        <div class="m-0"><strong>Today, 25
                                                                                Jun</strong>
                                                                        </div>
                                                                        <div class="m-0"><small
                                                                                class="text-muted">3:45 am
                                                                                -
                                                                                11:45 am @ Trans-Border Scan -
                                                                                Operative</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="dc-list-item av-left js-open-shift-item">
                                                            <a href="#roster/record/505697"
                                                                data-dp-analytics="waDashboardClickCard-js-open-shift-item"
                                                                class="d-flex align-items-center">
                                                                <div class="col-auto">
                                                                    <div class="avatar me-3"><span
                                                                            class="fa fa-user fa-3x"></span></div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="dc-list-content m-0">
                                                                        <div class="m-0"><strong>Today, 25
                                                                                Jun</strong>
                                                                        </div>
                                                                        <div class="m-0"><small
                                                                                class="text-muted">3:45 am
                                                                                -
                                                                                11:45 am @ Trans-Border Scan -
                                                                                Operative</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="dc-list-item av-left js-open-shift-item">
                                                            <a href="#roster/record/505697"
                                                                data-dp-analytics="waDashboardClickCard-js-open-shift-item"
                                                                class="d-flex align-items-center">
                                                                <div class="col-auto">
                                                                    <div class="avatar me-3"><span
                                                                            class="fa fa-user fa-3x"></span></div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="dc-list-content m-0">
                                                                        <div class="m-0"><strong>Today, 25
                                                                                Jun</strong>
                                                                        </div>
                                                                        <div class="m-0"><small
                                                                                class="text-muted">3:45 am
                                                                                - 11:45 am @ Trans-Border Scan -
                                                                                Operative</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <!-- Add more list items for open shifts as needed -->
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- [ sample-page ] start -->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="margin-none">Calendar</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div id="calendar" class="calendar"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [ sample-page ] end -->
                </div>
            </div>
        </div>
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
                            Close</button>
                    </div>
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
