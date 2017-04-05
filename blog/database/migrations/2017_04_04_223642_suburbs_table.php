<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SuburbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('suburbs', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name');
        $table->string('address');
        $table->integer('bedrooms');
        $table->integer('bathrooms');
        $table->integer('price');
        $table->integer('distance');
        $table->integer('petfee');
        $table->boolean('shortterm');
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
        Schema::dropIfExists('suburbs');
    }
}
