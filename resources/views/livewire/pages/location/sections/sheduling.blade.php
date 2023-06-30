<form method="post" wire:submit.prevent='submitSheduledTab'>

    <div class="form-group row">
        <div class="col-md-6">
            <label for="config-WEEK_START"><strong>First day of week</strong></label>
            <p class="gray text--small margin-none">This determines the start day of the schedule and
                also sets the default week period for calculating weekly overtime.</p>
        </div>
        <div class="col-md-6">
            <select wire:model="week_start" class="config-entry form-control" id="config-WEEK_START">
                <option value="1">Mon</option>
                <option value="2">Tue</option>
                <option value="3">Wed</option>
                <option value="4">Thu</option>
                <option value="5">Fri</option>
                <option value="6">Sat</option>
                <option value="7">Sun</option>
            </select>
        </div>

    </div>

    <div class="form-group row">
        <div class="col-md-6">
            <label for="config-default_shift_duration"><strong>Default shift duration
                    (hours)</strong></label>
            <p class="gray text--small margin-none">Default shift length when creating shifts.</p>
        </div>

        <div class="col-md-6">
            <input type="text" wire:model="default_shift_duration" class="config-entry form-control"
                id="config-default_shift_duration">
        </div>

    </div>

    <div class="form-group row">
        <div class="col-md-6">
            <label for="config-DEFAULT_MEALBREAK_DURATION"><strong>Default break duration
                    (minutes)</strong></label>
            <p class="gray text--small margin-none">Default break length when creating shifts.</p>
        </div>
        <div class="col-md-6">
            <select wire:model="default_mealbreak_duration" class="config-entry form-control"
                id="config-DEFAULT_MEALBREAK_DURATION">
                <option value="0">0</option>
                <option value="0.25">15</option>
                <option value="0.5">30</option>
                <option value="0.75">45</option>
                <option value="1">60</option>
                <option value="1.25">75</option>
                <option value="1.5">90</option>
                <option value="1.75">105</option>
                <option value="2">120</option>
                <option value="2.25">135</option>
                <option value="2.5">150</option>
                <option value="2.75">165</option>
                <option value="3">180</option>
                <option value="3.25">195</option>
                <option value="3.5">210</option>
                <option value="3.75">225</option>
                <option value="4">240</option>

            </select>
        </div>
    </div>
    <h2 class="setting-header">Creating and publishing shifts</h2>

    <div class="form-group row">
        <div class="col-md-6">
            <label for="config-ROSTER_PREVENT_CHANGE_HOURS"><strong>Prevent changes to
                    shifts</strong></label>
            <p class="gray text--small margin-none">Shifts will lock after a set time period.</p>
        </div>
        <div class="col-md-6">
            <select wire:model="roster_prevent_change_hours" class="config-entry form-control"
                id="config-ROSTER_PREVENT_CHANGE_HOURS">
                <option value="24000">never</option>
                <option value="168">after 7 days</option>
                <option value="72">after 3 days</option>
                <option value="24">after 1 day</option>
            </select>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-6">
            <label for="config-ROSTER_PREVENT_CHANGE_HOURS"><strong>Prevent changes to
                    shifts</strong></label>
            <p class="gray text--small margin-none">Shifts will lock after a set time period.</p>
        </div>
        <div class="col-md-6">
            <select wire:model="roster_prevent_change_hours" class="config-entry form-control"
                id="config-ROSTER_PREVENT_CHANGE_HOURS">
                <option value="24000">never</option>
                <option value="168">after 7 days</option>
                <option value="72">after 3 days</option>
                <option value="24">after 1 day</option>
            </select>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-6">
            <label for="config-NOTIFICATION_ON_SHIFT_REMOVED"><strong>Send notification to team member
                    when shifts are removed</strong></label>
            <p class="gray text--small margin-none">Notify team members when they are removed from a
                published shift.</p>
        </div>
        <div class="col-md-6">
            <select wire:model="notification_on_shift_removed" class="config-entry form-control"
                id="config-NOTIFICATION_ON_SHIFT_REMOVED">
                <option value="0">No notifications for shift removal</option>
                <option value="1">Email and smartphone push notifications</option>
            </select>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-6">
            <label for="config-ROSTER_REQUIRE_CONFIRM_HOURS"><strong>Turn unconfirmed published shifts
                    to open shifts</strong></label>
            <p class="gray text--small margin-none">After this timeframe, unconfirmed published shifts
                will become open shifts.</p>
        </div>
        <div class="col-md-6">
            <select wire:model="roster_require_confirm_hours" class="config-entry form-control"
                id="config-ROSTER_REQUIRE_CONFIRM_HOURS">
                <option value="0">Not Required</option>
                <option value="12">12 Hours before Start Time</option>
                <option value="24">24 Hours before Start Time</option>
                <option value="72">3 Days before Start Time</option>
                <option value="168">1 Week before Start Time</option>
                <option value="336">2 Weeks before Start Time</option>
                <option value="720">30 Days before Start Time</option>
            </select>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-6">
            <label for="config-ROSTER_RECOMMENDATION_SORTING"><strong>Scheduling suggestion
                    order</strong></label>
            <p class="gray text--small margin-none">Choose how suggested team members are displayed.
                Best fit spreads scheduled hours evenly amongst the team while minimizing costs.</p>
        </div>
        <div class="col-md-6">
            <select wire:model="roster_recommendation_sorting" class="config-entry form-control"
                id="config-ROSTER_RECOMMENDATION_SORTING">
                <option value="ALPHA">Alphabetically (A-Z)</option>
                <option value="WAGE">Wage Cost (Low to High)</option>
                <option value="HOUR">Hours Scheduled (Low to High)</option>
                <option value="BEST">Best Fit</option>
            </select>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-6">
            <label for="config-ROSTER_ALLOW_SMS_WITH_FULL_NAME"><strong>Display location and area name
                    when publishing shifts via SMS</strong></label>
            <p class="gray text--small margin-none">The location and area names will be displayed
                instead of their codes. This may result in additional SMS charges.</p>
        </div>
        <div class="col-md-6">
            <label class="toggle">
                <div class="form-check form-switch"><input type="checkbox"
                        wire:model="roster_allow_sms_with_full_name" class="form-check-input input-primary"
                        id="config-ROSTER_ALLOW_SMS_WITH_FULL_NAME"></div>
                <div class="background"></div>

            </label>
        </div>
    </div>

    <h2 class="setting-header">Swaps and offers</h2>
    <div class="form-group row">
        <div class="col-md-6">
            <label for="config-ROSTER_ALLOW_PEER_VIEW"><strong>Co-worker schedule
                    visibility</strong></label>
            <p class="gray text--small margin-none">If team members can view each other's schedule, you
                can enable shift swaps between team members.</p>
        </div>
        <div class="col-md-6">
            <select wire:model="roster_allow_peer_view" class="config-entry form-control"
                id="config-ROSTER_ALLOW_PEER_VIEW">
                <option value="0">Only allow today's schedules</option>
                <option value="1">Allow all</option>
                <option value="2">Allow none. Completely block all visibility</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-6">
            <label for="config-ROSTER_ALLOW_SWAP_SHIFT"><strong>Swap shifts</strong></label>
            <p class="gray text--small margin-none">Team members can swap shifts with each other if
                they both have the appropriate training.</p>
        </div>
        <div class="col-md-6">
            <label class="toggle">
                <div class="form-check form-switch"><input type="checkbox" wire:model="roster_allow_swap_shift"
                        class="config-entry form-check-input" id="config-ROSTER_ALLOW_SWAP_SHIFT"></div>

            </label>
        </div>
    </div>


    <div class="form-group row">
        <div class="col-md-6">
            <label for="config-ROSTER_ALLOW_OFFER_SHIFT"><strong>Offer shifts</strong></label>
            <p class="gray text--small margin-none">Team members can offer their shift to co-workers
                that are qualified and available. Manager approval is not required but will be notified
                when the shift has been accepted.</p>
        </div>
        <div class="col-md-6">
            <label class="toggle">
                <div class="form-check form-switch"><input type="checkbox" wire:model="roster_allow_offer_shift"
                        class="form-check-input input-primary" id="config-ROSTER_ALLOW_OFFER_SHIFT"></div>
                <div class="background"></div>

            </label>
        </div>
    </div>

    <h2>Reporting</h2>
    <div class="form-group row">
        <div class="col-md-6">
            <label for="config-SHIFT_COST_ADDITIONAL"><strong>On-cost percentage</strong></label>
            <p class="gray text--small margin-none">Add additional cost for all salaries and wages.
                This will show up on the Schedule screen and on the Schedule vs Timesheet vs Sales
                report.</p>
        </div>
        <div class="col-md-6">
            <div class="input-group">
                <input type="text" wire:model="shift_cost_additional"
                    class="config-entry form-control input-percentage" id="config-SHIFT_COST_ADDITIONAL">
                <span class="input-group-text input-percentage-tag">%</span>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-6">
            <label for="config-SHIFT_DEFAULT_COST"><strong>Default open/empty shift cost (per
                    hour)</strong></label>
            <p class="gray text--small margin-none">Open/empty shifts are included in schedule hours
                and costs using this default hourly cost. Disable this in Business settings.</p>
        </div>
        <div class="col-md-6">
            <input type="text" wire:model="shift_default_cost" class="config-entry form-control"
                id="config-SHIFT_DEFAULT_COST">
        </div>
    </div>

    <button type="submit" name="" id="" class="btn btn-primary">Submit</button>
</form>
