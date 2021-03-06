<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopicLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topic_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tenant_id')->unsigned()->nullable();
            $table->integer('user_id')->unsigned()->nullable();
            $table->integer('topic_id')->unsigned()->nullable();
            $table->string('topic_name')->nullable();
            $table->integer('group_id')->unsigned()->nullable();
            $table->string('group_title')->nullable(); 
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
        Schema::dropIfExists('topic_logs');
    }
}
