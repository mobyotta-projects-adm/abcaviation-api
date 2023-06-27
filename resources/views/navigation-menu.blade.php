<li class="pc-item"><a class="pc-link" href="{{ route('me') }}">Me</a></li>
<li class="pc-item"><a class="pc-link" href="{{ route('newsfeed') }}">Newsfeed</a></li>
<li class="pc-item"><a class="pc-link" href="{{ route('tasks') }}">Tasks</a></li>
<li class="pc-item"><a class="pc-link" href="{{ route('location') }}">Location</a></li>
<li class="pc-item"><a class="pc-link" href="{{ route('people') }}">People</a></li>
<li class="pc-item"><a class="pc-link" href="{{ route('schedule') }}">Schedule</a></li>


<li class="pc-item pc-hasmenu">
    <a href="#!" class="pc-link ">
       
        <span class="pc-mtext">TimeSheets</span> <span class="pc-arrow">
            <svg xmlns="http://www.w3.org/2000/svg"
                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
        </span> 
    </a>

    <ul class="pc-submenu">
        <li class="pc-item">
            <a href="{{ route('approved_timesheet') }}" class="pc-link">
                
                <span class="pc-mtext">Approved Timesheet</span>
            </a>
        </li>
        <li class="pc-item">
            <a href="{{ route('export_timesheet') }}" class="pc-link">
                
                <span class="pc-mtext">Export Timesheet</span>
            </a>
        </li>
        
    </ul>
</li>

<li class="pc-item"><a class="pc-link" href="{{ route('report') }}">Report</a></li>


