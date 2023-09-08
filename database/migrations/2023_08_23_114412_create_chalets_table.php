<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChaletsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chalets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->float('price');
            $table->string('image')->nullable();
            $table->string('title');
            $table->string('description');
            $table->foreignId('country_id')->nullable();
            $table->foreign('country_id')->on('countries')->references('id')->cascadeOnDelete();
            $table->foreignId('city_id')->nullable();
            $table->foreign('city_id')->on('cities')->references('id')->cascadeOnDelete();
            $table->foreignId('imge_id')->nullable();
            $table->foreign('imge_id')->on('imges')->references('id')->cascadeOnDelete();
            $table->foreignId('sub_category_id')->nullable();
            $table->foreign('sub_category_id')->on('sub_category')->references('id')->cascadeOnDelete();
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
        Schema::dropIfExists('chalets');
    }
}
