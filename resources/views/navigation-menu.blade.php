<header id="pnlNavBar" class="m-topHeader">
    <button class="close close-system-update-noty">×</button>
    <div class="broadcast-content margin-none"></div>
    <div class="head-container" id="dp-main-nav">
        <div class="m-topHeader-logo" data-dp-analytics="waTopHeaderLogoClicked"><img id="topHeader-logo-img" alt="Logo"
                src="https://deputyfile.s3.amazonaws.com/deputec_b181115023319_6068/6a5fb240cf9b18dc1d6220ac87eafc98.png?X-Amz-Content-Sha256=UNSIGNED-PAYLOAD&amp;X-Amz-Algorithm=AWS4-HMAC-SHA256&amp;X-Amz-Credential=AKIAT33V4T5LXS2RLCNL%2F20230612%2Fus-east-1%2Fs3%2Faws4_request&amp;X-Amz-Date=20230612T074343Z&amp;X-Amz-SignedHeaders=host&amp;X-Amz-Expires=3600&amp;X-Amz-Signature=dd37a253cd089f2073b57e03620f4d33e8ec87af5f25748b7eb8c0a568062bbc">
        </div>
        <ul class="nav nav-tabs m-topHeader-navLeft " id="main-nav"
            data-intro="Jump to Rostering, Timesheets, Tasks and more." data-position="bottom">
            <li class="navbar-tab active">
                <a class="top-navbar-link" data-nav-track-id="HOME" href="{{ url('/me') }}" data-dp-analytics="NTHE">
                    <span>Me</span>
                </a>
            </li>
            <li class="navbar-tab">
                <a class="top-navbar-link" data-nav-track-id="NEWSFEED" href="{{ url('/newsfeed') }}"
                    data-dp-analytics="NTNN">
                    <span>News Feed</span>
                </a>
            </li>
            <li class="navbar-tab">
                <a class="top-navbar-link" data-nav-track-id="TASKS" href="{{ url('/tasks') }}" data-dp-analytics="NTTS"
                    data-template="template-tasks">
                    <span>Tasks</span>
                </a>
            </li>
            <li class="navbar-tab u-hidden--mobile">
                <a class="top-navbar-link" data-nav-track-id="LOCATIONS" href="{{ url('/locations') }}">
                    <span>Locations</span>
                </a>
            </li>
            <li class="people-module-nav u-no-rhythm u-hidden--mobile" data-v-122998f4="">
                <div class="people-module-nav__container people-module-nav__sub-hover" data-v-122998f4="">
                    <a href="{{ url('/team') }}" tabindex="0"
                        class="people-module-nav__trigger people-module-nav__sub-hover" data-v-122998f4="">
                        <span class="people-module-nav__sub-hover people-module-nav__sub-hover"
                            data-v-122998f4="">People</span>
                        <!---->
                    </a>
                    <!---->
                </div>
            </li>
            <li class="navbar-tab u-hidden--mobile m-topHeader-roster" id="roster-nav">
                <a class="top-navbar-link" data-nav-track-id="ROSTER" href="#roster" data-dp-analytics="LLSC">
                    <span>Schedule</span>
                </a>
            </li>
            <li class="navbar-tab navbar-ts u-hidden--mobile m-topHeader-timesheets">
                <a href="#timesheet" data-toggle="dropdown" class="dropdown-toggle" aria-expanded="false">
                    <span>Timesheets <b class="caret"></b></span>
                </a>
                <ul class="dropdown-menu dropdown-menu-right">
                    <li class="promoted">
                        <a class="top-navbar-link" data-nav-track-id="APPROVE" href="#approve" data-dp-analytics="LLAT">
                            Approve Timesheets
                            <p class="m-dropdownSmall">Check that submitted timesheets are accurate, adjust or
                                approve them
                            </p>
                        </a>
                    </li>
                    <li class="promoted">
                        <a class="top-navbar-link" data-nav-track-id="EXPORT" href="#export" data-dp-analytics="LLET">
                            Export Timesheets
                            <p class="m-dropdownSmall">Send approved timesheets to your payroll package</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="navbar-tab u-hidden--mobile m-topHeader-reports js-nav-with-children" id="dp-main-nav-reports">
                <a class="top-navbar-link" data-nav-track-id="REPORT" href="#report" data-dp-analytics="NTRP"
                    title="Reports" data-template="template-reports">
                    <span>Reports</span>
                </a>
            </li>
            <span data-vue-embed="leave-nav"></span>
        </ul>

    </div>
    <!-- /end .container -->
</header>
