<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id('item_id');
            $table->integer('id')->references('id')->on('users')->onDelete('cascade')->nullable();
            $table->string('item_name')->nullable();
            $table->string('item_image')->nullable();
            $table->string('brand')->nullable();
            $table->bigInteger('price')->nullable();
            $table->string('status')->nullable();
            $table->string('description')->nullable();
            $table->text('comment')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
