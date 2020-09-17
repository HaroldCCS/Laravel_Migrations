<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelationships extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rentals', function (Blueprint $table) {

            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade');
            $table->foreign('status_id')->references('id')->on('statuses')->onUpdate('cascade');
            
        });
        

        Schema::table('users', function (Blueprint $table) {

            $table->foreign('role_id')->references('id')->on('roles')->onUpdate('cascade');
            $table->foreign('status_id')->references('id')->on('statuses')->onUpdate('cascade');
            
        });

        Schema::table('roles', function (Blueprint $table) {
            $table->foreign('status_id')->references('id')->on('statuses')->onUpdate('cascade');
        });

        Schema::table('movies', function (Blueprint $table) {

            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade');
            $table->foreign('status_id')->references('id')->on('statuses')->onUpdate('cascade');
            
        });

        Schema::table('statuses', function (Blueprint $table) {

            $table->foreign('type_status_id')->references('id')->on('type_statuses')->onUpdate('cascade');
            
        });
        Schema::table('categories', function (Blueprint $table){
            $table->foreign('status_id')->references('id')->on('statuses')->onUpdate('cascade');
        });
        Schema::table('category_movie', function (Blueprint $table){
            $table->foreign('movie_id')->references('id')->on('movies')->onUpdate('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onUpdate('cascade');
        });
        Schema::table('movie_rental', function (Blueprint $table){
            $table->foreign('movie_id')->references('id')->on('movies')->onUpdate('cascade');
            $table->foreign('rental_id')->references('id')->on('rentals')->onUpdate('cascade');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rentals', function ($table) {
            $table->dropForeign(['status_id']);
            $table->dropForeign(['user_id']);
        });
        

        Schema::table('users', function ($table) {
            $table->dropForeign(['status_id']);
            $table->dropForeign(['role_id']);
        });

        Schema::table('roles', function ($table) {
            $table->dropForeign(['status_id']);
        });

        Schema::table('movies', function ($table) {
            $table->dropForeign(['status_id']);
            $table->dropForeign(['user_id']);
            
        });

        Schema::table('statuses', function ($table) {
            $table->dropForeign(['type_status_id']);
            
        });
        Schema::table('categories', function ($table){
            $table->dropForeign(['status_id']);
        });
        Schema::table('category_movie', function ($table){
            $table->dropForeign(['movie_id']);
            $table->dropForeign(['category_id']);
        });
        Schema::table('movie_rental', function ($table){
            $table->dropForeign(['movie_id']);
            $table->dropForeign(['rental_id']);
        });

    }
}
