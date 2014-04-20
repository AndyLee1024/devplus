<?php
/**
 * @name ArticleTagList  
 * @author AndyLee <leefongyun@gmail.com>
 */
class ArticleTagList extends Eloquent {
	protected $table = 'article_tag_list';
	protected $softDelete = true;
	protected $guarded = array ();
	public function getTagname() {
		return $this->hasOne ( "ArticleTag" );
	}
}