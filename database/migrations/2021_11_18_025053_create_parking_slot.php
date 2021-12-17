<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParkingSlot extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parking_slots', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger("parking_home_id");
            $table->unsignedBigInteger("driver_id");
            $table->string("sdt");
            $table->string("time");
            $table->string("tecktime");//h lấy gửi
            $table->string("vehicle");// phương tiện giao thông
            $table->timestamps();
            $table->foreign("parking_home_id")->references("id")->on("parking_homes");
//           $table->foreign("driver_id")->references("id")->on("drivers");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parking_spots');
    }
}
