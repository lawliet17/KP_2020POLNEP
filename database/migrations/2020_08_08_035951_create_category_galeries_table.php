<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryGaleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_galleries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('choice_id');
            $table->unsignedBigInteger('gallery_id');
            $table->timestamps();

            $table->foreign('choice_id')->references('id')->on('choices')->onDelete('cascade');
            $table->foreign('gallery_id')->references('id')->on('galleries')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_galeries');
    }
}
