<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AnggotaKelas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('anggota_kelas', function (Blueprint $table) {
            $table->increments('id_anggota_kelas');
            $table->integer('kelas_id')->unsigned()->nullable();
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('kelas_id')->references('id_kelas')->on('kelas')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::drop('anggota_kelas');

    }
}
