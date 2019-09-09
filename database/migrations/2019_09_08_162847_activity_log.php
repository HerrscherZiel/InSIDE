<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ActivityLog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activitylog', function (Blueprint $table) {
            $table->increments('id_activitylog');
            $table->date('tgl');
			$table->time('jam');
			$table->text('detail');
            $table->text('note');
            $table->text('izin');
			$table->integer('teacher_id')->unsigned()->nullable();
			$table->integer('kelas_id')->unsigned()->nullable();
            $table->foreign('teacher_id')->references('id_teacher')->on('teacher')->onDelete('cascade');
			$table->foreign('kelas_id')->references('id_kelas')->on('kelas')->onDelete('cascade');
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
        Schema::drop('activitylog');
    }
}
