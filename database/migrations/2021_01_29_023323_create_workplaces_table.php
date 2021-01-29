<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkplacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workplaces', function (Blueprint $table) {
            $table->increments('id');
            $table->text('image');
            $table->string('name');
            $table->float('price');
            $table->text('overview');
            $table->integer('location_id')->unsigned()->nullable();
            $table->foreign('location_id')
                  ->references('id')
                  ->on('locations')
                  ->onDelete('cascade');
            $table->string('phone');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('workplaces');
    }
}
