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
        Schema::create('businesses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('owner_id');
            $table->foreign('owner_id')->references('id')->on('users');
            
            $table->string("name");
            $table->string('profile_photo_path', 2048)->nullable();

            $table->string("category");
            $table->string("industry");
            $table->string("size");

            $table->string("aim");
            $table->string("payroll");

            $table->string("notes")->nullable();


            //sheduling tab

            $table->string("first_day")->default("Monday");
            $table->string("default_shift_hours")->default(8);
            $table->string("default_break_duration")->default(30);

            $table->string("prevent_changes_to_shift")->default("never");
            $table->string("shift_notifications_recipient")->default("best_fit");
            $table->string("shift_removal_notification")->default("email_and_push");



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
        Schema::dropIfExists('businesses');
    }
};
