<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimelineGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timeline_groups', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parent');
            $table->string('title');
            $table->timestamps();
        });
        DB::table('timeline_groups')->insert(array(
            ['parent'=>0,'title'=>'Microsoft App Factory'],
            ['parent'=>0,'title'=>'Javascript Basics'],
            ['parent'=>0,'title'=>'Hospital System'],
            ['parent'=>0,'title'=>'Mawingu Issue Ticketting'],
            ['parent'=>0,'title'=>'Project Acquisition'],
            ['parent'=>0,'title'=>'Ecommerce'],
            ['parent'=>0,'title'=>'Ecommerce-React'],
            ['parent'=>0,'title'=>'Sacco'],
            ['parent'=>0,'title'=>'Personal'],
            ['parent'=>10,'title'=>'Jarabu Tours $ Travel'],
            ['parent'=>10,'title'=>'Mkate Poa'],
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('timeline_groups');
    }
}
