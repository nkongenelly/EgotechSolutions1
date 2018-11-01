<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimelinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timelines', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('group_id');
            $table->string('title');
            $table->date('start_time');
            $table->date('end_time');
            $table->string('time_period');
            $table->string('canMove');
            $table->string('canResize');
            $table->string('canChangeGroup');
            $table->string('className');
            $table->string('backGroundColor');
            $table->string('githubAccount');
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
        Schema::dropIfExists('timelines');
    }
}
