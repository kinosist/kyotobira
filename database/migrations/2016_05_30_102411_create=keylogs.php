<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create=keylogs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
       Schema::connection('user_data')->create('keylogsx', function($table){
        $table->increments('id');
        $table->string('keyname'); //名前
        $table->string('keyid'); //鍵ID
        $table->string('userid'); //
        $table->string('username'); //
        $table->string('place'); //
        $table->string('regdate'); //
        $table->string('upddate'); //
        $table->string('reg_person'); //
        $table->string('upd_person'); //
        $table->string('delete'); //
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
    }
}
