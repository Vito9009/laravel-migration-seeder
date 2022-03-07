<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('travels', function (Blueprint $table) {
            $table->string('agenzia', 50);
            $table->string('destinazione', 30);
            $table->string('stazione_aeroporto_partenza', 40);
            $table->string('stazione_aeroporto_arrivo', 40);
            $table->string('hotel', 20);
            $table->integer('codice_treno_aereo');
            $table->string('stazione_arrivo', 40);
            $table->dateTime('giorno_partenza_andata', 0);
            $table->time('orario_partenza_andata', 0);
            $table->dateTime('giorno_partenza_ritorno', 0);
            $table->time('orario_partenza_ritorno', 0);
            $table->integer('prezzo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('travels', function (Blueprint $table) {
            //
        });
    }
}
