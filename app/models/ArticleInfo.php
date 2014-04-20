<?php
   
        
        class ArticleInfo extends Eloquent{
        	protected $table = 'article_info';
        	protected $primaryKey = 'article_id';
        	protected $softDelete = false;
        	protected $guarded = array();
        }