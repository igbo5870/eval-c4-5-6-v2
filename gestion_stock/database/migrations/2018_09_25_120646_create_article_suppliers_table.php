<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('article_suppliers', function (Blueprint $table) {
            $table->increments('id');
            $table->foreign('article_id')->references('id')->on('articles');
            $table->foreign('supplier_id')->references('id')->on('suppliers');
            $table->decimal('purchase_price', 8, 2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('article_suppliers');
    }
}
