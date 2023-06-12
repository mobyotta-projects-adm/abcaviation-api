<x-app-layout>

    <div id="container-locations" class="container-pane container--wide padding--large" style="display: block;">
        <div class="m-teamStatusSidebar-primary">
            <div class="m-title">
                <h1 class="m-title-left">Locations</h1>
                <div class="m-title-right">
                    <div class="co-button-group" data-v-245abbd2="" data-v-be986f80="">
                        <div class="co-dropdown" ariadescribedby="co-popper-7097"><button
                                class="co-button co-button--default co-button--hasIcon is-icon-only el-dropdown-selfdefine"
                                type="button" id="location-options" data-v-6f0a4192="" data-v-be986f80=""
                                aria-haspopup="list" aria-controls="dropdown-menu-448" role="button" tabindex="0">
                                <!--v-if-->
                                <!--v-if--><svg class="co-icon" aria-hidden="true" data-v-8ef67890=""
                                    data-v-6f0a4192="">
                                    <use xlink:href="https://ca697e16014645.uk.deputy.com#co-icon-ellipsis-horizontal"
                                        data-v-8ef67890=""></use>
                                </svg>
                                <!--v-if-->
                                <!--v-if-->
                            </button></div>
                    </div>
                    <a href="/exec/new_location_wizard" id="workplace-add" class="workplace-add-btn btn btn-primary"
                        data-dp-analytics="LLAN" style="margin-top:0px;">Add Location</a>
                </div>
            </div>

            <!---->
            <div class="modal-locations-areas" data-v-589a3aa0="">
                <div class="co-overlay" style="z-index: 2002; display: none;">
                    <div id="7462" class="co-dialog" aria-modal="true" role="dialog" aria-describedby=""
                        aria-label="dialog" style="margin-top: 15vh; width: 600px;">
                        <div class="co-dialog__header"><span class="co-dialog__title"></span>
                            <div class="co-dialog__header-button"><button
                                    class="co-button co-button--text co-button--large co-button--hasIcon is-icon-only"
                                    type="button" data-v-6f0a4192="">
                                    <!--v-if-->
                                    <!--v-if--><svg class="co-icon" aria-hidden="true" data-v-8ef67890=""
                                        data-v-6f0a4192="">
                                        <use xlink:href="https://ca697e16014645.uk.deputy.com#co-icon-close"
                                            data-v-8ef67890=""></use>
                                    </svg>
                                    <!--v-if-->
                                    <!--v-if-->
                                </button></div>
                        </div>
                        <!--v-if-->
                        <!--v-if-->
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-8 padding-none">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-search"></i>
                        </div>
                        <input class="form-control" type="text" placeholder="Search Locations..."
                            id="locations-searchbox">
                        <div class="input-group-addon">
                            <span id="lblLocationVisibleCount">Showing 24 locations</span>
                        </div>
                    </div>
                </div>
                <div class="col-xs-4 padding-none">
                    <div class="btn-group m-locations-toggleBtnGroup">
                        <button class="btn btn-default js-workplace-view-cards active" title="View as cards"><i
                                class="fa fa-th-list"></i></button>
                        <button class="btn btn-default js-workplace-view-map" title="View on map"><i
                                class="fa fa-image"></i></button>
                        <button class="btn btn-default js-workplace-view-lanes" title="View as grouping"><i
                                class="fa fa-road"></i></button>
                    </div>
                </div>
            </div>

            <table id="workplace-list-table" style="">
                <thead>
                    <tr>
                        <th>Location Name</th>
                        <th>Location Address</th>
                        <th class="__areas">Areas</th>
                        <th class="u-textRight">&nbsp;</th>
                    </tr>
                </thead>
                <tbody id="workplace-list">
                    <tr class="workplace-card m-location-hasSomebody">
                        <td>
                            <strong>139 Office, Terminal 3</strong>
                            <span class="js-search" style="display:none;">139 139 Office, Terminal 3 Heathrow Terminal
                                3, TW6 1EW, London
                            </span>
                        </td>
                        <td class="text--small">
                            <a href="#map/19"><i class="fa fa-map-marker"></i> Heathrow Terminal 3, TW6 1EW, London
                            </a>
                        </td>

                        <td class="text--small __area">
                            <span>
                                DHL-Q-134(HHS) - DM, Planning , Training &amp; Development, DHL-Q-071(Staff
                                Transport)-Dri, DHL-Q-076(Warehouse Ass)-Dri

                                <a class="area-see-more">+72 more</a>

                            </span>
                        </td>

                        <td class="u-textRight">


                            <div class="btn-group">

                                <a class="btn btn-default" href="#location/19/edit">Edit Settings</a>
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>


                                <ul class="dropdown-menu dropdown-menu-right">


                                    <li><a href="#location/19/edit">Edit Settings</a></li>
                                    <li><a href="#map/19">View Details</a></li>
                                    <li><a class="js-bulk-copy" style="">Copy settings</a></li>



                                    <li><a href="#location/19/duplicate">Duplicate</a></li>





                                    <li><a href="#roster/19">Schedule</a></li>


                                    <li><a href="#approve/19">Approve Timesheets</a></li>



                                    <li><a class="js-message" data-who="all" href="#newsfeed/create">Message All</a>
                                    </li>

                                    <li><a class="js-message" data-who="working" href="#">Message Working
                                            (4)</a></li>




                                </ul>
                            </div>


                        </td>
                    </tr>
                    <tr class="workplace-card m-location-hasNobody">
                        <td>
                            <strong>400 Hours Group</strong>
                            <span class="js-search" style="display:none;">400 400 Hours Group Heathrow Airport
                            </span>
                        </td>
                        <td class="text--small">
                            <a href="#map/25"><i class="fa fa-map-marker"></i> Heathrow Airport
                            </a>
                        </td>

                        <td class="text--small __area">
                            <span>
                                400 Hours Group

                            </span>
                        </td>

                        <td class="u-textRight">


                            <div class="btn-group">

                                <a class="btn btn-default" href="#location/25/edit">Edit Settings</a>
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>


                                <ul class="dropdown-menu dropdown-menu-right">


                                    <li><a href="#location/25/edit">Edit Settings</a></li>
                                    <li><a href="#map/25">View Details</a></li>
                                    <li><a class="js-bulk-copy" style="">Copy settings</a></li>



                                    <li><a href="#location/25/duplicate">Duplicate</a></li>





                                    <li><a href="#roster/25">Schedule</a></li>


                                    <li><a href="#approve/25">Approve Timesheets</a></li>



                                    <li><a class="js-message" data-who="all" href="#newsfeed/create">Message All</a>
                                    </li>




                                </ul>
                            </div>


                        </td>
                    </tr>
                    <tr class="workplace-card m-location-hasNobody">
                        <td>
                            <strong>ABCoast Agility</strong>
                            <span class="js-search" style="display:none;">ABC-A ABCoast Agility Vancouver Airport
                            </span>
                        </td>
                        <td class="text--small">
                            <a href="#map/63"><i class="fa fa-map-marker"></i> Vancouver Airport
                            </a>
                        </td>

                        <td class="text--small __area">
                            <span>
                                Baggage ($24), Static Escort ($24), Airside Escort ($31), Terminal ($21)

                            </span>
                        </td>

                        <td class="u-textRight">


                            <div class="btn-group">

                                <a class="btn btn-default" href="#location/63/edit">Edit Settings</a>
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>


                                <ul class="dropdown-menu dropdown-menu-right">


                                    <li><a href="#location/63/edit">Edit Settings</a></li>
                                    <li><a href="#map/63">View Details</a></li>
                                    <li><a class="js-bulk-copy" style="">Copy settings</a></li>



                                    <li><a href="#location/63/duplicate">Duplicate</a></li>





                                    <li><a href="#roster/63">Schedule</a></li>


                                    <li><a href="#approve/63">Approve Timesheets</a></li>



                                    <li><a class="js-message" data-who="all" href="#newsfeed/create">Message All</a>
                                    </li>




                                </ul>
                            </div>


                        </td>
                    </tr>
                    <tr class="workplace-card m-location-hasNobody">
                        <td>
                            <strong>Active Group</strong>
                            <span class="js-search" style="display:none;">FUR Active Group Heathrow Airport
                            </span>
                        </td>
                        <td class="text--small">
                            <a href="#map/47"><i class="fa fa-map-marker"></i> Heathrow Airport
                            </a>
                        </td>

                        <td class="text--small __area">
                            <span>
                                Furlough Group

                            </span>
                        </td>

                        <td class="u-textRight">


                            <div class="btn-group">

                                <a class="btn btn-default" href="#location/47/edit">Edit Settings</a>
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>


                                <ul class="dropdown-menu dropdown-menu-right">


                                    <li><a href="#location/47/edit">Edit Settings</a></li>
                                    <li><a href="#map/47">View Details</a></li>
                                    <li><a class="js-bulk-copy" style="">Copy settings</a></li>



                                    <li><a href="#location/47/duplicate">Duplicate</a></li>





                                    <li><a href="#roster/47">Schedule</a></li>


                                    <li><a href="#approve/47">Approve Timesheets</a></li>



                                    <li><a class="js-message" data-who="all" href="#newsfeed/create">Message All</a>
                                    </li>




                                </ul>
                            </div>


                        </td>
                    </tr>
                    <tr class="workplace-card m-location-hasNobody">
                        <td>
                            <strong>British Airways</strong>
                            <span class="js-search" style="display:none;">BRI British Airways Heathrow Terminal 3
                            </span>
                        </td>
                        <td class="text--small">
                            <a href="#map/59"><i class="fa fa-map-marker"></i> Heathrow Terminal 3
                            </a>
                        </td>

                        <td class="text--small __area">
                            <span>
                                British Airways

                            </span>
                        </td>

                        <td class="u-textRight">


                            <div class="btn-group">

                                <a class="btn btn-default" href="#location/59/edit">Edit Settings</a>
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>


                                <ul class="dropdown-menu dropdown-menu-right">


                                    <li><a href="#location/59/edit">Edit Settings</a></li>
                                    <li><a href="#map/59">View Details</a></li>
                                    <li><a class="js-bulk-copy" style="">Copy settings</a></li>



                                    <li><a href="#location/59/duplicate">Duplicate</a></li>





                                    <li><a href="#roster/59">Schedule</a></li>


                                    <li><a href="#approve/59">Approve Timesheets</a></li>



                                    <li><a class="js-message" data-who="all" href="#newsfeed/create">Message All</a>
                                    </li>




                                </ul>
                            </div>


                        </td>
                    </tr>
                    <tr class="workplace-card m-location-hasNobody">
                        <td>
                            <strong>COBALT RAMP</strong>
                            <span class="js-search" style="display:none;">COB COBALT RAMP Terminal 3
                            </span>
                        </td>
                        <td class="text--small">
                            <a href="#map/57"><i class="fa fa-map-marker"></i> Terminal 3
                            </a>
                        </td>

                        <td class="text--small __area">
                            <span>
                                COBALT RAMP

                            </span>
                        </td>

                        <td class="u-textRight">


                            <div class="btn-group">

                                <a class="btn btn-default" href="#location/57/edit">Edit Settings</a>
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>


                                <ul class="dropdown-menu dropdown-menu-right">


                                    <li><a href="#location/57/edit">Edit Settings</a></li>
                                    <li><a href="#map/57">View Details</a></li>
                                    <li><a class="js-bulk-copy" style="">Copy settings</a></li>



                                    <li><a href="#location/57/duplicate">Duplicate</a></li>





                                    <li><a href="#roster/57">Schedule</a></li>


                                    <li><a href="#approve/57">Approve Timesheets</a></li>



                                    <li><a class="js-message" data-who="all" href="#newsfeed/create">Message All</a>
                                    </li>




                                </ul>
                            </div>


                        </td>
                    </tr>
                    <tr class="workplace-card m-location-hasNobody">
                        <td>
                            <strong>CONTACT 4</strong>
                            <span class="js-search" style="display:none;">CON CONTACT 4 Heathrow
                            </span>
                        </td>
                        <td class="text--small">
                            <a href="#map/35"><i class="fa fa-map-marker"></i> Heathrow
                            </a>
                        </td>

                        <td class="text--small __area">
                            <span>
                                CONTACT 4 EMERGENCY STAFF

                            </span>
                        </td>

                        <td class="u-textRight">


                            <div class="btn-group">

                                <a class="btn btn-default" href="#location/35/edit">Edit Settings</a>
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>


                                <ul class="dropdown-menu dropdown-menu-right">


                                    <li><a href="#location/35/edit">Edit Settings</a></li>
                                    <li><a href="#map/35">View Details</a></li>
                                    <li><a class="js-bulk-copy" style="">Copy settings</a></li>



                                    <li><a href="#location/35/duplicate">Duplicate</a></li>





                                    <li><a href="#roster/35">Schedule</a></li>


                                    <li><a href="#approve/35">Approve Timesheets</a></li>



                                    <li><a class="js-message" data-who="all" href="#newsfeed/create">Message All</a>
                                    </li>




                                </ul>
                            </div>


                        </td>
                    </tr>
                    <tr class="workplace-card m-location-hasNobody">
                        <td>
                            <strong>Do Not Use</strong>
                            <span class="js-search" style="display:none;">CAR Do Not Use Vancouver Airport
                            </span>
                        </td>
                        <td class="text--small">
                            <a href="#map/53"><i class="fa fa-map-marker"></i> Vancouver Airport
                            </a>
                        </td>

                        <td class="text--small __area">
                            <span>
                                Carts YVR

                            </span>
                        </td>

                        <td class="u-textRight">


                            <div class="btn-group">

                                <a class="btn btn-default" href="#location/53/edit">Edit Settings</a>
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>


                                <ul class="dropdown-menu dropdown-menu-right">


                                    <li><a href="#location/53/edit">Edit Settings</a></li>
                                    <li><a href="#map/53">View Details</a></li>
                                    <li><a class="js-bulk-copy" style="">Copy settings</a></li>



                                    <li><a href="#location/53/duplicate">Duplicate</a></li>





                                    <li><a href="#roster/53">Schedule</a></li>


                                    <li><a href="#approve/53">Approve Timesheets</a></li>



                                    <li><a class="js-message" data-who="all" href="#newsfeed/create">Message All</a>
                                    </li>




                                </ul>
                            </div>


                        </td>
                    </tr>
                    <tr class="workplace-card m-location-hasNobody">
                        <td>
                            <strong>Drivers</strong>
                            <span class="js-search" style="display:none;">DRI Drivers Heathrow
                            </span>
                        </td>
                        <td class="text--small">
                            <a href="#map/27"><i class="fa fa-map-marker"></i> Heathrow
                            </a>
                        </td>

                        <td class="text--small __area">
                            <span>
                                Drivers

                            </span>
                        </td>

                        <td class="u-textRight">


                            <div class="btn-group">

                                <a class="btn btn-default" href="#location/27/edit">Edit Settings</a>
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>


                                <ul class="dropdown-menu dropdown-menu-right">


                                    <li><a href="#location/27/edit">Edit Settings</a></li>
                                    <li><a href="#map/27">View Details</a></li>
                                    <li><a class="js-bulk-copy" style="">Copy settings</a></li>



                                    <li><a href="#location/27/duplicate">Duplicate</a></li>





                                    <li><a href="#roster/27">Schedule</a></li>


                                    <li><a href="#approve/27">Approve Timesheets</a></li>



                                    <li><a class="js-message" data-who="all" href="#newsfeed/create">Message All</a>
                                    </li>




                                </ul>
                            </div>


                        </td>
                    </tr>
                    <tr class="workplace-card m-location-hasNobody">
                        <td>
                            <strong>Flexi-Furlough</strong>
                            <span class="js-search" style="display:none;">FLE Flexi-Furlough Heathrow
                            </span>
                        </td>
                        <td class="text--small">
                            <a href="#map/54"><i class="fa fa-map-marker"></i> Heathrow
                            </a>
                        </td>

                        <td class="text--small __area">
                            <span>
                                Flexi-Furlough

                            </span>
                        </td>

                        <td class="u-textRight">


                            <div class="btn-group">

                                <a class="btn btn-default" href="#location/54/edit">Edit Settings</a>
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>


                                <ul class="dropdown-menu dropdown-menu-right">


                                    <li><a href="#location/54/edit">Edit Settings</a></li>
                                    <li><a href="#map/54">View Details</a></li>
                                    <li><a class="js-bulk-copy" style="">Copy settings</a></li>



                                    <li><a href="#location/54/duplicate">Duplicate</a></li>





                                    <li><a href="#roster/54">Schedule</a></li>


                                    <li><a href="#approve/54">Approve Timesheets</a></li>



                                    <li><a class="js-message" data-who="all" href="#newsfeed/create">Message All</a>
                                    </li>




                                </ul>
                            </div>


                        </td>
                    </tr>
                    <tr class="workplace-card m-location-hasNobody">
                        <td>
                            <strong>Heathrow Polar Park Police Stati</strong>
                            <span class="js-search" style="display:none;">HEA Heathrow Polar Park Police Stati Polar
                                Park #3, Bath Rd, Harmondsworth, West Drayton UB7 0DG, Uni</span>
                        </td>
                        <td class="text--small">
                            <a href="#map/60"><i class="fa fa-map-marker"></i> Polar Park #3, Bath Rd, Harmondsworth,
                                West Drayton UB7 0DG, Uni</a>
                        </td>

                        <td class="text--small __area">
                            <span>
                                Heathrow Polar Park Police Stati, DHL-Q-114(GLC)-Op's

                            </span>
                        </td>

                        <td class="u-textRight">


                            <div class="btn-group">

                                <a class="btn btn-default" href="#location/60/edit">Edit Settings</a>
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>


                                <ul class="dropdown-menu dropdown-menu-right">


                                    <li><a href="#location/60/edit">Edit Settings</a></li>
                                    <li><a href="#map/60">View Details</a></li>
                                    <li><a class="js-bulk-copy" style="">Copy settings</a></li>



                                    <li><a href="#location/60/duplicate">Duplicate</a></li>





                                    <li><a href="#roster/60">Schedule</a></li>


                                    <li><a href="#approve/60">Approve Timesheets</a></li>



                                    <li><a class="js-message" data-who="all" href="#newsfeed/create">Message All</a>
                                    </li>




                                </ul>
                            </div>


                        </td>
                    </tr>
                    <tr class="workplace-card m-location-hasNobody">
                        <td>
                            <strong>HOD</strong>
                            <span class="js-search" style="display:none;">SUP HOD Heathrow
                            </span>
                        </td>
                        <td class="text--small">
                            <a href="#map/26"><i class="fa fa-map-marker"></i> Heathrow
                            </a>
                        </td>

                        <td class="text--small __area">
                            <span>
                                Supervisors

                            </span>
                        </td>

                        <td class="u-textRight">


                            <div class="btn-group">

                                <a class="btn btn-default" href="#location/26/edit">Edit Settings</a>
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>


                                <ul class="dropdown-menu dropdown-menu-right">


                                    <li><a href="#location/26/edit">Edit Settings</a></li>
                                    <li><a href="#map/26">View Details</a></li>
                                    <li><a class="js-bulk-copy" style="">Copy settings</a></li>



                                    <li><a href="#location/26/duplicate">Duplicate</a></li>





                                    <li><a href="#roster/26">Schedule</a></li>


                                    <li><a href="#approve/26">Approve Timesheets</a></li>



                                    <li><a class="js-message" data-who="all" href="#newsfeed/create">Message All</a>
                                    </li>




                                </ul>
                            </div>


                        </td>
                    </tr>
                    <tr class="workplace-card m-location-hasNobody">
                        <td>
                            <strong>Mandatory Training</strong>
                            <span class="js-search" style="display:none;">MAN Mandatory Training Stanwell, England ,
                                United Kingdom
                            </span>
                        </td>
                        <td class="text--small">
                            <a href="#map/36"><i class="fa fa-map-marker"></i> Stanwell, England , United Kingdom
                            </a>
                        </td>

                        <td class="text--small __area">
                            <span>
                                Manual Handling Training, LHR Fire &amp; Manual Handling, Airside Safety Training,
                                Dangerous Goods Training, AAA Training

                                <a class="area-see-more">+2 more</a>

                            </span>
                        </td>

                        <td class="u-textRight">


                            <div class="btn-group">

                                <a class="btn btn-default" href="#location/36/edit">Edit Settings</a>
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>


                                <ul class="dropdown-menu dropdown-menu-right">


                                    <li><a href="#location/36/edit">Edit Settings</a></li>
                                    <li><a href="#map/36">View Details</a></li>
                                    <li><a class="js-bulk-copy" style="">Copy settings</a></li>



                                    <li><a href="#location/36/duplicate">Duplicate</a></li>





                                    <li><a href="#roster/36">Schedule</a></li>


                                    <li><a href="#approve/36">Approve Timesheets</a></li>



                                    <li><a class="js-message" data-who="all" href="#newsfeed/create">Message All</a>
                                    </li>




                                </ul>
                            </div>


                        </td>
                    </tr>
                    <tr class="workplace-card m-location-hasNobody">
                        <td>
                            <strong>Operatives</strong>
                            <span class="js-search" style="display:none;">OPE Operatives Heathrow Terminal
                            </span>
                        </td>
                        <td class="text--small">
                            <a href="#map/58"><i class="fa fa-map-marker"></i> Heathrow Terminal
                            </a>
                        </td>

                        <td class="text--small __area">
                            <span>
                                Operatives

                            </span>
                        </td>

                        <td class="u-textRight">


                            <div class="btn-group">

                                <a class="btn btn-default" href="#location/58/edit">Edit Settings</a>
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>


                                <ul class="dropdown-menu dropdown-menu-right">


                                    <li><a href="#location/58/edit">Edit Settings</a></li>
                                    <li><a href="#map/58">View Details</a></li>
                                    <li><a class="js-bulk-copy" style="">Copy settings</a></li>



                                    <li><a href="#location/58/duplicate">Duplicate</a></li>





                                    <li><a href="#roster/58">Schedule</a></li>


                                    <li><a href="#approve/58">Approve Timesheets</a></li>



                                    <li><a class="js-message" data-who="all" href="#newsfeed/create">Message All</a>
                                    </li>




                                </ul>
                            </div>


                        </td>
                    </tr>
                    <tr class="workplace-card m-location-hasNobody">
                        <td>
                            <strong>T/L Group</strong>
                            <span class="js-search" style="display:none;">2ZV T/L Group Longford TW6, United Kingdom
                            </span>
                        </td>
                        <td class="text--small">
                            <a href="#map/62"><i class="fa fa-map-marker"></i> Longford TW6, United Kingdom
                            </a>
                        </td>

                        <td class="text--small __area">
                            <span>
                                Heathrow Airport

                            </span>
                        </td>

                        <td class="u-textRight">


                            <div class="btn-group">

                                <a class="btn btn-default" href="#location/62/edit">Edit Settings</a>
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>


                                <ul class="dropdown-menu dropdown-menu-right">


                                    <li><a href="#location/62/edit">Edit Settings</a></li>
                                    <li><a href="#map/62">View Details</a></li>
                                    <li><a class="js-bulk-copy" style="">Copy settings</a></li>



                                    <li><a href="#location/62/duplicate">Duplicate</a></li>





                                    <li><a href="#roster/62">Schedule</a></li>


                                    <li><a href="#approve/62">Approve Timesheets</a></li>



                                    <li><a class="js-message" data-who="all" href="#newsfeed/create">Message All</a>
                                    </li>




                                </ul>
                            </div>


                        </td>
                    </tr>
                    <tr class="workplace-card m-location-hasNobody">
                        <td>
                            <strong>Terminal 1</strong>
                            <span class="js-search" style="display:none;">XTW Terminal 1 Terminal 1, Longford,
                                Hounslow TW6 1BJ, UK
                            </span>
                        </td>
                        <td class="text--small">
                            <a href="#map/22"><i class="fa fa-map-marker"></i> Terminal 1, Longford, Hounslow TW6 1BJ,
                                UK
                            </a>
                        </td>

                        <td class="text--small __area">
                            <span>
                                HAL-Q-504(T1 RFA)-Dri, HAL-Q-504(T1 RFA)-Op's, HAL-Q-502(T1 Monitor)-T/L, HAL-Q-490(T1
                                Purge Trial)-ML, HAL-Q-490(T1 Purge Trial)- Dri

                                <a class="area-see-more">+163 more</a>

                            </span>
                        </td>

                        <td class="u-textRight">


                            <div class="btn-group">

                                <a class="btn btn-default" href="#location/22/edit">Edit Settings</a>
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>


                                <ul class="dropdown-menu dropdown-menu-right">


                                    <li><a href="#location/22/edit">Edit Settings</a></li>
                                    <li><a href="#map/22">View Details</a></li>
                                    <li><a class="js-bulk-copy" style="">Copy settings</a></li>



                                    <li><a href="#location/22/duplicate">Duplicate</a></li>





                                    <li><a href="#roster/22">Schedule</a></li>


                                    <li><a href="#approve/22">Approve Timesheets</a></li>



                                    <li><a class="js-message" data-who="all" href="#newsfeed/create">Message All</a>
                                    </li>




                                </ul>
                            </div>


                        </td>
                    </tr>
                    <tr class="workplace-card m-location-hasSomebody">
                        <td>
                            <strong>Terminal 2</strong>
                            <span class="js-search" style="display:none;">ZYW Terminal 2 Terminal 2, Inner Ring E,
                                Longford, Hounslow TW6 1RR, UK
                            </span>
                        </td>
                        <td class="text--small">
                            <a href="#map/18"><i class="fa fa-map-marker"></i> Terminal 2, Inner Ring E, Longford,
                                Hounslow TW6 1RR, UK
                            </a>
                        </td>

                        <td class="text--small __area">
                            <span>
                                Contingency T2 - ML, Contingency T2 -T/L, Contingency T2 - DRI, Contingency T2 - (BOH)
                                -Op's, Aer lingus-Q-001- BM

                                <a class="area-see-more">+221 more</a>

                            </span>
                        </td>

                        <td class="u-textRight">


                            <div class="btn-group">

                                <a class="btn btn-default" href="#location/18/edit">Edit Settings</a>
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>


                                <ul class="dropdown-menu dropdown-menu-right">


                                    <li><a href="#location/18/edit">Edit Settings</a></li>
                                    <li><a href="#map/18">View Details</a></li>
                                    <li><a class="js-bulk-copy" style="">Copy settings</a></li>



                                    <li><a href="#location/18/duplicate">Duplicate</a></li>





                                    <li><a href="#roster/18">Schedule</a></li>


                                    <li><a href="#approve/18">Approve Timesheets</a></li>



                                    <li><a class="js-message" data-who="all" href="#newsfeed/create">Message All</a>
                                    </li>

                                    <li><a class="js-message" data-who="working" href="#">Message Working
                                            (22)</a></li>


                                    <li><a class="js-message" data-who="late" href="#">Message Late (3)</a>
                                    </li>



                                </ul>
                            </div>


                        </td>
                    </tr>
                    <tr class="workplace-card m-location-hasSomebody">
                        <td>
                            <strong>Terminal 3</strong>
                            <span class="js-search" style="display:none;">0M6 Terminal 3 Terminal 3, TW6 1QG, London
                            </span>
                        </td>
                        <td class="text--small">
                            <a href="#map/20"><i class="fa fa-map-marker"></i> Terminal 3, TW6 1QG, London
                            </a>
                        </td>

                        <td class="text--small __area">
                            <span>
                                CONTINGENCY T3 -T/L, CONTINGENCY T3 DRIVERS, Contingency T3 - OP'S, DHL-Q-134(HHS -
                                T3)-Op's, BA-Q-005(T3 Bag-Op)-T/L

                                <a class="area-see-more">+211 more</a>

                            </span>
                        </td>

                        <td class="u-textRight">


                            <div class="btn-group">

                                <a class="btn btn-default" href="#location/20/edit">Edit Settings</a>
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>


                                <ul class="dropdown-menu dropdown-menu-right">


                                    <li><a href="#location/20/edit">Edit Settings</a></li>
                                    <li><a href="#map/20">View Details</a></li>
                                    <li><a class="js-bulk-copy" style="">Copy settings</a></li>



                                    <li><a href="#location/20/duplicate">Duplicate</a></li>





                                    <li><a href="#roster/20">Schedule</a></li>


                                    <li><a href="#approve/20">Approve Timesheets</a></li>



                                    <li><a class="js-message" data-who="all" href="#newsfeed/create">Message All</a>
                                    </li>

                                    <li><a class="js-message" data-who="working" href="#">Message Working
                                            (27)</a></li>




                                </ul>
                            </div>


                        </td>
                    </tr>
                    <tr class="workplace-card m-location-hasSomebody">
                        <td>
                            <strong>Terminal 4</strong>
                            <span class="js-search" style="display:none;">HV6 Terminal 4 Heathrow Terminal 4,TW6 3XA,
                                London
                            </span>
                        </td>
                        <td class="text--small">
                            <a href="#map/17"><i class="fa fa-map-marker"></i> Heathrow Terminal 4,TW6 3XA, London
                            </a>
                        </td>

                        <td class="text--small __area">
                            <span>
                                DHL-Q-117(T4 Mitigation)-T/L, DHL-Q-117(T4 Mitigation)-Dri, DHL-Q-117(T4
                                Mitigation)-Op's, DHL-Q-143(APV Mit)- Dri, DHL-Q-143(APV Mit) - Op's

                                <a class="area-see-more">+391 more</a>

                            </span>
                        </td>

                        <td class="u-textRight">


                            <div class="btn-group">

                                <a class="btn btn-default" href="#location/17/edit">Edit Settings</a>
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>


                                <ul class="dropdown-menu dropdown-menu-right">


                                    <li><a href="#location/17/edit">Edit Settings</a></li>
                                    <li><a href="#map/17">View Details</a></li>
                                    <li><a class="js-bulk-copy" style="">Copy settings</a></li>



                                    <li><a href="#location/17/duplicate">Duplicate</a></li>





                                    <li><a href="#roster/17">Schedule</a></li>


                                    <li><a href="#approve/17">Approve Timesheets</a></li>



                                    <li><a class="js-message" data-who="all" href="#newsfeed/create">Message All</a>
                                    </li>

                                    <li><a class="js-message" data-who="working" href="#">Message Working
                                            (25)</a></li>




                                </ul>
                            </div>


                        </td>
                    </tr>
                    <tr class="workplace-card m-location-hasSomebody">
                        <td>
                            <strong>Terminal 5</strong>
                            <span class="js-search" style="display:none;">TER Terminal 5 Heathrow Terminal 5, TW6 2GA,
                                London
                            </span>
                        </td>
                        <td class="text--small">
                            <a href="#map/16"><i class="fa fa-map-marker"></i> Heathrow Terminal 5, TW6 2GA, London
                            </a>
                        </td>

                        <td class="text--small __area">
                            <span>
                                Contingency T5, DHL-Q-134(HHS-T5)-TL, DHL-Q-134(HHS-T5)-Op's, DHL-Q-134(HHS-T5)-Dri,
                                DHL-Q-145(T5 HOS MIT)-Op's

                                <a class="area-see-more">+318 more</a>

                            </span>
                        </td>

                        <td class="u-textRight">


                            <div class="btn-group">

                                <a class="btn btn-default" href="#location/16/edit">Edit Settings</a>
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>


                                <ul class="dropdown-menu dropdown-menu-right">


                                    <li><a href="#location/16/edit">Edit Settings</a></li>
                                    <li><a href="#map/16">View Details</a></li>
                                    <li><a class="js-bulk-copy" style="">Copy settings</a></li>



                                    <li><a href="#location/16/duplicate">Duplicate</a></li>





                                    <li><a href="#roster/16">Schedule</a></li>


                                    <li><a href="#approve/16">Approve Timesheets</a></li>



                                    <li><a class="js-message" data-who="all" href="#newsfeed/create">Message All</a>
                                    </li>

                                    <li><a class="js-message" data-who="working" href="#">Message Working
                                            (9)</a></li>




                                </ul>
                            </div>


                        </td>
                    </tr>
                    <tr class="workplace-card m-location-hasNobody">
                        <td>
                            <strong>The Mill Heathrow</strong>
                            <span class="js-search" style="display:none;">THE The Mill Heathrow Horton Road,
                                Staines-upon-Thames TW19 6BJ, United Kingdom
                            </span>
                        </td>
                        <td class="text--small">
                            <a href="#map/11"><i class="fa fa-map-marker"></i> Horton Road, Staines-upon-Thames TW19
                                6BJ, United Kingdom
                            </a>
                        </td>

                        <td class="text--small __area">
                            <span>


                            </span>
                        </td>

                        <td class="u-textRight">


                            <div class="btn-group">

                                <a class="btn btn-default" href="#location/11/edit">Edit Settings</a>
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>


                                <ul class="dropdown-menu dropdown-menu-right">


                                    <li><a href="#location/11/edit">Edit Settings</a></li>
                                    <li><a href="#map/11">View Details</a></li>
                                    <li><a class="js-bulk-copy" style="">Copy settings</a></li>



                                    <li><a href="#location/11/duplicate">Duplicate</a></li>





                                    <li><a href="#roster/11">Schedule</a></li>


                                    <li><a href="#approve/11">Approve Timesheets</a></li>



                                    <li><a class="js-message" data-who="all" href="#newsfeed/create">Message All</a>
                                    </li>




                                </ul>
                            </div>


                        </td>
                    </tr>
                    <tr class="workplace-card m-location-hasSomebody">
                        <td>
                            <strong>Vancouver International Airport</strong>
                            <span class="js-search" style="display:none;">VAN Vancouver International Airport 3211
                                Grant McConachie Way, Richmond, BC V7B 0A4, Canada
                            </span>
                        </td>
                        <td class="text--small">
                            <a href="#map/52"><i class="fa fa-map-marker"></i> 3211 Grant McConachie Way, Richmond, BC
                                V7B 0A4, Canada
                            </a>
                        </td>

                        <td class="text--small __area">
                            <span>
                                Field - Supervisor, IOC - Supervisor, IOC - Commander, IOC - Coordinator, IOC - Dispatch

                                <a class="area-see-more">+86 more</a>

                            </span>
                        </td>

                        <td class="u-textRight">


                            <div class="btn-group">

                                <a class="btn btn-default" href="#location/52/edit">Edit Settings</a>
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>


                                <ul class="dropdown-menu dropdown-menu-right">


                                    <li><a href="#location/52/edit">Edit Settings</a></li>
                                    <li><a href="#map/52">View Details</a></li>
                                    <li><a class="js-bulk-copy" style="">Copy settings</a></li>



                                    <li><a href="#location/52/duplicate">Duplicate</a></li>





                                    <li><a href="#roster/52">Schedule</a></li>


                                    <li><a href="#approve/52">Approve Timesheets</a></li>



                                    <li><a class="js-message" data-who="all" href="#newsfeed/create">Message All</a>
                                    </li>

                                    <li><a class="js-message" data-who="working" href="#">Message Working
                                            (55)</a></li>


                                    <li><a class="js-message" data-who="late" href="#">Message Late (1)</a>
                                    </li>



                                </ul>
                            </div>


                        </td>
                    </tr>
                    <tr class="workplace-card m-location-hasNobody">
                        <td>
                            <strong>Wilson James</strong>
                            <span class="js-search" style="display:none;">WIL Wilson James Terminal 3
                            </span>
                        </td>
                        <td class="text--small">
                            <a href="#map/56"><i class="fa fa-map-marker"></i> Terminal 3
                            </a>
                        </td>

                        <td class="text--small __area">
                            <span>
                                Wilson James

                            </span>
                        </td>

                        <td class="u-textRight">


                            <div class="btn-group">

                                <a class="btn btn-default" href="#location/56/edit">Edit Settings</a>
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>


                                <ul class="dropdown-menu dropdown-menu-right">


                                    <li><a href="#location/56/edit">Edit Settings</a></li>
                                    <li><a href="#map/56">View Details</a></li>
                                    <li><a class="js-bulk-copy" style="">Copy settings</a></li>



                                    <li><a href="#location/56/duplicate">Duplicate</a></li>





                                    <li><a href="#roster/56">Schedule</a></li>


                                    <li><a href="#approve/56">Approve Timesheets</a></li>



                                    <li><a class="js-message" data-who="all" href="#newsfeed/create">Message All</a>
                                    </li>




                                </ul>
                            </div>


                        </td>
                    </tr>
                    <tr class="workplace-card m-location-hasNobody">
                        <td>
                            <strong>YVR Coast MTE</strong>
                            <span class="js-search" style="display:none;">YVR YVR Coast MTE 3211 Grant McConachie Way,
                                Richmond, BC V7B 0A4, Canada
                            </span>
                        </td>
                        <td class="text--small">
                            <a href="#map/61"><i class="fa fa-map-marker"></i> 3211 Grant McConachie Way, Richmond, BC
                                V7B 0A4, Canada
                            </a>
                        </td>

                        <td class="text--small __area">
                            <span>
                                ADMIN - Assistance w/ Quoting, YVR22-11 Baghall Benches, YVR22-14 Breezeway Bollard
                                Repai, YVR22-17 Scale Servicing, YVR22-18 Baggage Cart Repair

                                <a class="area-see-more">+13 more</a>

                            </span>
                        </td>

                        <td class="u-textRight">


                            <div class="btn-group">

                                <a class="btn btn-default" href="#location/61/edit">Edit Settings</a>
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>


                                <ul class="dropdown-menu dropdown-menu-right">


                                    <li><a href="#location/61/edit">Edit Settings</a></li>
                                    <li><a href="#map/61">View Details</a></li>
                                    <li><a class="js-bulk-copy" style="">Copy settings</a></li>



                                    <li><a href="#location/61/duplicate">Duplicate</a></li>





                                    <li><a href="#roster/61">Schedule</a></li>


                                    <li><a href="#approve/61">Approve Timesheets</a></li>



                                    <li><a class="js-message" data-who="all" href="#newsfeed/create">Message All</a>
                                    </li>




                                </ul>
                            </div>


                        </td>
                    </tr>
                </tbody>
            </table>


            <div id="workplace-lane-table" class="workplace-lane-table" style="display: none;">
                <h3>Today’s Snapshot</h3>
                <table>
                    <thead>
                        <tr>
                            <th>No Schedules</th>
                            <th>Late</th>
                            <th>Pending Open Shifts</th>
                            <th>Upcoming</th>
                            <th>Working</th>
                            <th>Timesheet Pending</th>
                            <th>Timesheets Approved</th>
                        </tr>
                    </thead>
                    <tbody id="workplace-lanes">
                        <tr>
                            <td class="js-workplace-lane-no-schedules"></td>
                            <td class="js-workplace-lane-late"></td>
                            <td class="js-workplace-lane-open"></td>
                            <td class="js-workplace-lane-upcoming"></td>
                            <td class="js-workplace-lane-working">
                            </td>
                            <td class="js-workplace-lane-await-approval">
                            </td>
                            <td class="js-workplace-lane-all-approved"></td>
                        </tr>
                    </tbody>
                </table>

            </div>

            <div id="workplace-full-map" class="map-wrapper" style="display: none;"></div>
            <div class="m-emptyState padding js-noLocationResults" style="display: none;">
                <div class="m-emptyState-inner">
                    <div class="m-emptyState-image">
                        <img class="img-responsive lazyload"
                            data-src="https://d2sebmzxyyulvv.cloudfront.net/cffad1139f1dc662afee6e900cc5cfc8a312f59e/images/version3/emptyStates/locations.png">
                    </div>
                    <div class="m-emptyState-message">
                        <h3>No results found!</h3>
                        <p class="gray margin-none">Try checking your spelling, or try a different keyword.</p>
                    </div>
                </div>
            </div>
        </div>

        <div id="modal-duplicateLocation" class="modal modal--tiny">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close"><span
                                class="di-cross" aria-hidden="true"></span></button>
                        <h2 class="modal-title">Duplicate Location</h2>
                    </div>
                    <div class="modal-body">
                        <div class="padding">


                            <div class="form-group field padding-none">
                                <div class="m-relative margin-none">
                                    <label for="location-install-wide-config-time">New Location Name</label>
                                    <input type="text" class="form-control" name="dup-loc-name" id="dup-loc-name"
                                        maxlength="32" value="" placeholder="Enter name of the new location">
                                </div>
                            </div>


                            <div class="form-group field padding-none">
                                <div class="m-relative margin-none">
                                    <label for="location-install-wide-config-time">Address</label>
                                    <input type="text" class="form-control" name="dup-loc-address"
                                        id="dup-loc-address" value=""
                                        placeholder="Enter address of the new location">
                                </div>
                            </div>

                            <div class="padding-none">
                                <span class="toggle-label">Copy Employees</span>
                                <label class="toggle pull-right">
                                    <input class="js-location-dupemp-checkbox" type="checkbox" checked=""
                                        data-varname="emps">
                                    <div class="background"></div>
                                    <div class="toggler"></div>
                                </label>
                            </div>



                            <div class="padding-none">
                                <span class="toggle-label ">Copy Settings</span>
                                <label class="toggle pull-right">
                                    <input class="js-location-dupemp-checkbox" type="checkbox" checked=""
                                        data-varname="settings">
                                    <div class="background"></div>
                                    <div class="toggler"></div>
                                </label>
                            </div>


                            <div class="padding-none">
                                <span class="toggle-label ">Copy Payroll Connection</span>
                                <label class="toggle pull-right">
                                    <input class="js-location-dupemp-checkbox" type="checkbox" checked=""
                                        data-varname="payroll">
                                    <div class="background"></div>
                                    <div class="toggler"></div>
                                </label>
                            </div>

                            <div class="padding-none">
                                <span class="toggle-label ">Copy Shift Templates</span>
                                <label class="toggle pull-right">
                                    <input class="js-location-dupemp-checkbox" type="checkbox" checked=""
                                        data-varname="scheduletemplate">
                                    <div class="background"></div>
                                    <div class="toggler"></div>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-default" type="button" data-dismiss="modal">Cancel</button>
                        <button class="btn btn-primary js-do-dup" type="button" data-loading-text="Starting..."
                            id="modal-duplicateLocation-start-duplicate">Duplicate!</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="modal-archivedLocation" class="modal modal--tiny">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close btn btn-default" data-dismiss="modal"
                            aria-label="Close"><span class="di-cross" aria-hidden="true"></span></button>
                        <h2 class="modal-title">Archived Locations</h2>
                    </div>
                    <div class="modal-body">
                        <div class="padding">
                            <table class="table table-striped js-location-table">
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-default" type="button" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div data-vue-embed="locations-setup-modal"></div>
    </div>

</x-app-layout>
