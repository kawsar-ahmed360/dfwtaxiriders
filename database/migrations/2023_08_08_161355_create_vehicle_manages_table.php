<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehicleManagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle_manages', function (Blueprint $table) {
            $table->id();
            $table->text('title')->nullable();
            $table->text('service_name')->nullable();
            $table->text('areas_we_serve')->nullable();
            $table->text('rate')->nullable();
            $table->text('flat_rate_10_miles')->nullable();
            $table->text('flat_rate_20_miles')->nullable();
            $table->text('flat_rate_30_miles')->nullable();
            $table->text('flat_rate_40_miles')->nullable();
            $table->text('bag_capacity')->nullable();
            $table->text('passengers')->nullable();
            $table->text('image')->nullable();
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
        Schema::dropIfExists('vehicle_manages');
    }
}
