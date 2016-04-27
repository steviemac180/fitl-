<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompetencysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competencys', function (Blueprint $table) {
            $table->increments('id');
            $table->string('staff');
            $table->string('assay');
            $table->string('type');
            $table->string('signed');
            $table->string('completed');
            $table->string('review_due');
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
        Schema::drop('competencys');
    }
}
