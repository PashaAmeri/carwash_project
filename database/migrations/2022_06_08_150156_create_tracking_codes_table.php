<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrackingCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tracking_codes', function (Blueprint $table) {
            
            $table->id("ID");
            $table->bigInteger('total_price');
            $table->time('total_time');
            $table->text('description');
            $table->char('full_name', 100);
            $table->bigInteger('phone_number');
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
        Schema::dropIfExists('tracking_codes');
    }
}
