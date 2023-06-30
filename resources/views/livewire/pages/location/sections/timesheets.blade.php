@if (session()->has('message'))
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        <button type="button" class="btn-close text-danger" data-bs-dismiss="alert" aria-label="Close"></button>
        <strong>Updated Successful</strong>
    </div>
@endif
<form method="post" wire:submit.prevent='submitTimesheetTab'>
    <h2>Clock in and out </h2>


    <div class="form-group row">
        <div class="col-md-6">
            <label for="config-CAN_MOBILE_BUMP_SHIFT"><strong>Clock in and out via mobile apps</strong></label>
            <p class="gray text--small margin-none"></p>
        </div>
        <div class="col-md-6">
            <label class="toggle">
                <div class="form-check form-switch"><input type="checkbox"
                        wire:model="can_mobile_bump_shift"class="form-check-input input-primary"
                        id="config-CAN_MOBILE_BUMP_SHIFT"></div>


            </label>
        </div>
    </div>


    <div class="form-group row">
        <div class="col-md-6 ">
            <label for="config-CAN_BUMP_SHIFT_VIA_DESK"><strong>Clock in and out via web browser</strong></label>
            <p class="gray text--small margin-none"></p>
        </div>
        <div class="col-md-6 ">
            <label class="toggle">
                <div class="form-check form-switch"><input type="checkbox"
                        wire:model="can_bump_shift_via_desk"class="form-check-input input-primary"
                        id="config-CAN_BUMP_SHIFT_VIA_DESK"></div>


            </label>
        </div>
    </div>

    <div class="form-group m-form-group-border row">
        <div class="col-md-6 ">
            <label for="config-CAN_SMS_BUMP_SHIFT"><strong>Clock in and out via SMS</strong></label>
            <p class="gray text--small margin-none">Team members can reply to the shift message sent to them with "start
                shift", "end shift", and "break shift" to begin and end their shift and break.</p>
        </div>

        <div class="col-md-6 ">
            <label class="toggle">
                <div class="form-check form-switch"><input type="checkbox"
                        wire:model="can_sms_bump_shift"class="form-check-input input-primary"
                        id="config-CAN_SMS_BUMP_SHIFT"></div>


            </label>
        </div>
    </div>

    <div class="form-group m-form-group-border row">
        <div class="col-md-6 ">
            <label for="config-REQUIRE_KIOSK_PHOTO_BUMP_SHIFT"><strong>Require a photo when starting and ending shifts
                    in
                    Kiosk</strong></label>
            <p class="gray text--small margin-none">Team members must take a photo in the Kiosk when starting and ending
                their shifts.</p>
        </div>

        <div class="col-md-6 ">
            <label class="toggle">
                <div class="form-check form-switch"><input type="checkbox"
                        wire:model="require_kiosk_photo_bump_shift"class="form-check-input input-primary"
                        id="config-REQUIRE_KIOSK_PHOTO_BUMP_SHIFT" checked="checked"></div>


            </label>
        </div>
    </div>

    <div class="form-group m-form-group-border row">
        <div class="col-md-6 ">
            <label for="config-TIMESHEET_CLOSEST_BLOCK"><strong>Minimum timesheet length (minutes)</strong></label>
            <p class="gray text--small margin-none">Timesheets shorter than the minimum length will be deleted.</p>
        </div>

        <div class="col-md-6 ">
            <select wire:model="timesheet_closest_block" class=" form-control" id="config-TIMESHEET_CLOSEST_BLOCK">
                <option value="1">1</option>
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="15">15</option>
            </select>
        </div>
    </div>

    <h2 class="setting-header">Team member permissions</h2>
    <div class="form-group m-form-group-border row">
        <div class="col-md-6 ">
            <label for="config-CAN_SUBMIT_SHIFT_VIA_DESK"><strong>Add and edit timesheets</strong></label>
            <p class="gray text--small margin-none">Team members can create or amend existing timesheets via the web
                browser
                or mobile app.</p>
        </div>

        <div class="col-md-6 ">
            <label class="toggle">
                <div class="form-check form-switch"><input type="checkbox"
                        wire:model="can_submit_shift_via_desk"class="form-check-input input-primary"
                        id="config-CAN_SUBMIT_SHIFT_VIA_DESK" checked="checked"></div>


            </label>
        </div>
    </div>


    <div class="form-group m-form-group-border row">
        <div class="col-md-6 ">
            <label for="config-CAN_MODIFY_TIMESHEET_ON_END"><strong>Modify timesheets during shifts</strong></label>
            <p class="gray text--small margin-none">Team members can modify their timesheets before their shift ends.
            </p>
        </div>

        <div class="col-md-6 ">
            <label class="toggle">
                <div class="form-check form-switch"><input type="checkbox"
                        wire:model="can_modify_timesheet_on_end"class="form-check-input input-primary"
                        id="config-CAN_MODIFY_TIMESHEET_ON_END" checked="checked"></div>


            </label>
        </div>
    </div>

    <div class="form-group m-form-group-border row">
        <div class="col-md-6 ">
            <label for="config-CAN_CLOCKIN_SHIFT_EARLIER"><strong>Start shifts anytime before scheduled
                    time</strong></label>
            <p class="gray text--small margin-none">If 'on', team members can start at anytime earlier than their
                scheduled
                start time.</p>
        </div>

        <div class="col-md-6 ">
            <label class="toggle">
                <div class="form-check form-switch"><input type="checkbox"
                        wire:model="can_clockin_shift_earlier"class="form-check-input input-primary"
                        id="config-CAN_CLOCKIN_SHIFT_EARLIER" checked="checked"></div>


            </label>
        </div>
    </div>

    <div class="form-group m-form-group-border row">
        <div class="col-md-6">
            <label for="config-CAN_CLOCKIN_SHIFT_EARLIER_MINS"><strong>How early team members can start shifts
                    (minutes)</strong></label>
            <p class="gray text--small margin-none">The number of minutes team members can start before their scheduled
                shift time.</p>
        </div>
        <div class="col-md-6">
            <input type="text" wire:model="can_clockin_shift_earlier_mins" class=" form-control disabled"
                id="config-CAN_CLOCKIN_SHIFT_EARLIER_MINS" disabled="disabled">
        </div>
    </div>

    <div class="form-group m-form-group-border row">
        <div class="col-md-6">
            <label for="config-TIMESHEET_MATURITY"><strong>Ending shifts earlier than scheduled</strong></label>
            <p class="gray text--small margin-none">The number of minutes team members can end earlier than their
                scheduled
                shift time.</p>
        </div>
        <div class="col-md-4">
            <input type="text" wire:model="timesheet_maturity" class=" form-control"
                id="config-TIMESHEET_MATURITY">
        </div>
    </div>

    <div class="form-group m-form-group-border row">
        <div class="col-md-6">
            <label for="config-CAN_END_BREAK_EARLIER"><strong>End breaks earlier</strong></label>
            <p class="gray text--small margin-none">Team members can end their breaks earlier than the scheduled
                duration
                or end time.</p>
        </div>
        <div class="col-md-4">
            <label class="toggle">
                <div class="form-check form-switch"><input type="checkbox"
                        wire:model="can_end_break_earlier"class="form-check-input input-primary"
                        id="config-CAN_END_BREAK_EARLIER" checked="checked"></div>


            </label>
        </div>
    </div>

    <h2>Timesheet approving
    </h2>

    <div class="form-group m-form-group-border row">
        <div class="col-md-6 ">
            <label for="config-TIMESHEET_AUTO_TIME_APPROVE"><strong>Auto time-approve timesheets</strong></label>
            <p class="gray text--small margin-none">Timesheets can automatically be time-approved when it matches the
                scheduled time or if it's within the selected time variance.</p>
        </div>
        <div class="col-md-4 ">
            <select wire:model="timesheet_auto_time_approve" class=" form-control"
                id="config-TIMESHEET_AUTO_TIME_APPROVE">
                <option value="0">never</option>
                <option value="5">when variance from schedule is up to 5 minutes</option>
                <option value="10">when variance from schedule is up to 10 minutes</option>
                <option value="15">when variance from schedule is up to 15 minutes</option>
                <option value="20">when variance from schedule is up to 20 minutes</option>
                <option value="30">when variance from schedule is up to 30 minutes</option>
                <option value="60">when variance from schedule is up to 60 minutes</option>
            </select>
        </div>
    </div>

    <div class="form-group m-form-group-border row">
        <div class="col-md-6 ">
            <label for="config-TIMESHEET_AUTO_ROUND"><strong>Automatically round timesheets</strong></label>
            <p class="gray text--small margin-none">Timesheets can be auto-rounded based on the below settings.</p>
        </div>
        <div class="col-md-4 ">
            <label class="toggle">
                <div class="form-check form-switch"><input type="checkbox"
                        wire:model="timesheet_auto_round"class="form-check-input input-primary"
                        id="config-TIMESHEET_AUTO_ROUND"></div>


            </label>
        </div>
    </div>
    <div class="form-group m-form-group-border row">
        <div class="col-md-6 ">
            <label for="config-TIMESHEET_ROUND_START_TIME_RS"><strong>Round to scheduled start time if
                    earlier</strong></label>
            <p class="gray text--small margin-none">If 'on', the timesheet will be rounded to the scheduled start time.
                If
                start time is later than scheduled, it will be rounded based on the setting below.</p>
        </div>
        <div class="col-md-4 ">
            <label class="toggle">
                <div class="form-check form-switch"><input type="checkbox"
                        wire:model="timesheet_round_start_time_rs"class="form-check-input input-primary"
                        id="config-TIMESHEET_ROUND_START_TIME_RS"></div>


            </label>
        </div>
    </div>

    <div class="form-group m-form-group-border row">
        <div class="col-md-6 ">
            <label for="config-TIMESHEET_ROUND_START_TIME"><strong>Start time rounding</strong></label>
            <p class="gray text--small margin-none">Used when rounding timesheets manually or automatically. Rounding
                the
                start time later may reduce total hours worked.</p>
        </div>
        <div class="col-md-4 ">
            <select wire:model="timesheet_round_start_time" class=" form-control"
                id="config-TIMESHEET_ROUND_START_TIME">
                <option value="0">No rounding</option>
                <optgroup label="Closer">
                    <option value="c5">closer 5</option>
                    <option value="c10">closer 10</option>
                    <option value="c15">closer 15</option>
                    <option value="c20">closer 20</option>
                    <option value="c30">closer 30</option>
                    <option value="c60">closer 60</option>
                </optgroup>
                <optgroup label="Earlier">
                    <option value="d5">earlier 5</option>
                    <option value="d10">earlier 10</option>
                    <option value="d15">earlier 15</option>
                    <option value="d20">earlier 20</option>
                    <option value="d30">earlier 30</option>
                    <option value="d60">earlier 60</option>
                </optgroup>
                <optgroup label="Later">
                    <option value="u5">later 5</option>
                    <option value="u10">later 10</option>
                    <option value="u15">later 15</option>
                    <option value="u20">later 20</option>
                    <option value="u30">later 30</option>
                    <option value="u60">later 60</option>
                </optgroup>
            </select>
        </div>
    </div>

    <div class="form-group m-form-group-border row">
        <div class="col-md-6 ">
            <label for="config-TIMESHEET_ROUND_END_TIME_RS"><strong>Round to scheduled end time if
                    later</strong></label>
            <p class="gray text--small margin-none">If 'on', the timesheet will be rounded to the scheduled end time.
                If
                end time is earlier than scheduled, it will be rounded based on the setting below.</p>
        </div>
        <div class="col-md-4 ">
            <label class="toggle">
                <div class="form-check form-switch"><input type="checkbox"
                        wire:model="timesheet_round_end_time_rs"class="form-check-input input-primary"
                        id="config-TIMESHEET_ROUND_END_TIME_RS"></div>


            </label>
        </div>
    </div>


    <div class="form-group m-form-group-border row">
        <div class="col-md-6 ">
            <label for="config-TIMESHEET_ROUND_END_TIME"><strong>End time rounding</strong></label>
            <p class="gray text--small margin-none">Used when rounding timesheets manually or automatically. Rounding
                the
                end time later may reduce total hours worked.</p>
        </div>
        <div class="col-md-4 ">
            <select wire:model="timesheet_round_end_time" class=" form-control" id="config-TIMESHEET_ROUND_END_TIME">
                <option value="0">No rounding</option>
                <optgroup label="Closer">
                    <option value="c5">closer 5</option>
                    <option value="c10">closer 10</option>
                    <option value="c15">closer 15</option>
                    <option value="c20">closer 20</option>
                    <option value="c30">closer 30</option>
                    <option value="c60">closer 60</option>
                </optgroup>
                <optgroup label="Earlier">
                    <option value="d5">earlier 5</option>
                    <option value="d10">earlier 10</option>
                    <option value="d15">earlier 15</option>
                    <option value="d20">earlier 20</option>
                    <option value="d30">earlier 30</option>
                    <option value="d60">earlier 60</option>
                </optgroup>
                <optgroup label="Later">
                    <option value="u5">later 5</option>
                    <option value="u10">later 10</option>
                    <option value="u15">later 15</option>
                    <option value="u20">later 20</option>
                    <option value="u30">later 30</option>
                    <option value="u60">later 60</option>
                </optgroup>
            </select>
        </div>
    </div>


    <div class="form-group m-form-group-border row">
        <div class="col-md-6 ">
            <label for="config-TIMESHEET_ROUND_MEALBREAK_RS"><strong>Round to scheduled break if break duration is
                    shorter</strong></label>
            <p class="gray text--small margin-none">If 'on', the timesheet will be rounded to the scheduled duration.
                If
                break duration is longer than scheduled, it will be rounded based on the setting below.</p>
        </div>
        <div class="col-md-4 ">
            <label class="toggle">
                <div class="form-check form-switch"><input type="checkbox"
                        wire:model="timesheet_round_mealbreak_rs"class="form-check-input input-primary"
                        id="config-TIMESHEET_ROUND_MEALBREAK_RS"></div>


            </label>
        </div>
    </div>


    <div class="form-group m-form-group-border row">
        <div class="col-md-6 ">
            <label for="config-TIMESHEET_ROUND_MEALBREAK"><strong>Break time rounding</strong></label>
            <p class="gray text--small margin-none">Used when rounding timesheets manually or automatically. Rounding
                the
                break time later may reduce total hours worked.</p>
        </div>
        <div class="col-md-4 ">
            <select wire:model="timesheet_round_mealbreak" class=" form-control"
                id="config-TIMESHEET_ROUND_MEALBREAK">
                <option value="0">No rounding</option>
                <optgroup label="Closer">
                    <option value="c5">closer 5</option>
                    <option value="c10">closer 10</option>
                    <option value="c15">closer 15</option>
                    <option value="c20">closer 20</option>
                    <option value="c30">closer 30</option>
                    <option value="c60">closer 60</option>
                </optgroup>
                <optgroup label="Shorter">
                    <option value="d5">shorter 5</option>
                    <option value="d10">shorter 10</option>
                    <option value="d15">shorter 15</option>
                    <option value="d20">shorter 20</option>
                    <option value="d30">shorter 30</option>
                    <option value="d60">shorter 60</option>
                </optgroup>
                <optgroup label="Longer">
                    <option value="u5">longer 5</option>
                    <option value="u10">longer 10</option>
                    <option value="u15">longer 15</option>
                    <option value="u20">longer 20</option>
                    <option value="u30">longer 30</option>
                    <option value="u60">longer 60</option>
                </optgroup>
            </select>
        </div>
    </div>

    <h2>Unscheduled shifts
    </h2>

    <div class="form-group m-form-group-border row">
        <div class="col-md-6 ">
            <label for="config-TIMESHEET_MATCH_ROSTER"><strong>Link unscheduled timesheet with a scheduled
                    shift</strong></label>
            <p class="gray text--small margin-none">Unscheduled timesheets can be linked to a scheduled shift if the
                area
                or location matches. The default option (Best Fit) will link when an unscheduled timesheet starts 8
                hours
                before or after a scheduled shift.</p>
        </div>
        <div class="col-md-4 ">
            <select wire:model="timesheet_match_roster" class=" form-control" id="config-TIMESHEET_MATCH_ROSTER">
                <option value="0">Best Fit (default)</option>
                <option value="1">If timesheet Area matches with scheduled shift Area</option>
                <option value="2">If timesheet Location matches with scheduled shift Location</option>
                <option value="3">If timesheet is within a time variance of a scheduled shift</option>
            </select>
        </div>
    </div>

    <div class="form-group m-form-group-border row">
        <div class="col-md-6 ">
            <label for="config-TIMESHEET_MATCH_ROSTER_TIME"><strong>Time variance</strong></label>
            <p class="gray text--small margin-none">Link unscheduled timesheet with a scheduled shift determined by a
                time
                variance</p>
        </div>
        <div class="col-md-4 ">
            <select wire:model="timesheet_match_roster_time" class=" form-control"
                id="config-TIMESHEET_MATCH_ROSTER_TIME" disabled>
                <option value="0">No preference on time</option>
                <option value="60">Match when timesheet is up to 60 minutes earlier than schedule</option>
                <option value="120">Match when timesheet is up to 120 minutes earlier than schedule</option>
                <option value="240">Match when timesheet is up to 240 minutes earlier than schedule</option>
            </select>
        </div>
    </div>

    <h2>Breaks
    </h2>

    <div class="form-group m-form-group-border row">
        <div class="col-md-6 ">
            <label for="config-AUTO_SUGGEST_BREAK"><strong>Suggest a break when clocking out</strong></label>
            <p class="gray text--small margin-none">When clocking out, if no breaks were taken during the shift,
                suggest a
                break duration.</p>
        </div>
        <div class="col-md-4 ">
            <label class="toggle">
                <div class="form-check form-switch"><input type="checkbox"
                        wire:model="auto_suggest_break"class="form-check-input input-primary"
                        id="config-AUTO_SUGGEST_BREAK" checked="checked"></div>


            </label>
        </div>
    </div>

    <div class="form-group m-form-group-border row">
        <div class="col-md-6 ">
            <label for="config-CAN_DISPLAY_BREAK_WARNING"><strong>Display warning for shorter or missed
                    breaks</strong></label>
            <p class="gray text--small margin-none">Display a warning in the timesheet if a scheduled break is shorter
                or
                was missed.</p>
        </div>
        <div class="col-md-4 ">
            <label class="toggle">
                <div class="form-check form-switch"><input type="checkbox"
                        wire:model="can_display_break_warning"class="form-check-input input-primary"
                        id="config-CAN_DISPLAY_BREAK_WARNING"></div>


            </label>
        </div>
    </div>

    <div class="form-group m-form-group-border row">
        <div class="col-md-6 ">
            <label for="config-MEALBREAK_IS_PAID"><strong>Paid meal breaks (legacy)</strong></label>
            <p class="gray text--small margin-none">Meal breaks can be paid or unpaid. We do not recommend using this
                setting - use 'Rest breaks' as a paid break.</p>
        </div>
        <div class="col-md-4 ">
            <select wire:model="mealbreak_is_paid" class=" form-control" id="config-MEALBREAK_IS_PAID">
                <option value="0">All Meal breaks are unpaid</option>
                <option value="1">All Meal breaks are paid</option>
            </select>
        </div>
    </div>
    <button type="submit" name="" id="" class="btn btn-primary">Submit</button>
</form>
