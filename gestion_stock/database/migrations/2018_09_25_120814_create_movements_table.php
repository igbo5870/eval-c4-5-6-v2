<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovementsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('movements', function (Blueprint $table) {
            $table->increments('id');
            $table->foreign('article_id')->references('id')->on('articles');
            $table->decimal('quantity');
            $table->timestamp('date_time');
            $table->foreign('movement_type_id')->refrences('id')->on('movement_type');
            $table->foreign('purchase_id')->references('id')->on('purchase');
            $table->foreign('sale_id')->references('id')->on('sales');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('movements');
    }
}
