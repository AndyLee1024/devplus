<?php
    
	class ArticleCategory extends Eloquent
	{
		  protected $table = 'article_category';
		  protected $primaryKey = 'category_id';
		  protected $softDelete = true;
		  protected $guarded = array();
	}