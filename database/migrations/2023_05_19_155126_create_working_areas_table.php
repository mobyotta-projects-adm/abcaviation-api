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
        Schema::create('working_areas', function (Blueprint $table) {
            $table->id();
         
            $table->foreignId('location_id')->constrained();
            $table->string('sort')->nullable();
            $table->string("name");
            $table->string("color");
            $table->string("export_code")->nullable();
            $table->boolean("count_work_time")->default(false);
            $table->boolean("have_physical_address")->default(false);
            $table->timestamps();
        });

        


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('working_areas');
    }
};
