<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOVChipCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('o_v_chip_cards', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('client_id');
            $table->foreign('client_id')->references('id')->on('clients');
            $table->integer('saldo');
            $table->string('expiresaldo');
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
        Schema::drop('o_v_chip_cards');
    }
}
