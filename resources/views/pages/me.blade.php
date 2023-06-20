<x-app-layout>
    <div class="row">
        <!-- [ sample-page ] start -->
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Dashboard</h5>
                </div>
                <div class="card-body">
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h5 class="mb-0">Project overview</h5>
                                        <div class="dropdown">
                                            <a class="avtar avtar-s btn-link-secondary dropdown-toggle arrow-none"
                                                href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="ti ti-dots f-18"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Today</a>
                                                <a class="dropdown-item" href="#">Weekly</a>
                                                <a class="dropdown-item" href="#">Monthly</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-center justify-content-center">
                                        <div class="col-md-6 col-xl-4">
                                            <div class="mt-3 row align-items-center">
                                                <div class="col-6">
                                                    <p class="text-muted mb-1">Total Tasks</p>
                                                    <h5 class="mb-0">34,686</h5>
                                                </div>
                                                <div class="col-6">
                                                    <div id="total-tasks-graph" style="min-height: 60px;">
                                                        <div id="apexchartstkqokds4"
                                                            class="apexcharts-canvas apexchartstkqokds4 apexcharts-theme-light"
                                                            style="width: 110px; height: 60px;"><svg id="SvgjsSvg1374"
                                                                width="110" height="60"
                                                                xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                                xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                                style="background: transparent;">
                                                                <g id="SvgjsG1376"
                                                                    class="apexcharts-inner apexcharts-graphical"
                                                                    transform="translate(0, 0)">
                                                                    <defs id="SvgjsDefs1375">
                                                                        <clipPath id="gridRectMasktkqokds4">
                                                                            <rect id="SvgjsRect1381" width="116"
                                                                                height="62" x="-3"
                                                                                y="-1" rx="0"
                                                                                ry="0" opacity="1"
                                                                                stroke-width="0" stroke="none"
                                                                                stroke-dasharray="0" fill="#fff">
                                                                            </rect>
                                                                        </clipPath>
                                                                        <clipPath id="forecastMasktkqokds4"></clipPath>
                                                                        <clipPath id="nonForecastMasktkqokds4">
                                                                        </clipPath>
                                                                        <clipPath id="gridRectMarkerMasktkqokds4">
                                                                            <rect id="SvgjsRect1382" width="114"
                                                                                height="64" x="-2"
                                                                                y="-2" rx="0"
                                                                                ry="0" opacity="1"
                                                                                stroke-width="0" stroke="none"
                                                                                stroke-dasharray="0" fill="#fff">
                                                                            </rect>
                                                                        </clipPath>
                                                                        <linearGradient id="SvgjsLinearGradient1387"
                                                                            x1="0" y1="0" x2="0"
                                                                            y2="1">
                                                                            <stop id="SvgjsStop1388" stop-opacity="0.5"
                                                                                stop-color="rgba(70,128,255,0.5)"
                                                                                offset="0"></stop>
                                                                            <stop id="SvgjsStop1389" stop-opacity="0"
                                                                                stop-color="rgba(255,255,255,0)"
                                                                                offset="1"></stop>
                                                                            <stop id="SvgjsStop1390" stop-opacity="0"
                                                                                stop-color="rgba(255,255,255,0)"
                                                                                offset="1"></stop>
                                                                        </linearGradient>
                                                                    </defs>
                                                                    <line id="SvgjsLine1380" x1="0"
                                                                        y1="0" x2="0" y2="60"
                                                                        stroke="#b6b6b6" stroke-dasharray="3"
                                                                        stroke-linecap="butt"
                                                                        class="apexcharts-xcrosshairs" x="0"
                                                                        y="0" width="1" height="60"
                                                                        fill="#b1b9c4" filter="none"
                                                                        fill-opacity="0.9" stroke-width="1"></line>
                                                                    <g id="SvgjsG1406" class="apexcharts-xaxis"
                                                                        transform="translate(0, 0)">
                                                                        <g id="SvgjsG1407"
                                                                            class="apexcharts-xaxis-texts-g"
                                                                            transform="translate(0, -4)"></g>
                                                                    </g>
                                                                    <g id="SvgjsG1393" class="apexcharts-grid">
                                                                        <g id="SvgjsG1394"
                                                                            class="apexcharts-gridlines-horizontal"
                                                                            style="display: none;">
                                                                            <line id="SvgjsLine1398" x1="0"
                                                                                y1="10" x2="110"
                                                                                y2="10" stroke="#e0e0e0"
                                                                                stroke-dasharray="0"
                                                                                stroke-linecap="butt"
                                                                                class="apexcharts-gridline"></line>
                                                                            <line id="SvgjsLine1399" x1="0"
                                                                                y1="20" x2="110"
                                                                                y2="20" stroke="#e0e0e0"
                                                                                stroke-dasharray="0"
                                                                                stroke-linecap="butt"
                                                                                class="apexcharts-gridline"></line>
                                                                            <line id="SvgjsLine1400" x1="0"
                                                                                y1="30" x2="110"
                                                                                y2="30" stroke="#e0e0e0"
                                                                                stroke-dasharray="0"
                                                                                stroke-linecap="butt"
                                                                                class="apexcharts-gridline"></line>
                                                                            <line id="SvgjsLine1401" x1="0"
                                                                                y1="40" x2="110"
                                                                                y2="40" stroke="#e0e0e0"
                                                                                stroke-dasharray="0"
                                                                                stroke-linecap="butt"
                                                                                class="apexcharts-gridline"></line>
                                                                            <line id="SvgjsLine1402" x1="0"
                                                                                y1="50" x2="110"
                                                                                y2="50" stroke="#e0e0e0"
                                                                                stroke-dasharray="0"
                                                                                stroke-linecap="butt"
                                                                                class="apexcharts-gridline"></line>
                                                                        </g>
                                                                        <g id="SvgjsG1395"
                                                                            class="apexcharts-gridlines-vertical"
                                                                            style="display: none;"></g>
                                                                        <line id="SvgjsLine1405" x1="0"
                                                                            y1="60" x2="110"
                                                                            y2="60" stroke="transparent"
                                                                            stroke-dasharray="0"
                                                                            stroke-linecap="butt"></line>
                                                                        <line id="SvgjsLine1404" x1="0"
                                                                            y1="1" x2="0"
                                                                            y2="60" stroke="transparent"
                                                                            stroke-dasharray="0"
                                                                            stroke-linecap="butt"></line>
                                                                    </g>
                                                                    <g id="SvgjsG1383"
                                                                        class="apexcharts-area-series apexcharts-plot-series">
                                                                        <g id="SvgjsG1384" class="apexcharts-series"
                                                                            seriesName="series-1"
                                                                            data:longestSeries="true" rel="1"
                                                                            data:realIndex="0">
                                                                            <path id="SvgjsPath1391"
                                                                                d="M0 60L0 55C6.416666666666667 55 11.916666666666668 35 18.333333333333336 35C24.750000000000004 35 30.250000000000004 57 36.66666666666667 57C43.083333333333336 57 48.583333333333336 50 55 50C61.41666666666667 50 66.91666666666667 56 73.33333333333334 56C79.75 56 85.25 10 91.66666666666667 10C98.08333333333334 10 103.58333333333334 60 110 60C110 60 110 60 110 60M110 60C110 60 110 60 110 60 "
                                                                                fill="url(#SvgjsLinearGradient1387)"
                                                                                fill-opacity="1" stroke-opacity="1"
                                                                                stroke-linecap="butt" stroke-width="0"
                                                                                stroke-dasharray="0"
                                                                                class="apexcharts-area" index="0"
                                                                                clip-path="url(#gridRectMasktkqokds4)"
                                                                                pathTo="M 0 60 L 0 55C 6.416666666666667 55 11.916666666666668 35 18.333333333333336 35C 24.750000000000004 35 30.250000000000004 57 36.66666666666667 57C 43.083333333333336 57 48.583333333333336 50 55 50C 61.41666666666667 50 66.91666666666667 56 73.33333333333334 56C 79.75 56 85.25 10 91.66666666666667 10C 98.08333333333334 10 103.58333333333334 60 110 60C 110 60 110 60 110 60M 110 60z"
                                                                                pathFrom="M -1 60 L -1 60 L 18.333333333333336 60 L 36.66666666666667 60 L 55 60 L 73.33333333333334 60 L 91.66666666666667 60 L 110 60">
                                                                            </path>
                                                                            <path id="SvgjsPath1392"
                                                                                d="M0 55C6.416666666666667 55 11.916666666666668 35 18.333333333333336 35C24.750000000000004 35 30.250000000000004 57 36.66666666666667 57C43.083333333333336 57 48.583333333333336 50 55 50C61.41666666666667 50 66.91666666666667 56 73.33333333333334 56C79.75 56 85.25 10 91.66666666666667 10C98.08333333333334 10 103.58333333333334 60 110 60C110 60 110 60 110 60 "
                                                                                fill="none" fill-opacity="1"
                                                                                stroke="#4680ff" stroke-opacity="1"
                                                                                stroke-linecap="butt" stroke-width="2"
                                                                                stroke-dasharray="0"
                                                                                class="apexcharts-area" index="0"
                                                                                clip-path="url(#gridRectMasktkqokds4)"
                                                                                pathTo="M 0 55C 6.416666666666667 55 11.916666666666668 35 18.333333333333336 35C 24.750000000000004 35 30.250000000000004 57 36.66666666666667 57C 43.083333333333336 57 48.583333333333336 50 55 50C 61.41666666666667 50 66.91666666666667 56 73.33333333333334 56C 79.75 56 85.25 10 91.66666666666667 10C 98.08333333333334 10 103.58333333333334 60 110 60"
                                                                                pathFrom="M -1 60 L -1 60 L 18.333333333333336 60 L 36.66666666666667 60 L 55 60 L 73.33333333333334 60 L 91.66666666666667 60 L 110 60"
                                                                                fill-rule="evenodd"></path>
                                                                            <g id="SvgjsG1385"
                                                                                class="apexcharts-series-markers-wrap"
                                                                                data:realIndex="0">
                                                                                <g class="apexcharts-series-markers">
                                                                                    <circle id="SvgjsCircle1421"
                                                                                        r="0" cx="0"
                                                                                        cy="0"
                                                                                        class="apexcharts-marker w8p8suub9 no-pointer-events"
                                                                                        stroke="#ffffff"
                                                                                        fill="#4680ff"
                                                                                        fill-opacity="1"
                                                                                        stroke-width="2"
                                                                                        stroke-opacity="0.9"
                                                                                        default-marker-size="0">
                                                                                    </circle>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                        <g id="SvgjsG1386"
                                                                            class="apexcharts-datalabels"
                                                                            data:realIndex="0"></g>
                                                                    </g>
                                                                    <g id="SvgjsG1396" class="apexcharts-grid-borders"
                                                                        style="display: none;">
                                                                        <line id="SvgjsLine1397" x1="0"
                                                                            y1="0" x2="110"
                                                                            y2="0" stroke="#e0e0e0"
                                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                                            class="apexcharts-gridline"></line>
                                                                        <line id="SvgjsLine1403" x1="0"
                                                                            y1="60" x2="110"
                                                                            y2="60" stroke="#e0e0e0"
                                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                                            class="apexcharts-gridline"></line>
                                                                    </g>
                                                                    <line id="SvgjsLine1416" x1="0"
                                                                        y1="0" x2="110" y2="0"
                                                                        stroke="#b6b6b6" stroke-dasharray="0"
                                                                        stroke-width="1" stroke-linecap="butt"
                                                                        class="apexcharts-ycrosshairs"></line>
                                                                    <line id="SvgjsLine1417" x1="0"
                                                                        y1="0" x2="110" y2="0"
                                                                        stroke-dasharray="0" stroke-width="0"
                                                                        stroke-linecap="butt"
                                                                        class="apexcharts-ycrosshairs-hidden"></line>
                                                                    <g id="SvgjsG1418"
                                                                        class="apexcharts-yaxis-annotations"></g>
                                                                    <g id="SvgjsG1419"
                                                                        class="apexcharts-xaxis-annotations"></g>
                                                                    <g id="SvgjsG1420"
                                                                        class="apexcharts-point-annotations"></g>
                                                                </g>
                                                                <rect id="SvgjsRect1379" width="0"
                                                                    height="0" x="0" y="0"
                                                                    rx="0" ry="0" opacity="1"
                                                                    stroke-width="0" stroke="none"
                                                                    stroke-dasharray="0" fill="#fefefe"></rect>
                                                                <g id="SvgjsG1415" class="apexcharts-yaxis"
                                                                    rel="0" transform="translate(-18, 0)"></g>
                                                                <g id="SvgjsG1377" class="apexcharts-annotations"></g>
                                                            </svg>
                                                            <div class="apexcharts-legend" style="max-height: 30px;">
                                                            </div>
                                                            <div class="apexcharts-tooltip apexcharts-theme-light">
                                                                <div class="apexcharts-tooltip-title"
                                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                </div>
                                                                <div class="apexcharts-tooltip-series-group"
                                                                    style="order: 1;"><span
                                                                        class="apexcharts-tooltip-marker"
                                                                        style="background-color: rgb(70, 128, 255);"></span>
                                                                    <div class="apexcharts-tooltip-text"
                                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                        <div class="apexcharts-tooltip-y-group"><span
                                                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                                                class="apexcharts-tooltip-text-y-value"></span>
                                                                        </div>
                                                                        <div class="apexcharts-tooltip-goals-group">
                                                                            <span
                                                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                                                class="apexcharts-tooltip-text-goals-value"></span>
                                                                        </div>
                                                                        <div class="apexcharts-tooltip-z-group"><span
                                                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                                                class="apexcharts-tooltip-text-z-value"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                                <div class="apexcharts-yaxistooltip-text"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xl-4">
                                            <div class="mt-3 row align-items-center">
                                                <div class="col-6">
                                                    <p class="text-muted mb-1">Pending Tasks</p>
                                                    <h5 class="mb-0">3,786</h5>
                                                </div>
                                                <div class="col-6">
                                                    <div id="pending-tasks-graph" style="min-height: 60px;">
                                                        <div id="apexchartsyq06oytij"
                                                            class="apexcharts-canvas apexchartsyq06oytij apexcharts-theme-light"
                                                            style="width: 110px; height: 60px;"><svg id="SvgjsSvg1422"
                                                                width="110" height="60"
                                                                xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                                xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                                style="background: transparent;">
                                                                <g id="SvgjsG1424"
                                                                    class="apexcharts-inner apexcharts-graphical"
                                                                    transform="translate(0, 0)">
                                                                    <defs id="SvgjsDefs1423">
                                                                        <clipPath id="gridRectMaskyq06oytij">
                                                                            <rect id="SvgjsRect1429" width="116"
                                                                                height="62" x="-3"
                                                                                y="-1" rx="0"
                                                                                ry="0" opacity="1"
                                                                                stroke-width="0" stroke="none"
                                                                                stroke-dasharray="0" fill="#fff">
                                                                            </rect>
                                                                        </clipPath>
                                                                        <clipPath id="forecastMaskyq06oytij">
                                                                        </clipPath>
                                                                        <clipPath id="nonForecastMaskyq06oytij">
                                                                        </clipPath>
                                                                        <clipPath id="gridRectMarkerMaskyq06oytij">
                                                                            <rect id="SvgjsRect1430" width="114"
                                                                                height="64" x="-2"
                                                                                y="-2" rx="0"
                                                                                ry="0" opacity="1"
                                                                                stroke-width="0" stroke="none"
                                                                                stroke-dasharray="0" fill="#fff">
                                                                            </rect>
                                                                        </clipPath>
                                                                        <linearGradient id="SvgjsLinearGradient1435"
                                                                            x1="0" y1="0"
                                                                            x2="0" y2="1">
                                                                            <stop id="SvgjsStop1436"
                                                                                stop-opacity="0.5"
                                                                                stop-color="rgba(220,38,38,0.5)"
                                                                                offset="0"></stop>
                                                                            <stop id="SvgjsStop1437" stop-opacity="0"
                                                                                stop-color="rgba(255,255,255,0)"
                                                                                offset="1"></stop>
                                                                            <stop id="SvgjsStop1438" stop-opacity="0"
                                                                                stop-color="rgba(255,255,255,0)"
                                                                                offset="1"></stop>
                                                                        </linearGradient>
                                                                    </defs>
                                                                    <line id="SvgjsLine1428" x1="54.5"
                                                                        y1="0" x2="54.5" y2="60"
                                                                        stroke="#b6b6b6" stroke-dasharray="3"
                                                                        stroke-linecap="butt"
                                                                        class="apexcharts-xcrosshairs" x="54.5"
                                                                        y="0" width="1" height="60"
                                                                        fill="#b1b9c4" filter="none"
                                                                        fill-opacity="0.9" stroke-width="1"></line>
                                                                    <g id="SvgjsG1454" class="apexcharts-xaxis"
                                                                        transform="translate(0, 0)">
                                                                        <g id="SvgjsG1455"
                                                                            class="apexcharts-xaxis-texts-g"
                                                                            transform="translate(0, -4)"></g>
                                                                    </g>
                                                                    <g id="SvgjsG1441" class="apexcharts-grid">
                                                                        <g id="SvgjsG1442"
                                                                            class="apexcharts-gridlines-horizontal"
                                                                            style="display: none;">
                                                                            <line id="SvgjsLine1446" x1="0"
                                                                                y1="10" x2="110"
                                                                                y2="10" stroke="#e0e0e0"
                                                                                stroke-dasharray="0"
                                                                                stroke-linecap="butt"
                                                                                class="apexcharts-gridline"></line>
                                                                            <line id="SvgjsLine1447" x1="0"
                                                                                y1="20" x2="110"
                                                                                y2="20" stroke="#e0e0e0"
                                                                                stroke-dasharray="0"
                                                                                stroke-linecap="butt"
                                                                                class="apexcharts-gridline"></line>
                                                                            <line id="SvgjsLine1448" x1="0"
                                                                                y1="30" x2="110"
                                                                                y2="30" stroke="#e0e0e0"
                                                                                stroke-dasharray="0"
                                                                                stroke-linecap="butt"
                                                                                class="apexcharts-gridline"></line>
                                                                            <line id="SvgjsLine1449" x1="0"
                                                                                y1="40" x2="110"
                                                                                y2="40" stroke="#e0e0e0"
                                                                                stroke-dasharray="0"
                                                                                stroke-linecap="butt"
                                                                                class="apexcharts-gridline"></line>
                                                                            <line id="SvgjsLine1450" x1="0"
                                                                                y1="50" x2="110"
                                                                                y2="50" stroke="#e0e0e0"
                                                                                stroke-dasharray="0"
                                                                                stroke-linecap="butt"
                                                                                class="apexcharts-gridline"></line>
                                                                        </g>
                                                                        <g id="SvgjsG1443"
                                                                            class="apexcharts-gridlines-vertical"
                                                                            style="display: none;"></g>
                                                                        <line id="SvgjsLine1453" x1="0"
                                                                            y1="60" x2="110"
                                                                            y2="60" stroke="transparent"
                                                                            stroke-dasharray="0"
                                                                            stroke-linecap="butt"></line>
                                                                        <line id="SvgjsLine1452" x1="0"
                                                                            y1="1" x2="0"
                                                                            y2="60" stroke="transparent"
                                                                            stroke-dasharray="0"
                                                                            stroke-linecap="butt"></line>
                                                                    </g>
                                                                    <g id="SvgjsG1431"
                                                                        class="apexcharts-area-series apexcharts-plot-series">
                                                                        <g id="SvgjsG1432" class="apexcharts-series"
                                                                            seriesName="series-1"
                                                                            data:longestSeries="true" rel="1"
                                                                            data:realIndex="0">
                                                                            <path id="SvgjsPath1439"
                                                                                d="M0 60L0 60C6.416666666666667 60 11.916666666666668 10 18.333333333333336 10C24.750000000000004 10 30.250000000000004 56 36.66666666666667 56C43.083333333333336 56 48.583333333333336 50 55 50C61.41666666666667 50 66.91666666666667 57 73.33333333333334 57C79.75 57 85.25 35 91.66666666666667 35C98.08333333333334 35 103.58333333333334 55 110 55C110 55 110 55 110 60M110 55C110 55 110 55 110 55 "
                                                                                fill="url(#SvgjsLinearGradient1435)"
                                                                                fill-opacity="1" stroke-opacity="1"
                                                                                stroke-linecap="butt" stroke-width="0"
                                                                                stroke-dasharray="0"
                                                                                class="apexcharts-area" index="0"
                                                                                clip-path="url(#gridRectMaskyq06oytij)"
                                                                                pathTo="M 0 60 L 0 60C 6.416666666666667 60 11.916666666666668 10 18.333333333333336 10C 24.750000000000004 10 30.250000000000004 56 36.66666666666667 56C 43.083333333333336 56 48.583333333333336 50 55 50C 61.41666666666667 50 66.91666666666667 57 73.33333333333334 57C 79.75 57 85.25 35 91.66666666666667 35C 98.08333333333334 35 103.58333333333334 55 110 55C 110 55 110 55 110 60M 110 55z"
                                                                                pathFrom="M -1 60 L -1 60 L 18.333333333333336 60 L 36.66666666666667 60 L 55 60 L 73.33333333333334 60 L 91.66666666666667 60 L 110 60">
                                                                            </path>
                                                                            <path id="SvgjsPath1440"
                                                                                d="M0 60C6.416666666666667 60 11.916666666666668 10 18.333333333333336 10C24.750000000000004 10 30.250000000000004 56 36.66666666666667 56C43.083333333333336 56 48.583333333333336 50 55 50C61.41666666666667 50 66.91666666666667 57 73.33333333333334 57C79.75 57 85.25 35 91.66666666666667 35C98.08333333333334 35 103.58333333333334 55 110 55C110 55 110 55 110 55 "
                                                                                fill="none" fill-opacity="1"
                                                                                stroke="#dc2626" stroke-opacity="1"
                                                                                stroke-linecap="butt" stroke-width="2"
                                                                                stroke-dasharray="0"
                                                                                class="apexcharts-area" index="0"
                                                                                clip-path="url(#gridRectMaskyq06oytij)"
                                                                                pathTo="M 0 60C 6.416666666666667 60 11.916666666666668 10 18.333333333333336 10C 24.750000000000004 10 30.250000000000004 56 36.66666666666667 56C 43.083333333333336 56 48.583333333333336 50 55 50C 61.41666666666667 50 66.91666666666667 57 73.33333333333334 57C 79.75 57 85.25 35 91.66666666666667 35C 98.08333333333334 35 103.58333333333334 55 110 55"
                                                                                pathFrom="M -1 60 L -1 60 L 18.333333333333336 60 L 36.66666666666667 60 L 55 60 L 73.33333333333334 60 L 91.66666666666667 60 L 110 60"
                                                                                fill-rule="evenodd"></path>
                                                                            <g id="SvgjsG1433"
                                                                                class="apexcharts-series-markers-wrap"
                                                                                data:realIndex="0">
                                                                                <g class="apexcharts-series-markers">
                                                                                    <circle id="SvgjsCircle1469"
                                                                                        r="0" cx="55"
                                                                                        cy="50"
                                                                                        class="apexcharts-marker waw6f1u7b no-pointer-events"
                                                                                        stroke="#ffffff"
                                                                                        fill="#dc2626"
                                                                                        fill-opacity="1"
                                                                                        stroke-width="2"
                                                                                        stroke-opacity="0.9"
                                                                                        default-marker-size="0">
                                                                                    </circle>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                        <g id="SvgjsG1434"
                                                                            class="apexcharts-datalabels"
                                                                            data:realIndex="0"></g>
                                                                    </g>
                                                                    <g id="SvgjsG1444" class="apexcharts-grid-borders"
                                                                        style="display: none;">
                                                                        <line id="SvgjsLine1445" x1="0"
                                                                            y1="0" x2="110"
                                                                            y2="0" stroke="#e0e0e0"
                                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                                            class="apexcharts-gridline"></line>
                                                                        <line id="SvgjsLine1451" x1="0"
                                                                            y1="60" x2="110"
                                                                            y2="60" stroke="#e0e0e0"
                                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                                            class="apexcharts-gridline"></line>
                                                                    </g>
                                                                    <line id="SvgjsLine1464" x1="0"
                                                                        y1="0" x2="110" y2="0"
                                                                        stroke="#b6b6b6" stroke-dasharray="0"
                                                                        stroke-width="1" stroke-linecap="butt"
                                                                        class="apexcharts-ycrosshairs"></line>
                                                                    <line id="SvgjsLine1465" x1="0"
                                                                        y1="0" x2="110" y2="0"
                                                                        stroke-dasharray="0" stroke-width="0"
                                                                        stroke-linecap="butt"
                                                                        class="apexcharts-ycrosshairs-hidden"></line>
                                                                    <g id="SvgjsG1466"
                                                                        class="apexcharts-yaxis-annotations"></g>
                                                                    <g id="SvgjsG1467"
                                                                        class="apexcharts-xaxis-annotations"></g>
                                                                    <g id="SvgjsG1468"
                                                                        class="apexcharts-point-annotations"></g>
                                                                </g>
                                                                <rect id="SvgjsRect1427" width="0"
                                                                    height="0" x="0" y="0"
                                                                    rx="0" ry="0" opacity="1"
                                                                    stroke-width="0" stroke="none"
                                                                    stroke-dasharray="0" fill="#fefefe"></rect>
                                                                <g id="SvgjsG1463" class="apexcharts-yaxis"
                                                                    rel="0" transform="translate(-18, 0)"></g>
                                                                <g id="SvgjsG1425" class="apexcharts-annotations"></g>
                                                            </svg>
                                                            <div class="apexcharts-legend" style="max-height: 30px;">
                                                            </div>
                                                            <div class="apexcharts-tooltip apexcharts-theme-light"
                                                                style="left: -20px; top: 0px;">
                                                                <div class="apexcharts-tooltip-title"
                                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                    4</div>
                                                                <div class="apexcharts-tooltip-series-group apexcharts-active"
                                                                    style="order: 1; display: flex;"><span
                                                                        class="apexcharts-tooltip-marker"
                                                                        style="background-color: rgb(220, 38, 38);"></span>
                                                                    <div class="apexcharts-tooltip-text"
                                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                        <div class="apexcharts-tooltip-y-group"><span
                                                                                class="apexcharts-tooltip-text-y-label">series-1:
                                                                            </span><span
                                                                                class="apexcharts-tooltip-text-y-value">10</span>
                                                                        </div>
                                                                        <div class="apexcharts-tooltip-goals-group">
                                                                            <span
                                                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                                                class="apexcharts-tooltip-text-goals-value"></span>
                                                                        </div>
                                                                        <div class="apexcharts-tooltip-z-group"><span
                                                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                                                class="apexcharts-tooltip-text-z-value"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                                <div class="apexcharts-yaxistooltip-text"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xl-4">
                                            <div class="mt-3 d-grid">
                                                <button
                                                    class="btn btn-primary d-flex align-items-center justify-content-center"><i
                                                        class="ti ti-plus"></i> Add Task</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body pb-0">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h5 class="mb-0">My Task</h5>
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
                                                <h6 class="mb-0">Follow up client for feedback</h6>
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


                        <div class="col-md-6">
                            <div class="card task-card">
                                <div class="card-header d-flex align-items-center justify-content-between">
                                    <h5>Tasks</h5>
                                    <a href="#" class="link-primary">View all</a>
                                </div>
                                <div class="card-body">
                                    <ul class="list-unstyled task-list">
                                        <li>
                                            <i class="feather icon-check f-w-600 task-icon bg-success"></i>
                                            <p class="m-b-5">8:50</p>
                                            <h5 class="text-muted">Call to customer <span class="text-primary"> <a
                                                        href="#!" class="text-primary">Jacob</a> </span> and
                                                discuss the</h5>
                                        </li>
                                        <li>
                                            <i class="task-icon bg-primary"></i>
                                            <p class="m-b-5">Sat, 5 Mar</p>
                                            <h5 class="text-muted">Design mobile Application</h5>
                                        </li>
                                        <li>
                                            <i class="task-icon bg-danger"></i>
                                            <p class="m-b-5">Sun, 17 Feb</p>
                                            <h5 class="text-muted"><span class="text-primary"><a href="#!"
                                                        class="text-primary">Jeny</a></span>
                                                assign you a task
                                                <span class="text-primary"><a href="#!"
                                                        class="text-primary">Mockup
                                                        Design.</a></span>
                                            </h5>
                                        </li>
                                        <li>
                                            <i class="task-icon bg-warning"></i>
                                            <p class="m-b-5">Sat, 18 Mar</p>
                                            <h5 class="text-muted">Design logo</h5>
                                        </li>
                                        <li class="p-b-15 m-b-10">
                                            <i class="task-icon bg-success"></i>
                                            <p class="m-b-5">Sat, 22 Mar</p>
                                            <h5 class="text-muted">Design mobile Application</h5>
                                        </li>
                                    </ul>
                                    <div class="text-end">
                                        <a href="#!" class="b-b-primary text-primary">View Friend List</a>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="col-12">
                            <div id="calendar" class="calendar"></div>

                        </div>
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
