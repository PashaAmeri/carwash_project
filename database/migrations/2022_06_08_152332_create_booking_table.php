<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking', function (Blueprint $table) {

            $table->id("ID");
            $table->unsignedBigInteger('code');
            $table->unsignedBigInteger('service_id');
            $table->timestamps();

            $table->foreign('code')->references('ID')->on('tracking_codes');
            $table->foreign('service_id')->references('ID')->on('services');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking');
    }
}
