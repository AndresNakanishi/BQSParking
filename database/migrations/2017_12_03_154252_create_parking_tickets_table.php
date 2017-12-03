<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParkingTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parking_tickets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('customerID');
            $table->bigInteger('operatorID');
            $table->bigInteger('vehicleID');
            $table->bigInteger('ticketID');
            $table->decimal('amount', 8, 2);
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
        Schema::dropIfExists('parking_tickets');
    }
}
