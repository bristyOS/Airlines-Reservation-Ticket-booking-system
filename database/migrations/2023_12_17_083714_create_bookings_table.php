<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->dateTime('departure_date');
            $table->dateTime('arrival_date')->nullable();
            $table->string('trip_type');
            $table->string('seat_count');
            $table->string('class_id');
            $table->string('flight_id');
            $table->string('total_price');
            $table->string('payment_status');
            $table->string('Status');
            $table->string('Name');
            $table->string('Transaction_id')->unique();
            $table->timestamps();
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
