<?php

use Illuminate\Database\Migrations\Migration;

class CreateArticleInfo extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('article_info', function($table)
		{
			$table->bigIncrements('article_id');
			$table->string('article_guid',36);
			$table->string('title',100);
			$table->string('title_color',7);
			$table->integer('category');
			$table->string('description',255);
			$table->string('author',20);
			$table->integer('origin');
			$table->integer('views');
			$table->integer('comments');
			$table->integer('favourites');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('state');
			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('article_info');
	}

}