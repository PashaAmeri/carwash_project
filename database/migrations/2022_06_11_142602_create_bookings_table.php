<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {

            $table->id("ID");
            $table->unsignedBigInteger('service_id');
            $table->date("date");
            $table->time("time");
            $table->bigInteger('total_price');
            $table->time('time_required');
            $table->char('full_name', 32);
            $table->bigInteger('phone_number');
            $table->text('description')->nullable();
            $table->timestamps();

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
        Schema::dropIfExists('bookings');
    }
}
