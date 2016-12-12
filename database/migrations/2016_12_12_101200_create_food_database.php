<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFoodDatabase extends Migration {

        /**
         * Run the migrations.
         *
         * @return void
         */
         public function up()
         {
            
	    /**
	     * Table: food_caipu_category
	     */
	    Schema::create('food_caipu_category', function(Blueprint $table) {
                $table->increments('cate_id')->unsigned();
                $table->string('cate_name', 50)->nullable();
                $table->string('cate_title', 255)->nullable();
                $table->string('cate_keywords', 255)->nullable();
                $table->string('cate_description', 255)->nullable();
                $table->integer('cate_order')->nullable();
                $table->integer('cate_pid')->nullable();
                $table->integer('cate_view')->nullable();
            });


	    /**
	     * Table: food_cookbook
	     */
	    Schema::create('food_cookbook', function(Blueprint $table) {
                $table->increments('cb_id');
                $table->string('cb_name', 255)->nullable();
                $table->text('cb_description')->nullable();
                $table->string('cb_img', 255)->nullable();
                $table->string('cb_difficult', 50)->nullable();
                $table->string('cb_time', 50)->nullable();
                $table->string('cb_zhuliao', 50)->nullable();
                $table->string('cb_zhuliaovalue', 50)->nullable();
                $table->string('cb_fuliao', 50)->nullable();
                $table->string('cb_fuliaovalue', 50)->nullable();
                $table->string('cb_buzhou_img', 255)->nullable();
                $table->text('cb_buzhou')->nullable();
                $table->text('cb_tips')->nullable();
                $table->string('cb_tag', 50)->nullable();
            });


	    /**
	     * Table: food_shicai_category
	     */
	    Schema::create('food_shicai_category', function(Blueprint $table) {
                $table->increments('cate_id');
                $table->string('cate_name', 50)->nullable();
                $table->string('cate_title', 255)->nullable();
                $table->string('cate_keywords', 255)->nullable();
                $table->string('cate_description', 255)->nullable();
                $table->integer('cate_order')->nullable();
                $table->integer('cate_pid')->nullable();
                $table->integer('cate_view')->nullable();
                $table->string('cate_thumb', 255)->nullable();
            });


	    /**
	     * Table: food_user
	     */
	    Schema::create('food_user', function(Blueprint $table) {
                $table->increments('user_id');
                $table->string('username', 50)->nullable();
                $table->string('password', 255)->nullable();
            });


         }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
         public function down()
         {
            
	            Schema::drop('food_caipu_category');
	            Schema::drop('food_cookbook');
	            Schema::drop('food_shicai_category');
	            Schema::drop('food_user');
         }

}