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
        Schema::create('trains', function (Blueprint $table) {
            $table->id(); $table->string('Company', 100)->nullable();
            $table->string('Departure_station', 100); 
            $table->string('Arrival_station', 100);
            $table->datetime('Departure_time'); 
            $table->datetime('Time_of_arrival');
            $table->string('Train_code', 10); 
            $table->unsignedTinyInteger('Carriage_number');
            $table->boolean('On_schedule')->default(1);
            $table->boolean('Cancelled')->default(0); 
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
        Schema::dropIfExists('trains');
    }
};
