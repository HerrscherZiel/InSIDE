<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EventKalender extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('eventkalender', function (Blueprint $table) {
            $table->increments('id_eventkalender');
			$table->string('nama_event');
            $table->date('tgl_mulai');
            $table->date('tgl_selesai');
            $table->string('warna');
			$table->integer('kalender_id')->unsigned()->nullable();
            $table->foreign('kalender_id')->references('id_kalender')->on('kalender')->onDelete('cascade');
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
        //
        Schema::drop('eventkalender');
	}
}
