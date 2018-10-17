<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypeCarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_car', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('type')->nullable();
            $table->foreign('type')->references('id')->on('types');
            $table->integer('car')->nullable();
            $table->foreign('car')->references('id')->on('caracteristics');
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
        Schema::dropIfExists('type_car');
    }
}
