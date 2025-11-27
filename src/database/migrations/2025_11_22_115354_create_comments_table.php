<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('item_id')->refences('item_id')->on('items')->onDelete('cascade');
            $table->foreignId('user_id')->refences('id')->on('users')->onDelete('cascade');
            $table->string('user_name')->refences('user_name')->on('users')->onDelete('cascade');
            $table->string('user_image')->refences('user_image')->on('users')->onDelete('cascade')->nullable();
            $table->text('comment');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
