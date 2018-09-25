<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovementTypesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('movement_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50);
            $table->foreign('direction_id')->references('id')->on('direction');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('movement_types');
    }
}
