<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("address");
            $table->string("cordinates")->nullable();
            $table->string("start_week_day")->default("Monday");
            $table->string("timezone")->default("Europe/London");
            $table->json("operating_hours")->nullable();

            //sheduling
            $table->integer("default_shift_duration")->default(8);
            // Strings with null as default
            $table->string('shift_cost_additional')->nullable()->default(null);
            $table->string('shift_default_cost')->nullable()->default(null);
            // Columns with default values
            $table->integer('week_start')->default(1);
            $table->integer('default_mealbreak_duration')->default(0);
            $table->integer('roster_prevent_change_hours')->default(24000);
            $table->integer('notification_on_shift_removed')->default(0);
            $table->integer('roster_require_confirm_hours')->default(0);
            $table->string('roster_recommendation_sorting')->default('ALPHA');
            $table->integer('roster_allow_peer_view')->default(0);

            // Boolean columns with default value false
            $table->boolean('roster_allow_sms_with_full_name')->default(false);
            $table->boolean('roster_allow_swap_shift')->default(false);
            $table->boolean('roster_allow_offer_shift')->default(false);


            //timesheets
            // Strings with null as default
            $table->string('can_clockin_shift_earlier_mins')->nullable()->default(null);
            $table->string('timesheet_maturity')->nullable()->default(null);

            // Columns with default values
            $table->integer('timesheet_closest_block')->default(1);
            $table->integer('timesheet_auto_time_approve')->default(0);
            $table->integer('timesheet_round_start_time')->default(0);
            $table->integer('timesheet_round_end_time')->default(0);
            $table->integer('timesheet_round_mealbreak')->default(0);
            $table->integer('timesheet_match_roster')->default(0);
            $table->integer('timesheet_match_roster_time')->default(0);
            $table->integer('mealbreak_is_paid')->default(0);

            // Boolean columns with default value false
            $table->boolean('can_mobile_bump_shift')->default(false);
            $table->boolean('can_bump_shift_via_desk')->default(false);
            $table->boolean('can_sms_bump_shift')->default(false);
            $table->boolean('require_kiosk_photo_bump_shift')->default(false);
            $table->boolean('can_submit_shift_via_desk')->default(false);
            $table->boolean('can_modify_timesheet_on_end')->default(false);
            $table->boolean('can_clockin_shift_earlier')->default(false);
            $table->boolean('can_end_break_earlier')->default(false);
            $table->boolean('timesheet_auto_round')->default(false);
            $table->boolean('timesheet_round_start_time_rs')->default(false);
            $table->boolean('timesheet_round_end_time_rs')->default(false);
            $table->boolean('timesheet_round_mealbreak_rs')->default(false);
            $table->boolean('auto_suggest_break')->default(false);
            $table->boolean('can_display_break_warning')->default(false);

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locations');
    }
};
