<?php
     
        
        class ArticleTag extends Eloquent{
        	protected $table = 'article_tag';
        	protected $primaryKey = 'tag_id';
        	protected $softDelete = true;
        	protected $guarded = array();
        }