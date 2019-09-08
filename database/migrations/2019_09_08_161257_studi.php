<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Studi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studi', function (Blueprint $table) {
            $table->increments('id_studi');
			$table->integer('kelas_id')->unsigned()->nullable();
			$table->integer('mapel_id')->unsigned()->nullable();
			$table->integer('teacher_id')->unsigned()->nullable();
            $table->foreign('kelas_id')->references('id_kelas')->on('kelas')->onDelete('cascade');
			$table->foreign('mapel_id')->references('id_mapel')->on('mapel')->onDelete('cascade');
			$table->foreign('teacher_id')->references('id_teacher')->on('teacher')->onDelete('cascade');
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
        Schema::drop('studi');
	}
}
