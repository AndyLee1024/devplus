<?php
 
        
        class ArticleContent extends Eloquent{
        	protected $table = 'article_content';
        	protected $primaryKey = 'article_id';
        	protected $softDelete = false;
        	public  $timestamps = FALSE;
        	protected $guarded = array();
        }