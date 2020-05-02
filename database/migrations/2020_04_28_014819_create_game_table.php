<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGameTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
    Schema :: create('game', function (Blueprint $table){

            $table-> increments ('id');
            $table-> string ('name');
            $table-> string ('image_url');
            $table->longText('description');
            $table-> double ('price');
            $table->string('trailer_url');


            $table-> unsignedInteger('fk_id_category');
            $table-> foreign('fk_id_category')-> references('id')->on('category');

            $table-> unsignedInteger('fk_id_user');
            $table-> foreign('fk_id_user')-> references('id')->on('user');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('game');
    }
}
