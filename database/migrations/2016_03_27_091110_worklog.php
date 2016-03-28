<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Worklog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('worklog', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('log_date');
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
        Schema::table('worklog', function (Blueprint $table) {
            Schema::drop('worklog');
        });
    }
}
