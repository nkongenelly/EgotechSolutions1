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
            $table->double('start_time',8,2);
            $table->double('end_time',8,2);
            $table->string('time_period');
            $table->boolean('canMove');
            $table->boolean('canResize');
            $table->boolean('canChangeGroup');
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
