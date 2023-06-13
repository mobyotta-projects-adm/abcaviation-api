<x-app-layout>
    <div id="container-home" class="container-pane container-home" style="display: block;">
        <div id="my-dashboard">
            <span data-vue-embed="me-my-week-left-panel-embed"></span>
            <div id="js-MyWeek-PopupShift" class="my-shift-widget padding text-center margin-compact is-unscheduled"
                style="">
                <div class="u-relative col-centered u-max-width-100">
                    <img class="avatar ls-is-cached lazyloaded"
                        data-src="https://ca697e16014645.uk.deputy.com/assets/php/image_preview.php/1902/200/200"
                        alt=""
                        src="https://ca697e16014645.uk.deputy.com/assets/php/image_preview.php/1902/200/200">
                    <div class="m-shiftStatus-indicator margin-none"></div>
                </div>
                <div>
                    <h4>Cherelle</h4>
                </div>
                <div class="margin-compact">
                    <div class="m-shiftStatus-details">
                        <div class="m-shiftStatus-status js-myWeek-popupshift-status-desc">Scheduled</div>
                        <div class="m-shiftStatus-scheduledTime js-myWeek-popupshift-scheduleTime margin-tiny"></div>
                        <div class="break-details-wrapper margin-tiny"></div>
                        <div class="m-shiftStatus-breakTime margin-tiny">
                            <i class="fa fa-pause mr5"></i>
                            <span class="m-shiftStatus-breakDuration js-myWeek-runningBreakDuration"></span>
                        </div>
                        <div class="m-shiftStatus-unscheduledMessage margin-tiny">No scheduled shifts</div>
                    </div>
                    <div class="m-shiftStatus-buttons">
                        <div class="m-shiftStatus-buttons--scheduled">
                            <div class="btn-group btn-flex clearfix u-hidden--tablet u-hidden--mobile">
                                <button class="btn btn-success js-myWeek-startShift" onclick="togleModal()" >Start
                                    Shift</button>
                                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown"
                                    aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                    <li>
                                        <a href="#" class="js-myWeek-Start-Unrostered">Start in Another
                                            Area</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="btn-group btn-flex clearfix u-hidden--desktop">
                                <button class="btn btn-success btn-sm js-myWeek-startShift" id="startShift" onclick="togleModal()"
                                    >Start Shift</button>
                                <button type="button" class="btn btn-success btn-sm dropdown-toggle"
                                    data-toggle="dropdown" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                    <li>
                                        <a href="#" class="js-myWeek-Start-Unrostered">Start in Another
                                            Area</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="m-shiftStatus-buttons--unscheduled">
                            <button class="btn btn-success js-myWeek-Start-Unrostered"  onclick="togleModal()" >Start
                                Shift</button>
                        </div>
                        <div class="m-shiftStatus-buttons--inProgress">
                            <div class="row">
                                <div class="col-xs-6 padding-none pr5">
                                    <button class="btn btn-break btn-wide js-myWeek-doBreak">Start Break</button>
                                </div>
                                <div class="col-xs-6 padding-none pl5">
                                    <button
                                        class="btn btn-danger btn-wide js-myWeek-endShift m-shiftStatus-endShiftBtn">End
                                        Shift</button>
                                </div>
                            </div>
                            <button
                                class="btn btn-text btn-wide margin-compact js-myWeek-updateShift m-shiftStatus-updateShiftBtn">Edit
                                shift</button>
                        </div>
                    </div>
                </div>
                <div class="my-shift-widget-footer">
                    <div class="margin-none"><small id="js-shift-info"></small></div>
                    <div class="margin-none"><small id="js-hour-info"></small></div>
                </div>
            </div>

            <div class="dashboard-content padding">
                <div data-vue-embed="me-welcome-section-embed"></div>
                <!-- card wrapper template -->
                <!-- no drop down card wrapper template -->
                <!-- card wrapper template -->
                <!-- card item template -->
                <!-- card item template -->
                <!-- card item template -->
                <!-- card item template -->
                <!-- card item template -->
                <!-- card item template -->
                <!-- card item template -->
                <!-- card item template -->
                <!-- card item template -->
                <!-- card item template -->
                <div id="my-dashboard-summary"
                    class="u-hidden--mobile margin-none u-relative js-my-ds-container my-ds-container">
                    <h3 class="margin-none">Dashboard </h3>
                    <div class="my-dashboard-summary">
                        <!--    to change Id name -->
                        <!-- Below is dummy data for demo purpose only -->
                        <div class="my-dashboard-column u-relative" style="z-index: 1;">
                            <div class="text--large u-bold">Needs Attention</div>
                            <div id="ds-need-attention" class="margin-none">
                                <div class="js-ds-need-attention-placeHolder ds-empty-holder text-center hide">
                                    <img class="ds-empty-img lazyload"
                                        data-src="https://d2sebmzxyyulvv.cloudfront.net/cffad1139f1dc662afee6e900cc5cfc8a312f59e/images/dashboard/needsattention.png"
                                        alt="">
                                    <div class="ds-empty-txt u-zindex-reset">
                                        <strong>Enjoy your Day!</strong>
                                        <p class="margin-none">There is nothing that needs your immediate attention.
                                        </p>
                                    </div>
                                </div>
                                <div class="m-myWidget-item">
                                    <a class="dashboard-card-wrapper js-dashboard-card-wrapper u-block hide"
                                        href="#roster" data-ds-url="deputec_this_week_no_schedule">
                                        <div class="dashboard-card js-dashboard-card"
                                            data-dp-analytics="waDashboardExpandCard-deputec_this_week_no_schedule">
                                            <strong class="js-dashboard-main-title">No Shifts</strong>
                                            <div class="margin-none"><small class="gray js-dashboard-sub-title">You
                                                    have no published shifts this week.</small>
                                            </div>
                                            <span class="feature-icon fa fa-clock-o"></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="m-myWidget-item">
                                    <div class="dashboard-card-wrapper js-dashboard-card-wrapper expended"
                                        data-ds-url="deputec_this_week_open_shifts">
                                        <div class="dashboard-card js-dashboard-card"
                                            data-dp-analytics="waDashboardExpandCard-deputec_this_week_open_shifts">
                                            <strong class="js-dashboard-main-title">33 Unfilled Open Shifts</strong>
                                            <div class="margin-none">
                                                <small class="co-text-secondary js-dashboard-sub-title">3 Today 5
                                                    Tomorrow</small>
                                            </div>
                                            <i class="di-down-5"></i>
                                            <span class="fa fa-clock-o feature-icon"></span>
                                        </div>
                                        <ul class="dashboard-card-list js-dashboard-card-list margin-none">
                                            <li class="dc-list-item av-left js-open-shift-item">
                                                <a href="#roster/record/507752"
                                                    data-dp-analytics="waDashboardClickCard-js-open-shift-item">
                                                    <div class="avatar"><span class="di-user"></span></div>
                                                    <div class="dc-list-content margin-none">
                                                        <div class="margin-none"><strong>Today, 12 Jun</strong></div>
                                                        <div class="margin-none"><small class="gray">1:00 pm -
                                                                9:00 pm @ Standy By - Driver's</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-open-shift-item">
                                                <a href="#roster/record/507755"
                                                    data-dp-analytics="waDashboardClickCard-js-open-shift-item">
                                                    <div class="avatar"><span class="di-user"></span></div>
                                                    <div class="dc-list-content margin-none">
                                                        <div class="margin-none"><strong>Today, 12 Jun</strong></div>
                                                        <div class="margin-none"><small class="gray">1:00 pm -
                                                                9:00 pm @ Standy By - Driver's</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-open-shift-item">
                                                <a href="#roster/record/507715"
                                                    data-dp-analytics="waDashboardClickCard-js-open-shift-item">
                                                    <div class="avatar"><span class="di-user"></span></div>
                                                    <div class="dc-list-content margin-none">
                                                        <div class="margin-none"><strong>Today, 12 Jun</strong></div>
                                                        <div class="margin-none"><small class="gray">7:00 am -
                                                                7:00 pm @ Baggage ($24)</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-open-shift-item">
                                                <a href="#roster/record/507762"
                                                    data-dp-analytics="waDashboardClickCard-js-open-shift-item">
                                                    <div class="avatar"><span class="di-user"></span></div>
                                                    <div class="dc-list-content margin-none">
                                                        <div class="margin-none"><strong>Tomorrow, 13 Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">5:00 am -
                                                                1:00 pm @ Standy By - Driver's</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-open-shift-item">
                                                <a href="#roster/record/507763"
                                                    data-dp-analytics="waDashboardClickCard-js-open-shift-item">
                                                    <div class="avatar"><span class="di-user"></span></div>
                                                    <div class="dc-list-content margin-none">
                                                        <div class="margin-none"><strong>Tomorrow, 13 Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">5:00 am -
                                                                1:00 pm @ Standy By - Driver's</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-open-shift-item">
                                                <a href="#roster/record/507981"
                                                    data-dp-analytics="waDashboardClickCard-js-open-shift-item">
                                                    <div class="avatar"><span class="di-user"></span></div>
                                                    <div class="dc-list-content margin-none">
                                                        <div class="margin-none"><strong>Tomorrow, 13 Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">12:00 am -
                                                                8:00 am @ Security Escort - Silver</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-open-shift-item">
                                                <a href="#roster/record/507765"
                                                    data-dp-analytics="waDashboardClickCard-js-open-shift-item">
                                                    <div class="avatar"><span class="di-user"></span></div>
                                                    <div class="dc-list-content margin-none">
                                                        <div class="margin-none"><strong>Tomorrow, 13 Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">1:00 pm -
                                                                9:00 pm @ Standy By - Driver's</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-open-shift-item">
                                                <a href="#roster/record/507716"
                                                    data-dp-analytics="waDashboardClickCard-js-open-shift-item">
                                                    <div class="avatar"><span class="di-user"></span></div>
                                                    <div class="dc-list-content margin-none">
                                                        <div class="margin-none"><strong>Tomorrow, 13 Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">7:00 am -
                                                                7:00 pm @ Baggage ($24)</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-open-shift-item">
                                                <a href="#roster/record/507772"
                                                    data-dp-analytics="waDashboardClickCard-js-open-shift-item">
                                                    <div class="avatar"><span class="di-user"></span></div>
                                                    <div class="dc-list-content margin-none">
                                                        <div class="margin-none"><strong>Wed, 14 Jun</strong></div>
                                                        <div class="margin-none"><small class="gray">5:00 am -
                                                                1:00 pm @ Standy By - Driver's</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-open-shift-item">
                                                <a href="#roster/record/507979"
                                                    data-dp-analytics="waDashboardClickCard-js-open-shift-item">
                                                    <div class="avatar"><span class="di-user"></span></div>
                                                    <div class="dc-list-content margin-none">
                                                        <div class="margin-none"><strong>Wed, 14 Jun</strong></div>
                                                        <div class="margin-none"><small class="gray">12:00 am -
                                                                8:00 am @ Security Escort - Static</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-open-shift-item">
                                                <a href="#roster/record/507982"
                                                    data-dp-analytics="waDashboardClickCard-js-open-shift-item">
                                                    <div class="avatar"><span class="di-user"></span></div>
                                                    <div class="dc-list-content margin-none">
                                                        <div class="margin-none"><strong>Wed, 14 Jun</strong></div>
                                                        <div class="margin-none"><small class="gray">12:00 am -
                                                                8:00 am @ Security Escort - Silver</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-open-shift-item">
                                                <a href="#roster/record/507991"
                                                    data-dp-analytics="waDashboardClickCard-js-open-shift-item">
                                                    <div class="avatar"><span class="di-user"></span></div>
                                                    <div class="dc-list-content margin-none">
                                                        <div class="margin-none"><strong>Wed, 14 Jun</strong></div>
                                                        <div class="margin-none"><small class="gray">12:00 am -
                                                                8:00 am @ Static Escort ($24)</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-open-shift-item">
                                                <a href="#roster/record/507784"
                                                    data-dp-analytics="waDashboardClickCard-js-open-shift-item">
                                                    <div class="avatar"><span class="di-user"></span></div>
                                                    <div class="dc-list-content margin-none">
                                                        <div class="margin-none"><strong>Wed, 14 Jun</strong></div>
                                                        <div class="margin-none"><small class="gray">1:00 pm -
                                                                9:00 pm @ Standy By - Driver's</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-open-shift-item">
                                                <a href="#roster/record/507717"
                                                    data-dp-analytics="waDashboardClickCard-js-open-shift-item">
                                                    <div class="avatar"><span class="di-user"></span></div>
                                                    <div class="dc-list-content margin-none">
                                                        <div class="margin-none"><strong>Wed, 14 Jun</strong></div>
                                                        <div class="margin-none"><small class="gray">7:00 am -
                                                                7:00 pm @ Baggage ($24)</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-open-shift-item">
                                                <a href="#roster/record/500032"
                                                    data-dp-analytics="waDashboardClickCard-js-open-shift-item">
                                                    <div class="avatar"><span class="di-user"></span></div>
                                                    <div class="dc-list-content margin-none">
                                                        <div class="margin-none"><strong>Wed, 14 Jun</strong></div>
                                                        <div class="margin-none"><small class="gray">2:30 pm -
                                                                11:00 pm @ Carts - Operative</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-open-shift-item">
                                                <a href="#roster/record/500714"
                                                    data-dp-analytics="waDashboardClickCard-js-open-shift-item">
                                                    <div class="avatar"><span class="di-user"></span></div>
                                                    <div class="dc-list-content margin-none">
                                                        <div class="margin-none"><strong>Wed, 14 Jun</strong></div>
                                                        <div class="margin-none"><small class="gray">3:00 pm -
                                                                12:00 am @ Carousel management - INT</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-open-shift-item">
                                                <a href="#roster/record/507719"
                                                    data-dp-analytics="waDashboardClickCard-js-open-shift-item">
                                                    <div class="avatar"><span class="di-user"></span></div>
                                                    <div class="dc-list-content margin-none">
                                                        <div class="margin-none"><strong>Thu, 15 Jun</strong></div>
                                                        <div class="margin-none"><small class="gray">7:00 am -
                                                                7:00 pm @ Baggage ($24)</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-open-shift-item">
                                                <a href="#roster/record/507808"
                                                    data-dp-analytics="waDashboardClickCard-js-open-shift-item">
                                                    <div class="avatar"><span class="di-user"></span></div>
                                                    <div class="dc-list-content margin-none">
                                                        <div class="margin-none"><strong>Fri, 16 Jun</strong></div>
                                                        <div class="margin-none"><small class="gray">1:00 pm -
                                                                9:00 pm @ Standy By - Driver's</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-open-shift-item">
                                                <a href="#roster/record/507811"
                                                    data-dp-analytics="waDashboardClickCard-js-open-shift-item">
                                                    <div class="avatar"><span class="di-user"></span></div>
                                                    <div class="dc-list-content margin-none">
                                                        <div class="margin-none"><strong>Fri, 16 Jun</strong></div>
                                                        <div class="margin-none"><small class="gray">1:00 pm -
                                                                9:00 pm @ Standy By - Driver's</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-open-shift-item">
                                                <a href="#roster/record/500461"
                                                    data-dp-analytics="waDashboardClickCard-js-open-shift-item">
                                                    <div class="avatar"><span class="di-user"></span></div>
                                                    <div class="dc-list-content margin-none">
                                                        <div class="margin-none"><strong>Fri, 16 Jun</strong></div>
                                                        <div class="margin-none"><small class="gray">7:00 am -
                                                                3:30 pm @ Dynamix (Floor) - Operative</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-open-shift-item">
                                                <a href="#roster/record/507718"
                                                    data-dp-analytics="waDashboardClickCard-js-open-shift-item">
                                                    <div class="avatar"><span class="di-user"></span></div>
                                                    <div class="dc-list-content margin-none">
                                                        <div class="margin-none"><strong>Fri, 16 Jun</strong></div>
                                                        <div class="margin-none"><small class="gray">7:00 am -
                                                                7:00 pm @ Baggage ($24)</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-open-shift-item">
                                                <a href="#roster/record/507925"
                                                    data-dp-analytics="waDashboardClickCard-js-open-shift-item">
                                                    <div class="avatar"><span class="di-user"></span></div>
                                                    <div class="dc-list-content margin-none">
                                                        <div class="margin-none"><strong>Fri, 16 Jun</strong></div>
                                                        <div class="margin-none"><small class="gray">7:45 am -
                                                                12:15 pm @ Security Escort - Silver</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-open-shift-item">
                                                <a href="#roster/record/507814"
                                                    data-dp-analytics="waDashboardClickCard-js-open-shift-item">
                                                    <div class="avatar"><span class="di-user"></span></div>
                                                    <div class="dc-list-content margin-none">
                                                        <div class="margin-none"><strong>Sat, 17 Jun</strong></div>
                                                        <div class="margin-none"><small class="gray">5:00 am -
                                                                1:00 pm @ Standy By - Driver's</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-open-shift-item">
                                                <a href="#roster/record/507815"
                                                    data-dp-analytics="waDashboardClickCard-js-open-shift-item">
                                                    <div class="avatar"><span class="di-user"></span></div>
                                                    <div class="dc-list-content margin-none">
                                                        <div class="margin-none"><strong>Sat, 17 Jun</strong></div>
                                                        <div class="margin-none"><small class="gray">5:00 am -
                                                                1:00 pm @ Standy By - Driver's</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-open-shift-item">
                                                <a href="#roster/record/507821"
                                                    data-dp-analytics="waDashboardClickCard-js-open-shift-item">
                                                    <div class="avatar"><span class="di-user"></span></div>
                                                    <div class="dc-list-content margin-none">
                                                        <div class="margin-none"><strong>Sat, 17 Jun</strong></div>
                                                        <div class="margin-none"><small class="gray">1:00 pm -
                                                                9:00 pm @ Standy By - Driver's</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-open-shift-item">
                                                <a href="#roster/record/507825"
                                                    data-dp-analytics="waDashboardClickCard-js-open-shift-item">
                                                    <div class="avatar"><span class="di-user"></span></div>
                                                    <div class="dc-list-content margin-none">
                                                        <div class="margin-none"><strong>Sat, 17 Jun</strong></div>
                                                        <div class="margin-none"><small class="gray">1:00 pm -
                                                                9:00 pm @ Standy By - Driver's</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-open-shift-item">
                                                <a href="#roster/record/507720"
                                                    data-dp-analytics="waDashboardClickCard-js-open-shift-item">
                                                    <div class="avatar"><span class="di-user"></span></div>
                                                    <div class="dc-list-content margin-none">
                                                        <div class="margin-none"><strong>Sat, 17 Jun</strong></div>
                                                        <div class="margin-none"><small class="gray">7:00 am -
                                                                7:00 pm @ Baggage ($24)</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-open-shift-item">
                                                <a href="#roster/record/507834"
                                                    data-dp-analytics="waDashboardClickCard-js-open-shift-item">
                                                    <div class="avatar"><span class="di-user"></span></div>
                                                    <div class="dc-list-content margin-none">
                                                        <div class="margin-none"><strong>Sun, 18 Jun</strong></div>
                                                        <div class="margin-none"><small class="gray">5:00 am -
                                                                1:00 pm @ Standy By - Driver's</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-open-shift-item">
                                                <a href="#roster/record/507835"
                                                    data-dp-analytics="waDashboardClickCard-js-open-shift-item">
                                                    <div class="avatar"><span class="di-user"></span></div>
                                                    <div class="dc-list-content margin-none">
                                                        <div class="margin-none"><strong>Sun, 18 Jun</strong></div>
                                                        <div class="margin-none"><small class="gray">1:00 pm -
                                                                9:00 pm @ Standy By - Driver's</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-open-shift-item">
                                                <a href="#roster/record/507836"
                                                    data-dp-analytics="waDashboardClickCard-js-open-shift-item">
                                                    <div class="avatar"><span class="di-user"></span></div>
                                                    <div class="dc-list-content margin-none">
                                                        <div class="margin-none"><strong>Sun, 18 Jun</strong></div>
                                                        <div class="margin-none"><small class="gray">1:00 pm -
                                                                9:00 pm @ Standy By - Driver's</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-open-shift-item">
                                                <a href="#roster/record/500757"
                                                    data-dp-analytics="waDashboardClickCard-js-open-shift-item">
                                                    <div class="avatar"><span class="di-user"></span></div>
                                                    <div class="dc-list-content margin-none">
                                                        <div class="margin-none"><strong>Sun, 18 Jun</strong></div>
                                                        <div class="margin-none"><small class="gray">6:00 am -
                                                                2:30 pm @ Carts - Operative</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-open-shift-item">
                                                <a href="#roster/record/507721"
                                                    data-dp-analytics="waDashboardClickCard-js-open-shift-item">
                                                    <div class="avatar"><span class="di-user"></span></div>
                                                    <div class="dc-list-content margin-none">
                                                        <div class="margin-none"><strong>Sun, 18 Jun</strong></div>
                                                        <div class="margin-none"><small class="gray">7:00 am -
                                                                7:00 pm @ Baggage ($24)</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-open-shift-item">
                                                <a href="#roster/record/500712"
                                                    data-dp-analytics="waDashboardClickCard-js-open-shift-item">
                                                    <div class="avatar"><span class="di-user"></span></div>
                                                    <div class="dc-list-content margin-none">
                                                        <div class="margin-none"><strong>Sun, 18 Jun</strong></div>
                                                        <div class="margin-none"><small class="gray">3:00 pm -
                                                                12:00 am @ Carousel management - INT</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="m-myWidget-item">
                                    <div class="dashboard-card-wrapper js-dashboard-card-wrapper hide"
                                        data-ds-url="deputec_ts_wk_unconfir_shift">
                                        <div class="dashboard-card js-dashboard-card"
                                            data-dp-analytics="waDashboardExpandCard-deputec_ts_wk_unconfir_shift">
                                            <strong class="js-dashboard-main-title">0 Unconfirmed Shifts</strong>
                                            <div class="margin-none">
                                                <small class="co-text-secondary js-dashboard-sub-title"></small>
                                            </div>
                                            <i class="di-down-5"></i>
                                            <span class="di-warning feature-icon"></span>
                                        </div>
                                        <ul class="dashboard-card-list js-dashboard-card-list margin-none"></ul>
                                    </div>
                                </div>
                                <div class="m-myWidget-item">
                                    <div class="dashboard-card-wrapper js-dashboard-card-wrapper expended"
                                        data-ds-url="deputec_ts_wk_unpublish_shift">
                                        <div class="dashboard-card js-dashboard-card"
                                            data-dp-analytics="waDashboardExpandCard-deputec_ts_wk_unpublish_shift">
                                            <strong class="js-dashboard-main-title">19 Unpublished Shifts</strong>
                                            <div class="margin-none">
                                                <small class="co-text-secondary js-dashboard-sub-title"></small>
                                            </div>
                                            <i class="di-down-5"></i>
                                            <span class="di-publish feature-icon"></span>
                                        </div>
                                        <ul class="dashboard-card-list js-dashboard-card-list margin-none">
                                            <li class="dc-list-item av-left js-unpublished-item">
                                                <a href="#roster/record/502124"
                                                    data-dp-analytics="waDashboardClickCard-js-unpublished-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_2244b1680c62b0af4e3a17a34b561788.jpg?Expires=1686638355&amp;Signature=bZiBA56myaUl~rjkX7BA7zUoyLjYvcCNQh-ooRUhoOJtIFeaByd9QvmeubcXW1cQU58eZm25mjvSzmOepXhkl0Wgfu7i8Ch~Y2LVgelS-WcltS8dWMhfwIjzjvD4QrnSQav889WW4JbdNeevEJeZ6ZYBTesYMHwYesDj-XDiZ3w_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>ROSARIO
                                                            MASCARENHAS</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Thu, 15
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">5:00 am -
                                                                1:30 pm @ DHL-Q-117(T4 Mitigation)-Op's</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-unpublished-item">
                                                <a href="#roster/record/498546"
                                                    data-dp-analytics="waDashboardClickCard-js-unpublished-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=K+B&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>KARAM SINGH
                                                            BAINS</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Thu, 15
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">5:00 am -
                                                                1:30 pm @ DHL-Q-134(HHS)-Dri</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-unpublished-item">
                                                <a href="#roster/record/502119"
                                                    data-dp-analytics="waDashboardClickCard-js-unpublished-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_64f21c41636c6ec53a20152d0a54f18b.jpg?Expires=1686638355&amp;Signature=Gz71my-9dK-Uwtaxj3nMzcNUCWLmGbRh3rLDP~tMySdUoRwI5SiO~Ymav00yG1JKjvy2Hnb8RDsdpHo6JUpllkp6uX4xvExyh-r~OCHgeMuvsPQHSw-ySCM18wMGX8FZbP-joTQxXAM0LT0XRInss8JUwaaek-VRoU4i8YpNAew_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>JASWANT
                                                            CHEEMA</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Thu, 15
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">5:00 am -
                                                                1:30 pm @ DHL-Q-117(T4 Mitigation)-Dri</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-unpublished-item">
                                                <a href="#roster/record/498550"
                                                    data-dp-analytics="waDashboardClickCard-js-unpublished-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_4f3997d19a984844b13b893631e21735.jpg?Expires=1686643423&amp;Signature=RWRBNMiJWVCVeQLcxOEhI85sSb3rY4~6LyzuUUt1wXVuCqa7VuW1v1ta57SnKmZWEfoRW6gbvwJrWWt1ws49miJy~foLOwxPT1zFtdqTwPGf3aGuPv7yPeTMfFCCsfgLiq-AhrTfdmMOLzsDeVeb9dkc97VOOe2TrWL~lWrowf0_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>CLATON
                                                            MIRANDA</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Thu, 15
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">5:00 am -
                                                                1:30 pm @ DHL-Q-134(HHS)-Op's</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-unpublished-item">
                                                <a href="#roster/record/498554"
                                                    data-dp-analytics="waDashboardClickCard-js-unpublished-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_4d15ef095252121766ed982885feb474.jpg?Expires=1686616379&amp;Signature=hkYepbQqCylHte9Q81w4G0dTLlH0uDzut7T4cOuYfsUbe7ynBdvUzan7rZr0TE~M4rsEszPiqvb2rVSfGUOzZ8MLvIdbBD7Tj3o5kifMZH4M7BblepWJL~bo4d75i3oXfHVjkJkhQt0SWgyJeeYh46-M6aBP1J2djMp2a2TeJ~w_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>SETH
                                                            BOATENG</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Thu, 15
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">5:00 am -
                                                                1:30 pm @ Contingency T2 -T/L</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-unpublished-item">
                                                <a href="#roster/record/498545"
                                                    data-dp-analytics="waDashboardClickCard-js-unpublished-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_431146b842bd6d0eabd8b2bdbb4f0c1f.jpg?Expires=1686638355&amp;Signature=f7PPm3sLj-OdvpNaeehCd1cI1nfi6c6ZhunbyLV~fgJR-z7jKR80CqdWnPfAri1uUnN8U00RiMj~smk9DmJBo-VYv5ivW79S-vKxEddqNV22OaY1MzqHnWL8UZKeueZlA1kP1bRzkDXJCynvZbYGGfCbwJWFFeM~LpA7sKmF2FA_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>ERINEU G
                                                            RODRIGUES</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Thu, 15
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">5:00 am -
                                                                1:30 pm @ DHL-Q-134(HHS)-Dri</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-unpublished-item">
                                                <a href="#roster/record/498555"
                                                    data-dp-analytics="waDashboardClickCard-js-unpublished-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=E+F&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Estevam
                                                            Fernandes</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Thu, 15
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">5:00 am -
                                                                1:30 pm @ Contingency T2 - DRI</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-unpublished-item">
                                                <a href="#roster/record/498589"
                                                    data-dp-analytics="waDashboardClickCard-js-unpublished-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=K+B&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>KARAM SINGH
                                                            BAINS</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Fri, 16
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">5:00 am -
                                                                1:30 pm @ DHL-Q-134(HHS)-Dri</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-unpublished-item">
                                                <a href="#roster/record/498590"
                                                    data-dp-analytics="waDashboardClickCard-js-unpublished-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_431146b842bd6d0eabd8b2bdbb4f0c1f.jpg?Expires=1686638355&amp;Signature=f7PPm3sLj-OdvpNaeehCd1cI1nfi6c6ZhunbyLV~fgJR-z7jKR80CqdWnPfAri1uUnN8U00RiMj~smk9DmJBo-VYv5ivW79S-vKxEddqNV22OaY1MzqHnWL8UZKeueZlA1kP1bRzkDXJCynvZbYGGfCbwJWFFeM~LpA7sKmF2FA_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>ERINEU G
                                                            RODRIGUES</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Fri, 16
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">5:00 am -
                                                                1:30 pm @ DHL-Q-134(HHS)-Dri</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-unpublished-item">
                                                <a href="#roster/record/498680"
                                                    data-dp-analytics="waDashboardClickCard-js-unpublished-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_a630b30337043fe28383bb80ee0053f7.jpg?Expires=1686638355&amp;Signature=IGiA~p~TjykmoWRGCCOWb02HALpThRAjfbOl70AQ7XawGZiT8l26ZdVhNJxAhbCB~htYTZGHBayTfLAesHHjC~PILvq0C6pjgfixl9YgSJ6zQYAhVRkiC7KVn~e0LpBpQ~EHaIsMQ7GuSTqdrvEBB3U6t4cMfR6z-9qNhXPTsig_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>BOBBY
                                                            AZAVEDO</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Sat, 17
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">1:00 pm -
                                                                9:00 pm @ Contingency T2 -T/L</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-unpublished-item">
                                                <a href="#roster/record/502374"
                                                    data-dp-analytics="waDashboardClickCard-js-unpublished-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_0312bd01ed8c725a7b9bd1e0ca0b0275.jpg?Expires=1686635548&amp;Signature=cG0ssqhIKMPiQWo~nSX8~iZuMB7jB-FB4hjnqjXImyBSXs0F0n236gz4beTKOF8o1Xl72HO-cVwcBrRKXzN~~6xMECGjGVovAAEoICtphADTPwhC608Oa3MenK-rWwWhG-7eHTDOTrCpdCWk8tOCtFPtncYfv340L7xcWKF3h94_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Salim Murad
                                                            Bhayani</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Sat, 17
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">1:00 pm -
                                                                10:00 pm @ DHL-Q-117(T4 Mitigation)-Dri</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-unpublished-item">
                                                <a href="#roster/record/498691"
                                                    data-dp-analytics="waDashboardClickCard-js-unpublished-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_56c737199b23d7f4d653ba3d0e6a47d5.jpg?Expires=1686641907&amp;Signature=U7c8JCKEH3byR7G6pZ4q5DtmmCuQMKtIl8YpqvLLin26xseHwz1ttzGpPhhoMkkw66ARjElrmqLDB6by4T2lBeffUdUqp3ucluQxRpRr8PQUwk-RfATMMf7ZSQzcoe9CQbGB7xL5Jqf7He1xIpM8I~V-Yb6hJJ9ZnCXFfBklcY8_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Quintin
                                                            Layne</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Sat, 17
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">1:00 pm -
                                                                9:00 pm @ DHL-Q-134(HHS)-Dri</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-unpublished-item">
                                                <a href="#roster/record/502463"
                                                    data-dp-analytics="waDashboardClickCard-js-unpublished-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_af4d093dd679cf0362b61f424bb406cc.jpg?Expires=1686640755&amp;Signature=IsVijUhnIUJhdidtHOZDzPJn2HdkeqeFIM2oq2WLYfe2ARf7-hJiz9mN6gvKOaKP3DkQPq2Xn2RkHICfztL3tIKnStO2YUJAeKKJb4SsoZU3uXc8ndWEF5v9WJobht76epU5sNM5AZu4nHtkX3nvJBBr7KEFpjoZyWCR8o0oWzk_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>MICHAEL
                                                            FALEIRO</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Sun, 18
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">5:00 am -
                                                                1:00 pm @ DHL-Q-117(T4 Mitigation)-Dri</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-unpublished-item">
                                                <a href="#roster/record/502461"
                                                    data-dp-analytics="waDashboardClickCard-js-unpublished-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_4d3950932a4d7cfde778084399f02cb9.jpg?Expires=1686642455&amp;Signature=SEapOx1PKeyGbOH9hKYJSKWIiKI8VyYn3sb-XMfO-byzoAIE-GL8-kuIPrztlOFW6a-n6idThNbDBcgK~R~2sjpHYijTK3t40HMOFGEYLUqhRVQD0uh9COZ9znOHtBN-eNLy6qOActRxD097yyIFRLpj1boeDpJMrJveEI30VAU_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>MASILLA FRANCIS
                                                            MARIADASAN ANTHONIPILLAI</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Sun, 18
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">6:00 am -
                                                                1:30 pm @ DHL-Q-117(T4 Mitigation)-Dri</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-unpublished-item">
                                                <a href="#roster/record/498740"
                                                    data-dp-analytics="waDashboardClickCard-js-unpublished-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_dce14b72db385d31ed4877d353f94fa2.jpg?Expires=1686654893&amp;Signature=ckAxLF3m84~-9X8Sb0IrEY1C~wOHx0bmlHYBoiyW~xprEln48rmR-ASwu~7jGuQ8CBl2jsAkDFQcQQ0nTsFmymLf5VooserI3y0xYRuXUEDZjODSkGdxWFzkwuzSmwgKR6qaeaVEKPcm3n27nW~d9UPOVDZiySCKKMD1BQtaKMA_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>SUNNY
                                                            DINIZ</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Sun, 18
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">1:30 pm -
                                                                9:00 pm @ Contingency T2 -T/L</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-unpublished-item">
                                                <a href="#roster/record/507790"
                                                    data-dp-analytics="waDashboardClickCard-js-unpublished-item">
                                                    <div class="avatar"><span class="di-user"></span></div>
                                                    <div class="dc-list-content margin-none">
                                                        <strong></strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Thu, 15
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">5:00 am -
                                                                1:00 pm @ Standy By - Driver's</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-unpublished-item">
                                                <a href="#roster/record/507796"
                                                    data-dp-analytics="waDashboardClickCard-js-unpublished-item">
                                                    <div class="avatar"><span class="di-user"></span></div>
                                                    <div class="dc-list-content margin-none">
                                                        <strong></strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Thu, 15
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">1:30 pm -
                                                                9:00 pm @ Standy By - Driver's</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-unpublished-item">
                                                <a href="#roster/record/507805"
                                                    data-dp-analytics="waDashboardClickCard-js-unpublished-item">
                                                    <div class="avatar"><span class="di-user"></span></div>
                                                    <div class="dc-list-content margin-none">
                                                        <strong></strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Fri, 16
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">5:00 am -
                                                                1:00 pm @ Standy By - Driver's</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-unpublished-item">
                                                <a href="#roster/record/507828"
                                                    data-dp-analytics="waDashboardClickCard-js-unpublished-item">
                                                    <div class="avatar"><span class="di-user"></span></div>
                                                    <div class="dc-list-content margin-none">
                                                        <strong></strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Sun, 18
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">5:00 am -
                                                                1:00 pm @ Standy By - Driver's</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="m-myWidget-item">
                                    <div class="dashboard-card-wrapper js-dashboard-card-wrapper hide"
                                        data-ds-url="deputec_this_week_shift_offers">
                                        <div class="dashboard-card js-dashboard-card"
                                            data-dp-analytics="waDashboardExpandCard-deputec_this_week_shift_offers">
                                            <strong class="js-dashboard-main-title">0 Offer Shifts</strong>
                                            <div class="margin-none">
                                                <small class="co-text-secondary js-dashboard-sub-title"></small>
                                            </div>
                                            <i class="di-down-5"></i>
                                            <span class="di-paperplane feature-icon"></span>
                                        </div>
                                        <ul class="dashboard-card-list js-dashboard-card-list margin-none"></ul>
                                    </div>
                                </div>
                                <div class="m-myWidget-item">
                                    <div class="dashboard-card-wrapper js-dashboard-card-wrapper hide"
                                        data-ds-url="deputec_ts_wk_task">
                                        <div class="dashboard-card js-dashboard-card"
                                            data-dp-analytics="waDashboardExpandCard-deputec_ts_wk_task">
                                            <strong class="js-dashboard-main-title">0 Incomplete Tasks</strong>
                                            <div class="margin-none">
                                                <small class="co-text-secondary js-dashboard-sub-title"></small>
                                            </div>
                                            <i class="di-down-5"></i>
                                            <span class="fa fa-clipboard feature-icon"></span>
                                        </div>
                                        <ul class="dashboard-card-list js-dashboard-card-list margin-none"></ul>
                                    </div>
                                </div>
                                <div class="m-myWidget-item">
                                    <div class="dashboard-card-wrapper js-dashboard-card-wrapper expended"
                                        data-ds-url="deputec_this_week_unavailability">
                                        <div class="dashboard-card js-dashboard-card"
                                            data-dp-analytics="waDashboardExpandCard-deputec_this_week_unavailability">
                                            <strong class="js-dashboard-main-title">50+ Unavailabilities</strong>
                                            <div class="margin-none">
                                                <small class="co-text-secondary js-dashboard-sub-title">47 Today
                                                </small>
                                            </div>
                                            <i class="di-down-5"></i>
                                            <span class="di-blocked feature-icon"></span>
                                        </div>
                                        <ul class="dashboard-card-list js-dashboard-card-list margin-none">
                                            <li class="dc-list-item av-left js-unavailability-item">
                                                <a href="#team/1991"
                                                    data-dp-analytics="waDashboardClickCard-js-unavailability-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=S+S&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Sebastiao
                                                            Souza</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Wed, 24
                                                                May</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray"> </small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-unavailability-item">
                                                <a href="#team/2038"
                                                    data-dp-analytics="waDashboardClickCard-js-unavailability-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=E+A&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Eshan
                                                            Ahluwalia</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Sat, 10
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray"> </small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-unavailability-item">
                                                <a href="#team/1987"
                                                    data-dp-analytics="waDashboardClickCard-js-unavailability-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=M+D&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Mihael
                                                            Djurdjevic</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Sun, 11
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray"> </small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-unavailability-item">
                                                <a href="#team/1988"
                                                    data-dp-analytics="waDashboardClickCard-js-unavailability-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=S+S&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Sonu S</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Sun, 11
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray"> </small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-unavailability-item">
                                                <a href="#team/1668"
                                                    data-dp-analytics="waDashboardClickCard-js-unavailability-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=B+R&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Brenda
                                                            Rego</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Today, 12
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray"> </small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-unavailability-item">
                                                <a href="#team/1854"
                                                    data-dp-analytics="waDashboardClickCard-js-unavailability-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=M+B&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Mirlind
                                                            Bikliqi</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Today, 12
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray"> Repeat
                                                                Weekly</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-unavailability-item">
                                                <a href="#team/1865"
                                                    data-dp-analytics="waDashboardClickCard-js-unavailability-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=B+G&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Brenda
                                                            Gonsalves</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Today, 12
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray"> </small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-unavailability-item">
                                                <a href="#team/1892"
                                                    data-dp-analytics="waDashboardClickCard-js-unavailability-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=M+N&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Mahesh
                                                            Naik</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Today, 12
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray"> </small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-unavailability-item">
                                                <a href="#team/1459"
                                                    data-dp-analytics="waDashboardClickCard-js-unavailability-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_de7e61fee60463e85cfb386be64a0044.jpg?Expires=1686617761&amp;Signature=UFuyJKjAGd142jhOYmKvq4LKzvwYW4vRO7rvZgeRIjHXQQGeF79t~l0TtAwZpegfO9Avl95guLO2kf16fI31siZyCobeXbx9mhYFqTSIJi1CBi7yj1eJyS6HgFIRHbX9bO8jS05WYfuA1W2XrIA6dlLT4hQtQH4g8xLplxy-8hI_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Miguel
                                                            Servillon</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Today, 12
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray"> </small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-unavailability-item">
                                                <a href="#team/1485"
                                                    data-dp-analytics="waDashboardClickCard-js-unavailability-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_41afc214e013965331ee94b99d6de4d8.jpg?Expires=1686628112&amp;Signature=RsrYda5Tiool9Obu-U-zCAQFyOUms3cM3IIaXarFvP5sn0Rohd4M5taovrFqn792uvcNShDMR9bQCPJtEN5afRfxdTIW93jWZSKi6ndeZWU14PQH7kyW1wdIfqq~R0oQhO7xGJZzn2SpjQjO3hyRzGs7qe~Iit4iFhXb~cu0q1c_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Stephen
                                                            Obenza</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Today, 12
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray"> Repeat
                                                                Weekly</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-unavailability-item">
                                                <a href="#team/1503"
                                                    data-dp-analytics="waDashboardClickCard-js-unavailability-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_68a3808f3f9488731f126f435ef32e12.jpg?Expires=1686633920&amp;Signature=Cjirq0uhOnNJVS7UwGFKEMilE2hJyO79CRH5gnufHVEO7bdJQaQE1DbWK788oH7iVyFnceKHOgbjH68MdwRUz6UgNvxbCEUibMSYQuWYTe1mGvmcPsejyRTZixRLBvL6EJUFxe0wp2vKmhbX30KoPJrvNlh9sRgZ-~xAl0k9CVU_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Paul A.</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Today, 12
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray"> Repeat
                                                                Weekly</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-unavailability-item">
                                                <a href="#team/1507"
                                                    data-dp-analytics="waDashboardClickCard-js-unavailability-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_57660d1345197b1d47aefdece625c3dc.jpg?Expires=1686654201&amp;Signature=fqi1ebjcj1TKMko5Ir0iPC~kakuhyFFnbROrZ6VHZ9vk-4Kov~2tI-8yGexQKorMbyAL-kxo5SI9nkU~8-S0tz5UDvj6VpaFmp8ni6517ox2B0M33KkiUql94HnhWf4n4G3-P8HxpdiiGCJ1XCV928y3oSZBoFO7n6xF934rYe8_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Niala
                                                            Fereidounpour</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Today, 12
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray"> Repeat
                                                                Weekly</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-unavailability-item">
                                                <a href="#team/1557"
                                                    data-dp-analytics="waDashboardClickCard-js-unavailability-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_6462c49c5ffe2cbce2729b87dbc6f972.jpg?Expires=1686635752&amp;Signature=THRyXTHvKpb33zAxQAxmeCs8ToabiTc2LwE6c0y60VoHcZLaFTX5cHoyhOeIdsH6OQZLeqd1SvFjHQpx4MTzgmLI4O7qPDKhJTa-g3QhTsTMKYwPpxNFYTWnKOTfHglsaISfSxO4FepUxil4KLUEL2qndZgPC8~JqLAsHWfEPAQ_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Fernando
                                                            Valenzuela</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Today, 12
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray"> Repeat
                                                                Weekly</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-unavailability-item">
                                                <a href="#team/1562"
                                                    data-dp-analytics="waDashboardClickCard-js-unavailability-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_c22161ff0a56f6767afe5d7a6c6ad7ff.jpg?Expires=1686620626&amp;Signature=UVtaMLTV3ZBYzJST-TQ4EU3QP~EyThhmIV2-PM7Qsnl0Vqc6XlcTWKKdPOeCRs-vBRIEWbwtWVY7oMhoo-kROjF3IrvaPaJkjSBkPMsN6Oczgtx5jJK1GzmZqlYZvYG4u1XzidBsbX79k4n2fFcWQehzOaifMHLDLLL8mQXmiso_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Mohammed
                                                            Mehdi</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Today, 12
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray"> Repeat
                                                                Weekly</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-unavailability-item">
                                                <a href="#team/1568"
                                                    data-dp-analytics="waDashboardClickCard-js-unavailability-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=E+L&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Ernest
                                                            Lai</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Today, 12
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray"> Repeat
                                                                Weekly</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-unavailability-item">
                                                <a href="#team/1570"
                                                    data-dp-analytics="waDashboardClickCard-js-unavailability-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_aa4da1e9199ea91ebf344018b168a83d.jpg?Expires=1686623756&amp;Signature=NeHrGt135n9M2FL98NUzqlQgOUHR~AsKCTHxn-7TGD6FwsxhppWAn605GOZDXSns51MVDv4deWQlFnVm7Zv5w1iNQ4wU~wCPUXriu4g8Y~FBrXPqQkyLI-~ysDoWqHzosSWoNxOmOo-cYhAjBdFtUdl9W7LqNGDPo-Ia-omo-78_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Lydia</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Today, 12
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray"> Repeat
                                                                Weekly</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-unavailability-item">
                                                <a href="#team/1581"
                                                    data-dp-analytics="waDashboardClickCard-js-unavailability-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=M+C&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Michelle
                                                            C.</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Today, 12
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray"> Repeat
                                                                Weekly</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-unavailability-item">
                                                <a href="#team/1591"
                                                    data-dp-analytics="waDashboardClickCard-js-unavailability-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_b0f9bfbaac64a467671a5f8372450869.jpg?Expires=1686624031&amp;Signature=DFd03nKjIHWS8bnAvsv13fHEJOTeqVTYUEdQai~C7F1wnFMGGE2L6GFkqtLLqoN6Zq~5gt0tyUQF0opWSa1NiGmy0N7rt5p7I6-63litVkAFdUIYVpx04sVVKvpwDFbeDWSFQYighB7GaJy5Ofj2nneIEBJ5Ye2kVz1VBbxvX20_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Allen
                                                            Culiao</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Today, 12
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray"> Repeat
                                                                Weekly</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-unavailability-item">
                                                <a href="#team/1635"
                                                    data-dp-analytics="waDashboardClickCard-js-unavailability-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_f57ca2f23427cebc938a171578fed308.jpg?Expires=1686619798&amp;Signature=ceeTswZldzg5znHCuP90SIgtkrQu6ctdtuIka~bxXriuY7fHoGTA4MKBzWY45HgSME7qafPAujvblsV7XmKxReqXdPIRIFty9NRqnlV5Vzei8dsWMYT6Pj9GW7VZDeslZ7ZUnM~A~YiAu6W--W41JcixVzNvPOxx~1X~BYT9Ksw_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Dan Ngo</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Today, 12
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray"> </small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-unavailability-item">
                                                <a href="#team/1636"
                                                    data-dp-analytics="waDashboardClickCard-js-unavailability-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_487582589ea45624e81a5f51ed2e2c1d.jpg?Expires=1686640526&amp;Signature=HZdn85eU3abOsnd25SrFJVgfdf9x59TLDrEULzcJDxTaCrO4qyJ7FVcKxippRGjuzs92Q6KU0p2jnDSYW1IJioHV2PvNrHg6UqI-5~xSK~d8ocVjAUgtc-6XDWiZOS7C0DmwUFCScv~vppxS2wzBZ3q5yCfMXuc1I~ZgH5EVFK4_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Jagvir
                                                            Bhandal</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Today, 12
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray"> Repeat
                                                                Weekly</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-unavailability-item">
                                                <a href="#team/1652"
                                                    data-dp-analytics="waDashboardClickCard-js-unavailability-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=M+M&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Maria (May)
                                                            Manto</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Today, 12
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray"> </small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-unavailability-item">
                                                <a href="#team/1655"
                                                    data-dp-analytics="waDashboardClickCard-js-unavailability-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_e0e9eb6a21ace0d112b82bb612a997e8.jpg?Expires=1686617085&amp;Signature=haUgk6WAg7PMY7K1hGEUNLLq4ZuHog73ABwrzzlIlIvTJAJ08iCL1CwIUeYjKiO30FCU~hf0Ucwqzz6Xv92T~lPDZy-9HCfc5HfyVptEJU95PmRMVMxhO4~p2Cf1svuTDsYsyYa68MFqCAZjfiw0ABWPOXVh2Su-3jKZSJbR8~w_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Benjamin
                                                            Lee</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Today, 12
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray"> Repeat
                                                                Weekly</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-unavailability-item">
                                                <a href="#team/1664"
                                                    data-dp-analytics="waDashboardClickCard-js-unavailability-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=J+M&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Jacob
                                                            McDonald</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Today, 12
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray"> Repeat
                                                                Weekly</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-unavailability-item">
                                                <a href="#team/1697"
                                                    data-dp-analytics="waDashboardClickCard-js-unavailability-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_ba791a228143469ee9272cccdf2d894c.jpg?Expires=1686642229&amp;Signature=dfTs5skppm~BIdLu0lxhSVEsaeRTOSJwz3SCrsGFkyHpscAkRU440AyRWS7roSyRcvnKhPfEKAmdUm1XQoQ~O1HGhw4eoeqM0yCxIG0Ou7kDMXt-KonSi-XuvDKiPCwjOuJxplr-zPcDbxTIdxhiAEKxKD5uMX-hVXTZ~56rnjc_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Camille Zyra
                                                            Calalang</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Today, 12
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray"> Repeat
                                                                Weekly</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-unavailability-item">
                                                <a href="#team/1706"
                                                    data-dp-analytics="waDashboardClickCard-js-unavailability-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=D+L&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Dean L</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Today, 12
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray"> Repeat
                                                                Weekly</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-unavailability-item">
                                                <a href="#team/1736"
                                                    data-dp-analytics="waDashboardClickCard-js-unavailability-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=S+H&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Shara He</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Today, 12
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray"> Repeat
                                                                Weekly</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-unavailability-item">
                                                <a href="#team/1751"
                                                    data-dp-analytics="waDashboardClickCard-js-unavailability-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_a398c31ccbc6ee8586aa4b0823fcab39.jpg?Expires=1686623756&amp;Signature=V~~iuKKBfp7UYWLS7cJ6jOpnhD0dTfrkiA6KQuzCRE0U2ViSnN5hGasbOeGc1uYSDfTl0sI90mYrLH6VymGKl3W~ZJ3oIOYCOT5vTEFlsL9AY906NayWXyfuEfRYJMKmDdTcrsM7p2mMOdptLWDMpOgEfCcEho4qMXYGzvf8ytI_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Carolina Macias
                                                            Gallardo</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Today, 12
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray"> Repeat
                                                                Weekly</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-unavailability-item">
                                                <a href="#team/1758"
                                                    data-dp-analytics="waDashboardClickCard-js-unavailability-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_e330bd4a9cc930fea5d658d24f9af49e.jpg?Expires=1686643086&amp;Signature=EK1oOPnNrc7ytrpXKylpvyNoI7eE0eDtxoi9j~t0~RHPtZaGrb4MXjfwvrwinVdAgAwY5khSP5X7LA1JioGqbcCYRPPpfA6swneor2OpSL7pH-uYOkweTtdWAA~Try8JZcgGgnz6P0l0kUr72HcVYeV9vEqjgYyVPpci815DnIo_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Franchelle
                                                            Roldan</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Today, 12
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray"> </small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-unavailability-item">
                                                <a href="#team/1766"
                                                    data-dp-analytics="waDashboardClickCard-js-unavailability-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_6fde130cf22e7e7663d2a97bd5f78bff.jpg?Expires=1686632689&amp;Signature=HuwSJ6Lmb0ahOMKwM2CeceDdM~zFcze3ZYdZvQeM7H-Xu~GoHNB7cJL~AQSgaqSchwilVOLaRB11nogDOQDnG56EESpJxQMrv6V6K5UZt9E~HZoPYDb7O3AGixTywEE8RdxIq8tt68ljc~QpWXDCNXxIKJ53pqVyyiCAg~C7aDU_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Cherie Ann
                                                            Evangelista</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Today, 12
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray"> Repeat
                                                                Weekly</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-unavailability-item">
                                                <a href="#team/1793"
                                                    data-dp-analytics="waDashboardClickCard-js-unavailability-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_66304428ce90faf595baaae52ccbcdfa.jpg?Expires=1686628821&amp;Signature=Q2RA-2Sfz3rIVL79DucKDOiF9Lmo5ygQNna7Hx~acCfmWNYeiusWBYtzblzRR1k~uOh~RWlJxvnSE0pyJ3Ri0yfBW4sTMcrc0xQ7bQiHngfmiKUWs9yG0N3XQvUZqhHjA~Jt47MTLxPdNUTpk7nnDLwCtJDP4ZLLyJIqeFVvNNk_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Rolf
                                                            Turatus</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Today, 12
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray"> Repeat
                                                                Weekly</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-unavailability-item">
                                                <a href="#team/1809"
                                                    data-dp-analytics="waDashboardClickCard-js-unavailability-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=C+M&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Colin Ma</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Today, 12
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray"> Repeat
                                                                Weekly</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-unavailability-item">
                                                <a href="#team/1816"
                                                    data-dp-analytics="waDashboardClickCard-js-unavailability-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=E&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Ellen</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Today, 12
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray"> Repeat
                                                                Weekly</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-unavailability-item">
                                                <a href="#team/1908"
                                                    data-dp-analytics="waDashboardClickCard-js-unavailability-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_2f45238dead1f7c82872df9f19458f92.jpg?Expires=1686651126&amp;Signature=cI4YUsZRg5QHSZ28w3WL1OiQwALTHDizcbdeRCb4mX4dYrkPe0pwHHy8RTcbkrpi8UaNFrGjnJHpri0c5jzYbqbTsP9nQIEPDoRE3Wyf7X~7z9LbzW4WRajOHvqbPHwXjVyvw~cD8LFeK~Kh17Ost54mSXNQHkM5r-pxbfzpP8I_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>John
                                                            Buenavides</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Today, 12
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray"> Repeat
                                                                Weekly</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-unavailability-item">
                                                <a href="#team/1929"
                                                    data-dp-analytics="waDashboardClickCard-js-unavailability-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=G+D&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Glenn
                                                            Dasgadas</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Today, 12
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray"> Repeat
                                                                Weekly</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-unavailability-item">
                                                <a href="#team/1942"
                                                    data-dp-analytics="waDashboardClickCard-js-unavailability-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_6813a0d4d33621c997a20b89f105b178.jpg?Expires=1686625171&amp;Signature=E8~ZMDQCCL1kqmCv-Zi61PtpUli8LHi27N7LTcGzzxLN1ksE0jTiFXDR2M8igR80rXSa8G8ixXGE9I1AMTPgxz5kxRRvCp7MNamfBY~WdcxgjDUjpb-lFOY0jmUros52Ns4ofDBP9HcCFTMg8M9Ehye6iCMxNpV0VNB00dJ226M_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Sana
                                                            Malik</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Today, 12
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray"> Repeat
                                                                Weekly</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-unavailability-item">
                                                <a href="#team/1943"
                                                    data-dp-analytics="waDashboardClickCard-js-unavailability-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=A+S&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Adwiteey
                                                            Sharma</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Today, 12
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray"> Repeat
                                                                Weekly</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-unavailability-item">
                                                <a href="#team/1945"
                                                    data-dp-analytics="waDashboardClickCard-js-unavailability-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_6a7393dc0280cad783851699ad580e10.jpg?Expires=1686621408&amp;Signature=ZbR5zh4Qq4GbPA2w0X0bhZ1raw5CQuwp0x2N2m6xE-l-Xm4~wXGCEmEu1KwQ2KjeRgNvkf~dkSUjRw502qwUAgVJAbPzG7fOdt5q-c1jIVujhN2X0quh4NleKtWHrRUWWa45roTOmCw6eoHmyNqHi3r7k~4CC0hdJRa7Y-VCR4c_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Joel
                                                            Prince</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Today, 12
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray"> Repeat
                                                                Weekly</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-unavailability-item">
                                                <a href="#team/1955"
                                                    data-dp-analytics="waDashboardClickCard-js-unavailability-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=E+D&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Esmeralda
                                                            Dominguez</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Today, 12
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray"> Repeat
                                                                Weekly</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-unavailability-item">
                                                <a href="#team/1956"
                                                    data-dp-analytics="waDashboardClickCard-js-unavailability-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=K+R&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Kiran
                                                            Raj</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Today, 12
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray"> Repeat
                                                                Weekly</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-unavailability-item">
                                                <a href="#team/1958"
                                                    data-dp-analytics="waDashboardClickCard-js-unavailability-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=A+L&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Anh Ly</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Today, 12
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray"> Repeat
                                                                Weekly</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-unavailability-item">
                                                <a href="#team/1963"
                                                    data-dp-analytics="waDashboardClickCard-js-unavailability-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_527517168a2de4c9e4874096d9b68ca0.jpg?Expires=1686620688&amp;Signature=Ydfxt0Jf6zfE498f2TQt~lXrxTXHLJ0ZPrMrPwv1hc17VlCDdwuKYaHeD~B0G7IHtBgpOpRybcDjvZ3xmLYl1ueowYSSlWmIgvUI8JmIe~-Am8jK7GyKeBYSVvFcT2jZfb5bsvuI6q1YTaekjbFCO9eLXmTUhcuQN~XjSAglQKA_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Tristan</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Today, 12
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray"> Repeat
                                                                Weekly</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-unavailability-item">
                                                <a href="#team/1969"
                                                    data-dp-analytics="waDashboardClickCard-js-unavailability-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_6c933097e298ed59a46feb8db5fed07e.jpg?Expires=1686648681&amp;Signature=XeDcmiTuQRUTLiUTuwT25jteWPF-o2JqzSuEmrkRcSC4cZkzj3IuYgQwyWHOZphUNl09Q0IuFy9AFRjHdx5AG17LVeEAf0pqFSjDUMf2lyp8aEwkg2YHmdB-Xlcb7AFL2szbWMOPuS5ly6zv0UfGDDhbCnlxgTV75uxpWxJz3LE_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Markus</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Today, 12
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray"> Repeat
                                                                Weekly</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-unavailability-item">
                                                <a href="#team/1973"
                                                    data-dp-analytics="waDashboardClickCard-js-unavailability-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=L+D&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Lyn
                                                            Douglas-Peters</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Today, 12
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray"> Repeat
                                                                Weekly</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-unavailability-item">
                                                <a href="#team/1974"
                                                    data-dp-analytics="waDashboardClickCard-js-unavailability-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_f88f32c6bf276cf746f5b5b979e4f2d8.jpg?Expires=1686624448&amp;Signature=YrCiuVKCkQSsgzaNL-sOqyFTCFHTd8ZurWRQyciPMt3d05Rvtbdy4mKAoI5RoTWRNcdeZgvldc5JNV1unEh0Gx7aR6cGjacQuQXHJygcV5soM3ygoMhy-mOUv1bbkmI~YLsQSnKApORB2FLjbjAEt9TOy53ekqNDiSP0pav5vrs_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Lioune
                                                            Porte</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Today, 12
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray"> Repeat
                                                                Weekly</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-unavailability-item">
                                                <a href="#team/1977"
                                                    data-dp-analytics="waDashboardClickCard-js-unavailability-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=N+B&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Navreet
                                                            Brar</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Today, 12
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray"> Repeat
                                                                Weekly</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-unavailability-item">
                                                <a href="#team/1995"
                                                    data-dp-analytics="waDashboardClickCard-js-unavailability-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=D+V&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Daniel
                                                            Varela</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Today, 12
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray"> Repeat
                                                                Weekly</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-unavailability-item">
                                                <a href="#team/2002"
                                                    data-dp-analytics="waDashboardClickCard-js-unavailability-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=M+U&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Mateo
                                                            Uribe</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Today, 12
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray"> Repeat
                                                                Weekly</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-unavailability-item">
                                                <a href="#team/2004"
                                                    data-dp-analytics="waDashboardClickCard-js-unavailability-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=A+S&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Adam
                                                            Shivji</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Today, 12
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray"> Repeat
                                                                Weekly</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-unavailability-item">
                                                <a href="#team/2006"
                                                    data-dp-analytics="waDashboardClickCard-js-unavailability-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=J+M&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Jacob
                                                            Mathews</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Today, 12
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray"> Repeat
                                                                Weekly</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-unavailability-item">
                                                <a href="#team/2016"
                                                    data-dp-analytics="waDashboardClickCard-js-unavailability-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=D+K&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Denphum
                                                            Kingkan</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Today, 12
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray"> Repeat
                                                                Weekly</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-unavailability-item">
                                                <a href="#team/2017"
                                                    data-dp-analytics="waDashboardClickCard-js-unavailability-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=P+S&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Pradeep Panneer
                                                            Selvam</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Today, 12
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray"> Repeat
                                                                Weekly</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <span data-vue-embed="dashboard-good-faith-estimate"></span>
                            <!---->
                        </div>
                        <!--    to change Id name -->
                        <div class="my-dashboard-column u-relative" style="z-index: 1;">
                            <div class="text--large u-bold">Needs Approval</div>
                            <div class="me-dashboard-widget-approval" data-v-c8d47f9a="">
                                <!---->
                                <div data-v-c8d47f9a="" style="">
                                    <div class="dashboard-widget-shifts-approval" data-v-2e53c3b4=""
                                        data-v-c8d47f9a="">
                                        <div class="dashboard-widget-card" data-v-53fc8d98="" data-v-2e53c3b4="">
                                            <div class="dashboard-widget-card__header" data-v-53fc8d98="">
                                                <div class="dashboard-widget-card__icon" data-v-53fc8d98=""><i
                                                        class="co-icon-clock" data-v-53fc8d98=""
                                                        style="color: rgb(250, 95, 213);"></i></div>
                                                <div class="dashboard-widget-card__title-container"
                                                    data-v-53fc8d98="">
                                                    <p class="dashboard-widget-card__title" data-v-53fc8d98="">8
                                                        Open Shift Requests
                                                    </p>
                                                    <p class="dashboard-widget-card__subtitle" data-v-53fc8d98="">1
                                                        Tomorrow
                                                    </p>
                                                </div>
                                                <div class="dashboard-widget-card__expand-icon" data-v-53fc8d98="">
                                                    <i class="fas fa-chevron-up" data-v-53fc8d98=""></i>
                                                </div>
                                            </div>
                                            <div class="dashboard-widget-card__body dashboard-widget-card__body--open"
                                                data-v-53fc8d98="">
                                                <div class="dashboard-widget-shifts-approval__shift"
                                                    data-v-2e53c3b4="">
                                                    <div class="dashboard-widget-shifts-approval__shift-icon"
                                                        data-v-2e53c3b4="">
                                                        <div class="dashboard-widget-shifts-approval__shift-icon-circle"
                                                            data-v-2e53c3b4=""><i class="co-icon-calendar"
                                                                data-v-2e53c3b4=""></i></div>
                                                    </div>
                                                    <div class="dashboard-widget-shifts-approval__shift-info"
                                                        data-v-2e53c3b4="">
                                                        <p class="dashboard-widget-shifts-approval__shift-info-title"
                                                            data-v-2e53c3b4="">Tuesday, 13 June <span
                                                                class="dashboard-widget-shifts-approval__shift-requests"
                                                                data-v-2e53c3b4=""><i class="fas fa-user"
                                                                    data-v-2e53c3b4=""></i> 1</span></p>
                                                        <p data-v-2e53c3b4="">12:00 am - 8:00 am at Security Escort -
                                                            Silver
                                                        </p>
                                                        <p class="dashboard-widget-shifts-approval__shift-info-company"
                                                            data-v-2e53c3b4="">Vancouver International Airport</p>
                                                    </div>
                                                </div>
                                                <div class="dashboard-widget-shifts-approval__shift"
                                                    data-v-2e53c3b4="">
                                                    <div class="dashboard-widget-shifts-approval__shift-icon"
                                                        data-v-2e53c3b4="">
                                                        <div class="dashboard-widget-shifts-approval__shift-icon-circle"
                                                            data-v-2e53c3b4=""><i class="co-icon-calendar"
                                                                data-v-2e53c3b4=""></i></div>
                                                    </div>
                                                    <div class="dashboard-widget-shifts-approval__shift-info"
                                                        data-v-2e53c3b4="">
                                                        <p class="dashboard-widget-shifts-approval__shift-info-title"
                                                            data-v-2e53c3b4="">Wednesday, 14 June <span
                                                                class="dashboard-widget-shifts-approval__shift-requests"
                                                                data-v-2e53c3b4=""><i class="fas fa-user"
                                                                    data-v-2e53c3b4=""></i> 2</span></p>
                                                        <p data-v-2e53c3b4="">12:00 am - 8:00 am at Security Escort -
                                                            Static
                                                        </p>
                                                        <p class="dashboard-widget-shifts-approval__shift-info-company"
                                                            data-v-2e53c3b4="">Vancouver International Airport</p>
                                                    </div>
                                                </div>
                                                <div class="dashboard-widget-shifts-approval__shift"
                                                    data-v-2e53c3b4="">
                                                    <div class="dashboard-widget-shifts-approval__shift-icon"
                                                        data-v-2e53c3b4="">
                                                        <div class="dashboard-widget-shifts-approval__shift-icon-circle"
                                                            data-v-2e53c3b4=""><i class="co-icon-calendar"
                                                                data-v-2e53c3b4=""></i></div>
                                                    </div>
                                                    <div class="dashboard-widget-shifts-approval__shift-info"
                                                        data-v-2e53c3b4="">
                                                        <p class="dashboard-widget-shifts-approval__shift-info-title"
                                                            data-v-2e53c3b4="">Wednesday, 14 June <span
                                                                class="dashboard-widget-shifts-approval__shift-requests"
                                                                data-v-2e53c3b4=""><i class="fas fa-user"
                                                                    data-v-2e53c3b4=""></i> 1</span></p>
                                                        <p data-v-2e53c3b4="">12:00 am - 8:00 am at Security Escort -
                                                            Silver
                                                        </p>
                                                        <p class="dashboard-widget-shifts-approval__shift-info-company"
                                                            data-v-2e53c3b4="">Vancouver International Airport</p>
                                                    </div>
                                                </div>
                                                <div class="dashboard-widget-shifts-approval__shift"
                                                    data-v-2e53c3b4="">
                                                    <div class="dashboard-widget-shifts-approval__shift-icon"
                                                        data-v-2e53c3b4="">
                                                        <div class="dashboard-widget-shifts-approval__shift-icon-circle"
                                                            data-v-2e53c3b4=""><i class="co-icon-calendar"
                                                                data-v-2e53c3b4=""></i></div>
                                                    </div>
                                                    <div class="dashboard-widget-shifts-approval__shift-info"
                                                        data-v-2e53c3b4="">
                                                        <p class="dashboard-widget-shifts-approval__shift-info-title"
                                                            data-v-2e53c3b4="">Thursday, 15 June <span
                                                                class="dashboard-widget-shifts-approval__shift-requests"
                                                                data-v-2e53c3b4=""><i class="fas fa-user"
                                                                    data-v-2e53c3b4=""></i> 1</span></p>
                                                        <p data-v-2e53c3b4="">2:30 pm - 11:00 pm at Carts - Operative
                                                        </p>
                                                        <p class="dashboard-widget-shifts-approval__shift-info-company"
                                                            data-v-2e53c3b4="">Vancouver International Airport</p>
                                                    </div>
                                                </div>
                                                <div class="dashboard-widget-shifts-approval__shift"
                                                    data-v-2e53c3b4="">
                                                    <div class="dashboard-widget-shifts-approval__shift-icon"
                                                        data-v-2e53c3b4="">
                                                        <div class="dashboard-widget-shifts-approval__shift-icon-circle"
                                                            data-v-2e53c3b4=""><i class="co-icon-calendar"
                                                                data-v-2e53c3b4=""></i></div>
                                                    </div>
                                                    <div class="dashboard-widget-shifts-approval__shift-info"
                                                        data-v-2e53c3b4="">
                                                        <p class="dashboard-widget-shifts-approval__shift-info-title"
                                                            data-v-2e53c3b4="">Thursday, 15 June <span
                                                                class="dashboard-widget-shifts-approval__shift-requests"
                                                                data-v-2e53c3b4=""><i class="fas fa-user"
                                                                    data-v-2e53c3b4=""></i> 4</span></p>
                                                        <p data-v-2e53c3b4="">3:00 pm - 12:00 am at Carousel
                                                            management - INT
                                                        </p>
                                                        <p class="dashboard-widget-shifts-approval__shift-info-company"
                                                            data-v-2e53c3b4="">Vancouver International Airport</p>
                                                    </div>
                                                </div>
                                                <div class="dashboard-widget-shifts-approval__shift"
                                                    data-v-2e53c3b4="">
                                                    <div class="dashboard-widget-shifts-approval__shift-icon"
                                                        data-v-2e53c3b4="">
                                                        <div class="dashboard-widget-shifts-approval__shift-icon-circle"
                                                            data-v-2e53c3b4=""><i class="co-icon-calendar"
                                                                data-v-2e53c3b4=""></i></div>
                                                    </div>
                                                    <div class="dashboard-widget-shifts-approval__shift-info"
                                                        data-v-2e53c3b4="">
                                                        <p class="dashboard-widget-shifts-approval__shift-info-title"
                                                            data-v-2e53c3b4="">Friday, 16 June <span
                                                                class="dashboard-widget-shifts-approval__shift-requests"
                                                                data-v-2e53c3b4=""><i class="fas fa-user"
                                                                    data-v-2e53c3b4=""></i> 4</span></p>
                                                        <p data-v-2e53c3b4="">7:00 am - 3:30 pm at Dynamix (Floor) -
                                                            Operative
                                                        </p>
                                                        <p class="dashboard-widget-shifts-approval__shift-info-company"
                                                            data-v-2e53c3b4="">Vancouver International Airport</p>
                                                    </div>
                                                </div>
                                                <div class="dashboard-widget-shifts-approval__shift"
                                                    data-v-2e53c3b4="">
                                                    <div class="dashboard-widget-shifts-approval__shift-icon"
                                                        data-v-2e53c3b4="">
                                                        <div class="dashboard-widget-shifts-approval__shift-icon-circle"
                                                            data-v-2e53c3b4=""><i class="co-icon-calendar"
                                                                data-v-2e53c3b4=""></i></div>
                                                    </div>
                                                    <div class="dashboard-widget-shifts-approval__shift-info"
                                                        data-v-2e53c3b4="">
                                                        <p class="dashboard-widget-shifts-approval__shift-info-title"
                                                            data-v-2e53c3b4="">Friday, 16 June <span
                                                                class="dashboard-widget-shifts-approval__shift-requests"
                                                                data-v-2e53c3b4=""><i class="fas fa-user"
                                                                    data-v-2e53c3b4=""></i> 2</span></p>
                                                        <p data-v-2e53c3b4="">7:45 am - 12:15 pm at Security Escort -
                                                            Silver
                                                        </p>
                                                        <p class="dashboard-widget-shifts-approval__shift-info-company"
                                                            data-v-2e53c3b4="">Vancouver International Airport</p>
                                                    </div>
                                                </div>
                                                <div class="dashboard-widget-shifts-approval__shift"
                                                    data-v-2e53c3b4="">
                                                    <div class="dashboard-widget-shifts-approval__shift-icon"
                                                        data-v-2e53c3b4="">
                                                        <div class="dashboard-widget-shifts-approval__shift-icon-circle"
                                                            data-v-2e53c3b4=""><i class="co-icon-calendar"
                                                                data-v-2e53c3b4=""></i></div>
                                                    </div>
                                                    <div class="dashboard-widget-shifts-approval__shift-info"
                                                        data-v-2e53c3b4="">
                                                        <p class="dashboard-widget-shifts-approval__shift-info-title"
                                                            data-v-2e53c3b4="">Monday, 19 June <span
                                                                class="dashboard-widget-shifts-approval__shift-requests"
                                                                data-v-2e53c3b4=""><i class="fas fa-user"
                                                                    data-v-2e53c3b4=""></i> 5</span></p>
                                                        <p data-v-2e53c3b4="">3:00 pm - 12:00 am at Carousel
                                                            management - INT
                                                        </p>
                                                        <p class="dashboard-widget-shifts-approval__shift-info-company"
                                                            data-v-2e53c3b4="">Vancouver International Airport</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!---->
                                    </div>
                                    <div class="dashboard-widget-card" data-v-53fc8d98="" data-v-074d0cf5=""
                                        data-v-c8d47f9a="">
                                        <div class="dashboard-widget-card__header" data-v-53fc8d98="">
                                            <div class="dashboard-widget-card__icon" data-v-53fc8d98=""><i
                                                    class="co-icon-calendar-1" data-v-53fc8d98=""
                                                    style="color: rgb(255, 158, 65);"></i></div>
                                            <div class="dashboard-widget-card__title-container" data-v-53fc8d98="">
                                                <p class="dashboard-widget-card__title" data-v-53fc8d98="">No
                                                    requests assigned to you
                                                </p>
                                                <p class="dashboard-widget-card__subtitle" data-v-53fc8d98="">43
                                                    Leave Requests
                                                </p>
                                            </div>
                                            <div class="dashboard-widget-card__expand-icon" data-v-53fc8d98=""><i
                                                    class="fas fa-expand-alt" data-v-53fc8d98=""></i></div>
                                        </div>
                                        <div class="dashboard-widget-card__body dashboard-widget-card__body--open"
                                            data-v-53fc8d98=""></div>
                                    </div>
                                </div>
                            </div>
                            <div id="ds-to-approve" class="margin-none">
                                <div class="js-ds-to-approve-placeHolder ds-empty-holder text-center hide">
                                    <img class="ds-empty-img lazyload"
                                        data-src="https://d2sebmzxyyulvv.cloudfront.net/cffad1139f1dc662afee6e900cc5cfc8a312f59e/images/dashboard/needsapproval.png"
                                        alt="">
                                    <div class="ds-empty-txt u-zindex-reset">
                                        <strong>Great Job!</strong>
                                        <p class="margin-none">You are all clear, nothing else to approve today.</p>
                                    </div>
                                </div>
                                <div class="m-myWidget-item">
                                    <div class="dashboard-card-wrapper js-dashboard-card-wrapper expended"
                                        data-ds-url="deputec_shift_swap_to_approve">
                                        <div class="dashboard-card js-dashboard-card"
                                            data-dp-analytics="waDashboardExpandCard-deputec_shift_swap_to_approve">
                                            <strong class="js-dashboard-main-title">1 Swap Shift</strong>
                                            <div class="margin-none">
                                                <small class="co-text-secondary js-dashboard-sub-title"></small>
                                            </div>
                                            <i class="di-down-5"></i>
                                            <span class="di-switch feature-icon"></span>
                                        </div>
                                        <ul class="dashboard-card-list js-dashboard-card-list margin-none">
                                            <li class="dc-list-item av-col-2 js-swap-roster-to-approve-item">
                                                <a href="#roster/record/505603"
                                                    data-dp-analytics="waDashboardClickCard-js-swap-roster-to-approve-item">
                                                    <div class="dc-list-content margin-none u-flex text-center">
                                                        <div class="avatar-wrapper">
                                                            <img loading="lazy" class="avatar"
                                                                src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=C+M&amp;width=135&amp;height=135"
                                                                alt="">
                                                            <div class="margin-none"><small>Colin Ma</small></div>
                                                            <div class="margin-none"><small>Sat, 24 Jun 7:00 am - 5:00
                                                                    pm @ Carousel management - INT</small>
                                                            </div>
                                                        </div>
                                                        <div class="di-cycle gray margin-none"></div>
                                                        <div class="avatar-wrapper margin-none">
                                                            <img loading="lazy" class="avatar"
                                                                src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=C+L&amp;width=135&amp;height=135"
                                                                alt="">
                                                            <div class="margin-none"><small>Candace L</small></div>
                                                            <div class="margin-none"><small>Sat, 24 Jun 8:00 am - 4:30
                                                                    pm @ Cruise Ops</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="m-myWidget-item">
                                    <div class="dashboard-card-wrapper js-dashboard-card-wrapper expended"
                                        data-ds-url="deputec_timesheets_to_approve">
                                        <div class="dashboard-card js-dashboard-card"
                                            data-dp-analytics="waDashboardExpandCard-deputec_timesheets_to_approve">
                                            <strong class="js-dashboard-main-title">50+ Timesheets</strong>
                                            <div class="margin-none">
                                                <small class="co-text-secondary js-dashboard-sub-title"></small>
                                            </div>
                                            <i class="di-down-5"></i>
                                            <span class="di-upcoming feature-icon"></span>
                                        </div>
                                        <ul class="dashboard-card-list js-dashboard-card-list margin-none">
                                            <li class="dc-list-item av-left js-ts-approve-item">
                                                <a href="#approve/17/record/380087"
                                                    data-dp-analytics="waDashboardClickCard-js-ts-approve-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=A+M&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Alishan
                                                            Merchant</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Today, 12
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">5:00 am -
                                                                8:30 am @ DHL-Q-117(T4 Mitigation)-Op's</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-ts-approve-item">
                                                <a href="#approve/52/record/380039"
                                                    data-dp-analytics="waDashboardClickCard-js-ts-approve-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_8cee23cc82a24be62cc9229bfdf92896.jpg?Expires=1686654165&amp;Signature=MbwMa8Dz8z9JhKRnxLC5Jmlg8-TG5Tqm0L-V37TUyIl-vhCJrVTAEItH79mo9DIE4QlyhX14AmU-uy4GyObGDVLnRh~HAFNb2P6aDFTM2ytSM-jY-TgvTP7KOeBcAcvyopUFrtMwTkivsxB6mL-GCRtT8~EIb9n9FbxIZ2SeznM_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Amin
                                                            Husen</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Sun, 11
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">6:30 pm -
                                                                3:00 am @ Motrec/Carts </small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-ts-approve-item">
                                                <a href="#approve/52/record/380038"
                                                    data-dp-analytics="waDashboardClickCard-js-ts-approve-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_1581f3fd5ba353dfbc779342531ea9da.jpg?Expires=1686649856&amp;Signature=X6NiJWJiIZ3DrUSoqHGr4mbYlHmFyH6uhbitZeBiUpKukWL2VywALo7eFo5f0tclhjWjvea0HgYZJJ0lsqAGRDvsCaZwnTm6VcepM-23CPX7M42Sq-YjUrqRQ0J7gewkhBaUwssHXwCCOvBgDvkxdBgZ~gRYJ1mDzjNabsaAC7k_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Fu-yu
                                                            Tsai</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Sun, 11
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">6:01 pm -
                                                                3:30 am @ Carts Support</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-ts-approve-item">
                                                <a href="#approve/52/record/380006"
                                                    data-dp-analytics="waDashboardClickCard-js-ts-approve-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=R+N&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Rahul
                                                            Narlely</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Sun, 11
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">3:30 pm -
                                                                11:00 pm @ Zone support - INT</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-ts-approve-item">
                                                <a href="#approve/52/record/380007"
                                                    data-dp-analytics="waDashboardClickCard-js-ts-approve-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=R+M&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Rashi
                                                            Manchanda</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Sun, 11
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">3:30 pm -
                                                                12:30 am @ Carts - Operative</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-ts-approve-item">
                                                <a href="#approve/52/record/380004"
                                                    data-dp-analytics="waDashboardClickCard-js-ts-approve-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=J+M&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Jacob
                                                            McDonald</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Sun, 11
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">3:00 pm -
                                                                11:00 pm @ CTX Scan - International</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-ts-approve-item">
                                                <a href="#approve/52/record/380003"
                                                    data-dp-analytics="waDashboardClickCard-js-ts-approve-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=K+G&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Kyle
                                                            Gaunia</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Sun, 11
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">3:00 pm -
                                                                2:30 am @ Motrec/Carts </small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-ts-approve-item">
                                                <a href="#approve/52/record/380000"
                                                    data-dp-analytics="waDashboardClickCard-js-ts-approve-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_178954e9fba25d5d8260241027074e28.jpg?Expires=1686617991&amp;Signature=YHVr8FkCP8PTC-Vk30zXMZB4Mvs~OGgGyecEioEyxg~UbCupaFr8anPdwWtRIbDdVqKNc2rZCUBj7LEvuZOkq~2QA~gQAl9VSO0QmvYUegpVa-g-48eJyXrNttcj6MJoF8klIDsTQWgUtlXRpiKDkLDfzhpXkI9NhnlmfJlQ~4Y_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Sean
                                                            Oclida</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Sun, 11
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">2:30 pm -
                                                                11:00 pm @ EBS - Team Lead</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-ts-approve-item">
                                                <a href="#approve/52/record/380002"
                                                    data-dp-analytics="waDashboardClickCard-js-ts-approve-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=M+C&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Michelle
                                                            C.</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Sun, 11
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">2:30 pm -
                                                                11:30 pm @ Trans-Border Scan - Operative</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-ts-approve-item">
                                                <a href="#approve/52/record/380001"
                                                    data-dp-analytics="waDashboardClickCard-js-ts-approve-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_8351efc0aa05458aa922165c668dcbc3.jpg?Expires=1686616072&amp;Signature=bKNpMTEUotmaAxLbdEoFi-jo5VqSJE9SnToRgpMXWsSi5r1iOOdaF-8FnB2xN15SVuH9YpJ2S8Zw7iIPPlEFxqTQ0HvyBm6Qr5kZdr2WZ-Hjo~c3pbvYWRX2VYa12MaEqqhdz8kq5tG91wQkTjjh0yQxV4w-2onFnlxmFCc4~nc_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Wei-En (Wayne)
                                                            Huang</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Sun, 11
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">2:30 pm -
                                                                11:30 pm @ Transborder System - Operative</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-ts-approve-item">
                                                <a href="#approve/52/record/379993"
                                                    data-dp-analytics="waDashboardClickCard-js-ts-approve-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_ee4f84ccac1052c0757dbc7322f0b71c.jpg?Expires=1686642230&amp;Signature=b~dq8qzhibeGrnzg86ckqWUzVVjHnznLNGsazErWzZ420wam0nEYa7s2Sz80azXGK4lW2K6BiDL8X2Gy~dKilkxZ0hzw~e-smf-iYXcrBQnr7XItEs7nwUaiW58LASaLs3bBzJ~nlY3HoCPvqSCwcprx-v6mOYRNHwN5eMxokn0_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Romel
                                                            Pascual</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Sun, 11
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">2:00 pm -
                                                                10:13 pm @ CTX Scan - Link </small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-ts-approve-item">
                                                <a href="#approve/52/record/379997"
                                                    data-dp-analytics="waDashboardClickCard-js-ts-approve-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_487582589ea45624e81a5f51ed2e2c1d.jpg?Expires=1686640526&amp;Signature=HZdn85eU3abOsnd25SrFJVgfdf9x59TLDrEULzcJDxTaCrO4qyJ7FVcKxippRGjuzs92Q6KU0p2jnDSYW1IJioHV2PvNrHg6UqI-5~xSK~d8ocVjAUgtc-6XDWiZOS7C0DmwUFCScv~vppxS2wzBZ3q5yCfMXuc1I~ZgH5EVFK4_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Jagvir
                                                            Bhandal</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Sun, 11
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">2:00 pm -
                                                                11:30 pm @ Domestic West - Operative</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-ts-approve-item">
                                                <a href="#approve/52/record/379996"
                                                    data-dp-analytics="waDashboardClickCard-js-ts-approve-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=D+Y&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Danny
                                                            Yan</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Sun, 11
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">2:00 pm -
                                                                11:56 pm @ Carousel management - INT</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-ts-approve-item">
                                                <a href="#approve/52/record/379999"
                                                    data-dp-analytics="waDashboardClickCard-js-ts-approve-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_2f45238dead1f7c82872df9f19458f92.jpg?Expires=1686651126&amp;Signature=cI4YUsZRg5QHSZ28w3WL1OiQwALTHDizcbdeRCb4mX4dYrkPe0pwHHy8RTcbkrpi8UaNFrGjnJHpri0c5jzYbqbTsP9nQIEPDoRE3Wyf7X~7z9LbzW4WRajOHvqbPHwXjVyvw~cD8LFeK~Kh17Ost54mSXNQHkM5r-pxbfzpP8I_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>John
                                                            Buenavides</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Sun, 11
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">2:00 pm -
                                                                11:00 pm @ Carousel management - DOM</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-ts-approve-item">
                                                <a href="#approve/52/record/379998"
                                                    data-dp-analytics="waDashboardClickCard-js-ts-approve-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=M+R&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Muizz
                                                            Rupani</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Sun, 11
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">2:00 pm -
                                                                12:00 am @ Carousel management - INT</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-ts-approve-item">
                                                <a href="#approve/52/record/379990"
                                                    data-dp-analytics="waDashboardClickCard-js-ts-approve-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_c22161ff0a56f6767afe5d7a6c6ad7ff.jpg?Expires=1686620626&amp;Signature=UVtaMLTV3ZBYzJST-TQ4EU3QP~EyThhmIV2-PM7Qsnl0Vqc6XlcTWKKdPOeCRs-vBRIEWbwtWVY7oMhoo-kROjF3IrvaPaJkjSBkPMsN6Oczgtx5jJK1GzmZqlYZvYG4u1XzidBsbX79k4n2fFcWQehzOaifMHLDLLL8mQXmiso_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Mohammed
                                                            Mehdi</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Sun, 11
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">1:30 pm -
                                                                10:00 pm @ Domestic South - Operative</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-ts-approve-item">
                                                <a href="#approve/52/record/379991"
                                                    data-dp-analytics="waDashboardClickCard-js-ts-approve-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_b0f9bfbaac64a467671a5f8372450869.jpg?Expires=1686624031&amp;Signature=DFd03nKjIHWS8bnAvsv13fHEJOTeqVTYUEdQai~C7F1wnFMGGE2L6GFkqtLLqoN6Zq~5gt0tyUQF0opWSa1NiGmy0N7rt5p7I6-63litVkAFdUIYVpx04sVVKvpwDFbeDWSFQYighB7GaJy5Ofj2nneIEBJ5Ye2kVz1VBbxvX20_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Allen
                                                            Culiao</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Sun, 11
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">1:30 pm -
                                                                11:30 pm @ Transborder USCBP - Operative</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-ts-approve-item">
                                                <a href="#approve/52/record/379985"
                                                    data-dp-analytics="waDashboardClickCard-js-ts-approve-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=J+T&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Janice
                                                            Torres</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Sun, 11
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">1:00 pm -
                                                                11:30 pm @ Transborder Scan - Team Leader</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-ts-approve-item">
                                                <a href="#approve/52/record/379984"
                                                    data-dp-analytics="waDashboardClickCard-js-ts-approve-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_be61b6cff3dd9e5d9fe6e941b372a40c.jpg?Expires=1686643861&amp;Signature=QrSGhmefmCqooKh2MiRhc-XAj7dqr-uFtMcIS9m5qNFni4KIwmcgdY2YRxcqkmnhsR9ZTwqH2G5Or2O4-ZN4hw3QPuEP9U8ZzBa8uNPzvpZpkCOw4j7Bl2P9WcBbhOZ4sMDj5wwliqHyEkPjCd58NpY4DRO0bz-ZrH0GTCN9gJ8_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Jarred
                                                            Carino</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Sun, 11
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">1:00 pm -
                                                                9:00 pm @ EBS - Operative </small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-ts-approve-item">
                                                <a href="#approve/52/record/379983"
                                                    data-dp-analytics="waDashboardClickCard-js-ts-approve-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=T+V&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Tayler
                                                            Voloshinski</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Sun, 11
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">1:00 pm -
                                                                10:00 pm @ Curbside South - Operative</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-ts-approve-item">
                                                <a href="#approve/52/record/379989"
                                                    data-dp-analytics="waDashboardClickCard-js-ts-approve-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=D+K&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Denphum
                                                            Kingkan</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Sun, 11
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">1:00 pm -
                                                                9:00 pm @ Zone support - DOM</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-ts-approve-item">
                                                <a href="#approve/52/record/379986"
                                                    data-dp-analytics="waDashboardClickCard-js-ts-approve-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=P+S&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Pradeep Panneer
                                                            Selvam</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Sun, 11
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">1:00 pm -
                                                                9:00 pm @ Zone support - DOM</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-ts-approve-item">
                                                <a href="#approve/52/record/379979"
                                                    data-dp-analytics="waDashboardClickCard-js-ts-approve-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=M+W&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Martin
                                                            Wong</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Sun, 11
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">12:00 pm -
                                                                8:00 pm @ Trans-Border Scan - Operative</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-ts-approve-item">
                                                <a href="#approve/52/record/379980"
                                                    data-dp-analytics="waDashboardClickCard-js-ts-approve-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=B+K&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Bhupinder
                                                            Kaur</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Sun, 11
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">12:00 pm -
                                                                8:00 pm @ Trans-Border Scan - Operative</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-ts-approve-item">
                                                <a href="#approve/52/record/379978"
                                                    data-dp-analytics="waDashboardClickCard-js-ts-approve-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_2b9766ba8868c747b54b799f6294126d.jpg?Expires=1686637086&amp;Signature=MTeqfEOBha0rqvteioSSppmQ-6gRMc4F4oGcSIYUgNC3iOeaZ3S~dcSAA3zVr9yAcIenezXvYmvcGjDDtSh6vkw~1bodGM5WeDU5FWaQLdQsPqF9dNcel4ptfyYqbyrJGJAdTmZ0JyCPvOrfvlFuyRyp02QSAOwEZSQiAFQvrFw_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Sam Gash</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Sun, 11
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">11:00 am -
                                                                11:00 pm @ Dynamix (Pier 70) - Operative</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-ts-approve-item">
                                                <a href="#approve/52/record/379976"
                                                    data-dp-analytics="waDashboardClickCard-js-ts-approve-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_0d693a6a2babe2a268dd91de1059bf7e.jpg?Expires=1686647834&amp;Signature=LYgEOER-j0X3bcUxqE3IvcjzxWrs23ffyaab2ZdXaCUebwU~z3YUFN1TCcORJ890nDh9gFdXqwz1L~xq-Wc2BHMBy12eEVVqicbGbZ2HU~X8SkSWyUgP1axchhg8-oKMoOzoengSiHB2cI1fXeHTRQ4sw-4bs2tbh-SUJWTJNbc_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Charanjeet
                                                            Kaur</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Sun, 11
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">11:00 am -
                                                                11:00 pm @ Trans-Border Scan - Operative</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-ts-approve-item">
                                                <a href="#approve/52/record/379974"
                                                    data-dp-analytics="waDashboardClickCard-js-ts-approve-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=M&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Morland</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Sun, 11
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">10:00 am -
                                                                6:00 pm @ YVR Express - International</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-ts-approve-item">
                                                <a href="#approve/52/record/379969"
                                                    data-dp-analytics="waDashboardClickCard-js-ts-approve-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_228e33fb8d66e55c646e73b284a755c5.jpg?Expires=1686653265&amp;Signature=BZn7OeR8obrvbCylmm8kg45nGTwMs29HGjGE-jDT~62bwGQyqZtHj6vAfpqlybXOEYJI6ibTm9Nt6OppJcK6QLvHjfjD0YpheQ8FmVqjDhy-LCkQgYpfMkRlkCs9xWOeEKIMRO0ZcQlMRO45PY4f4F5UeMLwX3EYTzA1ZsuLJMY_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Adam
                                                            Melenka</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Sun, 11
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">8:30 am -
                                                                6:00 pm @ Carts Support</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-ts-approve-item">
                                                <a href="#approve/52/record/379963"
                                                    data-dp-analytics="waDashboardClickCard-js-ts-approve-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_314039ccb1c6b0e3abdc442f53604b90.jpg?Expires=1686651801&amp;Signature=UzRDK2ihG0KiUVlidxaL-acHQy2zcoX5tOcgp5StZRRNq85fnViuWiqWHKFOMGdKX9N~jQ~oPPIQ-rBrF9OgV6sxFsTuihtXPGgg-bVHKIYuxsfJOGWT7oW0BoyzlTIfnlXT7zofcZXicyELTbY4mWsZYc5KeE1jZ2gKOGqbURY_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Prableen
                                                            Rai</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Sun, 11
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">8:00 am -
                                                                4:30 pm @ Curbside Support</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-ts-approve-item">
                                                <a href="#approve/52/record/379965"
                                                    data-dp-analytics="waDashboardClickCard-js-ts-approve-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_0ecebe457f52fe6ebd6e6d5f77d03026.jpg?Expires=1686651206&amp;Signature=hqi9XoZ9Los1hc45g66CEJ1mEPz1efwDi7WLPZ~yFIfrD2u5e85d8tLb3woB1ady~pSWisyPocj2gGWKC~Q9iZXZNffA0D9toBAfCi99Jlhdp6hsqmfRuNEdqmHxUmqZcPB-xbe1FrizgLS4X7ffObMBsto~eCnvm~TI4bua5NQ_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Harman
                                                            kaur</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Sun, 11
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">8:00 am -
                                                                4:30 pm @ Cruise Ops</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-ts-approve-item">
                                                <a href="#approve/52/record/379964"
                                                    data-dp-analytics="waDashboardClickCard-js-ts-approve-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_6fde130cf22e7e7663d2a97bd5f78bff.jpg?Expires=1686632689&amp;Signature=HuwSJ6Lmb0ahOMKwM2CeceDdM~zFcze3ZYdZvQeM7H-Xu~GoHNB7cJL~AQSgaqSchwilVOLaRB11nogDOQDnG56EESpJxQMrv6V6K5UZt9E~HZoPYDb7O3AGixTywEE8RdxIq8tt68ljc~QpWXDCNXxIKJ53pqVyyiCAg~C7aDU_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Cherie Ann
                                                            Evangelista</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Sun, 11
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">8:00 am -
                                                                4:30 pm @ Cruise Ops</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-ts-approve-item">
                                                <a href="#approve/52/record/379967"
                                                    data-dp-analytics="waDashboardClickCard-js-ts-approve-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_1b8af5ee025541ccb49af6bbcec9c3df.jpg?Expires=1686649710&amp;Signature=eKc054DzRpt69LIRemIBB6ZNJiOyo5kEActAQ0ai~ujrydA7bsnZcguA1ZvYDCWlyzGmx3PYfHP3EK8I3BW-1ihsWGNtvKGkR8wf8hIAVc-zrg265FTk-zDIIVoEbfJbzmtunD35m2PQPFcnf9W3SnDTsjKl-5PPKG3aADLLWo8_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Eric
                                                            Burdett</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Sun, 11
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">8:00 am -
                                                                6:30 pm @ Motrec/Carts </small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-ts-approve-item">
                                                <a href="#approve/52/record/379962"
                                                    data-dp-analytics="waDashboardClickCard-js-ts-approve-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_6813a0d4d33621c997a20b89f105b178.jpg?Expires=1686625171&amp;Signature=E8~ZMDQCCL1kqmCv-Zi61PtpUli8LHi27N7LTcGzzxLN1ksE0jTiFXDR2M8igR80rXSa8G8ixXGE9I1AMTPgxz5kxRRvCp7MNamfBY~WdcxgjDUjpb-lFOY0jmUros52Ns4ofDBP9HcCFTMg8M9Ehye6iCMxNpV0VNB00dJ226M_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Sana
                                                            Malik</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Sun, 11
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">8:00 am -
                                                                4:30 pm @ Cruise Ops</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-ts-approve-item">
                                                <a href="#approve/52/record/379961"
                                                    data-dp-analytics="waDashboardClickCard-js-ts-approve-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=A+L&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Anh Ly</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Sun, 11
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">8:00 am -
                                                                4:00 pm @ Zone support - INT</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-ts-approve-item">
                                                <a href="#approve/52/record/379966"
                                                    data-dp-analytics="waDashboardClickCard-js-ts-approve-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=R+B&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Rishi
                                                            Behl</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Sun, 11
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">8:00 am -
                                                                4:00 pm @ Zone support - INT</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-ts-approve-item">
                                                <a href="#approve/52/record/379968"
                                                    data-dp-analytics="waDashboardClickCard-js-ts-approve-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=R+V&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Rudra
                                                            Vaidya</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Sun, 11
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">8:00 am -
                                                                4:00 pm @ Carts - Operative</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-ts-approve-item">
                                                <a href="#approve/52/record/379959"
                                                    data-dp-analytics="waDashboardClickCard-js-ts-approve-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_4fe548dfe0e8e6a24ff874ab0d03f70e.jpg?Expires=1686643861&amp;Signature=C2T5z2EFkYdBWKNQsg6dZInxlRF~sW8XM-ydsaMnMj9l~G93EKhyPHK48R2uBSzbkytBnknhuibuhRlVVG8u50FMVV0a08BnPvQOBpA09XMUBBPVL8nINGkCZiH2URN~MO8F3-j9rg-kA04LOeeoktCPWbc7kyPMeuaWyg6HA3g_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Tom Liu</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Sun, 11
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">7:30 am -
                                                                4:00 pm @ Curbside Support</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-ts-approve-item">
                                                <a href="#approve/52/record/379958"
                                                    data-dp-analytics="waDashboardClickCard-js-ts-approve-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_6462c49c5ffe2cbce2729b87dbc6f972.jpg?Expires=1686635752&amp;Signature=THRyXTHvKpb33zAxQAxmeCs8ToabiTc2LwE6c0y60VoHcZLaFTX5cHoyhOeIdsH6OQZLeqd1SvFjHQpx4MTzgmLI4O7qPDKhJTa-g3QhTsTMKYwPpxNFYTWnKOTfHglsaISfSxO4FepUxil4KLUEL2qndZgPC8~JqLAsHWfEPAQ_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Fernando
                                                            Valenzuela</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Sun, 11
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">7:15 am -
                                                                7:00 pm @ Oversize Delivery - Domestic West</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-ts-approve-item">
                                                <a href="#approve/52/record/379956"
                                                    data-dp-analytics="waDashboardClickCard-js-ts-approve-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=D+V&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Daniel
                                                            Varela</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Sun, 11
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">7:04 am -
                                                                5:00 pm @ Carousel management - DOM</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-ts-approve-item">
                                                <a href="#approve/52/record/379952"
                                                    data-dp-analytics="waDashboardClickCard-js-ts-approve-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_a9ec2a090eed20798911d5c5819397a1.jpg?Expires=1686635479&amp;Signature=KgeJ6UtYYlCUudX5B78iECD8-bCKBh4PxZ25PCgcGxu83QDt7-yJAa2Uxx1gE9Sh0CRdFCOTGRUdPK9zqsyLJKfWmbV5yzj~AvhVZddAy0QlxVhIY6DQvgQ00g3ByWLBd2430Mg0~i6vMCoHmLCbUl8rMTdB5ek-k77g2jKNlR0_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Chris
                                                            Kompst</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Sun, 11
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">7:00 am -
                                                                5:00 pm @ Carousel management - INT</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-ts-approve-item">
                                                <a href="#approve/52/record/379949"
                                                    data-dp-analytics="waDashboardClickCard-js-ts-approve-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_75ba9bb351142c6f0b9289aa6dd85f7f.jpg?Expires=1686612665&amp;Signature=IljDch4CwUNADznlcPaUbvgyI~eWKoTaKb02DcrtRIzZ350b0JwC1USjlVCrbZnecWMCFyWlA6hBl677eAY7bmGkXAebQMT8KaYj~EhItWgIy-UYP9miQSjlinJdiF9jx4p5kDWMwOISE0oHKW6pUoarlc3wjevVejzf2qDHxGg_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Hiromi
                                                            Fukazawa</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Sun, 11
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">7:00 am -
                                                                7:00 pm @ Transborder Line 14 -Operative</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-ts-approve-item">
                                                <a href="#approve/52/record/379954"
                                                    data-dp-analytics="waDashboardClickCard-js-ts-approve-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_1859e1f4a4d6aaf450accc4439adcbfa.jpg?Expires=1686649594&amp;Signature=cRcVNCJq3~aRFnru9E~NItiuypyktstFbbk~q8mK9KGWgPeKHV629gurDfhUOtBQpvxuf0nrKIQZj-uk-x8Jp4PJAlm1wZq2evzMtPDyBgZ~8njUOQJXnFshiPyZvdgrGBAhaqTTi9iBcxup352Z4APaWQyDJ63~2LTiA-IFPCU_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Husan
                                                            Sidhu</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Sun, 11
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">7:00 am -
                                                                5:00 pm @ Carousel management - INT</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-ts-approve-item">
                                                <a href="#approve/52/record/379951"
                                                    data-dp-analytics="waDashboardClickCard-js-ts-approve-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_f57ca2f23427cebc938a171578fed308.jpg?Expires=1686619798&amp;Signature=ceeTswZldzg5znHCuP90SIgtkrQu6ctdtuIka~bxXriuY7fHoGTA4MKBzWY45HgSME7qafPAujvblsV7XmKxReqXdPIRIFty9NRqnlV5Vzei8dsWMYT6Pj9GW7VZDeslZ7ZUnM~A~YiAu6W--W41JcixVzNvPOxx~1X~BYT9Ksw_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Dan Ngo</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Sun, 11
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">7:00 am -
                                                                3:30 pm @ Dynamix (Floor) - Operative</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-ts-approve-item">
                                                <a href="#approve/52/record/379950"
                                                    data-dp-analytics="waDashboardClickCard-js-ts-approve-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=C+M&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Colin Ma</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Sun, 11
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">7:00 am -
                                                                3:00 pm @ CTX Scan - International</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-ts-approve-item">
                                                <a href="#approve/52/record/379955"
                                                    data-dp-analytics="waDashboardClickCard-js-ts-approve-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=A+A&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Abdinasir
                                                            Ahmed</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Sun, 11
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">7:00 am -
                                                                5:00 pm @ Carousel management - INT</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-ts-approve-item">
                                                <a href="#approve/52/record/379953"
                                                    data-dp-analytics="waDashboardClickCard-js-ts-approve-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_f88f32c6bf276cf746f5b5b979e4f2d8.jpg?Expires=1686624448&amp;Signature=YrCiuVKCkQSsgzaNL-sOqyFTCFHTd8ZurWRQyciPMt3d05Rvtbdy4mKAoI5RoTWRNcdeZgvldc5JNV1unEh0Gx7aR6cGjacQuQXHJygcV5soM3ygoMhy-mOUv1bbkmI~YLsQSnKApORB2FLjbjAEt9TOy53ekqNDiSP0pav5vrs_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Lioune
                                                            Porte</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Sun, 11
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">7:00 am -
                                                                3:30 pm @ Carts - Operative</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-ts-approve-item">
                                                <a href="#approve/52/record/379939"
                                                    data-dp-analytics="waDashboardClickCard-js-ts-approve-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=H+L&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Hung Lu</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Sun, 11
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">6:00 am -
                                                                6:00 pm @ IOC - Commander</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-ts-approve-item">
                                                <a href="#approve/52/record/379933"
                                                    data-dp-analytics="waDashboardClickCard-js-ts-approve-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=M+C&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Man Yee
                                                            Chow</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Sun, 11
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">6:00 am -
                                                                6:00 pm @ Link - Operative</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-ts-approve-item">
                                                <a href="#approve/52/record/379937"
                                                    data-dp-analytics="waDashboardClickCard-js-ts-approve-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=K+D&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Karandeep
                                                            Dhami</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Sun, 11
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">6:00 am -
                                                                6:00 pm @ INT - Team Lead</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-ts-approve-item">
                                                <a href="#approve/52/record/379941"
                                                    data-dp-analytics="waDashboardClickCard-js-ts-approve-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=G+S&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Glenn
                                                            Sison</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Sun, 11
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">6:00 am -
                                                                2:30 pm @ EBS - Team Lead</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-ts-approve-item">
                                                <a href="#approve/52/record/379938"
                                                    data-dp-analytics="waDashboardClickCard-js-ts-approve-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_a9404b6cb65161a76848437452f162d1.jpg?Expires=1686650333&amp;Signature=aP2x9wpxcp21R0TEocPxq6MWxw6tAy8Dv-7MiKabHpEc5VJqlhmlmTAi-1tjG8RqacASjKlP0hVz2xCj1Gwg5RtLS9SVZgppfayNo1Ad9KBgIGPZnNcQgpeOQpoa3gP7lemPtZkJNkhDpmaIHCHNGe3p-S9m-jkR9IJPhKN3m-g_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Bryan</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Sun, 11
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">6:00 am -
                                                                1:30 pm @ Zone support - DOM</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--    to change Id name -->
                        <div class="my-dashboard-column u-relative" style="z-index: 1;">
                            <div class="text--large u-bold">What's happening?</div>
                            <div id="ds-whats-happening" class="margin-none">
                                <div class="js-ds-whats-happening-placeHolder ds-empty-holder text-center hide">
                                    <img class="ds-empty-img lazyload"
                                        data-src="https://d2sebmzxyyulvv.cloudfront.net/cffad1139f1dc662afee6e900cc5cfc8a312f59e/images/dashboard/whatshappening.png"
                                        alt="">
                                    <div class="ds-empty-txt u-zindex-reset">
                                        <strong>Dream Team</strong>
                                        <p class="margin-none">Your team is just awesome.</p>
                                    </div>
                                </div>
                                <div class="m-myWidget-item">
                                    <div class="dashboard-card-wrapper js-dashboard-card-wrapper expended"
                                        data-ds-url="deputec_today_late">
                                        <div class="dashboard-card js-dashboard-card"
                                            data-dp-analytics="waDashboardExpandCard-deputec_today_late">
                                            <strong class="js-dashboard-main-title">4 Running Late</strong>
                                            <div class="margin-none">
                                                <small class="co-text-secondary js-dashboard-sub-title"></small>
                                            </div>
                                            <i class="di-down-5"></i>
                                            <span class="di-clock-2 feature-icon"></span>
                                        </div>
                                        <ul class="dashboard-card-list js-dashboard-card-list margin-none">
                                            <li class="dc-list-item av-left js-today-late-item">
                                                <a href="#team/2033"
                                                    data-dp-analytics="waDashboardClickCard-js-today-late-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=J+S&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Jaspreet
                                                            Singh</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Today, 12
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">Shift Start:
                                                                4:00 am</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-today-late-item">
                                                <a href="#team/1961"
                                                    data-dp-analytics="waDashboardClickCard-js-today-late-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=P+F&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Paul F
                                                            Fernandes</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Today, 12
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">Shift Start:
                                                                5:00 am</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-today-late-item">
                                                <a href="#team/1423"
                                                    data-dp-analytics="waDashboardClickCard-js-today-late-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_a9563e1a5a6e412e685fe0b01104b06a.jpg?Expires=1686636443&amp;Signature=frlT2byX0Ud0LCirXBPNVXYDsydlGxhPFQPA4TWKD2cGSOe9Zaki6E4Y1tx0Bqu0gWUcfHsCqlu~08HhNlrC9PhMJxJfAxaj0MJIpcJU34EcyFhPSoE1iX9S0SHKLeg-VTXo4OCDS-Ut2Idc8dh6pz1zzY0QBTyxglkApKoxf3Q_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Mitch
                                                            Chubey</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Sun, 11
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">Shift Start:
                                                                7:00 pm</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-today-late-item">
                                                <a href="#team/1626"
                                                    data-dp-analytics="waDashboardClickCard-js-today-late-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=C+S&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Claire
                                                            Saillard</strong>
                                                        <div class="margin-none"><strong class="\'gray\'">Sun, 11
                                                                Jun</strong>
                                                        </div>
                                                        <div class="margin-none"><small class="gray">Shift Start:
                                                                8:00 am (absent)</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="m-myWidget-item">
                                    <div class="dashboard-card-wrapper js-dashboard-card-wrapper expended"
                                        data-ds-url="deputec_today_on_leave">
                                        <div class="dashboard-card js-dashboard-card"
                                            data-dp-analytics="waDashboardExpandCard-deputec_today_on_leave">
                                            <strong class="js-dashboard-main-title">21 People On Leave</strong>
                                            <div class="margin-none">
                                                <small class="co-text-secondary js-dashboard-sub-title"></small>
                                            </div>
                                            <i class="di-down-5"></i>
                                            <span class="di-holiday feature-icon"></span>
                                        </div>
                                        <ul class="dashboard-card-list js-dashboard-card-list margin-none">
                                            <li class="dc-list-item av-left js-on-leave-item">
                                                <a href="#team/1142/leave/6083"
                                                    data-dp-analytics="waDashboardClickCard-js-on-leave-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_1dcf470d7be2c999c3ff9e0ae7f08430.jpg?Expires=1686643423&amp;Signature=C4L4D449p8bqt1xvVrALtaqYtDBtsS3aIV6OUE2FX96J319N4OID46VJ7snyQdKXB9UwLOAfBJo~J8i82-1qZFasDw0EEZ18gHCrPReBUG8lM21Xvw~YcUDkLhwCzgIQVbF9PBeR7tdj35nSkf~KeRCj9hzmg1assUIkXM8doAY_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Dezio
                                                            Fernandes</strong>
                                                        <div class="margin-none"><small class="gray">Mon Jun 12,
                                                                2023 to Mon Jun 12, 2023</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-on-leave-item">
                                                <a href="#team/1630/leave/5834"
                                                    data-dp-analytics="waDashboardClickCard-js-on-leave-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=R+H&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>REDOUANE
                                                            HAMIDA</strong>
                                                        <div class="margin-none"><small class="gray">Mon Jun 12,
                                                                2023 to Tue Jun 13, 2023</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-on-leave-item">
                                                <a href="#team/1673/leave/6086"
                                                    data-dp-analytics="waDashboardClickCard-js-on-leave-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_769ca97c321843fbc2016d4a41622186.jpg?Expires=1686640755&amp;Signature=D-pcnU4-aHN5yxB-eh8s6UUpFIRGq9ju6WK32f0KvTJL6wfNJAP-vuj5Hu5nKjuG1mWnBFBeU19OwWs9aWnN8mIoYtIvf8jOAtCWYAPvcMjZXyX3s-TONg5-8ypyt8D2iMI4WYJhhkC6iMdmUp4TgJUCrv438Wzs26kVMjUb3go_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Roque Luis
                                                            Diniz</strong>
                                                        <div class="margin-none"><small class="gray">Sat Jun 10,
                                                                2023 to Mon Jul 17, 2023</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-on-leave-item">
                                                <a href="#team/1739/leave/6069"
                                                    data-dp-analytics="waDashboardClickCard-js-on-leave-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_e05e6a206ac35bc1d17d5b3499639ee4.jpg?Expires=1686646008&amp;Signature=aPMi0juXs~AJ0l9nmHh5W1JN6cqV~TIuDjXiwa9TI4ha8i3ssTgwIVcQ5CG2s4f8SIj-ZKU~gvwjw4Uve8VM6lruwk~bdeDip~n-BL-aH2C9BcS-eGi01Yfjwgtc5PeDZIxZhzAK6VNRArLISoI9bGpXUpkBLV9O9oVrbwBjJ0k_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Avinash
                                                            Mascarenhas</strong>
                                                        <div class="margin-none"><small class="gray">Sat Jun 10,
                                                                2023 to Mon Jun 12, 2023</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-on-leave-item">
                                                <a href="#team/1660/leave/6035"
                                                    data-dp-analytics="waDashboardClickCard-js-on-leave-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_3546baee4a4d106088b6658aa6861f45.jpg?Expires=1686638465&amp;Signature=dCPjUeiVai3-op42i9MP44DmFmV6v4bq7icP9p1BBmOXA9z2PoiK1VFAPXZO1J96xpE6z2GiVnYcf3IXljwgois0IVNLJqCXgo5tgT2fFE3IgeaEgQ2y3sXl1MhAll43sIdUHwn95P0nslKhwwML36JBPTIWojznLF96igGDh7s_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Joseph
                                                            Mascarenhas</strong>
                                                        <div class="margin-none"><small class="gray">Thu Jun 8,
                                                                2023 to Tue Jun 27, 2023</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-on-leave-item">
                                                <a href="#team/692/leave/6072"
                                                    data-dp-analytics="waDashboardClickCard-js-on-leave-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_334f2da6f19ef13ff670941da0e008ca.jpg?Expires=1686640755&amp;Signature=dsfOZdqlcNyqhU1jVaAGmFe8uXEcO6oo9pG4Y26c1oGq0UkYHBRi8VQOX~ggMjqJ0uzyzO3Vfqhunec5rskK5RdDwXYUJJ0ptoXAQe5tQPuEaePzWOBKMW16oHR7um8fkoSDkQryTAo1etDffKyurjclsJfkDr9L5fS10s2r~CE_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>SURESH
                                                            LIMBU</strong>
                                                        <div class="margin-none"><small class="gray">Mon Jun 5,
                                                                2023 to Sun Jul 2, 2023</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-on-leave-item">
                                                <a href="#team/838/leave/5751"
                                                    data-dp-analytics="waDashboardClickCard-js-on-leave-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_e2ce011980e035aab61eeaa83f59069c.jpg?Expires=1686626192&amp;Signature=QP5N~A7uUg-ognXYaqxzI7DmIi46h-t2nVubBxCl-AReafRhRgsXdXCiFd8iyaRRbOAaoK8AqjYeEPTNK7CHJpBpORyqVoLjLkwr~sFObr~ny0W41q-3~iEgywoYr1tcc-RrswQkqvgLPoeyxNlue3wjamYEpvIGDDT6bTQ~BwI_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>ZAHED
                                                            TARAJ</strong>
                                                        <div class="margin-none"><small class="gray">Mon Jun 5,
                                                                2023 to Wed Jun 28, 2023</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-on-leave-item">
                                                <a href="#team/509/leave/5598"
                                                    data-dp-analytics="waDashboardClickCard-js-on-leave-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_83afa93a56821da43dc85613684104e8.jpg?Expires=1686640064&amp;Signature=BGbA1DnXlPCjo3uNoOm1ohlQI7wa03YNPjQVvrl-7OWDsFgnGXMipaSX7FGzCMxmitrqaVfAkaCJ-v3C92y9P9ZkvX8MKsb16quGouywGKItUa9bjgZ9rPRcdD6hhsQuuYW4vHkNy8hjhG~ItnVmrVaDTaLCPseysng4a0sWbpI_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>DAVID
                                                            FERNANDES</strong>
                                                        <div class="margin-none"><small class="gray">Sun Jun 4,
                                                                2023 to Wed Jul 5, 2023</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-on-leave-item">
                                                <a href="#team/1524/leave/5770"
                                                    data-dp-analytics="waDashboardClickCard-js-on-leave-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=L+D&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Lauren
                                                            DiCiacca</strong>
                                                        <div class="margin-none"><small class="gray">Sat Jun 3,
                                                                2023 to Wed Jun 14, 2023</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-on-leave-item">
                                                <a href="#team/653/leave/6062"
                                                    data-dp-analytics="waDashboardClickCard-js-on-leave-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_7a9752ec8f37f3f1417cbab3bfc2f9c4.jpg?Expires=1686627029&amp;Signature=Tw2G0-CBBo55xDCk-0WWTlCPDTxc9bvETQGX2rIAE2X2JaJe40SWQjqBRCvorTzNrsow5y7aG-zC9uaj7ylnrtCgo7yKnx6ohoO8qGZpkUY2GUH0WVKmhKNmK~jYApVQ15AHMDGclD1RnWgjzY7pdeGz4r5miQLIX0p33u-rAws_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>LINUS
                                                            GOMEZ</strong>
                                                        <div class="margin-none"><small class="gray">Thu Jun 1,
                                                                2023 to Fri Jun 30, 2023</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-on-leave-item">
                                                <a href="#team/1834/leave/5411"
                                                    data-dp-analytics="waDashboardClickCard-js-on-leave-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=R+P&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Rosada
                                                            Pereira</strong>
                                                        <div class="margin-none"><small class="gray">Wed May 31,
                                                                2023 to Sun Jul 2, 2023</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-on-leave-item">
                                                <a href="#team/1019/leave/5867"
                                                    data-dp-analytics="waDashboardClickCard-js-on-leave-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_18359c605f1d03ffa2b63782cbeaa725.jpg?Expires=1686642493&amp;Signature=MPFSL5XlkSNJEeIytOM5Qa4csnjwx-jluRn~Xi5tUW9sfmrlosd-THRi3qgi-JYL2Nh7JCQvZHcht1mjF2O7Z5-eKWj5WRqWmqrgSa3pNmvvI4ADzx0gRuNllhYuD39c8aphlb7~c5e~dvb1T6eVvm7VKCieW3sOAfc4YfPCWj8_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Ashley
                                                            Dias</strong>
                                                        <div class="margin-none"><small class="gray">Mon May 29,
                                                                2023 to Mon Jul 3, 2023</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-on-leave-item">
                                                <a href="#team/459/leave/5566"
                                                    data-dp-analytics="waDashboardClickCard-js-on-leave-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_677ac3591fc3a0bc55613f002e2308d6.jpg?Expires=1686613569&amp;Signature=SbDll2U3TnDL3cvCXep-LIpUxS~eWtvOM1hBHBOvy~f-Z5K9fY5OQhB8QnTNSzWR0K0SQORO8~vJpO1MztfKX-ntQULbAYva0abgHmleGezqAj3~telU5KBPYTN7~OqlLodhvxqUWdWGDl4iyBaJXfO29XL7AmQ37DqPis5-caE_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>MENINO
                                                            FERNANDES</strong>
                                                        <div class="margin-none"><small class="gray">Thu May 25,
                                                                2023 to Sat Jul 8, 2023</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-on-leave-item">
                                                <a href="#team/961/leave/5992"
                                                    data-dp-analytics="waDashboardClickCard-js-on-leave-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_ac334fce0af29d9db6b5fd476e2bc7c2.jpg?Expires=1686654033&amp;Signature=OneZIZcpt6RPlZe~HZiKvVWeH0TzuHMo0DgHNQojcrWuiEFIKwN9q~7yy~dxu-hvS4L2BqS6Ru0hZHD~1cyiQhy3~gkBYhv2ERTZaVuMdbtjpsFwT7Ba0YpDhyT5TKdZ2AYY0XdJmGo52qE5U7NdS-SnqXDkSBbMLxZdr~CXuPI_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>EDNICO
                                                            FERNANDES</strong>
                                                        <div class="margin-none"><small class="gray">Wed May 24,
                                                                2023 to Thu Jun 15, 2023</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-on-leave-item">
                                                <a href="#team/1833/leave/6003"
                                                    data-dp-analytics="waDashboardClickCard-js-on-leave-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_2e7499775e962e91bdf888a1c0902d9b.jpg?Expires=1686646008&amp;Signature=XgFF6RkVdpetBmmm6aT~tTQkt-KMnblul3yYunVgKaRuQS1UyGWhTYeLrzvs7fffgsYRri9edCCUF~7bTyGezbYRdGqf1-0W-TTr~tYDabKDFtNZbnA8jrmTc9P3Mag1C2eBVuf-4GEuIEeRQVLoB611iE-BS2dK~mc7~rF05HQ_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Maria Guilhermina
                                                            Antoneta Cardozo</strong>
                                                        <div class="margin-none"><small class="gray">Fri May 19,
                                                                2023 to Tue Jun 13, 2023</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-on-leave-item">
                                                <a href="#team/1646/leave/5457"
                                                    data-dp-analytics="waDashboardClickCard-js-on-leave-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_3e7d16130e585a91b576aa6b68775e51.jpg?Expires=1686634614&amp;Signature=MKtaO13zD9a6LpImqAT1nfAUZE3uB8Rpv3cziK8zBeXbTiKwZLe4q5aLnKQ3rQZdb6XSc0Q5s6lqpB7sBeucY-aY~NRSMvDFurlLgVFm6bq6VhhEXMwhfLkh7NV3uShorPJBRxYY59btJo5zEZ~KvN7HQFnUuNrtntnUePeCHuY_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Domingos
                                                            Dias</strong>
                                                        <div class="margin-none"><small class="gray">Thu May 18,
                                                                2023 to Wed Jun 28, 2023</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-on-leave-item">
                                                <a href="#team/472/leave/5973"
                                                    data-dp-analytics="waDashboardClickCard-js-on-leave-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_d609d81f52e76703923e81f8e7d21137.jpg?Expires=1686640755&amp;Signature=HM8OGXqrTkxHHaKkLZHPDtUoVp6~m9WMWfHwh8J4CyVy5el9at-O3U403RpVgXnKDhcUxKR95ZgeYxWtauMNo3HJ6Zhn~BAKSx8n8366kaEA4s8YnffE84NVg9kh5XGKm4ehOi7lCcJnDPNhHC6pfsK-DeC3aiG9JTK9j5vt5so_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>JOAQUIM
                                                            MASCARENHAS</strong>
                                                        <div class="margin-none"><small class="gray">Mon May 15,
                                                                2023 to Tue Jun 20, 2023</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-on-leave-item">
                                                <a href="#team/866/leave/5522"
                                                    data-dp-analytics="waDashboardClickCard-js-on-leave-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=R+F&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>RICHARD
                                                            FERNANDES</strong>
                                                        <div class="margin-none"><small class="gray">Mon May 15,
                                                                2023 to Fri Jun 30, 2023</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-on-leave-item">
                                                <a href="#team/881/leave/5571"
                                                    data-dp-analytics="waDashboardClickCard-js-on-leave-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_abf34f2f3bf6a8ff21703a40a6002596.jpg?Expires=1686646008&amp;Signature=UQSXrsbmeGHfkNaUgA36VP~jGBpvb~7ZubCaAAqwKTw8EFTlDKHuEPDBOuf~FkADrIP0E0SFXd~jTrUDw1K9mDvzYYJvPRnPPSDyHSxbGPXYri084OMgFu0Iq2rNr3yQo-IoKNGvsJ-Scj8jCLSXVkiJ5fIDkfIFmviLF~vHiQY_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Vicente Da
                                                            costa</strong>
                                                        <div class="margin-none"><small class="gray">Mon May 15,
                                                                2023 to Tue Jun 20, 2023</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-on-leave-item">
                                                <a href="#team/943/leave/5684"
                                                    data-dp-analytics="waDashboardClickCard-js-on-leave-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_285950ac005c79c5d9aa2211de067180.jpg?Expires=1686623135&amp;Signature=Dswy5slErWIm0b3Vd6Ol9Bu4YSjX4bCXayjZlGhZW8dpoPNF8s3mNE6B6PBMaw3Eni5j87U7rLrphNQeWRa6t2Pafaq5LEU7U196u51f0xxkoQgKRb76b1NJZGGyWBVa6BbwrxjHMWC1gz~OzOnh3pmJeeIDhYb1PapIAF30Qcc_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>JOSEPH C
                                                            FERNANDES</strong>
                                                        <div class="margin-none"><small class="gray">Mon May 15,
                                                                2023 to Mon Jun 19, 2023</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-on-leave-item">
                                                <a href="#team/535/leave/5866"
                                                    data-dp-analytics="waDashboardClickCard-js-on-leave-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_82e5a800fae0b53dce35c743ca6c0ea8.jpg?Expires=1686627029&amp;Signature=eFqVc5WuqGG8dy9zkqCCU78v11NRzbCJOLsvVy4gh~CKKeuIa2T~cWtLlmH9q6vBjdgsHQdowYs3lErGlFAkvHCPxQrW0uMHcz5IM4jbmd~kRKq5lDgWLEl8kGWcziXnFUwSbr2eLvv8gbhxobYcBguWhnlyghWz2Kk-xwOkMLE_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>PETER SANTAN
                                                            BARRETO</strong>
                                                        <div class="margin-none"><small class="gray">Tue May 9,
                                                                2023 to Thu Jun 22, 2023</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="m-myWidget-item">
                                    <div class="dashboard-card-wrapper js-dashboard-card-wrapper expended"
                                        data-ds-url="deputec_today_birthday">
                                        <div class="dashboard-card js-dashboard-card"
                                            data-dp-analytics="waDashboardExpandCard-deputec_today_birthday">
                                            <strong class="js-dashboard-main-title">6 Birthdays</strong>
                                            <div class="margin-none">
                                                <small class="co-text-secondary js-dashboard-sub-title"></small>
                                            </div>
                                            <i class="di-down-5"></i>
                                            <span class="fa fa-birthday-cake feature-icon"></span>
                                        </div>
                                        <ul class="dashboard-card-list js-dashboard-card-list margin-none">
                                            <li class="dc-list-item av-left js-birthday-item">
                                                <a href="#team/737"
                                                    data-dp-analytics="waDashboardClickCard-js-birthday-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=L+P&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>LAZALY MINGUEL
                                                            PEREIRA</strong>
                                                        <div class="margin-none"><small class="gray">45 years old
                                                                - Today, 12 Jun</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-birthday-item">
                                                <a href="#team/1645"
                                                    data-dp-analytics="waDashboardClickCard-js-birthday-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=K+R&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Khairul
                                                            Rahman</strong>
                                                        <div class="margin-none"><small class="gray">24 years old
                                                                - Today, 12 Jun</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-birthday-item">
                                                <a href="#team/674"
                                                    data-dp-analytics="waDashboardClickCard-js-birthday-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=A+J&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>ABDI
                                                            JAMA</strong>
                                                        <div class="margin-none"><small class="gray">58 years old
                                                                - Tomorrow, 13 Jun</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-birthday-item">
                                                <a href="#team/620"
                                                    data-dp-analytics="waDashboardClickCard-js-birthday-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=C+F&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Caetano domnic
                                                            Sebastio fernandes</strong>
                                                        <div class="margin-none"><small class="gray">39 years old
                                                                - Sat, 17 Jun</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-birthday-item">
                                                <a href="#team/851"
                                                    data-dp-analytics="waDashboardClickCard-js-birthday-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=A+O&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Aleck
                                                            O'Neill</strong>
                                                        <div class="margin-none"><small class="gray">55 years old
                                                                - Sun, 18 Jun</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-birthday-item">
                                                <a href="#team/1456"
                                                    data-dp-analytics="waDashboardClickCard-js-birthday-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=N+P&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Natasha
                                                            Parveen</strong>
                                                        <div class="margin-none"><small class="gray">36 years old
                                                                - Sun, 18 Jun</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="m-myWidget-item">
                                    <div class="dashboard-card-wrapper js-dashboard-card-wrapper expended"
                                        data-ds-url="deputec_ts_wk_anniversary">
                                        <div class="dashboard-card js-dashboard-card"
                                            data-dp-analytics="waDashboardExpandCard-deputec_ts_wk_anniversary">
                                            <strong class="js-dashboard-main-title">22 Work Anniversaries</strong>
                                            <div class="margin-none">
                                                <small class="co-text-secondary js-dashboard-sub-title"></small>
                                            </div>
                                            <i class="di-down-5"></i>
                                            <span class="di-heart feature-icon"></span>
                                        </div>
                                        <ul class="dashboard-card-list js-dashboard-card-list margin-none">
                                            <li class="dc-list-item av-left js-anniversary-item">
                                                <a href="#team/1487"
                                                    data-dp-analytics="waDashboardClickCard-js-anniversary-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=M+S&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Manvir
                                                            Sekhon</strong>
                                                        <div class="margin-none"><small class="gray">2 years -
                                                                Today, 12 Jun</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-anniversary-item">
                                                <a href="#team/1392"
                                                    data-dp-analytics="waDashboardClickCard-js-anniversary-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_a9ec2a090eed20798911d5c5819397a1.jpg?Expires=1686635479&amp;Signature=KgeJ6UtYYlCUudX5B78iECD8-bCKBh4PxZ25PCgcGxu83QDt7-yJAa2Uxx1gE9Sh0CRdFCOTGRUdPK9zqsyLJKfWmbV5yzj~AvhVZddAy0QlxVhIY6DQvgQ00g3ByWLBd2430Mg0~i6vMCoHmLCbUl8rMTdB5ek-k77g2jKNlR0_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Chris
                                                            Kompst</strong>
                                                        <div class="margin-none"><small class="gray">3 years -
                                                                Tomorrow, 13 Jun</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-anniversary-item">
                                                <a href="#team/1726"
                                                    data-dp-analytics="waDashboardClickCard-js-anniversary-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=H+S&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>HENRY
                                                            SANDOVAL</strong>
                                                        <div class="margin-none"><small class="gray">1 year - Wed,
                                                                14 Jun</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-anniversary-item">
                                                <a href="#team/1379"
                                                    data-dp-analytics="waDashboardClickCard-js-anniversary-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_1edee1c47df42047a89d90cebe0262c3.jpg?Expires=1686628548&amp;Signature=Lts3NKec~nwj7wb4oOZ7Dtcojhr2-82-ae7qDobbI-VsvhiXjeQOM7IItJpFiat4V0ysei3jE8N7PrQDNr2S9YgHEjNubLP5LJ5-03BbbNHBVmvDgMGdTcqHE72eQ6vLUtR~7XS9HqFh23ikSiA14zbJ1BF4pp11hHm3zxjZuCs_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Jasraj
                                                            Saroa</strong>
                                                        <div class="margin-none"><small class="gray">3 years -
                                                                Wed, 14 Jun</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-anniversary-item">
                                                <a href="#team/406"
                                                    data-dp-analytics="waDashboardClickCard-js-anniversary-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_002b41d84d0e6cce2607bafdf08992ee.jpg?Expires=1686640755&amp;Signature=HERZkzSallr5GmXEqSIf-HekUjDLFOp9cU4MRxBBYatRo1M22koqk8oWDtyQf6J5aJZRal8l-mOUk5f7v1FFKtzeEDGwsbyh6rvk184uOO4yj0uRa5wS~u-cJSC1u5Cssf1rWWTRpeiCGG2Xp--XYlDLWyLL6AYLj9storMqJEY_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>MOHAMED SHUKRI
                                                            ABDI</strong>
                                                        <div class="margin-none"><small class="gray">1 year - Wed,
                                                                14 Jun</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-anniversary-item">
                                                <a href="#team/1712"
                                                    data-dp-analytics="waDashboardClickCard-js-anniversary-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_0312bd01ed8c725a7b9bd1e0ca0b0275.jpg?Expires=1686635548&amp;Signature=cG0ssqhIKMPiQWo~nSX8~iZuMB7jB-FB4hjnqjXImyBSXs0F0n236gz4beTKOF8o1Xl72HO-cVwcBrRKXzN~~6xMECGjGVovAAEoICtphADTPwhC608Oa3MenK-rWwWhG-7eHTDOTrCpdCWk8tOCtFPtncYfv340L7xcWKF3h94_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Salim Murad
                                                            Bhayani</strong>
                                                        <div class="margin-none"><small class="gray">1 year - Wed,
                                                                14 Jun</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-anniversary-item">
                                                <a href="#team/422"
                                                    data-dp-analytics="waDashboardClickCard-js-anniversary-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_9a7bcea1e7617b0428b6bbce58441a8e.jpg?Expires=1686640755&amp;Signature=AMEV7vdWC7YW9jTcbv5uP63RmJC45UWB7V~0a0IEqMY0yjBPUWy0F284VoLEDLzjt~U7DVqyWqrxRPsWKwCE-sO0LIz715IzIfq2blbthvEawI5Gv5rxgpqylokJNdTlXom7eYZKOrfiHIqIeHSoMiSwAOo4uC5fGMfIQt1~3iM_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>SEBASTIAO
                                                            CARVALHO</strong>
                                                        <div class="margin-none"><small class="gray">1 year - Wed,
                                                                14 Jun</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-anniversary-item">
                                                <a href="#team/1426"
                                                    data-dp-analytics="waDashboardClickCard-js-anniversary-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=S+L&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Slav
                                                            Lukic</strong>
                                                        <div class="margin-none"><small class="gray">3 years -
                                                                Wed, 14 Jun</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-anniversary-item">
                                                <a href="#team/1406"
                                                    data-dp-analytics="waDashboardClickCard-js-anniversary-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_396e11e2207dee094d49e0a3aeed5b97.jpg?Expires=1686612702&amp;Signature=Wh5GW0KzlDzjk~r~qEvzlwh88NimfbCHWHp8a4U4I~kuO4PcpHn4bpZw8EuxalaOUYXCKI11VIi~jWfj8f22MSFvuNHVvrX1fxGAZbG7k9eyPGoq1-SVbiidOjfwMMp5b9jrFafMFixgGOOJtDycgiHavwhJr8-PHE1BVT~4~n0_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Dario</strong>
                                                        <div class="margin-none"><small class="gray">3 years -
                                                                Thu, 15 Jun</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-anniversary-item">
                                                <a href="#team/1378"
                                                    data-dp-analytics="waDashboardClickCard-js-anniversary-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=H+L&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Hung Lu</strong>
                                                        <div class="margin-none"><small class="gray">3 years -
                                                                Thu, 15 Jun</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-anniversary-item">
                                                <a href="#team/1424"
                                                    data-dp-analytics="waDashboardClickCard-js-anniversary-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_74db6f849cb3b2c784630721e71209f0.jpg?Expires=1686654677&amp;Signature=YRKjHvY-3YzHjEAk-1K3EXI2EK82eX4oy9PqB-pD8dSGMDdeAI8Y~Gc-AxiO7ZIY7sucx0qyhZ8alCXLaiTOEejNez-f0n9nOfZVG7oDed07NpMlmxDn-jukmGzHy~aR1r05fpEWvzxcB5PUoSfnLeHmIhszDFlVckXldQdCwLY_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Liam
                                                            Henry</strong>
                                                        <div class="margin-none"><small class="gray">3 years -
                                                                Thu, 15 Jun</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-anniversary-item">
                                                <a href="#team/1383"
                                                    data-dp-analytics="waDashboardClickCard-js-anniversary-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_dfbca0d6192c90aa9f483158e5a5f36d.jpg?Expires=1686645314&amp;Signature=BZ2a-cRsbNIZxUbZpnzmMxzV2HYQbSkyI1VK~XzzAG4GDavuBoexIvt2HAHtFOyxBGMdBaFjOn0vQ72YeE4VLzpWS9H9ciNOTRqAP~~4gipnCsRIGwYDTcMNoI7YfnVUVMDVaOjk0J7nPdMmOBav0112GZW-bMDmB6xqsz8IQrk_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Lindsay</strong>
                                                        <div class="margin-none"><small class="gray">3 years -
                                                                Thu, 15 Jun</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-anniversary-item">
                                                <a href="#team/1727"
                                                    data-dp-analytics="waDashboardClickCard-js-anniversary-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=A+N&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Anthony
                                                            Nisperos</strong>
                                                        <div class="margin-none"><small class="gray">1 year - Fri,
                                                                16 Jun</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-anniversary-item">
                                                <a href="#team/1377"
                                                    data-dp-analytics="waDashboardClickCard-js-anniversary-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_7fc06c23492f6c5bc9531a6e3364783c.jpg?Expires=1686651405&amp;Signature=TbuIo-qwuNmz990S4iHG3ii1aNpcmhRSYoId6rh7UOKovyOPNC85BC1PkNMPvtJ4y~12TuLMxciuokpq3C~8OA2ARfGv28Wp2QE5mhf3Qtbc8w50-ivpPnHCfWZW1ZGhNENnGxagKUVsVFVVY0kvc6zToSb70jPqCf0cqDqSQLA_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Henry
                                                            Maramo</strong>
                                                        <div class="margin-none"><small class="gray">3 years -
                                                                Fri, 16 Jun</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-anniversary-item">
                                                <a href="#team/1382"
                                                    data-dp-analytics="waDashboardClickCard-js-anniversary-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=L+G&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Leo
                                                            Gonzales</strong>
                                                        <div class="margin-none"><small class="gray">3 years -
                                                                Fri, 16 Jun</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-anniversary-item">
                                                <a href="#team/1390"
                                                    data-dp-analytics="waDashboardClickCard-js-anniversary-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_bbe5b4785b0d76f3f85bab3257cc1deb.jpg?Expires=1686652086&amp;Signature=TFSPmZ-NnLWVQY1muS8s-F31ZtxS~33zvlnrjhLr9ncqDfn0StmHM5gV5hS351VRwTPCpnCNKCaHD5zFK3KXEtj8jMl1-U6WLI8HDBN-iMERygJM03d8KLgYa4wbb-K2XjA~83Ad8mFbpsDAjuVoZPSqFOGCNU0Uvt9mhZnw4-Y_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Tom Tsai</strong>
                                                        <div class="margin-none"><small class="gray">3 years -
                                                                Fri, 16 Jun</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-anniversary-item">
                                                <a href="#team/1384"
                                                    data-dp-analytics="waDashboardClickCard-js-anniversary-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=M+C&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Man Yee
                                                            Chow</strong>
                                                        <div class="margin-none"><small class="gray">3 years -
                                                                Sat, 17 Jun</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-anniversary-item">
                                                <a href="#team/1423"
                                                    data-dp-analytics="waDashboardClickCard-js-anniversary-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_a9563e1a5a6e412e685fe0b01104b06a.jpg?Expires=1686636443&amp;Signature=frlT2byX0Ud0LCirXBPNVXYDsydlGxhPFQPA4TWKD2cGSOe9Zaki6E4Y1tx0Bqu0gWUcfHsCqlu~08HhNlrC9PhMJxJfAxaj0MJIpcJU34EcyFhPSoE1iX9S0SHKLeg-VTXo4OCDS-Ut2Idc8dh6pz1zzY0QBTyxglkApKoxf3Q_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Mitch
                                                            Chubey</strong>
                                                        <div class="margin-none"><small class="gray">3 years -
                                                                Sat, 17 Jun</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-anniversary-item">
                                                <a href="#team/1386"
                                                    data-dp-analytics="waDashboardClickCard-js-anniversary-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_329f2ea71e1c08d4596ba73a863d62d2.jpg?Expires=1686622670&amp;Signature=TFG4aCUD-S2JYuSLcha~eG7KYWxBwqrfDsDYXHWPt0DzIqCHwFxjn9wNVpMV1Jghw7nGdageQXgSYJ~nR7tDnbg7g8CKSJVDEcF0sKFRN4xjvjOBZPrSAaJDl8pAaOTwEor8~xF0qIVnT1x9aQjTjlk5C-KL3QNklpyPqLwravA_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Noel Casil
                                                            Cabuyadao</strong>
                                                        <div class="margin-none"><small class="gray">3 years -
                                                                Sat, 17 Jun</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-anniversary-item">
                                                <a href="#team/1387"
                                                    data-dp-analytics="waDashboardClickCard-js-anniversary-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_49f0805ce1ad49050ad892814ddcb555.jpg?Expires=1686638582&amp;Signature=GzU4CSphG~iLd61lMJsuIQ~sfagcrPghgTDNF1VQporY4dZNozYu56S0-iGygcacQOFeuRFFpfZsq6l16VtF-CFK8aVoogJB-6gxIbtpiqeaCoYE1DaqQA0ENceFvlCZjt2vLUTURexzcSTvGv3Mx7GDLEUzA2wSqFHuWWCbnhw_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Sarita
                                                            Nair</strong>
                                                        <div class="margin-none"><small class="gray">3 years -
                                                                Sat, 17 Jun</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-anniversary-item">
                                                <a href="#team/1391"
                                                    data-dp-analytics="waDashboardClickCard-js-anniversary-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_3df5c99e421c994a577b0d260a43e8b7.jpg?Expires=1686638582&amp;Signature=NcVRuLmu6J1s74nAPpq9ZyJi4DVVk2XcLK6o-Aojb2rBUJ2lLREv~LrytQZmGnT9bGAoyT-ymt~qbQ2D1-HXsV-JnNUxrJSCpjpF~4eOe1t2B1O0c~-Tq~jSdIlbpTCz~HJy4rBxr8nSHxiWseoQC6MTMS4CKBgXuDNXSz-k-VE_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Zaid Ali</strong>
                                                        <div class="margin-none"><small class="gray">3 years -
                                                                Sat, 17 Jun</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dc-list-item av-left js-anniversary-item">
                                                <a href="#team/1854"
                                                    data-dp-analytics="waDashboardClickCard-js-anniversary-item">
                                                    <img loading="lazy" class="avatar"
                                                        src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=M+B&amp;width=135&amp;height=135"
                                                        alt="">
                                                    <div class="dc-list-content margin-none">
                                                        <strong>Mirlind
                                                            Bikliqi</strong>
                                                        <div class="margin-none"><small class="gray">6 months -
                                                                Sun, 18 Jun</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ds-btn-group margin-none">
                        <div class="js-dashboard-refresh pannel-refresh btn btn-default btn-sm icon-only"
                            data-dp-analytics="waDashboardRefresh"><span class="co-icon-refresh"></span></div>
                        <div class="js-ds-pannel-toggle pannel-toggle btn btn-default btn-sm icon-only"
                            data-dp-analytics="waDashboardExpandSummary"><span class="u-deputy-font"></span></div>
                    </div>
                </div>
                <div id="my-week" class="margin-bottom my-week-calendar-container">
                    <div class="u-relative js-calendar-container my-ds-container">
                        <h3 class="margin-none">Calendar</h3>
                        <div class="m-myWeek-control-bar">
                            <div class="lpadding-none m-myWeek-controlsLeft">
                                <div class="btn-group m-myWeek-controls--laptop mr5">
                                    <button class="btn btn-default js-myWeek-control" data-direction="left"
                                        data-dp-analytics="DMWW"><i class="fal fa-chevron-left"
                                            data-direction="left"></i></button>
                                    <div class="btn btn-default u-textCenter">
                                        <span class="js-my-week-display-date">12 Jun - 18 Jun</span>
                                        <span class="caret"></span>
                                        <input class="m-datepicker-hidden hasDatepicker" id="my-week-date-picker"
                                            type="text"><button type="button"
                                            class="ui-datepicker-trigger m-datepicker-hidden">...</button>
                                    </div>
                                    <button class="btn btn-default js-myWeek-control margin-none"
                                        data-direction="right" data-dp-analytics="DMWW"><i
                                            class="fal fa-chevron-right" data-direction="right"></i></button>
                                </div>
                                <button class="btn btn-default js-showModal-AllShifts mr5" style="display: block;"
                                    data-dp-analytics="DMWU">
                                    <i class="fal fa-calendar-alt mr5"></i>
                                    <span class="js-LabelFor-All-Shift">No Upcoming Shifts</span>
                                    <span class="m-notification js-UnconfirmedNotificationCount"
                                        style="display:none;">0</span>
                                </button>
                                <button class="btn btn-default js-showModal-AvailableShifts mr5"
                                    style="display: block;" data-dp-analytics="DMAL">
                                    <span class="fal fa-calendar-plus mr5"></span>
                                    <span class="js-LabelFor-Available-Shift">Available Shifts</span>
                                </button>
                                <a class="btn btn-default js-showMyProfile margin-none" href="#profile"
                                    style="display: block;" data-dp-analytics="DMWR">Request Time Off</a>
                            </div>
                            <span class="ml10 toggle-label js-myWeek-toggleOpenShifts js-myWeek-toggleOpenShifts-span"
                                data-dp-analytics="DMWO">Show <strong class="pink">X</strong> available
                                shifts</span>
                            <label class="toggle js-myWeek-toggleOpenShifts">
                                <input class="js-myWeek-toggleOpenShifts js-myWeek-toggleOpenShifts-checkbox"
                                    type="checkbox" checked="" data-dp-analytics="DMWO">
                                <div class="background"></div>
                                <div class="toggler"></div>
                            </label>
                        </div>
                    </div>
                    <div class="m-myWeek-footer u-hidden--mobile js-myweek-total-hours-container"
                        style="display: block;">
                        <div class="myweek-total-hours"><span class="js-myweek-total-hours"> </span></div>
                    </div>
                    <div class="m-myWeek-wrapper">
                        <div class="m-loader"></div>
                        <ul id="my-week" class="m-myWeek js-equalHeight-wrapper is-showingOpenShifts">
                            <li class="m-myWeek-controls--mobile">
                                <button class="btn btn-default btn-sm js-myWeek-control" data-direction="left"
                                    data-dp-analytics="DMWW"><i class="fa fa-chevron-left"
                                        data-direction="left"></i></button>
                            </li>
                            <!--
                          -->
                            <li id="my-week-day-0" class="m-myWeek-item m-myWeek-today">
                                <div class="m-myWeek-title">Mon 12 Jun</div>
                                <div class="m-iTemHolders margin-compact">
                                    <article class="m-rosterCard-empty u-verticalAlign js-equalHeight"
                                        style="height: 170px;">
                                        <div>
                                            <div class="m-rosterCard-text text-center gray">Unscheduled</div>
                                        </div>
                                    </article>
                                </div>
                                <div class="m-myWeek-alsoRostered text--small">
                                    Scheduled<span class="u-hidden--mobile"> this day</span>
                                    <ul class="my-week-day__avatars">
                                        <li>
                                            <a class="js-myWeek-avatar" href="#" rel="tooltip"
                                                title="DEEPAK NAIK" data-my-week-day="2023-06-12">
                                                <img class="my-week-day__avatar-img ls-is-cached lazyloaded"
                                                    data-src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_fde1c48496079786d5520ff9bcafe2ce.jpg?Expires=1686624426&amp;Signature=PV3dJRSVIdP-I5Vm8KH5Enx1HZzPNlM9Qn7SNQ99X-zdTsmHmXG9iQFqzFL7wViDycqeyr2gC1cuYM~Ppq6XUKaz1YYiS~qc0IEJCryl30ebJD6X8lJr08P1BAehbL0CMNx660GHT5mK4V5KDzQLesogNDx4WR1au61oC1aTuHk_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                    src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_fde1c48496079786d5520ff9bcafe2ce.jpg?Expires=1686624426&amp;Signature=PV3dJRSVIdP-I5Vm8KH5Enx1HZzPNlM9Qn7SNQ99X-zdTsmHmXG9iQFqzFL7wViDycqeyr2gC1cuYM~Ppq6XUKaz1YYiS~qc0IEJCryl30ebJD6X8lJr08P1BAehbL0CMNx660GHT5mK4V5KDzQLesogNDx4WR1au61oC1aTuHk_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ">
                                            </a>
                                        </li>
                                        <li>
                                            <a class="js-myWeek-avatar" href="#" rel="tooltip"
                                                title="ROSARIO BARBOSA" data-my-week-day="2023-06-12">
                                                <img class="my-week-day__avatar-img ls-is-cached lazyloaded"
                                                    data-src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_b35020a622972019ff7410b38fa9d997.jpg?Expires=1686649541&amp;Signature=E55KrNSYB77FgSqVAMIMR~D6qSSx3usg4WRs~7vAj4QbDv~VzxWXR22iyVlymyLQ4bcbiscZX9ae5vOzjnYa7sWgq1d1cwF5clMMoQbLimMiP-GVkVZOWuiL54QPqR-iVvSTQgHpk9MlOy5ES-GGeRRjShEyZCs5KmTe3~k~ICY_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                    src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_b35020a622972019ff7410b38fa9d997.jpg?Expires=1686649541&amp;Signature=E55KrNSYB77FgSqVAMIMR~D6qSSx3usg4WRs~7vAj4QbDv~VzxWXR22iyVlymyLQ4bcbiscZX9ae5vOzjnYa7sWgq1d1cwF5clMMoQbLimMiP-GVkVZOWuiL54QPqR-iVvSTQgHpk9MlOy5ES-GGeRRjShEyZCs5KmTe3~k~ICY_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ">
                                            </a>
                                        </li>
                                        <li>
                                            <a class="js-myWeek-avatar" href="#" rel="tooltip"
                                                title="JOAO F CARDOSO" data-my-week-day="2023-06-12">
                                                <img class="my-week-day__avatar-img ls-is-cached lazyloaded"
                                                    data-src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_bafd4f263bee632ff3b2ea33b064a130.jpg?Expires=1686656776&amp;Signature=HO3vvrNuPuPqWRvaRcZJbBTIKW0xb8hTxcuv1AWXUx-AQP-kJy2w-XhbbvS4USjUYETJSy76OgSC1FlTchjUMtc6efugn4x8YhgOPGBY8ip3PLu-hOrgcbkP2oaLJxYldYF9~4x3ungRSrtekgZauNmpkPUOjuQ-Se1TLAzptDo_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                    src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_bafd4f263bee632ff3b2ea33b064a130.jpg?Expires=1686656776&amp;Signature=HO3vvrNuPuPqWRvaRcZJbBTIKW0xb8hTxcuv1AWXUx-AQP-kJy2w-XhbbvS4USjUYETJSy76OgSC1FlTchjUMtc6efugn4x8YhgOPGBY8ip3PLu-hOrgcbkP2oaLJxYldYF9~4x3ungRSrtekgZauNmpkPUOjuQ-Se1TLAzptDo_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ">
                                            </a>
                                        </li>
                                        <li>
                                            <div class="my-week-day__ellipsis js-myWeek-avatar"
                                                data-my-week-day="2023-06-12">
                                                <svg class="my-week-day__ellipsis-svg" viewBox="0 0 25 25">
                                                    <text class="my-week-day__ellipsis-text" x="50%"
                                                        y="50%" dy=".05em">
                                                        ...
                                                    </text>
                                                </svg>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!--
                          -->
                            <li id="my-week-day-1" class="m-myWeek-item m-myWeek-future">
                                <div class="m-myWeek-title">Tue 13 Jun</div>
                                <div class="m-iTemHolders margin-compact">
                                    <article class="m-rosterCard-empty u-verticalAlign js-equalHeight"
                                        style="height: 170px;">
                                        <div>
                                            <div class="m-rosterCard-text text-center gray">Unpublished</div>
                                        </div>
                                    </article>
                                </div>
                                <div class="m-myWeek-alsoRostered text--small">
                                    Scheduled<span class="u-hidden--mobile"> this day</span>
                                    <ul class="my-week-day__avatars">
                                        <li>
                                            <a class="js-myWeek-avatar" href="#" rel="tooltip"
                                                title="DEEPAK NAIK" data-my-week-day="2023-06-13">
                                                <img class="my-week-day__avatar-img ls-is-cached lazyloaded"
                                                    data-src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_fde1c48496079786d5520ff9bcafe2ce.jpg?Expires=1686624426&amp;Signature=PV3dJRSVIdP-I5Vm8KH5Enx1HZzPNlM9Qn7SNQ99X-zdTsmHmXG9iQFqzFL7wViDycqeyr2gC1cuYM~Ppq6XUKaz1YYiS~qc0IEJCryl30ebJD6X8lJr08P1BAehbL0CMNx660GHT5mK4V5KDzQLesogNDx4WR1au61oC1aTuHk_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                    src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_fde1c48496079786d5520ff9bcafe2ce.jpg?Expires=1686624426&amp;Signature=PV3dJRSVIdP-I5Vm8KH5Enx1HZzPNlM9Qn7SNQ99X-zdTsmHmXG9iQFqzFL7wViDycqeyr2gC1cuYM~Ppq6XUKaz1YYiS~qc0IEJCryl30ebJD6X8lJr08P1BAehbL0CMNx660GHT5mK4V5KDzQLesogNDx4WR1au61oC1aTuHk_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ">
                                            </a>
                                        </li>
                                        <li>
                                            <a class="js-myWeek-avatar" href="#" rel="tooltip"
                                                title="NASH APPIAH OBENG" data-my-week-day="2023-06-13">
                                                <img class="my-week-day__avatar-img ls-is-cached lazyloaded"
                                                    data-src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=N+O&amp;width=135&amp;height=135"
                                                    src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=N+O&amp;width=135&amp;height=135">
                                            </a>
                                        </li>
                                        <li>
                                            <a class="js-myWeek-avatar" href="#" rel="tooltip"
                                                title="REMIGIO PEREIRA" data-my-week-day="2023-06-13">
                                                <img class="my-week-day__avatar-img ls-is-cached lazyloaded"
                                                    data-src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_288079f36f93e2c6d188e3bcab192b7b.jpg?Expires=1686638465&amp;Signature=Fo9KuzpsmrxFsAW4C6zylgCYMmUhrqNnJeS6x22-KCcrTQZAmQO3BQB88GxA6EIFOhR1~oYQZUmmVhCjpNgAWVY3ld2CTN86Elt3O0zBmz9suLyQDJd0GMTBujJ5NbJNaWggPfcoVLZ29uVCehOyA-kUIiJRH2VrwvNoKG3ANtc_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                    src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_288079f36f93e2c6d188e3bcab192b7b.jpg?Expires=1686638465&amp;Signature=Fo9KuzpsmrxFsAW4C6zylgCYMmUhrqNnJeS6x22-KCcrTQZAmQO3BQB88GxA6EIFOhR1~oYQZUmmVhCjpNgAWVY3ld2CTN86Elt3O0zBmz9suLyQDJd0GMTBujJ5NbJNaWggPfcoVLZ29uVCehOyA-kUIiJRH2VrwvNoKG3ANtc_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ">
                                            </a>
                                        </li>
                                        <li>
                                            <div class="my-week-day__ellipsis js-myWeek-avatar"
                                                data-my-week-day="2023-06-13">
                                                <svg class="my-week-day__ellipsis-svg" viewBox="0 0 25 25">
                                                    <text class="my-week-day__ellipsis-text" x="50%"
                                                        y="50%" dy=".05em">
                                                        ...
                                                    </text>
                                                </svg>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!--
                          -->
                            <li id="my-week-day-2" class="m-myWeek-item m-myWeek-future">
                                <div class="m-myWeek-title">Wed 14 Jun</div>
                                <div class="m-iTemHolders margin-compact">
                                    <article class="m-rosterCard-empty u-verticalAlign js-equalHeight"
                                        style="height: 170px;">
                                        <div>
                                            <div class="m-rosterCard-text text-center gray">Unpublished</div>
                                        </div>
                                    </article>
                                </div>
                                <div class="m-myWeek-alsoRostered text--small">
                                    Scheduled<span class="u-hidden--mobile"> this day</span>
                                    <ul class="my-week-day__avatars">
                                        <li>
                                            <a class="js-myWeek-avatar" href="#" rel="tooltip"
                                                title="Caetano domnic Sebastio fernandes"
                                                data-my-week-day="2023-06-14">
                                                <img class="my-week-day__avatar-img ls-is-cached lazyloaded"
                                                    data-src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_58b2b61b5ad87fb883d97259c541b142.jpg?Expires=1686636213&amp;Signature=epgupx7Yc2s8MQ7N7VzEYmWbaIE1bQUdTd6IUEsisBncrRMxjvHFpuWjaFg2HqX-KO5S~B7A4m0KBMfnYcLoZmd08WBj-23eNKJCs70iXXceFqrEwqEWbkrZk8cVaDyztdLw-K22OpWhbxdiUPq4ucqQZ2R01cbYThry4ue02U4_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                    src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_58b2b61b5ad87fb883d97259c541b142.jpg?Expires=1686636213&amp;Signature=epgupx7Yc2s8MQ7N7VzEYmWbaIE1bQUdTd6IUEsisBncrRMxjvHFpuWjaFg2HqX-KO5S~B7A4m0KBMfnYcLoZmd08WBj-23eNKJCs70iXXceFqrEwqEWbkrZk8cVaDyztdLw-K22OpWhbxdiUPq4ucqQZ2R01cbYThry4ue02U4_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ">
                                            </a>
                                        </li>
                                        <li>
                                            <a class="js-myWeek-avatar" href="#" rel="tooltip"
                                                title="Vizmit Fernandes" data-my-week-day="2023-06-14">
                                                <img class="my-week-day__avatar-img ls-is-cached lazyloaded"
                                                    data-src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=V+F&amp;width=135&amp;height=135"
                                                    src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=V+F&amp;width=135&amp;height=135">
                                            </a>
                                        </li>
                                        <li>
                                            <a class="js-myWeek-avatar" href="#" rel="tooltip"
                                                title="RAJ RANA" data-my-week-day="2023-06-14">
                                                <img class="my-week-day__avatar-img ls-is-cached lazyloaded"
                                                    data-src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=R+R&amp;width=135&amp;height=135"
                                                    src="https://d11hmzhsuwuq9f.cloudfront.net/my/avatar?name=R+R&amp;width=135&amp;height=135">
                                            </a>
                                        </li>
                                        <li>
                                            <div class="my-week-day__ellipsis js-myWeek-avatar"
                                                data-my-week-day="2023-06-14">
                                                <svg class="my-week-day__ellipsis-svg" viewBox="0 0 25 25">
                                                    <text class="my-week-day__ellipsis-text" x="50%"
                                                        y="50%" dy=".05em">
                                                        ...
                                                    </text>
                                                </svg>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!--
                          -->
                            <li id="my-week-day-3" class="m-myWeek-item m-myWeek-future">
                                <div class="m-myWeek-title">Thu 15 Jun</div>
                                <div class="m-iTemHolders margin-compact">
                                    <article class="m-rosterCard-empty u-verticalAlign js-equalHeight"
                                        style="height: 170px;">
                                        <div>
                                            <div class="m-rosterCard-text text-center gray">Unpublished</div>
                                        </div>
                                    </article>
                                </div>
                                <div class="m-myWeek-alsoRostered text--small">
                                    Scheduled<span class="u-hidden--mobile"> this day</span>
                                    <ul class="my-week-day__avatars">
                                        <li>
                                            <a class="js-myWeek-avatar" href="#" rel="tooltip"
                                                title="RICHARD COUTINHO" data-my-week-day="2023-06-15">
                                                <img class="my-week-day__avatar-img ls-is-cached lazyloaded"
                                                    data-src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_78c12606f2823640a151e712f42e0074.jpg?Expires=1686654032&amp;Signature=ZSJ3KrOr~vGWZt5WfkJte2iTnuvo2S-NWKr09vpQWW2wcuflZ6jIY6iXtCiRH9S4yvsx3LG7oHJ2vFhXt7bQIU-U~18Jdt0Pi9nv2IUcvZu~fs2fIgOfJGQKKApBcJlKEPM6S-hF7QrYjOujf6di2W45vyJKr2LkNepNzcx1ZU0_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                    src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_78c12606f2823640a151e712f42e0074.jpg?Expires=1686654032&amp;Signature=ZSJ3KrOr~vGWZt5WfkJte2iTnuvo2S-NWKr09vpQWW2wcuflZ6jIY6iXtCiRH9S4yvsx3LG7oHJ2vFhXt7bQIU-U~18Jdt0Pi9nv2IUcvZu~fs2fIgOfJGQKKApBcJlKEPM6S-hF7QrYjOujf6di2W45vyJKr2LkNepNzcx1ZU0_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ">
                                            </a>
                                        </li>
                                        <li>
                                            <a class="js-myWeek-avatar" href="#" rel="tooltip"
                                                title="DJAMAL KEMOUCHE" data-my-week-day="2023-06-15">
                                                <img class="my-week-day__avatar-img ls-is-cached lazyloaded"
                                                    data-src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_8cc825ecaaa3c98906607bb2e5a18f2e.jpg?Expires=1686648735&amp;Signature=PJXfPlrfRTIKd6C6CtEvaPOOPrYW7g207E~U56mMZxwDxqK4MFSrXcuGOMK6NATlN3YBZVfb2SU6CZ1Q8cLqXhXo6zL5df5alnKClCsIcGB7o-HYWXEY09FDpyQnLLmDJZD~b9YzPB9L1jsXJgBHRR9HkwMYmVfx7qmOmsGTvds_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                    src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_8cc825ecaaa3c98906607bb2e5a18f2e.jpg?Expires=1686648735&amp;Signature=PJXfPlrfRTIKd6C6CtEvaPOOPrYW7g207E~U56mMZxwDxqK4MFSrXcuGOMK6NATlN3YBZVfb2SU6CZ1Q8cLqXhXo6zL5df5alnKClCsIcGB7o-HYWXEY09FDpyQnLLmDJZD~b9YzPB9L1jsXJgBHRR9HkwMYmVfx7qmOmsGTvds_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ">
                                            </a>
                                        </li>
                                        <li>
                                            <a class="js-myWeek-avatar" href="#" rel="tooltip"
                                                title="MATSON PALHA" data-my-week-day="2023-06-15">
                                                <img class="my-week-day__avatar-img ls-is-cached lazyloaded"
                                                    data-src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_32731fb6b70a9d050c85149dfd9c8144.jpg?Expires=1686635705&amp;Signature=NlTAM8HiaKy6kLdKcbfEias7WMZK4cW-~fMXDFJrPSwOjyKJE-EIKeZYYw4kqjlYUx~K6pk~6DQ73AnK6xmoqwmH8Zim2ByWCd8wiytqjuCChQGgXdQ7255bnbEpG~tu~ewZ~DBpExtPo5gD306ie68smMfOYH3lXLJLLRVFCmw_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                    src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_32731fb6b70a9d050c85149dfd9c8144.jpg?Expires=1686635705&amp;Signature=NlTAM8HiaKy6kLdKcbfEias7WMZK4cW-~fMXDFJrPSwOjyKJE-EIKeZYYw4kqjlYUx~K6pk~6DQ73AnK6xmoqwmH8Zim2ByWCd8wiytqjuCChQGgXdQ7255bnbEpG~tu~ewZ~DBpExtPo5gD306ie68smMfOYH3lXLJLLRVFCmw_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ">
                                            </a>
                                        </li>
                                        <li>
                                            <div class="my-week-day__ellipsis js-myWeek-avatar"
                                                data-my-week-day="2023-06-15">
                                                <svg class="my-week-day__ellipsis-svg" viewBox="0 0 25 25">
                                                    <text class="my-week-day__ellipsis-text" x="50%"
                                                        y="50%" dy=".05em">
                                                        ...
                                                    </text>
                                                </svg>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!--
                          -->
                            <li id="my-week-day-4" class="m-myWeek-item m-myWeek-future">
                                <div class="m-myWeek-title">Fri 16 Jun</div>
                                <div class="m-iTemHolders margin-compact">
                                    <article class="m-rosterCard-empty u-verticalAlign js-equalHeight"
                                        style="height: 170px;">
                                        <div>
                                            <div class="m-rosterCard-text text-center gray">Unpublished</div>
                                        </div>
                                    </article>
                                </div>
                                <div class="m-myWeek-alsoRostered text--small">
                                    Scheduled<span class="u-hidden--mobile"> this day</span>
                                    <ul class="my-week-day__avatars">
                                        <li>
                                            <a class="js-myWeek-avatar" href="#" rel="tooltip"
                                                title="RICHARD COUTINHO" data-my-week-day="2023-06-16">
                                                <img class="my-week-day__avatar-img ls-is-cached lazyloaded"
                                                    data-src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_78c12606f2823640a151e712f42e0074.jpg?Expires=1686654032&amp;Signature=ZSJ3KrOr~vGWZt5WfkJte2iTnuvo2S-NWKr09vpQWW2wcuflZ6jIY6iXtCiRH9S4yvsx3LG7oHJ2vFhXt7bQIU-U~18Jdt0Pi9nv2IUcvZu~fs2fIgOfJGQKKApBcJlKEPM6S-hF7QrYjOujf6di2W45vyJKr2LkNepNzcx1ZU0_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                    src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_78c12606f2823640a151e712f42e0074.jpg?Expires=1686654032&amp;Signature=ZSJ3KrOr~vGWZt5WfkJte2iTnuvo2S-NWKr09vpQWW2wcuflZ6jIY6iXtCiRH9S4yvsx3LG7oHJ2vFhXt7bQIU-U~18Jdt0Pi9nv2IUcvZu~fs2fIgOfJGQKKApBcJlKEPM6S-hF7QrYjOujf6di2W45vyJKr2LkNepNzcx1ZU0_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ">
                                            </a>
                                        </li>
                                        <li>
                                            <a class="js-myWeek-avatar" href="#" rel="tooltip"
                                                title="MATSON PALHA" data-my-week-day="2023-06-16">
                                                <img class="my-week-day__avatar-img ls-is-cached lazyloaded"
                                                    data-src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_32731fb6b70a9d050c85149dfd9c8144.jpg?Expires=1686635705&amp;Signature=NlTAM8HiaKy6kLdKcbfEias7WMZK4cW-~fMXDFJrPSwOjyKJE-EIKeZYYw4kqjlYUx~K6pk~6DQ73AnK6xmoqwmH8Zim2ByWCd8wiytqjuCChQGgXdQ7255bnbEpG~tu~ewZ~DBpExtPo5gD306ie68smMfOYH3lXLJLLRVFCmw_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                    src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_32731fb6b70a9d050c85149dfd9c8144.jpg?Expires=1686635705&amp;Signature=NlTAM8HiaKy6kLdKcbfEias7WMZK4cW-~fMXDFJrPSwOjyKJE-EIKeZYYw4kqjlYUx~K6pk~6DQ73AnK6xmoqwmH8Zim2ByWCd8wiytqjuCChQGgXdQ7255bnbEpG~tu~ewZ~DBpExtPo5gD306ie68smMfOYH3lXLJLLRVFCmw_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ">
                                            </a>
                                        </li>
                                        <li>
                                            <a class="js-myWeek-avatar" href="#" rel="tooltip"
                                                title="Caetano domnic Sebastio fernandes"
                                                data-my-week-day="2023-06-16">
                                                <img class="my-week-day__avatar-img ls-is-cached lazyloaded"
                                                    data-src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_58b2b61b5ad87fb883d97259c541b142.jpg?Expires=1686636213&amp;Signature=epgupx7Yc2s8MQ7N7VzEYmWbaIE1bQUdTd6IUEsisBncrRMxjvHFpuWjaFg2HqX-KO5S~B7A4m0KBMfnYcLoZmd08WBj-23eNKJCs70iXXceFqrEwqEWbkrZk8cVaDyztdLw-K22OpWhbxdiUPq4ucqQZ2R01cbYThry4ue02U4_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                    src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_58b2b61b5ad87fb883d97259c541b142.jpg?Expires=1686636213&amp;Signature=epgupx7Yc2s8MQ7N7VzEYmWbaIE1bQUdTd6IUEsisBncrRMxjvHFpuWjaFg2HqX-KO5S~B7A4m0KBMfnYcLoZmd08WBj-23eNKJCs70iXXceFqrEwqEWbkrZk8cVaDyztdLw-K22OpWhbxdiUPq4ucqQZ2R01cbYThry4ue02U4_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ">
                                            </a>
                                        </li>
                                        <li>
                                            <div class="my-week-day__ellipsis js-myWeek-avatar"
                                                data-my-week-day="2023-06-16">
                                                <svg class="my-week-day__ellipsis-svg" viewBox="0 0 25 25">
                                                    <text class="my-week-day__ellipsis-text" x="50%"
                                                        y="50%" dy=".05em">
                                                        ...
                                                    </text>
                                                </svg>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!--
                          -->
                            <li id="my-week-day-5" class="m-myWeek-item m-myWeek-future">
                                <div class="m-myWeek-title">Sat 17 Jun</div>
                                <div class="m-iTemHolders margin-compact">
                                    <article class="m-rosterCard-empty u-verticalAlign js-equalHeight"
                                        style="height: 170px;">
                                        <div>
                                            <div class="m-rosterCard-text text-center gray">Unpublished</div>
                                        </div>
                                    </article>
                                </div>
                                <div class="m-myWeek-alsoRostered text--small">
                                    Scheduled<span class="u-hidden--mobile"> this day</span>
                                    <ul class="my-week-day__avatars">
                                        <li>
                                            <a class="js-myWeek-avatar" href="#" rel="tooltip"
                                                title="Jeetendra Dhillon" data-my-week-day="2023-06-17">
                                                <img class="my-week-day__avatar-img ls-is-cached lazyloaded"
                                                    data-src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_1dfb4c8435f7242464ebd898a526c5f0.jpg?Expires=1686654893&amp;Signature=GnkmFOF2pf~WyxuTbYdMzHjANj6386hy2znm7dNLLqhL06Fcmva5mftN9~rfhVnAQAAh01-zigRTxC12wNe2lRH16lsQ47exQ2pldCeM97LdgtSoiKCxAWGACsYnws-FQSV4f6fqeWMAiJ0a2L3GgQdC7gBOGnHEyVmAmh5Xt~w_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                    src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_1dfb4c8435f7242464ebd898a526c5f0.jpg?Expires=1686654893&amp;Signature=GnkmFOF2pf~WyxuTbYdMzHjANj6386hy2znm7dNLLqhL06Fcmva5mftN9~rfhVnAQAAh01-zigRTxC12wNe2lRH16lsQ47exQ2pldCeM97LdgtSoiKCxAWGACsYnws-FQSV4f6fqeWMAiJ0a2L3GgQdC7gBOGnHEyVmAmh5Xt~w_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ">
                                            </a>
                                        </li>
                                        <li>
                                            <a class="js-myWeek-avatar" href="#" rel="tooltip"
                                                title="JOSE FERNANDES" data-my-week-day="2023-06-17">
                                                <img class="my-week-day__avatar-img ls-is-cached lazyloaded"
                                                    data-src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_982a66ad1e6e236edebe9d7d0cc8ddd7.jpg?Expires=1686640755&amp;Signature=dkk5w64Ljq0GCupuINr9lWrtijhve-bt44vjcpq0lHKZRkiUhexF5~g3a0rkLHfBBZSIPyyGP0u9W2YkOb2nfD~ZYpT8djdZxBLlxXUUY1dPBh8iZinIHZ20d10-gfcNABGsbfRUkym09eglxIlh63whfXvxe9tkpkdNozZoxEE_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                    src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_982a66ad1e6e236edebe9d7d0cc8ddd7.jpg?Expires=1686640755&amp;Signature=dkk5w64Ljq0GCupuINr9lWrtijhve-bt44vjcpq0lHKZRkiUhexF5~g3a0rkLHfBBZSIPyyGP0u9W2YkOb2nfD~ZYpT8djdZxBLlxXUUY1dPBh8iZinIHZ20d10-gfcNABGsbfRUkym09eglxIlh63whfXvxe9tkpkdNozZoxEE_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ">
                                            </a>
                                        </li>
                                        <li>
                                            <a class="js-myWeek-avatar" href="#" rel="tooltip"
                                                title="Atanasio Coutinho" data-my-week-day="2023-06-17">
                                                <img class="my-week-day__avatar-img ls-is-cached lazyloaded"
                                                    data-src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_063d3d8d74841b2eb3ff8afb0c6b43b3.jpg?Expires=1686639627&amp;Signature=DV8RdelYP~juQnuaS~G7fgXWpc4mNpI0qZuyq81Jz14KUHSn3j9G43n3FO3vDnewF0aWaBL0cNhf5rzlZeaNj~aMzzEityPvm29YjT3eePG6kXYkigJCkUWhehqSBOwfs3nwr9B8Nvx9DTL7fROMZ3hjpLwawLze8TG0TNAFVvM_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                    src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_063d3d8d74841b2eb3ff8afb0c6b43b3.jpg?Expires=1686639627&amp;Signature=DV8RdelYP~juQnuaS~G7fgXWpc4mNpI0qZuyq81Jz14KUHSn3j9G43n3FO3vDnewF0aWaBL0cNhf5rzlZeaNj~aMzzEityPvm29YjT3eePG6kXYkigJCkUWhehqSBOwfs3nwr9B8Nvx9DTL7fROMZ3hjpLwawLze8TG0TNAFVvM_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ">
                                            </a>
                                        </li>
                                        <li>
                                            <div class="my-week-day__ellipsis js-myWeek-avatar"
                                                data-my-week-day="2023-06-17">
                                                <svg class="my-week-day__ellipsis-svg" viewBox="0 0 25 25">
                                                    <text class="my-week-day__ellipsis-text" x="50%"
                                                        y="50%" dy=".05em">
                                                        ...
                                                    </text>
                                                </svg>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!--
                          -->
                            <li id="my-week-day-6" class="m-myWeek-item m-myWeek-future">
                                <div class="m-myWeek-title">Sun 18 Jun</div>
                                <div class="m-iTemHolders margin-compact">
                                    <article class="m-rosterCard-empty u-verticalAlign js-equalHeight"
                                        style="height: 170px;">
                                        <div>
                                            <div class="m-rosterCard-text text-center gray">Unpublished</div>
                                        </div>
                                    </article>
                                </div>
                                <div class="m-myWeek-alsoRostered text--small">
                                    Scheduled<span class="u-hidden--mobile"> this day</span>
                                    <ul class="my-week-day__avatars">
                                        <li>
                                            <a class="js-myWeek-avatar" href="#" rel="tooltip"
                                                title="Jeetendra Dhillon" data-my-week-day="2023-06-18">
                                                <img class="my-week-day__avatar-img ls-is-cached lazyloaded"
                                                    data-src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_1dfb4c8435f7242464ebd898a526c5f0.jpg?Expires=1686654893&amp;Signature=GnkmFOF2pf~WyxuTbYdMzHjANj6386hy2znm7dNLLqhL06Fcmva5mftN9~rfhVnAQAAh01-zigRTxC12wNe2lRH16lsQ47exQ2pldCeM97LdgtSoiKCxAWGACsYnws-FQSV4f6fqeWMAiJ0a2L3GgQdC7gBOGnHEyVmAmh5Xt~w_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                    src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_1dfb4c8435f7242464ebd898a526c5f0.jpg?Expires=1686654893&amp;Signature=GnkmFOF2pf~WyxuTbYdMzHjANj6386hy2znm7dNLLqhL06Fcmva5mftN9~rfhVnAQAAh01-zigRTxC12wNe2lRH16lsQ47exQ2pldCeM97LdgtSoiKCxAWGACsYnws-FQSV4f6fqeWMAiJ0a2L3GgQdC7gBOGnHEyVmAmh5Xt~w_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ">
                                            </a>
                                        </li>
                                        <li>
                                            <a class="js-myWeek-avatar" href="#" rel="tooltip"
                                                title="JOSE FERNANDES" data-my-week-day="2023-06-18">
                                                <img class="my-week-day__avatar-img ls-is-cached lazyloaded"
                                                    data-src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_982a66ad1e6e236edebe9d7d0cc8ddd7.jpg?Expires=1686640755&amp;Signature=dkk5w64Ljq0GCupuINr9lWrtijhve-bt44vjcpq0lHKZRkiUhexF5~g3a0rkLHfBBZSIPyyGP0u9W2YkOb2nfD~ZYpT8djdZxBLlxXUUY1dPBh8iZinIHZ20d10-gfcNABGsbfRUkym09eglxIlh63whfXvxe9tkpkdNozZoxEE_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                    src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_982a66ad1e6e236edebe9d7d0cc8ddd7.jpg?Expires=1686640755&amp;Signature=dkk5w64Ljq0GCupuINr9lWrtijhve-bt44vjcpq0lHKZRkiUhexF5~g3a0rkLHfBBZSIPyyGP0u9W2YkOb2nfD~ZYpT8djdZxBLlxXUUY1dPBh8iZinIHZ20d10-gfcNABGsbfRUkym09eglxIlh63whfXvxe9tkpkdNozZoxEE_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ">
                                            </a>
                                        </li>
                                        <li>
                                            <a class="js-myWeek-avatar" href="#" rel="tooltip"
                                                title="Atanasio Coutinho" data-my-week-day="2023-06-18">
                                                <img class="my-week-day__avatar-img ls-is-cached lazyloaded"
                                                    data-src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_063d3d8d74841b2eb3ff8afb0c6b43b3.jpg?Expires=1686639627&amp;Signature=DV8RdelYP~juQnuaS~G7fgXWpc4mNpI0qZuyq81Jz14KUHSn3j9G43n3FO3vDnewF0aWaBL0cNhf5rzlZeaNj~aMzzEityPvm29YjT3eePG6kXYkigJCkUWhehqSBOwfs3nwr9B8Nvx9DTL7fROMZ3hjpLwawLze8TG0TNAFVvM_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ"
                                                    src="https://photo2.deputy.com/deputec_b181115023319_6068/-135x135_063d3d8d74841b2eb3ff8afb0c6b43b3.jpg?Expires=1686639627&amp;Signature=DV8RdelYP~juQnuaS~G7fgXWpc4mNpI0qZuyq81Jz14KUHSn3j9G43n3FO3vDnewF0aWaBL0cNhf5rzlZeaNj~aMzzEityPvm29YjT3eePG6kXYkigJCkUWhehqSBOwfs3nwr9B8Nvx9DTL7fROMZ3hjpLwawLze8TG0TNAFVvM_&amp;Key-Pair-Id=APKAINP5UVPK4IGBHXOQ">
                                            </a>
                                        </li>
                                        <li>
                                            <div class="my-week-day__ellipsis js-myWeek-avatar"
                                                data-my-week-day="2023-06-18">
                                                <svg class="my-week-day__ellipsis-svg" viewBox="0 0 25 25">
                                                    <text class="my-week-day__ellipsis-text" x="50%"
                                                        y="50%" dy=".05em">
                                                        ...
                                                    </text>
                                                </svg>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!--
                          -->
                            <li class="m-myWeek-controls--mobile">
                                <button class="btn btn-default btn-sm js-myWeek-control" data-direction="right"
                                    data-dp-analytics="DMWW"><i class="fa fa-chevron-right"
                                        data-direction="right"></i></button>
                            </li>
                        </ul>
                        <div class="padding m-emptyState">
                            <div class="m-emptyState-inner">
                                <div class="m-emptyState-image">
                                    <img class="img-responsive lazyload"
                                        data-src="https://d2sebmzxyyulvv.cloudfront.net/cffad1139f1dc662afee6e900cc5cfc8a312f59e/images/version3/emptyStates/me.png">
                                </div>
                                <div class="m-emptyState-message">
                                    <h3>You've got no shifts this week!</h3>
                                    <p class="gray margin-none">Vivamus sagittis lacus vel augue laoreet rutrum
                                        faucibus dolor auctor.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer u-zindex-0">
                            <button class="btn btn-default u-pullLeft" type="button"
                                data-dismiss="modal">Cancel</button>
                            <button class="btn btn-primary js-MyWeek-Modal-Btn js-MyWeek-Modal-AmendInProgShift hide"
                                data-dp-analytics="waDesktopMyWeekUpdateShift" type="button">Update</button>
                            <button class="btn btn-danger js-MyWeek-Modal-Btn js-MyWeek-Modal-SubmitShift hide"
                                data-dp-analytics="waDesktopMyWeekEndShift" type="button">End Shift</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Templates for custom fields -->
            <!-- Template for preview of photo that is being uploaded-->

        </div>
    </div>

    <div id="shift-modal-unscheduled" class="modal modal--tiny in" aria-hidden="false" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close"><span
                            class="di-cross" aria-hidden="true"></span></button>
                    <h2 class="modal-title">Start unscheduled shift</h2>
                </div>
                <div class="modal-body">
                    <div class="padding">
                        <div class="select2-container" id="s2id_shift-modal-unscheduled-area"><a
                                href="javascript:void(0)" class="select2-choice" tabindex="-1"> <span
                                    class="select2-chosen" id="select2-chosen-9">[139] DHL-Q-077(Polar park
                                    Ass)-Op's</span><abbr class="select2-search-choice-close"></abbr> <span
                                    class="select2-arrow co-icon-caret-down" role="presentation"></span></a><label
                                for="s2id_autogen9" class="select2-offscreen"></label><input
                                class="select2-focusser select2-offscreen" type="text" aria-haspopup="true"
                                role="button" aria-labelledby="select2-chosen-9" id="s2id_autogen9"></div><input
                            id="shift-modal-unscheduled-area" data-placeholder="Select an area..." tabindex="-1"
                            title="" style="display: none;">
                    </div>
                </div>
                <div id="unrosteredTimesheetCustomFields" class="u-padding-15-sides margin-none"></div>
                <div class="u-flex u-flex-center form-group row js-MyWeek-Start-Modal-Container u-padding-15-sides margin-none"
                    style="display: none;">
                    <div class="col-xs-12">
                        <label id="MyWeek-Start-Modal-Comment" class="pb5">Comment</label>
                        <textarea class="form-control" maxlength="255" data-min-rows="2"></textarea>
                        <span class="error-message">This field is required.</span>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-default" type="button" data-dismiss="modal" onclick="togleModal()">Cancel</button>
                    <button class="btn btn-primary" type="button" data-loading-text="Starting..." onclick="togleModal()"
                        id="shift-modal-unscheduled-start">Start Shift</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Get the modal element
        // Add event listener to the button
        function togleModal() {
        const modal = document.getElementById("shift-modal-unscheduled");

            // Toggle the modal display property
            if (modal.style.display === "block") {
                modal.style.display = "none";
            } else {
                modal.style.display = "block";
            }
        };
    </script>

</x-app-layout>
