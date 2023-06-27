<x-app-layout>
    <div class="row">
        <!-- [ sample-page ] start -->
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header ">
                    <div class="d-flex justify-content-between">
                        <span id="">
                            <h3 class="margin-none">Tasks </h3>
                        </span>

                        <span id="">
                            <button type="button" class="btn btn-primary d-inline-flex btn-sm rounded rounded-14">Add
                                Task <i class="ti ti-chevron-down ms-1 mt-1"></i></button>
                        </span>
                    </div>

                    <div class="d-flex justify-content-between">
                        <span class="toolsbox-DB">
                            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                <button type="button" class="btn btn-primary btn-sm rounded-start rounded-14"> <i
                                        class="ti ti-map-pin"></i></button>

                                <div class="btn-group" role="group">
                                    <button id="btnGroupDrop1" type="button"
                                        class="btn btn-primary dropdown-toggle rounded-end rounded-14 btn-sm"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Find Location
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                        <a class="dropdown-item" href="#!">Dropdown link</a>
                                        <a class="dropdown-item" href="#!">Dropdown link</a>
                                    </div>
                                </div>
                            </div>

                            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">

                                <button type="button" class="btn btn-primary rounded-start rounded-14 btn-sm"> <i
                                        class="ti ti-chevron-left "></i></button>
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-primary rounded rounded-0 btn-sm">
                                        <i class="fas fa-calculator"></i>
                                        <span class="">Mon, 26 Jun 2023</span>
                                        <i class="fas fa-caret-down "></i>
                                    </button>


                                    <button type="button"
                                        class="btn btn-primary btn-sm rounded-end rounded-14 btn-sm"><i
                                            class="ti ti-chevron-right"></i></button>
                                </div>

                            </div>
                            <button type="button" class="btn btn-primary btn-sm rounded rounded-14 "><i
                                    class="ti ti-refresh"></i></button>
                        </span>
                        <span class="toolbox-DBleft">
                            <div class="form-search">
                                <i class="ti ti-search" style="top: 6px;"></i>
                                <input type="search" class="form-control form-control-sm"
                                    placeholder="ex. alert, textbox... " id="compo-menu-search">
                            </div>
                        </span>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">

                        <div class="row">
                            <div class="col-12">
                              <ul class="d-flex align-items-center justify-content-between border-top border-secondary py-3 list-unstyled  fw-bold">
                                <li>
                                    <i class="fas fa-user-alt me-2"> </i>
                                  <span>All tasks</span>
                                </li>
                                <li>
                                  <img src="https://cutedp.in/wp-content/uploads/2022/12/Stylish-C-Letter-Dp-1024x1024.jpg" alt="Logo" class="rounded-circle img-fluid wid-30 me-2" data-bs-toggle="tooltip"
                                  title="Cherelle">
                                  <span>All completed</span>
                                </li>
                              </ul>

                              <ul class="d-flex align-items-center justify-content-between border-top border-secondary py-3 list-unstyled fw-bold">
                                <li >
                                    <i class="fas fa-user-alt me-2 "> </i>
                                  <span>All tasks</span>
                                </li>
                                <li>
                                  <img src="https://cutedp.in/wp-content/uploads/2022/12/Stylish-C-Letter-Dp-1024x1024.jpg" alt="Logo" class="rounded-circle img-fluid wid-30 me-2" data-bs-toggle="tooltip"
                                  title="Cherelle">
                                  <span>All completed</span>
                                </li>
                              </ul>
                            </div>
                          </div>


                        <div class="col-12">
                            <div class="card">
                                <div class="card-body pb-0">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h5 class="mb-0">All Tasks</h5>
                                        <div class="dropdown">
                                            <a class="avtar avtar-s btn-link-secondary dropdown-toggle arrow-none"
                                                href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="ti ti-dots-vertical f-18"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Today</a>
                                                <a class="dropdown-item" href="#">Weekly</a>
                                                <a class="dropdown-item" href="#">Monthly</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <ul class="list-group list-group-flush border-top-0">
                                    <li class="list-group-item">
                                        <div class="d-flex align-items-start">
                                            <div class="flex-grow-1 me-2">
                                                <h6 class="mb-0">No Tasks today!</h6>
                                                <p class="my-1"><i class="ti ti-archive"></i> Sending report</p>
                                                <span class="badge bg-danger rounded-pill">00 : 15</span>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <a href="#" class="avtar avtar-s btn-link-secondary">
                                                    <i class="ti ti-circle-check text-success f-18"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex align-items-start">
                                            <div class="flex-grow-1 me-2">
                                                <h6 class="mb-0">Follow up client for feedback</h6>
                                                <p class="my-1"><i class="ti ti-folder"></i> Received report</p>
                                                <span class="badge bg-success rounded-pill">00 : 30</span>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <a href="#" class="avtar avtar-s btn-link-secondary">
                                                    <i class="ti ti-circle-check f-18"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex align-items-start">
                                            <div class="flex-grow-1 me-2">
                                                <h6 class="mb-0">Follow up client for feedback</h6>
                                                <p class="my-1"><i class="ti ti-archive"></i> Sending report</p>
                                                <span class="badge bg-danger rounded-pill">00 : 15</span>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <a href="#" class="avtar avtar-s btn-link-secondary">
                                                    <i class="ti ti-circle-check f-18"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>





                    </div>

                </div>
            </div>
        </div>
        <!-- [ sample-page ] end -->
    </div>

</x-app-layout>
