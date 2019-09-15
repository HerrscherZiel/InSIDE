<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStatusOnUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('users', function($table){
//            $table->integer('status')->after('module_id')->nullable();
            $table->string('api_token', 80)->after('password')
                ->unique()
                ->nullable()
                ->default(null);
            $table->integer('status')->unsigned()->nullable();
            $table->foreign('status')->references('id_status')->on('status')->onDelete('cascade');
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
        Schema::table('users', function($table){
            $table->dropColumn('status');
        });
    }
}
