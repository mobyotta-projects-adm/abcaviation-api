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
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();

            $table->string("mobile",10)->unique()->nullable();

            //address
            $table->string("address");
            $table->string("city");
            $table->string("country");
            $table->string("state");
            $table->string("postal_code");

            // emergency contact information
            $table->string("emergency_contact_name");
            $table->string("emergency_contact_number");

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
        Schema::dropIfExists('user_profiles');
    }
};
