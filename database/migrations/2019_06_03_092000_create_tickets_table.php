<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ticket_type',100); //type of ticket
            $table->text('desc'); //description
            $table->text('free_day'); //free day *ex sun,sat
            $table->enum('status',['seen','unseen']); // status for seen or unseen
            $table->string('username'); // username-employee
            $table->integer('bul_no'); // building number
            $table->integer('apr_no'); // apertment number
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
        Schema::dropIfExists('tickets');
    }
}
