<?php

use Illuminate\Database\Migrations\Migration;

class CreateArticleCategory extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('article_category',function($table){
			$table->increments('category_id');
			$table->string('guid',36);
			$table->string('category_name',24);
			$table->string('category_description',255);
			$table->integer('level');
			$table->integer('order');
			$table->string('color', 12);
			$table->timestamps();
			$table->softDeletes();
			$table->integer('state')->default(0);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::dropIfExists('article_category');
	}

}