<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Worklogsessions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('worklogsessions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('worklog_project_id');
            $table->string('task_detail');
            $table->time('startime');
            $table->time('endtime');
            $table->integer('time_worked');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('worklogsessions', function (Blueprint $table) {
            Schema::drop('worklogsessions');
        });
    }
}
