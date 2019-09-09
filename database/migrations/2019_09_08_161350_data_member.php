<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DataMember extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('data_member', function (Blueprint $table) {
            $table->increments('id_data_member');
            $table->string('nama_lenngkap');
            $table->string('tempat_lahir');
            $table->string('gender');
            $table->text('alamat');
            $table->integer('no_hp');
            $table->string('kelompok')->nullable();
            $table->string('desa')->nullable();
            $table->string('daerah');
            $table->string('ayah')->nullable();
            $table->integer('no_hp_ayah')->nullable();
            $table->string('ibu')->nullable();
            $table->integer('no_hp_ibu')->nullable();
            $table->string('makna');
            $table->string('pendidikan_terakhir');
            $table->string('nama_instansi');
            $table->string('jurusan')->nullable();
            $table->boolean('pernah_mondok')->default(0)->change();
            $table->string('nama_pondok')->nullable();
            $table->boolean('mubaligh')->default(0)->change();
            $table->string('prosentase_quran');
            $table->string('prosentase_hadis');
            $table->string('alasan');
            $table->string('harapan');
            $table->integer('user_id')->unsigned()->nullable();
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
        Schema::drop('data_member');

    }
}
