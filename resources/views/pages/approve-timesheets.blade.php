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

                                                @foreach ([1, 2, 3, 4, 5, 4, 3, 1, 3, 3, 32, 32] as $item)
                                                    <a href="#"
                                                        class="list-group-item list-group-item-action p-3">
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
                                <h5 class="mb-3">Basic Pills</h5>
                                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                            href="#pills-home" role="tab" aria-controls="pills-home"
                                            aria-selected="true">TimeSheet</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                            href="#pills-profile" role="tab" aria-controls="pills-profile"
                                            aria-selected="false">History</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                            href="#pills-contact" role="tab" aria-controls="pills-contact"
                                            aria-selected="false">Comments</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                        aria-labelledby="pills-home-tab">

                                        <table class="table table-hover">

                                            <tbody>

                                                <tr>
                                                    <td class="ts-summary-sect-col-lbls">Date</td>
                                                    <td class="ts-summary-sect-col-data">
                                                        <div id="ts-summary-date"><span class="ts-summary-val">Tuesday,
                                                                20th June 2023</span></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="ts-summary-sect-col-lbls">Area</td>
                                                    <td class="ts-summary-sect-col-data">
                                                        <div id="ts-summary-dept"><span
                                                                class="ts-summary-val">Leave</span></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="ts-summary-sect-col-lbls">Time</td>
                                                    <td class="ts-summary-sect-col-data">
                                                        <div id="ts-summary-time"><span class="ts-summary-val">9:00 am
                                                                - 4:30 pm | 0 min</span></div>
                                                        <div id="leave-times-message-summary-teleport-placeholder">
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="ts-summary-sect-col-lbls">Break Summary</td>
                                                    <td class="ts-summary-sect-col-data">
                                                        <div id="ts-summary-break"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="ts-summary-sect-col-lbls">Break Details</td>
                                                    <td class="ts-summary-sect-col-data">
                                                        <div id="ts-detail-break"></div>
                                                    </td>
                                                </tr>

                                                <tr id="trTsSummaryAppraisal" style="display:none;">
                                                    <td class="ts-summary-sect-col-lbls">Appraisal</td>
                                                    <td class="ts-summary-sect-col-data">
                                                        <div>
                                                            <div id="pnlTsSummaryAppraisalNa">n/a</div>
                                                            <div id="pnlTsSummaryAppraisal"
                                                                class="appraisal-star-wrapper" style="display: none;">
                                                                <span class="appraisal-star"></span>
                                                                <span class="appraisal-star"></span>
                                                                <span class="appraisal-star"></span>
                                                                <span class="appraisal-star"></span>
                                                                <span class="appraisal-star"></span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr id="trTsSummaryAgreement" style="display:none;">
                                                    <td class="ts-summary-sect-col-lbls">Employment Term</td>
                                                    <td class="ts-summary-sect-col-data">
                                                        <div id="ts-summary-agreement"></div>
                                                    </td>
                                                </tr>
                                                <tr id="trTsSummaryLeaveRule" style="display: table-row;">
                                                    <td class="ts-summary-sect-col-lbls">Leave Condition</td>
                                                    <td class="ts-summary-sect-col-data">
                                                        <div id="ts-summary-leaverule"><span>Unpaid Leave -
                                                                Leave</span></div>
                                                    </td>
                                                </tr>
                                                <tr id="trTsSummaryBaseRule" style="">
                                                    <td class="ts-summary-sect-col-lbls">Pay Rates</td>
                                                    <td class="ts-summary-sect-col-data">
                                                        <div id="ts-summary-basepay"></div>
                                                    </td>
                                                </tr>
                                                <tr id="trTsSummaryLoadingShift" style="display:none;">
                                                    <td class="ts-summary-sect-col-lbls">&nbsp;</td>
                                                    <td class="ts-summary-sect-col-data">
                                                        <div id="ts-summary-dailyloading"></div>
                                                    </td>
                                                </tr>
                                                <tr id="trTsSummaryLoadingPeriod" style="display:none;">
                                                    <td class="ts-summary-sect-col-lbls">Period Loadings</td>
                                                    <td class="ts-summary-sect-col-data">
                                                        <div id="ts-summary-periodloading"></div>
                                                    </td>
                                                </tr>
                                                <tr id="ts-abp-indicator-container" style="display:none;">
                                                    <td class="ts-summary-sect-col-lbls">&nbsp;</td>
                                                    <td style="color: var(--co-text-secondary)"
                                                        id="ts-abp-indicator-value" class="ts-summary-sect-col-data">
                                                        ABP Applies</td>
                                                </tr>

                                                <tr id="trTsSummaryTimesheetComment">
                                                    <td class="ts-summary-sect-col-lbls">Time Sheet Comment</td>
                                                    <td class="ts-summary-sect-col-data">
                                                        <div id="ts-summary-timesheet-comment"></div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>

                                    </div>
                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                        aria-labelledby="pills-profile-tab">

                                        <table id="tblTimesheetHistory" class="table table-striped table-bordered"
                                            style="margin-bottom: 75px;">
                                            <thead>
                                                <tr>
                                                    <th style="width:120px;" class="header">
                                                        <div style="position:relative;">User<span
                                                                style="position:absolute; right:2px;"></span></div>
                                                    </th>
                                                    <th style="width:130px;" class="header">
                                                        <div style="position:relative;">Field<span
                                                                style="position:absolute; right:2px;"></span></div>
                                                    </th>
                                                    <th class="header">
                                                        <div style="position:relative;">Old value<span
                                                                style="position:absolute; right:2px;"></span></div>
                                                    </th>
                                                    <th class="header">
                                                        <div style="position:relative;">New value<span
                                                                style="position:absolute; right:2px;"></span></div>
                                                    </th>
                                                    <th style="width:140px;" class="header headerSortDown">
                                                        <div style="position:relative;">Date<span
                                                                style="position:absolute; right:2px;"></span></div>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody id="rptTimesheetHistory">
                                                <tr id="rptTimesheetHistory_15635008" class="even">
                                                    <td>Deputy</td>
                                                    <td>Leave Rule</td>
                                                    <td class="OldValue">




                                                    </td>
                                                    <td class="NewValue">



                                                        Unpaid Leave - Leave
                                                    </td>
                                                    <td>
                                                        <div>
                                                            Today at 12:00 AM
                                                            <input type="hidden" value="1687215610">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr id="rptTimesheetHistory_15635009" class="odd">
                                                    <td>Deputy</td>
                                                    <td>Pay Rule Approved</td>
                                                    <td class="OldValue">



                                                        No
                                                    </td>
                                                    <td class="NewValue">



                                                        Yes
                                                    </td>
                                                    <td>
                                                        <div>
                                                            Today at 12:00 AM
                                                            <input type="hidden" value="1687215610">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr id="rptTimesheetHistory_15635010" class="even">
                                                    <td>Deputy</td>
                                                    <td>Auto Pay Rule Approved</td>
                                                    <td class="OldValue">



                                                        No
                                                    </td>
                                                    <td class="NewValue">



                                                        Yes
                                                    </td>
                                                    <td>
                                                        <div>
                                                            Today at 12:00 AM
                                                            <input type="hidden" value="1687215610">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                    <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                        aria-labelledby="pills-contact-tab">

                                        <div class="comment">
                                            <div class="media align-items-start">
                                                <div class="chat-avtar flex-shrink-0">
                                                    <img class="rounded-circle img-fluid wid-40"
                                                        src="http://localhost:8080/assets/images/user/avatar-1.jpg"
                                                        alt="User image">
                                                    <div class="bg-success chat-badge"></div>
                                                </div>
                                                <div class="media-body ms-3">
                                                    <h5 class="mb-0">John Doe</h5>
                                                    <span class="text-sm text-muted">2 hour ago</span>
                                                </div>
                                            </div>
                                            <div class="comment-content">
                                                <p class="mb-2 mt-3">
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the
                                                    industry's standard dummy text ever since the 1500s, when an unknown
                                                    printer took a galley of type and
                                                    scrambled it to make a type specimen book.</p>
                                                <a href="#"
                                                    class="link-primary mb-1">https://phoenixcoded.net/</a>
                                            </div>
                                        </div>


                                    </div>
                                </div>


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
