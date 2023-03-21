<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tree__details', function (Blueprint $table) {
            $table->id();
            $table->boolean('emergency');
            $table->boolean('going_coming');
            $table->string('icon');
            $table->string('name');
            $table->string('order');
            $table->string('parentId')->nullable();
            $table->string('priority');
            $table->string('slug');
            $table->boolean('leaf');

            $table->unsignedBigInteger('tree_id');
            $table->foreign('tree_id')->references('id')->on('trees');

            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');

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
        Schema::dropIfExists('tree__details');
    }
};
