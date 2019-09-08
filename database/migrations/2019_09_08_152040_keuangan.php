<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Keuangan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('keuangan', function (Blueprint $table) {
            $table->increments('id_keuangan');
			$table->date('tgl');
            $table->string('uraian');
            $table->float('kredit');
            $table->float('debet');
            $table->float('saldo');
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
        Schema::drop('keuangan');
}
