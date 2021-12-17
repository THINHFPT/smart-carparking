<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParkingsHome extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parking_homes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('avatar')->default('https://profile-picture-upload-nodejs.s3.amazonaws.com/download.png');
            $table->text('address');
            $table->string('sdt');
            $table->string('price');
            $table->string('area');
            $table->string("start_time");
            $table->string("end_time");
            $table->string("max_panking_slot");
            $table->unsignedBigInteger('parking_manager_id');
            $table->foreign('parking_manager_id')->references('id')->on('parking_managers');
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
        Schema::dropIfExists('parkings_homes');
    }
}
