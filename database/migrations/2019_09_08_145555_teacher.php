<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Teacher extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('teacher', function (Blueprint $table) {
            $table->increments('id_teacher');
            $table->string('nama_teacher');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->text('alamat');
            $table->string('kelompok')->nullable();
            $table->string('desa')->nullable();
            $table->string('daerah');
            $table->integer('no_telp');
            $table->string('pekerjaan')->nullable();
            $table->string('instansi')->nullable();
            $table->string('instagram')->nullable();
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
        Schema::drop('teacher');

    }
}
