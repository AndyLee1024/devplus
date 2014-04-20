<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateArticleTag extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('article_tag', function($table)
		{ 
		    $table->bigIncrements('tag_id');
		    $table->string('guid',36)->unique();
		    $table->string('tag_name',22);
		    $table->integer('tag_used_count');
		    $table->timestamps();
		    $table->softDeletes(); 
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
		Schema::dropIfExists('article_tag');
	}

}