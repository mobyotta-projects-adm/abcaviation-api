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
            $table->json("operating_hours");
            $table->integer("default_shift_duration")->default(8);
            $table->integer("default_break_minutes")->default(30);


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
