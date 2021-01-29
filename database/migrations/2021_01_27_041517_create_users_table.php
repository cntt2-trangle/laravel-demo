<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->integer('country_id')->unsigned()->nullable();
            $table->foreign('country_id')
                  ->references('id')
                  ->on('countries')
                  ->onDelete('cascade');

            $table->boolean('gender')->nullable();
            $table->integer('community_id')->unsigned()->nullable();
            $table->foreign('community_id')
                  ->references('id')
                  ->on('communities')
                  ->onDelete('cascade');

            $table->integer('expertise_id')->unsigned()->nullable();
            $table->foreign('expertise_id')
                  ->references('id')
                  ->on('expertises')
                  ->onDelete('cascade');

            $table->integer('business_type_id')->unsigned()->nullable();
            $table->foreign('business_type_id')
                  ->references('id')
                  ->on('business_types')
                  ->onDelete('cascade');     

            $table->text('seek')->nullable();
            $table->text('introduction')->nullable();

            $table->integer('workplace_id')->unsigned()->nullable();
            $table->foreign('workplace_id')
                  ->references('id')
                  ->on('workplaces')
                  ->onDelete('cascade');
            $table->string('password');
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
        Schema::dropIfExists('users');
    }
}
