<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingManagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_manages', function (Blueprint $table) {
            $table->id();
            $table->text('reg_id')->nullable();
            $table->text('trip_type')->nullable();
            $table->text('occasion')->nullable();
            $table->text('total_passengers')->nullable();
            $table->text('luggage')->nullable();
            $table->text('pickup_date')->nullable();
            $table->text('pickup_time')->nullable();
            $table->text('drowp_date')->nullable();
            $table->text('drowp_time')->nullable();
            $table->text('pickup_location')->nullable();
            $table->text('drowp_location')->nullable();
            $table->text('vehicle_id')->nullable();
            $table->text('f_name')->nullable();
            $table->text('l_name')->nullable();
            $table->text('company')->nullable();
            $table->text('email')->nullable();
            $table->text('phone')->nullable();
            $table->text('second_phone')->nullable();
            $table->text('message')->nullable();
            $table->text('billing_checked')->nullable();
            $table->text('company_resgister_name')->nullable();
            $table->text('text_number')->nullable();
            $table->text('street')->nullable();
            $table->text('street_number')->nullable();
            $table->text('city')->nullable();
            $table->text('state')->nullable();
            $table->text('postal_code')->nullable();
            $table->text('country')->nullable();
            $table->text('payments')->nullable();
            $table->string('coupon_name')->nullable();
            $table->string('coupon_id')->nullable();
            $table->string('coupon_tk')->nullable();
            $table->integer('total_amount')->nullable();
            $table->string('status')->nullable();
            $table->string('admin_status')->nullable();
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
        Schema::dropIfExists('booking_manages');
    }
}
