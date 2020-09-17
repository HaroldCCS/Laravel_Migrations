<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovieRentalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie_rental', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('movie_id')->unsigned();
            $table->integer('rental_id')->unsigned();
            $table->decimal('price',7,2);
            $table->string('observations',100);
            $table->primary(['id','movie_id','rental_id']);
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movie_rental');
    }
}
