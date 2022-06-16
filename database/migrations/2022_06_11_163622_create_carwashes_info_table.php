<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarwashesInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('carwashes_info', function (Blueprint $table) {

            $table->id('ID');
            $table->string('name');
            $table->text('address');
            $table->bigInteger('phone_number');
            $table->time('start_working_hours');
            $table->time('end_working_hours');
            $table->tinyInteger('sots');
            $table->text('description')->nullable();
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
        Schema::dropIfExists('carwashes_info');
    }
}
